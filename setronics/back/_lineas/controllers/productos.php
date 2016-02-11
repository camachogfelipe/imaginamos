<?php

/**
 * @author rigobcastro
 */
class productos extends Back_Controller {

    protected $admin_area = true;
    private $model = 'producto';

    public function __construct() {
        parent::__construct();
        //   $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function recomendar() {
        $value = $this->_post('id');
        $obj = new producto();
        $obj->get_by_id($value);
         if ($obj->exists()) {
            $obj->recomendado = ($obj->recomendado==1)?0:1; 
            if($obj->save()){
                $this->render_json(true);
            }else{
                $this->set_alert('No se pudo recomendar el producto seleccionado,'.$msg, 'error');
                $this->render_json(false);
            }
         }
    }
    
    
    public function delete() {
        $value = $this->_get('value');
        $obj = new producto();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
            $path1 = $obj->path_folleto; 
            $path2 = $obj->path_info_tenica; 
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }else{
                $this->delete_files($path1); 
                $this->delete_files($path2); 
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
        $obj = new producto();
        $obj->get_by_id($this->_post('id'));
        $msg = "";
        if (!$obj->exists()) {
            $obj->id = "";
        }
        $this->loadVar($obj); 
        $path1 = $this->upload_file('path_info_tenica','pdf|xls|docx');
        $path2 = $this->upload_file('path_folleto','pdf|xls|docx');
        if($path1 != false)
        $obj->path_info_tenica = $this->dirImg.$path1;
        if($path2 != false)
        $obj->path_folleto = $this->dirImg.$path2;
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
        $object = new producto(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}