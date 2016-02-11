<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class texto_principal extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 80.
     */
    public $titulo;

    /**
     * @var varchar Max length is 670.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    public $table = 'texto_principal';
    public $model = 'texto_principal';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'texto', 'pagina_id');
    public $has_one = array(
        'pagina' => array(
            'class' => 'pagina',
            'other_field' => 'texto_principal',
            'join_other_as' => 'pagina',
            'join_self_as' => 'texto_principal',
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
            'rules' => array('max_length' => 80, 'required'),
            'label' => 'TITULO',
        ),
        'texto' => array(
            'rules' => array('max_length' => 670),
            'label' => 'TEXTO',
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
    
    public function get_datos($id_page) {
        $model = clone $this;
        $model->get_by_pagina_id($id_page);
        $data_net = array();
        foreach ($this->fields as $key) {
            if($key != 'id')
            $data_net [$key] =  $model->{$key}; 
        }
        return $data_net;
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