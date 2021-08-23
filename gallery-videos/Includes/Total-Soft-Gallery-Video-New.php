<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	require_once('Total-Soft-Gallery-Video-Install.php');
	require_once(dirname(__FILE__) . '/Total-Soft-Pricing.php');

	$table_name1 = $wpdb->prefix . "totalsoft_galleryv_id";
	$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
	$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
	$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";

	wp_enqueue_media();
	wp_enqueue_script( 'custom-header' );
	add_filter( 'upload_size_limit', 'PBP_increase_upload' );
	function PBP_increase_upload( )
	{
		return 20480000; // 20MB
	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(check_admin_referer( 'edit-menu_', 'TS_VGallery_Nonce' ))
		{
			$TotalSoftGallery_Video_Gallery_Title = str_replace("\&", "&", sanitize_text_field(esc_html($_POST['TotalSoftGallery_Video_Gallery_Title'])));
			$TotalSoftGallery_Video_Option = sanitize_text_field($_POST['TotalSoftGallery_Video_Option']);
			$TotalSoftGallery_Video_ShowType = sanitize_text_field($_POST['TotalSoftGallery_Video_ShowType']);
			$TotalSoftGallery_Video_PerPage = sanitize_text_field($_POST['TotalSoftGallery_Video_PerPage']);
			$TotalSoftGallery_LoadMore = sanitize_text_field($_POST['TotalSoftGallery_LoadMore']);
			$TotalSoftGVDelVal = sanitize_text_field($_POST['TotalSoftGVDelVal']);


			$TotalSoftGallery_Video_VT = [];
			$TotalSoftGallery_Video_VDesc = [];
			$TotalSoftGallery_Video_VLink = [];
			$TotalSoftGallery_Video_VONT = [];
			$TotalSoftGallery_Video_VURL = [];
			$TotalSoftGallery_Video_IURL = [];
			$TotalSoftGallery_Video_Video = [];
			$TotalSoftGallery_Video_Video_Del = [];
            $url_pieces = [];
            $url_yutub =[];
            $is = [];
            $TotalSoftGallery_Del_Id = [];
			$TotalSoftGVHidNum=sanitize_text_field($_POST['TotalSoftGVHidNum']);
			$TotalSoftGVHidBool=sanitize_text_field($_POST['TotalSoftGVHidBool']);

			for($j=1;$j<=$TotalSoftGVHidNum;$j++) {
                $TotalSoftGallery_Video_VT[$j] = str_replace("\&", "&", sanitize_text_field(esc_html($_POST['TotalSoftGallery_Video_VT_' . $j])));
                $TotalSoftGallery_Video_VDesc[$j] = str_replace("\&", "&", sanitize_text_field(esc_html($_POST['TotalSoftGallery_Video_VDesc_' . $j])));
                $TotalSoftGallery_Video_VLink[$j] = sanitize_text_field($_POST['TotalSoftGallery_Video_VLink_' . $j]);
                $TotalSoftGallery_Video_VONT[$j] = sanitize_text_field($_POST['TotalSoftGallery_Video_VONT_' . $j]);
                $TotalSoftGallery_Video_VURL[$j] = sanitize_text_field($_POST['TotalSoftGallery_Video_VURL_' . $j]);
                $TotalSoftGallery_Video_IURL[$j] = sanitize_text_field($_POST['TotalSoftGallery_Video_IURL_' . $j]);
                $TotalSoftGallery_Video_Video[$j] = sanitize_text_field($_POST['TotalSoftGallery_Video_RVideo_' . $j]);
                $url_pieces[$j] = explode('/', $TotalSoftGallery_Video_IURL[$j]);
                $url_yutub[$j] = explode('/', $TotalSoftGallery_Video_VURL[$j]);
                $id[$j] = $url_pieces[$j][4];
                $TotalSoftGallery_Del_Id[$j] = sanitize_text_field($_POST['TotalSoftGallery_Del_Id_'.$j]);
            }
			if(isset($_POST['Total_Soft_Gallery_Video_Save']))
			{

                for($j=1;$j<=$TotalSoftGVHidNum;$j++) {
                    if ($url_yutub[2] == 'www.youtube.com' && $url_pieces[2] == 'img.youtube.com') {
                        $url = "https://img.youtube.com/vi/" . $id . "/maxresdefault.jpg";
                        $handle = curl_init($url);
                        curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                        /* Get the HTML or whatever is linked in $url. */
                        $response = curl_exec($handle);
                        /* Check for 404 (file not found). */
                        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                        if ($httpCode != 404) {
                            /* Handle 404 here. */
//					$TotalSoftGallery_Video_IURL[$j]="https://img.youtube.com/vi/" . $id . "/maxresdefault.jpg";
                            $TotalSoftGallery_Video_IURL[$j] = "Tsyou_" . $id . "/maxresdefault.jpg";
                        } else {
//					 $TotalSoftGallery_Video_IURL[$j]="https://img.youtube.com/vi/" . $id . "/mqdefault.jpg";
                            $TotalSoftGallery_Video_IURL[$j] = "Tsyou_" . $id . "/mqdefault.jpg";
                        }
                        curl_close($handle);

                    } else {
                        if ($url_yutub[0] == 'http:') {
                            $url = str_replace("http", "https", $TotalSoftGallery_Video_VURL[$j]);
                            $handle = curl_init($url);
                            curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                            /* Get the HTML or whatever is linked in $url. */
                            $response = curl_exec($handle);
                            /* Check for 404 (file not found). */
                            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                            if ($httpCode == 200) {
                                /* Handle 404 here. */
                                $TotalSoftGallery_Video_VURL[$j] = $url;
                            }
                        }
                        if ($url_pieces[0] == 'http:') {
                            $url = str_replace("http", "https", $TotalSoftGallery_Video_IURL[$j]);
                            $handle = curl_init($url);
                            curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                            /* Get the HTML or whatever is linked in $url. */
                            $response = curl_exec($handle);
                            /* Check for 404 (file not found). */
                            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                            if ($httpCode == 200) {
                                /* Handle 404 here. */
                                $TotalSoftGallery_Video_IURL[$j] = $url;
                            }
                        }
                    }
                    if ($url_yutub[2] == 'www.youtube.com') {
                        $TotalSoftGallery_Video_VURL[$j] = "Tsyou_" . $id;
                        $TotalSoftGallery_Video_Video[$j] = "Tsyou_" . $id;
                    }
                }
            				$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftGallery_Video_Gallery_Title, TotalSoftGallery_Video_Option, TotalSoftGallery_Video_ShowType, TotalSoftGallery_Video_PerPage, TotalSoftGallery_LoadMore) VALUES (%d, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_Gallery_Title, $TotalSoftGallery_Video_Option, $TotalSoftGallery_Video_ShowType, $TotalSoftGallery_Video_PerPage, $TotalSoftGallery_LoadMore));

				$New_GalleryV_ID = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d order by id desc limit 1",0));
				$New_Total_SoftGVID = $New_GalleryV_ID[0]->GalleryV_ID + 1;
				$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, GalleryV_ID) VALUES (%d, %s)", '', $New_Total_SoftGVID));

				for($j=1;$j<=$TotalSoftGVHidNum;$j++)
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftGallery_Video_VT, TotalSoftGallery_Video_VDesc, TotalSoftGallery_Video_VLink, TotalSoftGallery_Video_VONT, TotalSoftGallery_Video_VURL, TotalSoftGallery_Video_IURL, TotalSoftGallery_Video_Video, GalleryV_ID) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_VT[$j], $TotalSoftGallery_Video_VDesc[$j], $TotalSoftGallery_Video_VLink[$j], $TotalSoftGallery_Video_VONT[$j], $TotalSoftGallery_Video_VURL[$j], $TotalSoftGallery_Video_IURL[$j], $TotalSoftGallery_Video_Video[$j], $New_Total_SoftGVID));
				}
			}
			else if(isset($_POST['Total_Soft_Gallery_Video_Update']))
			{
				$Total_SoftGallery_Video_Update=sanitize_text_field($_POST['Total_SoftGallery_Video_Update']);
				$wpdb->query($wpdb->prepare("UPDATE $table_name2 set TotalSoftGallery_Video_Gallery_Title = %s, TotalSoftGallery_Video_Option = %s, TotalSoftGallery_Video_ShowType = %s, TotalSoftGallery_Video_PerPage = %s, TotalSoftGallery_LoadMore = %s WHERE id = %d", $TotalSoftGallery_Video_Gallery_Title, $TotalSoftGallery_Video_Option, $TotalSoftGallery_Video_ShowType, $TotalSoftGallery_Video_PerPage, $TotalSoftGallery_LoadMore, $Total_SoftGallery_Video_Update));
                $TotalSoftGalleryVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s", $Total_SoftGallery_Video_Update));

                $Value_explodet_ids = explode(',', $TotalSoftGVDelVal);
                if ($Value_explodet_ids>0){
                    $k=0;
                    for ($i = 0; $i<count($TotalSoftGalleryVideos);$i++) {
                        if ($TotalSoftGalleryVideos[$i + 1]->id == $Value_explodet_ids[$k]) {
                            $k++;
                        $wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id = %d", $TotalSoftGalleryVideos[$i+1]->id));
                        }
                    }
                }
                $TotalSoftGalleryVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s", $Total_SoftGallery_Video_Update));
                for ($i = 0; $i<count($TotalSoftGalleryVideos);$i++){
                    if ($url_yutub[$i+1][2] == 'www.youtube.com') {
                        $TotalSoftGallery_Video_VURL[$i+1] = "Tsyou_" . $id[$i+1];
                        $TotalSoftGallery_Video_Video[$i+1] = "Tsyou_" . $id[$i+1];
                        $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/maxresdefault.jpg";
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_VT != $TotalSoftGallery_Video_VT[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_VT = %s WHERE id = %d", $TotalSoftGallery_Video_VT[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_VDesc != $TotalSoftGallery_Video_VDesc[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_VDesc = %s WHERE id = %d", $TotalSoftGallery_Video_VDesc[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_VLink != $TotalSoftGallery_Video_VLink[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_VLink = %s WHERE id = %d", $TotalSoftGallery_Video_VLink[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_VONT != $TotalSoftGallery_Video_VONT[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_VONT = %s WHERE id = %d", $TotalSoftGallery_Video_VONT[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_VURL != $TotalSoftGallery_Video_VURL[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_VURL = %s WHERE id = %d", $TotalSoftGallery_Video_VURL[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_IURL != $TotalSoftGallery_Video_IURL[$i+1]){
                        if ($url_yutub[$i+1][2] == 'www.youtube.com' && $url_pieces[$i+1][2] == 'img.youtube.com') {
                            $url = "https://img.youtube.com/vi/" . $id[$i+1] . "/maxresdefault.jpg";
                            $handle = curl_init($url);
                            curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                            /* Get the HTML or whatever is linked in $url. */
                            $response = curl_exec($handle);
                            /* Check for 404 (file not found). */
                            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                            if ($httpCode != 404) {
                                /* Handle 404 here. */
                                $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/maxresdefault.jpg";
                            } else {
                                $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/mqdefault.jpg";
                            }
                            curl_close($handle);
                        }
                        else {
                            if ($url_yutub[$i+1][0] == 'http:') {
                                $url = str_replace("http", "https", $TotalSoftGallery_Video_VURL[$i+1]);
                                $handle = curl_init($url);
                                curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                                /* Get the HTML or whatever is linked in $url. */
                                $response = curl_exec($handle);
                                /* Check for 404 (file not found). */
                                $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                                if ($httpCode == 200) {
                                    /* Handle 404 here. */
                                    $TotalSoftGallery_Video_VURL[$i+1] = $url;
                                }
                            }
                            if ($url_pieces[$i+1][0] == 'http:') {
                                $url = str_replace("http", "https", $TotalSoftGallery_Video_IURL[$i+1]);
                                $handle = curl_init($url);
                                curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                                /* Get the HTML or whatever is linked in $url. */
                                $response = curl_exec($handle);
                                /* Check for 404 (file not found). */
                                $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                                if ($httpCode == 200) {
                                    /* Handle 404 here. */
                                    $TotalSoftGallery_Video_IURL[$i+1] = $url;
                                }
                            }
                        }
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_IURL = %s WHERE id = %d", $TotalSoftGallery_Video_IURL[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                    if ($TotalSoftGalleryVideos[$i]->TotalSoftGallery_Video_Video != $TotalSoftGallery_Video_Video[$i+1]){
                        $wpdb->query($wpdb->prepare("UPDATE $table_name3 set TotalSoftGallery_Video_Video = %s WHERE id = %d", $TotalSoftGallery_Video_Video[$i+1],$TotalSoftGalleryVideos[$i]->id));
                    }
                }
                if ($TotalSoftGVHidBool > 0){
                    for ($i = count($TotalSoftGalleryVideos);$i < count($TotalSoftGalleryVideos)+$TotalSoftGVHidBool; $i++)
                    {
                        if ($url_yutub[$i+1][2] == 'www.youtube.com') {
                            $TotalSoftGallery_Video_VURL[$i+1] = "Tsyou_" . $id[$i+1];
                            $TotalSoftGallery_Video_Video[$i+1] = "Tsyou_" . $id[$i+1];
                            $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/maxresdefault.jpg";
                        }
                        if ($url_yutub[$i+1][2] == 'www.youtube.com' && $url_pieces[$i+1][2] == 'img.youtube.com') {
                            $url = "https://img.youtube.com/vi/" . $id[$i+1] . "/maxresdefault.jpg";
                            $handle = curl_init($url);
                            curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                            /* Get the HTML or whatever is linked in $url. */
                            $response = curl_exec($handle);
                            /* Check for 404 (file not found). */
                            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                            if ($httpCode != 404) {
                                /* Handle 404 here. */
                                $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/maxresdefault.jpg";
                            } else {
                                $TotalSoftGallery_Video_IURL[$i+1] = "Tsyou_" . $id[$i+1] . "/mqdefault.jpg";
                            }
                            curl_close($handle);
                        }
                        else {
                            if ($url_yutub[$i+1][0] == 'http:') {
                                $url = str_replace("http", "https", $TotalSoftGallery_Video_VURL[$i+1]);
                                $handle = curl_init($url);
                                curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                                /* Get the HTML or whatever is linked in $url. */
                                $response = curl_exec($handle);
                                /* Check for 404 (file not found). */
                                $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                                if ($httpCode == 200) {
                                    /* Handle 404 here. */
                                    $TotalSoftGallery_Video_VURL[$i+1] = $url;
                                }
                            }
                            if ($url_pieces[$i+1][0] == 'http:') {
                                $url = str_replace("http", "https", $TotalSoftGallery_Video_IURL[$i+1]);
                                $handle = curl_init($url);
                                curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
                                /* Get the HTML or whatever is linked in $url. */
                                $response = curl_exec($handle);
                                /* Check for 404 (file not found). */
                                $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                                if ($httpCode == 200) {
                                    /* Handle 404 here. */
                                    $TotalSoftGallery_Video_IURL[$i+1] = $url;
                                }
                            }
                        }
                    
                    $wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftGallery_Video_VT, TotalSoftGallery_Video_VDesc, TotalSoftGallery_Video_VLink, TotalSoftGallery_Video_VONT, TotalSoftGallery_Video_VURL, TotalSoftGallery_Video_IURL, TotalSoftGallery_Video_Video, GalleryV_ID) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_VT[$i+1], $TotalSoftGallery_Video_VDesc[$i+1], $TotalSoftGallery_Video_VLink[$i+1], $TotalSoftGallery_Video_VONT[$i+1], $TotalSoftGallery_Video_VURL[$i+1], $TotalSoftGallery_Video_IURL[$i+1], $TotalSoftGallery_Video_Video[$i+1], $Total_SoftGallery_Video_Update));

                    }
                }
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}

	$TotalSoftGalleryVOptions = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d", 0));
	$TotalSoftGalleryV = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d", 0));
	$TotalSoftGalleryVShortID = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d order by id desc limit 1",0));
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/totalsoft.css',__FILE__);?>">
<link href="https://fonts.googleapis.com/css?family=AbadiMTCondensedLight|Aharoni|Aldhabi|Amaranth|Andalus|AngsanaNew|AngsanaUPC|Anton|Aparajita|ArabicTypesetting|Arial|ArialBlack|Batang|BatangChe|BrowalliaNew|BrowalliaUPC|Calibri|CalibriLight|CalistoMT|Cambria|Candara|CenturyGothic|ComicSansMS|Consolas|Constantia|CopperplateGothic|CopperplateGothicLight|Battambang|Baumans|BungeeShade|Butcherman|Cabin|CabinSketch|Cairo|Damion|DilleniaUPC|DaunPenh|EagleLake|EastSeaDokdo|FiraSansCondensed|FiraSansExtraCondensed|FreesiaUPC|Gafata|Gabriola|JacquesFrancois|HeadlandOne|Katibeh|KaiTi|MicrosoftYiBaiti|MonsieurLaDoulaise|MrDeHaviland|NovaScript|NovaSquare|Nyala|OdorMeanChey|Offside|OldStandardTT|Oldenburg|Oxygen|OxygenMono|PrincessSofia|Prociono|Prompt|ProstoOne|ProzaLibre|Quicksand|Quintessential|Qwigley|Raavi|RacingSansOne|Radley|Rajdhani|Rakkas|Raleway|RalewayDots|Ramabhadra|Ramaraja|Rosarivo|Revalia|Shruti|Siemreap|SigmarOne|Signika|SignikaNegative|SimHei|SimKai|Simonetta|Tahoma|Tajawal|Tangerine|Taprom|Tauri|Taviraj|Teko|Telex|TenaliRamakrishna|TenorSans|TextMeOne|TheGirlNextDoor|Tienne|Tillana|TimesNewRoman|Timmana|Tinos|TitanOne|Vijaya" rel="stylesheet">
<form method="POST" enctype="multipart/form-data" oninput="TotalSoft_VGallery_Out()">
	<script src='<?php echo plugins_url('../JS/tinymce.min.js',__FILE__);?>'></script>
	<script src='<?php echo plugins_url('../JS/jquery.tinymce.min.js',__FILE__);?>'></script>
	<?php wp_nonce_field( 'edit-menu_', 'TS_VGallery_Nonce' );?>
	<div class="Total_Soft_Gallery_Video_AMD">
		<a href="https://total-soft.com/wp-video-gallery/" target="_blank" title="Click to Buy">
			<div class="Full_Version Full_Versiontt"><i class="totalsoft totalsoft-cart-arrow-down"></i> Get The Full Version</div>
		</a>
		<div class="Full_Version_Span ">
			This is the free version of the plugin.
		</div>
		<div class="Support_Span">
			<a href="https://wordpress.org/support/plugin/gallery-videos/" target="_blank" title="Click Here to Ask">
				<i class="totalsoft totalsoft-comments-o"></i><span style="margin-left:5px;">If you have any questions click here to ask it to our support.</span>
			</a>
		</div>
		<div class="Total_Soft_Gallery_Video_AMD1"></div>
		<div class="Total_Soft_Gallery_Video_AMD2">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Creating New Gallery Video"></i>
			<span class="Total_Soft_Gallery_Video_AMD2_But" onclick="Total_Soft_Gallery_Video_AMD2_But1(<?php echo $TotalSoftGalleryVShortID[0]->GalleryV_ID+1;?>)">
				New Gallery Video
			</span>
		</div>
		<div class="Total_Soft_Gallery_Video_AMD3">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling"></i>
			<span class="Total_Soft_Gallery_Video_AMD2_But" onclick="TotalSoft_Reload()">
				Cancel
			</span>
			<i class="Total_Soft_Gallery_Video_Save Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Saving Gallery"></i>
			<button type="submit" class="Total_Soft_Gallery_Video_Save Total_Soft_Gallery_Video_AMD2_But" name="Total_Soft_Gallery_Video_Save">
				Save
			</button>
			<i class="Total_Soft_Gallery_Video_Update Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Updating Gallery"></i>
			<button type="submit" class="Total_Soft_Gallery_Video_Update Total_Soft_Gallery_Video_AMD2_But" name="Total_Soft_Gallery_Video_Update">
				Update
			</button>
			<input type="text" style="display:none" name="Total_SoftGallery_Video_Update" id="Total_SoftGallery_Video_Update">
		</div>
	</div>
	<table class="Total_Soft_Gallery_VideoAMMTable">
		<tr class="Total_Soft_AMMTableFR">
			<td>No</td>
			<td>Gallery Video Name</td>
			<td>Gallery Video Option</td>
			<td>Videos Count</td>
			<td>Live Preview</td>
			<td>Copy</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</table>
	<table class="Total_Soft_Gallery_VideoAMOTable">
		<?php for($i=0;$i<count($TotalSoftGalleryV);$i++){
			$TotalSoftGallery_Videos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s", $TotalSoftGalleryV[$i]->id));
			?> 
			<tr id="Total_Soft_Gallery_VideoAMOTable_tr_<?php echo $TotalSoftGalleryV[$i]->id;?>">
				<td><?php echo $i+1;?></td>
				<td><?php echo $TotalSoftGalleryV[$i]->TotalSoftGallery_Video_Gallery_Title;?></td>
				<td><?php echo $TotalSoftGalleryV[$i]->TotalSoftGallery_Video_Option;?></td>
				<td><?php echo count($TotalSoftGallery_Videos);?></td>
				<td>
					<a href="<?php echo home_url(); ?>?ts_gv_preview_gallery=<?php echo $TotalSoftGalleryV[$i]->id;?>" class="Total_Soft_Gallery_Video_AMD2_But_LP" target="_blank">
						<i class="Total_Soft_icon totalsoft totalsoft-eye"></i>
					</a>
				</td>
				<td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGallery_Video_Clone(<?php echo $TotalSoftGalleryV[$i]->id;?>)"></i></td>
				<td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGallery_Video_Edit(<?php echo $TotalSoftGalleryV[$i]->id;?>)"></i></td>
				<td>
					<i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGallery_Video_Del(<?php echo $TotalSoftGalleryV[$i]->id;?>)"></i>
					<span class="Total_Soft_GVideo_Del_Span">
						<i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="TotalSoftGallery_Video_Del_Yes(<?php echo $TotalSoftGalleryV[$i]->id;?>)"></i>
						<i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="TotalSoftGallery_Video_Del_No(<?php echo $TotalSoftGalleryV[$i]->id;?>)"></i>
					</span>
				</td>
			</tr>
		<?php }?> 
	</table>
	<div class="Total_Soft_GV_Loading">
		<img src="<?php echo plugins_url('../Images/loading.gif',__FILE__);?>">
	</div>
	<table class="Total_Soft_GV_AMShortTable">
		<tr style="text-align:center">
			<td>Shortcode</td>
			<td>Templete Include</td>
		</tr>
		<tr>
			<td>Copy & paste the shortcode directly into any WordPress post or page.</td>
			<td>Copy & paste this code into a template file to include the gallery within your theme.</td>
		</tr>
		<tr style="text-align:center">
			<td>
				<span id="Total_Soft_Gallery_Video_ID"></span>
				<i class="Total_Soft_Help3 totalsoft totalsoft-files-o" title="Click to Copy." onclick="Copy_Shortcode('Total_Soft_Gallery_Video_ID')"></i>
			</td>
			<td>
				<span id="Total_Soft_Gallery_Video_TID"></span>
				<i class="Total_Soft_Help3 totalsoft totalsoft-files-o" title="Click to Copy." onclick="Copy_Shortcode('Total_Soft_Gallery_Video_TID')"></i>
			</td>
		</tr>
	</table>
	<div class="TS_GV_Add_Video_Fixed_div"></div>
	<div class="TS_GV_Add_Video_Absolute_div">
		<div class="TS_GV_Add_Video_Relative_div">
			<table class="TS_GV_Add_Video_Table">
				<tr>
					<td colspan="2">Add Video</td>
				</tr>
				<tr>
					<td>Video Title</td>
					<td>
						<i class="Total_Soft_Help2 totalsoft totalsoft-question-circle-o" title="This section is mandatory. Each video must given a name."></i>
						<input type="text" name="TotalSoftGallery_Video_Title" id="TotalSoftGallery_Video_Title" class="Total_Soft_Select" style="margin-right: 21px;">
					</td>
				</tr>
				<tr>
					<td>
						<div id="wp-content-media-buttons" class="wp-media-buttons" >
							<a href="#" class="button insert-media add_media" style="border:1px solid #009491; color:#009491; background-color:#f4f4f4" data-editor="TotalSoftGallery_Video_URL_1" title="Add Video" id="TotalSoftGallery_Video_URL" onclick="TotalSoftGallery_Video_URL_Clicked()">
								<span class="wp-media-buttons-icon"></span>Add Video
							</a>
						</div>
						<input type="text" style="display:none;" id="TotalSoftGallery_Video_URL_1">
						<input type="text" style="display:none;" id="TotalSoftGallery_Video_Video_1">
					</td>
					<td>
						<i id="Total_Soft_Gallery_Video_tooltip_id_1"  class="Total_Soft_Help2 totalsoft totalsoft-question-circle-o" title="Click to 'Add Video' button to add videos from YouTube, Vimeo and Wistia."></i>
						<i class="Total_Soft_Help2 totalsoft totalsoft-exclamation-circle Total_Soft_Gallery_Video_tooltip_key_1"></i>
						<div class="Total_Soft_Gallery_Video_tooltip Total_Soft_Gallery_Video_tooltip_key_1">
						  <span class="Total_Soft_Gallery_Video_tooltiptext">IMPORTANT: The site does not support this link.  You need to put it through "https: //".  <i class="Total_Soft_Gallery_Video_close_icon totalsoft totalsoft-times-circle" onclick="close_check_url()"></i>
						  </span>

						</div>
						<input type="text" id="TotalSoftGallery_Video_URL_2" class="Total_Soft_Select" readonly>
						<i class="TS_VG_IT_FD totalsoft totalsoft-times" onclick="TS_VG_IT_FD_Clicked('1')" title="Click to reset this field."></i>
					</td>
				</tr>
				<tr>
					<td>
						<div id="wp-content-media-buttons" class="wp-media-buttons" >
							<a href="#" class="button insert-media add_media" style="border:1px solid #009491; color:#009491; background-color:#f4f4f4" data-editor="TotalSoftGallery_Image_URL_1" title="Add Image" id="TotalSoftGallery_Image_URL" onclick="TotalSoftGallery_Image_URL_Clicked()">
								<span class="wp-media-buttons-icon"></span>Add Image
							</a>
						</div>
						<input type="text" style="display:none;" id="TotalSoftGallery_Image_URL_1">
					</td>
					<td>
						
						<i id="Total_Soft_Gallery_Video_tooltip_id_2"  class="Total_Soft_Help2 totalsoft totalsoft-question-circle-o" title="Click to 'Add Image' button to upload your own images."></i>
						<i class="Total_Soft_Help2 totalsoft totalsoft-times-circle-o   Total_Soft_Gallery_Video_tooltip_key_2"></i>
						<div class="Total_Soft_Gallery_Video_tooltip Total_Soft_Gallery_Video_tooltip_key_2">
						  <span class="Total_Soft_Gallery_Video_tooltiptext">IMPORTANT: The site does not support this link.  You need to put it through "https: //".<i class="Total_Soft_Gallery_Video_close_icon totalsoft totalsoft-times-circle" onclick="close_check_url()"></i></span>
						</div>
						<input type="text" id="TotalSoftGallery_VideoIm_URL_2" class="Total_Soft_Select" readonly>
						<i class="TS_VG_IT_FD totalsoft totalsoft-times" onclick="TS_VG_IT_FD_Clicked('2')" title="Click to reset this field."></i>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="line-height: 38px;">Video Description <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="It is preferable to write a description in gallery. But it is not an essential condition. There are some options which do not appear the descriptions."></i></td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea class="Total_Soft_Select Total_Soft_Desc" name="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_Desc"></textarea>
					</td>
				</tr>
				<tr>
					<td style="line-height: 38px;">External Link <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="You must complete this window if you want your videos has links."></i></td>
					<td>
						<input type="text" name="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_Link" class="Total_Soft_Select">
						New Tab <input type="checkbox" class="Total_Soft_Check" checked="check" id="TotalSoftGallery_Video_ONT" name="TotalSoftGallery_Video_ONT">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<span class="Total_Soft_Gallery_Video_AMD2_But" onclick="TS_VG_Add_Video_Button_Close()">Close</span>
						<span class="Total_Soft_Gallery_Video_AMD2_But" id="Total_Soft_Gallery_Video_Upd" onclick="Total_Soft_Gallery_Video_Update_Vid()">Update Video</span>
						<span class="Total_Soft_Gallery_Video_AMD2_But" id="Total_Soft_Gallery_Video_Sav" onclick="Total_Soft_Gallery_Video_Save_Vid()">Save Video</span>
						<span class="Total_Soft_Gallery_Video_AMD2_But" onclick="Total_Soft_Gallery_Video_Res_Vid()">Reset</span>
						<input type="text" style="display:none;" id="TotalSoftGVHidNum" name="TotalSoftGVHidNum" value="0">
						<input type="text" style="display:none;" id="TotalSoftGVHidBool" name="TotalSoftGVHidBool" value="0">
						<input type="text" style="display:none;" id="TotalSoftGVHidUpdate" value="0">
						<input type="text" style="display:none;" id="TotalSoftGVDelVal" name="TotalSoftGVDelVal" value="0">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="TS_AM_Table_Div">
		<table class="Total_Soft_AMTable">
			<tr>
				<td style="line-height: 38px;">Gallery Video Title <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="Enter the name for creating a gallery."></i></td>
				<td style="line-height: 38px;">Gallery Video Option <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="Select your created effect in gallery option."></i></td>
			</tr>
			<tr>
				<td><input type="text" name="TotalSoftGallery_Video_Gallery_Title" id="TotalSoftGallery_Video_Gallery_Title" class="Total_Soft_Select" required placeholder=" * Required"></td>
				<td>
					<select class="Total_Soft_Select" name="TotalSoftGallery_Video_Option" id="TotalSoftGallery_Video_Option">
						<?php for($i=0;$i<count($TotalSoftGalleryVOptions);$i++){
							$true =( $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetType == 'Gallery Album' ||  $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetType == 'Effective Gallery' )? true : false;?>
							<option <?php disabled( $true, true );?> value="<?php if($true) ''; else echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetName; ?>"><?php echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetName; if($true) echo '( Pro )';?></option>
						<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="line-height: 38px;">Gallery Show Type <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="Select Gallery show type."></i></td>
			</tr>
			<tr>
				<td colspan="2">
					<span class="TotalSoftGallery_Video_ShowType_span">
						<input type="radio" name="TotalSoftGallery_Video_ShowType" class="TotalSoftGallery_Video_ShowType" value="All" checked> All
					</span>
					<span class="TotalSoftGallery_Video_ShowType_span">
						<input type="radio" name="TotalSoftGallery_Video_ShowType" class="TotalSoftGallery_Video_ShowType" value="Pagination"> Pagination
					</span>
					<span class="TotalSoftGallery_Video_ShowType_span">
						<input type="radio" name="TotalSoftGallery_Video_ShowType" class="TotalSoftGallery_Video_ShowType" value="Load"> Load More
					</span>
				</td>
			</tr>
			<tr>
				<td style="line-height: 38px;">Videos Per Page <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="Here you Can write quantity how many videos you want to see in one page."></i></td>
				<td style="line-height: 38px;">Load More Text <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title="Write load more text."></i></td>
			</tr>
			<tr>
				<td>
					<input type="range" class="TotalSoft_VG_Range" name="TotalSoftGallery_Video_PerPage" id="TotalSoftGallery_Video_PerPage" min="1" max="30" value="1">
					<output class="TotalSoft_Out" name="" id="TotalSoftGallery_Video_PerPage_Output" for="TotalSoftGallery_Video_PerPage"></output>
				</td>
				<td>
					<input type="text" name="TotalSoftGallery_LoadMore" id="TotalSoftGallery_LoadMore" class="Total_Soft_Select" value="Load More ...">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="TS_GV_AM_ANV">
						<span class="TS_GV_AM_ANV_Span1" onclick="TS_VG_Add_Video_Button()">
							<span class="TS_GV_AM_ANV_Span2">
								<i class="TS_GV_AM_ANV_Icon totalsoft totalsoft-plus-circle" style="margin-right: 5px;"></i>
								Add Video
							</span>
						</span>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<table class="Total_Soft_AMVideoTable">
		<tr>
			<td>No</td>
			<td>Video</td>
			<td>Video Title</td>
			<td>Copy</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</table>
	<ul id="TotalSoftGallery_VideoUl" onclick="TotalSoftGallery_VideoUlSort()"></ul>
</form>