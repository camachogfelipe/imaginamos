<?php

class Multimedia extends DataMapper {

    public $model = 'multimedia';
    public $table = 'multimedias';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getMultimedia(){
        return $this->get();
    }
    
    public function saveMultimedia($object = "") {
        
        $this->video = $object['video'];
        $this->titulo = $object['titulo'];
        $this->subtitulo = $object['subtitulo'];
        $this->subtitulo2 = $object['subtitulo2'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getMultimediaById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateMultimedia($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

