<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Servicios extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      $this->loadServicios();
      $this->build();
    }
    
    private function loadServicios(){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get();
      $this->_data["servicios"] = $modelServicio->all_to_array();
    }
    
    public function loadServicio($id){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get_by_id($id);
      $this->_data["servicio"] = $modelServicio->to_array();
      $this->build("servicio_detalle");
    }
    
    public function deleteServicio($id){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get_by_id($id);
      
      if($modelServicio->delete()){
        $this->session->set_flashdata('respuesta', "Servicio eliminado correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al eliminar el servicio");
      }      
      redirect(cms_url("servicios"), "refresh");
    }
    
    public function saveNewService(){
      
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->titulo = $this->_post("titulo");
      $modelServicio->texto = $this->_post("texto");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "servicios", 85, 85)){
          $modelServicio->imagen = assets_img("servicios")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect(cms_url("servicios"), "refresh");
        }
      }
      
      if($modelServicio->save_as_new()){
        $this->session->set_flashdata('respuesta', "Servicio guardado correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al crear el nuevo servicio");
      }
      
      redirect(cms_url("servicios"), "refresh");
    }
    
    public function saveServiceChanges(){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      
      $newValues = array();
      $newValues["titulo"]= $this->_post("titulo");
      $newValues["texto"] = $this->_post("texto");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "servicios", 85, 85)){
          $newValues["imagen"] = assets_img("servicios")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect($this->agent->referrer(), "refresh");
        }
      }
      
      if($modelServicio->where("id", $this->_post("idServicio"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Cambios guardados correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al guardar los cambios");
      }
      
      redirect(cms_url("servicios"), "refresh");
    }
// ----------------------------------------------------------------------
}
