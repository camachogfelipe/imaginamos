<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _ventas extends Back_Controller {
	protected $admin_area = true;
	public $model = 'venta';
	public $name = 'ventas';
	public $title = 'Ventas';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Ventas'] = cms_url('ventas');
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
		$data['form_content'] .= $this->input($obj->referencia, "referencia",$obj->get_rule("referencia","max_length") ,"Ref.", "Maximo ".$obj->get_rule("referencia","max_length")." caracteres", $obj->is_rule("referencia","required"), "span3");
		$data['form_content'] .= $this->input($obj->fecha, "fecha",$obj->get_rule("fecha","max_length") ,"Fecha", "Maximo ".$obj->get_rule("fecha","max_length")." caracteres", $obj->is_rule("fecha","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->estado, "estado","Estado", "", $obj->is_rule("estado","required"), "span3");
		$var_datos_usuario_id = new venta();
		$data['form_content'] .= $this->combox($obj->datos_usuario_id,$var_datos_usuario_id->get_datos_usuario_list(),"datos_usuario_id", "Comprador", "", $obj->is_rule("datos_usuario_id","required"), "span3");
		$var_datos_usuario1_id = new venta();
		$data['form_content'] .= $this->combox($obj->datos_usuario1_id,$var_datos_usuario1_id->get_datos_usuario1_list(),"datos_usuario1_id", "Receptor", "", $obj->is_rule("datos_usuario1_id","required"), "span3");
		$data['form_content'] .= $this->input($obj->porcentaje_pago, "porcentaje_pago",$obj->get_rule("porcentaje_pago","max_length") ,"% Pago", "Maximo ".$obj->get_rule("porcentaje_pago","max_length")." caracteres", $obj->is_rule("porcentaje_pago","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->costo_envio, "costo_envio" ,"$","Costo de Envio", "", $obj->is_rule("costo_envio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->sub_total, "sub_total" ,"$","Sub Total", "", $obj->is_rule("sub_total","required"), "span3");
		$data['form_content'] .= $this->input($obj->iva, "iva",$obj->get_rule("iva","max_length") ,"Iva", "Maximo ".$obj->get_rule("iva","max_length")." caracteres", $obj->is_rule("iva","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->total, "total" ,"$","Total", "", $obj->is_rule("total","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->otro_costos, "otro_costos" ,"$","Otros Costos", "", $obj->is_rule("otro_costos","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->referencia, "referencia",$obj->get_rule("referencia","max_length") ,"Ref.", "Maximo ".$obj->get_rule("referencia","max_length")." caracteres", $obj->is_rule("referencia","required"), "span3");
		$data['form_content'] .= $this->input($obj->fecha, "fecha",$obj->get_rule("fecha","max_length") ,"Fecha", "Maximo ".$obj->get_rule("fecha","max_length")." caracteres", $obj->is_rule("fecha","required"), "span3");
		$data['form_content'] .= $this->inputCheck($obj->estado, "estado","Estado", "", $obj->is_rule("estado","required"), "span3");
		$var_datos_usuario_id = new venta();
		$data['form_content'] .= $this->combox($obj->datos_usuario_id,$var_datos_usuario_id->get_datos_usuario_list(),"datos_usuario_id", "Comprador", "", $obj->is_rule("datos_usuario_id","required"), "span3");
		$var_datos_usuario1_id = new venta();
		$data['form_content'] .= $this->combox($obj->datos_usuario1_id,$var_datos_usuario_id->get_datos_usuario_list(),"datos_usuario1_id", "Receptor", "", $obj->is_rule("datos_usuario1_id","required"), "span3");
		$data['form_content'] .= $this->input($obj->porcentaje_pago, "porcentaje_pago",$obj->get_rule("porcentaje_pago","max_length") ,"% Pago", "Maximo ".$obj->get_rule("porcentaje_pago","max_length")." caracteres", $obj->is_rule("porcentaje_pago","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->costo_envio, "costo_envio" ,"$","Costo de Envio", "", $obj->is_rule("costo_envio","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->sub_total, "sub_total" ,"$","Sub Total", "", $obj->is_rule("sub_total","required"), "span3");
		$data['form_content'] .= $this->input($obj->iva, "iva",$obj->get_rule("iva","max_length") ,"Iva", "Maximo ".$obj->get_rule("iva","max_length")." caracteres", $obj->is_rule("iva","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->total, "total" ,"$","Total", "", $obj->is_rule("total","required"), "span3");
		$data['form_content'] .= $this->input_money($obj->otro_costos, "otro_costos" ,"$","Otros Costos", "", $obj->is_rule("otro_costos","required"), "span3");
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