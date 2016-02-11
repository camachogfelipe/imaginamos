<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _datos_usuarios extends Back_Controller {
	protected $admin_area = true;
	public $model = 'datos_usuario';
	public $name = 'datos_usuarios';
	public $title = 'Datos_usuarios';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Datos_usuarios'] = cms_url('datos_usuarios');
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
		$obj->get_by_id($id);
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->nombre, "nombre",$obj->get_rule("nombre","max_length") ,"Nombre", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres", $obj->is_rule("nombre","required"), "span3");
		$data['form_content'] .= $this->input($obj->email, "email",$obj->get_rule("email","max_length") ,"Email", "Maximo ".$obj->get_rule("email","max_length")." caracteres", $obj->is_rule("email","required"), "span3");
		$data['form_content'] .= $this->input($obj->direccion, "direccion",$obj->get_rule("direccion","max_length") ,"Dirección", "Maximo ".$obj->get_rule("direccion","max_length")." caracteres", $obj->is_rule("direccion","required"), "span3");
		$data['form_content'] .= $this->input($obj->telefono, "telefono",$obj->get_rule("telefono","max_length") ,"Telefono", "Maximo ".$obj->get_rule("telefono","max_length")." caracteres", $obj->is_rule("telefono","required"), "span3");
		$data['form_content'] .= $this->input($obj->celular, "celular",$obj->get_rule("celular","max_length") ,"Celular", "Maximo ".$obj->get_rule("celular","max_length")." caracteres", $obj->is_rule("celular","required"), "span3");
		$data['form_content'] .= $this->text($obj->comentario, "comentario", "Comentario", "Maximo ".$obj->get_rule("comentario","max_length")." caracteres", $obj->is_rule("comentario","required"), "span3", true, false, $obj->get_rule("comentario","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->ciudad, "ciudad",$obj->get_rule("ciudad","max_length") ,"Ciudad", "Maximo ".$obj->get_rule("ciudad","max_length")." caracteres", $obj->is_rule("ciudad","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->nombre, "nombre",$obj->get_rule("nombre","max_length") ,"Nombre", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres", $obj->is_rule("nombre","required"), "span3");
		$data['form_content'] .= $this->input($obj->email, "email",$obj->get_rule("email","max_length") ,"Email", "Maximo ".$obj->get_rule("email","max_length")." caracteres", $obj->is_rule("email","required"), "span3");
		$data['form_content'] .= $this->input($obj->direccion, "direccion",$obj->get_rule("direccion","max_length") ,"Dirección", "Maximo ".$obj->get_rule("direccion","max_length")." caracteres", $obj->is_rule("direccion","required"), "span3");
		$data['form_content'] .= $this->input($obj->telefono, "telefono",$obj->get_rule("telefono","max_length") ,"Telefono", "Maximo ".$obj->get_rule("telefono","max_length")." caracteres", $obj->is_rule("telefono","required"), "span3");
		$data['form_content'] .= $this->input($obj->celular, "celular",$obj->get_rule("celular","max_length") ,"Celular", "Maximo ".$obj->get_rule("celular","max_length")." caracteres", $obj->is_rule("celular","required"), "span3");
		$data['form_content'] .= $this->text($obj->comentario, "comentario", "Comentario", "Maximo ".$obj->get_rule("comentario","max_length")." caracteres", $obj->is_rule("comentario","required"), "span3", true, false, $obj->get_rule("comentario","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->ciudad, "ciudad",$obj->get_rule("ciudad","max_length") ,"Ciudad", "Maximo ".$obj->get_rule("ciudad","max_length")." caracteres", $obj->is_rule("ciudad","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] = $obj->get(); /*  $obj->join_related('imagen')->get(); */ 
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