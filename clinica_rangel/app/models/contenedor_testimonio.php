<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class contenedor_testimonio extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 44.
     */
    public $titulo;

    /**
     * @var varchar Max length is 360.
     */
    public $texto;

    /**
     * @var varchar Max length is 41.
     */
    public $nombre;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
    public $table = 'contenedor_testimonio';
    public $model = 'contenedor_testimonio';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'texto', 'nombre', 'pagina_id', 'imagen_id');
    public $has_one = array(
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'contenedor_testimonio',
            'join_other_as' => 'pagina',
            'join_self_as' => 'contenedor_testimonio',
            'join_table' => 'cms_pagina',
        ),
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'contenedor_testimonio',
            'join_other_as' => 'imagen',
            'join_self_as' => 'contenedor_testimonio',
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
        'titulo' => array(
            'rules' => array('max_length' => 44, 'required'),
            'label' => 'TITULO',
        ),
        'texto' => array(
            'rules' => array('max_length' => 360, 'required'),
            'label' => 'TEXTO',
        ),
        'nombre' => array(
            'rules' => array('max_length' => 41, 'required'),
            'label' => 'NOMBRE',
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