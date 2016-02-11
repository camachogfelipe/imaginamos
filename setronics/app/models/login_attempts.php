<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class login_attempts extends  DataMapper {

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
    public $login;

    /**
     * @var int Max length is 11.  unsigned.
     */
    public $time;

    public $table = 'login_attempts';

    public $model = 'login_attempts';
    public $primarykey = 'id';
    public $fields = array('id','ip_address','login','time');

    public $has_one = array();
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

                'login' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'LOGIN',
                ),

                'time' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 11 ),
                  'label' => 'TIME',
                )
            );


}