<?php

class Imagenes extends DataMapper {

    public $model = 'imagenes';
    public $table = 'imagenescalidad';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getImagenes(){
        return $this->get();
    }
    
    public function saveImagenes($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->imagen2 = $object['imagen2'];
        
        return $this->save();
    }
    
    public function getImagenesById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateImagenes($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

