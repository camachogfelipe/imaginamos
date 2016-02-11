<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Renacer extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'SEDE CAMPESTRE');
    }

    // ----------------------------------------------------------------------

    public function index() {
         $id_pag = $this->page_id('renacimiento'); 
        
        $barner = new barner(); 
        $this->_data['barner'] = $barner->join_related('imagen')->join_related('imagen1')->join_related('imagen2')->get_by_pagina_id($id_pag); 
       
        $video = new video(); 
        $this->_data['video'] = $video->join_related('imagen')->limit(1)->get_by_pagina_id($id_pag); 
       
        $beneficio = new beneficio(); 
        $this->_data['beneficio'] = $beneficio->get_by_pagina_id($id_pag); 
        
        $imagen_beneficio = new imagen_beneficio(); 
        $this->_data['imagen_beneficio'] = $imagen_beneficio->join_related('imagen')->get_by_pagina_id($id_pag); 
       
        $destacado = new destacado(); 
        $this->_data['destacado'] =  $destacado->join_related('imagen')->limit(2)->get_by_pagina_id($id_pag); 
        
        $contenedor = new contenedor_renacimiento(); 
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
 