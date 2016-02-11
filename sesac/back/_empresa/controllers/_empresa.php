<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Empresa extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->quienes_somos();
    }
    
    public function quienes_somos(){
      $this->loadArticle(1);
      $this->build("article");
    }
    
    public function equipo_de_trabajo(){
      $this->loadArticle(2);
      $this->build("article");
    }
    
    public function politicas_de_calidad(){
      $this->loadArticle(3);
      $this->build("article");
    }
    
    public function nuestro_compromiso(){
      $this->loadArticle(4);
      $this->build("article");
    }
    
    public function mision_vision_historia(){
      $this->loadArticle(5);
      $this->build("article");
    }
    
    public function certificaciones(){
      $this->loadCertifications();
      $this->build("certificaciones");
    }
    
    private function loadArticle($id){
      $this->load->model(CMSPREFIX."home/nuestra_compania");
      $modelNuestraCompania = new Nuestra_Compania($id);
      $this->_data["titulo"] = $modelNuestraCompania->get_by_id($id)->titulo;
      
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modelNuestraCompaniaArticulo = new Nuestra_Compania_Articulo($id);
      $this->_data["articulo"] = $modelNuestraCompaniaArticulo->to_array();
    }
    
    public function saveArticle(){      
      $newValues["texto"] = $this->_post("texto");
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "empresa", 290, 330)){
          $newValues["imagen"] = assets_img("empresa")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect($this->agent->referrer(), "refresh");
        }
      }
            
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modelNuestraCompaniaArticulo = new Nuestra_Compania_Articulo();
      
      if($modelNuestraCompaniaArticulo->where("id", $this->_post("idArticle"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Articulo guardado correctamente");
        redirect($this->agent->referrer(), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', "Error al guardar el artíulo");
        redirect($this->agent->referrer(), "refresh");
      }
    }
    
    private function loadCertifications(){
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modeloCertificacion = new Nuestra_Compania_Articulo();
      $modeloCertificacion->where("cms_nuestra_compania_id", 6);
      $modeloCertificacion->get();
      $this->_data["certificaciones"] = $modeloCertificacion->all_to_array();
    }
    
    public function saveNewCertification(){
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modeloCertificacion = new Nuestra_Compania_Articulo();
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "certificaciones", 80, 80)){
          $modeloCertificacion->imagen = assets_img("certificaciones")."/".$this->operation_results["file_name"];
          $modeloCertificacion->texto = $this->_post("texto");
          $modeloCertificacion->cms_nuestra_compania_id = 6;
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect($this->agent->referrer(), "refresh");
        }
      }
      
      if($modeloCertificacion->save_as_new()){
        $this->session->set_flashdata('respuesta', "Certificacion guardada correctamente");
      }  else {
        $this->session->set_flashdata('respuesta', "Error al guardar la certificacion");
      }
      redirect(cms_url("empresa/certificaciones"), "refresh");
    }
    
    public function saveChangesCertification(){
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modeloCertificacion = new Nuestra_Compania_Articulo();
      
      $newValues = array();
      $newValues["texto"] = $this->_post("texto");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "certificaciones", 80, 80)){
          $newValues["imagen"] = assets_img("certificaciones")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect($this->agent->referrer(), "refresh");
        }
      }
      
      if($modeloCertificacion->where("id", $this->_post("idCertificacion"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Certificacion actualizada correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al actualizar la certificacion");
      }
      redirect($this->agent->referrer(), "refresh");
    }
    
    public function loadCertification($id){
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modeloCertificacion = new Nuestra_Compania_Articulo($id);
      $this->_data["certificacion"] = $modeloCertificacion->to_array();
      $this->build("certificaciones_detalle");
    }
    
    public function deleteCertification($id){
      $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
      $modeloCertificacion = new Nuestra_Compania_Articulo($id);
      if($modeloCertificacion->delete()){
        $this->session->set_flashdata('respuesta', 'Certificacion eliminada correctamente');
        redirect(cms_url("empresa/certificaciones"), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error: No se logro elminar la certificacion');
        redirect(cms_url("empresa/certificaciones"), "refresh");
      }
    }

// ----------------------------------------------------------------------
}
