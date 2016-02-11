<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _servicios extends Back_Controller {
	protected $admin_area = true;
	public $model = 'servicio';
	public $name = 'servicios';
	public $title = 'Servicios';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Comunidad & Servicios']['Servicios'] = cms_url('servicios');
	}

	public function index() {
		$data['pag'] = $this->session->userdata('page_'.  $this->name);
		$this->session->set_userdata('page_'.$this->name, '1');
		$data['title_page'] = $this->title;
		$data['pag'] = 1;
		$data['migas'] = $this->miga;
		$data['pag_content'] = $this->contents();
		$data['pag_content_title'] = ucwords ($this->title);
		return $this->build('index', $data);
	}

	public function contents() {
		$data['path_delete'] = cms_url($this->name.'/delete');
		$data['path_add'] = cms_url($this->name.'/form_add');
		$data['path_edit'] = cms_url($this->name.'/form_edit');
		$data['path_list'] = cms_url($this->name.'/lista');
		$data['mpag_content'] = $this->lista();
		$data['pag'] = 1;
		$this->session->set_userdata('page_'.$this->name, '1');
		return $this->buildajax('control', $data);
	}

	public function form_edit() {
		$obj = new $this->model();
		$id = $this->_post('id');
		$obj->join_related('imagen')->join_related('imagen1')->get_by_id($id);
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Imagen Principal", "", false, $obj->is_rule("imagen_id","required"), "span3");
		$data['form_content'] .= $this->text($obj->texto_primcipal, "texto_primcipal", "Texto Principal", "Maximo ".$obj->get_rule("texto_primcipal","max_length")." caracteres", $obj->is_rule("texto_primcipal","required"), "span6", true, false, $obj->get_rule("texto_primcipal","max_length"),3,4);
		$data['form_content'] .= $this->imagen($obj->imagen1_id,$obj->imagen1_path, "Imagen Segundaria", "", false, $obj->is_rule("imagen1_id","required"), "span3",1);
		$data['form_content'] .= $this->input($obj->titulo_segundario, "titulo_segundario",$obj->get_rule("titulo_segundario","max_length") ,"Titulo Segundario", "Maximo ".$obj->get_rule("titulo_segundario","max_length")." caracteres", $obj->is_rule("titulo_segundario","required"), "span6");
		$data['form_content'] .= $this->text($obj->texto_segundario, "texto_segundario", "Texto Segundario", "Maximo ".$obj->get_rule("texto_segundario","max_length")." caracteres", $obj->is_rule("texto_segundario","required"), "span6", true, false, $obj->get_rule("texto_segundario","max_length"),3,4);
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Imagen Principal", "", false, $obj->is_rule("imagen_id","required"), "span3");
		$data['form_content'] .= $this->text($obj->texto_primcipal, "texto_primcipal", "Texto Principal", "Maximo ".$obj->get_rule("texto_primcipal","max_length")." caracteres", $obj->is_rule("texto_primcipal","required"), "span6", true, false, $obj->get_rule("texto_primcipal","max_length"),3,4);
		$data['form_content'] .= $this->imagen("",NULL, "Imagen Segundaria", "", false, $obj->is_rule("imagen1_id","required"), "span3",1);
		$data['form_content'] .= $this->input($obj->titulo_segundario, "titulo_segundario",$obj->get_rule("titulo_segundario","max_length") ,"Titulo Segundario", "Maximo ".$obj->get_rule("titulo_segundario","max_length")." caracteres", $obj->is_rule("titulo_segundario","required"), "span6");
                $data['form_content'] .= $this->text($obj->texto_segundario, "texto_segundario", "Texto Segundario", "Maximo ".$obj->get_rule("texto_segundario","max_length")." caracteres", $obj->is_rule("texto_segundario","required"), "span6", true, false, $obj->get_rule("texto_segundario","max_length"),3,4);
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] = $obj->join_related('imagen')->join_related('imagen1')->get();
		$data['direct_form'] = $this->name.'/delete';
		return $this->buildajax('control/lista', $data);
	}

	public function add() {
		$error = false;
		$msg = "";
		$obj = new $this->model();
		$obj->get_by_id($this->_post('id'));
		if(!$obj->exists())
		$obj->id = "";
		$this->loadVar($obj);
		if (!$obj->save()) {
			$error = true;
			$msg = $obj->error->string;
			$this->deleteImg($this->data_id_obj_path($obj));
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
			$id_file = $this->data_id_obj_path($obj);
			if (!$obj->delete()){
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
		else{
			$this->set_alert_session("Datos eliminados con éxito...!", 'info');
		}
		return $this->render_json(!$error);
	}

}
?>