<?php

class Quehacemos extends DataMapper {

    public $model = 'quehacemos';
    public $table = 'quehacemos';
    
    public $has_one = array();
    public $has_many = array("bulletsuno","bulletsdos","ventajas","imagenes");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getQuehacemos(){
        return $this->get();
    }
    
    public function saveQuehacemos($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->seccion = $object['seccion'];
        return $this->save();
    }
    
    public function getQuehacemosById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateQuehacemos($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

