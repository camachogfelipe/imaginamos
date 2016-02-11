<?php

class Banner extends DataMapper {

    public $model = 'banner';
    public $table = 'banners';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getBanner(){
        return $this->get();
    }
    
    public function saveBanner($object = "") {
        
        $this->imagen = $object['imagen'];
        $this->titulo = $object['titulo'];
        $this->subtitulo = $object['subtitulo'];
        $this->descripcion = $object['descripcion'];
        return $this->save();
    }
    
    public function getBannerById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateBanner($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    
    public function eliminar($idP) {
        $this->where('id',$idP)->get();
        return $this->delete();
    }

}

