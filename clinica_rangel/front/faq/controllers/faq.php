<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Faq extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'FAQ'); 
    }

    // ----------------------------------------------------------------------

    public function index() {

         $preguntas = new preguntas_frecuentes(); 
         $this->_data['preguntas'] = $preguntas->get(); 
        return $this->build('body');
    }

    



}
 