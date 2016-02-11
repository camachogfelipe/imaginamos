<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _configuracions extends Back_Controller {
	protected $admin_area = true;
	public $model = 'configuracion';
	public $name = 'configuracions';
	public $title = 'Configuracion de Visibilidad';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Configiraciones']['Configuracion de Visibilidad'] = cms_url('configuracions');
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
		$data['form_content'] .= $this->inputCheck($obj->view_papel, "view_papel","Opcion Papel", "", $obj->is_rule("view_papel","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_color_papel, "view_color_papel","Opcion Color Papel", "", $obj->is_rule("view_color_papel","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_papel_sobre, "view_papel_sobre","Opcion Papel Sobre", "", $obj->is_rule("view_papel_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_color_sobre, "view_color_sobre","Opcion Color Sobre", "", $obj->is_rule("view_color_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_cambia_color, "view_cambia_color","Opcion Color Diseño", "", $obj->is_rule("view_cambia_color","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_impresion_dorso, "view_impresion_dorso","Opcion Impresion Dorso", "", $obj->is_rule("view_impresion_dorso","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_sobre, "view_sobre","Opcion Sobre", "", $obj->is_rule("view_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_stiker_cierre, "view_stiker_cierre","OpcionStiker de Cierrel", "", $obj->is_rule("view_stiker_cierre","required"), "span3");
		$var_producto_id = new configuracion();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list('tiutlo'),"producto_id", "Productol", "", $obj->is_rule("producto_id","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->inputCheck($obj->view_papel, "view_papel","Opcion Papel", "", $obj->is_rule("view_papel","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_color_papel, "view_color_papel","Opcion Color Papel", "", $obj->is_rule("view_color_papel","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_papel_sobre, "view_papel_sobre","Opcion Papel Sobre", "", $obj->is_rule("view_papel_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_color_sobre, "view_color_sobre","Opcion Color Sobre", "", $obj->is_rule("view_color_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_cambia_color, "view_cambia_color","Opcion Color Diseño", "", $obj->is_rule("view_cambia_color","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_impresion_dorso, "view_impresion_dorso","Opcion Impresion Dorso", "", $obj->is_rule("view_impresion_dorso","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_sobre, "view_sobre","Opcion Sobre", "", $obj->is_rule("view_sobre","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->view_stiker_cierre, "view_stiker_cierre","OpcionStiker de Cierrel", "", $obj->is_rule("view_stiker_cierre","required"), "span3");
		$var_producto_id = new configuracion();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list('tiutlo'),"producto_id", "Productol", "", $obj->is_rule("producto_id","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] = $obj->join_related('producto')->get();  
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