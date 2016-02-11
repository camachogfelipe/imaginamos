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
    public $fields = array('id','ip_address','username','password','salt','email','activation_code','forgotten_password_code','forgotten_password_time','remember_code','created_on','last_login','active','first_name','last_name','company','phone','departamento_id');

    public $has_one =  array(
                'departamento' => array(
                  'class' => 'departamento',
                  'other_field' => 'users',
                  'join_other_as' => 'departamento',
                  'join_self_as' => 'users',
                  'join_table' => 'cms_departamento',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
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


}