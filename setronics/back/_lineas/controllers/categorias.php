<?php

/**
 * @author rigobcastro
 */
class categorias extends Back_Controller {

    protected $admin_area = true;
    private $model = 'categoria';

    public function __construct() {
        parent::__construct();
        //   $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $obj = new categoria();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
        $this->render_json(!$error);
    }

    public function index() {
        $obj = new categoria();
        $linea = new linea(); 
        $this->_data['lineas'] = $linea->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        $this->_data['ruta_add'] = cms_url('lineas/categorias/add');
        $this->_data['ruta_delete'] = cms_url('lineas/categorias/delete');
        $this->_data['section'] = 'Categorias'; 
        $this->_data['section_title'] = 'Categoria'; 
        $this->_data['datos'] = $obj->join_related('linea')->join_related('imagen')->where('categoria_id',NULL)->where('categoria <>','SERVICIOS')->where('categoria <>','PROPUESTA DE VALOR')->where('categoria <>','CERTIFICACIONES')->get();
        return $this->build('_categorias');
    }

    public function add() {
        $error = false;
        $obj = new categoria();
        $obj->get_by_id($this->_post('id'));
        $msg = "";
        $imagen = new imagen();
         if($obj->exists()){
             $imagen->get_by_id($obj->imagen_id);
             if(!$imagen->exists())
               $imagen->id = ""; 
           }else{
               $imagen->id = ""; 
               $obj->id = "";
           }
        $this->loadVar($obj);
        $dato = $this->simple_upload('path');
        if($dato !== false){
            $imagen->path = $this->dirImg.$dato; 
        }
        if($imagen->save()){
        $obj->imagen_id = $imagen->id; 
        $obj->categoria_id = null;
        if (!$obj->save()) {
            $imagen->delete();
            if($dato!==false)
            @unlink($this->dirImg . $dato);
            $error = true;
            $msg = $obj->error->string;
         }
        }else{
            $error = true;
            $msg = $imagen->error->string;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');

        redirect(cms_url('lineas/categorias'));
    }

    public function edit() {
        $object = new categoria(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}