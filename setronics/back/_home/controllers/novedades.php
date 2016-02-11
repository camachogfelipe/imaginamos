<?php

/**
 * @author rigobcastro
 */
class novedades extends Back_Controller {

    protected $admin_area = true;
    private $model = 'novedad';

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $obj = new novedad();
        $obj->get_by_id($value);
        $error = false;
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id);
             if($img->exists()){
               $url = $img->path;
               if($obj->delete()){
                 if ($img->delete()) {
                   $this->delete_files($url);
                 } else {
                   $error = true;
                 }
               }else{
                  $error = true;
               }
            } else {
              $error = true;
            }
        }else{
            $error = true; 
        }
        if ($error)
            $this->set_alert('Error al eliminar datos.', 'error');
        $this->render_json(!$error);
    }

    public function index() {
        $obj = new novedad();
        $this->_data['datos'] = $obj->join_related('imagen')->get();
        return $this->build('_novedades');
    }
    

    public function save_upload() {
        $error = false;
        $dato = $this->simple_upload('path');
        if ($dato !== false) {
          $imagen = new imagen();
          $obj = new novedad();
          $obj->get_by_id($this->_post("id")); 
           if($obj->exists()){
             $imagen->get_by_id($obj->imagen_id);
             if(!$imagen->exists())
               $imagen->id = ""; 
           }else{
               $imagen->id = ""; 
               $obj->id = "";
           }
            $imagen->path = $this->dirImg . $dato;
            if($imagen->save()){
               $this->loadVar($obj);
               $obj->imagen_id = $imagen->id;
              if(!$obj->save()){
                $imagen->delete();
                @unlink($this->dirImg . $dato);
                $error = true;
              }
            } else {
                @unlink($this->dirImg . $dato);
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos, favor intente mas tarde...!", 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('home/novedades'));
    }

    public function edit() {
        $object = new novedad(); 
        $object->join_related('imagen')->get();
        $extraFields = array('imagen_path','imagen_name');
        echo $this->_get_json_datos($object,$extraFields);
    }

}