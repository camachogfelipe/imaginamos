<?php

if (!function_exists('create_noty')) {

    function create_noty($text = null, $type = 'alert', $layout = 'top', $timeout = 5, $modal = false) {
        if (empty($text)) {
            return false;
        }
        
        if(!empty($timeout)){
            $timeout *= 1000;
        }
        
        $noty = array(
            'layout' => $layout,
            'text' => trim($text),
            'type' => $type,
            'timeout' => $timeout,
            'modal' => $modal,
        );
        
        $ci =& get_instance();
        
        $noty_all = array();
        
        if($ci->session->flashdata('noty_messages')){
            $noty_all = json_decode($ci->session->flashdata('noty_messages'));
        }
        
        $noty_all[] = $noty;
        
      
        $ci->session->set_flashdata('noty_messages', json_encode($noty_all));

        return true;
    }

}

if (!function_exists('show_noty')) {

    function show_noty() {
        
        $ci =& get_instance();
        
        $noty_all = null;
        
        if($ci->session->flashdata('noty_messages')){
            $noty_all = json_decode($ci->session->flashdata('noty_messages'));
        }
        
        $return = false;
        
        if( ! empty($noty_all)){
            $return .= '<script>(function($){$(function(){';
            
            foreach($noty_all as $_noty){
                $_noty = json_encode($_noty);
                $return .= "noty({$_noty});";
            }
            
            $return .= ' });})(window.jQuery);</script>';
            
        }
        
        

        return $return;
    }

}
