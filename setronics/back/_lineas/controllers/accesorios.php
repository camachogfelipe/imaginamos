<?php

/**
 * @author rigobcastro
 */
class accesorios extends Back_Controller {

    protected $admin_area = true;
    private $model = 'accesorio';

    public function __construct() {
        parent::__construct();
        //   $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $obj = new accesorio();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id); 
             $path = $img->path;  
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }else{
                $img->delete();
                $this->delete_files($path);
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
        $this->render_json(!$error);
    }

    public function add() {
         $error = false;
         $obj = new accesorio();
         $obj->get_by_id($this->_post('id'));
         $msg = "";
         $this->loadVar($obj);
         if (!$obj->exists()) {
            $obj->id = "";
         }
          if (!$obj->save()) {
              $error = true;
              $msg = $obj->error->string;
          }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('lineas/index_prod'));
    }

    public function edit() {
        $object = new accesorio(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}