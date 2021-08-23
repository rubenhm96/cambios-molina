<?php
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'Access Denied' );
}
global $wpdb;

require_once( 'Total-Soft-Gallery-Video-Install.php' );
require_once( dirname( __FILE__ ) . '/Total-Soft-Pricing.php' );

$table_name2   = $wpdb->prefix . "totalsoft_galleryv_manager";
$table_name4   = $wpdb->prefix . "totalsoft_galleryv_dbt";
$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if ( check_admin_referer( 'edit-menu_', 'TS_VGallery_Nonce' ) ) {
		$TotalSoftGalleryV_SetName = sanitize_text_field( $_POST['TotalSoftGalleryV_SetName'] );
		$TotalSoftGalleryV_SetType = sanitize_text_field( $_POST['TotalSoftGalleryV_SetType'] );
		//Grid Video Gallery
		$TotalSoft_GV_GG_01 = sanitize_text_field( $_POST['TotalSoft_GV_GG_01'] );
		$TotalSoft_GV_GG_02 = sanitize_text_field( $_POST['TotalSoft_GV_GG_02'] );
		$TotalSoft_GV_GG_03 = sanitize_text_field( $_POST['TotalSoft_GV_GG_03'] );
		$TotalSoft_GV_GG_04 = sanitize_text_field( $_POST['TotalSoft_GV_GG_04'] );
		$TotalSoft_GV_GG_05 = sanitize_text_field( $_POST['TotalSoft_GV_GG_05'] );
		$TotalSoft_GV_GG_06 = sanitize_text_field( $_POST['TotalSoft_GV_GG_06'] );
		$TotalSoft_GV_GG_07 = sanitize_text_field( $_POST['TotalSoft_GV_GG_07'] ) / 100;
		$TotalSoft_GV_GG_08 = sanitize_text_field( $_POST['TotalSoft_GV_GG_08'] );
		$TotalSoft_GV_GG_11 = sanitize_text_field( $_POST['TotalSoft_GV_GG_11'] );
		$TotalSoft_GV_GG_19 = sanitize_text_field( $_POST['TotalSoft_GV_GG_19'] );
		$TotalSoft_GV_GG_22 = sanitize_text_field( $_POST['TotalSoft_GV_GG_22'] );
		$TotalSoft_GV_GG_24 = sanitize_text_field( $_POST['TotalSoft_GV_GG_24'] );
		$TotalSoft_GV_GG_35 = sanitize_text_field( $_POST['TotalSoft_GV_GG_35'] );
		$TotalSoft_GV_GG_39 = sanitize_text_field( $_POST['TotalSoft_GV_GG_39'] );
		$TotalSoft_GV_GG_44 = sanitize_text_field( $_POST['TotalSoft_GV_GG_44'] );
		$TotalSoft_GV_GG_47 = sanitize_text_field( $_POST['TotalSoft_GV_GG_47'] );
		$TotalSoft_GV_GG_51 = sanitize_text_field( $_POST['TotalSoft_GV_GG_51'] );
		$TotalSoft_GV_GG_52 = sanitize_text_field( $_POST['TotalSoft_GV_GG_52'] );
		$TotalSoft_GV_GG_55 = sanitize_text_field( $_POST['TotalSoft_GV_GG_55'] );
		$TotalSoft_GV_GG_65 = sanitize_text_field( $_POST['TotalSoft_GV_GG_65'] );
		$TotalSoft_GV_GG_66 = sanitize_text_field( $_POST['TotalSoft_GV_GG_66'] );
		$TotalSoft_GV_GG_67 = sanitize_text_field( $_POST['TotalSoft_GV_GG_67'] );
		//LightBox Video Gallery
		$TotalSoft_GV_LG_19 = sanitize_text_field( $_POST['TotalSoft_GV_LG_19'] );
		$TotalSoft_GV_LG_24 = sanitize_text_field( $_POST['TotalSoft_GV_LG_24'] );
		$TotalSoft_GV_LG_01 = sanitize_text_field( $_POST['TotalSoft_GV_LG_01'] );
		$TotalSoft_GV_LG_02 = sanitize_text_field( $_POST['TotalSoft_GV_LG_02'] );
		$TotalSoft_GV_LG_03 = sanitize_text_field( $_POST['TotalSoft_GV_LG_03'] );
		$TotalSoft_GV_LG_04 = sanitize_text_field( $_POST['TotalSoft_GV_LG_04'] );
		$TotalSoft_GV_LG_05 = sanitize_text_field( $_POST['TotalSoft_GV_LG_05'] );
		$TotalSoft_GV_LG_06 = sanitize_text_field( $_POST['TotalSoft_GV_LG_06'] );
		$TotalSoft_GV_LG_07 = sanitize_text_field( $_POST['TotalSoft_GV_LG_07'] );
		$TotalSoft_GV_LG_08 = sanitize_text_field( $_POST['TotalSoft_GV_LG_08'] );
		$TotalSoft_GV_LG_13 = sanitize_text_field( $_POST['TotalSoft_GV_LG_13'] );
		$TotalSoft_GV_LG_16 = sanitize_text_field( $_POST['TotalSoft_GV_LG_16'] );
		$TotalSoft_GV_LG_22 = sanitize_text_field( $_POST['TotalSoft_GV_LG_22'] );
		$TotalSoft_GV_LG_26 = sanitize_text_field( $_POST['TotalSoft_GV_LG_26'] );
		$TotalSoft_GV_LG_28 = sanitize_text_field( $_POST['TotalSoft_GV_LG_28'] );
		$TotalSoft_GV_LG_33 = sanitize_text_field( $_POST['TotalSoft_GV_LG_33'] );
		$TotalSoft_GV_LG_35 = sanitize_text_field( $_POST['TotalSoft_GV_LG_35'] );
		$TotalSoft_GV_LG_37 = sanitize_text_field( $_POST['TotalSoft_GV_LG_37'] );
		$TotalSoft_GV_LG_38 = sanitize_text_field( $_POST['TotalSoft_GV_LG_38'] );
		$TotalSoft_GV_LG_41 = sanitize_text_field( $_POST['TotalSoft_GV_LG_41'] );
		$TotalSoft_GV_LG_49 = sanitize_text_field( $_POST['TotalSoft_GV_LG_49'] );
		$TotalSoft_GV_LG_50 = sanitize_text_field( $_POST['TotalSoft_GV_LG_50'] );
		$TotalSoft_GV_LG_55 = sanitize_text_field( $_POST['TotalSoft_GV_LG_55'] );
		$TotalSoft_GV_LG_66 = sanitize_text_field( $_POST['TotalSoft_GV_LG_66'] );
		$TotalSoft_GV_LG_71 = sanitize_text_field( $_POST['TotalSoft_GV_LG_71'] );
		$TotalSoft_GV_LG_74 = sanitize_text_field( $_POST['TotalSoft_GV_LG_74'] );
		$TotalSoft_GV_LG_75 = sanitize_text_field( $_POST['TotalSoft_GV_LG_75'] );
		$TotalSoft_GV_LG_76 = sanitize_text_field( $_POST['TotalSoft_GV_LG_76'] );
		//Thumbnails Video
		$TotalSoft_GV_TV_01 = sanitize_text_field( $_POST['TotalSoft_GV_TV_01'] );
		$TotalSoft_GV_TV_02 = sanitize_text_field( $_POST['TotalSoft_GV_TV_02'] );
		$TotalSoft_GV_TV_03 = sanitize_text_field( $_POST['TotalSoft_GV_TV_03'] );
		$TotalSoft_GV_TV_04 = sanitize_text_field( $_POST['TotalSoft_GV_TV_04'] );
		$TotalSoft_GV_TV_05 = sanitize_text_field( $_POST['TotalSoft_GV_TV_05'] );
		$TotalSoft_GV_TV_06 = sanitize_text_field( $_POST['TotalSoft_GV_TV_06'] );
		$TotalSoft_GV_TV_07 = sanitize_text_field( $_POST['TotalSoft_GV_TV_07'] );
		$TotalSoft_GV_TV_08 = sanitize_text_field( $_POST['TotalSoft_GV_TV_08'] );
		$TotalSoft_GV_TV_09 = sanitize_text_field( $_POST['TotalSoft_GV_TV_09'] );
		$TotalSoft_GV_TV_10 = sanitize_text_field( $_POST['TotalSoft_GV_TV_10'] );
		$TotalSoft_GV_TV_22 = sanitize_text_field( $_POST['TotalSoft_GV_TV_22'] );
		$TotalSoft_GV_TV_26 = sanitize_text_field( $_POST['TotalSoft_GV_TV_26'] );
		$TotalSoft_GV_TV_31 = sanitize_text_field( $_POST['TotalSoft_GV_TV_31'] );
		$TotalSoft_GV_TV_34 = sanitize_text_field( $_POST['TotalSoft_GV_TV_34'] );
		$TotalSoft_GV_TV_37 = sanitize_text_field( $_POST['TotalSoft_GV_TV_37'] );
		$TotalSoft_GV_TV_38 = sanitize_text_field( $_POST['TotalSoft_GV_TV_38'] );
		$TotalSoft_GV_TV_39 = sanitize_text_field( $_POST['TotalSoft_GV_TV_39'] );
		$TotalSoft_GV_TV_42 = sanitize_text_field( $_POST['TotalSoft_GV_TV_42'] );
		$TotalSoft_GV_TV_51 = sanitize_text_field( $_POST['TotalSoft_GV_TV_51'] );
		$TotalSoft_GV_TV_54 = sanitize_text_field( $_POST['TotalSoft_GV_TV_54'] );
		$TotalSoft_GV_TV_55 = sanitize_text_field( $_POST['TotalSoft_GV_TV_55'] );
		$TotalSoft_GV_TV_56 = sanitize_text_field( $_POST['TotalSoft_GV_TV_56'] );
		//Content Popup
		$TotalSoft_GV_CP_01 = sanitize_text_field( $_POST['TotalSoft_GV_CP_01'] );
		$TotalSoft_GV_CP_02 = sanitize_text_field( $_POST['TotalSoft_GV_CP_02'] );
		$TotalSoft_GV_CP_03 = sanitize_text_field( $_POST['TotalSoft_GV_CP_03'] );
		$TotalSoft_GV_CP_04 = sanitize_text_field( $_POST['TotalSoft_GV_CP_04'] );
		$TotalSoft_GV_CP_05 = sanitize_text_field( $_POST['TotalSoft_GV_CP_05'] );
		$TotalSoft_GV_CP_06 = sanitize_text_field( $_POST['TotalSoft_GV_CP_06'] );
		$TotalSoft_GV_CP_07 = sanitize_text_field( $_POST['TotalSoft_GV_CP_07'] );
		$TotalSoft_GV_CP_08 = sanitize_text_field( $_POST['TotalSoft_GV_CP_08'] );
		$TotalSoft_GV_CP_13 = sanitize_text_field( $_POST['TotalSoft_GV_CP_13'] );
		$TotalSoft_GV_CP_19 = sanitize_text_field( $_POST['TotalSoft_GV_CP_19'] );
		$TotalSoft_GV_CP_25 = sanitize_text_field( $_POST['TotalSoft_GV_CP_25'] );
		$TotalSoft_GV_CP_29 = sanitize_text_field( $_POST['TotalSoft_GV_CP_29'] );
		$TotalSoft_GV_CP_30 = sanitize_text_field( $_POST['TotalSoft_GV_CP_30'] );
		$TotalSoft_GV_CP_33 = sanitize_text_field( $_POST['TotalSoft_GV_CP_33'] );
		$TotalSoft_GV_CP_45 = sanitize_text_field( $_POST['TotalSoft_GV_CP_45'] );
		$TotalSoft_GV_CP_50 = sanitize_text_field( $_POST['TotalSoft_GV_CP_50'] );
		$TotalSoft_GV_CP_57 = sanitize_text_field( $_POST['TotalSoft_GV_CP_57'] );
		$TotalSoft_GV_CP_62 = sanitize_text_field( $_POST['TotalSoft_GV_CP_62'] );
		$TotalSoft_GV_CP_66 = sanitize_text_field( $_POST['TotalSoft_GV_CP_66'] );
		$TotalSoft_GV_CP_72 = sanitize_text_field( $_POST['TotalSoft_GV_CP_72'] );
		$TotalSoft_GV_CP_73 = sanitize_text_field( $_POST['TotalSoft_GV_CP_73'] );
		$TotalSoft_GV_CP_74 = sanitize_text_field( $_POST['TotalSoft_GV_CP_74'] );
		$TotalSoft_GV_CP_75 = sanitize_text_field( $_POST['TotalSoft_GV_CP_75'] );
		//Elastic Gallery
		$TotalSoft_GV_EG_01 = sanitize_text_field( $_POST['TotalSoft_GV_EG_01'] );
		$TotalSoft_GV_EG_02 = sanitize_text_field( $_POST['TotalSoft_GV_EG_02'] );
		$TotalSoft_GV_EG_03 = sanitize_text_field( $_POST['TotalSoft_GV_EG_03'] );
		$TotalSoft_GV_EG_04 = sanitize_text_field( $_POST['TotalSoft_GV_EG_04'] );
		$TotalSoft_GV_EG_05 = sanitize_text_field( $_POST['TotalSoft_GV_EG_05'] );
		$TotalSoft_GV_EG_06 = sanitize_text_field( $_POST['TotalSoft_GV_EG_06'] );
		$TotalSoft_GV_EG_07 = sanitize_text_field( $_POST['TotalSoft_GV_EG_07'] );
		$TotalSoft_GV_EG_08 = sanitize_text_field( $_POST['TotalSoft_GV_EG_08'] );
		$TotalSoft_GV_EG_09 = sanitize_text_field( $_POST['TotalSoft_GV_EG_09'] );
		$TotalSoft_GV_EG_10 = sanitize_text_field( $_POST['TotalSoft_GV_EG_10'] );
		$TotalSoft_GV_EG_17 = sanitize_text_field( $_POST['TotalSoft_GV_EG_17'] );
		$TotalSoft_GV_EG_31 = sanitize_text_field( $_POST['TotalSoft_GV_EG_31'] );
		$TotalSoft_GV_EG_33 = sanitize_text_field( $_POST['TotalSoft_GV_EG_33'] );
		$TotalSoft_GV_EG_44 = sanitize_text_field( $_POST['TotalSoft_GV_EG_44'] );
		$TotalSoft_GV_EG_45 = sanitize_text_field( $_POST['TotalSoft_GV_EG_45'] );
		$TotalSoft_GV_EG_48 = sanitize_text_field( $_POST['TotalSoft_GV_EG_48'] );
		$TotalSoft_GV_EG_56 = sanitize_text_field( $_POST['TotalSoft_GV_EG_56'] );
		$TotalSoft_GV_EG_57 = sanitize_text_field( $_POST['TotalSoft_GV_EG_57'] );
		$TotalSoft_GV_EG_58 = sanitize_text_field( $_POST['TotalSoft_GV_EG_58'] );
		//Fancy Gallery
		$TotalSoft_GV_FG_01 = sanitize_text_field( $_POST['TotalSoft_GV_FG_01'] );
		$TotalSoft_GV_FG_02 = sanitize_text_field( $_POST['TotalSoft_GV_FG_02'] );
		$TotalSoft_GV_FG_03 = sanitize_text_field( $_POST['TotalSoft_GV_FG_03'] );
		$TotalSoft_GV_FG_04 = sanitize_text_field( $_POST['TotalSoft_GV_FG_04'] );
		$TotalSoft_GV_FG_05 = sanitize_text_field( $_POST['TotalSoft_GV_FG_05'] );
		$TotalSoft_GV_FG_06 = sanitize_text_field( $_POST['TotalSoft_GV_FG_06'] );
		$TotalSoft_GV_FG_07 = sanitize_text_field( $_POST['TotalSoft_GV_FG_07'] );
		$TotalSoft_GV_FG_08 = sanitize_text_field( $_POST['TotalSoft_GV_FG_08'] );
		$TotalSoft_GV_FG_09 = sanitize_text_field( $_POST['TotalSoft_GV_FG_09'] );
		$TotalSoft_GV_FG_17 = sanitize_text_field( $_POST['TotalSoft_GV_FG_17'] );
		$TotalSoft_GV_FG_39 = sanitize_text_field( $_POST['TotalSoft_GV_FG_39'] );
		$TotalSoft_GV_FG_43 = sanitize_text_field( $_POST['TotalSoft_GV_FG_43'] );
		$TotalSoft_GV_FG_46 = sanitize_text_field( $_POST['TotalSoft_GV_FG_46'] );
		$TotalSoft_GV_FG_52 = sanitize_text_field( $_POST['TotalSoft_GV_FG_52'] );
		$TotalSoft_GV_FG_53 = sanitize_text_field( $_POST['TotalSoft_GV_FG_53'] );
		$TotalSoft_GV_FG_56 = sanitize_text_field( $_POST['TotalSoft_GV_FG_56'] );
		$TotalSoft_GV_FG_64 = sanitize_text_field( $_POST['TotalSoft_GV_FG_64'] );
		$TotalSoft_GV_FG_65 = sanitize_text_field( $_POST['TotalSoft_GV_FG_65'] );
		$TotalSoft_GV_FG_66 = sanitize_text_field( $_POST['TotalSoft_GV_FG_66'] );
		$TotalSoft_GV_FG_67 = sanitize_text_field( $_POST['TotalSoft_GV_FG_67'] );
		//Parallax Engine
		$TotalSoft_GV_PE_01 = sanitize_text_field( $_POST['TotalSoft_GV_PE_01'] );
		$TotalSoft_GV_PE_02 = sanitize_text_field( $_POST['TotalSoft_GV_PE_02'] );
		$TotalSoft_GV_PE_03 = sanitize_text_field( $_POST['TotalSoft_GV_PE_03'] );
		$TotalSoft_GV_PE_04 = sanitize_text_field( $_POST['TotalSoft_GV_PE_04'] );
		$TotalSoft_GV_PE_05 = sanitize_text_field( $_POST['TotalSoft_GV_PE_05'] );
		$TotalSoft_GV_PE_06 = sanitize_text_field( $_POST['TotalSoft_GV_PE_06'] );
		$TotalSoft_GV_PE_07 = sanitize_text_field( $_POST['TotalSoft_GV_PE_07'] );
		$TotalSoft_GV_PE_08 = sanitize_text_field( $_POST['TotalSoft_GV_PE_08'] );
		$TotalSoft_GV_PE_09 = sanitize_text_field( $_POST['TotalSoft_GV_PE_09'] );
		$TotalSoft_GV_PE_17 = sanitize_text_field( $_POST['TotalSoft_GV_PE_17'] );
		$TotalSoft_GV_PE_37 = sanitize_text_field( $_POST['TotalSoft_GV_PE_37'] );
		$TotalSoft_GV_PE_40 = sanitize_text_field( $_POST['TotalSoft_GV_PE_40'] );
		$TotalSoft_GV_PE_45 = sanitize_text_field( $_POST['TotalSoft_GV_PE_45'] );
		$TotalSoft_GV_PE_46 = sanitize_text_field( $_POST['TotalSoft_GV_PE_46'] );
		$TotalSoft_GV_PE_49 = sanitize_text_field( $_POST['TotalSoft_GV_PE_49'] );
		$TotalSoft_GV_PE_57 = sanitize_text_field( $_POST['TotalSoft_GV_PE_57'] );
		$TotalSoft_GV_PE_58 = sanitize_text_field( $_POST['TotalSoft_GV_PE_58'] );
		$TotalSoft_GV_PE_59 = sanitize_text_field( $_POST['TotalSoft_GV_PE_59'] );
		//Classic Gallery
		$TotalSoft_GV_CG_01 = sanitize_text_field( $_POST['TotalSoft_GV_CG_01'] );
		$TotalSoft_GV_CG_07 = sanitize_text_field( $_POST['TotalSoft_GV_CG_07'] );
		$TotalSoft_GV_CG_09 = sanitize_text_field( $_POST['TotalSoft_GV_CG_09'] );
		$TotalSoft_GV_CG_14 = sanitize_text_field( $_POST['TotalSoft_GV_CG_14'] );
		$TotalSoft_GV_CG_17 = sanitize_text_field( $_POST['TotalSoft_GV_CG_17'] );
		$TotalSoft_GV_CG_18 = sanitize_text_field( $_POST['TotalSoft_GV_CG_18'] );
		$TotalSoft_GV_CG_20 = sanitize_text_field( $_POST['TotalSoft_GV_CG_20'] );
		$TotalSoft_GV_CG_31 = sanitize_text_field( $_POST['TotalSoft_GV_CG_31'] );
		$TotalSoft_GV_CG_35 = sanitize_text_field( $_POST['TotalSoft_GV_CG_35'] );
		$TotalSoft_GV_CG_38 = sanitize_text_field( $_POST['TotalSoft_GV_CG_38'] );
		$TotalSoft_GV_CG_43 = sanitize_text_field( $_POST['TotalSoft_GV_CG_43'] );
		$TotalSoft_GV_CG_48 = sanitize_text_field( $_POST['TotalSoft_GV_CG_48'] );
		$TotalSoft_GV_CG_58 = sanitize_text_field( $_POST['TotalSoft_GV_CG_58'] );
		$TotalSoft_GV_CG_59 = sanitize_text_field( $_POST['TotalSoft_GV_CG_59'] );
		$TotalSoft_GV_CG_60 = sanitize_text_field( $_POST['TotalSoft_GV_CG_60'] );
		//Space Gallery
		$TotalSoft_GV_SG_01 = sanitize_text_field( $_POST['TotalSoft_GV_SG_01'] );
		$TotalSoft_GV_SG_02 = sanitize_text_field( $_POST['TotalSoft_GV_SG_02'] );
		$TotalSoft_GV_SG_03 = sanitize_text_field( $_POST['TotalSoft_GV_SG_03'] );
		$TotalSoft_GV_SG_04 = sanitize_text_field( $_POST['TotalSoft_GV_SG_04'] );
		$TotalSoft_GV_SG_05 = sanitize_text_field( $_POST['TotalSoft_GV_SG_05'] );
		$TotalSoft_GV_SG_06 = sanitize_text_field( $_POST['TotalSoft_GV_SG_06'] );
		$TotalSoft_GV_SG_14 = sanitize_text_field( $_POST['TotalSoft_GV_SG_14'] );
		$TotalSoft_GV_SG_17 = sanitize_text_field( $_POST['TotalSoft_GV_SG_17'] );
		$TotalSoft_GV_SG_18 = sanitize_text_field( $_POST['TotalSoft_GV_SG_18'] );
		$TotalSoft_GV_SG_23 = sanitize_text_field( $_POST['TotalSoft_GV_SG_23'] );
		$TotalSoft_GV_SG_24 = sanitize_text_field( $_POST['TotalSoft_GV_SG_24'] );
		$TotalSoft_GV_SG_25 = sanitize_text_field( $_POST['TotalSoft_GV_SG_25'] );
		$TotalSoft_GV_SG_28 = sanitize_text_field( $_POST['TotalSoft_GV_SG_28'] );
		$TotalSoft_GV_SG_29 = sanitize_text_field( $_POST['TotalSoft_GV_SG_29'] );
		$TotalSoft_GV_SG_31 = sanitize_text_field( $_POST['TotalSoft_GV_SG_31'] );
		$TotalSoft_GV_SG_32 = sanitize_text_field( $_POST['TotalSoft_GV_SG_32'] );
		$TotalSoft_GV_SG_40 = sanitize_text_field( $_POST['TotalSoft_GV_SG_40'] );
		$TotalSoft_GV_SG_41 = sanitize_text_field( $_POST['TotalSoft_GV_SG_41'] );
		$TotalSoft_GV_SG_43 = sanitize_text_field( $_POST['TotalSoft_GV_SG_43'] );
		$TotalSoft_GV_SG_44 = sanitize_text_field( $_POST['TotalSoft_GV_SG_44'] );
		$TotalSoft_GV_SG_47 = sanitize_text_field( $_POST['TotalSoft_GV_SG_47'] );
		$TotalSoft_GV_SG_48 = sanitize_text_field( $_POST['TotalSoft_GV_SG_48'] );
		$TotalSoft_GV_SG_49 = sanitize_text_field( $_POST['TotalSoft_GV_SG_49'] );
		$TotalSoft_GV_SG_50 = sanitize_text_field( $_POST['TotalSoft_GV_SG_50'] );
		$TotalSoft_GV_SG_54 = sanitize_text_field( $_POST['TotalSoft_GV_SG_54'] );
		$TotalSoft_GV_SG_57 = sanitize_text_field( $_POST['TotalSoft_GV_SG_57'] );
		$TotalSoft_GV_SG_59 = sanitize_text_field( $_POST['TotalSoft_GV_SG_59'] );
		$TotalSoft_GV_SG_62 = sanitize_text_field( $_POST['TotalSoft_GV_SG_62'] );
		$TotalSoft_GV_SG_73 = sanitize_text_field( $_POST['TotalSoft_GV_SG_73'] );
		$TotalSoft_GV_SG_74 = sanitize_text_field( $_POST['TotalSoft_GV_SG_74'] );
		if ( $TotalSoft_GV_GG_01 == 'on' ) {
			$TotalSoft_GV_GG_01 = 'true';
		} else {
			$TotalSoft_GV_GG_01 = 'false';
		}
		if ( $TotalSoft_GV_GG_02 == 'on' ) {
			$TotalSoft_GV_GG_02 = 'true';
		} else {
			$TotalSoft_GV_GG_02 = 'false';
		}

		if ( $TotalSoft_GV_LG_19 == '1' ) {
			$TotalSoft_GV_LG_20 = 'totalsoft totalsoft-play-circle';
			$TotalSoft_GV_LG_21 = 'totalsoft totalsoft-pause-circle';
		} else if ( $TotalSoft_GV_LG_19 == '2' ) {
			$TotalSoft_GV_LG_20 = 'totalsoft totalsoft-play-circle-o';
			$TotalSoft_GV_LG_21 = 'totalsoft totalsoft-pause-circle-o';
		} else if ( $TotalSoft_GV_LG_19 == '3' ) {
			$TotalSoft_GV_LG_20 = 'totalsoft totalsoft-play';
			$TotalSoft_GV_LG_21 = 'totalsoft totalsoft-pause';
		}
		if ( $TotalSoft_GV_LG_24 == '1' ) {
			$TotalSoft_GV_LG_25 = 'totalsoft totalsoft-times';
		} else if ( $TotalSoft_GV_LG_24 == '2' ) {
			$TotalSoft_GV_LG_25 = 'totalsoft totalsoft-times-circle-o';
		} else if ( $TotalSoft_GV_LG_24 == '3' ) {
			$TotalSoft_GV_LG_25 = 'totalsoft totalsoft-times-circle';
		}
		if ( isset( $_POST['Total_Soft_Gallery_Video_Update_Option'] ) ) {
			$Total_SoftGallery_Video_Update = sanitize_text_field( $_POST['Total_SoftGallery_Video_Update'] );

			$wpdb->query( $wpdb->prepare( "UPDATE $table_name4 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s WHERE id = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $Total_SoftGallery_Video_Update ) );

			if ( $TotalSoftGalleryV_SetType == 'Grid Video Gallery' ) {

				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_11 = %s, TotalSoft_GV_1_19 = %s, TotalSoft_GV_1_22 = %s, TotalSoft_GV_1_24 = %s, TotalSoft_GV_1_35 = %s, TotalSoft_GV_1_39 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_GG_01, $TotalSoft_GV_GG_02, $TotalSoft_GV_GG_03, $TotalSoft_GV_GG_04, $TotalSoft_GV_GG_05, $TotalSoft_GV_GG_06, $TotalSoft_GV_GG_07, $TotalSoft_GV_GG_08, $TotalSoft_GV_GG_11, $TotalSoft_GV_GG_19, $TotalSoft_GV_GG_22, $TotalSoft_GV_GG_24, $TotalSoft_GV_GG_35, $TotalSoft_GV_GG_39, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_05 = %s, TotalSoft_GV_2_08 = %s, TotalSoft_GV_2_12 = %s, TotalSoft_GV_2_13 = %s, TotalSoft_GV_2_16 = %s, TotalSoft_GV_2_26 = %s, TotalSoft_GV_2_27 = %s, TotalSoft_GV_2_28 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_GG_44, $TotalSoft_GV_GG_47, $TotalSoft_GV_GG_51, $TotalSoft_GV_GG_52, $TotalSoft_GV_GG_55, $TotalSoft_GV_GG_65, $TotalSoft_GV_GG_66, $TotalSoft_GV_GG_67, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'LightBox Video Gallery' ) {
				//echo $TotalSoft_GV_LG_25; exit;


				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_13 = %s, TotalSoft_GV_1_16 = %s, TotalSoft_GV_1_19 = %s, TotalSoft_GV_1_20 = %s, TotalSoft_GV_1_22 = %s, TotalSoft_GV_1_24 = %s, TotalSoft_GV_1_25 = %s, TotalSoft_GV_1_26 = %s, TotalSoft_GV_1_28 = %s, TotalSoft_GV_1_33 = %s, TotalSoft_GV_1_35 = %s, TotalSoft_GV_1_37 = %s, TotalSoft_GV_1_38 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_LG_01, $TotalSoft_GV_LG_02, $TotalSoft_GV_LG_03, $TotalSoft_GV_LG_04, $TotalSoft_GV_LG_05, $TotalSoft_GV_LG_06, $TotalSoft_GV_LG_07, $TotalSoft_GV_LG_08, $TotalSoft_GV_LG_13, $TotalSoft_GV_LG_16, $TotalSoft_GV_LG_19, $TotalSoft_GV_LG_20, $TotalSoft_GV_LG_22, $TotalSoft_GV_LG_24, $TotalSoft_GV_LG_25, $TotalSoft_GV_LG_26, $TotalSoft_GV_LG_28, $TotalSoft_GV_LG_33, $TotalSoft_GV_LG_35, $TotalSoft_GV_LG_37, $TotalSoft_GV_LG_38, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_02 = %s, TotalSoft_GV_2_10 = %s, TotalSoft_GV_2_11 = %s, TotalSoft_GV_2_16 = %s, TotalSoft_GV_2_27 = %s, TotalSoft_GV_2_32 = %s, TotalSoft_GV_2_35 = %s, TotalSoft_GV_2_36 = %s, TotalSoft_GV_2_37 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_LG_41, $TotalSoft_GV_LG_49, $TotalSoft_GV_LG_50, $TotalSoft_GV_LG_55, $TotalSoft_GV_LG_66, $TotalSoft_GV_LG_71, $TotalSoft_GV_LG_74, $TotalSoft_GV_LG_75, $TotalSoft_GV_LG_76, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Thumbnails Video' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_10 = %s, TotalSoft_GV_1_22 = %s, TotalSoft_GV_1_26 = %s, TotalSoft_GV_1_31 = %s, TotalSoft_GV_1_34 = %s, TotalSoft_GV_1_37 = %s, TotalSoft_GV_1_38 = %s, TotalSoft_GV_1_39 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_TV_01, $TotalSoft_GV_TV_02, $TotalSoft_GV_TV_03, $TotalSoft_GV_TV_04, $TotalSoft_GV_TV_05, $TotalSoft_GV_TV_06, $TotalSoft_GV_TV_07, $TotalSoft_GV_TV_08, $TotalSoft_GV_TV_09, $TotalSoft_GV_TV_10, $TotalSoft_GV_TV_22, $TotalSoft_GV_TV_26, $TotalSoft_GV_TV_31, $TotalSoft_GV_TV_34, $TotalSoft_GV_TV_37, $TotalSoft_GV_TV_38, $TotalSoft_GV_TV_39, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_03 = %s, TotalSoft_GV_2_12 = %s, TotalSoft_GV_2_15 = %s, TotalSoft_GV_2_16 = %s, TotalSoft_GV_2_17 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_TV_42, $TotalSoft_GV_TV_51, $TotalSoft_GV_TV_54, $TotalSoft_GV_TV_55, $TotalSoft_GV_TV_56, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Content Popup' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_13 = %s, TotalSoft_GV_1_19 = %s, TotalSoft_GV_1_25 = %s, TotalSoft_GV_1_29 = %s, TotalSoft_GV_1_30 = %s, TotalSoft_GV_1_33 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_CP_01, $TotalSoft_GV_CP_02, $TotalSoft_GV_CP_03, $TotalSoft_GV_CP_04, $TotalSoft_GV_CP_05, $TotalSoft_GV_CP_06, $TotalSoft_GV_CP_07, $TotalSoft_GV_CP_08, $TotalSoft_GV_CP_13, $TotalSoft_GV_CP_19, $TotalSoft_GV_CP_25, $TotalSoft_GV_CP_29, $TotalSoft_GV_CP_30, $TotalSoft_GV_CP_33, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_06 = %s, TotalSoft_GV_2_11 = %s, TotalSoft_GV_2_18 = %s, TotalSoft_GV_2_23 = %s, TotalSoft_GV_2_27 = %s, TotalSoft_GV_2_33 = %s, TotalSoft_GV_2_34 = %s, TotalSoft_GV_2_35 = %s, TotalSoft_GV_2_36 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_CP_45, $TotalSoft_GV_CP_50, $TotalSoft_GV_CP_57, $TotalSoft_GV_CP_62, $TotalSoft_GV_CP_66, $TotalSoft_GV_CP_72, $TotalSoft_GV_CP_73, $TotalSoft_GV_CP_74, $TotalSoft_GV_CP_75, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Elastic Gallery' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_10 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_31 = %s, TotalSoft_GV_1_33 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_EG_01, $TotalSoft_GV_EG_02, $TotalSoft_GV_EG_03, $TotalSoft_GV_EG_04, $TotalSoft_GV_EG_05, $TotalSoft_GV_EG_06, $TotalSoft_GV_EG_07, $TotalSoft_GV_EG_08, $TotalSoft_GV_EG_09, $TotalSoft_GV_EG_10, $TotalSoft_GV_EG_17, $TotalSoft_GV_EG_31, $TotalSoft_GV_EG_33, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_05 = %s, TotalSoft_GV_2_06 = %s, TotalSoft_GV_2_09 = %s, TotalSoft_GV_2_17 = %s, TotalSoft_GV_2_18 = %s, TotalSoft_GV_2_19 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_EG_44, $TotalSoft_GV_EG_45, $TotalSoft_GV_EG_48, $TotalSoft_GV_EG_56, $TotalSoft_GV_EG_57, $TotalSoft_GV_EG_58, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Fancy Gallery' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_39 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_FG_01, $TotalSoft_GV_FG_02, $TotalSoft_GV_FG_03, $TotalSoft_GV_FG_04, $TotalSoft_GV_FG_05, $TotalSoft_GV_FG_06, $TotalSoft_GV_FG_07, $TotalSoft_GV_FG_08, $TotalSoft_GV_FG_09, $TotalSoft_GV_FG_17, $TotalSoft_GV_FG_39, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_04 = %s, TotalSoft_GV_2_07 = %s, TotalSoft_GV_2_13 = %s, TotalSoft_GV_2_14 = %s, TotalSoft_GV_2_17 = %s, TotalSoft_GV_2_25 = %s, TotalSoft_GV_2_26 = %s, TotalSoft_GV_2_27 = %s, TotalSoft_GV_2_28 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_FG_43, $TotalSoft_GV_FG_46, $TotalSoft_GV_FG_52, $TotalSoft_GV_FG_53, $TotalSoft_GV_FG_56, $TotalSoft_GV_FG_64, $TotalSoft_GV_FG_65, $TotalSoft_GV_FG_66, $TotalSoft_GV_FG_67, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Parallax Engine' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_37 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_PE_01, $TotalSoft_GV_PE_02, $TotalSoft_GV_PE_03, $TotalSoft_GV_PE_04, $TotalSoft_GV_PE_05, $TotalSoft_GV_PE_06, $TotalSoft_GV_PE_07, $TotalSoft_GV_PE_08, $TotalSoft_GV_PE_09, $TotalSoft_GV_PE_17, $TotalSoft_GV_PE_37, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_01 = %s, TotalSoft_GV_2_06 = %s, TotalSoft_GV_2_07 = %s, TotalSoft_GV_2_10 = %s, TotalSoft_GV_2_18 = %s, TotalSoft_GV_2_19 = %s, TotalSoft_GV_2_20 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_PE_40, $TotalSoft_GV_PE_45, $TotalSoft_GV_PE_46, $TotalSoft_GV_PE_49, $TotalSoft_GV_PE_57, $TotalSoft_GV_PE_58, $TotalSoft_GV_PE_59, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Classic Gallery' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_14 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_18 = %s, TotalSoft_GV_1_20 = %s, TotalSoft_GV_1_31 = %s, TotalSoft_GV_1_35 = %s, TotalSoft_GV_1_38 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_CG_01, $TotalSoft_GV_CG_07, $TotalSoft_GV_CG_09, $TotalSoft_GV_CG_14, $TotalSoft_GV_CG_17, $TotalSoft_GV_CG_18, $TotalSoft_GV_CG_20, $TotalSoft_GV_CG_31, $TotalSoft_GV_CG_35, $TotalSoft_GV_CG_38, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_04 = %s, TotalSoft_GV_2_09 = %s, TotalSoft_GV_2_19 = %s, TotalSoft_GV_2_20 = %s, TotalSoft_GV_2_21 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_CG_43, $TotalSoft_GV_CG_48, $TotalSoft_GV_CG_58, $TotalSoft_GV_CG_59, $TotalSoft_GV_CG_60, $Total_SoftGallery_Video_Update ) );
			} else if ( $TotalSoftGalleryV_SetType == 'Space Gallery' ) {
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_1 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_14 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_18 = %s, TotalSoft_GV_1_23 = %s, TotalSoft_GV_1_24 = %s, TotalSoft_GV_1_25 = %s, TotalSoft_GV_1_28 = %s, TotalSoft_GV_1_29 = %s, TotalSoft_GV_1_31 = %s, TotalSoft_GV_1_32 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_SG_01, $TotalSoft_GV_SG_02, $TotalSoft_GV_SG_03, $TotalSoft_GV_SG_04, $TotalSoft_GV_SG_05, $TotalSoft_GV_SG_06, $TotalSoft_GV_SG_14, $TotalSoft_GV_SG_17, $TotalSoft_GV_SG_18, $TotalSoft_GV_SG_23, $TotalSoft_GV_SG_24, $TotalSoft_GV_SG_25, $TotalSoft_GV_SG_28, $TotalSoft_GV_SG_29, $TotalSoft_GV_SG_31, $TotalSoft_GV_SG_32, $Total_SoftGallery_Video_Update ) );
				$wpdb->query( $wpdb->prepare( "UPDATE $table_name4_2 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_01 = %s, TotalSoft_GV_2_02 = %s, TotalSoft_GV_2_04 = %s, TotalSoft_GV_2_05 = %s, TotalSoft_GV_2_08 = %s, TotalSoft_GV_2_09 = %s, TotalSoft_GV_2_10 = %s, TotalSoft_GV_2_11 = %s, TotalSoft_GV_2_15 = %s, TotalSoft_GV_2_18 = %s, TotalSoft_GV_2_20 = %s, TotalSoft_GV_2_23 = %s, TotalSoft_GV_2_34 = %s, TotalSoft_GV_2_35 = %s WHERE TotalSoftGalleryV_SetID = %d", $TotalSoftGalleryV_SetName, $TotalSoftGalleryV_SetType, $TotalSoft_GV_SG_40, $TotalSoft_GV_SG_41, $TotalSoft_GV_SG_43, $TotalSoft_GV_SG_44, $TotalSoft_GV_SG_47, $TotalSoft_GV_SG_48, $TotalSoft_GV_SG_49, $TotalSoft_GV_SG_50, $TotalSoft_GV_SG_54, $TotalSoft_GV_SG_57, $TotalSoft_GV_SG_59, $TotalSoft_GV_SG_62, $TotalSoft_GV_SG_73, $TotalSoft_GV_SG_74, $Total_SoftGallery_Video_Update ) );
			}
		}
	} else {
		wp_die( 'Security check fail' );
	}
}

$TotalSoftFontCount  = array(
	"Abadi MT Condensed Light", "Aharoni", "Aldhabi", "Amaranth", "Andalus", "Angsana New", "AngsanaUPC", "Anton", "Aparajita", "Arabic Typesetting", "Arial", "Arial Black", "Batang", "BatangChe", "Browallia New", "BrowalliaUPC", "Calibri", "Calibri Light", "Calisto MT", "Cambria", "Candara", "Century Gothic", "Comic Sans MS", "Consolas", "Constantia", "Copperplate Gothic", "Copperplate Gothic Light", "Battambang", "Baumans", "Bungee Shade", "Butcherman","Cabin", "Cabin Sketch", "Cairo", "Damion", "DilleniaUPC", "DaunPenh", "Eagle Lake", "East Sea Dokdo", "Fira Sans Condensed", "Fira Sans Extra Condensed", "FreesiaUPC", "Gafata", "Gabriola", "Jacques Francois", "Headland One", "Katibeh", "KaiTi", "Microsoft Yi Baiti", "Monsieur La Doulaise", "Mr De Haviland", "Nova Script", "Nova Square", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oxygen", "Oxygen Mono", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre",  "Quicksand", "Quintessential", "Qwigley",  "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rosarivo", "Revalia", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai",  "Simonetta", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Vijaya"
);

$TotalSoftFontGCount = array(
		"Abadi MT Condensed Light", "Aharoni", "Aldhabi", "Amaranth", "Andalus", "Angsana New", "AngsanaUPC", "Anton", "Aparajita", "Arabic Typesetting", "Arial", "Arial Black", "Batang", "BatangChe", "Browallia New", "BrowalliaUPC", "Calibri", "Calibri Light", "Calisto MT", "Cambria", "Candara", "Century Gothic", "Comic Sans MS", "Consolas", "Constantia", "Copperplate Gothic", "Copperplate Gothic Light", "Battambang", "Baumans", "Bungee Shade", "Butcherman","Cabin", "Cabin Sketch", "Cairo", "Damion", "DilleniaUPC", "DaunPenh", "Eagle Lake", "East Sea Dokdo", "Fira Sans Condensed", "Fira Sans Extra Condensed", "FreesiaUPC", "Gafata", "Gabriola", "Jacques Francois", "Headland One", "Katibeh", "KaiTi", "Microsoft Yi Baiti", "Monsieur La Doulaise", "Mr De Haviland", "Nova Script", "Nova Square", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oxygen", "Oxygen Mono", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre",  "Quicksand", "Quintessential", "Qwigley",  "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rosarivo", "Revalia", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai",  "Simonetta", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Vijaya"
);


$TotalSoftGalleryVideo      = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name2 WHERE id>%d order by id", 0 ) );
$TotalSoftGalleryVOptions   = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name4 WHERE id > %d", 0 ) );
$TotalSoftGalleryVOption2_1 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetType = %s", 'LightBox Video Gallery' ) );

$TotalSoftGalleryVOption2_2 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetType = %s", 'LightBox Video Gallery' ) );
$TotalSoftGalleryVOption3_1 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetType = %s", 'Thumbnails Video' ) );
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url( '../CSS/totalsoft.css', __FILE__ ); ?>">
<link href="https://fonts.googleapis.com/css?family=AbadiMTCondensedLight|Aharoni|Aldhabi|Amaranth|Andalus|AngsanaNew|AngsanaUPC|Anton|Aparajita|ArabicTypesetting|Arial|ArialBlack|Batang|BatangChe|BrowalliaNew|BrowalliaUPC|Calibri|CalibriLight|CalistoMT|Cambria|Candara|CenturyGothic|ComicSansMS|Consolas|Constantia|CopperplateGothic|CopperplateGothicLight|Battambang|Baumans|BungeeShade|Butcherman|Cabin|CabinSketch|Cairo|Damion|DilleniaUPC|DaunPenh|EagleLake|EastSeaDokdo|FiraSansCondensed|FiraSansExtraCondensed|FreesiaUPC|Gafata|Gabriola|JacquesFrancois|HeadlandOne|Katibeh|KaiTi|MicrosoftYiBaiti|MonsieurLaDoulaise|MrDeHaviland|NovaScript|NovaSquare|Nyala|OdorMeanChey|Offside|OldStandardTT|Oldenburg|Oxygen|OxygenMono|PrincessSofia|Prociono|Prompt|ProstoOne|ProzaLibre|Quicksand|Quintessential|Qwigley|Raavi|RacingSansOne|Radley|Rajdhani|Rakkas|Raleway|RalewayDots|Ramabhadra|Ramaraja|Rosarivo|Revalia|Shruti|Siemreap|SigmarOne|Signika|SignikaNegative|SimHei|SimKai|Simonetta|Tahoma|Tajawal|Tangerine|Taprom|Tauri|Taviraj|Teko|Telex|TenaliRamakrishna|TenorSans|TextMeOne|TheGirlNextDoor|Tienne|Tillana|TimesNewRoman|Timmana|Tinos|TitanOne|Vijaya"
      rel="stylesheet">
<form method="POST" oninput="TotalSoft_VGallery_Out()">
	<?php wp_nonce_field( 'edit-menu_', 'TS_VGallery_Nonce' ); ?>
    <div class="Total_Soft_Gallery_Video_AMD">
        <a href="https://total-soft.com/wp-video-gallery/" target="_blank" title="Click to Buy">
            <div class="Full_Version"><i class="totalsoft totalsoft-cart-arrow-down"></i> Get The Full Version</div>
        </a>
        <div class="Full_Version_Span">
            This is the free version of the plugin.
        </div>
        <div class="Support_Span">
            <a href="https://wordpress.org/support/plugin/gallery-videos/" target="_blank" title="Click Here to Ask">
                <i class="totalsoft totalsoft-comments-o"></i><span style="margin-left:5px;">If you have any questions click here to ask it to our support.</span>
            </a>
        </div>
        <div class="Total_Soft_Gallery_Video_AMD1"></div>
        <div class="Total_Soft_Gallery_Video_AMD2">
            <i class="Total_Soft_Help totalsoft totalsoft-question-circle-o"
               title="Click for Creating New Gallery Video Setting"></i>
            <span class="Total_Soft_Gallery_Video_AMD2_But" onclick="Total_Soft_Gallery_Video_Opt_AMD2_Button1()">
				New Option (Pro)
			</span>
        </div>
        <div class="Total_Soft_Gallery_Video_AMD3">
            <i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling"></i>
            <span class="Total_Soft_Gallery_Video_AMD2_But" onclick="TotalSoft_Reload()">
				Cancel
			</span>
            <i class="Total_Soft_Gallery_Video_Update_Option Total_Soft_Help totalsoft totalsoft-question-circle-o"
               title="Click for Updating Settings"></i>
            <button type="submit" class="Total_Soft_Gallery_Video_Update_Option Total_Soft_Gallery_Video_AMD2_But"
                    name="Total_Soft_Gallery_Video_Update_Option">
                Update
            </button>
									<?php if ( count( $TotalSoftGalleryVideo ) == 0 ) { ?>
             <i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Live Preview."></i>
             <span class="Total_Soft_Gallery_Video_AMD2_But" onclick="TS_GV_Theme_Preview()">
					Live Preview
				</span>
									<?php } else { ?>
             <i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Live Preview."></i>
             <span class="Total_Soft_Gallery_Video_AMD2_But" onclick="TS_GV_Theme_Preview_T()">
					Live Preview
				</span>
									<?php } ?>
            <input type="text" style="display:none" name="Total_SoftGallery_Video_Update"
                   id="Total_SoftGallery_Video_Update">
            <input type="text" style="display:none" id="Total_Soft_GV_Theme_Prev"
                   value="<?php echo home_url(); ?>?ts_gv_preview_theme=true">
        </div>
    </div>
    <table class="Total_Soft_AMMTable">
        <tr class="Total_Soft_AMMTableFR">
            <td>No</td>
            <td>Setting Title</td>
            <td>Gallery Type</td>
            <td>Live Preview</td>
            <td>Copy</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </table>
    <table class="Total_Soft_AMOTable">
					<?php for ( $i = 0; $i < count( $TotalSoftGalleryVOptions ); $i ++ ) { ?>
         <tr id="Total_Soft_AMOTable_tr_<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>">
             <td><?php echo $i + 1; ?></td>
             <td><?php echo $TotalSoftGalleryVOptions[ $i ]->TotalSoftGalleryV_SetName; ?></td>
             <td><?php echo $TotalSoftGalleryVOptions[ $i ]->TotalSoftGalleryV_SetType; ?></td>
             <td>
														<?php if ( count( $TotalSoftGalleryVideo ) == 0 ) { ?>
                  <i class="TS_GV_TP_No totalsoft totalsoft-eye-slash" onclick="TS_GV_Theme_Preview()"></i>
														<?php } else { ?>
                  <a href="<?php echo home_url(); ?>?ts_gv_preview_theme=<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>"
                     class="Total_Soft_Gallery_Video_AMD2_But_LP" target="_blank">
                      <i class="Total_Soft_icon totalsoft totalsoft-eye"></i>
                  </a>
														<?php } ?>
             </td>
             <td><i class="Total_Soft_icon totalsoft totalsoft-file-text"
                    onclick="TotalSoftGalleryV_Clone_Option(<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>)"></i>
             </td>
             <td><i class="Total_Soft_icon totalsoft totalsoft-pencil"
                    onclick="TotalSoftGalleryV_Edit_Option(<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>)"></i>
             </td>
             <td>
                 <i class="Total_Soft_icon totalsoft totalsoft-trash"
                    onclick="TotalSoftGalleryV_Del_Option(<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>)"></i>
                 <span class="Total_Soft_GVideo_Del_Span">
						<i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check"
                           onclick="TotalSoftGalleryV_Del_Option_Yes(<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>)"></i>
						<i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times"
                           onclick="TotalSoftGalleryV_Del_Option_No(<?php echo $TotalSoftGalleryVOptions[ $i ]->id; ?>)"></i>
					</span>
             </td>
         </tr>
					<?php } ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td style="position: relative; height: 27px;">Effective Gallery 1<img
                        src="<?php echo plugins_url( '../Images/SUG-Pro.png', __FILE__ ); ?>"
                        style="position: absolute; top: 4px; right: 10px; width: 37px; height: 20px;"></td>
            <td>Effective Gallery</td>
            <td><a href="https://total-soft.com/wp-video-gallery-effective/" target="_blank" class="TS_GV_Free_Link"><i
                            class="Total_Soft_icon totalsoft totalsoft-eye"></i></a></td>
            <td ><i
                        class="Total_Soft_icon totalsoft totalsoft-file-text"></i></td>
            <td><i
                        class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
            <td onclick="Total_Soft_Gallery_Video_Opt_AMD2_But1()"><i
                        class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
        </tr>
        <tr>
            <td><?php echo $i + 2; ?></td>
            <td style="position: relative; height: 27px;">Effective Gallery 2<img
                        src="<?php echo plugins_url( '../Images/SUG-Pro.png', __FILE__ ); ?>"
                        style="position: absolute; top: 4px; right: 10px; width: 37px; height: 20px;">
            <td>Effective Gallery</td>
            <td><a href="https://total-soft.com/wp-video-gallery-effective-2/" target="_blank"
                   class="TS_GV_Free_Link"><i class="Total_Soft_icon totalsoft totalsoft-eye"></i></a></td>
            <td><i
                        class="Total_Soft_icon totalsoft totalsoft-file-text"></i></td>
            <td ><i
                        class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
            <td onclick="Total_Soft_Gallery_Video_Opt_AMD2_But1()"><i
                        class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
        </tr>
        <tr>
            <td><?php echo $i + 3; ?></td>
            <td style="position: relative; height: 27px;">Gallery Album 1<img
                        src="<?php echo plugins_url( '../Images/SUG-Pro.png', __FILE__ ); ?>"
                        style="position: absolute; top: 4px; right: 10px; width: 37px; height: 20px;">
            <td>Gallery Album</td>
            <td><a href="https://total-soft.com/wp-video-gallery-album/" target="_blank" class="TS_GV_Free_Link"><i
                            class="Total_Soft_icon totalsoft totalsoft-eye"></i></a></td>
            <td ><i
                        class="Total_Soft_icon totalsoft totalsoft-file-text"></i></td>
            <td ><i
                        class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
            <td onclick="Total_Soft_Gallery_Video_Opt_AMD2_But1()"><i
                        class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
        </tr>
        <tr>
            <td><?php echo $i + 4; ?></td>
            <td style="position: relative; height: 27px;">Gallery Album 2<img
                        src="<?php echo plugins_url( '../Images/SUG-Pro.png', __FILE__ ); ?>"
                        style="position: absolute; top: 4px; right: 10px; width: 37px; height: 20px;">
            <td>Gallery Album</td>
            <td><a href="https://total-soft.com/wp-video-gallery-album-2/" target="_blank" class="TS_GV_Free_Link"><i
                            class="Total_Soft_icon totalsoft totalsoft-eye"></i></a></td>
            <td><i
                        class="Total_Soft_icon totalsoft totalsoft-file-text"></i></td>
            <td><i
                        class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
            <td onclick="Total_Soft_Gallery_Video_Opt_AMD2_But1()"><i
                        class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
        </tr>
    </table>
    <div class="Total_Soft_GV_Loading">
        <img src="<?php echo plugins_url( '../Images/loading.gif', __FILE__ ); ?>">
    </div>
    <div class="TS_GV_Option_Div_Set TS_GV_Option_Divv" id="Total_Soft_AMSet_Table" style="margin-top: 15px;">
        <div class="TS_GV_Option_Divv1">
            <div class="TS_GV_Option_Div1">
                <div class="TS_GV_Option_Name">Setting Title <i
                            class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                            title="You can give name to gallery which will be saved with effects created by yourself."></i>
                </div>
                <div class="TS_GV_Option_Field">
                    <input type="text" name="TotalSoftGalleryV_SetName" id="TotalSoftGalleryV_SetName"
                           class="Total_Soft_Select" required placeholder=" * Required">
                </div>
            </div>
        </div>
        <div class="TS_GV_Option_Divv2">
            <div class="TS_GV_Option_Div1">
                <div class="TS_GV_Option_Name">Gallery Type <i
                            class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                            title="Choose that version which you want to see."></i></div>
                <div class="TS_GV_Option_Field">
                    <select class="Total_Soft_Select" name="TotalSoftGalleryV_SetType" id="TotalSoftGalleryV_SetType">
                        <option value="Grid Video Gallery"> Grid Video Gallery</option>
                        <option value="LightBox Video Gallery"> LightBox Video Gallery</option>
                        <option value="Thumbnails Video"> Thumbnails Video</option>
                        <option value="Content Popup"> Content Popup</option>
                        <option value="Elastic Gallery"> Elastic Gallery</option>
                        <option value="Fancy Gallery"> Fancy Gallery</option>
                        <option value="Parallax Engine"> Parallax Engine</option>
                        <option value="Classic Gallery"> Classic Gallery</option>
                        <option value="Space Gallery"> Space Gallery</option>
                        <option value="Effective Gallery"> Effective Gallery</option>
                        <option value="Gallery Album"> Gallery Album</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_1">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_GO" onclick="TS_GV_TM_But('1', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_TD" onclick="TS_GV_TM_But('1', 'TD')">Title &
                Description
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_PO" onclick="TS_GV_TM_But('1', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_LO" onclick="TS_GV_TM_But('1', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_PL" onclick="TS_GV_TM_But('1', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_1_LL" onclick="TS_GV_TM_But('1', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_1_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show Title <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select show the name or no."></i></div>
                    <div class="TS_GV_Option_Field">
                        <div class="switch">
                            <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_GG_01"
                                   name="TotalSoft_GV_GG_01" <?php echo $TotalSoft_GV_GG_01; ?>>
                            <label for="TotalSoft_GV_GG_01" data-on="Yes" data-off="No"></label>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show Description <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select show the description or no."></i></div>
                    <div class="TS_GV_Option_Field">
                        <div class="switch">
                            <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_GG_02"
                                   name="TotalSoft_GV_GG_02" <?php echo $TotalSoft_GV_GG_02; ?>>
                            <label for="TotalSoft_GV_GG_02" data-on="Yes" data-off="No"></label>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Image Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred width of the video and it is all responsive in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_GG_03"
                               id="TotalSoft_GV_GG_03" min="100" max="500" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_03_Output"
                                for="TotalSoft_GV_GG_03"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Place Between <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the distance between the videos."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_GG_04"
                               id="TotalSoft_GV_GG_04" min="0" max="20" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_04_Output"
                                for="TotalSoft_GV_GG_04"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Video Radius <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the radius of video in general Gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_GG_05"
                               id="TotalSoft_GV_GG_05" min="0" max="150" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_05_Output"
                                for="TotalSoft_GV_GG_05"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Keeping the mouse on the image select the Hover Effects which you will see."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_GG_06" id="TotalSoft_GV_GG_06"
                                onchange="TotalSoft_VG_GVG_HEffect()">
                            <option value="none"> None</option>
                            <option value="blur"> Blur</option>
                            <option value="brightness"> Brightness</option>
                            <option value="contrast"> Contrast</option>
                            <option value="grayscale"> Grayscale</option>
                            <option value="hue-rotate"> Hue-rotate</option>
                            <option value="invert"> Invert</option>
                            <option value="drop-shadow"> Drop-shadow</option>
                            <option value="opacity"> Opacity</option>
                            <option value="saturate"> Saturate</option>
                            <option value="sepia"> Sepia</option>
                            <option value="contrast-brightness"> Contrast-Brightness</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Opacity <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the opacity of hover effect."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper" name="TotalSoft_GV_GG_07"
                               id="TotalSoft_GV_GG_07" min="0" max="100" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_07_Output"
                                for="TotalSoft_GV_GG_07"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Drop Shadow Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the shadow color."></i></div>
                    <div class="TS_GV_Option_Field DropShadow">
                        <input type="text" name="TotalSoft_GV_GG_08" id="TotalSoft_GV_GG_08"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                    <div class="TS_GV_Option_Field DropShadow1"></div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_1_TD">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title & Description Area</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose a background color for the title and description. They are on the same area."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_09" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Margin Top <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the distance between the video and the title. For galleries you can choose according to your taste."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_GG_10" min="0" max="25" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_10_Output"
                                    for="TotalSoft_GV_GG_10"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Title Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="This function is for the main title. You can select font size. The size of the title in responsive gallery."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_11" id="TotalSoft_GV_GG_11" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_11_Output"
                                    for="TotalSoft_GV_GG_11"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select the font family that you want to show."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_12">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select a color for the main title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_13" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the position where you want to put the headline. The gallery will be show all what you have chosen."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_14">
                                <option value="left"> Left</option>
                                <option value="right"> Right</option>
                                <option value="center"> Center</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Line After Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line width. Line is located between title and description."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_GG_15" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_15_Output"
                                    for="TotalSoft_GV_GG_15"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the style of the dividing line: None, Solid, Dashed or Dotted."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_16">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferred color to show the line of separation between the title and description."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_17" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_1_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose background color for the description, title and video in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_18" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the popup container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_19" id="TotalSoft_GV_GG_19" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_19_Output"
                                    for="TotalSoft_GV_GG_19"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the style for the border of the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_20">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the lightbox gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_21" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It is possible to give a border radius in the popup window. You can specify the radius by the pixels. In gallery it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_22" id="TotalSoft_GV_GG_22" min="0" max="150" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_22_Output"
                                    for="TotalSoft_GV_GG_22"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Padding <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose border width for popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_GG_23" min="0" max="30" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_23_Output"
                                    for="TotalSoft_GV_GG_23"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Title Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Title <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="In gallery you have opportunity to choose in the popup show the title or no."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_GG_61"
                                       name="">
                                <label for="TotalSoft_GV_GG_61" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="This function is for the popup window. You can select font size for headers. For each screen or mobile version will be its own size for responsiveness."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_24" id="TotalSoft_GV_GG_24" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_24_Output"
                                    for="TotalSoft_GV_GG_24"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font family for the title in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_25">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="In gallery it is necessary to choose the color for video titles which is in the popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_26" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine alignment for the title which is in the popup window and provides information about your video."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_27">
                                <option value="left"> Left</option>
                                <option value="right"> Right</option>
                                <option value="center"> Center</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Description Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Description <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the description should appear or no in popup gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_GG_62"
                                       name="">
                                <label for="TotalSoft_GV_GG_62" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Line After Title in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the width for the line in a popup. The line is between the title and description."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_GG_28" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_28_Output"
                                    for="TotalSoft_GV_GG_28"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the style of the dividing line: None , Solid , Dashed or Dotted."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_29">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferred color to show the line of separation between the title and description in a popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Arrows Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the left and right icons for the gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_31"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icon color to change the video."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_34" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the icon size regardless of the container. The Gallery Video plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_35" id="TotalSoft_GV_GG_35" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_35_Output"
                                    for="TotalSoft_GV_GG_35"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety beautifully designed sets in the gallery to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_36"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'> <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='2'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='3'> <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the icon to close the window. When you close the window with it closes and the video."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_GG_38" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the size of the icon that is to close the popup window. The icon is in the right corner."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_GG_39" id="TotalSoft_GV_GG_39" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_39_Output"
                                    for="TotalSoft_GV_GG_39"></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_1_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the border width for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_GG_40" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_40_Output"
                                for="TotalSoft_GV_GG_40"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the border style for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_41">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border color which is in the lightbox gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_42" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border radius for Gallery link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_GG_43" min="0" max="30" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_43_Output"
                                for="TotalSoft_GV_GG_43"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Link Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL. If you wrote something in your popup window, now you can see it."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_GG_44" id="TotalSoft_GV_GG_44" class="Total_Soft_Select"
                               value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define a background color which is intended for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_45" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the text for the button which you will see in a popup."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the font size for gallery popup."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_GG_47"
                               id="TotalSoft_GV_GG_47" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_47_Output"
                                for="TotalSoft_GV_GG_47"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select that font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_48">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font hover background color for link in the gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_49" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font hover color for link in the gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_50" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_1_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This NEXT button to change the page. But it all in the gallery. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_GG_51" id="TotalSoft_GV_GG_51" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_GG_52" id="TotalSoft_GV_GG_52" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_53" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_54" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_GG_55"
                               id="TotalSoft_GV_GG_55" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_GG_55_Output"
                                for="TotalSoft_GV_GG_55"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_56">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the gallery pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_57" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_58" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_59" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_60" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_GG_63">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_GG_64" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_GG_65" id="TotalSoft_GV_GG_65">
                            <!-- <option value="">                None             </option> -->
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_1_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_GG_67" id="TotalSoft_GV_GG_67"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_GG_66" id="TotalSoft_GV_GG_66"
                                onchange="TS_GV_Loading_Changed('GG', 'TotalSoft_GV_GG_66')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_GG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_GG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_2">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_GO" onclick="TS_GV_TM_But('2', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_HO" onclick="TS_GV_TM_But('2', 'HO')">Hover
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_TO" onclick="TS_GV_TM_But('2', 'TO')">Title
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_LO" onclick="TS_GV_TM_But('2', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_PO" onclick="TS_GV_TM_But('2', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_PL" onclick="TS_GV_TM_But('2', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_2_LL" onclick="TS_GV_TM_But('2', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_2_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred width of the video and it is all responsive in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_01"
                               id="TotalSoft_GV_LG_01" min="100" max="500" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_01_Output"
                                for="TotalSoft_GV_LG_01"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Place Between <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the distance between each image. Here the image from your Youtube and Vimeo videos."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_02"
                               id="TotalSoft_GV_LG_02" min="0" max="20" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_02_Output"
                                for="TotalSoft_GV_LG_02"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the shadow value for the image window."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_03"
                               id="TotalSoft_GV_LG_03" min="0" max="20" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_03_Output"
                                for="TotalSoft_GV_LG_03"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select color which allows to show the shadow of the image."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_04" id="TotalSoft_GV_LG_04"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the preferred width of the border for video."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_05"
                               id="TotalSoft_GV_LG_05" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_05_Output"
                                for="TotalSoft_GV_LG_05"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Identify the basic style of the image border and you can change it at any time."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_LG_06" id="TotalSoft_GV_LG_06">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the image border color which is in the gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_07" id="TotalSoft_GV_LG_07"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the border radius in your lightbox gallery video."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_08"
                               id="TotalSoft_GV_LG_08" min="0" max="200" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_08_Output"
                                for="TotalSoft_GV_LG_08"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Zoom Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select the type of scaling of different and beautifully designed sets from the image."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_LG_49" id="TotalSoft_GV_LG_49">
                            <option value="lImgZoom1"> Effect 1</option>
                            <option value="lImgZoom2"> Effect 2</option>
                            <option value="lImgZoom3"> Effect 3</option>
                            <option value="lImgZoom4"> Effect 4</option>
                            <option value="lImgZoom5"> Effect 5</option>
                            <option value="lImgZoom6"> Effect 6</option>
                            <option value="lImgZoom7"> Effect 7</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Zoom Time <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the time to increase the effect on the gallery. When you hover the mouse over the video you can see the zoom effect."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name="TotalSoft_GV_LG_50"
                               id="TotalSoft_GV_LG_50" min="1" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_50_Output"
                                for="TotalSoft_GV_LG_50"></output>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_2_HO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Line Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Line Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line width."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_LG_61" min="0" max="5" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_61_Output"
                                    for="TotalSoft_GV_LG_61"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Line Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the style to be applied to the line."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_62">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Line Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferred color to show the line of separation."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_63" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="There are 7 different line effect types."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_64">
                                <option value="hovLine1"> Effect 1</option>
                                <option value="hovLine2"> Effect 2</option>
                                <option value="hovLine3"> Effect 3</option>
                                <option value="hovLine4"> Effect 4</option>
                                <option value="hovLine5"> Effect 5</option>
                                <option value="hovLine6"> Effect 6</option>
                                <option value="hovLine7"> Effect 7</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Time <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select effect time for hover line effect."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                                   id="TotalSoft_GV_LG_65" min="1" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_65_Output"
                                    for="TotalSoft_GV_LG_65"></output>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Overlay Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Select a color for the overlay on the video as you keep the mouse arrow on it. The effects are very beautiful and they are very suitable in the gallery."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_51" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the hover effect type. There are 13 effects type in lightbox gallery. They are all different from each other."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_52">
                                <option value="hovLayTVG1"> Effect 1</option>
                                <option value="hovLayTVG2"> Effect 2</option>
                                <option value="hovLayTVG3"> Effect 3</option>
                                <option value="hovLayTVG4"> Effect 4</option>
                                <option value="hovLayTVG5"> Effect 5</option>
                                <option value="hovLayTVG6"> Effect 6</option>
                                <option value="hovLayTVG7"> Effect 7</option>
                                <option value="hovLayTVG8"> Effect 8</option>
                                <option value="hovLayTVG9"> Effect 9</option>
                                <option value="hovLayTVG10"> Effect 10</option>
                                <option value="hovLayTVG11"> Effect 11</option>
                                <option value="hovLayTVG12"> Effect 12</option>
                                <option value="hovLayTVG13"> Effect 13</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Time <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select time of hover effect for gallery video."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                                   id="TotalSoft_GV_LG_53" min="1" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_53_Output"
                                    for="TotalSoft_GV_LG_53"></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_2_TO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the background color for the text container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_54" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font size for the video title."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_55"
                               id="TotalSoft_GV_LG_55" min="10" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_55_Output"
                                for="TotalSoft_GV_LG_55"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for your title which will be seen in gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_56" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine preferable type of your hover effects."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_59">
                            <option value="hovTit1"> Effect 1</option>
                            <option value="hovTit2"> Effect 2</option>
                            <option value="hovTit3"> Effect 3</option>
                            <option value="hovTit4"> Effect 4</option>
                            <option value="hovTit5"> Effect 5</option>
                            <option value="hovTit6"> Effect 6</option>
                            <option value="hovTit7"> Effect 7</option>
                            <option value="hovTit8"> Effect 8</option>
                            <option value="hovTit9"> Effect 9</option>
                            <option value="hovTit10"> Effect 10</option>
                            <option value="hovTit11"> Effect 11</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Time <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select time of hover effect for gallery video."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                               id="TotalSoft_GV_LG_60" min="1" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_60_Output"
                                for="TotalSoft_GV_LG_60"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the preferred font family for the title. Gallery has a basic Google fonts."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_57">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_2_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the font size for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_66"
                               id="TotalSoft_GV_LG_66" min="10" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_66_Output"
                                for="TotalSoft_GV_LG_66"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the button which you will see in image."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_67" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border color which is in the image container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_68" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border width which is in the image container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_LG_69" min="0" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_69_Output"
                                for="TotalSoft_GV_LG_69"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border style."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_70">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Link Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_71" id="TotalSoft_GV_LG_71" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine preferable link type of your hover effects."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_72">
                            <option value="hovLink1"> Effect 1</option>
                            <option value="hovLink2"> Effect 2</option>
                            <option value="hovLink3"> Effect 3</option>
                            <option value="hovLink4"> Effect 4</option>
                            <option value="hovLink5"> Effect 5</option>
                            <option value="hovLink6"> Effect 6</option>
                            <option value="hovLink7"> Effect 7</option>
                            <option value="hovLink8"> Effect 8</option>
                            <option value="hovLink9"> Effect 9</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Time <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select time for hover effect."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                               id="TotalSoft_GV_LG_73" min="1" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_73_Output"
                                for="TotalSoft_GV_LG_73"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the preferred font family for the link button. Plugin has a basic Google font."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_58">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_2_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Open the gallery edit and choose your preferable background color for popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_09" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the container in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_LG_10" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_10_Output"
                                    for="TotalSoft_GV_LG_10"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the style for the border of the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_11">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_12" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="In the popup window it is possible to give a border radius. You can specify the radius by pixels. In plugin it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_13" id="TotalSoft_GV_LG_13" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_13_Output"
                                    for="TotalSoft_GV_LG_13"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Title in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the title or no in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_LG_14"
                                       name="">
                                <label for="TotalSoft_GV_LG_14" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose text to align for title (left, center or right)."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_15">
                                <option value="left"> Left</option>
                                <option value="right"> Right</option>
                                <option value="center"> Center</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define the font size for the image title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_16" id="TotalSoft_GV_LG_16" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_16_Output"
                                    for="TotalSoft_GV_LG_16"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the font family for the image title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_17">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="In the gallery set the color for the image title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_18" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Numbers Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Note the size of the numbers. It is fully responsive."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_35" id="TotalSoft_GV_LG_35" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_35_Output"
                                    for="TotalSoft_GV_LG_35"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the numbers."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_36" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Play Icon Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety of beautifully designed sets for the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="TotalSoft_GV_LG_19" id="TotalSoft_GV_LG_19"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value=""> None</option>
                                <option value='1' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_19 == '1' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf144' . '&nbsp; &nbsp;' . 'Play Circle'; ?>   </option>
                                <option value='2' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_19 == '2' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf01d' . '&nbsp; &nbsp;' . 'Play Circle O'; ?> </option>
                                <option value='3' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_19 == '3' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf04b' . '&nbsp; &nbsp;' . 'Play'; ?>          </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the size of the play icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_22" id="TotalSoft_GV_LG_22" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_22_Output"
                                    for="TotalSoft_GV_LG_22"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color of the play icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_23" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can choose icons from different beautifully designed sets in video to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="TotalSoft_GV_LG_24" id="TotalSoft_GV_LG_24"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value=""> None</option>
                                <option value='1' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_24 == '1' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='2' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_24 == '2' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='3' <?php if ( $TotalSoftGalleryVOption2_1[0]->TotalSoft_GV_1_24 == '3' ) {
																																	echo 'selected';
																																} ?>> <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose in the gallery for the close box which size is approriate."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_26" id="TotalSoft_GV_LG_26" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_26_Output"
                                    for="TotalSoft_GV_LG_26"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for close the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_27" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Enter the text that should be in close button."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_LG_28" id="TotalSoft_GV_LG_28" maxlength="10"
                                   class="Total_Soft_Select" value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferable font family for close button."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_29">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Arrows Option</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the right and the left icons for popup which are for change the images by sequence."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_30"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the icon size regardless of the container. This plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_LG_33" id="TotalSoft_GV_LG_33" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_33_Output"
                                    for="TotalSoft_GV_LG_33"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icon color to change the image."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_LG_34" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_2_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_37" id="TotalSoft_GV_LG_37" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_38" id="TotalSoft_GV_LG_38" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_39" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_40" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title=" Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_LG_41"
                               id="TotalSoft_GV_LG_41" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_LG_41_Output"
                                for="TotalSoft_GV_LG_41"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_42">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_43" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_44" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_45" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_LG_48" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_LG_47">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_LG_74" id="TotalSoft_GV_LG_74">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_2_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_LG_76" id="TotalSoft_GV_LG_76"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_LG_75" id="TotalSoft_GV_LG_75"
                                onchange="TS_GV_Loading_Changed('LG', 'TotalSoft_GV_LG_75')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_LG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_LG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_3">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_3_GO" onclick="TS_GV_TM_But('3', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_3_VO" onclick="TS_GV_TM_But('3', 'VO')">Video
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_3_PO" onclick="TS_GV_TM_But('3', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_3_PL" onclick="TS_GV_TM_But('3', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_3_LL" onclick="TS_GV_TM_But('3', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_3_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Start Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the effect for start which should be applied by images to changing albums."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_TV_01" id="TotalSoft_GV_TV_01">
                            <option value="normal"> Normal</option>
                            <option value="transparent"> Transparent</option>
                            <option value="overlay"> Overlay</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Keeping the mouse on the image select the Hover Effects which you will see."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select tt" name="TotalSoft_GV_TV_02" id="TotalSoft_GV_TV_02">
                            <option value="normal"> Normal</option>
                            <option value="popout"> Popout</option>
                            <option value="sliceDown"> Slice Down</option>
                            <option value="sliceDownLeft"> Slice Down Left</option>
                            <option value="sliceUp"> Slice Up</option>
                            <option value="sliceUpLeft"> Slice Up Left</option>
                            <option value="sliceUpRandom"> Slice Up Random</option>
                            <option value="sliceDownRandom"> Slice Down Random</option>
                            <option value="sliceUpDown"> Slice Up Down</option>
                            <option value="sliceUpDownLeft"> Slice Up Down Left</option>
                            <option value="fold"> Fold</option>
                            <option value="foldLeft"> Fold Left</option>
                            <option value="boxRandom"> Box Random</option>
                            <option value="boxRain"> Box Rain</option>
                            <option value="boxRainReverse"> Box Rain Reverse</option>
                            <option value="boxRainGrow"> Box Rain Grow</option>
                            <option value="boxRainGrowReverse"> Box Rain Grow Reverse</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1 TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name">Animation Speed <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="The animation time function specifies the speed of an animation."></i></div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangemsec" name="TotalSoft_GV_TV_03"
                               id="TotalSoft_GV_TV_03" min="100" max="1000" step="100"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_03; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_03_Output"
                                for="TotalSoft_GV_TV_03"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name1">Fill Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="The fill property in CSS is for filling in the color of a shape."></i></div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect1">
                        <input type="text" name="TotalSoft_GV_TV_04" id="TotalSoft_GV_TV_04"
                               class="Total_Soft_VGallery_Color"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_04; ?>">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name2">Slices <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="The slice effect creates a beautiful look in a slideshow and has become quite popular."></i>
                    </div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect2">
                        <input type="range" class="TotalSoft_VG_Range" name="TotalSoft_GV_TV_05" id="TotalSoft_GV_TV_05"
                               min="1" max="30"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_05; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_05_Output"
                                for="TotalSoft_GV_TV_05"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name3">Box Cols <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the number of box cols which will be shown."></i></div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect3">
                        <input type="range" class="TotalSoft_VG_Range" name="TotalSoft_GV_TV_06" id="TotalSoft_GV_TV_06"
                               min="1" max="30"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_06; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_06_Output"
                                for="TotalSoft_GV_TV_06"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name4">Box Rows <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the number of box rows which will be shown."></i></div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect4">
                        <input type="range" class="TotalSoft_VG_Range" name="TotalSoft_GV_TV_07" id="TotalSoft_GV_TV_07"
                               min="1" max="30"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_07; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_07_Output"
                                for="TotalSoft_GV_TV_07"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name5">PopOut Margin <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select image zoom size in Popout hover effect."></i></div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect5">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_TV_08"
                               id="TotalSoft_GV_TV_08" min="0" max="100"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_08; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_08_Output"
                                for="TotalSoft_GV_TV_08"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name6">PopOut Shadow <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select size which allows to show the shadow of the image in Popout hover effect."></i>
                    </div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect6">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_TV_09"
                               id="TotalSoft_GV_TV_09" min="0" max="40"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_09; ?>">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_09_Output"
                                for="TotalSoft_GV_TV_09"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name TS_GV_TG_Name7">Shadow Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select color which allows to show the shadow of the image in Popout hover effect."></i>
                    </div>
                    <div class="TS_GV_Option_Field TS_GV_Option_Field_Effect7">
                        <input type="text" name="TotalSoft_GV_TV_10" id="TotalSoft_GV_TV_10"
                               class="Total_Soft_VGallery_Color"
                               value="<?php echo $TotalSoftGalleryVOption3_1[0]->TotalSoft_GV_1_10; ?>">
                    </div>
                </div>
            </div>
            <script type="text/javascript">
              /*---poxel---*/
              jQuery('#TotalSoft_GV_TV_01').change(function () {
                if (jQuery(this).val() == 'normal') {
                  var options = jQuery('#TotalSoft_GV_TV_02 option');
                  jQuery.map(options, function (option) {
                    if (option.value == 'boxRandom' || option.value == 'boxRain' || option.value == 'boxRainReverse' || option.value == 'boxRainGrow' || option.value == 'boxRainGrowReverse') {
                      jQuery(option).hide();
                    }
                  });
                } else {
                  var options = jQuery('#TotalSoft_GV_TV_02 option');
                  jQuery.map(options, function (option) {
                    jQuery(option).show();
                  });
                }
              });

              function sort() {
                var conceptName = jQuery('#TotalSoft_GV_TV_02 option:selected').val();
                if (conceptName == "normal") {
                  jQuery('.TS_GV_Option_Field_Effect2,  .TS_GV_Option_Field_Effect3,  .TS_GV_Option_Field_Effect4,  .TS_GV_Option_Field_Effect5, .TS_GV_Option_Field_Effect6, .TS_GV_Option_Field_Effect7').slideUp(800);
                  jQuery('.TS_GV_Option_Field_Effect, .TS_GV_Option_Field_Effect1').slideDown(500);
                }
                if (conceptName == "popout") {
                  jQuery('.TS_GV_Option_Field_Effect, .TS_GV_Option_Field_Effect2, .TS_GV_Option_Field_Effect3, .TS_GV_Option_Field_Effect4').slideUp(800);
                  jQuery('.TS_GV_Option_Field_Effect1, .TS_GV_Option_Field_Effect5, .TS_GV_Option_Field_Effect6,.TS_GV_Option_Field_Effect6, .TS_GV_Option_Field_Effect7').slideDown(500);
                }
                if (conceptName == "sliceDown" || conceptName == "sliceDownLeft" || conceptName == "sliceUp" || conceptName == "sliceUpLeft" || conceptName == "sliceUpRandom" || conceptName == "sliceDownRandom" || conceptName == "sliceUpDown" || conceptName == "sliceUpDownLeft" || conceptName == "fold" || conceptName == "foldLeft") {
                  jQuery('.TS_GV_Option_Field_Effec3, .TS_GV_Option_Field_Effect4, .TS_GV_Option_Field_Effect5,.TS_GV_Option_Field_Effect6,.TS_GV_Option_Field_Effect7').slideUp(800);
                  jQuery('.TS_GV_Option_Field_Effect,.TS_GV_Option_Field_Effect1, .TS_GV_Option_Field_Effect2').slideDown(500);
                }
                if (conceptName == "boxRandom" || conceptName == "boxRain" || conceptName == "boxRainReverse" || conceptName == "boxRainGrow" || conceptName == "boxRainGrowReverse") {
                  jQuery('.TS_GV_Option_Field_Effect2,.TS_GV_Option_Field_Effect5, .TS_GV_Option_Field_Effect6,.TS_GV_Option_Field_Effect6, .TS_GV_Option_Field_Effect7').slideUp(800);
                  jQuery('.TS_GV_Option_Field_Effect, .TS_GV_Option_Field_Effect1, .TS_GV_Option_Field_Effect3, .TS_GV_Option_Field_Effect4').slideDown(500);
                }
              }

              sort();
              jQuery(window).load(function () {
                sort();
              });
              jQuery('#TotalSoft_GV_TV_02').change(function () {
                sort();
              });
            </script>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_3_VO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define video width for the gallery browser view option."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_TV_11" min="150" max="1200" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_11_Output"
                                    for="TotalSoft_GV_TV_11"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify video height for the browser view option."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_TV_12" min="150" max="1200" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_12_Output"
                                    for="TotalSoft_GV_TV_12"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Place Between Videos <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set place between item container images."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_TV_50" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_50_Output"
                                    for="TotalSoft_GV_TV_50"></output>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Alter the size of the icon regardless of the container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_TV_51" id="TotalSoft_GV_TV_51" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_51_Output"
                                    for="TotalSoft_GV_TV_51"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icon color."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_52" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety of beautifully designed sets for the slide."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_TV_53"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-play'>          <?php echo '&#xf04b' . '&nbsp; &nbsp;' . 'Play'; ?>          </option>
                                <option value='totalsoft totalsoft-play-circle'>   <?php echo '&#xf144' . '&nbsp; &nbsp;' . 'Play Circle'; ?>   </option>
                                <option value='totalsoft totalsoft-play-circle-o'> <?php echo '&#xf01d' . '&nbsp; &nbsp;' . 'Play Circle O'; ?> </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_3_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Overlay Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color for the overlay."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_19" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the background or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_TV_20"
                                       name="">
                                <label for="TotalSoft_GV_TV_20" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Set the background color for popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_21" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the border radius."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_TV_22" id="TotalSoft_GV_TV_22" min="0" max="20" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_22_Output"
                                    for="TotalSoft_GV_TV_22"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the color for shadow."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_23" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Arrow Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Specify preferable background color of the icons."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_32" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select a color of the icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_33" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the radius for your icon in gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper"
                                   name="TotalSoft_GV_TV_34" id="TotalSoft_GV_TV_34" min="0" max="100" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_34_Output"
                                    for="TotalSoft_GV_TV_34"></output>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the background for title or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_TV_24"
                                       name="">
                                <label for="TotalSoft_GV_TV_24" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Set the background color for title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_25" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define the font size for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_TV_26" id="TotalSoft_GV_TV_26" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_26_Output"
                                    for="TotalSoft_GV_TV_26"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define the font family for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_TV_27">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Clicking on the image opens a popup select your preferable title color for popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_28" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose text align for title (left, center or right)."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_TV_29">
                                <option value="left"> Left</option>
                                <option value="center"> Center</option>
                                <option value="right"> Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Numbers Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the numbers."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Numbers Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Note the size of the numbers. It is fully responsive."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_TV_31" id="TotalSoft_GV_TV_31" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_31_Output"
                                    for="TotalSoft_GV_TV_31"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the close icon background color."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_35" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for closing popup in the gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_TV_36" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the radius for your icon in gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper"
                                   name="TotalSoft_GV_TV_37" id="TotalSoft_GV_TV_37" min="0" max="100" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_37_Output"
                                    for="TotalSoft_GV_TV_37"></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_3_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_TV_38" id="TotalSoft_GV_TV_38" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_TV_39" id="TotalSoft_GV_TV_39" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_40" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_41" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_TV_42"
                               id="TotalSoft_GV_TV_42" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_TV_42_Output"
                                for="TotalSoft_GV_TV_42"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_TV_43">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_44" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_45" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_47" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_TV_48">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_TV_49" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_TV_54" id="TotalSoft_GV_TV_54">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_3_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_TV_56" id="TotalSoft_GV_TV_56"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_TV_55" id="TotalSoft_GV_TV_55"
                                onchange="TS_GV_Loading_Changed('TV', 'TotalSoft_GV_TV_55')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_TV_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_TV_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_4">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_GO" onclick="TS_GV_TM_But('4', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_TD" onclick="TS_GV_TM_But('4', 'TD')">Title &
                Description
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_LO" onclick="TS_GV_TM_But('4', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_PO" onclick="TS_GV_TM_But('4', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_PL" onclick="TS_GV_TM_But('4', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_4_LL" onclick="TS_GV_TM_But('4', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_4_GO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred width of the image and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_01" id="TotalSoft_GV_CP_01" min="150" max="1200" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_01_Output"
                                    for="TotalSoft_GV_CP_01"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred height of the image and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_02" id="TotalSoft_GV_CP_02" min="150" max="1200" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_02_Output"
                                    for="TotalSoft_GV_CP_02"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the borders of individual images."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_03" id="TotalSoft_GV_CP_03" min="0" max="15" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_03_Output"
                                    for="TotalSoft_GV_CP_03"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the frame border color for image."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_CP_04" id="TotalSoft_GV_CP_04"
                                   class="Total_Soft_VGallery_Color" value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Place Between <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Between each element you may configure padding size."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_05" id="TotalSoft_GV_CP_05" min="0" max="20" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_05_Output"
                                    for="TotalSoft_GV_CP_05"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Shadow <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the shadow or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CP_06"
                                       name="TotalSoft_GV_CP_06">
                                <label for="TotalSoft_GV_CP_06" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the shadow value by the pixels."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_07" id="TotalSoft_GV_CP_07" min="0" max="30" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_07_Output"
                                    for="TotalSoft_GV_CP_07"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow of the image."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_CP_08" id="TotalSoft_GV_CP_08"
                                   class="Total_Soft_VGallery_Color" value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the hover effect type. There are 10 effect types. They are all different from each other."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_09">
                                <option value="1"> Effect 1</option>
                                <option value="2"> Effect 2</option>
                                <option value="3"> Effect 3</option>
                                <option value="4"> Effect 4</option>
                                <option value="5"> Effect 5</option>
                                <option value="6"> Effect 6</option>
                                <option value="7"> Effect 7</option>
                                <option value="8"> Effect 8</option>
                                <option value="9"> Effect 9</option>
                                <option value="10"> Effect 10</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Overlay Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select a color for the overlay as you keep the mouse arrow on it. The effects are very beautiful and they are very suitable."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_10" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_4_TD">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the title or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CP_11"
                                       name="">
                                <label for="TotalSoft_GV_CP_11" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Configure the preferable color of the font."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_12" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the preferable size of the letters of the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_13" id="TotalSoft_GV_CP_13" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_13_Output"
                                    for="TotalSoft_GV_CP_13"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the font family for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_14">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the background color for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_15" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Description Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose whether to see the description text or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CP_16"
                                       name="">
                                <label for="TotalSoft_GV_CP_16" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Line After Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose Width for separation line the after title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_CP_17" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_17_Output"
                                    for="TotalSoft_GV_CP_17"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose color for separation line the after title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_18" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name"></div>
                        <div class="TS_GV_Option_Field">

                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_4_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Option</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select whether to see the link or no."></i></div>
                    <div class="TS_GV_Option_Field">
                        <div class="switch">
                            <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CP_71" name="">
                            <label for="TotalSoft_GV_CP_71" data-on="Yes" data-off="No"></label>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CP_19" id="TotalSoft_GV_CP_19" maxlength="15"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border width which is in the container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_CP_20" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_20_Output"
                                for="TotalSoft_GV_CP_20"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border color which is in the container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_21" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can specify the radius by the pixels."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_CP_22" min="0" max="100" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_22_Output"
                                for="TotalSoft_GV_CP_22"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose the color for link background."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_23" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the button which you will see in image."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_24" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the font size for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CP_25"
                               id="TotalSoft_GV_CP_25" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_25_Output"
                                for="TotalSoft_GV_CP_25"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the font family for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_26">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose the color for the link background while hovering by mouse."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_27" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose the color for the font while hovering by mouse."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_28" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_4_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose background color for the description, title and video in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_41" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the container in a content popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_CP_42" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_42_Output"
                                    for="TotalSoft_GV_CP_42"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the style for the border of the content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_43">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_44" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Popup Effect <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose popup style."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="TotalSoft_GV_CP_73" id="TotalSoft_GV_CP_73">
                                <option value=""> Default</option>
                                <option value="mode01"> Mode 1</option>
                                <option value="mode02"> Mode 2</option>
                                <option value="mode03"> Mode 3</option>
                                <option value="mode04"> Mode 4</option>
                                <option value="mode05"> Mode 5</option>
                                <option value="mode06"> Mode 6</option>
                                <option value="mode07"> Mode 7</option>
                                <option value="mode08"> Mode 8</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Link in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Enter the text that should be in link button."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_CP_50" id="TotalSoft_GV_CP_50" maxlength="15"
                                   class="Total_Soft_Select" value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the link border width which is in the popup container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_CP_51" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_51_Output"
                                    for="TotalSoft_GV_CP_51"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the border style for the link button in the content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_52">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the link border color which is in the popup container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_53" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can specify the radius for link by the pixels."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_CP_54" min="0" max="100" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_54_Output"
                                    for="TotalSoft_GV_CP_54"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the color for link background in the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_55" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the button which you will see in container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_56" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the font size for the link button."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_57" id="TotalSoft_GV_CP_57" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_57_Output"
                                    for="TotalSoft_GV_CP_57"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font family for the link text."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_58">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Hover Background Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the color for the link background while hovering by mouse."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_59" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the color for the font while hovering by mouse."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_60" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define the font size for the title in content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_45" id="TotalSoft_GV_CP_45" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_45_Output"
                                    for="TotalSoft_GV_CP_45"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Define the font family for the title in content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_46">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Clicking on the image opens a popup select your preferable title color for popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_47" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Set the background color for title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_48" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose text align for title (left, center or right)."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_49">
                                <option value="left"> Left</option>
                                <option value="right"> Right</option>
                                <option value="center"> Center</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Icons in Popup</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Specify preferable background color of the icons."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_61" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose for the close box which size is approriate."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_62" id="TotalSoft_GV_CP_62" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_62_Output"
                                    for="TotalSoft_GV_CP_62"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the close icon color for the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_63" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title=" You can choose icons from different beautifully designed sets to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_64"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'> <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='2'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='3'> <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Arrows Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the icon size regardless of the container. Plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CP_66" id="TotalSoft_GV_CP_66" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_66_Output"
                                    for="TotalSoft_GV_CP_66"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Arrows Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icon color to change the video."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CP_67" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Arrows Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the right and the left icons for popup which are for change the videos by sequence."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_68"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_4_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CP_29" id="TotalSoft_GV_CP_29" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CP_30" id="TotalSoft_GV_CP_30" maxlength="10"
                               class="Total_Soft_Select" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_31" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_32" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CP_33"
                               id="TotalSoft_GV_CP_33" min="8" max="48" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CP_33_Output"
                                for="TotalSoft_GV_CP_33"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_34">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_35" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_36" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_37" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_38" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CP_39">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CP_40" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_CP_72" id="TotalSoft_GV_CP_72">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_4_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CP_75" id="TotalSoft_GV_CP_75"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_CP_74" id="TotalSoft_GV_CP_74"
                                onchange="TS_GV_Loading_Changed('CP', 'TotalSoft_GV_CP_74')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_CP_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_CP_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_5">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_GO" onclick="TS_GV_TM_But('5', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_TO" onclick="TS_GV_TM_But('5', 'TO')">Title
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_IO" onclick="TS_GV_TM_But('5', 'IO')">Icon
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_PO" onclick="TS_GV_TM_But('5', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_PL" onclick="TS_GV_TM_But('5', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_5_LL" onclick="TS_GV_TM_But('5', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_5_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Image Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred width and it is all responsive in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_01"
                               id="TotalSoft_GV_EG_01" min="100" max="400" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_01_Output"
                                for="TotalSoft_GV_EG_01"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Height <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred height and it is all responsive in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_02"
                               id="TotalSoft_GV_EG_02" min="100" max="400" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_02_Output"
                                for="TotalSoft_GV_EG_02"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the width of the border for the image container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_03"
                               id="TotalSoft_GV_EG_03" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_03_Output"
                                for="TotalSoft_GV_EG_03"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the style for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_EG_04" id="TotalSoft_GV_EG_04">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine border color which is in the elastic gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_EG_05" id="TotalSoft_GV_EG_05"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the shadow value by the pixels."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_06"
                               id="TotalSoft_GV_EG_06" min="0" max="30" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_06_Output"
                                for="TotalSoft_GV_EG_06"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select color which allows to show the shadow of the image."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_EG_07" id="TotalSoft_GV_EG_07"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Zoom Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select the type of scaling of different and beautifully designed sets from the image."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_EG_08" id="TotalSoft_GV_EG_08">
                            <option value="zEff9"> None</option>
                            <option value="zEff1"> Type 1</option>
                            <option value="zEff2"> Type 2</option>
                            <option value="zEff3"> Type 3</option>
                            <option value="zEff4"> Type 4</option>
                            <option value="zEff5"> Type 5</option>
                            <option value="zEff6"> Type 6</option>
                            <option value="zEff7"> Type 7</option>
                            <option value="zEff8"> Type 8</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Effect Time <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select time of hover effect."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name="TotalSoft_GV_EG_09"
                               id="TotalSoft_GV_EG_09" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_09_Output"
                                for="TotalSoft_GV_EG_09"></output>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_5_TO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Title Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font size for the title."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_10"
                               id="TotalSoft_GV_EG_10" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_10_Output"
                                for="TotalSoft_GV_EG_10"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for your title which will be seen in elastic type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_11" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the preferred font family for the title. Plugin has a basic Google font."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_12">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the background color for the text container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_13" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine preferable type of your hover effects."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_14">
                            <option value="zTitfHov1"> Type 1</option>
                            <option value="zTitfHov2"> Type 2</option>
                            <option value="zTitfHov3"> Type 3</option>
                            <option value="zTitfHov4"> Type 4</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Effect Time <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select time of hover effect."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                               id="TotalSoft_GV_EG_15" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_15_Output"
                                for="TotalSoft_GV_EG_15"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show Title <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You have opportunity to choose in the elastic type show the title or no."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <div class="switch">
                            <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_EG_16" name="">
                            <label for="TotalSoft_GV_EG_16" data-on="Yes" data-off="No"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_5_IO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Alter the size of the icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_EG_17" id="TotalSoft_GV_EG_17" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_17_Output"
                                    for="TotalSoft_GV_EG_17"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select a color of the icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_18" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icons for image popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_19"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-file-video-o'> <?php echo '&#xf1c8' . '&nbsp; &nbsp;' . 'File Video O'; ?> </option>
                                <option value='totalsoft totalsoft-video-camera'> <?php echo '&#xf03d' . '&nbsp; &nbsp;' . 'Video Camera'; ?> </option>
                                <option value='totalsoft totalsoft-camera-retro'> <?php echo '&#xf083' . '&nbsp; &nbsp;' . 'Camera Retro'; ?> </option>
                                <option value='totalsoft totalsoft-eye'>          <?php echo '&#xf06e' . '&nbsp; &nbsp;' . 'Eye'; ?>          </option>
                                <option value='totalsoft totalsoft-film'>         <?php echo '&#xf008' . '&nbsp; &nbsp;' . 'Film'; ?>         </option>
                                <option value='totalsoft totalsoft-youtube-play'> <?php echo '&#xf16a' . '&nbsp; &nbsp;' . 'YouTube Play'; ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the border width for popup icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_EG_20" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_20_Output"
                                    for="TotalSoft_GV_EG_20"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the border color for icon in the gallery popup container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_21" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the style for the border."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_22">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Specify preferable background color of the icons."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_23" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the icon for the button which you will see in a popup."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_24" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the link border color."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_25" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Define a background color which is intended for the link button."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_26" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select the icon type of different and beautifully designed sets."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_27"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-external-link'>        <?php echo '&#xf08e' . '&nbsp; &nbsp;' . 'External Link'; ?>        </option>
                                <option value='totalsoft totalsoft-external-link-square'> <?php echo '&#xf14c' . '&nbsp; &nbsp;' . 'External Link Square'; ?> </option>
                                <option value='totalsoft totalsoft-link'>                 <?php echo '&#xf0c1' . '&nbsp; &nbsp;' . 'Link'; ?>                 </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_5_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Overlay Background Colorh <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose a background color for the overlay."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_28" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Slider Effect Time <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the time interval between the slideshow videos in seconds when autoplay is enabled. Otherwise videos will be changed when clicking on navigation buttons."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangesec" name=""
                                   id="TotalSoft_GV_EG_29" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_29_Output"
                                    for="TotalSoft_GV_EG_29"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose close icon color in the gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Possibility choose a size for close icon which has intended to return to the gallery from the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_EG_31" id="TotalSoft_GV_EG_31" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_31_Output"
                                    for="TotalSoft_GV_EG_31"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="You can choose icons from different beautifully designed sets to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_32"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-times'>          <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='totalsoft totalsoft-times-circle-o'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='totalsoft totalsoft-times-circle'>   <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Title <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You have opportunity to choose in the elastic type show the title or no."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_EG_16"
                                       name="">
                                <label for="TotalSoft_GV_EG_16" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Slider Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the slider icon size regardless of the container. The plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_EG_33" id="TotalSoft_GV_EG_33" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_33_Output"
                                    for="TotalSoft_GV_EG_33"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for slideshow in the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_34" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Background Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon background color for slideshow in the popup slider."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_35" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the left and right icons for the slideshow in which the videos should be placed for slide."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_36"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Autoplay <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="If this parameter is not specified autoplay for slideshow will be disabled."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_EG_37"
                                       name="">
                                <label for="TotalSoft_GV_EG_37" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Loop <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="When the videos are finished to begins again with the same video or no."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_EG_38"
                                       name="">
                                <label for="TotalSoft_GV_EG_38" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the container in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_EG_39" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_39_Output"
                                    for="TotalSoft_GV_EG_39"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the style for the border of the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_40">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_41" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the shadow value by the pixel."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_EG_42" min="0" max="30" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_42_Output"
                                    for="TotalSoft_GV_EG_42"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_EG_43" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_5_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_EG_44" id="TotalSoft_GV_EG_44" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_EG_45" id="TotalSoft_GV_EG_45" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_47" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_EG_48"
                               id="TotalSoft_GV_EG_48" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_EG_48_Output"
                                for="TotalSoft_GV_EG_48"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_49">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_50" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_51" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_52" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_53" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_EG_54">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_EG_55" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_EG_56" id="TotalSoft_GV_EG_56">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_5_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_EG_58" id="TotalSoft_GV_EG_58"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_EG_57" id="TotalSoft_GV_EG_57"
                                onchange="TS_GV_Loading_Changed('EG', 'TotalSoft_GV_EG_57')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_EG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_EG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_6">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_GO" onclick="TS_GV_TM_But('6', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_TO" onclick="TS_GV_TM_But('6', 'TO')">Title
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_LO" onclick="TS_GV_TM_But('6', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_PO" onclick="TS_GV_TM_But('6', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_PL" onclick="TS_GV_TM_But('6', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_6_LL" onclick="TS_GV_TM_But('6', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_6_GO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Image Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred width and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_01" id="TotalSoft_GV_FG_01" min="100" max="400" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_01_Output"
                                    for="TotalSoft_GV_FG_01"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred height and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_02" id="TotalSoft_GV_FG_02" min="100" max="400" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_02_Output"
                                    for="TotalSoft_GV_FG_02"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the image container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_03" id="TotalSoft_GV_FG_03" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_03_Output"
                                    for="TotalSoft_GV_FG_03"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the fancy gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_FG_04" id="TotalSoft_GV_FG_04"
                                   class="Total_Soft_VGallery_Color" value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the shadow value."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_05" id="TotalSoft_GV_FG_05" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_05_Output"
                                    for="TotalSoft_GV_FG_05"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="TotalSoft_GV_FG_06" id="TotalSoft_GV_FG_06"
                                   class="Total_Soft_VGallery_Color" value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the border radius for image."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper"
                                   name="TotalSoft_GV_FG_07" id="TotalSoft_GV_FG_07" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_07_Output"
                                    for="TotalSoft_GV_FG_07"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Place Between Videos <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the distance between each image. Here is the image from your Youtube and Vimeo videos."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_08" id="TotalSoft_GV_FG_08" min="0" max="20" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_08_Output"
                                    for="TotalSoft_GV_FG_08"></output>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Overlay Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose type of overlay."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_28">
                                <option value="Default"> Default</option>
                                <option value="Inverse"> Inverse</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose a color for the overlay."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_29" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_6_TO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="This function is for the main title. You can select font size. For each screen or mobile version will be its own size for responsiveness."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_FG_09"
                               id="TotalSoft_GV_FG_09" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_09_Output"
                                for="TotalSoft_GV_FG_09"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show Video Title <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="If this parameter is not specified title for popup will be disabled."></i></div>
                    <div class="TS_GV_Option_Field">
                        <div class="switch">
                            <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_50" name="">
                            <label for="TotalSoft_GV_FG_50" data-on="Yes" data-off="No"></label>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select the font family that you want to show."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_10">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the main title."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_11" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Bottom Border Width <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Define the border width for the bottom line."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_FG_12" min="0" max="30" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_12_Output"
                                for="TotalSoft_GV_FG_12"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Bottom Border Style <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Define the border style for the bottom line."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_13">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Bottom Border Color <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Define the border color for the bottom line."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_14" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Top Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the border width for the top line."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_FG_15" min="0" max="30" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_15_Output"
                                for="TotalSoft_GV_FG_15"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Top Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the border color for the top line."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_16" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_6_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the font size for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_FG_17"
                               id="TotalSoft_GV_FG_17" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_17_Output"
                                for="TotalSoft_GV_FG_17"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_18">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the text for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_19" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Position <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Make a choice among the 3 positions: left, center, right."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_20">
                            <option value="left"> Left</option>
                            <option value="center"> Center</option>
                            <option value="right"> Right</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the border width for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_FG_21" min="0" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_21_Output"
                                for="TotalSoft_GV_FG_21"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border color which is in the image container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_22" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border radius for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_FG_23" min="0" max="25" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_23_Output"
                                for="TotalSoft_GV_FG_23"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define a background color which is intended for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_24" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font hover color for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_25" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Border Color <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Select hover border color for link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_26" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select hover background color for link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_27" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL. If you wrote something in your popup window now you can see it."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_FG_64" id="TotalSoft_GV_FG_64" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_6_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Overlay Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the preferred background color of the content popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Background Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose background color for the title and video in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_32" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred width of the video for popup and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_FG_33" min="300" max="1000" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_33_Output"
                                    for="TotalSoft_GV_FG_33"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Height <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred height of the video for popup and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_FG_34" min="200" max="800" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_34_Output"
                                    for="TotalSoft_GV_FG_34"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Slider General Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Autoplay <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="If this parameter is not specified autoplay for video will be disabled."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_48"
                                       name="">
                                <label for="TotalSoft_GV_FG_48" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Navigation <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose to show the navigation or no in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_49"
                                       name="">
                                <label for="TotalSoft_GV_FG_49" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Video Title <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="If this parameter is not specified title for popup will be disabled."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_50"
                                       name="">
                                <label for="TotalSoft_GV_FG_50" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Video Descriptipn <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="If this parameter is not specified title for popup will be disabled."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_PD"
                                       name="">
                                <label for="TotalSoft_GV_FG_PD" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Play Icon <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="If this parameter is not specified play icon for popup will be disabled."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_FG_51"
                                       name="">
                                <label for="TotalSoft_GV_FG_51" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Slider Icons Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the left and right icons for the slideshow in which the videos should be placed for slide."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_42"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the slider icon size regardless of the container. The plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_43" id="TotalSoft_GV_FG_43" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_43_Output"
                                    for="TotalSoft_GV_FG_43"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for slideshow in the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_44" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Thumbnail Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Hover Border Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the hover color of the borders around the thumbnails."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_35" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the border width for thumbnail photos."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_FG_36" min="0" max="5" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_36_Output"
                                    for="TotalSoft_GV_FG_36"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred width of the thumbnails for popup and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_FG_37" min="50" max="150" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_37_Output"
                                    for="TotalSoft_GV_FG_37"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It allows you to specify the preferred height of the thumbnails for popup and it is all responsive."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_FG_38" min="50" max="150" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_38_Output"
                                    for="TotalSoft_GV_FG_38"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Carusel Icon Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for carousel in the popup thumbnails."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_31" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Title Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="This function is for the popup window. You can select font size for headers. For each screen or mobile version will be its size for responsiveness."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_39" id="TotalSoft_GV_FG_39" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_39_Output"
                                    for="TotalSoft_GV_FG_39"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font family for the title used in a popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_40">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It is necessary to choose the color for video titles which is in the popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_41" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety beautifully designed sets to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_45"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'> <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='2'> <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                                <option value='3'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title=" Select the size of the icon that is to close the popup window. The icon is in the right corner."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_FG_46" id="TotalSoft_GV_FG_46" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_46_Output"
                                    for="TotalSoft_GV_FG_46"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the icon to close the popup. When you close the window with it closes and the video."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_FG_47" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_6_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_FG_52" id="TotalSoft_GV_FG_52" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_FG_53" id="TotalSoft_GV_FG_53" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_54" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_55" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_FG_56"
                               id="TotalSoft_GV_FG_56" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_FG_56_Output"
                                for="TotalSoft_GV_FG_56"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_57">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_58" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_59" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_60" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_61" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_FG_62">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_FG_63" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_FG_65" id="TotalSoft_GV_FG_65">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_6_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_FG_67" id="TotalSoft_GV_FG_67"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_FG_66" id="TotalSoft_GV_FG_66"
                                onchange="TS_GV_Loading_Changed('FG', 'TotalSoft_GV_FG_66')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_FG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_FG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_7">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_GO" onclick="TS_GV_TM_But('7', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_TI" onclick="TS_GV_TM_But('7', 'TI')">Title &
                Icon
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_HO" onclick="TS_GV_TM_But('7', 'HO')">Hover
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_PO" onclick="TS_GV_TM_But('7', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_PL" onclick="TS_GV_TM_But('7', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_7_LL" onclick="TS_GV_TM_But('7', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_7_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Video Image Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred width of the image and it is all responsive."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_02"
                               id="TotalSoft_GV_PE_02" min="100" max="500" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_02_Output"
                                for="TotalSoft_GV_PE_02"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Height <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="It allows you to specify the preferred height of the image and it is all responsive."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_01"
                               id="TotalSoft_GV_PE_01" min="100" max="500" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_01_Output"
                                for="TotalSoft_GV_PE_01"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the shadow value by the pixels."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_04"
                               id="TotalSoft_GV_PE_04" min="0" max="50" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_04_Output"
                                for="TotalSoft_GV_PE_04"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select color which allows to show the shadow of the photos."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_PE_05" id="TotalSoft_GV_PE_05"
                               class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose from these two shadow types."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" id="TotalSoft_GV_PE_06" name="TotalSoft_GV_PE_06">
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Effect Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select type of hover effect."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" id="TotalSoft_GV_PE_07" name="TotalSoft_GV_PE_07">
                            <option value="TotalSoft_H_Ef1"> Rotate</option>
                            <option value="TotalSoft_H_Ef2"> Translate</option>
                            <option value="TotalSoft_H_Ef3"> None</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Place Between Video Images <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the distance between each image. Here is the image from your Youtube and Vimeo videos."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_08"
                               id="TotalSoft_GV_PE_08" min="0" max="50" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_08_Output"
                                for="TotalSoft_GV_PE_08"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the radius for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_03"
                               id="TotalSoft_GV_PE_03" min="0" max="50" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_03_Output"
                                for="TotalSoft_GV_PE_03"></output>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_7_TI">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select font size for title. For each screen or mobile version will be its own size for responsiveness."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_PE_09" id="TotalSoft_GV_PE_09" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_09_Output"
                                    for="TotalSoft_GV_PE_09"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font family for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_PE_10">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It is necessary to choose the color for photo titles."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_11" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Shadow <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the shadow color for the photo title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_PE_12" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_12_Output"
                                    for="TotalSoft_GV_PE_12"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow of the titles."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_13" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select the type of scaling of different and beautifully designed sets."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_14" name="">
                                <option value="TotalSoft_Title_Ef1"> Translate</option>
                                <option value="TotalSoft_Title_Ef2"> Scale</option>
                                <option value="TotalSoft_Title_Ef3"> None</option>
                                <option value="TotalSoft_Title_Ef4"> Rotate</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Icon <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the icon or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_PE_15"
                                       name="">
                                <label for="TotalSoft_GV_PE_15" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the icons for popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_16" name=""
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-play-circle'>  <?php echo '&#xf144' . '&nbsp; &nbsp;' . 'Play Circle'; ?>  </option>
                                <option value='totalsoft totalsoft-play'>         <?php echo '&#xf04b' . '&nbsp; &nbsp;' . 'Play'; ?>         </option>
                                <option value='totalsoft totalsoft-youtube-play'> <?php echo '&#xf16a' . '&nbsp; ' . 'YouTube Play'; ?> </option>
                                <option value='totalsoft totalsoft-file-video-o'> <?php echo '&#xf1c8' . '&nbsp; &nbsp;' . 'File Video O'; ?> </option>
                                <option value='totalsoft totalsoft-video-camera'> <?php echo '&#xf03d' . '&nbsp; &nbsp;' . 'Video Camera'; ?> </option>
                                <option value='totalsoft totalsoft-eye'>          <?php echo '&#xf06e' . '&nbsp; &nbsp;' . 'Eye'; ?>          </option>
                                <option value='totalsoft totalsoft-search'>       <?php echo '&#xf002' . '&nbsp; &nbsp;' . 'Search'; ?>       </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Alter the size of the icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_PE_17" id="TotalSoft_GV_PE_17" min="10" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_17_Output"
                                    for="TotalSoft_GV_PE_17"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color for icon in the gallery popup container."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_18" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_7_HO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Line Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="There are 13 different line effect types."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_19" name="">
                                <option value="TotalSoft_HovLine1"> Type 1</option>
                                <option value="TotalSoft_HovLine2"> Type 2</option>
                                <option value="TotalSoft_HovLine3"> Type 3</option>
                                <option value="TotalSoft_HovLine4"> Type 4</option>
                                <option value="TotalSoft_HovLine5"> Type 5</option>
                                <option value="TotalSoft_HovLine6"> Type 6</option>
                                <option value="TotalSoft_HovLine7"> Type 7</option>
                                <option value="TotalSoft_HovLine8"> Type 8</option>
                                <option value="TotalSoft_HovLine9"> Type 9</option>
                                <option value="TotalSoft_HovLine10"> Type 10</option>
                                <option value="TotalSoft_HovLine11"> Type 11</option>
                                <option value="TotalSoft_HovLine12"> Type 12</option>
                                <option value="TotalSoft_HovLine13"> Type 13</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Line <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the separation line or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_PE_20"
                                       name="">
                                <label for="TotalSoft_GV_PE_20" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line width for separation."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_PE_21" min="0" max="15" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_21_Output"
                                    for="TotalSoft_GV_PE_21"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferred color to show the line of separation."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_22" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the shadow value by the pixels."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_PE_23" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_23_Output"
                                    for="TotalSoft_GV_PE_23"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow for seperation line."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_24" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Hover Overlay Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Select a color for the overlay on the video as you keep the mouse arrow on it. The effects are very beautiful and they are very suitable in the gallery."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_25" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the hover effect type. There are 5 effects type in lightbox. They are all different from each other."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_26" name="">
                                <option value="TotalSoft_Hov_Overlay1"> Type 1</option>
                                <option value="TotalSoft_Hov_Overlay2"> Type 2</option>
                                <option value="TotalSoft_Hov_Overlay3"> Type 3</option>
                                <option value="TotalSoft_Hov_Overlay4"> Type 4</option>
                                <option value="TotalSoft_Hov_Overlay5"> Type 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show Overlay <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the overlay or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_PE_27"
                                       name="">
                                <label for="TotalSoft_GV_PE_27" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_7_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Slider Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Popup 2 Slider Effect Type <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Select the slide effect type. There are 2 effects type in lightbox. They are all different from each other."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_30" name="">
                                <option value="elastic"> Elastic</option>
                                <option value="fade"> Fade</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Popup 2 Slider Video Title Background Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the background color for title in the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_31" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for the container in a popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_PE_32" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_32_Output"
                                    for="TotalSoft_GV_PE_32"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine border color which is in the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_33" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the shadow value by the pixels."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_PE_34" min="0" max="50" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_34_Output"
                                    for="TotalSoft_GV_PE_34"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color which allows to show the shadow."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_35" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Title Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select font size for title. For each screen or mobile version will be its own size for responsiveness."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_PE_37" id="TotalSoft_GV_PE_37" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_37_Output"
                                    for="TotalSoft_GV_PE_37"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Title Font Family <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font family for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_PE_38">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Video Title Color <span
                                    class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="It is necessary to choose the color for titles."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_39" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Options Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Choose the background color for the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_36" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Overlay Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Select a background color for overlay."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_28" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Effect Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the hover effect type. There are 2 effects type in lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_29" name="">
                                <option value="1"> Type 1</option>
                                <option value="2"> Type 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Slider Icons Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Change the slider icon size regardless of the container. The plugin allows to get most suitable navigation arrows that are most appropriate for your site."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_PE_40" id="TotalSoft_GV_PE_40" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_40_Output"
                                    for="TotalSoft_GV_PE_40"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose the icon color for slideshow in the popup slider."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_PE_41" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the left and right icons for the slideshow. In which the videos should be placed for slide."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_42" name=""
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='1'>  <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                                <option value='2'>  <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                                <option value='3'>  <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                                <option value='4'>  <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                                <option value='5'>  <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                                <option value='6'>  <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                                <option value='7'>  <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                                <option value='8'>  <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                                <option value='9'>  <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                                <option value='10'> <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                                <option value='11'> <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Close Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="You can choose icons from different beautifully designed sets to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_43" name=""
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-times'>          <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='totalsoft totalsoft-times-circle'>   <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                                <option value='totalsoft totalsoft-times-circle-o'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Loading Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can choose icons for loading."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" id="TotalSoft_GV_PE_44" name="">
                                <option value="1"> Type 1</option>
                                <option value="2"> Type 2</option>
                                <option value="3"> Type 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_7_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Next Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="You can write the text that you want to see on this button. This next button to change the page. You choose how many videos to show in a page."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_PE_45" id="TotalSoft_GV_PE_45" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Prev Button Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for the button that changes the page backward. But in one picture. You choose how many videos to show."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_PE_46" id="TotalSoft_GV_PE_46" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title=" You can select your preferred color for pagination. The text and font will be on a same color."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_47" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select a color for the text and number buttons."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_48" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define the font size for the number of paging ' pagination '. The same color for the text and number."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_PE_49"
                               id="TotalSoft_GV_PE_49" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_PE_49_Output"
                                for="TotalSoft_GV_PE_49"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify the font family for the pagination used from the video in gallery."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_PE_50">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current background color of the pagination that all the pages are displayed in the main pagination."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_51" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the current color of the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_52" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Specify preferred hover background color for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_53" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the text color for hover."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_54" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="In the gallery select the border style for the pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_PE_55">
                            <option value="none"> None</option>
                            <option value="solid"> Solid</option>
                            <option value="dashed"> Dashed</option>
                            <option value="dotted"> Dotted</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Adjust the preferred color for the border."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_PE_56" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_PE_57" id="TotalSoft_GV_PE_57">
                            <option value=""> None</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_7_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_PE_59" id="TotalSoft_GV_PE_59"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_PE_58" id="TotalSoft_GV_PE_58"
                                onchange="TS_GV_Loading_Changed('PE', 'TotalSoft_GV_PE_58')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_PE_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_PE_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_8">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_GO" onclick="TS_GV_TM_But('8', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_TI" onclick="TS_GV_TM_But('8', 'TI')">Title &
                Icon
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_PO" onclick="TS_GV_TM_But('8', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_LO" onclick="TS_GV_TM_But('8', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_PL" onclick="TS_GV_TM_But('8', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_8_LL" onclick="TS_GV_TM_But('8', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_8_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Column Count <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select how many videos you want to be in one row."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range" name="TotalSoft_GV_CG_01" id="TotalSoft_GV_CG_01"
                               min="1" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_01_Output"
                                for="TotalSoft_GV_CG_01"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Effect <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select type of hover effect for videos."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_02">
                            <option value="none"> None</option>
                            <option value="effect01"> Effect 1</option>
                            <option value="effect02"> Effect 2</option>
                            <option value="effect03"> Effect 3</option>
                            <option value="effect04"> Effect 4</option>
                            <option value="effect05"> Effect 5</option>
                            <option value="effect06"> Effect 6</option>
                            <option value="effect07"> Effect 7</option>
                            <option value="effect08"> Effect 8</option>
                            <option value="effect09"> Effect 9</option>
                            <option value="effect10"> Effect 10</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color 1 <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color for hover effects."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_03" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color 2 <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select second color for hover effects."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_04" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select shadow type for the videos container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_05">
                            <option value="none"> None</option>
                            <option value="effect01"> Effect 1</option>
                            <option value="effect02"> Effect 2</option>
                            <option value="effect03"> Effect 3</option>
                            <option value="effect04"> Effect 4</option>
                            <option value="effect05"> Effect 5</option>
                            <option value="effect06"> Effect 6</option>
                            <option value="effect07"> Effect 7</option>
                            <option value="effect08"> Effect 8</option>
                            <option value="effect09"> Effect 9</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Shadow Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the shadow color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_06" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the width of the border for the videos container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CG_07"
                               id="TotalSoft_GV_CG_07" min="0" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_07_Output"
                                for="TotalSoft_GV_CG_07"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine border color for the videos container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_08" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_8_TI">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the font size for the video title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_09" id="TotalSoft_GV_CG_09" min="8" max="48" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_09_Output"
                                    for="TotalSoft_GV_CG_09"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the preferred font family for the title. Gallery has a basic Google fonts."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_10">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select a color for your title which will be seen in gallery."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_11" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Play Icon Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety of beautifully designed sets for playing video in lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_12"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='totalsoft totalsoft-file-video-o'>  <?php echo '&#xf1c8' . '&nbsp; &nbsp;' . 'File Video O'; ?>  </option>
                                <option value='totalsoft totalsoft-video-camera'>  <?php echo '&#xf03d' . '&nbsp; &nbsp;' . 'Video Camera'; ?>  </option>
                                <option value='totalsoft totalsoft-camera-retro'>  <?php echo '&#xf083' . '&nbsp; &nbsp;' . 'Camera Retro'; ?>  </option>
                                <option value='totalsoft totalsoft-eye'>           <?php echo '&#xf06e' . '&nbsp; &nbsp;' . 'Eye'; ?>           </option>
                                <option value='totalsoft totalsoft-film'>          <?php echo '&#xf008' . '&nbsp; &nbsp;' . 'Film'; ?>          </option>
                                <option value='totalsoft totalsoft-youtube-play'>  <?php echo '&#xf16a' . '&nbsp; &nbsp;' . 'YouTube Play'; ?>  </option>
                                <option value='totalsoft totalsoft-play'>          <?php echo '&#xf04b' . '&nbsp; &nbsp;' . 'Play'; ?>          </option>
                                <option value='totalsoft totalsoft-play-circle'>   <?php echo '&#xf144' . '&nbsp; &nbsp;' . 'Play Circle'; ?>   </option>
                                <option value='totalsoft totalsoft-play-circle-o'> <?php echo '&#xf01d' . '&nbsp; &nbsp;' . 'Play Circle O'; ?> </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select color of the play icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_13" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the size of the play icon."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_14" id="TotalSoft_GV_CG_14" min="16" max="72" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_14_Output"
                                    for="TotalSoft_GV_CG_14"></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_8_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Select background color for the popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_15" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Adjust the preferred color for the border."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_16" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine the width of the border for popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_17" id="TotalSoft_GV_CG_17" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_17_Output"
                                    for="TotalSoft_GV_CG_17"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Radius <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Determine tha radius of teh border for popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_18" id="TotalSoft_GV_CG_18" min="0" max="20" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_18_Output"
                                    for="TotalSoft_GV_CG_18"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the title in popup window or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CG_19"
                                       name="">
                                <label for="TotalSoft_GV_CG_19" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the size of the title in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_20" id="TotalSoft_GV_CG_20" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_20_Output"
                                    for="TotalSoft_GV_CG_20"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the preferred font family for title in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_21">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the color of the title text in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_22" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Text Align <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose text align for title (left, center or right)."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_23">
                                <option value="left"> Left</option>
                                <option value="right"> Right</option>
                                <option value="center"> Center</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Description</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Show <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose to show the description in popup window or no."></i></div>
                        <div class="TS_GV_Option_Field">
                            <div class="switch">
                                <input class="cmn-toggle cmn-toggle-yes-no" type="checkbox" id="TotalSoft_GV_CG_24"
                                       name="">
                                <label for="TotalSoft_GV_CG_24" data-on="Yes" data-off="No"></label>
                            </div>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Line After Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line width. Line is located after title in popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper" name=""
                                   id="TotalSoft_GV_CG_25" min="0" max="100" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_25_Output"
                                    for="TotalSoft_GV_CG_25"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line height. Line is located after title in popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                                   id="TotalSoft_GV_CG_26" min="0" max="5" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_26_Output"
                                    for="TotalSoft_GV_CG_26"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Specify the style of the dividing line: None, Solid, Dashed or Dotted."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_27">
                                <option value="none"> None</option>
                                <option value="solid"> Solid</option>
                                <option value="dashed"> Dashed</option>
                                <option value="dotted"> Dotted</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select your preferred color to show the line of separation between the title and description."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_28" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety beautifully designed sets in the gallery to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_29"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value="none"> None</option>
                                <option value='times'>          <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='times-circle'>   <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                                <option value='times-circle-o'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='home'>           <?php echo '&#xf015' . '&nbsp; &nbsp;' . 'Home'; ?>           </option>
                                <option value='reply'>          <?php echo '&#xf112' . '&nbsp; &nbsp;' . 'Reply'; ?>          </option>
                                <option value='reply-all'>      <?php echo '&#xf122' . '&nbsp; &nbsp;' . 'Reply All'; ?>      </option>
                                <option value='refresh'>        <?php echo '&#xf021' . '&nbsp; &nbsp;' . 'Refresh'; ?>        </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the icon to close the popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_CG_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the size of the icon for closing the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_CG_31" id="TotalSoft_GV_CG_31" min="16" max="72" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_31_Output"
                                    for="TotalSoft_GV_CG_31"></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_8_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the border width for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_CG_32" min="0" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_32_Output"
                                for="TotalSoft_GV_CG_32"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Determine the link border color which is in the popup window."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_33" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border radius for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name=""
                               id="TotalSoft_GV_CG_34" min="0" max="15" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_34_Output"
                                for="TotalSoft_GV_CG_34"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Link Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL. If you wrote something in your popup window now you can see it."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CG_35" id="TotalSoft_GV_CG_35" class="Total_Soft_Select"
                               value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define a background color which is intended for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_36" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the text for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_37" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the font size for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CG_38"
                               id="TotalSoft_GV_CG_38" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_38_Output"
                                for="TotalSoft_GV_CG_38"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_39">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select hover background color for link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_40" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font hover color for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_41" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the icon type for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_42"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value="external-link">        <?php echo '&#xf08e' . '&nbsp; &nbsp;' . 'External Link'; ?>         </option>
                            <option value="external-link-square"> <?php echo '&#xf14c' . '&nbsp; &nbsp; ' . 'External Link Square'; ?> </option>
                            <option value="location-arrow">       <?php echo '&#xf124' . '&nbsp; &nbsp; ' . 'Location Arrow'; ?>       </option>
                            <option value="heart-o">              <?php echo '&#xf08a' . '&nbsp; &nbsp;' . 'Heart O '; ?>              </option>
                            <option value="heart">                <?php echo '&#xf004' . '&nbsp; &nbsp;' . 'Heart'; ?>                 </option>
                            <option value="heartbeat">            <?php echo '&#xf21e' . '&nbsp; &nbsp;' . 'Heartbeat'; ?>             </option>
                            <option value="link">                 <?php echo '&#xf0c1' . '&nbsp; &nbsp;' . 'Link'; ?>                  </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the icon size for the icon."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CG_43"
                               id="TotalSoft_GV_CG_43" min="8" max="72" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_43_Output"
                                for="TotalSoft_GV_CG_43"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the icon color for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_44" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Position <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the position of icon in link button: After text or Before Text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_45">
                            <option value="After"> After Text</option>
                            <option value="Before"> Before Text</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_8_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the style for pagination from this list."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_53">
                            <option value="style01"> Style 1</option>
                            <option value="style02"> Style 2</option>
                            <option value="style03"> Style 3</option>
                            <option value="style04"> Style 4</option>
                            <option value="style05"> Style 5</option>
                            <option value="style06"> Style 6</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the font size for the pagination or load more text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_CG_48"
                               id="TotalSoft_GV_CG_48" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_CG_48_Output"
                                for="TotalSoft_GV_CG_48"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the background color for the container of pagination or load more."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select text color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_47" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the background color for the selected page number."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_49" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the text color for the selected page number."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_50" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set hover background color for pagination or load more container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_51" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select text hover color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_52" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border color bor the items in pagination or load more container."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_CG_54" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Pagination Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Select arrows icon types for pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_55"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value='angle-double'>   <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                            <option value='angle'>          <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                            <option value='arrow-circle'>   <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                            <option value='arrow-circle-o'> <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                            <option value='arrow'>          <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                            <option value='caret'>          <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                            <option value='caret-square-o'> <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                            <option value='chevron-circle'> <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                            <option value='chevron'>        <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                            <option value='hand-o'>         <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                            <option value='long-arrow'>     <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Load More Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Select icon for load more option."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_56"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value='long-arrow-down'>   <?php echo '&#xf175' . '&nbsp; &nbsp; &nbsp;' . 'Long Arrow Down'; ?> </option>
                            <option value='arrow-circle-down'> <?php echo '&#xf0ab' . '&nbsp; &nbsp;' . 'Arrow Circle Down'; ?>      </option>
                            <option value='caret-down'>        <?php echo '&#xf0d7' . '&nbsp; &nbsp; ' . 'Caret Down'; ?>            </option>
                            <option value='angle-down'>        <?php echo '&#xf107' . '&nbsp; &nbsp; ' . 'Angle Down'; ?>            </option>
                            <option value='hand-o-down'>       <?php echo '&#xf0a7' . '&nbsp; &nbsp;' . 'Hand O Down'; ?>            </option>
                            <option value='spinner'>           <?php echo '&#xf110' . '&nbsp; &nbsp;' . 'Spinner'; ?>                </option>
                            <option value='sort-desc'>         <?php echo '&#xf0dd' . '&nbsp; &nbsp; &nbsp;' . 'Sort Desc'; ?>       </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Load More Icon Position <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the position of the icon in load more container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_CG_57">
                            <option value="After"> After Text</option>
                            <option value="Before"> Before Text</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Animation Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select effect for showing content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_CG_58" id="TotalSoft_GV_CG_58">
                            <option value="none"> None</option>
                            <option value=""> Animate Height</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_8_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_CG_60" id="TotalSoft_GV_CG_60"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_CG_59" id="TotalSoft_GV_CG_59"
                                onchange="TS_GV_Loading_Changed('CG', 'TotalSoft_GV_CG_59')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_CG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_CG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Total_Soft_AMSetDiv" id="Total_Soft_AMSetDiv_9">
        <div class="Total_Soft_AMSetDiv_Buttons">
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_GO" onclick="TS_GV_TM_But('9', 'GO')">General
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_TO" onclick="TS_GV_TM_But('9', 'TO')">Title
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_PM" onclick="TS_GV_TM_But('9', 'PM')">Popup
                Mode
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_PO" onclick="TS_GV_TM_But('9', 'PO')">Popup
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_LO" onclick="TS_GV_TM_But('9', 'LO')">Link
                Option
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_PL" onclick="TS_GV_TM_But('9', 'PL')">Pagination
                & Load More
            </div>
            <div class="Total_Soft_AMSetDiv_Button" id="TS_GV_TM_TBut_9_LL" onclick="TS_GV_TM_But('9', 'LL')">Loading
                Option
            </div>
        </div>
        <div class="Total_Soft_AMSetDiv_Content">
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_GO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">General Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Show Effect <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose the effect for showing the gallery."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_01" id="TotalSoft_GV_SG_01">
                            <option value="animno"> None</option>
                            <option value="animsc"> Scale</option>
                            <option value="animtr"> Move</option>
                            <option value="fadeIn"> Fade In</option>
                            <option value="moveUp"> Move Up</option>
                            <option value="scaleUp"> Scale Up</option>
                            <option value="fallPerspective"> Fall Perspective</option>
                            <option value="fly"> Fly</option>
                            <option value="flip"> Flip</option>
                            <option value="helix"> Helix</option>
                            <option value="popUp"> Pop Up</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Column Count <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select how many videos you want to be in one row."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range" name="TotalSoft_GV_SG_02" id="TotalSoft_GV_SG_02"
                               min="1" max="8" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_02_Output"
                                for="TotalSoft_GV_SG_02"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Place Between <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the distance between the videos."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_03"
                               id="TotalSoft_GV_SG_03" min="0" max="10" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_03_Output"
                                for="TotalSoft_GV_SG_03"></output>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_TO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Title Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="This function is for the main title. You can select font size."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_04"
                               id="TotalSoft_GV_SG_04" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_04_Output"
                                for="TotalSoft_GV_SG_04"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select that font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_05" id="TotalSoft_GV_SG_05">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Text Align <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose text to align for title (left, center or right)."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_06" id="TotalSoft_GV_SG_06">
                            <option value="left"> Left</option>
                            <option value="right"> Right</option>
                            <option value="center"> Center</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the color for title."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_07" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select background type for title."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_08">
                            <option value='transparent'> Transparent</option>
                            <option value='color'> Color</option>
                            <option value='gradient1'> Gradient 1</option>
                            <option value='gradient2'> Gradient 2</option>
                            <option value='gradient3'> Gradient 3</option>
                            <option value='gradient4'> Gradient 4</option>
                            <option value='gradient5'> Gradient 5</option>
                            <option value='gradient6'> Gradient 6</option>
                            <option value='gradient7'> Gradient 7</option>
                            <option value='gradient8'> Gradient 8</option>
                            <option value='gradient9'> Gradient 9</option>
                            <option value='gradient10'> Gradient 10</option>
                            <option value='gradient11'> Gradient 11</option>
                            <option value='gradient12'> Gradient 12</option>
                            <option value='gradient13'> Gradient 13</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color 1 <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Set the color for background."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_09" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color 2 <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Set second color for making gradient in background."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_10" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_PM">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Mode</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the border color for popup mode."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_12" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Write the text for opening popup window."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_SG_14" id="TotalSoft_GV_SG_14" class="Total_Soft_Select"
                               value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set background color for popup mode."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_15" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the text color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_16" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select that font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_17" id="TotalSoft_GV_SG_17">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the font size for the text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_18"
                               id="TotalSoft_GV_SG_18" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_18_Output"
                                for="TotalSoft_GV_SG_18"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Choose hover effect for popup mode."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_19">
                            <option value='none'> None</option>
                            <option value='effect01'> Border Fade</option>
                            <option value='effect02'> Overline Grow</option>
                            <option value='effect03'> Background Grow</option>
                            <option value='effect04'> Crosshair</option>
                            <option value='effect05'> Brackets</option>
                            <option value='effect06'> Border Slides Up</option>
                            <option value='effect07'> Three Circles</option>
                            <option value='effect08'> Raise From Flat</option>
                            <option value='effect09'> Flatten From Raised</option>
                            <option value='effect10'> Lift Sides</option>
                            <option value='effect11'> Flatten Sides</option>
                            <option value='effect12'> Curl Right Corner</option>
                            <option value='effect13'> Curl Right Side</option>
                            <option value='effect14'> Curl Bottom Corners</option>
                            <option value='effect15'> Icon Hiding</option>
                            <option value='effect16'> Icon Sliding</option>
                            <option value='effect17'> Icon From Bottom</option>
                            <option value='effect18'> Icon In Center</option>
                            <option value='effect19'> Icon Sliding Radius</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set hover background color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_20" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set hover color for popup mode text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_21" class="Total_Soft_VGallery_Color" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select icon type for popup."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_22"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value='file-video-o'> <?php echo '&#xf1c8' . '&nbsp; &nbsp;' . 'File Video O'; ?> </option>
                            <option value='video-camera'> <?php echo '&#xf03d' . '&nbsp; &nbsp;' . 'Video Camera'; ?> </option>
                            <option value='camera-retro'> <?php echo '&#xf083' . '&nbsp; &nbsp;' . 'Camera Retro'; ?> </option>
                            <option value='eye'>          <?php echo '&#xf06e' . '&nbsp; &nbsp;' . 'Eye'; ?>          </option>
                            <option value='film'>         <?php echo '&#xf008' . '&nbsp; &nbsp;' . 'Film'; ?>         </option>
                            <option value='youtube-play'> <?php echo '&#xf16a' . '&nbsp; &nbsp;' . 'YouTube Play'; ?> </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the icon size for icon."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_23"
                               id="TotalSoft_GV_SG_23" min="8" max="72" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_23_Output"
                                for="TotalSoft_GV_SG_23"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Position <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select icon position in container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_24" id="TotalSoft_GV_SG_24">
                            <option value='after'> After Text</option>
                            <option value='before'> Before Text</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div TS_GV_Option_Divv" id="Total_Soft_AMSetTable_9_PO">
                <div class="TS_GV_Option_Divv1">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Popup Options</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select border width for popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_SG_25" id="TotalSoft_GV_SG_25" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_25_Output"
                                    for="TotalSoft_GV_SG_25"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the border color for popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_SG_26" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span>
                            <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                               title="Set background color for popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_SG_27" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Popup Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select font size for title in popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_SG_28" id="TotalSoft_GV_SG_28" min="8" max="36" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_28_Output"
                                    for="TotalSoft_GV_SG_28"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Font Family <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select font family for the title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="TotalSoft_GV_SG_29" id="TotalSoft_GV_SG_29">
																													<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                                 <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                         style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																													<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the title color in popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_SG_30" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                </div>
                <div class="TS_GV_Option_Divv2">
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles">Line After Title</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Width <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose width for separation line the after title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangeper"
                                   name="TotalSoft_GV_SG_31" id="TotalSoft_GV_SG_31" min="0" max="100" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_31_Output"
                                    for="TotalSoft_GV_SG_31"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Height <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the line height. Line is located after title in popup window."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_SG_32" id="TotalSoft_GV_SG_32" min="0" max="10" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_32_Output"
                                    for="TotalSoft_GV_SG_32"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Choose color for separation line the after title."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_SG_33" class="Total_Soft_VGallery_Color"
                                   value="">
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Align <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select position for separation line."></i></div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="TotalSoft_GV_SG_40" id="TotalSoft_GV_SG_40">
                                <option value='left'> Left</option>
                                <option value='right'> Right</option>
                                <option value='center'> Center</option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1 Total_Soft_Titles Total_Soft_Titles1">Close Icon</div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="You can select icons from a variety beautifully designed sets in the gallery to close the lightbox."></i>
                        </div>
                        <div class="TS_GV_Option_Field">
                            <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_58"
                                    style="font-family: 'FontAwesome', Arial;">
                                <option value='times'>          <?php echo '&#xf00d' . '&nbsp; &nbsp;' . 'Times'; ?>          </option>
                                <option value='times-circle'>   <?php echo '&#xf057' . '&nbsp; &nbsp;' . 'Times Circle'; ?>   </option>
                                <option value='times-circle-o'> <?php echo '&#xf05c' . '&nbsp; &nbsp;' . 'Times Circle O'; ?> </option>
                                <option value='home'>           <?php echo '&#xf015' . '&nbsp; &nbsp;' . 'Home'; ?>           </option>
                                <option value='reply'>          <?php echo '&#xf112' . '&nbsp; &nbsp;' . 'Reply'; ?>          </option>
                                <option value='reply-all'>      <?php echo '&#xf122' . '&nbsp; &nbsp;' . 'Reply All'; ?>      </option>
                                <option value='refresh'>        <?php echo '&#xf021' . '&nbsp; &nbsp;' . 'Refresh'; ?>        </option>
                            </select>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Size <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Set the size of the icon for closing the popup."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx"
                                   name="TotalSoft_GV_SG_59" id="TotalSoft_GV_SG_59" min="8" max="72" value="">
                            <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_59_Output"
                                    for="TotalSoft_GV_SG_59"></output>
                        </div>
                    </div>
                    <div class="TS_GV_Option_Div1">
                        <div class="TS_GV_Option_Name">Icon Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                    class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                    title="Select the color of the icon to close the popup window."></i></div>
                        <div class="TS_GV_Option_Field">
                            <input type="text" name="" id="TotalSoft_GV_SG_60" class="Total_Soft_VGallery_Color1"
                                   value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_LO">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Link Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Width <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select border width for link container in popup window."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_41"
                               id="TotalSoft_GV_SG_41" min="0" max="5" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_41_Output"
                                for="TotalSoft_GV_SG_41"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the border color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_42" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Radius <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border radius for gallery link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_43"
                               id="TotalSoft_GV_SG_43" min="0" max="20" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_43_Output"
                                for="TotalSoft_GV_SG_43"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Link Text <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Enter the text that should be in link button. When you have created a gallery in each box has URL."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_SG_44" id="TotalSoft_GV_SG_44" class="Total_Soft_Select"
                               value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Define a background color which is intended for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_45" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the color of the text for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_46" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Position <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select link button position in title & description area."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_47" id="TotalSoft_GV_SG_47">
                            <option value='beforetitle'> Before Title</option>
                            <option value='aftertitle'> After Title</option>
                            <option value='afterline'> After Line</option>
                            <option value='afterdesc'> After Description</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Alignment <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select link button alignment in container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_48" id="TotalSoft_GV_SG_48">
                            <option value='left'> Left</option>
                            <option value='right'> Right</option>
                            <option value='center'> Center</option>
                            <option value='full'> Full</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Family <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font family that will make your gallery more beautiful."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_49" id="TotalSoft_GV_SG_49">
																									<?php for ( $i = 0; $i < count( $TotalSoftFontGCount ); $i ++ ) { ?>
                             <option value='<?php echo $TotalSoftFontGCount[ $i ]; ?>'
                                     style="font-family: <?php echo $TotalSoftFontGCount[ $i ]; ?>;"><?php echo $TotalSoftFontCount[ $i ]; ?></option>
																									<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the font size for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_50"
                               id="TotalSoft_GV_SG_50" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_50_Output"
                                for="TotalSoft_GV_SG_50"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select hover background color for link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_51" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select font hover color for link."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_52" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Type <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the icon type for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_53"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value="external-link">        <?php echo '&#xf08e' . '&nbsp; &nbsp;' . 'External Link'; ?>         </option>
                            <option value="external-link-square"> <?php echo '&#xf14c' . '&nbsp; &nbsp; ' . 'External Link Square'; ?> </option>
                            <option value="link">                 <?php echo '&#xf0c1' . '&nbsp; &nbsp;' . 'Link'; ?>                  </option>
                            <option value="location-arrow">       <?php echo '&#xf124' . '&nbsp; &nbsp; ' . 'Location Arrow'; ?>       </option>
                            <option value="heart-o">              <?php echo '&#xf08a' . '&nbsp; &nbsp;' . 'Heart O '; ?>              </option>
                            <option value="heart">                <?php echo '&#xf004' . '&nbsp; &nbsp;' . 'Heart'; ?>                 </option>
                            <option value="heartbeat">            <?php echo '&#xf21e' . '&nbsp; &nbsp;' . 'Heartbeat'; ?>             </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the icon size for the icon."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_54"
                               id="TotalSoft_GV_SG_54" min="8" max="72" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_54_Output"
                                for="TotalSoft_GV_SG_54"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the icon color for the link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_55" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the icon hover color for link button."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_56" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Icon Position <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the position of icon in link button: After text or Before Text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_57" id="TotalSoft_GV_SG_57">
                            <option value='after'> After</option>
                            <option value='before'> Before</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_PL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Pagination & Load More</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Style <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the style for pagination from this list."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_61">
                            <option value="style01"> Style 1</option>
                            <option value="style02"> Style 2</option>
                            <option value="style03"> Style 3</option>
                            <option value="style04"> Style 4</option>
                            <option value="style05"> Style 5</option>
                            <option value="style06"> Style 6</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Font Size <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the font size for the pagination or load more text."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="range" class="TotalSoft_VG_Range TotalSoft_VG_Rangepx" name="TotalSoft_GV_SG_62"
                               id="TotalSoft_GV_SG_62" min="8" max="36" value="">
                        <output class="TotalSoft_Out" name="" id="TotalSoft_GV_SG_62_Output"
                                for="TotalSoft_GV_SG_62"></output>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Background Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the background color for the container of pagination or load more."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_63" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select text color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_64" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the background color for the selected page number."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_65" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Current Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the text color for the selected page number."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_66" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Background Color <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set hover background color for pagination or load more container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_67" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Hover Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select text hover color."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_68" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Border Color <span class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Install the border color bor the items in pagination or load more container."></i>
                    </div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="" id="TotalSoft_GV_SG_69" class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Pagination Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Select arrows icon types for pagination."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_70"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value='angle-double'>   <?php echo '&#xf100' . '&nbsp; &nbsp; &nbsp;' . 'Angle Double'; ?>  </option>
                            <option value='angle'>          <?php echo '&#xf104' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Angle'; ?>   </option>
                            <option value='arrow-circle'>   <?php echo '&#xf0a8' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle'; ?>   </option>
                            <option value='arrow-circle-o'> <?php echo '&#xf190' . '&nbsp; &nbsp;&nbsp;' . 'Arrow Circle O'; ?> </option>
                            <option value='arrow'>          <?php echo '&#xf060' . '&nbsp; &nbsp;&nbsp;' . 'Arrow'; ?>          </option>
                            <option value='caret'>          <?php echo '&#xf0d9' . '&nbsp; &nbsp; &nbsp;&nbsp;' . 'Caret'; ?>   </option>
                            <option value='caret-square-o'> <?php echo '&#xf191' . '&nbsp; &nbsp;&nbsp;' . 'Caret Square O'; ?> </option>
                            <option value='chevron-circle'> <?php echo '&#xf137' . '&nbsp; &nbsp;&nbsp;' . 'Chevron Circle'; ?> </option>
                            <option value='chevron'>        <?php echo '&#xf053' . '&nbsp; &nbsp; ' . 'Chevron'; ?>             </option>
                            <option value='hand-o'>         <?php echo '&#xf0a5' . '&nbsp; &nbsp;' . 'Hand O'; ?>               </option>
                            <option value='long-arrow'>     <?php echo '&#xf177' . '&nbsp; &nbsp;' . 'Long Arrow'; ?>           </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Load More Icon Type <span class="TS_Free_version_Span"> (Pro)</span>
                        <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                           title="Select icon for load more option."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_71"
                                style="font-family: 'FontAwesome', Arial;">
                            <option value="none"> None</option>
                            <option value='long-arrow-down'>   <?php echo '&#xf175' . '&nbsp; &nbsp; &nbsp;' . 'Long Arrow Down'; ?> </option>
                            <option value='arrow-circle-down'> <?php echo '&#xf0ab' . '&nbsp; &nbsp;' . 'Arrow Circle Down'; ?>      </option>
                            <option value='caret-down'>        <?php echo '&#xf0d7' . '&nbsp; &nbsp; ' . 'Caret Down'; ?>            </option>
                            <option value='angle-down'>        <?php echo '&#xf107' . '&nbsp; &nbsp; ' . 'Angle Down'; ?>            </option>
                            <option value='hand-o-down'>       <?php echo '&#xf0a7' . '&nbsp; &nbsp;' . 'Hand O Down'; ?>            </option>
                            <option value='spinner'>           <?php echo '&#xf110' . '&nbsp; &nbsp;' . 'Spinner'; ?>                </option>
                            <option value='sort-desc'>         <?php echo '&#xf0dd' . '&nbsp; &nbsp; &nbsp;' . 'Sort Desc'; ?>       </option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Load More Icon Position <span
                                class="TS_Free_version_Span"> (Pro)</span> <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the position of the icon in load more container."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="" id="TotalSoft_GV_SG_72">
                            <option value="After"> After Text</option>
                            <option value="Before"> Before Text</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="TS_GV_Option_Div" id="Total_Soft_AMSetTable_9_LL">
                <div class="TS_GV_Option_Div1 Total_Soft_Titles">Loading Options</div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Overlay Color <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Set the overlay color of the loading content."></i></div>
                    <div class="TS_GV_Option_Field">
                        <input type="text" name="TotalSoft_GV_SG_74" id="TotalSoft_GV_SG_74"
                               class="Total_Soft_VGallery_Color1" value="">
                    </div>
                </div>
                <div class="TS_GV_Option_Div1">
                    <div class="TS_GV_Option_Name">Type <i
                                class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o"
                                title="Select the Loading type."></i></div>
                    <div class="TS_GV_Option_Field">
                        <select class="Total_Soft_Select" name="TotalSoft_GV_SG_73" id="TotalSoft_GV_SG_73"
                                onchange="TS_GV_Loading_Changed('SG', 'TotalSoft_GV_SG_73')">
                            <option value=""> None</option>
                            <option value="1"> Type 1</option>
                            <option value="2"> Type 2</option>
                            <option value="3"> Type 3</option>
                            <option value="4"> Type 4</option>
                            <option value="5"> Type 5</option>
                        </select>
                    </div>
                </div>
                <div class="TS_GV_Option_Div1" style="height: 70px;">
                    <div class="TS_GV_Option_Name">
                        <input type="text" style="opacity: 0;" id="TS_GV_SG_Hidden"
                               value="<?php echo plugins_url( '../Images/Loading/', __FILE__ ); ?>">
                    </div>
                    <div class="TS_GV_Option_Field" style="height: 70px; text-align: center;">
                        <img src="" id="TS_GV_SG_Image" style="height: 50px; margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>