<?php

/**
 * @author rigobcastro
 */
class grupo_producto extends Back_Controller {

    protected $admin_area = true;
    private $model = 'grupo_producto';

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $obj = new grupo();
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
        $obj = new grupo();
        $cat = new categoria();
        $this->_data['categorias'] = $cat->where('categoria <>','SERVICIOS')->where('categoria <>','CERTIFICACIONES')->where('categoria <>','PROPUESTA DE VALOR')->get();
        $linea = new linea(); 
        $this->_data['lineas'] = $linea->where('titulo','LÍNEA DE COMUNICACIÓN')->or_where('titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->get();
        $this->_data['ruta_add'] = cms_url('lineas/grupo_producto/add');
        $this->_data['ruta_delete'] = cms_url('lineas/grupo_producto/delete');
        $this->_data['section'] = 'Tipo de Productos'; 
        $this->_data['section_title'] = 'Tipo de Producto'; 
        $this->_data['datos'] = $obj->join_related('categoria')->where('categoria <>','SERVICIOS')->where('categoria <>','PROPUESTA DE VALOR')->where('categoria <>','CERTIFICACIONES')->get();
        return $this->build('_grupo_producto');
    }

    public function add() {
        $error = false;
        $obj = new grupo();
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
        $obj->grupo = $this->_post('grupo');
        $obj->categoria_id = $this->_post('categoria_id');
        if (!$obj->save()) {
            $error = true;
            $msg = $obj->error->string;
         }
       }else{
           $msg = $imagen->error->string;
           $error = true ;
       }
         
         
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');

        redirect(cms_url('lineas/grupo_producto'));
    }

    public function edit() {
        $object = new grupo(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}