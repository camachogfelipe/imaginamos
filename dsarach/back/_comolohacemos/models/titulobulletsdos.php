<?php

class Titulobulletsdos extends DataMapper {

    public $model = 'titulobulletsdos';
    public $table = 'titulobulletsdos';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getTitulobulletsdos(){
        return $this->get();
    }
    
    public function saveTitulobulletsdos($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->seccion = $object['seccion'];
        return $this->save();
    }
    
    public function getTitulobulletsdosById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateTitulobulletsdos($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

