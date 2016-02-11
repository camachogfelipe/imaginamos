<?php

class logo extends DataMapper {

    public $model = 'logo';
    public $table = 'logo';

    
   // public $has_many = array();
    public $validation = array();


    public function __construct($id = NULL) {
        parent::__construct($id);
    }

 
    public function _addElment($request = array()) {
        foreach ($request as $key => $value) {
          if(array_key_exists($key, $this->fields))
              $this->_elmentValue ($key, $value);      
        }
    }
    
    public function _elmentValue($field, $value) {
        $this->{$field} = $value;      
    }
    
    public function guardar($request, $related_field = '') {
        if(is_array($request)){ 
          $this->_addElment($request); 
          return parent::save($this, $related_field);
        }else{
          return false; 
        }
    }
    

 

}

