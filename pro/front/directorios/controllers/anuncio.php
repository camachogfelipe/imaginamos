<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Anuncio extends Front_Controller {
    
    private $_datos = null;
    
     protected $user_area = true;

    public function __construct() {
        parent::__construct();
        
        $this->_datos = new Directorio;
    }

    // ----------------------------------------------------------------------
    
    public function index($code = null) {
       
        $datos = $this->_datos;
        
        $datos->get_by_code($code);
        
        if(!$datos->exists()){
            return show_404();
        }
        
        $this->set_datos($datos);
        
        return $this->set_title($datos->empresa)->build('anuncio/detalle');
    }

    // ----------------------------------------------------------------------
}