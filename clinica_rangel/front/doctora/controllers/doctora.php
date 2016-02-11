<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Doctora extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'DRA. ROSALINDA'); 
        
    }

    // ----------------------------------------------------------------------

    public function index() {
         $id_pag = $this->page_id('dra_rosalinda'); 
        
        $barner = new dra_rosalinda(); 
        $this->_data['barner'] = $barner->join_related('imagen')->get_by_pagina_id($id_pag); 
       
        $contenedor = new contenedor(); 
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
 