<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('underscore_special')) {

    /**
     * Underscore Special.
     * 
     * Convierte acentos especiales en normales y pone linea baja. Apta para Seo
     * 
     * @param string $str
     * @return string 
     */
    function underscore_special($string = NULL, $separator = '_'){
        if(empty($string)){
            return FALSE;
        }
        $string = preg_replace("`\[.*\]`U","",$string);
	$string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
	$string = htmlentities($string, ENT_COMPAT, 'utf-8');
	$string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
	$string = preg_replace( array("`[^a-z0-9]`i","`[-]+`") ,$separator, $string);
        $string = str_replace('-amp-', '-y-', $string);
	return strtolower(trim($string, '-'));
    }
    
}

if (!function_exists('seo_name')) {
    function seo_name($string){
        return underscore_special($string, '-');
    }
}