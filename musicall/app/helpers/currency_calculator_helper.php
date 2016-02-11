<?php

if (!function_exists('converter_usd_to_cop')) {

    function converter_usd_to_cop($usd = 0) {
        if (empty($usd)) {
            return false;
        }
        $ci = & get_instance();

        if (empty($ci->currency_calculator)) {
            $ci->load->library('currency_calculator');
        }
        $calculator = $ci->currency_calculator;

        return $calculator->converter_usd_to_cop($usd);
    }

}

if (!function_exists('formatted_price_to_float')) {
    function formatted_price_to_float($formatted_price) {
        $price = 0;
        if (!empty($formatted_price)) {
            $price = str_replace('$', '', $formatted_price);
            $price = str_replace(',', '', $price);
        }
        return floatval($price);
    }

}