<?php

/**
 * @author Elbert Tous Ballesteros
 */
class _contactenos extends Back_Controller {

    protected $admin_area = true;
    public $model = 'horario_atencion';
    public $name = "contactenos";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Contactenos (Horarios e Imagen)"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->barner();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
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
        $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen Fondo", "260px x 260px",false,true,"span3");
        $data['form_content'] .= $this->input($obj->dia_inicio, "dia_inicio", $obj->get_rule("dia_inicio","max_length"), "Dia Inicio (Semana)", "Ejem: lunes, martes...",$obj->is_rule("dia_inicio","required"),"span4"); 
        $data['form_content'] .= $this->input($obj->dia_final, "dia_final", $obj->get_rule("dia_final","max_length"), "Dia Final (Semana)", "Ejem: lunes, martes...",$obj->is_rule("dia_final","required"),"span4"); 
        $data['form_content'] .= $this->inputTime($obj->hora_inicio_temp1, "hora_inicio_temp1", "Hora Incio (Temporada 1)", "Formato 12 Horas",$obj->is_rule("hora_inicio_temp1","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_final_temp1, "hora_final_temp1", "Hora Final (Temporada 1)", "Formato 12 Horas",$obj->is_rule("hora_final_temp1","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_inicio_temp2, "hora_inicio_temp2", "Hora Incio (Temporada 2)", "Formato 12 Horas",$obj->is_rule("hora_inicio_temp2","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_final_temp2, "hora_final_temp2", "Hora Final (Temporada 2)", "Formato 12 Horas",$obj->is_rule("hora_final_temp2","required"),"span2","tp-default"); 
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = ""; 
        $data['form_content'] .= $this->inputHidden("", "id", 11); 
        $data['form_content'] .= $this->imagen("", NULL, "Imagen Fondo", "260px x 260px",false,true,"span3");
        $data['form_content'] .= $this->input($obj->dia_inicio, "dia_inicio", $obj->get_rule("dia_inicio","max_length"), "Dia Inicio (Semana)", "Ejem: lunes, martes...",$obj->is_rule("dia_inicio","required"),"span4"); 
        $data['form_content'] .= $this->input($obj->dia_final, "dia_final", $obj->get_rule("dia_final","max_length"), "Dia Final (Semana)", "Ejem: lunes, martes...",$obj->is_rule("dia_final","required"),"span4"); 
        $data['form_content'] .= $this->inputTime($obj->hora_inicio_temp1, "hora_inicio_temp1", "Hora Incio (Temporada 1)", "Formato 12 Horas",$obj->is_rule("hora_inicio_temp1","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_final_temp1, "hora_final_temp1", "Hora Final (Temporada 1)", "Formato 12 Horas",$obj->is_rule("hora_final_temp1","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_inicio_temp2, "hora_inicio_temp2", "Hora Incio (Temporada 2)", "Formato 12 Horas",$obj->is_rule("hora_inicio_temp2","required"),"span2","tp-default"); 
        $data['form_content'] .= $this->inputTime($obj->hora_final_temp2, "hora_final_temp2", "Hora Final (Temporada 2)", "Formato 12 Horas",$obj->is_rule("hora_final_temp2","required"),"span2","tp-default"); 
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