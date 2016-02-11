<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Adelgazar extends Front_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'SEDE CAMPESTRE');
    }

    // ----------------------------------------------------------------------

    public function index() {
           $id_pag = $this->page_id('adelgazamiento'); 
        
        $barner = new barner(); 
        $this->_data['barner'] = $barner->join_related('imagen')->join_related('imagen1')->join_related('imagen2')->get_by_pagina_id($id_pag)->limit(1); 
     
        $beneficio = new beneficio(); 
         $this->_data['beneficio'] = $beneficio->limit(4)->get_by_pagina_id($id_pag); 

        $testimonios = new testimonios_fitcamp(); 
        $this->_data['testimonios'] = $testimonios->join_related('imagen')->get()->limit(4); 
        
        $destacado = new destacado(); 
        $this->_data['destacado'] =  $destacado->join_related('imagen')->get_by_pagina_id($id_pag)->limit(2); 
        
        $contenedor = new contenedor(); 
        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        $video = new video(); 
        $this->_data['video'] = $video->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        
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
 