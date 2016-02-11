<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class dra_rosalinda extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 34.
     */
    public $titulo;

    /**
     * @var varchar Max length is 221.
     */
    public $descripcion;

    /**
     * @var varchar Max length is 41.
     */
    public $titulo_texto;

    /**
     * @var varchar Max length is 995.
     */
    public $texto;

    /**
     * @var varchar Max length is 93.
     */
    public $titulo_link;

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
    public $table = 'dra_rosalinda';
    public $model = 'dra_rosalinda';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'descripcion', 'titulo_texto', 'texto', 'titulo_link', 'link', 'pagina_id', 'imagen_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'imagen_beneficio',
            'join_other_as' => 'imagen',
            'join_self_as' => 'imagen_beneficio',
            'join_table' => 'cms_imagen',
        ),
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'dra_rosalinda',
            'join_other_as' => 'pagina',
            'join_self_as' => 'dra_rosalinda',
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
        'descripcion' => array(
            'rules' => array('max_length' => 221, 'required'),
            'label' => 'DESCRIPCION',
        ),
        'titulo_texto' => array(
            'rules' => array('max_length' => 41, 'required'),
            'label' => 'TITULO TEXTO',
        ),
        'texto' => array(
            'rules' => array('max_length' => 995, 'required'),
            'label' => 'TEXTO',
        ),
        'titulo_link' => array(
            'rules' => array('max_length' => 93),
            'label' => 'TITULO LINK',
        ),
        'link' => array(
            'rules' => array('max_length' => 350),
            'label' => 'LINK',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'Imagen',
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