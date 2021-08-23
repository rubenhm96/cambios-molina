<?php

/*TinyMCE Shortcode Generator Button - 25-01-2017*/

function qcpnd_tinymce_shortcode_button_function() {
	add_filter ("mce_external_plugins", "qcpnd_shortcode_generator_btn_js");
	add_filter ("mce_buttons", "qcpnd_shortcode_generator_btn");
}

function qcpnd_shortcode_generator_btn_js($plugin_array) {
	$plugin_array['qcpnd_shortcode_btn'] = plugins_url('assets/js/qcpnd-tinymce-button.js', __FILE__);
	return $plugin_array;
}

function qcpnd_shortcode_generator_btn($buttons) {
	array_push ($buttons, 'qcpnd_shortcode_btn');
	return $buttons;
}

add_action ('init', 'qcpnd_tinymce_shortcode_button_function');

function qcpnd_load_custom_wp_admin_style_free($hook) {
	if( 'post.php' == $hook || 'post-new.php' == $hook ){
        wp_register_style( 'pnd_shortcode_gerator_css', qcpnd_ASSETS_URL . '/css/shortcode-modal.css', false, '1.0.0' );
        wp_enqueue_style( 'pnd_shortcode_gerator_css' );
    }
}
add_action( 'admin_enqueue_scripts', 'qcpnd_load_custom_wp_admin_style_free' );

function qcpnd_render_shortcode_modal_free() {

	?>

	<div id="sm-modal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
		
			<span class="close">
				<span class="dashicons dashicons-no"></span>
			</span>
			<h3> 
				<?php esc_html_e( 'SBD - Shortcode Generator' , 'qc-opd' ); ?></h3>
			<hr/>
			
			<div class="sm_shortcode_list">

				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Mode
					</label>
					<select style="width: 225px;" id="pnd_mode">
						<option value="all">All List</option>
						<option value="one">One List</option>
						<option value="category">List Category</option>
						<option value="maponly">Map Only</option>
					</select>
				</div>
				
				<div id="pnd_list_div" class="qcpnd_single_field_shortcode hidden-div">
					<label style="width: 200px;display: inline-block;">
						Select List 
					</label>
					<select style="width: 225px;" id="pnd_list_id">
					
						<option value="">Please Select List</option>
						
						<?php
						
							$ilist = new WP_Query( array( 'post_type' => 'pnd', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC') );
							if( $ilist->have_posts()){
								while( $ilist->have_posts() ){
									$ilist->the_post();
						?>
						
						<option value="<?php echo esc_attr(get_the_ID()); ?>"><?php echo esc_html(get_the_title()); ?></option>
						
						<?php } } ?>
						
					</select>
				</div>
				
				<div id="pnd_list_cat" class="qcpnd_single_field_shortcode hidden-div">
					<label style="width: 200px;display: inline-block;">
						List Category
					</label>
					<select style="width: 225px;" id="pnd_list_cat_id">
					
						<option value="">Please Select Category</option>
						
						<?php
						
							$terms = get_terms( 'pnd_cat', array(
								'hide_empty' => true,
							) );
							if( $terms ){
								foreach( $terms as $term ){
						?>
						
						<option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
						
						<?php } } ?>
						
					</select>
				</div>
				
				<div id="pd_show_map" class="qcpd_single_field_shortcode" >
					<label style="width: 200px;display: inline-block;">
						Show Map
					</label>
					<input id="pdmap" name="pdmap" value="show" type="checkbox">
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Template Style
					</label>
					<select style="width: 225px;" id="pnd_style">
						<option value="simple">Default Style</option>
						<option value="style-1">Style 01</option>
						<option value="style-2">Style 02</option>
						<option value="style-3">Style 03</option>
					</select>
					
					
					
				</div>
				
				<div id="pnd_column_div" class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Column
					</label>
					<select style="width: 225px;" id="pnd_column">
						<option value="1">Column 1</option>
						<option value="2">Column 2</option>
						<option value="3">Column 3</option>
						<option value="4">Column 4</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Order By
					</label>
					<select style="width: 225px;" id="pnd_orderby">
						<option value="date">Date</option>
						<option value="ID">ID</option>
						<option value="title">Title</option>
						<option value="modified">Date Modified</option>
						<option value="rand">Random</option>
						<option value="menu_order">Menu Order</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Order
					</label>
					<select style="width: 225px;" id="pnd_order">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
				</div>
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Phone Icon
					</label>
					<select style="width: 225px;" id="show_phone_icon">
						<option value="1">Show</option>
						<option value="0">Hide</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Link Icon
					</label>
					<select style="width: 225px;" id="show_link_icon">
						<option value="1">Show</option>
						<option value="0">Hide</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Main Click Action
					</label>
					<select style="width: 225px;" id="main_click_action">
						<option value="1">Go to Website</option>
						<option value="0">Call</option>
						<option value="3">Do Nothing</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Phone Number
					</label>
					<select style="width: 225px;" id="phone_number">
						<option value="1">Show</option>
						<option value="0">Hide</option>
					</select>
				</div>
				
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Embed Option
					</label>
					<select style="width: 225px;" id="embed_option">
						<option value="true">Show</option>
						<option value="false">Hide</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
						Item Orderby
					</label>
					<select style="width: 225px;" id="pd_itemorderby">
						<option value="">None</option>
						<option value="title">Title</option>
					</select>
				</div>
				
				<div class="qcpnd_single_field_shortcode">
					<label style="width: 200px;display: inline-block;">
					</label>
					<input class="pnd-sc-btn" type="button" id="qcpnd_add_shortcode" value="Generate Shortcode" />
				</div>
				
			</div>
			<div class="sbd_shortcode_container" style="display:none;">
				<div class="qcpnd_single_field_shortcode">
					<textarea style="width:100%;height:200px" id="sbd_shortcode_container"></textarea>
					<p><b>Copy</b> the shortcode & use it any text block. <button class="sbd_copy_close button button-primary button-small" style="float:right">Copy & Close</button></p>
				</div>
			</div>
		</div>

	</div>
	<?php
	exit;
}

add_action( 'wp_ajax_show_qcpnd_shortcodes', 'qcpnd_render_shortcode_modal_free');
