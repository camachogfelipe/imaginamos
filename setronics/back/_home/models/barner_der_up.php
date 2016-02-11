<?php

class barner_der_up extends DataMapper {

    public $model = 'barner_der_up';
    public $table = 'barner_der_up';
    public $id;
    public $titulo;
    public $subtitulo;
    public $imagen_id;
    public $_fields = array('id','titulo','subtitulo','imagen_id','linea_id','url' ); 
   // public $has_one = array();
   // public $has_many = array( 'imagen' ); 
     public $has_one = array( 
          'imagen' => array(
            'class' => 'imagen',
            'other_field'=>'barner_der_up',
            'join_other_as'=> 'imagen',
            'join_self_as' => 'barner_der_up',
            'join_table' => 'cms_imagen'
           ),
          'linea' => array(
            'class' => 'linea',
            'other_field'=>'barner_der_up',
            'join_other_as'=> 'linea',
            'join_self_as' => 'barner_der_up',
            'join_table' => 'cms_linea'
           )
         
     );
   // public $has_many = array();
    public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titulo'
        ),
         'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
         'imagen_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen'
        ),
        'linea_id' => array(
            'rules' => array('required'),
            'label' => 'Linea'
        )
   
    );


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

