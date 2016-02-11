<?php

class propietario extends DataMapper {

    public $table = 'propietario';
    public $has_many = array();

     public $id;
     public $propietario;
     public $media_id;  
 
     public $fields = array('id','propietario','media_id');
     
     public $validation = array(
        'propietario' => array(
            'rules' => array('required'),
            'label' => 'propietario'
        ),
         'media_id' => array(
            'rules' => array('required'),
            'label' => 'img'
        )
         
        
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

}