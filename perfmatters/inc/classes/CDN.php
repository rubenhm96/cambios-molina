<?php
namespace Perfmatters;

class CDN
{
    //initialize cdn
    public static function init() 
    {
        //add cdn rewrite to the buffer
        if(!empty(Config::$cdn['enable_cdn']) && !empty(Config::$cdn['cdn_url'])) {
            add_action('perfmatters_output_buffer', array('Perfmatters\CDN', 'rewrite'));
        }
    }

    //rewrite urls in html
    public static function rewrite($html) 
    {
        //prep site url
        $escapedSiteURL = quotemeta(get_option('home'));
        $regExURL = '(https?:|)' . substr($escapedSiteURL, strpos($escapedSiteURL, '//'));

        //prep included directories
        $directories = 'wp\-content|wp\-includes';
        if(!empty(Config::$cdn['cdn_directories'])) {
            $directoriesArray = array_map('trim', explode(',', Config::$cdn['cdn_directories']));
            if(count($directoriesArray) > 0) {
                $directories = implode('|', array_map('quotemeta', array_filter($directoriesArray)));
            }
        }

        //rewrite urls in html
        $regEx = '#(?<=[(\"\'])(?:' . $regExURL . ')?/(?:((?:' . $directories . ')[^\"\')]+)|([^/\"\']+\.[^/\"\')]+))(?=[\"\')])#';

        //base exclusions
        $exclusions = array('script-manager.js');

        //add user exclusions
        if(!empty(Config::$cdn['cdn_exclusions'])) {
            $exclusions_user = array_map('trim', explode(',', Config::$cdn['cdn_exclusions']));
            $exclusions = array_merge($exclusions, $exclusions_user);
        }

        //prep site url
        $siteURL = get_option('home');
        $siteURL = substr($siteURL, strpos($siteURL, '//'));

        //set cdn url
        $cdnURL = Config::$cdn['cdn_url'];

        //replace urls
        $html = preg_replace_callback($regEx, function($url) use ($siteURL, $cdnURL, $exclusions) {

            //check for exclusions
            foreach($exclusions as $exclusion) {
                if(!empty($exclusion) && stristr($url[0], $exclusion) != false) {
                    return $url[0];
                }
            }

            //replace url with no scheme
            if(strpos($url[0], '//') === 0) {
                return str_replace($siteURL, $cdnURL, $url[0]);
            }

            //replace non relative site url
            if(strstr($url[0], $siteURL)) {
                return str_replace(array('http:' . $siteURL, 'https:' . $siteURL), $cdnURL, $url[0]);
            }

            //replace relative url
            return $cdnURL . $url[0];

        }, $html);

        return $html;
    }
}