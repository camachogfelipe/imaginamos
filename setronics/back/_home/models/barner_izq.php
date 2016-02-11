<?php

class barner_izq extends DataMapper {

      /** table **/
    public $model = 'barner_izq';
    public $table = 'barner_izq';
    
    /** variables **/
    public $id;
    public $titulo;
    public $subtitulo;
    public $text_color1;
    public $text_color2;
    public $imagen_id;
    public $linea_id;
    public $url;
   
    /** lista de fied **/
    public $_fields = array('id','titulo','subtitulo','text_color1','text_color2','imagen_id','linea_id','url' ); 
     
    /** relacion de m **/
     public $has_many = array(); 
    
    /** relacion de 1 **/
     public $has_one = array( 
          'imagen' => array(
            'class' => 'imagen',
            'other_field'=>'barner_izq',
            'join_other_as'=> 'imagen',
            'join_self_as' => 'barner_izq',
            'join_table' => 'cms_imagen'
           ),
          'linea' => array(
            'class' => 'linea',
            'other_field' => 'barner_izq',
            'join_other_as' => 'linea',
            'join_self_as' => 'barner_izq',
            'join_table' => 'cms_linea'
           )
         
     );
     
    /** validaciones **/ 
    public $validation = array(
        'titulo' => array(
            'rules' => array('required'),
            'label' => 'Titulo'
        ),
        'subtitulo' => array(
            'rules' => array('required'),
            'label' => 'Subtitulo'
        ),
        'text_color1' => array(
            'rules' => array('required'),
            'label' => 'texto color blanco'
        ),
        'text_color2' => array(
            'rules' => array('required'),
            'label' => 'Texto color linea'
        ),
        'imagen_id' => array(
            'rules' => array('required'),
            'label' => 'Imagen'
        ),
        'linea_id' => array(
            'rules' => array('required'),
            'label' => 'Linea'
        ),
        'url' => array(
            'rules' => array('required'),
            'label' => 'Url'
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

