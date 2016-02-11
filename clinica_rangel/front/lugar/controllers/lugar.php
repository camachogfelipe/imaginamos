<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Lugar extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'SEDE CAMPESTRE');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $id_pag = $this->page_id('lugar'); 
        
        $acordeon = new acordeon_lugar(); 
        $this->_data['acordeon'] = $acordeon->join_related('imagen')->get()->limit(3); 
        
        $text = new texto_principal(); 
        $this->_data['text_page'] = $text->get_by_pagina_id($id_pag)->limit(1); 
            
        $contenedor = new contenedor(); 
        $this->_data['contenedor'] =  $contenedor->join_related('imagen')->get_by_pagina_id($id_pag); 
        
        $destacado = new destacado(); 
        $this->_data['destacado'] =  $destacado->join_related('imagen')->get_by_pagina_id($id_pag)->limit(2); 
                
        $video = new video(); 
        $this->_data['video'] = $video->join_related('imagen')->get_by_pagina_id($id_pag)->limit(1); 
        
        
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
 