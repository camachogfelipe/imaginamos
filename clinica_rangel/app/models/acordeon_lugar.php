<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class acordeon_lugar extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 49.
     */
    public $titulo;

    /**
     * @var varchar Max length is 200.
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
    public $table = 'acordeon_lugar';
    public $model = 'acordeon_lugar';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'texto', 'link', 'imagen_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'acordeon_lugar',
            'join_other_as' => 'imagen',
            'join_self_as' => 'acordeon_lugar',
            'join_table' => 'cms_imagen',
        )
    );
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

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

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'ID',
        ),
        'titulo' => array(
            'rules' => array('max_length' => 49, 'required'),
            'label' => 'TITULO',
        ),
        'texto' => array(
            'rules' => array('max_length' => 200),
            'label' => 'TEXTO',
        ),
        'link' => array(
            'rules' => array('max_length' => 350),
            'label' => 'LINK',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'IMAGEN',
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