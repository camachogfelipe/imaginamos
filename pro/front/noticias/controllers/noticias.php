<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Noticias extends Front_Controller {
    
     protected $user_area = true;

    public function __construct() {
        parent::__construct();
        
        $this->load->model(array('_news/news', '_news/news_image'));
    }

    // ----------------------------------------------------------------------
    
    public function index() {
        $datos = new News;
        $datos->get();
       
        
        
        $this->set_title('Noticias');
        return $this->set_datos($datos)->build();
    }

    // ----------------------------------------------------------------------

    public function ver($var = null) {
        $datos = new News;
        $datos->get_by_var($var);
        
        $this->set_title('Noticia: ' . $datos->title);
        
        return $this->set_datos($datos)->build('noticias');
    }

    // ----------------------------------------------------------------------
    
    
  
}
