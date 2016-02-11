<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author rigobcastro
 */
class Servicios extends Front_Controller{
    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------
    
    public function index() {
        $this->build();                
    }

    // ----------------------------------------------------------------------
    
    public function default_page(){
        redirect($this->current_lang.'/home', 'refresh');
    }
}
