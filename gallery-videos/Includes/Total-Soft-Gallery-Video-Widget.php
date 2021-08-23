<?php
class Total_Soft_Gallery_Video extends WP_Widget
	{
		function __construct()
		{
			$params=array('name'=>'Total Soft Gallery Video','description'=>'This is the widget of Total Soft Gallery Video plugin');
			parent::__construct('Total_Soft_Gallery_Video','',$params);
		}
		function form($instance)
		{
			$defaults = array('Total_Soft_Gallery_Video'=>'');
			$instance = wp_parse_args((array)$instance, $defaults);

			$Gallery_Video = $instance['Gallery_Video'];
			$instance['TS_GV_Theme_Name'] = '';
			?>
			<div>
				<p>
					Gallery Video Title:
					<select name="<?php echo $this->get_field_name('Gallery_Video'); ?>" class="widefat">
						<?php
							global $wpdb;

							$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
							$Total_Soft_Gallery_Video = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d", 0));

							foreach ($Total_Soft_Gallery_Video as $Total_Soft_Gallery_Video1)
							{
								?> <option value="<?php echo $Total_Soft_Gallery_Video1->id; ?>"> <?php echo $Total_Soft_Gallery_Video1->TotalSoftGallery_Video_Gallery_Title; ?> </option> <?php
							}
						?>
					</select>
				</p>
			</div>
			<?php
		}


			function ts_filtr($data) {
				if(strstr($data,",")) $data=strtok($data, ",");
				return $data;
			}
		
		function widget($args,$instance)
		{
			extract($args);
			$name = 'ts_filtr';
			$Total_Soft_Gallery_Video = empty($instance['Gallery_Video']) ? '' : $instance['Gallery_Video'];
			$Total_Soft_Gallery_VideoT = empty($instance['TS_GV_Theme_Name']) ? '' : $instance['TS_GV_Theme_Name'];
			require_once('Total-Soft-Gallery-Video-Install.php');

			global $wpdb;
			$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
			$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
			$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
			$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
			$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";
			$table_name4_3 = $wpdb->prefix . "totalsoft_galleryv_dbt_3";
			$table_name4_4 = $wpdb->prefix . "totalsoft_galleryv_dbt_4";

			$Total_Soft_GalleryV_Man = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $Total_Soft_Gallery_Video));
			if($Total_Soft_Gallery_VideoT == '')
			{
				$Total_Soft_Gallery_VideoTh = $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_Option;

				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));

                $Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_Gallery_VideoTh));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));

				if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Space Gallery') {
				$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Classic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Parallax Engine') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Fancy Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Effective Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Gallery Album') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}
			}

			else if($Total_Soft_Gallery_VideoT == 'true')
			{
				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
				$Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_3 WHERE id > %d", 0));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_3 WHERE id > %d", 0));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_4 WHERE id > %d", 0));

				if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Space Gallery') {
				$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Classic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Parallax Engine') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Fancy Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Effective Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Gallery Album') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}
			}
			else
			{
				$Total_Soft_Gallery_VideoTh = $Total_Soft_Gallery_VideoT;

				$Total_Soft_GalleryV_Videos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
				$Total_Soft_GalleryV_Type = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_Gallery_VideoTh));

				$TotalSoftGallery_Video_Opt1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
				$TotalSoftGallery_Video_Opt2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));

				if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Space Gallery') {
				$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Classic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Parallax Engine') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Fancy Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Effective Gallery') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09).'';
				}else if ($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Gallery Album') {
					$fonts_google='https://fonts.googleapis.com/css?family='.$this->$name($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16).'|'.$this->$name($TotalSoftGallery_Video_Opt2[0]->TotalSoft_Poll_Set_09).'';
				}
			}
			echo $before_widget;
			?>
				<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/totalsoft.css',__FILE__);?>">
				   <link href="<?php echo $fonts_google; ?>" >
			<?php
			if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16 == 'true'){ $TotalSoft_GV_1_16 = 'inline'; }else{ $TotalSoft_GV_1_16 = 'none'; }
			if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '1'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '2'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-angle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '3'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '4'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '5'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-arrow-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '6'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-caret-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '7'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '8'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-chevron-circle-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '9'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-chevron-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '10'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36 == '11'){ $TotalSoft_GV_1_36_Left = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_GV_1_36_Right = 'totalsoft totalsoft-long-arrow-right'; }
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '1'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '2'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-angle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '3'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '4'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '5'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-arrow-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '6'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-caret-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '7'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '8'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-chevron-circle-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '9'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-chevron-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '10'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == '11'){ $TotalSoft_GV_2_03_Left = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_GV_2_03_Right = 'totalsoft totalsoft-long-arrow-right'; }
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '1'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times';}
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '2'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times-circle';}
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == '3'){ $TotalSoft_GV_2_06_Del = 'totalsoft totalsoft-times-circle-o';}
			if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 1){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-angle-double-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 2){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-angle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 3){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-circle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 4){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 5){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-arrow-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 6){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-caret-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 7){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-caret-square-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 8){ $TotalSoft_PS_Left_Icon = 'totalsoft-chevron-circle-left'; $TotalSoft_PS_Right_Icon = 'totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 9){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-chevron-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 10){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-hand-o-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03 == 11){ $TotalSoft_PS_Left_Icon = 'totalsoft totalsoft-long-arrow-left'; $TotalSoft_PS_Right_Icon = 'totalsoft totalsoft-long-arrow-right';}
	
		  
		 $arr = [$Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType];
	
		  for($i=0;$i<count($arr);$i++){
		  	if($arr[$i]=='Grid Video Gallery' || $arr[$i] == 'LightBox Video Gallery'){
				require(dirname(__FILE__) . '/TS-VG-WGL.php');
		  	}
			else if($arr[$i] == 'Thumbnails Video' || $arr[$i] == 'Content Popup'){
		  		require(dirname(__FILE__) . '/TS-VG-WTC.php');
		  	}
		  	else if($arr[$i] == 'Elastic Gallery' || $arr[$i] == 'Fancy Gallery'){
		  		require(dirname(__FILE__) . '/TS-VG-WEF.php');
		  	}
            else if($arr[$i] == 'Parallax Engine' || $arr[$i] == 'Classic Gallery' || $arr[$i] == 'Space Gallery'){
                require(dirname(__FILE__) . '/TS-VG-WPC.php');
            }
		  }
			?><?php
		}
	}
