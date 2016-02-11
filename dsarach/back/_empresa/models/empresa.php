<?php

class Empresa extends DataMapper {

    public $model = 'empresa';
    public $table = 'empresas';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getEmpresa(){
        return $this->get();
    }
    
    public function saveEmpresa($object = "") {
        
        $this->video = $object['video'];
        $this->titulo = $object['titulo'];
        $this->subtitulo = $object['subtitulo'];
        $this->subtitulo2 = $object['subtitulo2'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getEmpresaById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateEmpresa($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

