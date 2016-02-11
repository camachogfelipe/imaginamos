<?php

/**
 * @author Felipe Camacho
 */
class texto extends Back_Controller {

  protected $admin_area = true;
  public $model = 'blog';
  public $name = "texto";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Blog";
    $data['pag'] = 1;
    $data['pag_content'] = $this->blog();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function blog() {
    $data['path_delete'] = cms_url("blog/" . $this->name . '/delete');
    $data['path_add'] = cms_url("blog/" . $this->name . '/form_add');
    $data['path_edit'] = cms_url("blog/" . $this->name . '/form_edit');
    $data['path_list'] = cms_url("blog/" . $this->name . '/lista');
    $data['breadcrum'] = array("Blog");
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    $obj = new $this->model();
    $obj->join_related('imagen')->get_by_id($this->_post('id'));
    $datacat = $obj->get_categorias_blog_list("cms_categoria");

    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);

    $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "700px x 230px", false, true, "span3");

    $data['form_content'] .= $this->combox($obj->categorias_blog_id, $datacat, "categorias_blog_id", "Demanda", "Seleccione la categoría", $obj->is_rule("categorias_blog_id", "required"), "span3");

    $data['form_content'] .= $this->input($obj->cms_titulo, "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");

    $data['form_content'] .= $this->input($obj->cms_subitulo, "cms_subtitulo", $obj->get_rule("cms_subtitulo", "max_length"), "Sub Título", "Maximo " . $obj->get_rule("cms_subtitulo", "max_length") . " caracteres", $obj->is_rule("cms_subtitulo", "required"), "span3");

    if ($obj->cms_destacado == 1)
      $checked = true;
    else
      $checked = false;
    $data['form_content'] .= $this->input("1", "cms_destacado", $obj->get_rule("cms_destacado", "max_length"), "Si", "Destacado", $obj->get_rule("cms_destacado", "required"), "span3", "span1", "radio", $checked);

    if ($obj->cms_destacado == 0)
      $checked = true;
    else
      $checked = false;
    $data['form_content'] .= $this->input("0", "cms_destacado", $obj->get_rule("cms_destacado", "max_length"), "No", "Destacado", $obj->get_rule("cms_destacado", "required"), "span3", "span1", "radio", $checked);

    $data['form_content'] .= $this->inputDate($obj->cms_fecha, "cms_fecha", "Fecha", "Ingrese una fecha valida", $obj->is_rule("cms_fecha", "required"), "span2", $formato = "yyyy-mm-dd");

    $data['form_content'] .= $this->text($obj->cms_texto, "cms_texto", "Reseña", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);

    $data['direct_form'] = "blog/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function form_add() {
    $obj = new $this->model();
    $obj->get_by_id($this->_post('id'));
    $datacat = $obj->get_categorias_blog_list("cms_categoria");

    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);

    $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "700px x 230px", false, true, "span3");

    $data['form_content'] .= $this->combox("", $datacat, "categorias_blog_id", "Demanda", "Seleccione la categoría", $obj->is_rule("categorias_blog_id", "required"), "span3");

    $data['form_content'] .= $this->input("", "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");

    $data['form_content'] .= $this->input("", "cms_subtitulo", $obj->get_rule("cms_subtitulo", "max_length"), "Sub Título", "Maximo " . $obj->get_rule("cms_subtitulo", "max_length") . " caracteres", $obj->is_rule("cms_subtitulo", "required"), "span3");

    $data['form_content'] .= $this->input("1", "cms_destacado", $obj->get_rule("cms_destacado", "max_length"), "Si", "Destacado", $obj->get_rule("cms_destacado", "required"), "span3", "span1", "radio", false);

    $data['form_content'] .= $this->input("0", "cms_destacado", $obj->get_rule("cms_destacado", "max_length"), "No", "Destacado", $obj->get_rule("cms_destacado", "required"), "span3", "span1", "radio", true);

    $data['form_content'] .= $this->inputDate("", "cms_fecha", "Fecha", "Ingrese una fecha valida", $obj->is_rule("cms_fecha", "required"), "span2", $formato = "yyyy-mm-dd");

    $data['form_content'] .= $this->text("", "cms_texto", "Reseña", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);

    $data['direct_form'] = "blog/" . $this->name . '/add';

    return $this->buildajax($this->name . '/form', $data);
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->join_related('categorias_blog')->join_related('imagen')->get();
    $data['direct_form'] = "blog/" . $this->name . '/delete';
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
    redirect(cms_url("blog/" . $this->name));
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
      $this->set_alert("Datos eliminados con éxito...!", 'info');
    }
    return $this->render_json(!$error);
  }

}
