<?php

class Titulobulletsuno extends DataMapper {

    public $model = 'titulobulletsuno';
    public $table = 'titulobulletsuno';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getTitulobulletsuno(){
        return $this->get();
    }
    
    public function saveTitulobulletsuno($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->seccion = $object['seccion'];
        return $this->save();
    }
    
    public function getTitulobulletsunoById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateTitulobulletsuno($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

