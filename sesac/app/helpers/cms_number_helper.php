<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

define('FORMATTED_USD', 'USD %s');
define('FORMATTED_COP', 'COP %s');

if (!function_exists('price_format')) {

    function price_format($number, $decimals = 0) {
        $number = floatval($number);
        return sprintf('$%s', number_format($number, $decimals));
    }

}

if (!function_exists('price_formatted_usd')) {

    function price_formatted_usd($number) {
        return sprintf(FORMATTED_USD, price_format($number));
    }

}
if (!function_exists('price_formatted_cop')) {

    function price_formatted_cop($number) {
        return sprintf(FORMATTED_COP, price_format_round($number));
    }

}

if (!function_exists('price_format_round')) {

    function price_format_round($number, $decimals = 0) {
        $number = round($number);
        return sprintf('$%s', number_format($number, $decimals));
    }

}

if (!function_exists('formatBytes')) {

    function formatBytes($bytes, $precision = 2) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow)); 

        return round($bytes, $precision) . ' ' . $units[$pow];
    }

}
