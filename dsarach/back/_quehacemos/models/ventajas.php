<?php

class Ventajas extends DataMapper {

    public $model = 'ventajas';
    public $table = 'ventajas';
    
    public $has_one = array("quehacemos");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getVentajas(){
        return $this->get();
    }
    
    public function saveVentajas($object = "") {
        
        $this->titulo = $object['titulo'];
        $this->quehacemos_id = $object['quehacemos_id'];
        return $this->save();
    }
    
    public function getVentajasById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateVentajas($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

