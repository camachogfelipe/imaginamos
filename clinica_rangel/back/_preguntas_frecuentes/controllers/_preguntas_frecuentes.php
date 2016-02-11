<?php

/**
 * @author rigobcastro
 */
class _preguntas_frecuentes extends Back_Controller {

    protected $admin_area = true;
    private $model = 'preguntas_frecuentes';
    private $name = "preguntas_frecuentes";
    private $page_id = false; 

    public function __construct() {
        parent::__construct();
        $this->page_id = $this->page_id('preguntas_frecuentes'); 
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Preguntas Frecuentes"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->barner();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
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
        $obj->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11); 
        $data['form_content'] .= $this->input($obj->pregunta, "pregunta", 92, "Pregunta", "Maximo 92 caracteres",true,"span5"); 
        $data['form_content'] .= $this->text($obj->texto, "texto", "Respuesta", "", false, "span8", true, false, 0,3,4); 
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
        $data['form_content'] = ""; 
        $data['form_content'] .= $this->inputHidden("", "id", 11); 
        $data['form_content'] .= $this->input("", "pregunta", 92, "Pregunta", "Maximo 92 caracteres",true,"span5"); 
        $data['form_content'] .= $this->text("", "texto", "Respuesta", "", false, "span8", true, false, 0,3,4);  
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function lista() {
        $obj = new  $this->model();
        $data['datos'] = $obj->get();
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
          $pg = $this->page_id; 
          if($pg != false){
              $obj->pagina_id = $pg; 
             if (!$obj->save()) {
                $error = true;
                $msg = $obj->error->string;
             }
          }else{
             $error = true;
             if($this->crete_page('home'))
               $msg = "Favor intente nuevamente.";
             else
               $msg = "Favor contactar al administrador de la base de datos.";
          }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url($this->name));
    }


    public function crete_page($page){
        $pag = new pagina(); 
        $pag->id = ""; 
        $pag->titulo = $page; 
        if($pag->save())
          return true; 
        else
          return false; 
    }
    
    public function page_id($page){
        $pag = new pagina(); 
        $pag->get_by_titulo($page); 
        if($pag->exists())
          return $pag->id; 
        else
          return -1; 
    }
    
    public function delete() {
        $error = false;
        $obj = new $this->model();
        $obj->get_by_id($this->_post('value'));
        $msg = "";
        if ($obj->exists()) {
            if (!$obj->delete()){
                $error = true;
                $msg = $obj->error->string;
            }
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