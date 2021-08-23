<?php

/*******************************************
 * QuantumCloud Plugin Upgrade Link for Free Plugins
 * Last Updated On: 05-24-2017
 *******************************************/

if( !class_exists('QcPluginUpgradeToProNotice') )
{
	class QcPluginUpgradeToProNotice {
		
		//Public variables, these can be overrides using instance callback

		public $upgrade_link = "https://www.quantumcloud.com";
		public $link_color = "#FCB214";
		public $link_text = "Upgrade to Pro";
		public $link_class = "";
		public $link_target = "_blank";
		
		public $plugin_slug = ""; //Exact plugin folder name
		public $plugin_main_file = ""; //Exact file name with extension of primary file
		public $plugin_menu_slug = ""; //Parent menu slug of the plugin
		
		public $plugin_slug_plus_file = "";

		//Turn on or off the hooks, use false to off
		public $show_with_action_links = true; //in plugin.php page
		public $show_with_meta_links = true; //in plugin.php page
		public $show_with_plugin_menu = true; //inside parent menu of the plugin
		
		//Contructor - Set defaults 
		function __construct()
		{
			
		}



		/*******************************
		 * Check if the current screen
		 * is the plugins.php page or not
		 *******************************/
		function check_if_plugin_page()
		{
			
			//Check if current page is plugins.php, otherwise return false
			global $pagenow;
			
			if( is_admin() && $pagenow == 'plugins.php' )
			{
			  return true;
			}

			return false;

		} //End of check_if_plugin_page
		
		/*******************************
		 * Put Link with Plugin Action Links
		 * Like Active, Edit etc.
		 * Ofcourse, in plugin.php page
		 *******************************/
		function hook_with_plugin_action_links(){
			
			$this->plugin_slug_plus_file = $this->plugin_slug .'/'. $this->plugin_main_file;
			
			if( $this->show_with_action_links && $this->plugin_slug_plus_file != "" )
			{
				add_action( 'plugin_action_links_' . $this->plugin_slug_plus_file, array(&$this, 'func_show_upgrade_link_with_action_links'), 95 );
			}
			else
			{
			  return;
			}
			
		}
		
		/*******************************
		 * Callback function for the above hook
		 * used inside hook_with_plugin_action_links
		 *******************************/
		function func_show_upgrade_link_with_action_links( $links )
		{
			$links = array_merge( $links, array(
					'<a class="'.esc_attr($this->link_class).'" href="' . esc_url( admin_url('edit.php?post_type=pnd&page=sbd_settings') ) . '" title="'.esc_attr("Settings").'" >' . __( 'Settings', 'quantumcloud' ) . '</a>',
					'<a title="'.esc_attr($this->link_text).'" class="'.esc_attr($this->link_class).'" style="font-weight: bold; color: '.esc_attr($this->link_color).';" href="' . esc_url( $this->upgrade_link ) . '" target="'.$this->link_target.'">' . __( $this->link_text, 'quantumcloud' ) . '</a>'
			) );
			
			return $links;
		}
		
		/*******************************
		 * Put Link with Plugin Meta Links
		 * Like Plugin Author, Details, etc.
		 * Ofcourse, in plugin.php page
		 *******************************/
		function hook_with_plugin_meta_links(){
			
			if( $this->show_with_meta_links && $this->plugin_main_file != "" )
			{
				add_action( 'plugin_row_meta', array(&$this, 'func_show_upgrade_link_with_meta_links'), 10, 2 );
			}
			else
			{
			  return;
			}
			
		}
		
		/*******************************
		 * Callback function for the above hook
		 * used inside hook_with_plugin_meta_links
		 *******************************/
		function func_show_upgrade_link_with_meta_links( $links, $file )
		{
			$links = array_merge( array(
				
			), $links );
			
			if ( $file == $this->plugin_slug.'/'.$this->plugin_main_file ) {
			
				$new_links = array(
					'<a class="'.esc_attr($this->link_class).'" style="font-weight: bold; color: '.esc_attr($this->link_color).';" href="' . esc_url( $this->upgrade_link ) . '" title="'.esc_attr($this->link_text).'" target="'.esc_attr($this->link_target).'">' . __( $this->link_text, 'quantumcloud' ) . '</a>'
				);
				
				$links = array_merge( $links, $new_links );
			}
			
			return $links;
		}
		
		/*******************************
		 * Put Link inside WP Admin Menu
		 * Created by the respective plugin
		 *******************************/
		function hook_with_plugin_submenu()
		{
		   if( !$this->show_with_plugin_menu || $this->plugin_menu_slug == "" ){
		     return;
		   }
		   else
		   {
			  add_action( 'admin_menu' , array(&$this, 'func_qc_external_upgrade_link'), 20 );
		   }
		}
		
		/*******************************
		 * Callback function for the avbove function/hook
		 *******************************/
		function func_qc_external_upgrade_link()
		{
		    global $submenu;
			$current_user = wp_get_current_user();
			
			if( !$this->show_with_plugin_menu || $this->plugin_menu_slug == "" )
			{
		     return;
		    }
		   
		    $link_text = '<span class="qc-up-pro-link" style="font-weight: bold; color: '.esc_attr($this->link_color).'">'.esc_html($this->link_text).'</span>';
			if($current_user->roles[0]!='subscriber')
				$submenu["$this->plugin_menu_slug"][300] = array( $link_text, 'activate_plugins' , $this->upgrade_link );
			
			return $submenu;
		}
		
		

	} //End of class QcPluginUpgradeToProNotice

} // End of class_exists


/*******************************
 * Create instance and call the 
 * appropriate worker/callback
 *******************************/
 
$instance_sbdf2 = new QcPluginUpgradeToProNotice();

if( is_admin() )
{ 
	
	//Uncommnent and Set these instance variables as per the requirements

	$instance_sbdf2->upgrade_link = "https://www.quantumcloud.com/products/simple-business-directory/";
	//$instance_sldf2->link_color = "#FCB214";
	//$instance_sldf2->link_text = "Upgrade To Pro";
	//$instance_sldf2->link_class = "";
	//$instance_sldf2->link_target = "_blank";

	$instance_sbdf2->plugin_slug = 'phone-directory'; //Plugin Slug. i.e. Folder Name
	$instance_sbdf2->plugin_main_file = 'qc-op-directory-main.php'; //Primary file of the pluign
	$instance_sbdf2->plugin_menu_slug = 'edit.php?post_type=pnd'; //Main Menu Slug

	$instance_sbdf2->show_with_action_links = true; //show in plugin.php page
	$instance_sbdf2->show_with_meta_links = true; //show in plugin.php page
	$instance_sbdf2->show_with_plugin_menu = true; //show inside parent menu of the plugin

	if( $instance_sbdf2->check_if_plugin_page() )
	{
		$instance_sbdf2->hook_with_plugin_action_links();
		$instance_sbdf2->hook_with_plugin_meta_links();
	}
	
	$instance_sbdf2->hook_with_plugin_submenu();

}

