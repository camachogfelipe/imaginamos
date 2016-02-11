<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// ----------------------------------------------------------------------

if (!function_exists('cdn_imaginamos')) {

    function cdn_imaginamos($uri = null) {
        $CI = & get_instance();

        $cdn_url = $CI->config->item('CDN_imaginamos');

        if (!filter_var($cdn_url, FILTER_VALIDATE_URL))
            $cdn_uri = site_url($cdn_url);

        return $cdn_url . $uri;
    }

}

// ----------------------------------------------------------------------

if (!function_exists('cms_url')) {

    function cms_url($uri = null) {
        return site_url('cms/' . $uri);
    }

}

// ----------------------------------------------------------------------

if (!function_exists('admin_url')) {

    function admin_url($uri = null) {
        return site_url('admin/' . $uri);
    }

}

// ----------------------------------------------------------------------

if (!function_exists('global_asset')) {

    function global_asset($uri = null) {
        return front_asset('global/' . $uri);
    }

}

// ----------------------------------------------------------------------

if (!function_exists('front_asset')) {

    function front_asset($uri = null) {
        return base_url('assets/' . $uri);
    }

}

// ----------------------------------------------------------------------

if (!function_exists('back_asset')) {

    function back_asset($uri = null) {
        return base_url('back/assets/' . $uri);
    }

}

// ----------------------------------------------------------------------


if (!function_exists('cms_upload_url')) {

    function cms_upload_url($uri = null) {
        return base_url('uploads/' . $uri);
    }

}

// ----------------------------------------------------------------------

if (!function_exists('uploads_url')) {

    function uploads_url($uri = null) {
        return cms_upload_url($uri);
    }

}

if (!function_exists('is_youtube_url')) {
    /**
     * ¿Es una URL válida de Youtube?
     * 
     * @param string $url
     * @return boolean
     */
    function is_youtube_url($url) {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return false;
        }
        return (bool) preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url);
    }

}

if (!function_exists('is_facebook_url')) {
    /**
     * ¿Es una URL válida de Facebook?
     * 
     * @param string $url
     * @return boolean
     */
    function is_facebook_url($url) {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return false;
        }
        return (bool) preg_match('/facebook\.com/i', $url);
    }

}