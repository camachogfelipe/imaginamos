<?php

class Comolohacemos extends DataMapper {

    public $model = 'comolohacemos';
    public $table = 'comolohacemos';
    
    public $has_one = array();
    public $has_many = array("bulletsuno","bulletsdos","ventajas","imagenes");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getComolohacemos(){
        return $this->get();
    }
    
    public function saveComolohacemos($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->seccion = $object['seccion'];
        return $this->save();
    }
    
    public function getComolohacemosById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateComolohacemos($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

