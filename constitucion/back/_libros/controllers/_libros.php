<?php

/**
 * @author Felipe Camacho
 */
class _libros extends Back_Controller {

  protected $admin_area = true;
  public $model = 'libros';
  public $name = "libros";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Libros";
    $data['pag'] = 1;
    $data['pag_content'] = $this->libros();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function libros() {
    $data['path_delete'] = cms_url($this->name . '/delete');
    $data['path_add'] = cms_url($this->name . '/form_add');
    $data['path_edit'] = cms_url($this->name . '/form_edit');
    $data['path_list'] = cms_url($this->name . '/lista');
    $data['breadcrum'] = array("Libros");
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

    $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "450px x 200px", false, true, "span3");

    $data['form_content'] .= $this->input($obj->cms_titulo, "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");

    $data['form_content'] .= $this->input($obj->cms_autor, "cms_autor", $obj->get_rule("cms_autor", "max_length"), "Autor", "Maximo " . $obj->get_rule("cms_autor", "max_length") . " caracteres", $obj->is_rule("cms_autor", "required"), "span3");

    $data['form_content'] .= $this->inputDate($obj->cms_fecha, "cms_fecha", "Fecha", "Ingrese una fecha valida", $obj->is_rule("cms_fecha", "required"), "span2", $formato = "yyyy-mm-dd");

    $data['form_content'] .= $this->input_money($obj->cms_preciopdf, "cms_preciopdf", "$", "Precio PDF", "", $obj->is_rule("cms_preciopdf", "required"), "span3");

    $data['form_content'] .= $this->input_money($obj->cms_precioimpreso, "cms_precioimpreso", "$", "Precio Impreso", "", $obj->is_rule("cms_precioimpreso", "required"), "span3");

    $data['form_content'] .= $this->input_money($obj->cms_precioenvio, "cms_precioenvio", "$", "Precio Envío", "", $obj->is_rule("cms_precioenvio", "required"), "span3");

    $data['form_content'] .= $this->text($obj->cms_descripcion, "cms_descripcion", "Breve reseña", "", $obj->get_rule("cms_descripcion", "required"), "span8", false, false);

    $data['direct_form'] = $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function form_add() {
    $obj = new $this->model();

    $data['form_content'] = "";

    $data['form_content'] .= $this->inputHidden("", "id", 11);

    $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "450px x 200px", false, true, "span3");

    $data['form_content'] .= $this->input("", "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");

    $data['form_content'] .= $this->input("", "cms_autor", $obj->get_rule("cms_autor", "max_length"), "Autor", "Maximo " . $obj->get_rule("cms_autor", "max_length") . " caracteres", $obj->is_rule("cms_autor", "required"), "span3");

    $data['form_content'] .= $this->inputDate("", "cms_fecha", "Fecha", "Ingrese una fecha valida", $obj->is_rule("cms_fecha", "required"), "span2", $formato = "yyyy-mm-dd");

    $data['form_content'] .= $this->input_money("", "cms_preciopdf", "$", "Precio PDF", "", $obj->is_rule("cms_preciopdf", "required"), "span3");

    $data['form_content'] .= $this->input_money("", "cms_precioimpreso", "$", "Precio Impreso", "", $obj->is_rule("cms_precioimpreso", "required"), "span3");

    $data['form_content'] .= $this->input_money("", "cms_precioenvio", "$", "Precio Envío", "", $obj->is_rule("cms_precioenvio", "required"), "span3");

    $data['form_content'] .= $this->text("", "cms_descripcion", "Breve reseña", "", $obj->get_rule("cms_descripcion", "required"), "span8", false, false);

    $data['direct_form'] = $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->join_related('imagen')->get();
    $data['direct_form'] = $this->name . '/delete';
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
    redirect(cms_url($this->name));
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
