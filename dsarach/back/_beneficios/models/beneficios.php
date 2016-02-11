<?php

class Beneficios extends DataMapper {

    public $model = 'beneficios';
    public $table = 'beneficios';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getBeneficios(){
        return $this->get();
    }
    
    public function saveBeneficios($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->titulo = $object['titulo'];
        $this->subtitulo = $object['subtitulo'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getBeneficiosById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateBeneficios($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

