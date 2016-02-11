<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Proyectos extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      $this->loadProjects();
      $this->loadClientes();
      $this->loadServicios();
      $this->build();
    }
    
    private function loadProjects(){
      $this->load->model(CMSPREFIX."home/proyecto");
      $modelProyecto = new Proyecto();
      $modelProyecto->get();
      $this->_data["proyectos"] = $modelProyecto->all_to_array();
    }
    
    private function loadClientes(){
      $this->load->model(CMSPREFIX."home/cliente");
      $modelCliente = new Cliente();
      $modelCliente->get();
      $this->_data["clientes"] = $modelCliente->all_to_array();
    }
  
    private function loadServicios(){
      $this->load->model(CMSPREFIX."home/servicio");
      $modelServicio = new Servicio();
      $modelServicio->get();
      $this->_data["servicios"] = $modelServicio->all_to_array();
    }
    
    public function saveNewProject(){
      $this->load->model(CMSPREFIX."home/proyecto");
      $modelProyecto = new Proyecto();
      
      $modelProyecto->titulo = $this->_post("titulo");
      $modelProyecto->intro = $this->_post("intro");
      $modelProyecto->texto = $this->_post("texto");
      $modelProyecto->cms_servicio_id = $this->_post("servicio");
      $modelProyecto->cms_cliente_id = $this->_post("cliente");
      
      if($modelProyecto->save_as_new()){
        $this->session->set_flashdata('respuesta', 'Proyecto creado correctamente');
        redirect(cms_url("proyectos/saveNewProject_step2/".$modelProyecto->id), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error al crear el proyecto');
        redirect(cms_url("proyectos"),"refresh");
      }
    }
    
    public function saveNewProject_step2($idProject){
      $this->build("galleryEditor");
    }
        
    public function edit($id){
      $this->load->model(CMSPREFIX."home/proyecto");
      $modelProyecto = new Proyecto($id);
      $this->_data["proyecto"] = $modelProyecto->to_array();
      
      $this->loadClientes();
      $this->loadServicios();
      
      $this->build("proyecto_detalle");
    }
    
    public function delete($id){
      $this->load->model(CMSPREFIX."home/proyecto");
      $modelProyecto = new Proyecto($id);
      if($this->deleteGalleryFromProject($modelProyecto->id)){
        if($modelProyecto->delete()){
          $this->session->set_flashdata('respuesta', 'Proyecto eliminado correctamente');
        }else{
          $this->session->set_flashdata('respuesta', 'Error, no se elimino el proyecto');
        }
      }else{
        $this->session->set_flashdata('respuesta', 'Error, no se pudo eliminar la galería asociada al proyecto, no hubo cambios');
      }
      redirect(cms_url("proyectos"), "refresh");
    }
    
    public function deleteGalleryFromProject($idProject){
      $this->load->model(CMSPREFIX."home/proyecto_galeria");
      $modelGaleria = new Proyecto_galeria();
      $modelGaleria->where("cms_proyecto_id",$idProject)->get();
      if($modelGaleria->count()>0){
        return $modelGaleria->delete();
      }else{
        return true;
      }
    }
    
    public function editProjectGallery($id){
      $this->build("galleryEditor");
    }
    
    public function editGallery($id){
      
    }
    
    public function deleteGallery($id){
      
    }
// ----------------------------------------------------------------------
}
