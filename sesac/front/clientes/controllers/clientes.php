<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Clientes extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//        $this->set_title('Bienvenidos a ' . SITENAME, true);
      $this->loadClientes();
      return $this->build();
    }
    
    private function loadClientes(){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      $modelCliente->get();
      $this->_data["clientes"] = $modelCliente->all_to_array();
    }
    
    public function ver($id){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente($id);
      $this->_data["cliente"] = $modelCliente->to_array();
      $this->build("cliente_detalle");
    }

    // ----------------------------------------------------------------------
   
}
