<?php

$cminds_plugin_config = array(
	'plugin-is-pro'				 => FALSE,
	'plugin-is-addon'			 => FALSE,
	'plugin-version'			 => '1.7.12',
	'plugin-abbrev'				 => 'cmac',
	'plugin-file'				 => CMAC_PLUGIN_FILE,
  'plugin-affiliate'               => '',
  'plugin-redirect-after-install'  => admin_url( 'admin.php?page=cmac_settings' ),
       'plugin-show-guide'                 => TRUE,
     'plugin-guide-text'                 => '    <div style="display:block">
        <ol>
         <li>Go to the plugin <strong>"Campaigns"</strong> in the admin dashboard left menu</li>
         <li>Add your first campaign. </li>
         <li>Set a name or add notes to your campaign</li>
        <li>Upload the graphics / banners and define the campaign type.</li>
       <li>Use shortcode with the campaign id and place it on any page or post.</li>
       <li>You can also use the sidebar widget with the campaign id.</li>
       <li>You can also use the shortcode in your template code using WordPress php command do_shortcode.</li>
         </ol>
    </div>',
     'plugin-guide-video-height'         => 240,
     'plugin-guide-videos'               => array(
          array( 'title' => 'Installation tutorial', 'video_id' => '162714908' ),
     ),
        'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Mobile device and responsive support', 'video_time' => '0:50' ),
        array( 'title' => 'Banner variations', 'video_time' => '1:25' ),
        array( 'title' => 'AdSense campaing support', 'video_time' => '2:00' ),
        array( 'title' => 'Video campaing support', 'video_time' => '2:28' ),
        array( 'title' => 'Campaing groups', 'video_time' => '3:15' ),
        array( 'title' => 'Testing your campaings', 'video_time' => '4:07' ),
        array( 'title' => 'Reports and statistics' , 'video_time' => 'More'),
        array( 'title' => 'HTML banners' , 'video_time' => 'More'),
        array( 'title' => 'Customer dashboard support...' , 'video_time' => 'More'),
      ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Download Manager Premium Features', 'video_id' => '112134428' ),
    ),

	'plugin-dir-path'			 => plugin_dir_path( CMAC_PLUGIN_FILE ),
	'plugin-dir-url'			 => plugin_dir_url( CMAC_PLUGIN_FILE ),
	'plugin-basename'			 => plugin_basename( CMAC_PLUGIN_FILE ),
	'plugin-icon'				 => '',
	'plugin-name'				 => CMAC_LICENSE_NAME,
	'plugin-license-name'		 => CMAC_LICENSE_NAME,
	'plugin-slug'				 => '',
	'plugin-short-slug'			 => 'ad-changer',
	'plugin-menu-item'			 => CMAC_MENU_OPTION,
	'plugin-textdomain'			 => CMAC_SLUG_NAME,
	'plugin-userguide-key'		 => '174-cm-ad-changer-cmac',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/adchanger/',
	'plugin-support-url'		 => 'https://wordpress.org/support/plugin/cm-ad-changer',
	'plugin-review-url'			 => 'https://wordpress.org/support/view/plugin-reviews/cm-ad-changer',
	'plugin-changelog-url'		 => CMAC_RELEASE_NOTES,
	'plugin-licensing-aliases'	 => array( 'CM Ad Changer Pro', 'CM Ad Changer Pro Special' ),
	'plugin-compare-table'	 => '
             <div class="pricing-table" id="pricing-table"><h2 style="padding-left:10px;">Upgrade Ad Changer Server Plugin:</h2>
                <ul>
                    <li class="heading" style="background-color:red;">Current Edition</li>
                    <li class="price">FREE<br /></li>
                 	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Unlimited advertising Campaigns</li>
                    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Unlimited Images per Campaign</li>
                   <hr>
                    Other CreativeMinds Offerings
                    <hr>
                 <a href="https://www.cminds.com/wordpress-plugins-library/seo-keyword-hound-wordpress/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/Hound2.png"  width="220"></a><br><br><br>
                <a href="https://www.cminds.com/store/cm-wordpress-plugins-yearly-membership/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/banner_yearly-membership_220px.png"  width="220"></a><br>
                    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Basic Shortcode Support</li>
                 </ul>

                <ul>
                   <li class="heading">Pro<a href="https://www.cminds.com/wordpress-plugins-library/adchanger/" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
                    <li class="price">$39.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/adchanger/" target="_blank"> >>> </a></span> <br /></li>
                    <li class="action"><a href="https://www.cminds.com/downloads/cm-ad-changer-pro/?edd_action=add_to_cart&download_id=3897&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=0" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
                     <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free features are supported in the pro"></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Extended Shortcodes
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Integrate ads on every page or post using a shortcode."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
AdSense Campaigns
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Earn passive income by integrating with existing Google AdSense campaigns."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Advertiser Categories
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Organize banners into ad groups and advertiser categories."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Campaigns Dashboard
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Manage all ads and campaigns from a single dashboard for your convenience."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Campaign Groups
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Group several campaigns into one allowing you to rotate them on the same Ad spot."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Campaign Notifications
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Notifies administrators when ad banner campaigns pause."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Clicks &amp; Impressions
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Track and restrict banner campaigns according to number of clicks or impressions."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Cloud Storage
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Cloud storage for serving banners from any cloud storage like Amazon S3."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Customize CSS
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Customize the CSS style of each banner with div to minimize stretching."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Date &amp; Time
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Schedule ad campaigns to run on specific days and at specific times."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Fly In
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Run Fly In based Ads that are triggered by scrolling and page load."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
HTML Campaigns
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Run HTML / Text based banner campaigns."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Logs &amp; Statistics
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Shows detailed logs and statistics for number of impressions, clicks and server load."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Pop Up
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Create engaging Pop Up based Ads that are triggered by scrolling and page load."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Preview Campaigns
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Preview banner ad campaigns before running them."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Random Banners
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Generates random banners and manages their appearance once displayed."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Remote WordPress Client Plugin
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Remote WordPress site plugin connects any WordPress site to the Ad-Changer Server plugin to run and manage several campaigns."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Responsive Banners
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Banners resize responsively according to mobile device, browser or tablet."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Rotating Banners
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Features rotating banners that switch appearance once displayed."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Server Plugin
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="One server site can support several ad campaigns that run on multiple sites at the same time."></span></li>

<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>
Video Campaigns
<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Run Video based Ads using iframes from video sharing sites like Google and Vimeo."></span></li>
 


                  <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
                 </ul>

            </div>',
);