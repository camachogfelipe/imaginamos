<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class video extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 37.
     */
    public $titulo;
    
    /**
     * @var varchar Max length is 37.
     */
    public $texto;

    /**
     * @var varchar Max length is 350.
     */
    public $link;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    public $table = 'video';
    public $model = 'video';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'link', 'texto', 'imagen_id', 'pagina_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'video',
            'join_other_as' => 'imagen',
            'join_self_as' => 'video',
            'join_table' => 'cms_imagen',
        ),
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'video',
            'join_other_as' => 'pagina',
            'join_self_as' => 'video',
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
            'label' => 'Id',
        ),
        'titulo' => array(
            'rules' => array('max_length' => 37),
            'label' => 'Titulo',
        ),
        'link' => array(
            'rules' => array('max_length' => 350, 'required'),
            'label' => 'Link',
        ),
        'texto' => array(
            'rules' => array('max_length' => 117),
            'label' => 'Texto',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'Imagen',
        ),
        'pagina_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'Pagina',
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