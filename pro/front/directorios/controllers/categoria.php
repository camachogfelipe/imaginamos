<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Categoria extends Front_Controller {

     protected $user_area = true;
    
    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------
    
    public function index($var = null, $page = 1) {
        
        $datos = new Directorio_categoria;
        
        $datos->get_by_var($var);
        
        if(!$datos->exists()){
            return show_404();
        }
       
        $datos->anuncios = $datos->get_active_anuncios($page);
        
        $this->set_datos($datos);
        
        return $this->set_title('Directorio')->build('detalle_categoria');
    }

    // ----------------------------------------------------------------------
}