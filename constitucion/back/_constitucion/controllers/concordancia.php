<?php

/**
 * @author Felipe Camacho
 */
class concordancia extends Back_Controller {

    protected $admin_area = true;
    public $model = 'concordancias';
    public $name = "concordancia";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Concordancia de artículos"; 
        $data['pag'] = 1;
				$data['add'] = false;
        $data['pag_content'] = $this->articulos();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function articulos() {
        $data['path_delete'] = cms_url("constitucion/".$this->name.'/delete');
        $data['path_add'] = cms_url("constitucion/".$this->name.'/form_add');
        $data['path_edit'] = cms_url("constitucion/".$this->name.'/form_edit');
        $data['path_list'] = cms_url("constitucion/".$this->name.'/lista');
				$data['breadcrum'] = array("Constitución", "Concordancias");
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new constitucion();
				$obj->join_related('concordancias')->get_by_id($this->_post('id'));
				$obj1 = new constitucion();
				$obj1->where("id !=", $obj->id)->get();//echo "<pre>";print_r($obj);exit();
				$class = array(
					array("id" => "A", "name" => "Artículo"),
					array("id" => "I", "name" => "Inciso"),
					array("id" => "E", "name" => "Expresión")
				);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				$data['form_content'] .= $this->inputHidden($obj->concordancias_id, "cid", 11);

				$tmp = explode(",", $obj->concordancias_cms_concordancias);
				
				$x = 0;
				foreach($obj1->all as $t) :
					$check = (in_array($t->id, $tmp))?' checked="checked"':"";
					$data['form_content'] .= $this->input($t->id, "cms_concordancia_".$x, $check, $t->cms_articulo, "", false, "span2", "span8", "checkbox");
					$x++;
				endforeach;
				$data['form_content'] .= $this->inputHidden($x--, "tc", 11);
        $data['direct_form'] = "constitucion/".$this->name.'/add';
				
				$data['form_content'] .= $this->combox($obj->concordancias_cms_clasificacion, $class, "concordancias_cms_clasificacion", "Clasificación del comentario", "Seleccione la clasificación", true);

        return $this->buildajax($this->name.'/form', $data);
    }

    /*public function form_add() {
				$obj = new $this->model();
				$obj1 = new \titulos_constitucion();
				$obj1->get();
				foreach($obj1 as $titulo) :
					$datatit[] = array('id' => $obj1->id, 'name' => $obj1->cms_titulo);
				endforeach;
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
				
        $data['form_content'] .= $this->input("", "cms_articulo", $obj->get_rule("cms_articulo", "max_length"), "Artículo", "Maximo ".$obj->get_rule("cms_articulo","max_length")." caracteres",$obj->is_rule("cms_articulo","required"),"span3");
				
				$data['form_content'] .= $this->combox("", $datatit, "titulos_constitucion_id", "Título al que pertenece", "Seleccione el título", $obj->is_rule("cms_articulo","required"));
				
				$data['form_content'] .= $this->text("", "cms_texto", "Texto", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);
				
        $data['direct_form'] = "constitucion/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
		}*/

    public function lista() {
				$obj = new constitucion();
        $data['datos'] = $obj->join_related("concordancias")->get();//echo "<pre>";print_r($obj);exit();
        $data['direct_form'] = "constitucion/".$this->name.'/delete';
        return $this->buildajax($this->name.'/lista', $data);
		}

    public function add() {
        $error = false;
        $msg = "";
				$concordancias = array();
				for($x = 0; $x < $this->_post('tc'); ++$x) :
					$val = $this->_post('cms_concordancia_'.$x);
					if(!empty($val)) $concordancias[] = $val;
				endfor;
				if(empty($concordancias)) :
					$this->set_alert_session("Error guardando datos," . $msg, 'error');
				else :
					$obj = new $this->model();
						$obj->get_by_id($this->_post('cid'));
						if(!$obj->exists())
							$obj->id = "";
						$this->loadVar($obj);
						$obj->cms_clasificacion = $this->_post('concordancias_cms_clasificacion');
						$obj->constitucion_id = $this->_post('id');
						$obj->cms_concordancias = implode(",", $concordancias);
						if (!$obj->save()) {
							 $error = true;
							 $msg = $obj->error->string;
							 $this->deleteImg($obj->imagen_id); 
						}
					if ($error)
							$this->set_alert_session("Error guardando datos," . $msg, 'error');
					else
							$this->set_alert_session("Datos Guardados con exito...!", 'info');
				endif;
        redirect(cms_url("constitucion/".$this->name));
    }
    


    public function delete() {
        $error = false;
        $obj = new $this->model();
        $obj->get_by_id($this->_post('value'));
        $msg = "";
        if ($obj->exists()) {
            $id_file = $obj->imagen_id;
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