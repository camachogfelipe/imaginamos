<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class contenedor_alimentacion extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 34.
     */
    public $titulo;

    /**
     * @var varchar Max length is 22.
     */
    public $subtiulo;

    /**
     * @var varchar Max length is 470.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    public $table = 'contenedor_alimentacion';
    public $model = 'contenedor_alimentacion';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'subtiulo', 'texto', 'imagen_id', 'pagina_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'contenedor_alimentacion',
            'join_other_as' => 'imagen',
            'join_self_as' => 'contenedor_alimentacion',
            'join_table' => 'cms_imagen',
        ),
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'contenedor_alimentacion',
            'join_other_as' => 'pagina',
            'join_self_as' => 'contenedor_alimentacion',
            'join_table' => 'cms_pagina',
        )
    );
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'ID',
        ),
        'titulo' => array(
            'rules' => array('max_length' => 34, 'required'),
            'label' => 'TITULO',
        ),
        'subtiulo' => array(
            'rules' => array('max_length' => 22),
            'label' => 'SUBTIULO',
        ),
        'texto' => array(
            'rules' => array('max_length' => 550),
            'label' => 'TEXTO',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'IMAGEN',
        ),
        'pagina_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'PAGINA',
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