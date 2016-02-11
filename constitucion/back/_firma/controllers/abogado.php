<?php

/**
 * @author Felipe Camacho
 */
class abogado extends Back_Controller {

  protected $admin_area = true;
  public $model = 'abogados';
  public $name = "abogado";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Abogados de la firma";
    $data['pag'] = 1;
			$data['breadcrum'] = array("Firma", "Abogados de la firma");
    $data['pag_content'] = $this->abogados();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function abogados() {
    $data['path_delete'] = cms_url("firma/" . $this->name . '/delete');
    $data['path_add'] = cms_url("firma/" . $this->name . '/form_add');
    $data['path_edit'] = cms_url("firma/" . $this->name . '/form_edit');
    $data['path_list'] = cms_url("firma/" . $this->name . '/lista');
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    $obj = new $this->model();
    $obj->join_related('imagen')->get_by_id($this->_post('id'));
    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);

    $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "100px x 100px", false, true, "span3");

    $data['form_content'] .= $this->input($obj->cms_nombre, "cms_nombre", $obj->get_rule("cms_nombre", "max_length"), "Nombre del abogado", "Maximo " . $obj->get_rule("cms_nombre", "max_length") . " caracteres", $obj->is_rule("cms_nombre", "required"), "span3");

    $data['form_content'] .= $this->input($obj->cms_especialidad, "cms_especialidad", $obj->get_rule("cms_especialidad", "max_length"), "Especialidad del abogado", "Maximo " . $obj->get_rule("cms_especialidad", "max_length") . " caracteres", $obj->is_rule("cms_especialidad", "required"), "span3");

    $data['form_content'] .= $this->text($obj->cms_descripcion, "cms_descripcion", "Breve reseña", "", $obj->get_rule("cms_descripcion", "required"), "span8", true, false);

    $data['direct_form'] = "firma/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function form_add() {
    $obj = new $this->model();
    $obj->join_related("imagen")->get();
    $data['form_content'] = "";

    $data['form_content'] .= $this->imagen(NULL, NULL, "Imagen", "142px x 140px", false, true, "span3");

    $data['form_content'] .= $this->input("", "cms_nombre", $obj->get_rule("cms_nombre", "max_length"), "Nombre del abogado", "Maximo " . $obj->get_rule("cms_nombre", "max_length") . " caracteres", $obj->is_rule("cms_nombre", "required"), "span3");

    $data['form_content'] .= $this->input("", "cms_especialidad", $obj->get_rule("cms_especialidad", "max_length"), "Especialidad del abogado", "Maximo " . $obj->get_rule("cms_especialidad", "max_length") . " caracteres", $obj->is_rule("cms_especialidad", "required"), "span3");

    $data['form_content'] .= $this->text("", "cms_descripcion", "Breve reseña", "", $obj->get_rule("cms_descripcion", "required"), "span8", true, false);

    $data['direct_form'] = "firma/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->join_related("imagen")->get();
    $data['direct_form'] = "firma/" . $this->name . '/delete';
    return $this->buildajax($this->name . '/lista', $data);
  }

  public function add() {
    $error = false;
    $msg = "";
    $obj = new $this->model();
    $obj->get_by_id($this->_post('id'));
    if (!$obj->exists())
      $obj->id = "";
    $this->loadVar($obj);
    if (!$obj->save()) {
      $error = true;
      $msg = $obj->error->string;
      $this->deleteImg($obj->imagen_id);
    }
    if ($error)
      $this->set_alert_session("Error guardando datos," . $msg, 'error');
    else
      $this->set_alert_session("Datos Guardados con exito...!", 'info');
    redirect(cms_url("firma/" . $this->name));
  }

  public function delete() {
    $error = false;
    $obj = new $this->model();
    $obj->get_by_id($this->_post('value'));
    $msg = "";
    if ($obj->exists()) {
      $id_file = $obj->imagen_id;
      if (!$obj->delete()) {
        $error = true;
        $msg = $obj->error->string;
      }
      $this->deleteImg($id_file);
    } else {
      $error = true;
      $msg = "No existe item...!";
    }
    if ($error)
      $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
    else {
      $this->set_alert_session("Datos eliminados con éxito...!", 'info');
    }
    return $this->render_json(!$error);
  }

}
