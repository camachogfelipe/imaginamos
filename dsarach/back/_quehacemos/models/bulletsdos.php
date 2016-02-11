<?php

class Bulletsdos extends DataMapper {

    public $model = 'bulletsdos';
    public $table = 'bulletsdos';
    
    public $has_one = array("quehacemos");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getBulletsdos(){
        return $this->get();
    }
    
    public function saveBulletsdos($object = "") {
        
        $this->titulo = $object['titulo'];
        $this->quehacemos_id = $object['quehacemos_id'];
        return $this->save();
    }
    
    public function getBulletsdosById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateBulletsdos($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

