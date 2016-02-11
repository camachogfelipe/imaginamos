<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class users extends  DataMapper {

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $id;

    /**
     * @var varbinary Max length is 16.
     */
    public $ip_address;

    /**
     * @var varchar Max length is 100.
     */
    public $username;

    /**
     * @var varchar Max length is 40.
     */
    public $password;

    /**
     * @var varchar Max length is 40.
     */
    public $salt;

    /**
     * @var varchar Max length is 100.
     */
    public $email;

    /**
     * @var varchar Max length is 40.
     */
    public $activation_code;

    /**
     * @var varchar Max length is 40.
     */
    public $forgotten_password_code;

    /**
     * @var int Max length is 11.  unsigned.
     */
    public $forgotten_password_time;

    /**
     * @var varchar Max length is 40.
     */
    public $remember_code;

    /**
     * @var int Max length is 11.  unsigned.
     */
    public $created_on;

    /**
     * @var int Max length is 11.  unsigned.
     */
    public $last_login;

    /**
     * @var tinyint Max length is 1.  unsigned.
     */
    public $active;

    /**
     * @var varchar Max length is 50.
     */
    public $first_name;

    /**
     * @var varchar Max length is 50.
     */
    public $last_name;

    /**
     * @var varchar Max length is 100.
     */
    public $company;

    /**
     * @var varchar Max length is 20.
     */
    public $phone;

    /**
     * @var int Max length is 11.
     */
    public $departamento_id;

    public $table = 'users';

    public $model = 'users';
    public $primarykey = 'id';
    public $_fields = array('id','ip_address','username','password','salt','email','activation_code','forgotten_password_code','forgotten_password_time','remember_code','created_on','last_login','active','first_name','last_name','company','phone','departamento_id');

    public $has_one =  array(
                'departamento' => array(
                  'class' => 'departamento',
                  'other_field' => 'users',
                  'join_other_as' => 'departamento',
                  'join_self_as' => 'users',
                  'join_table' => 'cms_departamento',
                )
            );



    public $has_many =  array(
                'groups' => array(
                  'class' => 'users',
                  'other_field' => 'users',
                  'join_other_as' => 'groups',
                  'join_self_as' => 'users',
                  'join_table' => 'cms_users_groups',
                )
            );



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



    public function get_departamento_list($campo="name",$where=array()) {
        $model = new departamento();
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

    public function get_departamento($join_retale="") {
        $model = new departamento();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_users_id($this->id);
        }else{
           return $model->get_by_users_id($this->id);
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
                'id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10 ),
                  'label' => 'ID',
                ),

                'ip_address' => array(
                  'rules' => array( 'required' ),
                  'label' => 'IPADDRESS',
                ),

                'username' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'USERNAME',
                ),

                'password' => array(
                  'rules' => array( 'max_length' => 40, 'required' ),
                  'label' => 'PASSWORD',
                ),

                'salt' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'SALT',
                ),

                'email' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'EMAIL',
                ),

                'activation_code' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'ACTIVATIONCODE',
                ),

                'forgotten_password_code' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'FORGOTTENPASSWORDCODE',
                ),

                'forgotten_password_time' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 11 ),
                  'label' => 'FORGOTTENPASSWORDTIME',
                ),

                'remember_code' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'REMEMBERCODE',
                ),

                'created_on' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 11, 'required' ),
                  'label' => 'CREATEDON',
                ),

                'last_login' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 11 ),
                  'label' => 'LASTLOGIN',
                ),

                'active' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 1 ),
                  'label' => 'ACTIVE',
                ),

                'first_name' => array(
                  'rules' => array( 'max_length' => 50 ),
                  'label' => 'FIRSTNAME',
                ),

                'last_name' => array(
                  'rules' => array( 'max_length' => 50 ),
                  'label' => 'LASTNAME',
                ),

                'company' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'COMPANY',
                ),

                'phone' => array(
                  'rules' => array( 'max_length' => 20 ),
                  'label' => 'PHONE',
                ),

                'departamento_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DEPARTAMENTO',
                )
            );


    public $coments =  array(
);

}