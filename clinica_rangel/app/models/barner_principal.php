<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class barner_principal extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 27.
     */
    public $titulo;

    /**
     * @var varchar Max length is 255.
     */
    public $link;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
	
	/**
     * @var int Max length is 11.
     */
    public $imagen1_id;
    public $table = 'barner_principal';
    public $model = 'barner_principal';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'link', 'imagen_id','imagen1_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'barner_principal',
            'join_other_as' => 'imagen',
            'join_self_as' => 'barner_principal',
            'join_table' => 'cms_imagen',
        ),
        'imagen1' => array(
            'class' => 'imagen',
            'other_field' => 'barner_principal1',
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
            'rules' => array('max_length' => 27, 'required'),
            'label' => 'TITULO',
        ),
        'link' => array(
            'rules' => array('max_length' => 255),
            'label' => 'LINK',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11, 'required'),
            'label' => 'IMAGEN DE FONDO',
        ),
		'imagen1_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'IMAGEN',
        ),
		
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