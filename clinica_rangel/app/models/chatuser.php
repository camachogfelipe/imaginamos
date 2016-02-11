<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class chatuser extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $user_id;

    /**
     * @var varchar Max length is 80.
     */
    public $nick;

    /**
     * @var varchar Max length is 670.
     */
    public $email;

    /**
     * @var int Max length is 11.
     */
    public $pagina_id;
    public $table = 'messaging_users';
    public $model = 'chatuser';
    public $primarykey = 'user_id';
    public $_fields = array('user_id', 'nick', 'email');
    public $has_one = array();
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
    
    public function get_datos($id_page) {
        $model = clone $this;
        $model->get_by_id($id_page);
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