<?php

class Calidad extends DataMapper {

    public $model = 'calidad';
    public $table = 'txtcalidad';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getCalidad(){
        return $this->get();
    }
    
    public function saveCalidad($object = "") {
        
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getCalidadById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateCalidad($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

