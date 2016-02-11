<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Testimonios extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'ADELGAZAR'); 
    }

    // ----------------------------------------------------------------------

    public function index() {
     
        $id_pag = $this->page_id('testimonio'); 
        
        $barner = new barner(); 
        $this->_data['barner'] = $barner->join_related('imagen')->join_related('imagen1')->get_by_pagina_id($id_pag)->limit(1); 
     
        $destacado = new destacado(); 
        $this->_data['destacado'] =  $destacado->join_related('imagen')->get_by_pagina_id($id_pag)->limit(2); 
    
        
        $contenedor = new contenedor_testimonio(); 
        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        
        return $this->build('body');
    }

     public function page_id($page){
        $pag = new pagina(); 
        $pag->get_by_titulo($page); 
        if($pag->exists())
          return $pag->id; 
        else
          return false; 
    }



}
 