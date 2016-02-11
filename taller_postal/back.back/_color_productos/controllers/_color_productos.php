<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.co
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050051
     */

                        

class _color_productos extends Back_Controller {
	protected $admin_area = true;
	public $model = 'color_producto';
	public $name = 'color_productos';
	public $title = 'Galeria Producto por Color';


	public function __construct() {
		parent::__construct();
		$this->menu();
		$this->migas($this->current_menu);
		$this->add_modular_assets('js', 'autoload');
	}

	public function menu() {
		return $this->current_menu['lineas, Productos & Categorias']['Galeria Producto por Color'] = cms_url('color_productos');
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
		$obj->join_related('imagen')->join_related('imagen1')
                        ->join_related('imagen2')->join_related('imagen3')
                        ->join_related('imagen4')->get_by_id($id);
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->label_img, "label_img",$obj->get_rule("label_img","max_length") ,"Nombre Imagen 1", "Maximo ".$obj->get_rule("label_img","max_length")." caracteres", $obj->is_rule("label_img","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img1, "label_img1",$obj->get_rule("label_img1","max_length") ,"Nombre Imagen 2", "Maximo ".$obj->get_rule("label_img1","max_length")." caracteres", $obj->is_rule("label_img1","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img2, "label_img2",$obj->get_rule("label_img2","max_length") ,"Nombre Imagen 3", "Maximo ".$obj->get_rule("label_img2","max_length")." caracteres", $obj->is_rule("label_img2","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img3, "label_img3",$obj->get_rule("label_img3","max_length") ,"Nombre Imagen 4", "Maximo ".$obj->get_rule("label_img3","max_length")." caracteres", $obj->is_rule("label_img3","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img4, "label_img4",$obj->get_rule("label_img4","max_length") ,"Nombre Imagen 5", "Maximo ".$obj->get_rule("label_img4","max_length")." caracteres", $obj->is_rule("label_img4","required"), "span3");

                $var_color_id = new color_producto();
		$data['form_content'] .= $this->combox($obj->color_id,$var_color_id->get_color_list('titulo'),"color_id", "Color", "", $obj->is_rule("color_id","required"), "span5");
		$var_producto_id = new color_producto();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list('tiutlo'),"producto_id", "Producto", "", $obj->is_rule("producto_id","required"), "span5");
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Imagen 1", "460px × 340px", false, $obj->is_rule("imagen_id","required"), "span3");
		$data['form_content'] .= $this->imagen($obj->imagen1_id,$obj->imagen1_path, "Imagen 2", "460px × 340px", false, $obj->is_rule("imagen1_id","required"), "span3",1);
	        $data['form_content'] .= $this->imagen($obj->imagen2_id,$obj->imagen2_path, "Imagen 3", "460px × 340px", false, $obj->is_rule("imagen2_id","required"), "span3",2);
		$data['form_content'] .= $this->imagen($obj->imagen3_id,$obj->imagen3_path, "Imagen 4", "460px × 340px", false, $obj->is_rule("imagen3_id","required"), "span3",3);
		$data['form_content'] .= $this->imagen($obj->imagen4_id,$obj->imagen4_path, "Imagen 5", "460px × 340px", false, $obj->is_rule("imagen4_id","required"), "span3",4);
	        $data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function form_add() {
		$obj = new $this->model();
		$data['form_content'] = "";
		$data['form_content'] .= $this->inputHidden($obj->id, "id", $obj->get_rule("id","max_length"));
		$data['form_content'] .= $this->input($obj->label_img, "label_img",$obj->get_rule("label_img","max_length") ,"Nombre Imagen 1", "Maximo ".$obj->get_rule("label_img","max_length")." caracteres", $obj->is_rule("label_img","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img1, "label_img1",$obj->get_rule("label_img1","max_length") ,"Nombre Imagen 2", "Maximo ".$obj->get_rule("label_img1","max_length")." caracteres", $obj->is_rule("label_img1","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img2, "label_img2",$obj->get_rule("label_img2","max_length") ,"Nombre Imagen 3", "Maximo ".$obj->get_rule("label_img2","max_length")." caracteres", $obj->is_rule("label_img2","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img3, "label_img3",$obj->get_rule("label_img3","max_length") ,"Nombre Imagen 4", "Maximo ".$obj->get_rule("label_img3","max_length")." caracteres", $obj->is_rule("label_img3","required"), "span3");
                $data['form_content'] .= $this->input($obj->label_img4, "label_img4",$obj->get_rule("label_img4","max_length") ,"Nombre Imagen 5", "Maximo ".$obj->get_rule("label_img4","max_length")." caracteres", $obj->is_rule("label_img4","required"), "span3");

                $var_color_id = new color_producto();
		$data['form_content'] .= $this->combox($obj->color_id,$var_color_id->get_color_list('titulo'),"color_id", "Color", "", $obj->is_rule("color_id","required"), "span5");
		$var_producto_id = new color_producto();
		$data['form_content'] .= $this->combox($obj->producto_id,$var_producto_id->get_producto_list('tiutlo'),"producto_id", "Producto", "", $obj->is_rule("producto_id","required"), "span5");
		$data['form_content'] .= $this->imagen($obj->imagen_id,$obj->imagen_path, "Imagen 1", "460px × 340px", false, $obj->is_rule("imagen_id","required"), "span3");
		$data['form_content'] .= $this->imagen($obj->imagen1_id,$obj->imagen1_path, "Imagen 2", "460px × 340px", false, $obj->is_rule("imagen1_id","required"), "span3",1);
	        $data['form_content'] .= $this->imagen($obj->imagen2_id,$obj->imagen2_path, "Imagen 3", "460px × 340px", false, $obj->is_rule("imagen2_id","required"), "span3",2);
		$data['form_content'] .= $this->imagen($obj->imagen3_id,$obj->imagen3_path, "Imagen 4", "460px × 340px", false, $obj->is_rule("imagen3_id","required"), "span3",3);
		$data['form_content'] .= $this->imagen($obj->imagen4_id,$obj->imagen4_path, "Imagen 5", "460px × 340px", false, $obj->is_rule("imagen4_id","required"), "span3",4);
		$data['direct_form'] = $this->name.'/add';
		return $this->buildajax('control/form', $data);
	}

	public function lista() {
		$obj = new $this->model();
		$data['datos'] = $obj->join_related('imagen')->join_related('imagen1')
                        ->join_related('imagen2')->join_related('imagen3')
                        ->join_related('imagen4')->join_related('color')->join_related('producto')->get();  
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