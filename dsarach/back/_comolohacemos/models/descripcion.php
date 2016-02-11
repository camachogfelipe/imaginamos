<?php

class Descripcion extends DataMapper {

    public $model = 'descripcion';
    public $table = 'descripcionQuehacemos';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getDescripcion(){
        return $this->get();
    }
    
    public function saveDescripcion($object = "") {
        
        $this->video = $object['video'];
        $this->titulo = $object['titulo'];
        $this->subtitulo = $object['subtitulo'];
        $this->subtitulo2 = $object['subtitulo2'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getDescripcionById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateDescripcion($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

