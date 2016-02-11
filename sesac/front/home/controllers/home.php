<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//        $this->set_title('Bienvenidos a ' . SITENAME, true);
      $this->loadBanner();
      $this->loadWelcomeMessage();
      $this->loadHighlights();
      return $this->build();
    }
    
    private function loadBanner(){
      $this->load->model(CMSPREFIX."home/banner");
      $bannerModel = new Banner();
      $bannerModel->get();
      $this->_data["banners"] = $bannerModel->all_to_array();
    }
    
    private function loadWelcomeMessage(){
      $this->load->model(CMSPREFIX."home/bienvenida");
      $bienvenidaModel = new Bienvenida();
      $bienvenidaModel->limit(1);
      $bienvenidaModel->get();
      $this->_data["bienvenida"] = $bienvenidaModel->to_array();
    }
    
    private function loadHighlights(){
      $this->load->model(CMSPREFIX."home/destacado");
      $destacadoModel = new Destacado();
      $destacadoModel->get();
      $this->_data["destacados"] = $destacadoModel->all_to_array();
    }

    // ----------------------------------------------------------------------
   
}
