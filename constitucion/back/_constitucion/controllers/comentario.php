<?php

/**
 * @author Felipe Camacho
 */
class comentario extends Back_Controller {

  protected $admin_area = true;
  public $model = 'comentarios';
  public $name = "comentario";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    return $this->build('_index', $data);
  }

  public function texto() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Comentarios tipo texto";
    $data['tipo'] = "texto";
    $data['pag'] = 1;
		$data['breadcrum'] = array("Constitución", "Comentarios", "texto");
    $data['pag_content'] = $this->comentarios($data['tipo']);
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }
  
  public function image() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Comentarios tipo imagen";
    $data['tipo'] = "image";
    $data['pag'] = 1;
		$data['breadcrum'] = array("Constitución", "Comentarios", "imagen");
    $data['pag_content'] = $this->comentarios($data['tipo']);
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function comentarios($tipo = "texto") {
    $data['path_delete'] = cms_url("constitucion/comentario/delete/" . $tipo);
    $data['path_add'] = cms_url("constitucion/comentario/form_add/" . $tipo);
    $data['path_edit'] = cms_url("constitucion/comentario/form_edit/" . $tipo);
    $data['path_list'] = cms_url("constitucion/comentario/lista/" . $tipo);
    $data['mpag_content'] = $this->lista($tipo);
		$data['breadcrum'] = array("Constitución", "comentarios");
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    $obj = new $this->model();
    $tipo = $this->uri->segment(5);
		$id = $this->_post('id');
    switch($tipo) :
      case 'texto'          : $obj->get_by_id($id); $type = "T"; $imagen = false; break;
      case 'image'					:
				$imagen = true;
				$obj->join_related('imagen')->join_related("constitucion", array("cms_articulo"))->get_by_id($this->_post('id'));
				$type = "I";
				break;
      case 'concordancias'  : $obj->get_by_id($id); break;
    endswitch;//echo "<pre>";print_r($obj);echo "</pre>";
    $obj1 = new \constitucion();
    $obj1->get();
    $obj2 = new \comentarios();
    $obj2->get_by_id($obj->comentarios_id);
		$array = $obj1->all_to_array(array("id", "cms_articulo"));
    foreach($array as $articulo) :
      $datatit[] = array('id' => $articulo['id'], 'name' => $articulo['cms_articulo']);
    endforeach;
		$class = array(
			array("id" => "A", "name" => "Artículo"),
			array("id" => "I", "name" => "Inciso"),
			array("id" => "E", "name" => "Expresión")
		);
    
    $data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
		$data['form_content'] .= $this->inputHidden($type, "cms_tipo", 11);
		$data['form_content'] .= $this->combox($obj->constitucion_id, $datatit, "constitucion_id", "Artículo al que pertenece", "Seleccione el título", $obj2->is_rule("constitucion_id", "required"));
		$data['form_content'] .= $this->combox($obj->cms_clasificacion, $class, "cms_clasificacion", "Clasificación del comentario", "Seleccione la clasificación", $obj->is_rule("cms_clasificacion", "required"));
		$data['form_content'] .= $this->input($obj->cms_titulo, "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");
		$data['form_content'] .= $this->text($obj->cms_comentario, "cms_comentario", "Comentarios", "", $obj->get_rule("cms_comentario", "required"), "span8", true, false);
    
    switch($tipo) :
      case 'texto'          :
        break;
      case 'image'         :
				$data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "800px x 600px", false, true, "span3");
        break;
      case 'concordancias'  :
        break;
    endswitch;

    $data['direct_form'] = "constitucion/comentario/add/". $tipo;
    return $this->buildajax($this->name . '/form', $data);
  }

  public function form_add() {
    $obj = new $this->model();
    $tipo = $this->uri->segment(5);
    switch($tipo) :
      case 'texto'          : $type = "T"; break;
      case 'image'					: $type = "I"; break;
      case 'concordancias'  : break;
    endswitch;//echo "<pre>";print_r($obj);echo "</pre>";
    $obj1 = new \constitucion();
    $obj1->get();
    /*$obj2 = new \comentarios();
    $obj2->get_by_id($obj->comentarios_id);*/
    $array = $obj1->all_to_array(array("id", "cms_articulo"));
    foreach($array as $articulo) :
      $datatit[] = array('id' => $articulo['id'], 'name' => $articulo['cms_articulo']);
    endforeach;
		$class = array(
			array("id" => "A", "name" => "Artículo"),
			array("id" => "I", "name" => "Inciso"),
			array("id" => "E", "name" => "Expresión")
		);
    
    $data['form_content'] = "";
    $data['form_content'] .= $this->inputHidden($type, "cms_tipo", 11);
    $data['form_content'] .= $this->inputHidden("", "id", 11);
    $data['form_content'] .= $this->combox("", $datatit, "constitucion_id", "Artículo al que pertenece", "Seleccione el título", $obj->is_rule("constitucion_id", "required"));
		$data['form_content'] .= $this->combox("", $class, "cms_clasificacion", "Clasificación del comentario", "Seleccione la clasificación", $obj->is_rule("cms_clasificacion", "required"));
	$data['form_content'] .= $this->input("", "cms_titulo", $obj->get_rule("cms_titulo", "max_length"), "Título", "Maximo " . $obj->get_rule("cms_titulo", "max_length") . " caracteres", $obj->is_rule("cms_titulo", "required"), "span3");
	$data['form_content'] .= $this->text("", "cms_comentario", "Comentarios", "", $obj->get_rule("cms_comentario", "required"), "span8", true, false);
	
	
    switch($tipo) :
      case 'image'         :
        $data['form_content'] .= $this->imagen("", NULL, "Imagen", "800px x 600px", false, true, "span3");
        break;
      case 'concordancias'  :
        break;
    endswitch;

    $data['direct_form'] = "constitucion/comentario/add/". $tipo;
    return $this->buildajax($this->name . '/form', $data);
  }

  public function lista($tipo = "texto") {
    $obj = new $this->model();
    switch($tipo) :
      case 'texto'          :
				$data['datos'] = $obj->join_related("constitucion", array("cms_articulo"))->get_where(array("cms_tipo" => "T"));//$obj->check_last_query();
				break;
      case 'image'         : 
				//$obj = new \comentarios_imagen(); 
				$data['datos'] = $obj->join_related('imagen')
														 ->join_related("constitucion", array("cms_articulo"))->get_where(array("cms_tipo" => "I"));//$obj->check_last_query();
				break;
      case 'concordancias'  : 
				$obj = new \concordancias; 
				$data['datos'] = $obj->join_related("constitucion", array("cms_articulo"))->order_by('constitucion_id', 'asc')->get();
				break;
    endswitch;
		//echo "<pre>";print_r($data['datos']);exit();
    $data['tipo'] = $tipo;
    $data['direct_form'] = "constitucion/comentario/delete/" . $tipo;
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
					echo $msg = $i->error->string;
					$this->deleteImg($i->id);
		}//echo "<pre>";print_r($obj);echo "</pre>";
		if($this->_post('cms_tipo') == "I" and empty($obj->imagen_id)) :
			$obj->delete();
			$this->set_alert_session("Error guardando datos.<br>El campo IMAGEN es obligatorio", 'error');
			$tipo = "image";			
			redirect(cms_url("constitucion/comentario/" . $tipo));
		endif;
    if ($error)
      $this->set_alert_session("Error guardando datos," . $msg, 'error');
    else
      $this->set_alert_session("Datos Guardados con exito...!", 'info');
		switch ($obj->cms_tipo) :
      case "T" :
				$tipo = "texto";
				break;
      case "I" :
				$tipo = "image";
				break;
    endswitch;
    redirect(cms_url("constitucion/comentario/" . $tipo));
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