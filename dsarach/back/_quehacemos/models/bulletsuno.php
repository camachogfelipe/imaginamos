<?php

class Bulletsuno extends DataMapper {

    public $model = 'bulletsuno';
    public $table = 'bulletsuno';
    
    public $has_one = array("quehacemos");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getBulletsuno(){
        return $this->get();
    }
    
    public function saveBulletsuno($object = "") {
        
        $this->titulo = $object['titulo'];
        $this->quehacemos_id = $object['quehacemos_id'];
        return $this->save();
    }
    
    public function getBulletsunoById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateBulletsuno($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

