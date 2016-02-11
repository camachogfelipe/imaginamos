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

function logo_img(){
    return img('http://demo.idearama.co/assets/imagenes/logo.png');
}