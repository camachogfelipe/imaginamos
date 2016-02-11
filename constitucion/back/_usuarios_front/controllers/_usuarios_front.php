<?php

/**
 * @author Felipe Camacho
 */
class _usuarios_front extends Back_Controller {

  protected $admin_area = true;
  public $model = 'usuariosfront';
  public $name = "usuarios_front";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Usuarios de la página";
    $data['pag'] = 1;
    $data['breadcrum'] = array("Usuarios de la página");
    $data['pag_content'] = $this->usuarios();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function usuarios() {
    $data['path_delete'] = cms_url($this->name . '/delete');
    $data['path_add'] = cms_url("blog/" . $this->name . '/form_add');
    $data['path_edit'] = cms_url("blog/" . $this->name . '/form_edit');
    $data['path_list'] = cms_url("blog/" . $this->name . '/lista');
    $data['breadcrum'] = array("blog", "Categorías");
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    
  }

  public function form_add() {
    
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->get();
    $data['direct_form'] = $this->name . '/activar/';
    $data['direct_form1'] = $this->name . '/desactivar/';
    return $this->buildajax($this->name . '/lista', $data);
  }

  public function activar() {
    $user = new $this->model();
    $id = $this->uri->segment(4);
    $success = $user->where("id", $id)->update('cms_activo', 1);
    $user->join_related("planes")->where("id", $id)->get();
    $planes = new planes_usuariosfront();
    $success = $planes->where("usuariosfront_id", $id)->where("planes_id", $user->planes_id)->update("activo", "Y");
    $this->index();
  }

  public function desactivar() {
    $user = new $this->model();
    $id = $this->uri->segment(4);
    $success = $user->where("id", $id)->update('cms_activo', 0);
    $user->join_related("planes")->where("id", $id)->get();
    $planes = new planes_usuariosfront();
    $success = $planes->where("usuariosfront_id", $id)->where("planes_id", $user->planes_id)->update("activo", "N");
    $this->index();
  }

  public function add() {
    
  }

  public function delete() {
    
  }

}
