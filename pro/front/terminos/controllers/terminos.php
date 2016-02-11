<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Terminos extends Front_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('GetFaqs');
    }

    // ----------------------------------------------------------------------
    
    public function index() {
        $this->set_title('Terminos');    
         //$this->_data['faqs'] = $this->GetFaqs->GetFaqsTotal();
        //$this->load->view(base_url()'views/body', $data);
        return $this->build();
        
    }

    // ----------------------------------------------------------------------
}