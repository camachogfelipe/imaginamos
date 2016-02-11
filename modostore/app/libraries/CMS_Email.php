<?php

class CMS_Email extends CI_Email {

    public function __construct($config = array()) {
        $CI =& get_instance();
        $config = array_merge($config, $CI->config->load('email_config', true));
        
        
        parent::__construct($config);
    }
    
    public function send() {
        $this->set_newline("\r\n");
        return parent::send();
    }

    // ----------------------------------------------------------------------
}