<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 */
class Contactos extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->session->set_userdata('page_act', 'CONTACTOS'); 
    }

    // ----------------------------------------------------------------------

    public function index() {
        
       $contactenos = new contactenos(); 
       $this->_data['contactenos'] = $contactenos->join_related('imagen')->get_by_id(1); 
        
        return $this->build('body');
    }



}
 