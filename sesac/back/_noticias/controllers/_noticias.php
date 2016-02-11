<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Noticias extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      redirect(cms_url("noticias/pagina/1"), "refresh");
    }
    
    public function pagina($pagina){
      $this->load->model(CMSPREFIX."home/noticia");
      $modelNoticia = new Noticia();
      $modelNoticia->order_by("fecha", "DESC");
      $resultados_por_pagina = 12;
      
      if($pagina == 1){
        $modelNoticia->get($resultados_por_pagina , 0);
      }else{
        $modelNoticia->get($resultados_por_pagina , (($pagina - 1) * $resultados_por_pagina));
      }
            
      $this->_data["pagina"] = $pagina;
      $this->_data["noticias"] = $modelNoticia->all_to_array();
      $this->getPaginador();
      $this->build();
    }
    
    public function loadGalleryFromNotice($idNotice){
      $this->load->model(CMSPREFIX."home/noticia_galeria");
      $modelGaleria = new Noticia_Galeria();
      $modelGaleria->where("cms_noticia_id",$idNotice);
      $modelGaleria->get();
      $this->_data["imagenes"] = $modelGaleria->all_to_array();
    }
    
    public function deleteGalleryFromNotice($idNotice){
      $this->load->model(CMSPREFIX."home/noticia_galeria");
      $modelGaleria = new Noticia_Galeria();
      $modelGaleria->where("cms_noticia_id",$idNotice);
      
      if($modelGaleria->count()>0){
        return $modelGaleria->delete();
      }else{
        return true;
      }
    }
    
    public function editGallery($id){
      $this->load->model(CMSPREFIX."home/noticia_galeria");
      $modelGaleria = new Noticia_Galeria($id);
      $this->_data["imagen"] = $modelGaleria->to_array();
      $this->build("imagen_detalle");
    }

    public function edit($id){
      $this->load->model(CMSPREFIX."home/noticia");
      $modeloNoticia = new Noticia($id);
      $this->_data["noticia"] = $modeloNoticia->to_array();
      $this->loadGalleryFromNotice($id);
      $this->build("noticia_detalle");
    }
    
    private function getPaginador(){
      $this->load->model(CMSPREFIX."home/noticia");
      $modeloNoticia = new Noticia();
      $numero_noticias = $modeloNoticia->count();
      $this->_data["paginas"] = ceil($numero_noticias/12);
    }
    
    public function delete($id){
      if($this->deleteGalleryFromNotice($id)){ 
        $this->load->model(CMSPREFIX."home/noticia");
        $modeloNoticia = new Noticia($id);
        if($modeloNoticia->delete()){
          $this->session->set_flashdata('respuesta', 'Noticia eliminada correctamente');
        }else{
          $this->session->set_flashdata('respuesta', 'Error al eliminar la noticia, pero se borraron las imágenes asociadas');
        }
      }else{
        $this->session->set_flashdata('respuesta', 'Error al eliminar las imágenes relacionadas con la noticia, no hubo cambios');
      }
      
      redirect($this->agent->referrer(), "refresh");
    }
    
    public function save(){
      $this->load->model(CMSPREFIX."home/noticia");
      $modelNoticia = new Noticia();
      $modelNoticia->titulo = $this->_post("intro");
      $modelNoticia->intro = $this->_post("intro");
      $modelNoticia->texto = $this->_post("texto");
      $modelNoticia->fecha = $this->_post("fecha");
      $modelNoticia->video_url = $this->_post("video_url");
      
      if($modelNoticia->save_as_new()){
        $this->session->set_flashdata('respuesta', 'Noticia guardada correctamente');
        redirect(cms_url("noticias/edit/".mysql_insert_id()), "refresh");
      }
    }
    
    public function saveChanges(){
      $this->load->model(CMSPREFIX."home/noticia");
      $modelNoticia = new Noticia();
      
      $newValues = array();
      $newValues["titulo"] = $this->_post("titulo");
      $newValues["intro"] = $this->_post("intro");
      $newValues["texto"] = $this->_post("texto");
      $newValues["fecha"] = $this->_post("fecha");
      $newValues["video_url"] = $this->_post("video_url");
      
      if($modelNoticia->where("id", $this->_post("idNoticia"))->update($newValues)){
        $this->session->set_flashdata('respuesta', 'Cambios guardados correctamente');
      }else{
        $this->session->set_flashdata('respuesta', 'Error al guardar los cambios');
      }
      redirect($this->agent->referrer());
    }
    
    public function saveNewImage(){
      $this->load->model(CMSPREFIX."home/noticia_galeria");
      $modeloGaleria = new Noticia_Galeria();
      $modeloGaleria->titulo = $this->_post("titulo");
      $modeloGaleria->texto = $this->_post("texto");
      $modeloGaleria->cms_noticia_id = $this->_post("idNoticia");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "noticias", 290, 136)){
          $modeloGaleria->imagen = assets_img("noticias")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect($this->agent->referrer(), "refresh");
        }
      }
      
      if($modeloGaleria->save_as_new()){
        $this->session->set_flashdata('respuesta', "La imagen se ha guardado correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al guardar la imagen, no hubo cambios");
      }
      
      redirect($this->agent->referrer(), "refresh");
    }
    
    public function saveImageChanges(){
      $this->load->model(CMSPREFIX."home/noticia_galeria");
      $modeloGaleria = new Noticia_Galeria();
      $newValues = array();
      $newValues["titulo"] = $this->_post("titulo");
      $newValues["texto"] = $this->_post("texto");
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "noticias", 290, 136)){
          $newValues["imagen"] = assets_img("noticias")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen ".$this->operation_results);
        }
      }
      
      if($modeloGaleria->where("id", $this->_post("idImagen"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Cambios guardados correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Cambios guardados correctamente");
      }
      
      $modeloGaleria->get_by_id($this->_post("idImagen"));
      
      redirect(cms_url("noticias/edit/".$modeloGaleria->cms_noticia_id), "refresh");
    }
// ----------------------------------------------------------------------
}
