<?php

/**
 * @author Elbert Tous Ballesteros
 */
class _logos extends Back_Controller {

    protected $admin_area = true;
    public $model = 'logos';
    public $name = "logos";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Logos"; 
        $data['pag'] = 1;
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        $obj = new  $this->model();
        $data['datos'] = $obj->join_related('imagen')->get();
        $data['direct_form'] = $this->name.'/delete'; 
        $data['form_edit'] = "";
        $data['form_edit'] .= $this->inputHidden("", "id", 11); 
        $data['form_edit'] .= $this->imagen("", NULL, "Logo Proveedor", "300px x 20px",false,true,"span12");
        $data['direct_form_edit'] = $this->name.'/add'; 
        return $this->build('_index', $data);
    }

   
   

    public function add() {
        $error = false;
        $msg = "";
        $obj = new $this->model;
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
        $obj = new logos();
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