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
    public $fields = array('session_id','ip_address','user_agent','last_activity','user_data');

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


}