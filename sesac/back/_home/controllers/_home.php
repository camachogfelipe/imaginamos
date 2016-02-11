<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class _Home extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      $this->banner();
    }
    
    public function banner(){
      $this->loadBanners("all");
      $this->build("banner");
    }
    
    public function parrafo_bienvenida(){
      $this->loadBienvenida();
      $this->build("parrafo_bienvenida");
    }
    
    public function destacados(){
      $this->loadDestacados();
      $this->build("destacados");
    }
    
    public function footer(){
      $this->loadFooter();
      $this->loadFooterEmails();
      $this->build("footer");
    }
    
    
    /* OPERACIONES CON EL BANNER */
    public function loadBanners($idBanner=null){
      $this->load->model(CMSPREFIX."home/banner");
      
      if($idBanner != null && $idBanner == "all"){
        $bannerModel = new Banner();
        $bannerModel->get();
        $this->_data["banners"] = $bannerModel->all_to_array();
      }else{
        $bannerModel = new Banner($idBanner);
        $this->_data["banner"] = $bannerModel->to_array();
        $this->build("banner_detalle");
      }
    }
    
    public function saveNewBanner(){
      $this->load->model(CMSPREFIX."home/banner");
      $bannerModel = new Banner();
      
      if($this->do_upload("imagenFondo", "banner", 2000, 508)){
        $bannerModel->imagenFondo = assets_img("banner")."/".$this->operation_results["file_name"];
      }else{
        $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
        redirect(cms_url("home/banner"), "refresh");
      }
      
      if($this->do_upload("imagenFrente", "banner", 250, 508)){
        $bannerModel->imagenFrente = assets_img("banner")."/".$this->operation_results["file_name"];
      }else{
        $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
        redirect(cms_url("home/banner"), "refresh");
      }
      
      $bannerModel->titulo1_blanco = $_POST["titulo1_blanco"];
      $bannerModel->titulo2_blanco = $_POST["titulo2_blanco"];
      $bannerModel->titulo3_blanco = $_POST["titulo3_blanco"];
      $bannerModel->titulo1_amarillo = $_POST["titulo1_amarillo"];
      $bannerModel->titulo2_amarillo = $_POST["titulo2_amarillo"];
      
      if($bannerModel->save_as_new()){
        $this->session->set_flashdata('respuesta', 'Banner agregado correctamente');
      }else{
        $this->session->set_flashdata('respuesta', 'Error: No se logro crear el banner');
      }
      
      redirect(cms_url("home/banner"), "refresh");
    }
    
    public function saveChangesBanner(){
      $this->load->model(CMSPREFIX."home/banner");
      $bannerModel = new Banner();
      $newValues = array();

      if($_FILES["imagenFondo"]["name"]){
        if($this->do_upload("imagenFondo", "banner", 2000, 508)){
          $newValues["imagenFondo"] = assets_img("banner")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect(cms_url("home/banner"), "refresh");
        }
      }
      if($_FILES["imagenFrente"]["name"]){
        if($this->do_upload("imagenFrente", "banner", 250, 508)){
          $newValues["imagenFrente"] = assets_img("banner")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect(cms_url("home/banner"), "refresh");
        }
      }

      $newValues["titulo1_blanco"] = $_POST["titulo1_blanco"];
      $newValues["titulo2_blanco"] = $_POST["titulo2_blanco"];
      $newValues["titulo3_blanco"] = $_POST["titulo3_blanco"];
      $newValues["titulo1_amarillo"] = $_POST["titulo1_amarillo"];
      $newValues["titulo2_amarillo"] = $_POST["titulo2_amarillo"];

      if ($bannerModel->where("id", $this->_post("idBanner"))->update($newValues)){
        $this->session->set_flashdata('respuesta', 'Banner actualizado correctamente');
        redirect(cms_url("home/banner"), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error al editar el banner');
        redirect(cms_url("home/banner"), "refresh");
      }
    }
    
    public function deleteBanner($id){
      $this->load->model(CMSPREFIX."home/banner");
      $bannerModel = new Banner($id);
      if($bannerModel->delete()){
        $this->session->set_flashdata('respuesta', 'Banner eliminado correctamente');
        redirect(cms_url("home/banner"), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error: No se logro elminar el banner');
        redirect(cms_url("home/banner"), "refresh");
      }
    }
    /* FIN DE OPERACIONES CON EL BANNER */
    
    
    /* OPERACIONES CON EL TEXTO DE BIENVENIDA */
    private function loadBienvenida(){
      $idBienvenida = 1;
      $this->load->model(CMSPREFIX."home/bienvenida");
      $modelBienvenida = new Bienvenida($idBienvenida);
      $this->_data["bienvenida"] = $modelBienvenida->to_array();
    }
    
    public function saveBienvenida(){
      $idBienvenida = 1;
      $this->load->model(CMSPREFIX."home/bienvenida");
      $modelBienvenida = new Bienvenida();
      
      $newValues = array();
      $newValues["titulo"] = $this->input->post("titulo");
      $newValues["texto"] = $this->input->post("texto");
      
      if($modelBienvenida->where("id",  $idBienvenida)->update($newValues)){
        $this->session->set_flashdata('respuesta', 'Cambios guardados correctamente');
        redirect(cms_url("home/parrafo_bienvenida"), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error: no sr pudieron guardar los cambios');
        redirect(cms_url("home/parrafo_bienvenida"), "refresh");
      }
    }
    /* FIN DE OPERACIONES CON EL TEXTO DE BIENVENIDA */
  
    /* OPERACIONES CON DESTACADOS */
    private function loadDestacados(){
      $this->load->model(CMSPREFIX."home/destacado");
      $destacadoModel = new Destacado();
      $destacadoModel->get();
      $this->_data["destacados"] = $destacadoModel->all_to_array();
    }
    
    public function loadDestacado($id){
      $this->load->model(CMSPREFIX."home/destacado");
      $destacadoModel = new Destacado();
      $destacadoModel->get_by_id($id);
      $this->_data["destacado"] = $destacadoModel->to_array();
      $this->build("destacados_detalle");
    }
    
    public function deleteDestacado($id){
      $this->load->model(CMSPREFIX."home/destacado");
      $destacadoModel = new Destacado();
      $destacadoModel->get_by_id($id);
      if($destacadoModel->delete()){
        $this->session->set_flashdata('respuesta', 'Destacado eliminado correctamente');
        redirect(cms_url("home/destacados"), "refresh");
      }else{
        $this->session->set_flashdata('respuesta', 'Error: no se pudo eliminar el destacado');
        redirect(cms_url("home/destacados"), "refresh");
      }
    }
    
    public function saveDestacado(){
      $this->load->model(CMSPREFIX."home/destacado");
      $destacadoModel = new Destacado();
      $newValues = array();
      
      if($_FILES["imagen"]["name"]){
        if($this->do_upload("imagen", "destacados", 272, 150)){
          $newValues["imagen"] = assets_img("destacados")."/".$this->operation_results["file_name"];
        }else{
          $this->session->set_flashdata('respuesta', "Error al subir la imagen : ".$this->operation_results);
          redirect(cms_url("home/destacados"), "refresh");
        }
      }
      
      $newValues["titulo"] = $this->_post("titulo");
      $newValues["texto"] = $this->_post("texto");
      $newValues["enlace"] = $this->_post("enlace");
      $newValues["target"] = $this->_post("target");
      
      if($destacadoModel->where("id", $this->_post("idDestacado"))->update($newValues)){
        $this->session->set_flashdata('respuesta', "Destacado guardado correctamente");
      }else{
        $this->session->set_flashdata('respuesta', "Error al guardar el destacado");
      }
      
      redirect(cms_url("home/destacados"), "refresh");
    }
    /* FIN DE OPERACIONES CON DESTACADOS */
    
    /* OPERACIONES CON EL FOOTER */
    private function loadFooter(){
      $this->load->model(CMSPREFIX."home/footer");
      $footerModel = new Footer(1);
      $this->_data["footer"] = $footerModel->to_array();
      $this->_data["map"] = $this->loadGoogleMaps($footerModel->gmapsX, $footerModel->gmapsY);
    }
    
    public function saveFooter(){
      $this->load->model(CMSPREFIX."home/footer");
      $footerModel = new Footer();
      $newValues = array();
      $newValues["telefono"] = $this->_post("telefono");
      $newValues["direccion"] = $this->_post("direccion");
      $newValues["edificio"] = $this->_post("edificio");
      $newValues["gmapsX"] = $this->_post("CoordenadaA");
      $newValues["gmapsY"] = $this->_post("CoordenadaB");
      
      if($footerModel->where("id",1)->update($newValues)){
        $this->session->set_flashdata('respuesta', 'Cambios guardados correctamente');  
      }else{
        $this->session->set_flashdata('respuesta', 'Error al guardar la información básica de contacto');
      }
      redirect(cms_url("home/footer"), "refresh");
    }
    
    private function loadFooterEmails(){
      $this->load->model(CMSPREFIX."home/footer_email");
      $footerEmailmodel = new Footer_email();
      $footerEmailmodel->where("cms_footer_id", 1);
      $footerEmailmodel->get();
      $this->_data["emails"] = $footerEmailmodel->all_to_array();
    }
    
    public function loadEmail($id){
      $this->load->model(CMSPREFIX."home/footer_email");
      $footerEmailmodel = new Footer_email($id);
      $this->_data["email"] = $footerEmailmodel->to_array();
      $this->build("footer_detalle");
    }
    
    public function deleteEmail($id){
      $this->load->model(CMSPREFIX."home/footer_email");
      $footerEmailmodel = new Footer_email($id);
      
      if($footerEmailmodel->delete()){
        $this->session->set_flashdata('respuesta', 'Email borrado correctamente');  
      }else{
        $this->session->set_flashdata('respuesta', 'Error al borrar el email seleccionado');   
      }
      redirect(cms_url("home/footer"), "refresh");
    }
    
    public function saveEmail(){
      $this->load->model(CMSPREFIX."home/footer_email");
      $footerEmailmodel = new Footer_email();
      $footerEmailmodel->nombre = $this->_post("nombre");
      $footerEmailmodel->email = $this->_post("email");
      $footerEmailmodel->cms_footer_id = 1;
      if($footerEmailmodel->save_as_new()){
        $this->session->set_flashdata('respuesta', 'Email guardado correctamente');  
      }else{
        $this->session->set_flashdata('respuesta', 'Error al guardar el nuevo email');  
      }
      redirect(cms_url("home/footer"), "refresh");
    }
    
    public function saveEmailChanges(){
      $this->load->model(CMSPREFIX."home/footer_email");
      $footerEmailmodel = new Footer_email();
      $newValues = array();
      $newValues["nombre"] = $this->_post("nombre");
      $newValues["email"] = $this->_post("email");
      if($footerEmailmodel->where("id", $this->_post("idEmail"))->update($newValues)){
        $this->session->set_flashdata('respuesta', 'Cambios guardados correctamente');  
      }else{
        $this->session->set_flashdata('respuesta', 'Error al guardar los cambios');  
      }
      redirect(cms_url("home/footer"), "refresh");
    }
    
    /* FIN DE OPERACIONES CON EL FOOTER */
    
    private function loadGoogleMaps($x, $y){
        $this->load->library('googlemaps');
        $config['center'] = $x.','.$y;
        $config['zoom'] = 'auto';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $x.','.$y;
        $marker['draggable'] = true;
        $marker['ondragend'] = '$(\'#CoordenadaA\').attr(\'value\', event.latLng.lat()); $(\'#CoordenadaB\').attr(\'value\', event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        return $this->googlemaps->create_map();
    }

// ----------------------------------------------------------------------
}
