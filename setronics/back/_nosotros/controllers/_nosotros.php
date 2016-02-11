<?php

/**
 * @author rigobcastro
 */
class _nosotros extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function index() {
        
        $nosotros = new nosotros(); 
        $nosotros->join_related('imagen')->join_related('parrafo'); 
        $parrafo = new parrafo(); 
        $this->_data['nosotros'] = $nosotros->get_by_id(1);
        $this->_data['parrafo1'] = $parrafo->get_by_id($nosotros->parrafo1_id);
        return $this->build('_nosotros');
    }
    

    public function save_upload() {
        $error = false;
        $msg = ""; 
        $obj = new nosotros();
          
        if (is_numeric($this->_post('id'))){
            $obj->get_by_id($this->_post('id'));
        }else
            $obj->id = "";
          
        $dato = $this->simple_upload('path');
        if ($dato !== false) {
          $imagen = new imagen();
          $imagen->id=$this->_post('imagen_id');  
          $imagen->path = $this->dirImg.str_replace($this->dirImg,"", $dato); 
          $bool0 = $imagen->save();
          
          if(!$bool0){
            $msg .= $imagen->error->string;
             $error = true;
          }
          $parrafo = new parrafo(); 
          $parrafo->id = $this->_post('parrafo_id');  
          $parrafo->texto = $this->_post('parrafo_texto'); 
          $parrafo->titulo = $this->_post('parrafo_titulo'); 
          $bool1 = $parrafo->save(); 
          if(!$bool1){
             $error = true;
              $msg .= $parrafo->error->string;
          }
          $parrafo1 = new parrafo();
          $parrafo1->id=$this->_post('parrafo1_id'); 
          $parrafo1->texto = $this->_post('parrafo1_texto'); 
          $parrafo1->titulo = $this->_post('parrafo1_titulo');
          $bool2 = $parrafo1->save(); 
          if(!$bool2){
            $msg .= $parrafo1->error->string;
           $error = true;
          }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('nosotros'));
    }

    public function edit() {
        $object = new novedad(); 
        $object->join_related('imagen')->get();
        $extraFields = array('imagen_path','imagen_name');
        echo $this->_get_json_datos($object,$extraFields);
    }

}