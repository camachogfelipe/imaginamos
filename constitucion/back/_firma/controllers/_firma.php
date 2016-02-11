<?php

/**
 * @author Felipe Camacho
 */
class _firma extends Back_Controller {

    protected $admin_area = true;
    public $model = 'quienes_somos';
    public $name = "firma";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $seccion = $this->uri->segment(3);
        if(empty($seccion)) $this->home();
        return $this->build('_index', $data);
    }
		
		public function home() {
			$data['pag'] = $this->session->userdata('page_'.  $this->name);
			$this->session->set_userdata('page_'.$this->name, '1');
			$seccion = $this->uri->segment(3);
			$data['title_page'] = "Texto del home";
			$data['pag'] = 1;
			$data['breadcrum'] = array("Constitución al día");
			$data['pag_content'] = $this->firma();
			$data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
			return $this->build('_index', $data);
		}
		
		public function quienes() {
			$data['pag'] = $this->session->userdata('page_'.  $this->name);
			$this->session->set_userdata('page_'.$this->name, '1');
			$data['title_page'] = "Quiénes somos";
			$data['pag'] = 1;
			$data['breadcrum'] = array("Firma", "Quiénes somos");
			$data['pag_content'] = $this->firma();
			$data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
			return $this->build('_index', $data);
		}
		
		public function experiencia() {
			$data['pag'] = $this->session->userdata('page_'.  $this->name);
			$this->session->set_userdata('page_'.$this->name, '1');
			$data['title_page'] = "Nuestra Experiencia";
			$data['pag'] = 1;
			$data['breadcrum'] = array("Firma", "Nuestra Experiencia");
			$data['pag_content'] = $this->firma();
			$data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
			return $this->build('_index', $data);
		}
		
		public function servicios() {
			$data['pag'] = $this->session->userdata('page_'.  $this->name);
			$this->session->set_userdata('page_'.$this->name, '1');
			$data['title_page'] = "Nuestros servicios";
			$data['pag'] = 1;
			$data['breadcrum'] = array("Firma", "Nuestros Servicios");
			$data['pag_content'] = $this->firma();
			$data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
			return $this->build('_index', $data);
		}
		
		public function blog() {
			$data['pag'] = $this->session->userdata('page_'.  $this->name);
			$this->session->set_userdata('page_'.$this->name, '1');
			$data['title_page'] = "Texto sección blog";
			$data['pag'] = 1;
			$data['breadcrum'] = array("Blog", "Texto sección");
			$data['pag_content'] = $this->firma();
			$data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
			return $this->build('_index', $data);
		}

    public function firma($seccion = "") {
        $data['path_delete'] = cms_url($this->name.'/delete');
        $data['path_add'] = cms_url($this->name.'/form_add');
        $data['path_edit'] = cms_url($this->name.'/form_edit');
        $data['path_list'] = cms_url($this->name.'/lista');
        $data['mpag_content'] = $this->form_edit();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
				$seccion = $this->uri->segment(3);
				$obj->get_where(array('cms_seccion'=>$seccion));
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				
				$data['form_content'] .= $this->inputHidden($obj->cms_seccion, "cms_seccion", 11);
				
				if($seccion == "home") :
					$data['form_content'] .= $this->input($obj->cms_titulo1, "cms_titulo1", $obj->get_rule("cms_titulo1", "max_length"), "Títiulo", "Maximo ".$obj->get_rule("cms_titulo1","max_length")." caracteres",$obj->is_rule("cms_titulo1","required"),"span3");
					
					$data['form_content'] .= $this->input($obj->cms_titulo2, "cms_titulo2", $obj->get_rule("cms_titulo2", "max_length"), "Títiulo", "Maximo ".$obj->get_rule("cms_titulo2","max_length")." caracteres",$obj->is_rule("cms_titulo2","required"),"span3");
				else :
					$data['form_content'] .= $this->inputHidden($obj->cms_titulo1, "cms_titulo1", 11);
					$data['form_content'] .= $this->inputHidden($obj->cms_titulo2, "cms_titulo2", 11);
				endif;
				
				$data['form_content'] .= $this->text($obj->cms_texto, "cms_texto", "Texto", "", $obj->get_rule("cms_texto", "required"), "span8", true, false);
				
        $data['direct_form'] = $this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {}

    public function lista() {}

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
					 //$this->deleteImg($obj->imagen_id); 
				}
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url($this->name."/".$obj->cms_seccion));
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
           $this->set_alert("Datos eliminados con éxito...!", 'info');
        }
        return $this->render_json(!$error);
    }
}