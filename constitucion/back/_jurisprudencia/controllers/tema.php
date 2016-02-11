<?php

/**
 * @author Felipe Camacho
 */
class tema extends Back_Controller {

    protected $admin_area = true;
    public $model = 'temas';
    public $name = "tema";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Temas"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->temas();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function temas() {
        $data['path_delete'] = cms_url("jurisprudencia/".$this->name.'/delete');
        $data['path_add'] = cms_url("jurisprudencia/".$this->name.'/form_add');
        $data['path_edit'] = cms_url("jurisprudencia/".$this->name.'/form_edit');
        $data['path_list'] = cms_url("jurisprudencia/".$this->name.'/lista');
				$data['breadcrum'] = array("Constitución", "Temas");
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
				$id = $this->_post('id');
				$obj->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				
        $data['form_content'] .= $this->input($obj->cms_tema, "cms_tema", $obj->get_rule("cms_tema", "max_length"), "Título", "Maximo ".$obj->get_rule("cms_tema","max_length")." caracteres",$obj->is_rule("cms_tema","required"),"span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
				$obj = new $this->model();
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				
        $data['form_content'] .= $this->input($obj->cms_tema, "cms_tema", $obj->get_rule("cms_tema", "max_length"), "Tema", "Maximo ".$obj->get_rule("cms_tema","max_length")." caracteres",$obj->is_rule("cms_tema","required"),"span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
		}

    public function lista() {
				$obj = new $this->model();
        $data['datos'] = $obj->get();
        $data['direct_form'] = "jurisprudencia/".$this->name.'/delete';
        return $this->buildajax($this->name.'/lista', $data);
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
             //$this->deleteImg($obj->imagen_id); 
          }
        if ($error)
            $this->set_alert("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert("Datos Guardados con exito...!", 'info');
        redirect(cms_url("jurisprudencia/".$this->name));
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
            //$this->deleteImg($id_file);
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