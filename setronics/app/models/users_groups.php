<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class users_groups extends  DataMapper {

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $id;

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $user_id;

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $group_id;

    public $table = 'users_groups';

    public $model = 'users_groups';
    public $primarykey = 'id';
    public $fields = array('id','user_id','group_id');

    public $has_one =  array(
                'user' => array(
                  'class' => 'user',
                  'other_field' => 'users_groups',
                  'join_other_as' => 'user',
                  'join_self_as' => 'users_groups',
                  'join_table' => 'cms_user',
                ),

                'group' => array(
                  'class' => 'group',
                  'other_field' => 'users_groups',
                  'join_other_as' => 'group',
                  'join_self_as' => 'users_groups',
                  'join_table' => 'cms_group',
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

                'user_id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10, 'required' ),
                  'label' => 'USER',
                ),

                'group_id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10, 'required' ),
                  'label' => 'GROUP',
                )
            );


}