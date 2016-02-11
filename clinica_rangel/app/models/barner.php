<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class barner extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
    
     /**
     * @var int Max length is 11.
     */
    public $imagen1_id;
	
     /**
     * @var int Max length is 11.
     */
    public $imagen2_id;
    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    
    public $table = 'barner';
    public $model = 'barner';
    public $primarykey = 'id';
    public $_fields = array('id', 'imagen_id', 'pagina_id', 'imagen1_id', 'imagen2_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'barner',
            'join_other_as' => 'imagen',
            'join_self_as' => 'barner',
            'join_table' => 'cms_imagen',
        ),
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'barner',
            'join_other_as' => 'pagina',
            'join_self_as' => 'barner',
            'join_table' => 'cms_pagina',
        ),
        'imagen1' => array(
            'class' => 'imagen',
            'other_field' => 'barner1',
            'join_table' => 'cms_imagen',
        ),
        'imagen2' => array(
            'class' => 'imagen',
            'other_field' => 'barner2',
            'join_table' => 'cms_imagen',
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

    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'ID',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'Imagen Fondo',
        ),
        'imagen1_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'Imagen',
        ),
		'imagen2_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'Imagen',
        ),
        'pagina_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'PAGINA',
        )
    );
    
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