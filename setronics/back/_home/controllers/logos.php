<?php

/**
 * @author rigobcastro
 */

class logos extends Back_Controller {

    protected $admin_area = true;
    private $model = 'logo';

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------
    
    public function delete() {
        $value = $this->_get('value');
        $obj = new $this->model();
        $obj->get_by_id($value);
        $error = false; 
          if ($obj->exists()) {
                 $obj_1 = new imagen();
                 $obj_1->get_by_id($obj->id); 
                 $url = $obj_1->path;
                 if($obj->delete()){
                    $this->delete_files($url);
                    $obj_1->delete(); 
                 }else{
                    $$error = true;  
                 }
          } else {
              $error = true;
          }
        if($error)
          $this->set_alert('Error al eliminar datos.', 'error');
     
        $this->render_json(!$error);
    }
    
  
    
    public function index() {
        $this->db->select('cms_imagen.*');
        $this->db->from('cms_imagen');
        $this->db->join('cms_logo', 'cms_imagen.id  = cms_logo.id');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('_logos');
    }
    
    
     public function save_upload()
    {
        $error = false;
        $dato = $this->simple_upload('path');
        if ($dato !== false)
        {   $imagen = new imagen();
            $imagen->id = "";
            $imagen->path = $this->dirImg . $dato; 
            if ($imagen->save())
            {
                $logo = new logo(); 
                $logo->id = $imagen->id;
                $logo->save_as_new();
            }else{
                $imagen->delete();
                @unlink($this->dirImg . $dato);
                $error = true;  
            }
        } else
        {
            $error = true;
        }

        if($error)
         $this->set_alert_session("Error guardando datos, favor intente mas tarde...!",'error');
        else
          $this->set_alert_session("Datos Guardados con exito...!",'info');

        redirect(cms_url('home/logos'));
    }
    
     public function edit() {
            $datos = array();
            $object = new imagen();
            $object->get_by_id($this->_post('id'));
           if($object->exists()){
               $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "path" => str_replace($this->dirImg, "", $object->path)
               ); 
           }else{
              $datos = array( "ok" => false,"error" => true,
              "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }

  

}