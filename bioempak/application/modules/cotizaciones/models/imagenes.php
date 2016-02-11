<?php

class Imagenes extends MX_Controller {

    public $model = 'imagenes';
    public $table = 'images';
    
    public $has_one = array("productos");
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getImagenes(){
        return $this->get();
    }
    
    public function saveImagenes($object = "") {
			$this->imagen = $object['imagen'];
			$this->descripcion = $object['descripcion'];
			$this->comolohacemos_id = $object['comolohacemos_id'];
			return $this->save();
    }
    
    public function getImagenesById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateImagenes($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

