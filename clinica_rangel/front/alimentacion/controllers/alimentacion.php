<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Alimentacion extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'ADELGAZAR'); 
    }

    // ----------------------------------------------------------------------

    public function index() {
         $id_pag = $this->page_id('tu_alimentacion'); 
        
         $recetas = new receta(); 
         $this->_data['recetas'] = $recetas->join_related('imagen')->get_by_pagina_id($id_pag); 
         
         $barner = new barner(); 
         $this->_data['barner'] = $barner->join_related('imagen')->join_related('imagen1')->get_by_pagina_id($id_pag)->limit(1); 
  
         $text = new texto_principal(); 
         $this->_data['text_page'] = $text->get_by_pagina_id($id_pag)->limit(1); 
         
        $contenedor = new contenedor_alimentacion(); 
        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        $pasos = new asi_facil(); 
        $this->_data['pasos'] =  $pasos->join_related('imagen')->get_by_pagina_id($id_pag); 
//     
//     
//        $destacado = new destacado(); 
//        $this->_data['destacado'] =  $destacado->join_related('imagen')->get_by_pagina_id($id_pag)->limit(2); 
//        
//        $contenedor = new contenedor(); 
//        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
//        
//        $text = new texto_principal(); 
//        $this->_data['text_page'] = $text->get_by_pagina_id($id_pag)->limit(1); 
//        
//        $video = new video(); 
//        $this->_data['video'] = $video->join_related('imagen')->get_by_pagina_id($id_pag)->limit(1); 
//        
//        
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
 