<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class groups extends  DataMapper {

    /**
     * @var int Max length is 10.  unsigned.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $name;

    /**
     * @var varchar Max length is 100.
     */
    public $description;

    public $table = 'groups';

    public $model = 'groups';
    public $primarykey = 'id';
    public $_fields = array('id','name','description');

    public $has_one = array();
    public $has_many =  array(
                'permissions' => array(
                  'class' => 'groups',
                  'other_field' => 'groups',
                  'join_other_as' => 'permissions',
                  'join_self_as' => 'groups',
                  'join_table' => 'cms_groups_permissions',
                ),

                'users' => array(
                  'class' => 'users',
                  'other_field' => 'groups',
                  'join_other_as' => 'users',
                  'join_self_as' => 'groups',
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

                'name' => array(
                  'rules' => array( 'max_length' => 20, 'required' ),
                  'label' => 'NAME',
                ),

                'description' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'DESCRIPTION',
                )
            );


    public $coments =  array(
);

}