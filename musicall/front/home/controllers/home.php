<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->load->model('_contents/content');
        
        $content = new Content;
        
        $content->get_by_var('footer');
        $this->_data['footer_content'] = $content->content;
        
        $content->get_by_var('terminos_y_condiciones');
        $this->_data['terminos_y_condiciones'] = $content->content;
        
        $this->set_title('Bienvenidos a ' . SITENAME, true);
        
       
        return $this->build();
    }

    // ----------------------------------------------------------------------
  
}
