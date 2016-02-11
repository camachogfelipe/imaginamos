<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _disenadors extends Back_Controller {
	protected $admin_area = true;
	public $model = 'disenador';
	public $name = 'disenadors';
	public $title = 'Diseñadores';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Comunidad & Servicios']['Diseñadores'] = cms_url('disenadors');
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
		$obj->join_related('imagen')->get_by_id($id);
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->nombre, "nombre",$obj->get_rule("nombre","max_length") ,"Nombre", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres", $obj->is_rule("nombre","required"), "span6");
		$var_municipios_id = new disenador();
		$data['form_content'] .= $this->combox($obj->municipios_id,$var_municipios_id->get_municipios_list('nombre'),"municipios_id", "Ciudad", "", $obj->is_rule("municipios_id","required"), "span6");
		$data['form_content'] .= $this->text($obj->texto, "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span6", false, true, $obj->get_rule("texto","max_length"),3,4);
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Foto", "", false, $obj->is_rule("imagen_id","required"), "span3");
//		$new_obj1 = new linea();// $this->model();
//                $data['form_content'] .= $this->select_multiple($obj->selected_multiple_id($obj->id,'disenador_linea'),$new_obj1->get_select_multiple('titulo','Lineas'),"lineas[]", "Lineas", "Seleccione lineas de diseños", false, "span5");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->nombre, "nombre",$obj->get_rule("nombre","max_length") ,"Nombre", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres", $obj->is_rule("nombre","required"), "span6");
		$var_municipios_id = new disenador();
		$data['form_content'] .= $this->combox($obj->municipios_id,$var_municipios_id->get_municipios_list('nombre'),"municipios_id", "Ciudad", "", $obj->is_rule("municipios_id","required"), "span6");
		$data['form_content'] .= $this->text($obj->texto, "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span6", false, true, $obj->get_rule("texto","max_length"),3,4);
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Foto", "", false, $obj->is_rule("imagen_id","required"), "span3"); 
//		$new_obj1 = new linea();// $this->model(); 
//		$data['form_content'] .= $this->select_multiple(array(),$new_obj1->get_select_multiple('titulo','Linea'),"lineas[]", "Lineas", "Seleccione lineas de diseños", false, "span5"); 
		$data['direct_form'] = $this->name.'/add';
		
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] =   $obj->join_related('imagen')->join_related('ciudad')->get(); 
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
                }else{
                    $modelos = $_REQUEST['lineas'];
                    foreach ($modelos as $value) {
                        $prduct_model = new disenador_linea();
                        $prduct_model->id = "";
                        $prduct_model->linea_id = $value;
                        $prduct_model->disenador_id = $obj->id;
                        $prduct_model->save();
                    }
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