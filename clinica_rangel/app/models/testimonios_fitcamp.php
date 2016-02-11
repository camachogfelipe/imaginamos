<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class testimonios_fitcamp extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 37.
     */
    public $nombre;

    /**
     * @var char Max length is 5.
     */
    public $peso_antes;

    /**
     * @var char Max length is 5.
     */
    public $peso_despues;

    /**
     * @var varchar Max length is 98.
     */
    public $descripcion_persona;

    /**
     * @var text
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    
    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
    
    
    public $table = 'testimonios_fitcamp';
    public $model = 'testimonios_fitcamp';
    public $primarykey = 'id';
    public $_fields = array('id', 'nombre', 'peso_antes', 'peso_despues', 'descripcion_persona', 'texto', 'pagina_id','imagen_id');
    public $has_one = array(
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'testimonios_fitcamp',
            'join_other_as' => 'pagina',
            'join_self_as' => 'testimonios_fitcamp',
            'join_table' => 'cms_pagina',
        ), 
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'testimonios_fitcamp',
            'join_other_as' => 'imagen',
            'join_self_as' => 'testimonios_fitcamp',
            'join_table' => 'cms_imagen',
        )
    );
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'Id',
        ),
        'nombre' => array(
            'rules' => array('max_length' => 37, 'required'),
            'label' => 'Nombre',
        ),
        'peso_antes' => array(
            'rules' => array('max_length' => 5, 'required'),
            'label' => 'Peso Antes',
        ),
        'peso_despues' => array(
            'rules' => array('max_length' => 5, 'required'),
            'label' => 'Peso Despues',
        ),
        'descripcion_persona' => array(
            'rules' => array('max_length' => 98),
            'label' => 'Pescripcion Persona',
        ),
        'texto' => array(
            'rules' => array('required'),
            'label' => 'Texto',
        ),
        'pagina_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'Pagina',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'Imagen',
        )
    );

    function get_data($id = '', $campo = 'name') {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
            $obj->get_iterated();
            foreach ($obj as $value) {
                $arrList['id'] = $value->id;
                $arrList['name'] = $value->{$campo};
            }
            return $arrList;
        } else {
            return $obj->get_by_id($id);
        }
    }
    
   public function get_rule($campo, $rule){
        if(array_key_exists($rule, $this->validation[$campo]['rules']))
          return $this->validation[$campo]['rules'][$rule];
        else
          return false;  
    }
    
    public function is_rule($campo, $rule){
        if(in_array($rule, $this->validation[$campo]['rules']))
          return true;
        else
          return false;  
    }

}