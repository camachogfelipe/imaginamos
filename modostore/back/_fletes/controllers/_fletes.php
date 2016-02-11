<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 1-050049
     */

                        

class _fletes extends Back_Controller {
	protected $admin_area = true;
	public $model = 'destino';
	public $name = 'fletes';
	public $title = 'Fletes Nacionales';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
	}

	public function menu() {
		return $this->current_menu['Home']['Fletes Nacionales'] = cms_url('fletes');
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
		$obj->get_by_id($id); /* o $obj->join_relate('mixed_model')->get_by_id($id); */
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
		
		$data['form_content'] .= $this->input($obj->lugar, "lugar", $obj->get_rule("lugar","max_length"), "Lugar de destino", "Maximo ".$obj->get_rule("lugar","max_length")." caracteres",$obj->is_rule("lugar","required"),"span3");
		$data['form_content'] .= $this->input_money($obj->valor, "valor", "$", "Valor del Flete", "Valor en pesos.",$obj->is_rule("valor","required"),"span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden("","id", 11);
                $data['form_content'] .= $this->input("", "lugar", $obj->get_rule("lugar","max_length"), "Lugar de destino", "Maximo ".$obj->get_rule("lugar","max_length")." caracteres",$obj->is_rule("lugar","required"),"span3");
		$data['form_content'] .= $this->input_money("", "valor", "$", "Valor del Flete", "Valor en pesos.",$obj->is_rule("valor","required"),"span3");
	     $data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] =  $obj->get(); 
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