<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class groups_permissions extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $group_id;

    /**
     * @var int Max length is 11.
     */
    public $permission_id;

    /**
     * @var tinyint Max length is 1.
     */
    public $view;

    /**
     * @var tinyint Max length is 1.
     */
    public $create;

    /**
     * @var tinyint Max length is 1.
     */
    public $update;

    /**
     * @var tinyint Max length is 1.
     */
    public $delete;

    public $table = 'groups_permissions';

    public $model = 'groups_permissions';
    public $primarykey = 'id';
    public $_fields = array('id','group_id','permission_id','view','create','update','delete');

    public $has_one =  array(
                'group' => array(
                  'class' => 'group',
                  'other_field' => 'groups_permissions',
                  'join_other_as' => 'group',
                  'join_self_as' => 'groups_permissions',
                  'join_table' => 'cms_group',
                ),

                'permission' => array(
                  'class' => 'permission',
                  'other_field' => 'groups_permissions',
                  'join_other_as' => 'permission',
                  'join_self_as' => 'groups_permissions',
                  'join_table' => 'cms_permission',
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
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'group_id' => array(
                  'rules' => array( 'min_length' => 0, 'max_length' => 10, 'required' ),
                  'label' => 'GROUP',
                ),

                'permission_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PERMISSION',
                ),

                'view' => array(
                  'rules' => array( 'max_length' => 1 ),
                  'label' => 'VIEW',
                ),

                'create' => array(
                  'rules' => array( 'max_length' => 1 ),
                  'label' => 'CREATE',
                ),

                'update' => array(
                  'rules' => array( 'max_length' => 1 ),
                  'label' => 'UPDATE',
                ),

                'delete' => array(
                  'rules' => array( 'max_length' => 1 ),
                  'label' => 'DELETE',
                )
            );

}