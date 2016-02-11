<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Servicios extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//        $this->set_title('Bienvenidos a ' . SITENAME, true);
      $this->loadServicios();
      return $this->build();
    }
    
    public function info(){
        return $this->build("info");
    }
    
    private function loadServicios(){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get();
      $this->_data["servicios"] = $modelServicio->all_to_array();
    }
    
    public function ver($id){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get_by_id($id);
      $this->_data["servicio"] = $modelServicio->to_array();
      $this->build("servicio_detalle");
    }

    // ----------------------------------------------------------------------
   
}
