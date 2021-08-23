<?php


namespace WPDM\Widgets;


class WidgetController
{
    private static $wpdm_instance = null;

    public static function instance(){
        if ( is_null( self::$wpdm_instance ) ) {
            self::$wpdm_instance = new self();
        }
        return self::$wpdm_instance;
    }

    private function __construct()
    {
        add_action('widgets_init', function(){
            register_widget("\WPDM\Widgets\Affiliate");
            register_widget("\WPDM\Widgets\Categories");
            register_widget("\WPDM\Widgets\CatPackages");
            register_widget("\WPDM\Widgets\ListPackages");
            register_widget("\WPDM\Widgets\NewDownloads");
            register_widget("\WPDM\Widgets\PackageInfo");
            register_widget("\WPDM\Widgets\Search");
            register_widget("\WPDM\Widgets\Tags");
            register_widget("\WPDM\Widgets\TopDownloads");
        });

    }
}
