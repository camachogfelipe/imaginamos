<?php

/**
 * @author Elbert Tous
 */
class _acordeon_lugar extends Back_Controller {

    protected $admin_area = true;
    private $model = 'acordeon_lugar';
    private $name = "acordeon_lugar";
    
    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Barner Acordeon"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->barner();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));;
        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function barner() {
        $data['path_delete'] = cms_url($this->name.'/delete');
        $data['path_add'] = cms_url($this->name.'/form_add');
        $data['path_edit'] = cms_url($this->name.'/form_edit');
        $data['path_list'] = cms_url($this->name.'/lista');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
        $id = $this->_post('id');
        $obj->join_related('imagen')->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11); 
        $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "120px × 163px",false,true,"span3");
        $data['form_content'] .= $this->input($obj->titulo, "titulo", 27, "Titulo", "Maximo 27 caracteres",true,"span5"); 
        $data['form_content'] .= $this->input($obj->link, "link", 255, "Link (ver más)", "Maximo 255 caracteres",false,"span5"); 
        $data['form_content'] .= $this->text($obj->texto, "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", false, true, $obj->get_rule("texto","max_length"),3,4);  
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = ""; 
        $data['form_content'] .= $this->inputHidden("", "id", 11); 
        $data['form_content'] .= $this->imagen("", NULL, "Imagen", "120px × 163px",false,true,"span3"); 
        $data['form_content'] .= $this->input("", "titulo", $obj->get_rule("titulo","max_length"),  "Titulo", "Maximo ".$obj->get_rule("titulo","max_length")." caracteres",$obj->is_rule("titulo","required"),"span5"); 
        $data['form_content'] .= $this->input("", "link", $obj->get_rule("link","max_length"), "Link (ver más)", "Maximo ".$obj->get_rule("link","max_length")." caracteres",$obj->is_rule("link","required"),"span5"); 
        $data['form_content'] .= $this->text("", "texto", "Descripción", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", false, true, $obj->get_rule("texto","max_length"),3,4);  
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function lista() {
        $obj = new  $this->model();
        $data['datos'] = $obj->join_related('imagen')->get();
        $data['direct_form'] = $this->name.'/delete'; 
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
                $this->deleteImg($obj->imagen_id); 
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
            $id_file = $obj->imagen_id; 
            $id_file1 = $obj->imagen1_id; 
            if (!$obj->delete()){
                $error = true;
                $msg = $obj->error->string;
            }
            $this->deleteImg($id_file); 
            $this->deleteImg($id_file1); 
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