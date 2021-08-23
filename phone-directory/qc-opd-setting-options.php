<?php

//Setting options page
/*******************************
 * Callback function to add the menu
 *******************************/
function sbd_show_settngs_page_callback_func()
{
	add_submenu_page(
		'edit.php?post_type=pnd',
		'Settings',
		'Settings',
		'manage_options',
		'sbd_settings',
		'qc_sbd_settings_page_callback_func'
	);
	add_action( 'admin_init', 'sbd_register_plugin_settings' );
} //show_settings_page_callback_func
add_action( 'admin_menu', 'sbd_show_settngs_page_callback_func');

function sbd_register_plugin_settings() {
	//register our settings
	//general Section
	register_setting( 'qc-sbd-plugin-settings-group', 'sbd_map_api_key' );
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_enable_top_part' );
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_add_new_button' );
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_add_item_link' );

	//Language Settings
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_lan_add_link' );
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_lan_share_list' );
	//custom css section
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_custom_style' );
	//custom js section
	register_setting( 'qc-sbd-plugin-settings-group', 'pd_custom_js' );
	//help sectio
	
}

function qc_sbd_settings_page_callback_func(){
	
	?>
	<div class="wrap swpm-admin-menu-wrap">
		<h1>SBD Settings Page</h1>
	
		<h2 class="nav-tab-wrapper sbd_nav_container">
			<a class="nav-tab sbd_click_handle nav-tab-active" href="#general_settings">General Settings</a>
			<a class="nav-tab sbd_click_handle" href="#language_settings">Language Settings</a>
			<a class="nav-tab sbd_click_handle" href="#custom_css">Custom Css</a>
			<a class="nav-tab sbd_click_handle" href="#custom_js">Custom Javascript</a>
			<a id="sbd_help_tab" class="nav-tab sbd_click_handle" href="#help">Help</a>
		</h2>
		
		<form method="post" action="options.php">
			<?php settings_fields( 'qc-sbd-plugin-settings-group' ); ?>
			<?php do_settings_sections( 'qc-sbd-plugin-settings-group' ); ?>
			<div id="general_settings">
				<table class="form-table">
				
					<tr valign="top">
						<th scope="row">Google Map API Key</th>
						<td>
							<input type="text" name="sbd_map_api_key" size="100" value="<?php echo esc_attr( get_option('sbd_map_api_key') ); ?>"  />
							<i><span style="color:red">Google Map API key is required for map to work. You can get google map api key from <a href="<?php echo esc_url('https://developers.google.com/maps/documentation/geocoding/get-api-key'); ?>">here</a></span></i>
							<p><span style="color:red">Please check our <a class="pd-help-section-link" href="#help">Help section</a> for how to set up the Google Map API</span></p>
						</td>
					</tr>
				
					<tr valign="top">
						<th scope="row">Enable Top Area</th>
						<td>
							<input type="checkbox" name="pd_enable_top_part" value="on" <?php echo (esc_attr( get_option('pd_enable_top_part') )=='on'?'checked="checked"':''); ?> />
							<i>Top area includes Embed button (more options coming soon)</i>
						</td>
					</tr>

					<tr valign="top">
						<th scope="row">Enable Add New Button</th>
						<td>
							<input type="checkbox" name="pd_add_new_button" value="on" <?php echo (esc_attr( get_option('pd_add_new_button') )=='on'?'checked="checked"':''); ?> />
							<i>The button will link to a page of your choice where you can place a contact form or instructions to submit links to your directory. Links have to be manually added by the admin.</i>
						</td>
					</tr>
					
					<tr valign="top">
						<th scope="row">Add Button Link</th>
						<td>
							<input type="text" name="pd_add_item_link" size="100" value="<?php echo esc_attr( get_option('pd_add_item_link') ); ?>"  />
							<i>Example: http://www.yourdomain.com</i>
						</td>
					</tr>
					 

				</table>
			</div>
			
			<div id="language_settings" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Add New</th>
						<td>
							<input type="text" name="pd_lan_add_link" size="100" value="<?php echo esc_attr( get_option('pd_lan_add_link') ); ?>"  />
							<i>Change the language for Add New</i>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Share List</th>
						<td>
							<input type="text" name="pd_lan_share_list" size="100" value="<?php echo esc_attr( get_option('pd_lan_share_list') ); ?>"  />
							<i>Change the language for Share List</i>
						</td>
					</tr>

				</table>
			</div>
			
			<div id="custom_css" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Custom Css</th>
						<td>
							
							<textarea name="pd_custom_style" rows="10" cols="100"><?php echo esc_attr( get_option('pd_custom_style') ); ?></textarea>
							<p><i>Write your custom CSS here. Please do not use <b>style</b> tag in this textarea.</i></p>
						</td>
					</tr>

				</table>
			</div>
			<div id="custom_js" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Custom Javascript</th>
						<td>
							
							<textarea name="pd_custom_js" rows="10" cols="100"><?php echo esc_attr( get_option('pd_custom_js') ); ?></textarea>
							<p><i>Write your custom JS here. Please do not use <b>script</b> tag in this textarea.</i></p>
						</td>
					</tr>

				</table>
			</div>
			<div id="help" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Help</th>
						<td>
							<div id="poststuff">
			
				<div id="post-body" class="metabox-holder columns-2">
				
					<div id="post-body-content" style="position: relative;">
				
						<h1>Welcome to the Simple Business Directory! You are <strong>awesome</strong>, by the way <img draggable="false" class="emoji" alt="🙂" src="<?php echo qcpnd_IMG_URL; ?>/1f642.svg"></h1>
						
						<div id="google-api-hint" class="qcld-sbd-section-block sbd-map-api-hint">
							<h3 class='shortcode-section-title sbd-color-red'>For Google Map API key to work:</h3>
							<div class=" left_section">
								<p class="list-element"><span style="font-weight:bold;">1.</span> Make sure to have both API and Application restriction set to None or restrict them to your domain name properly from Credentials->API Keys->Your API->Application restrictions</p>
								<p class="list-element"><span style="font-weight:bold;">2.</span>  Ensure that ALL the API libraries are enabled including Javascript, Geocoding and Places APIs.</p>
								<p class="list-element"><span style="font-weight:bold;">3.</span> Also, from the middle of 2018, Google requires you to add a Billing account. Although, for 99% cases you won't actually have to pay anything as the free usage limit is quite high for almost any use cases.</p>
							</div>
							
							<div class="image-container">
								<div>
									<img src="<?php echo qcpnd_IMG_URL; ?>/api-restrictions-list.png" alt="api-restrictions-list">
								</div>
								<div>
									<img src="<?php echo qcpnd_IMG_URL; ?>/api-restrictions.jpg" alt="api-restrictions">
								</div>
								<div>
									<img src="<?php echo qcpnd_IMG_URL; ?>/api-search.png" alt="api-search">
								</div>
								<!-- <img src="<?php echo qcpnd_IMG_URL; ?>/enable-apis.jpg" alt="enable-apis"> -->
								<div>
									<img src="<?php echo qcpnd_IMG_URL; ?>/api-library-restrictions.png" alt="api-library-restrictions">
								</div>
							</div>
						</div>

						<h3>Getting Started</h3>
						<p>Getting started with Simple Business Directory is super easy but the plugin works a little different from others - so an introduction is necessary.</p>

						<p>The plugin works a little different from others. The most important thing to remember is that the <strong>base pillars of this plugin are Lists</strong>, not individual businessed or categories. A list is simply a niche or subtopic to group your relevant businesses or any type of Listings together. The most common use of SBD is to create and display multiple businesses or listings on specific topics or subtopics on the same page. Everything revolves around the Lists. Once you create a few Lists, you can then display them in many different ways.</p>

						<p>With that in mind you should start with the following simple steps.</p>

						<p>1. Go to New List and create one by giving it a name. Then simply start adding List items or businesses by filling up the fields you want. Use the <strong>Add New</strong> button to add more Listings in your list.</p>

						<p>2. Though you can just create one list and use the Single List mode. This directory plugin works the best when you <strong>create a few Lists</strong> each conatining about <strong>15-20 List items</strong>. This is the most usual use case scenario. But you can do differently once you get the idea.</p>

						<p>3. Now go to a page or post where you want to display the directory. On the right sidebar you will see a <strong>ShortCode Generator</strong> block. Click the button and a Popup LightBox will appear with all the options that you can select. Choose All Lists, and select a Style. Then Click Add Shortcode button. Shortcode will be generated. Simply <strong>copy paste</strong> that to a location on your page where you want the <strong>directory to show up</strong>.</p>

						<p>That’s it! <p>The above steps are for the basic usages. There are a lot of advanced options available with the <a href="https://www.quantumcloud.com/products/simple-business-directory/">Professional version</a> if you ever feel the need. If you had any specific questions about how something works, do not hesitate to contact us from the <a href="<?php echo get_site_url().'/wp-admin/edit.php?post_type=pnd&page=qcpro-promo-page-pd-free-page-143pd'; ?>">Support Page</a>. We are very friendly and would be glad to answer any question you might have! <img draggable="false" class="emoji" alt="🙂" src="<?php echo qcpnd_IMG_URL; ?>/1f642.svg"></p>
								
						<h3>Note</h3>
						<p><strong>If you are having problem with adding more items or saving a list or your changes in the list are not getting saved then it is most likely because of a limitation set in your server. Your server has a limit for how many form fields it will process at a time. So, after you have added a certain number of links, the server refuses to save the List. The server’s configuration that dictates this is max_input_vars. You need to Set it to a high limit like max_input_vars = 15000. Since this is a server setting - you may need to contact your hosting company's support for this.</strong></p><br>
						<p><b>For Google Map API key to work, make sure to have both API and Application restriction set to None or restrict them to your domain name. Ensure that all the API libraries are enabled. Also, from the middle of 2018, Google requires you to add a Billing account. Although, for 99% cases you won�t actually have to pay anything as the free usage limit is quite high for most cases.</b></p>

						<h3>Shortcode Generator</h3>
						
						
						<p>
						We encourage you to use the Shortcode generator found in the toolbar of your page/post editor in visual mode.</p> 
						
						<img src="<?php echo qcpnd_IMG_URL; ?>/classic.jpg" alt="shortcode generator" />
						
						<p>See sample below for where to find it for Gutenberg.</p>

						<img src="<?php echo qcpnd_IMG_URL; ?>/gutenburg.jpg" alt="shortcode generator" />						
						<img src="<?php echo qcpnd_IMG_URL; ?>/gutenburg2.jpg" alt="shortcode generator" />	<p>This is how the shortcode generator will look like.</p>				
						<img src="<?php echo qcpnd_IMG_URL; ?>/shortcode-generator1.jpg" alt="shortcode generator" />					
						
						<br><br>
						
						<h3>Please take a quick look at our <a href="https://dev.quantumcloud.com/simple-business-directory/tutorials/" class="button button-primary">Video Tutorials</a></h3>
						
						<div>
							<h3>Shortcode Example</h3>
							
							<p>
								<strong>You can use our given SHORTCODE GENERATOR to generate and insert shortcode easily, titled as [SBD] with WordPress content editor.</strong>
							</p>

							<p>
								<strong><u>For all the lists:</u></strong>
								<br>
								[qcpnd-directory mode="all" style="simple" column="2" item_orderby="title" show_phone_icon="1" show_link_icon="1" enable_embedding="true" main_click_action="1" phone_number="1" map="show" showmaponly="no"  orderby="date" order="ASC"]
								<br>
								<br>
								<strong><u>For only a single list:</u></strong>
								<br>
								[qcpnd-directory mode="one" style="simple" column="2" list_id="240" item_orderby="title" show_phone_icon="1" show_link_icon="1" enable_embedding="true" main_click_action="1" phone_number="1" map="show" showmaponly="no" orderby="date" order="ASC"]
								<br>
								<br>
								<strong><u>For List Category Mode:</u></strong>
								<br>
								[qcpnd-directory category="cat-slug"style="style-1" column="2" showmaponly="no" item_orderby="title" show_phone_icon="1" show_link_icon="1" enable_embedding="true" main_click_action="1" phone_number="1" map="show" orderby="date" order="ASC"]
								<br>
								<br>
								<strong><u>For Map Only Mode:</u></strong>
								<br>
								[qcpnd-directory mode="maponly" showmaponly="yes"]
								<br>
								<br>

								<strong><u>Available Parameters:</u></strong>
								<br>
							</p>
							<p>
								<strong>1. mode</strong>
								<br>
								Value for this option can be set as "one", "all", or "maponly".
							</p>
							<p>
								<strong>2. style</strong>
								<br>
								Avaialble values: "simple", "style-1", "style-2", "style-3".
								<br>
								<strong style="color: red;">
									Only 4 templates are available in the free version. For more styles or templates, please purchase the <a href="https://www.quantumcloud.com/products/simple-business-directory/" target="_blank">premium version</a>.
								</strong>
							</p>
							<p>
								<strong>3. column</strong>
								<br>
								Avaialble values: "1", "2", "3" or "4".
							</p>
							<p>
								<strong>4. orderby</strong>
								<br>
								Compatible order by values: "ID", "author", "title", "name", "type", "date", "modified", "rand" and "menu_order".
							</p>
							<p>
								<strong>5. order</strong>
								<br>
								Value for this option can be set as "ASC" for Ascending or "DESC" for Descending order.
							</p>
							<p>
								<strong>6. list_id</strong>
								<br>
								Only applicable if you want to display a single list [not all]. You can provide specific list id here as a value. You can also get ready shortcode for a single list under "Manage List Items" menu.
							</p>
							<p>
								<strong>6. category</strong>
								<br>
								Supply the category slug of your specific directory category.
								<br>
								Example: category="designs"
							</p>
							<p>
								<strong>7. item_orderby</strong>
								<br>
								Compatible Item order by values: "title", and "None".
							</p>
							<p>
								<strong>8. order</strong>
								<br>
								Value for this option can be set as "ASC" for Ascending or "DESC" for Descending order.
							</p>
							
							<p>
								<strong>9. enable_embedding</strong>
								<br>
								Allow visitors to embed list in other sites. Supported values - "true", "false".
								<br>
								Example: enable_embedding="true"
							</p>
							<p>
								<strong>10. show_phone_icon</strong>
								<br>
								Allow to show a phone icon with each item . Supported values - "1", "0".
								<br>
								Example: show_phone_icon="1"
							</p>
							<p>
								<strong>11. show_link_icon</strong>
								<br>
								Allow to show a link icon with each item . Supported values - "1", "0".
								<br>
								Example: show_link_icon="1"
							</p>
							<p>
								<strong>12. main_click_action</strong>
								<br>
								Available values for this option "1", "0", "3"
							</p>
							<p>
								<strong>13. map</strong>
								<br>
								Available values for this option "show", "hide"
							</p>
							<p>
								<strong>14. showmaponly</strong>
								<br>
								You can use this value for use the maponly mode. Available values for this option "yes", "no".
							</p>
							
							
						</div>

						<div>
							<h3>How to style map with Snazzy Map</h3>
							<p><strong>1)</strong> Sign up for an account at <a href="https://snazzymaps.com/account/developer">SnazzyMaps.com</a>.</p>
							<p><strong>2)</strong> Click your email address in the top left corner.</p>
							<p><strong>3)</strong> Click the developer menu item on the left side.</p>
							<p><strong>4)</strong> Click the <strong>"Generate API Key"</strong> button.</p>
							<p><strong>5)</strong> Copy the long generated API Key.</p>
							<p><strong>6)</strong> Paste the key into the <strong>"Settings"</strong> tab in the Snazzy Maps plugin.</p>
							<p><strong>7)</strong> You should now be able to access your favorites and private styles in the <strong>Explore</strong> tab by changing the first filter dropdown.</p>
						</div>

						<div style="padding: 15px 10px; border: 1px solid #ccc; text-align: center; margin-top: 20px;">
							 Crafted By: <a href="http://www.quantumcloud.com" target="_blank">Web Design Company</a> - QuantumCloud 
						</div>
						
					  </div>
					  <!-- /post-body-content -->	
					  
					  
					</div>
					<!-- /post-body-->	
				
				</div>
				<!-- /poststuff -->

			</div>
							
						</td>
					</tr>

				</table>
			</div>
			
			<?php submit_button(); ?>

		</form>
		
	</div>
	
	<?php
	
}