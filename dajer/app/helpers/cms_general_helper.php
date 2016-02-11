<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


if (!function_exists('get_video_embed')) {


    function get_video_embed($url = null) {
        $oembed = null;
        
        if (!empty($url)) {

            $url_get = 'http://vimeo.com/api/oembed.json?url=%s';

            if (is_youtube_url($url)) {
                $url_get = 'http://www.youtube.com/oembed?url=%s&format=json';
            }

            $oembed = json_decode(@file_get_contents(sprintf($url_get, rawurlencode($url))));
        }
        
        if(empty($oembed)){
            return false;
        }

        return $oembed->oembed->html;
    }

}


if (!function_exists('create_alert_sticker')) {

    function create_alert_sticker($message, $type = 'info', $delay = true, $delay_seconds = 5000, $position = 'top-center') {
        $type = trim(strtolower($type));

        if ($type == 'error' OR $delay == false) {
            $type .= ' no-delay';
        }

        $format = '<script>$.sticky("%s", {autoclose : %d, position: "%s", type: "st-%s" });</script>';

        return (sprintf($format, $message, $delay_seconds, $position, $type));
    }

}