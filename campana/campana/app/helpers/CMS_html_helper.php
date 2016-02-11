<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('html_purify')) {

    function html_purify($dirty_html, $config = FALSE) {
        require_once APPPATH . 'third_party/htmlpurifier-4.4.0/library/HTMLPurifier.auto.php';

        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($dirty_html);


        return $clean_html;
    }

}
