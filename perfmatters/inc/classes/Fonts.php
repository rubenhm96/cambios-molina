<?php
namespace Perfmatters;

class Fonts
{
    private static $font_file_cache_url = PERFMATTERS_CACHE_URL;

    //initialize fonts
    public static function init() {
        if(empty(Config::$options['disable_google_fonts'])) {

            //add display swap to the buffer
            if(!empty(Config::$options['fonts']['display_swap'])) {
                add_action('perfmatters_output_buffer', array('Perfmatters\Fonts', 'display_swap'));
            }

            //add local google fonts to the buffer
            if(!empty(Config::$options['fonts']['local_google_fonts'])) {
                add_action('perfmatters_output_buffer', array('Perfmatters\Fonts', 'local_google_fonts'));
            }
        }
    }

    //add display swap to google font files
    public static function display_swap($html) {

        //find google fonts
        preg_match_all('#<link.*?href=(["\'])(.*?fonts\.googleapis\.com\/css.*?)\1.*?>#i', $html, $google_fonts, PREG_SET_ORDER);
        if(!empty($google_fonts)) {
            foreach($google_fonts as $google_font) {

                //replace display parameter
                $new_href = preg_replace('/&display=(auto|block|fallback|optional|swap)/', '', html_entity_decode($google_font[2]));
                $new_href.= '&display=swap';

                //create font tag with new href
                $new_google_font = str_replace($google_font[2], $new_href, $google_font[0]);

                //replace original font tag
                $html = str_replace($google_font[0], $new_google_font, $html);
            }
        }

        return $html;
    }

    //download and host google font files locally
    public static function local_google_fonts($html) {

        //create our fonts cache directory
        @mkdir(PERFMATTERS_CACHE_DIR . 'fonts/', 0755, true);

        //rewrite cdn url in font file cache url
        $cdn_url = !empty(Config::$options['fonts']['cdn_url']) ? Config::$options['fonts']['cdn_url'] : (!empty(Config::$cdn['enable_cdn']) && !empty(Config::$cdn['cdn_url']) ? Config::$cdn['cdn_url'] : '');
        if(!empty($cdn_url)) {
            self::$font_file_cache_url = str_replace(site_url(), untrailingslashit($cdn_url), PERFMATTERS_CACHE_URL);
        }

        //remove existing google font preloads
        preg_match_all('#<link.*?rel=(?>["\'])pre.*?href=(["\'])(.*?fonts\.gstatic\.com.*?)\1.*?>#i', $html, $preconnects, PREG_SET_ORDER);
        if(!empty($preconnects)) {
            foreach($preconnects as $preconnect) {
                $html = str_replace($preconnect[0], '', $html);
            }
        }

        //find google fonts
        preg_match_all('#<link.*?href=(["\'])(.*?fonts\.googleapis\.com\/css.*?)\1.*?>#i', $html, $google_fonts, PREG_SET_ORDER);
        if(!empty($google_fonts)) {
            foreach($google_fonts as $google_font) {
     
                //create unique file details
                $file_name = substr(md5($google_font[2]), 0, 12) . ".google-fonts.css";
                $file_path = PERFMATTERS_CACHE_DIR . 'fonts/' . $file_name;
                $file_url = PERFMATTERS_CACHE_URL . 'fonts/' . $file_name;

                //download file if it doesn't exist
                if(!file_exists($file_path)) {
                    self::download_google_font($google_font[2], $file_path);
                }

                //create font tag with new url
                $new_google_font = str_replace($google_font[2], $file_url, $google_font[0]);

                //replace original font tag
                $html = str_replace($google_font[0], $new_google_font, $html);
            }
        }

        return $html;
    }

    //download and save google font css file
    private static function download_google_font($url, $file_path)
    {
        //add https if using relative scheme
        if(substr($url, 0, 2) === '//') {
            $url = 'https:' . $url;
        }

        //download css file
        $response = wp_remote_get(html_entity_decode($url), array('user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.122 Safari/537.36'));

        //check valid response
        if(is_wp_error($response)) {
            return false;
        }

        //css content
        $css = $response['body'];

        //find font files inside the css
        $regex = '/url\((https:\/\/fonts\.gstatic\.com\/.*?)\)/';
        preg_match_all($regex, $css, $matches);
        $font_urls = array_unique($matches[1]);

        //download font files to cache directory
        self::multiple_download($font_urls, PERFMATTERS_CACHE_DIR . 'fonts/');

        //replace font file URLs with local paths
        foreach($font_urls as $font_url) {
            $cached_font_url = self::$font_file_cache_url . 'fonts/' . basename($font_url);
            $css = str_replace($font_url, $cached_font_url, $css);
        }

        //save final css file
        file_put_contents($file_path, $css);
    }

    //https://gist.github.com/nicklasos/365a251d63d94876179c
    private static function multiple_download($urls, $save_path) {
        $multi_handle = curl_multi_init();
        $file_pointers = [];
        $curl_handles = [];

        // Add curl multi handles, one per file we don't already have
        foreach($urls as $key => $url) {
            $file = $save_path . '/' . basename($url);
            if(!is_file($file)) {
                $curl_handles[$key] = curl_init($url);
                $file_pointers[$key] = fopen($file, 'w');
                curl_setopt($curl_handles[$key], CURLOPT_FILE, $file_pointers[$key]);
                curl_setopt($curl_handles[$key], CURLOPT_HEADER, 0);
                curl_setopt($curl_handles[$key], CURLOPT_CONNECTTIMEOUT, 60);
                curl_multi_add_handle($multi_handle, $curl_handles[$key]);
            }
        }

        // Download the files
        do {
            curl_multi_exec($multi_handle, $running);
        } while ($running > 0);

        // Free up objects
        foreach($urls as $key => $url) {
            if(array_key_exists($key, $curl_handles)) {
                curl_multi_remove_handle($multi_handle, $curl_handles[$key]);
                curl_close($curl_handles[$key]);
                fclose($file_pointers[$key]);
            }
        }
        curl_multi_close($multi_handle);
    }

    //delete all files in the fonts cache directory
    public static function clear_local_fonts()
    {
        $files = glob(PERFMATTERS_CACHE_DIR . 'fonts/*');
        foreach($files as $file) {
            if(is_file($file)) {
                unlink($file);
            }
        }
    }
}