<?php

/**
 * Webnus MEC_Sync libs class.
 * @author Webnus <info@webnus.biz>
 */
class MEC_Sync_Libs {

	/**
	 * install required table if not exists
	 * @return void
	 */
	public static function dbinstall() {

		global $wpdb;
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		$charset_collate = $wpdb->get_charset_collate();
		$table = $wpdb->prefix . 'mec_sync';
		$sql = "CREATE TABLE IF NOT EXISTS `{$table}` (
				`id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
				`source_post_id` bigint NOT NULL,
				`blog_id` bigint NOT NULL,
				`destination_post_id` bigint NOT NULL,
				`created_at` datetime NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		dbDelta($sql);

	}

	public function add_addon_section() {
		$addon_info = get_option( MEC_SYNC_OPTIONS );
		$verify = NULL;
		$envato = new License_sync();
		$verify = $envato->get_MEC_info('dl');

		$license_status = '';
		if(!empty($addon_info['purchase_code']) && !is_null($verify))
		{
			$license_status = 'PurchaseSuccess';
		}
		elseif ( !empty($addon_info['purchase_code']) && is_null($verify) )
		{
			$license_status = 'PurchaseError';
		}

		$one_license =  $appsumo =  $product_license = '';
		if(!empty($addon_info) && isset($addon_info['product_name']))
		{
			if($addon_info['product_name'] == MEC_SYNC_TEXT_DOMAIN)
			{
				$one_license = 'checked';
			}
			elseif($addon_info['product_name'] == 'appsumo')
			{
				$appsumo = 'checked';
			}

			if($addon_info['product_name'] != '')
			{
				$product_license = $addon_info['purchase_code'];
			}
		}

		echo '
			<style>.box-addon-activation-toggle-head {display: inline-block;}</style>
			<form id="'.MEC_SYNC_TEXT_DOMAIN.'" class="addon-activation-form" action="#" method="post">
				<h3 style="margin-bottom: 20px;">'.esc_html__(MEC_SYNC_ORG_NAME).'</h3>
				<div class="LicenseType">
					<input type="radio" id="'.MEC_SYNC_OPTIONS.'_OneLicense" name="'.MEC_SYNC_OPTIONS.'_MECLicense" value="'.esc_html__(MEC_SYNC_TEXT_DOMAIN).'" class="'.esc_html($one_license).'" />
					<label for="'.MEC_SYNC_OPTIONS.'_OneLicense"><span></span>1 License</label>
					<input type="radio" id="'.MEC_SYNC_OPTIONS.'_Appsumo" value="appsumo" name="'.MEC_SYNC_OPTIONS.'_MECLicense" class="'.esc_html($appsumo).'" />
					<label for="'.MEC_SYNC_OPTIONS.'_Appsumo"><span></span>AppSumo</label>
				</div>
				<div class="LicenseField">
					<input type="password" placeholder="Put your purchase code here" name="MECPurchaseCode" value="'. esc_html($product_license) .'">
					<input type="submit">
					<div class="MECPurchaseStatus '.esc_html($license_status).'"></div>
				</div>
				<div class="MECLicenseMessage"></div>
			</form>
			<script>
			if (jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").length > 0)
			{
				var LicenseType = jQuery("#'.MEC_SYNC_TEXT_DOMAIN.' input.checked[type=radio][name=MECLicense]").val();
				jQuery("#'.MEC_SYNC_TEXT_DOMAIN.' input[type=radio][name='.MEC_SYNC_OPTIONS.'_MECLicense]").change(function () {
					jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find("input").removeClass("checked");
					jQuery(this).addClass("checked");
					LicenseType = jQuery(this).val();
				});

				jQuery("#'.MEC_SYNC_TEXT_DOMAIN.' input[type=submit]").on("click", function(e){
					e.preventDefault();
					jQuery(".wna-spinner-wrap").remove();
					jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECLicenseMessage").text(" ");
					jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECPurchaseStatus").removeClass("PurchaseError");
					jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECPurchaseStatus").removeClass("PurchaseSuccess");
					var PurchaseCode = jQuery("#'.MEC_SYNC_TEXT_DOMAIN.' input[type=password][name=MECPurchaseCode]").val();
					var information = { LicenseTypeJson: LicenseType, PurchaseCodeJson: PurchaseCode };
					jQuery.ajax({
						url: mec_admin_localize.ajax_url,
						type: "POST",
						data: {
							action: "activate_Addons_Integration",
							nonce: mec_admin_localize.ajax_nonce,
							content: information,
						},
						beforeSend: function () {
							jQuery("#'.MEC_SYNC_TEXT_DOMAIN.' .LicenseField").append("<div class=\"wna-spinner-wrap\"><div class=\"wna-spinner\"><div class=\"double-bounce1\"></div><div class=\"double-bounce2\"></div></div></div>");
						},
						success: function (response) {
							if (response == "success")
							{
								jQuery(".wna-spinner-wrap").remove();
								jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECPurchaseStatus").addClass("PurchaseSuccess");
							}
							else
							{
								jQuery(".wna-spinner-wrap").remove();
								jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECPurchaseStatus").addClass("PurchaseError");
								jQuery("#'.MEC_SYNC_TEXT_DOMAIN.'").find(".MECLicenseMessage").append(response);
							}
						},
					});
				});
			}
			</script>
		';
	}

	public function activate_Addons_Integration() {
		if(!wp_verify_nonce($_REQUEST['nonce'], 'mec_settings_nonce'))
		{
			exit();
		}

		$options = get_option( MEC_SYNC_OPTIONS );
		$options['purchase_code'] = $_REQUEST['content']['PurchaseCodeJson'];
		$options['product_name'] = $_REQUEST['content']['LicenseTypeJson'];
		update_option( MEC_SYNC_OPTIONS , $options);

		$verify = NULL;

		$envato = new License_sync();
		$verify = $envato->get_MEC_info('dl');

		if(!is_null($verify))
		{
			$LicenseStatus = 'success';
		}
		else
		{
			$LicenseStatus = __('Activation faild. Please check your purchase code or license type.<br><b>Note: Your purchase code should match your licesne type.</b>' , 'mec-single-builder') . '<a style="text-decoration: underline; padding-left: 7px;" href="https://webnus.net/dox/modern-events-calendar/auto-update-issue/" target="_blank">'  . __('Troubleshooting' , 'mec-single-builder') . '</a>';
		}

		echo $LicenseStatus;
		wp_die();
	}


	/**
	 * detect the config is event sync
	 * @return boolean true is event sync
	 */
	public static function is_event_sync() {
		$options = get_option('mec_sync_settings');
		return isset($options['sync_events']) && (int) $options['sync_events'] == 1 ? true : false;
	}

	/**
	 * detect the config is setting sync
	 * @return boolean true is setting sync
	 */
	public static function is_setting_sync() {
		$options = get_option('mec_sync_settings');
		return isset($options['sync_settings']) && (int) $options['sync_settings'] == 1 ? true : false;
	}

	/**
	 * checked the current blog is parent or sub-site
	 * @return boolean true is parent blog
	 */
	public static function is_parent_blog() {

		if (get_current_blog_id() > 1) {
			return false;
		}

		return true;
	}

	public static function sync_sites() {
		$options = get_option('mec_sync_settings');
		$sites = isset($options['sites']) ? $options['sites'] : array();

		$blog_ids = get_sites();

		$ret = array();

		foreach ($blog_ids as $b) {
			if (array_key_exists($b->blog_id, $sites)) {
				array_push($ret, $b);
			}
		}

		return $ret;
	}

	public static function is_synced_post($destination_post_id = null, $source_post_id = null, $field = 'id', $blog_id = null) {
		global $wpdb;

		if ($blog_id == null) {
			$blog_id = get_current_blog_id();
		}

		$where = null;

		if ($destination_post_id != null) {
			$where = " AND destination_post_id=$destination_post_id ";
		} else if ($source_post_id != null) {
			$where = " AND source_post_id=$source_post_id ";
		}

		$sql = "SELECT {$field} FROM {$wpdb->base_prefix}mec_sync WHERE blog_id=$blog_id {$where} LIMIT 1";
		return $wpdb->get_var($sql);
	}

	public static function attach_file($source_post_id, $destination_post_id, $attached_post_id, $source_upload_dir = null) {

		$upload_dir = wp_upload_dir();

		$post_attachments = get_children( [
			'post_parent' => $destination_post_id
		]);

		foreach ($post_attachments as $attachment) {
			wp_delete_attachment($attachment->ID, true);
		}

		global $wpdb;
		$sql = "SELECT * FROM {$wpdb->base_prefix}posts WHERE ID={$attached_post_id} LIMIT 1";
		$post = $wpdb->get_row($sql);

		$sql = "SELECT meta_value,meta_key FROM {$wpdb->base_prefix}postmeta WHERE post_id={$attached_post_id}";
		$rows = $wpdb->get_results($sql);
		$file = null;
		$description = null;

		foreach ($rows as $k => $v) {
			if ($v->meta_key == '_wp_attached_file') {
				$file = $v->meta_value;
			}

			if ($v->meta_key == '_wp_attachment_metadata') {
				$description = $v->meta_value;
			}
		}

		$full = $source_upload_dir['basedir'] . '/' . $file;
		$basename = basename($file);

		$path = $upload_dir['path'];
		if (!file_exists($path)) {
			mkdir($path, 0755, true);
		}

		$url = $upload_dir['url'] . '/' . $basename;
		$saved_path = $upload_dir['subdir'] . '/' . $basename;

		$dest = $path . '/' . $basename;
		if (file_exists($full) && !file_exists($dest)) {
			copy($full, $dest);
		}

		$attachment = array(
			'guid' => $url,
			'post_mime_type' => $post->post_mime_type,
			'post_title' => $post->post_title,
			'post_content' => '',
			'post_status' => $post->post_status,
		);

		$attach_id = wp_insert_attachment($attachment, $saved_path, $destination_post_id);

		foreach (array('_wp_attached_file' => $saved_path, '_wp_attachment_metadata' => $description) as $k => $v) {
			if (!add_post_meta($attach_id, $k, $v, true)) {
				update_post_meta($attach_id, $k, $v);
			}
		}
		foreach ($rows as $meta) {
			if($meta->meta_key == '_wp_attachment_metadata') continue;
			if($meta->meta_key == '_wp_attached_file') continue;
			update_post_meta( $attach_id, $meta->meta_key, $meta->meta_value );
		}

		set_post_thumbnail($destination_post_id, $attach_id);
	}

		/**
	 * saved sync to database. on the update detected synced last post id
	 * @author Webnus <info@webnus.biz>
	 * @param  integer $source_post_id      parent blog event post_id
	 * @param  integer $blog_id             sub-blog id
	 * @param  integer $destination_post_id sub-blog event post_id
	 * @return void
	 */
	public static function register_synced($source_post_id, $blog_id, $destination_post_id) {
		global $wpdb;
		$wpdb->delete(
			"{$wpdb->base_prefix}mec_sync",
			array(
				'source_post_id' => $source_post_id,
				'blog_id' => $blog_id,
			)
		);
		$wpdb->insert(
			"{$wpdb->base_prefix}mec_sync",
			array(
				'source_post_id' => $source_post_id,
				'blog_id' => $blog_id,
				'destination_post_id' => $destination_post_id,
				'created_at' => current_time('mysql'),
			)
		);
	}

	/**
	 * checking database for event last saved to sub-blogs
	 * @author Webnus <info@webnus.biz>
	 * @param  inreger  $source_post_id parent blog event id
	 * @param  integer  $blog_id        sub blog id
	 * @return string                 NULL when the not found, post_id on the found
	 */
	public static function is_exists($source_post_id, $blog_id) {
		global $wpdb;

		$sql = "SELECT destination_post_id FROM {$wpdb->base_prefix}mec_sync";
		$sql .= " WHERE source_post_id={$source_post_id} AND blog_id={$blog_id} LIMIT 1 ";

		return $wpdb->get_var($sql);

	}

}