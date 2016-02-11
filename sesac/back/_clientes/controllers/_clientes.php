<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Clientes extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      $this->loadClientes();
      $this->build();
    }
    
    private function loadClientes(){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      $modelCliente->get();
      $this->_data["clientes"] = $modelCliente->all_to_array();
    }
    
    public function loadCliente($id){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      $modelCliente->get_by_id($id);
      $this->_data["cliente"] = $modelCliente->to_array();
      $this->build("cliente_detalle");
    }
    
    public function deleteCliente($id){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente($id);
      if($modelCliente->delete()){
        $this->session->set_flashdata('respuesta', 'Cliente eliminado correctamente');
      }else{
        $this->session->set_flashdata('respuesta', 'Error al eliminar el cliente seleccionado');
      }
      redirect(cms_url("clientes"), "refresh");
    }
    
    public function saveNewCliente(){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      
      $modelCliente->nombre = $this->_post("nombre");
      $modelCliente->texto = $this->_post("texto");
      $modelCliente->url = $this->_post("url");
      
      if($this->do_upload("imagen", "clientes", 100, 100)){
        $modelCliente->imagen = assets_img("clientes")."/".$this->operation_results["file_name"];
      }else{
        $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
        redirect(cms_url("clientes"), "refresh");
      }
      
      if($modelCliente->save_as_new()){
        $this->session->set_flashdata('respuesta', "Cliente guardado correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al guardar el nuevo cliente");
      }
      
      redirect(cms_url("clientes"), "refresh");
    }
    
    public function saveChangesCliente(){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      $newValues = array();
      
      $newValues["nombre"] = $this->_post("nombre");
      $newValues["texto"] = $this->_post("texto");
      $newValues["url"] = $this->_post("url");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "clientes", 100, 100)){
          $newValues["imagen"] = assets_img("clientes")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect(cms_url("clientes"), "refresh");
        }
      }
      
      if($modelCliente->where("id", $this->_post("idCliente"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Cambios guardados correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error, no se guardaron cambios");
      }
      redirect(cms_url("clientes"),"refresh");
    }
// ----------------------------------------------------------------------
}
