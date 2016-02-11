<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class sessions extends  DataMapper {

    /**
     * @var varchar Max length is 40.
     */
    public $session_id;

    /**
     * @var varchar Max length is 45.
     */
    public $ip_address;

    /**
     * @var varchar Max length is 120.
     */
    public $user_agent;

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $last_activity;

    /**
     * @var text
     */
    public $user_data;

    public $table = 'sessions';

    public $model = 'sessions';
    public $primarykey = 'session_id';
    public $_fields = array('session_id','ip_address','user_agent','last_activity','user_data');

    public $has_one =  array(
                'session' => array(
                  'class' => 'session',
                  'other_field' => 'sessions',
                  'join_other_as' => 'session',
                  'join_self_as' => 'sessions',
                  'join_table' => 'cms_session',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
         parent::__construct($id);
    }


    public function get_data($id = '', $campo = 'name') {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
             $obj->get_iterated();
              foreach ($obj as $value) {
                 $arrList = array('id' => $value->id,'name' => $value->{$campo});
              }
              return $arrList;
        } else {
              return $obj->get_by_id($id);
        }
    }



    public function get_session_list($campo="name",$where=array()) {
        $model = new session();
        $model->where($where)->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->{$campo},
            );
        }
        return $arrList;
    }

    public function get_session($join_retale="") {
        $model = new session();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_sessions_id($this->id);
        }else{
           return $model->get_by_sessions_id($this->id);
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


    public function to_array_first_row() {
     $model = clone $this;
     $model->get_by_id(1);
     $datos = array();
      foreach ($this->fields as $key) {
           if($key != 'id')
             $datos[$key] = $model->{$key};
      }
      return $datos;
    }


    public $default_order_by = array('id' => 'desc');


    public function post_model_init($from_cache = FALSE){}


    public function _encrypt($field)
    {
          if (!empty($this->{$field}))
          {
              if (empty($this->salt))
              {
                  $this->salt = md5(uniqid(rand(), true));
              }
             $this->{$field} = sha1($this->salt . $this->{$field});
          }
    }


    public $validation =  array(
                'session_id' => array(
                  'rules' => array( 'max_length' => 40, 'required' ),
                  'label' => 'SESSION',
                ),

                'ip_address' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'IPADDRESS',
                ),

                'user_agent' => array(
                  'rules' => array( 'max_length' => 120, 'required' ),
                  'label' => 'USERAGENT',
                ),

                'last_activity' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10, 'required' ),
                  'label' => 'LASTACTIVITY',
                ),

                'user_data' => array(
                  'rules' => array( 'required' ),
                  'label' => 'USERDATA',
                )
            );


    public $coments =  array(
);

}