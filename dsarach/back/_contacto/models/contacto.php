<?php

class Contacto extends DataMapper {

    public $model = 'contacto';
    public $table = 'infocontacto';
    
    public $has_one = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function getContacto(){
        return $this->get();
    }
    
   
    public function getContactoById($id = ""){
        
        return $this->get_by_id($id);
    }
    
    public function updateContacto($datos = ""){
       return $this->where('id',$datos["id"])->update($datos, TRUE);
    }
    

}

