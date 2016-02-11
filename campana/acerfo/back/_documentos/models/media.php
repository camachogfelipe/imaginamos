<?php

class media extends DataMapper {

    public $table = 'media';
    public $has_many = array();

     public $id;
     public $path;
     public $type;  
 
     public $fields = array('id','path','type');
     
     public $validation = array(
        'path' => array(
            'rules' => array('required'),
            'label' => 'Propietario'
        ),
        'type' => array(
            'rules' => array('required'),
            'label' => 'Tipo Media'
        )
         
        
    );
     
     public function __construct($id = NULL) {
        parent::__construct($id);
    }
}
