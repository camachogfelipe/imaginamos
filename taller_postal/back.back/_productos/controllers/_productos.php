<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _productos extends Back_Controller {
	protected $admin_area = true;
	public $model = 'producto';
	public $name = 'productos';
	public $title = 'Productos';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Lineas, Productos & Categorias']['Productos'] = cms_url('productos');
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
		$data['form_content'] .= $this->input($obj->tiutlo, "tiutlo",$obj->get_rule("tiutlo","max_length") ,"Nombre", "Maximo ".$obj->get_rule("tiutlo","max_length")." caracteres", $obj->is_rule("tiutlo","required"), "span3");
		$var_categoria_id = new producto();
		$data['form_content'] .= $this->combox($obj->categoria_id,$var_categoria_id->get_categoria_list("titulo"),"categoria_id", "Categoria", "", $obj->is_rule("categoria_id","required"), "span3");
		$var_disenador_id = new producto();
		$data['form_content'] .= $this->combox($obj->disenador_id,$var_disenador_id->get_disenador_list("nombre"),"disenador_id", "Diseñador", "", $obj->is_rule("disenador_id","required"), "span3");
		$data['form_content'] .= $this->text($obj->texto, "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span9", true, false, $obj->get_rule("texto","max_length"),3,4);
		$data['form_content'] .= $this->input_money($obj->precio, "precio" ,"$","Precio", "", $obj->is_rule("precio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_envio, "precio_envio" ,"$","Precio de Envio", "", $obj->is_rule("precio_envio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_stiker, "precio_stiker" ,"$","Precio de Stiker", "", $obj->is_rule("precio_stiker","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_cdiseno, "precio_cdiseno" ,"$","Precio Cambiar Color Diseño", "", $obj->is_rule("precio_cdiseno","required"), "span3");
                $data['form_content'] .= $this->input_money($obj->precio_idorso, "precio_idorso" ,"$","Precio Impresion Dorso", "", $obj->is_rule("precio_idorso","required"), "span3");
                $data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->tiutlo, "tiutlo",$obj->get_rule("tiutlo","max_length") ,"Nombre", "Maximo ".$obj->get_rule("tiutlo","max_length")." caracteres", $obj->is_rule("tiutlo","required"), "span3");
		$var_categoria_id = new producto();
		$data['form_content'] .= $this->combox($obj->categoria_id,$var_categoria_id->get_categoria_list("titulo"),"categoria_id", "Categoria", "", $obj->is_rule("categoria_id","required"), "span3");
		$var_disenador_id = new producto();
		$data['form_content'] .= $this->combox($obj->disenador_id,$var_disenador_id->get_disenador_list("nombre"),"disenador_id", "Diseñador", "", $obj->is_rule("disenador_id","required"), "span3");
		$data['form_content'] .= $this->text($obj->texto, "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span9", true, false, $obj->get_rule("texto","max_length"),3,4);
		$data['form_content'] .= $this->input_money($obj->precio, "precio" ,"$","Precio", "", $obj->is_rule("precio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_envio, "precio_envio" ,"$","Precio de Envio", "", $obj->is_rule("precio_envio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_stiker, "precio_stiker" ,"$","Precio de Stiker", "", $obj->is_rule("precio_stiker","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->precio_cdiseno, "precio_cdiseno" ,"$","Precio Cambiar Color Diseño", "", $obj->is_rule("precio_cdiseno","required"), "span3");
                $data['form_content'] .= $this->input_money($obj->precio_idorso, "precio_idorso" ,"$","Precio Impresion Dorso", "", $obj->is_rule("precio_idorso","required"), "span3");
                $data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] = $obj->join_related('disenador')->join_related('categoria')->group_by('id')->get(); 
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