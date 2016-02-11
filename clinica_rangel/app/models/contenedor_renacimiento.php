<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class contenedor_renacimiento extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 36.
     */
    public $titulo_parrafo1;

    /**
     * @var varchar Max length is 36.
     */
    public $titulo_parrafo2;

    /**
     * @var varchar Max length is 530.
     */
    public $parrafo1;

    /**
     * @var varchar Max length is 530.
     */
    public $parrafo2;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
    public $table = 'contenedor_renacimiento';
    public $model = 'contenedor_renacimiento';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo_parrafo1', 'titulo_parrafo2', 'parrafo1', 'parrafo2', 'pagina_id', 'imagen_id');
    public $has_one = array(
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'contenedor_renacimiento',
            'join_other_as' => 'pagina',
            'join_self_as' => 'contenedor_renacimiento',
            'join_table' => 'cms_pagina',
        ),
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'contenedor_renacimiento',
            'join_other_as' => 'imagen',
            'join_self_as' => 'contenedor_renacimiento',
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
            'label' => 'ID',
        ),
        'titulo_parrafo1' => array(
            'rules' => array('max_length' => 36),
            'label' => 'TITULOPARRAFO1',
        ),
        'titulo_parrafo2' => array(
            'rules' => array('max_length' => 36),
            'label' => 'TITULOPARRAFO2',
        ),
        'parrafo1' => array(
            'rules' => array('max_length' => 530),
            'label' => 'PARRAFO1',
        ),
        'parrafo2' => array(
            'rules' => array('max_length' => 530),
            'label' => 'PARRAFO2',
        ),
        'pagina_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'PAGINA',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'IMAGEN',
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