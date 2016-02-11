<?php

class Video extends DataMapper {

    public $model = 'video';
    public $table = 'videoc';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getVideo(){
        return $this->get();
    }
    
    public function saveVideo($object = "") {
        
        $this->video = $object['video'];
        $this->subtitulo = $object['subtitulo'];
        $this->subtitulo2 = $object['subtitulo2'];
        $this->video = $object['video'];
        return $this->save();
    }
    
    public function getVideoById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateVideo($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

