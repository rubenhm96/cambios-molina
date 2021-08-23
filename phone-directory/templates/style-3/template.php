<?php
global $wpdb;
wp_enqueue_style( 'qcpnd-style-3', OCPD_TPL_URL . "/$template_code/template.css");
wp_enqueue_style( 'qcpnd-style-3-fa', OCPD_TPL_URL . "/$template_code/css/font-awesome.min.css");
// The Loop
if ( $list_query->have_posts() ) 
{
	
	if(get_option('pd_enable_top_part')=='on') :
		
	 do_action('qcpnd_attach_embed_btn', $shortcodeAtts);
	
	endif;

	//Directory Wrap or Container
	if($map=='show'){
		echo '<div id="sbd_all_location" style="width:100%;height:450px;overflow:hidden;display:block;margin-bottom:20px;"></div>';
	}
	echo '<div class="qcpnd-list-wrapper"><div id="opd-list-holder" class="qc-grid qcpnd-list-holder">';

	$listId = 1;

	while ( $list_query->have_posts() ) 
	{
		$list_query->the_post();

		//$lists = get_post_meta( get_the_ID(), 'qcpnd_list_item01' );
		
		$lists = array();
		$results = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE post_id = ".get_the_ID()." AND meta_key = 'qcpnd_list_item01'");
		if(!empty($results)){
			foreach($results as $result){
				$unserialize = unserialize($result->meta_value);
				$lists[] = $unserialize;
			}
		}

		$conf = get_post_meta( get_the_ID(), 'qcpnd_list_conf', true );
		
		if( $item_orderby == 'upvotes' )
		{
			usort($lists, "pcpnd_custom_sort_by_tpl_upvotes");
		}

		if( $item_orderby == 'title' )
		{
			usort($lists, "pcpnd_custom_sort_by_tpl_title");
		}

		?>

		<div class="list-and-add qc-grid-item <?php echo "opd-list-id-" . esc_attr(get_the_ID()); ?>">

		<div id="qcpnd-list-<?php echo esc_attr($listId) .'-'. esc_attr(get_the_ID()); ?>" class="qcpnd-list-column <?php echo $style; ?>">

			<div class="qcpnd-single-list-1">
				<h3>
					<?php echo esc_html(get_the_title()); ?>
				</h3>
				<ul class="ca-menu">
					<?php $count = 1; ?>
					<?php foreach( $lists as $list ) : 
					$list['qcpnd_item_gotoweb'] = $main_click_action;
					$list['show_phone_number'] = $phone_number;
					?>
					<?php 
						$canContentClass = "subtitle-present";

						if( !isset($list['qcpnd_item_subtitle']) || $list['qcpnd_item_subtitle'] == "" )
						{
							$canContentClass = "subtitle-absent";
						}
						$latlon = '';
						if(isset($list['qcpd_item_latitude']) && $list['qcpd_item_latitude']!='' && isset($list['qcpd_item_longitude']) && $list['qcpd_item_longitude']!=''){
							$latlon = esc_html($list['qcpd_item_latitude'].','.$list['qcpd_item_longitude']);
						}
					?>
					<li id="item-<?php echo get_the_ID() ."-". $count; ?>" data-latlon="<?php echo $latlon; ?>" data-title="<?php echo esc_html($list['qcpnd_item_title']); ?>" data-phone="<?php echo esc_html($list['qcpnd_item_phone']); ?>" data-address="<?php echo esc_html($list['qcpd_item_full_address']); ?>" data-url="<?php echo esc_url($list['qcpnd_item_link']); ?>">
						<?php 
							$item_url = esc_url($list['qcpnd_item_link']);
							$masked_url = esc_url($list['qcpnd_item_link']);
						?>
						<!-- List Anchor -->
						<a <?php echo (isset($list['qcpnd_item_gotoweb']) && $list['qcpnd_item_gotoweb'] == 1) ? 'href="'.$masked_url.'" target="_blank"' : ''; ?> <?php echo (isset($list['qcpnd_item_gotoweb']) && $list['qcpnd_item_gotoweb'] == 0) ? 'href="tel:'.preg_replace("/[^0-9]/", "",$list['qcpnd_item_phone']).'"' : ''; ?> >

							<!-- Image, If Present -->
							<?php if( ($list_img == "true") && isset($list['qcpnd_item_img'])  && $list['qcpnd_item_img'] != "" ) : ?>
								<span class="ca-icon list-img-1">
									<?php 
										$img = wp_get_attachment_image_src($list['qcpnd_item_img']);
									?>
									<img src="<?php echo esc_url($img[0]); ?>" alt="">
								</span>
							<?php else : ?>
								<span class="ca-icon list-img-1">
									<img src="<?php echo qcpnd_IMG_URL; ?>/list-image-placeholder.png" alt="">
								</span>
							<?php endif; ?>

							<!-- Link Text -->
							<div class="ca-content">
                                <h2 class="ca-main <?php echo $canContentClass; ?>">
								<?php 
									echo esc_html(trim($list['qcpnd_item_title'])); 
								?>
                                </h2>
                                <?php if( isset($list['qcpnd_item_subtitle']) ) : ?>
	                                <h3 class="ca-sub">
						<?php 
								if(isset($list['qcpnd_item_description']) and $list['qcpnd_item_description']!=''){
									echo ' <span style="display:block"> '.esc_html($list['qcpnd_item_description']).'</span>';
								}
								if(isset($list['qcpnd_item_phone'])&&$list['qcpnd_item_phone']!='' && isset($list['show_phone_number']) && $list['show_phone_number']==1){
									echo ''.str_replace(array('(',')'),array('',''),esc_html($list['qcpnd_item_phone'])).'';
								}
								if(isset($list['qcpnd_item_subtitle']) and $list['qcpnd_item_subtitle']!=''){
									echo ' <span style="margin-left: 10px;"> '.esc_html($list['qcpnd_item_subtitle']).'</span>';
								}
								if(isset($list['qcpnd_item_ext']) and $list['qcpnd_item_ext']!=''){
									echo ' <span style="margin-left: 10px;">Ext: '.esc_html($list['qcpnd_item_ext']).'</span>';
								}
								
								
							 ?>
	                                </h3>
	                            <?php endif; ?>

                            </div>
							<div class="sbd_icons">
							<?php if( $show_phone_icon == '1' ) : ?>
							   <a class="" href="tel:<?php echo preg_replace("/[^0-9]/", "",@esc_html($list['qcpnd_item_phone'])); ?>">
								 <i class="fa fa-phone"></i>
							   </a>
							<?php endif; ?>
							
							<?php if( $masked_url != '' && $show_link_icon==1) : ?>
							   <a class="" href="<?php echo esc_url($masked_url); ?>" <?php echo (isset($list['qcpnd_open_new_window']) && $list['qcpnd_open_new_window'] == 1) ? 'target="_blank"' : ''; ?>>
								 <i class="fa fa-link"></i>
							   </a>
							<?php endif; ?>
							</div>
							
						</a>

					</li>
					<?php $count++; endforeach; ?>
				</ul>
				
			</div>
		</div>

		</div>

		<?php

		$listId++;
	}

	echo '<div class="clearfix"></div>
			</div>
		<div class="clearfix"></div>
	</div>';

}
