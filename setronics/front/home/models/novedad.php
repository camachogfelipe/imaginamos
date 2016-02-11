<?php

class novedad extends DataMapper {

    public $model = 'novedad';
    public $table = 'novedad';
    public $_fields = array("id","titulo","fecha","texto","imagen_id","link" ); 
   // public $has_one = array();
   // public $has_many = array( 'imagen' ); 
     public $has_one = array( 'imagen' => array(
            'class' => 'imagen',
            'other_field'=>'novedad',
            'join_other_as'=> 'imagen',
            'join_self_as' => 'novedad',
            'join_table' => 'cms_imagen'
    ));
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

