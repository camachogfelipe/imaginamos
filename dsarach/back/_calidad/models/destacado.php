<?php

class Destacado extends DataMapper {

    public $model = 'destacado';
    public $table = 'destacadoscalidad';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getDestacado(){
        return $this->get();
    }
    
    public function saveDestacado($object = "") {
        
        $this->link = $object['link'];
        $this->titulo = $object['titulo'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getDestacadoById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateDestacado($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

