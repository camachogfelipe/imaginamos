<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Entertainment extends Front_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('GetFaqs');
    }

    // ----------------------------------------------------------------------
    
    public function index() {
        $this->set_title('Entertainment');    
         $this->_data['faqs'] = $this->GetFaqs->GetFaqsTotal();
        //$this->load->view(base_url()'views/body', $data);
        return $this->build();
        
    }
    
     public function save() {
       $datos["id"] = null;
       $datos["titulo_faq"] = $this->_post('presentacion');
       
       $this->db->insert('cms_faqs', $datos);
      echo "<script>alert('Pregunta realizada correctamente, pronto recibira una respuesta');</script>";
        return $this->build('body');
        
    }

    // ----------------------------------------------------------------------
}