<?php

class EmpresaImg extends DataMapper {

    public $model = 'imagenes';
    public $table = 'empresaImagenes';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getEmpresaImg(){
        return $this->get();
    }
    
    public function saveEmpresaImg($object = "") {
        
        $this->imagen = $object['imagen'];
        return $this->save();
    }
    
    public function getEmpresaImgById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateEmpresaImg($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

