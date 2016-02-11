<?php

class Aplicaciones extends DataMapper {

    public $model = 'aplicaciones';
    public $table = 'aplicaciones';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getAplicaciones(){
        return $this->get();
    }
    
    public function saveAplicaciones($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->archivo = $object['archivo'];
        $this->titulo = $object['titulo'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getAplicacionesById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateAplicaciones($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

