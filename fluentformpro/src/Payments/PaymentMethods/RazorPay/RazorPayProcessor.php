<?php

namespace FluentFormPro\Payments\PaymentMethods\RazorPay;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

use FluentForm\App\Helpers\Helper;
use FluentForm\Framework\Helpers\ArrayHelper;
use FluentFormPro\Payments\PaymentHelper;
use FluentFormPro\Payments\PaymentMethods\BaseProcessor;

class RazorPayProcessor extends BaseProcessor
{
    public $method = 'razorpay';

    protected $form;

    public function init()
    {
        add_action('fluentform_process_payment_' . $this->method, array($this, 'handlePaymentAction'), 10, 4);
        add_action('fluent_payment_frameless_' . $this->method, array($this, 'handleSessionRedirectBack'));

        add_action('fluent_payment_frameless_' . $this->method, array($this, 'handleSessionRedirectBack'));

        add_action('fluentform_ipn_mollie_action_paid', array($this, 'handlePaid'), 10, 2);
        add_action('fluentform_ipn_mollie_action_refunded', array($this, 'handleRefund'), 10, 3);
    }

    public function handlePaymentAction($submissionId, $submissionData, $form, $methodSettings)
    {
        $this->setSubmissionId($submissionId);
        $this->form = $form;
        $submission = $this->getSubmission();

        $uniqueHash = md5($submission->id . '-' . $form->id . '-' . time() . '-' . mt_rand(100, 999));

        $transactionId = $this->insertTransaction([
            'transaction_type' => 'onetime',
            'transaction_hash' => $uniqueHash,
            'payment_total'    => $this->getAmountTotal(),
            'status'           => 'pending',
            'currency'         => PaymentHelper::getFormCurrency($form->id),
            'payment_mode'     => $this->getPaymentMode()
        ]);

        $transaction = $this->getTransaction($transactionId);

        $this->handleRedirect($transaction, $submission, $form, $methodSettings);
    }

    public function handleRedirect($transaction, $submission, $form, $methodSettings)
    {
        $globalSettings = RazorPaySettings::getSettings();
        $successUrl = add_query_arg(array(
            'fluentform_payment' => $submission->id,
            'payment_method'     => $this->method,
            'transaction_hash'   => $transaction->transaction_hash,
            'type'               => 'success'
        ), site_url('/'));

        $paymentArgs = array(
            'amount'       => intval($transaction->payment_total),
            'currency'     => $transaction->currency,
            'description'  => $form->title,
            'reference_id' => $transaction->transaction_hash,
            'customer'     => [
                'email' => PaymentHelper::getCustomerEmail($submission)
            ],
            'callback_url'  => $successUrl,
            'notes'        => [
                'form_id'       => $form->id,
                'submission_id' => $submission->id
            ],
            'callback_method' => 'get',
            'notify' => [
                'email' => in_array('email', $globalSettings['notifications']),
                'sms' => in_array('sms', $globalSettings['notifications']),
            ]
        );

        $paymentArgs = apply_filters('fluentform_razorpay_payment_args', $paymentArgs, $submission, $transaction, $form);
        $paymentIntent = (new Api())->makeApiCall('payment_links', $paymentArgs, $form->id, 'POST');

        if (is_wp_error($paymentIntent)) {
            do_action('ff_log_data', [
                'parent_source_id' => $submission->form_id,
                'source_type'      => 'submission_item',
                'source_id'        => $submission->id,
                'component'        => 'Payment',
                'status'           => 'error',
                'title'            => 'Mollie Payment Redirect Error',
                'description'      => $paymentIntent->get_error_message()
            ]);

            wp_send_json_success([
                'message' => $paymentIntent->get_error_message()
            ], 423);
        }

        Helper::setSubmissionMeta($submission->id, '_razorpay_payment_id', $paymentIntent['id']);

        do_action('ff_log_data', [
            'parent_source_id' => $submission->form_id,
            'source_type'      => 'submission_item',
            'source_id'        => $submission->id,
            'component'        => 'Payment',
            'status'           => 'info',
            'title'            => 'Redirect to Mollie',
            'description'      => 'User redirect to Mollie for completing the payment'
        ]);

        wp_send_json_success([
            'nextAction'   => 'payment',
            'actionName'   => 'normalRedirect',
            'redirect_url' => $paymentIntent['short_url'],
            'message'      => __('You are redirecting to razorpay.com to complete the purchase. Please wait while you are redirecting....', 'fluentformpro'),
            'result'       => [
                'insert_id' => $submission->id
            ]
        ], 200);
    }

    protected function getPaymentMode($formId = false)
    {
        $isLive = RazorPaySettings::isLive($formId);
        if ($isLive) {
            return 'live';
        }
        return 'test';
    }

    public function handleSessionRedirectBack($data)
    {
        $submissionId = intval($data['fluentform_payment']);
        $this->setSubmissionId($submissionId);
        $submission = $this->getSubmission();

        $transactionHash = sanitize_text_field($data['transaction_hash']);
        $transaction = $this->getTransaction($transactionHash, 'transaction_hash');

        if (!$transaction || !$submission || $transaction->payment_method != $this->method) {
            return;
        }

        $payId = ArrayHelper::get($data, 'razorpay_payment_id');
        $payment = (new API())->makeApiCall('payments/'.$payId, [], $submission->form_id);
        $isSuccess = false;

        if(is_wp_error($payment)) {
            $returnData = [
                'insert_id' => $submission->id,
                'title'     => __('Failed to retrieve payment data'),
                'result'    => false,
                'error'     => $payment->get_error_message()
            ];
        } else  {
            $isSuccess = $payment['status'] == 'captured';
            if($isSuccess) {
                $returnData = $this->handlePaid($submission, $transaction, $payment);
            } else {
                $returnData = [
                    'insert_id' => $submission->id,
                    'title'     => __('Failed to retrieve payment data'),
                    'result'    => false,
                    'error'     => __('Looks like you have cancelled the payment. Please try again!', 'fluentformpro')
                ];
            }
        }

        $returnData['type'] = ($isSuccess) ? 'success' : 'failed';

        if (!isset($returnData['is_new'])) {
            $returnData['is_new'] = false;
        }

        $this->showPaymentView($returnData);
    }

    public function handlePaid($submission, $transaction, $vendorTransaction)
    {
        // Check if actions are fired
        if ($this->getMetaData('is_form_action_fired') == 'yes') {
            return $this->completePaymentSubmission(false);
        }

        $status = 'paid';

        // Let's make the payment as paid
        $updateData = [
            'payment_note' => maybe_serialize($vendorTransaction),
            'charge_id'    => sanitize_text_field($vendorTransaction['id']),
            'payer_email' => $vendorTransaction['email']
        ];

        $this->updateTransaction($transaction->id, $updateData);
        $this->changeSubmissionPaymentStatus($status);
        $this->changeTransactionStatus($transaction->id, $status);
        $this->recalculatePaidTotal();
        $returnData = $this->getReturnData();
        $this->setMetaData('is_form_action_fired', 'yes');
        return $returnData;
    }

    public function handleRefund($refundAmount, $submission, $vendorTransaction)
    {
        $this->setSubmissionId($submission->id);
        $transaction = $this->getLastTransaction($submission->id);
        $this->updateRefund($refundAmount, $transaction, $submission, $this->method);
    }
}