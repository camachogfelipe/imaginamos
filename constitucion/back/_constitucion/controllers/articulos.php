<?php

/**
 * @author Felipe Camacho
 */
class articulos extends Back_Controller {

  protected $admin_area = true;
  public $model = 'constitucion';
  public $name = "articulos";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Artículos de la constitución";
    $data['pag'] = 1;
    $data['pag_content'] = $this->articulos();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function articulos() {
    $data['path_delete'] = cms_url("constitucion/" . $this->name . '/delete');
    $data['path_add'] = cms_url("constitucion/" . $this->name . '/form_add');
    $data['path_edit'] = cms_url("constitucion/" . $this->name . '/form_edit');
    $data['path_list'] = cms_url("constitucion/" . $this->name . '/lista');
    $data['breadcrum'] = array("Constitución", "Artículos");
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    $obj = new $this->model();
    $obj->get_by_id($this->_post('id'));
    $obj1 = new \titulos_constitucion();
    $obj1->get();
    foreach ($obj1->all as $titulo) :
      $datatit[] = array('id' => $titulo->id, 'name' => $titulo->cms_titulo);
    endforeach;
    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);

    $data['form_content'] .= $this->input($obj->cms_articulo, "cms_articulo", $obj->get_rule("cms_articulo", "max_length"), "Artículo", "Maximo " . $obj->get_rule("cms_articulo", "max_length") . " caracteres", $obj->is_rule("cms_articulo", "required"), "span3");

    $data['form_content'] .= $this->combox($obj->titulos_constitucion_id, $datatit, "titulos_constitucion_id", "Título al que pertenece", "Seleccione el título", $obj->is_rule("cms_articulo", "required"));

    $data['form_content'] .= $this->text($obj->cms_texto, "cms_texto", "Texto", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);

    $data['direct_form'] = "constitucion/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function form_add() {
    $obj = new $this->model();
    $obj1 = new \titulos_constitucion();
    $obj1->get();
    foreach ($obj1->all as $titulo) :
      $datatit[] = array('id' => $titulo->id, 'name' => $titulo->cms_titulo);
    endforeach;
    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden("", "id", 11);

    $data['form_content'] .= $this->input("", "cms_articulo", $obj->get_rule("cms_articulo", "max_length"), "Artículo", "Maximo " . $obj->get_rule("cms_articulo", "max_length") . " caracteres", $obj->is_rule("cms_articulo", "required"), "span3");

    $data['form_content'] .= $this->combox("", $datatit, "titulos_constitucion_id", "Título al que pertenece", "Seleccione el título", $obj->is_rule("cms_articulo", "required"));

    $data['form_content'] .= $this->text("", "cms_texto", "Texto", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);

    $data['direct_form'] = "constitucion/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->join_related("titulos_constitucion")->get();
    $data['direct_form'] = "constitucion/" . $this->name . '/delete';
    return $this->buildajax($this->name . '/lista', $data);
  }

  public function add() {
    $error = false;
    $msg = "";
    $obj = new $this->model();
    $obj->get_by_id($this->_post('id'));
    if (!$obj->exists())
      $obj->id = "";
    $obj->cms_texto = '<p id="parrafo_1">' . substr($obj->cms_texto, 4);
    $this->loadVar($obj);
    if (!$obj->save()) {
      $error = true;
      $msg = $obj->error->string;
      //$this->deleteImg($obj->imagen_id); 
    }
    if ($error)
      $this->set_alert_session("Error guardando datos," . $msg, 'error');
    else
      $this->set_alert_session("Datos Guardados con exito...!", 'info');
    redirect(cms_url("constitucion/" . $this->name));
  }

  public function delete() {
    $error = false;
    $obj = new $this->model();
    $obj->get_by_id($this->_post('value'));
    $msg = "";
    if ($obj->exists()) {
      //$id_file = $obj->imagen_id;
      if (!$obj->delete()) {
        $error = true;
        $msg = $obj->error->string;
      }
      //$this->deleteImg($id_file);
    } else {
      $error = true;
      $msg = "No existe item...!";
    }
    if ($error)
      $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
    else {
      $this->set_alert("Datos eliminados con éxito...!", 'info');
    }
    return $this->render_json(!$error);
  }

}
