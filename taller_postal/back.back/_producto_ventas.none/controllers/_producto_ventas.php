<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class _producto_ventas extends Back_Controller {
	protected $admin_area = true;
	public $model = 'producto_venta';
	public $name = 'producto_ventas';
	public $title = 'Producto_ventas';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['Producto_ventas'] = cms_url('producto_ventas');
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
		$var_producto_id = new producto_venta();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list(),"producto_id", "Producto", "", $obj->is_rule("producto_id","required"), "span3");
		$var_venta_id = new producto_venta();
		$data['form_content'] .= $this->combox($obj->venta_id,$var_venta_id->get_venta_list(),"venta_id", "Venta", "", $obj->is_rule("venta_id","required"), "span3");
		$data['form_content'] .= $this->input($obj->cantidad, "cantidad",$obj->get_rule("cantidad","max_length") ,"Cantidad", "Maximo ".$obj->get_rule("cantidad","max_length")." caracteres", $obj->is_rule("cantidad","required"), "span3");
		$data['form_content'] .= $this->input($obj->papel, "papel",$obj->get_rule("papel","max_length") ,"Papel", "Maximo ".$obj->get_rule("papel","max_length")." caracteres", $obj->is_rule("papel","required"), "span3");
		$data['form_content'] .= $this->input($obj->color_papel, "color_papel",$obj->get_rule("color_papel","max_length") ,"Color de Papel", "Maximo ".$obj->get_rule("color_papel","max_length")." caracteres", $obj->is_rule("color_papel","required"), "span3");
		$data['form_content'] .= $this->input($obj->cantidad_sobre, "cantidad_sobre",$obj->get_rule("cantidad_sobre","max_length") ,"Cantidad de Sobre", "Maximo ".$obj->get_rule("cantidad_sobre","max_length")." caracteres", $obj->is_rule("cantidad_sobre","required"), "span3");
		$data['form_content'] .= $this->input($obj->color_sobre, "color_sobre",$obj->get_rule("color_sobre","max_length") ,"Color de Sobre", "Maximo ".$obj->get_rule("color_sobre","max_length")." caracteres", $obj->is_rule("color_sobre","required"), "span3");
		$data['form_content'] .= $this->text($obj->color_diseno, "color_diseno", "Detealle Color Diseñol", "Maximo ".$obj->get_rule("color_diseno","max_length")." caracteres", $obj->is_rule("color_diseno","required"), "span3", true, false, $obj->get_rule("color_diseno","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->impresion_dorso, "impresion_dorso",$obj->get_rule("impresion_dorso","max_length") ,"Impresion Dorso", "Maximo ".$obj->get_rule("impresion_dorso","max_length")." caracteres", $obj->is_rule("impresion_dorso","required"), "span3");
		$data['form_content'] .= $this->input($obj->tipo_sobre, "tipo_sobre",$obj->get_rule("tipo_sobre","max_length") ,"Tipo Sobre", "Maximo ".$obj->get_rule("tipo_sobre","max_length")." caracteres", $obj->is_rule("tipo_sobre","required"), "span3");
		$data['form_content'] .= $this->input($obj->stiker_cierre, "stiker_cierre",$obj->get_rule("stiker_cierre","max_length") ,"Stiker de Cierre", "Maximo ".$obj->get_rule("stiker_cierre","max_length")." caracteres", $obj->is_rule("stiker_cierre","required"), "span3");
		$data['form_content'] .= $this->text($obj->mensaje, "mensaje", "Mensaje", "Maximo ".$obj->get_rule("mensaje","max_length")." caracteres", $obj->is_rule("mensaje","required"), "span3", true, false, $obj->get_rule("mensaje","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->tipo_envio, "tipo_envio",$obj->get_rule("tipo_envio","max_length") ,"Tipo de Envío", "Maximo ".$obj->get_rule("tipo_envio","max_length")." caracteres", $obj->is_rule("tipo_envio","required"), "span3");
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$var_producto_id = new producto_venta();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list(),"producto_id", "Producto", "", $obj->is_rule("producto_id","required"), "span3");
		$var_venta_id = new producto_venta();
		$data['form_content'] .= $this->combox($obj->venta_id,$var_venta_id->get_venta_list(),"venta_id", "Venta", "", $obj->is_rule("venta_id","required"), "span3");
		$data['form_content'] .= $this->input($obj->cantidad, "cantidad",$obj->get_rule("cantidad","max_length") ,"Cantidad", "Maximo ".$obj->get_rule("cantidad","max_length")." caracteres", $obj->is_rule("cantidad","required"), "span3");
		$data['form_content'] .= $this->input($obj->papel, "papel",$obj->get_rule("papel","max_length") ,"Papel", "Maximo ".$obj->get_rule("papel","max_length")." caracteres", $obj->is_rule("papel","required"), "span3");
		$data['form_content'] .= $this->input($obj->color_papel, "color_papel",$obj->get_rule("color_papel","max_length") ,"Color de Papel", "Maximo ".$obj->get_rule("color_papel","max_length")." caracteres", $obj->is_rule("color_papel","required"), "span3");
		$data['form_content'] .= $this->input($obj->cantidad_sobre, "cantidad_sobre",$obj->get_rule("cantidad_sobre","max_length") ,"Cantidad de Sobre", "Maximo ".$obj->get_rule("cantidad_sobre","max_length")." caracteres", $obj->is_rule("cantidad_sobre","required"), "span3");
		$data['form_content'] .= $this->input($obj->color_sobre, "color_sobre",$obj->get_rule("color_sobre","max_length") ,"Color de Sobre", "Maximo ".$obj->get_rule("color_sobre","max_length")." caracteres", $obj->is_rule("color_sobre","required"), "span3");
		$data['form_content'] .= $this->text($obj->color_diseno, "color_diseno", "Detealle Color Diseñol", "Maximo ".$obj->get_rule("color_diseno","max_length")." caracteres", $obj->is_rule("color_diseno","required"), "span3", true, false, $obj->get_rule("color_diseno","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->impresion_dorso, "impresion_dorso",$obj->get_rule("impresion_dorso","max_length") ,"Impresion Dorso", "Maximo ".$obj->get_rule("impresion_dorso","max_length")." caracteres", $obj->is_rule("impresion_dorso","required"), "span3");
		$data['form_content'] .= $this->input($obj->tipo_sobre, "tipo_sobre",$obj->get_rule("tipo_sobre","max_length") ,"Tipo Sobre", "Maximo ".$obj->get_rule("tipo_sobre","max_length")." caracteres", $obj->is_rule("tipo_sobre","required"), "span3");
		$data['form_content'] .= $this->input($obj->stiker_cierre, "stiker_cierre",$obj->get_rule("stiker_cierre","max_length") ,"Stiker de Cierre", "Maximo ".$obj->get_rule("stiker_cierre","max_length")." caracteres", $obj->is_rule("stiker_cierre","required"), "span3");
		$data['form_content'] .= $this->text($obj->mensaje, "mensaje", "Mensaje", "Maximo ".$obj->get_rule("mensaje","max_length")." caracteres", $obj->is_rule("mensaje","required"), "span3", true, false, $obj->get_rule("mensaje","max_length"),3,4);
		$data['form_content'] .= $this->input($obj->tipo_envio, "tipo_envio",$obj->get_rule("tipo_envio","max_length") ,"Tipo de Envío", "Maximo ".$obj->get_rule("tipo_envio","max_length")." caracteres", $obj->is_rule("tipo_envio","required"), "span3");
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