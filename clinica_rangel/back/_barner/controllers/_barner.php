<?php

/**
 * @author rigobcastro
 */
class _barner extends Back_Controller {

    protected $admin_area = true;
    private $model = 'barner_principal';
    private $name = "barner";

    public function __construct() {
        parent::__construct();
//        $this->add_modular_assets('js', 'autoload');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Banner Principal"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->barner();
        $data['pag_content_title'] = "Banner Principal";
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
        $obj->join_related('imagen')->join_related('imagen1')->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11); 
        $data['form_content'] .= $this->input($obj->titulo, "titulo", 27, "Titulo", "Maximo 27 caracteres",true,"span4"); 
        $data['form_content'] .= $this->input($obj->link, "link", 255, "Link (ver más)", "Maximo 255 caracteres",false,"span4"); 
        $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen Fondo", "1054px x 400px",false,true,"span4");
         $data['form_content'] .= $this->imagen($obj->imagen1_id,$obj->imagen1_path, "Imagen", "700px x 400px",false,false,"span4", 1); 
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
        $data['form_content'] = ""; 
        $data['form_content'] .= $this->inputHidden("", "id", 11); 
        $data['form_content'] .= $this->input("", "titulo", 27,  "Titulo", "Maximo 27 caracteres",true,"span4"); 
        $data['form_content'] .= $this->input("", "link", 255, "Link (ver más)", "Maximo 255 caracteres",false,"span4"); 
        $data['form_content'] .= $this->imagen("", NULL, "Imagen Fondo", "1054px x 400px",false,true,"span4"); 
        $data['form_content'] .= $this->imagen("", NULL, "Imagen", "700px x 400px",false,false,"span4", 1); 
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function lista() {
        $obj = new  $this->model();
        $data['datos'] = $obj->join_related('imagen')->join_related('imagen1')->get();
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