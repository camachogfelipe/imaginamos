<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class imagen extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $path;

    /**
     * @var varchar Max length is 70.
     */
    public $name;

    public $table = 'imagen';

    public $model = 'imagen';
    public $primarykey = 'id';
    public $_fields = array('id','path','name');

    public $has_one = array();
    public $has_many =  array(
                'barner' => array(
                  'class' => 'barner',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner',
                ),

                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'imagen',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_categoria',
                ),

                'empresa' => array(
                  'class' => 'empresa',
                  'other_field' => 'imagen',
                  'join_other_as' => 'empresa',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_empresa',
                ),

                'producto' => array(
                  'class' => 'imagen',
                  'other_field' => 'imagen',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_imagen_producto',
                ),

                'imagen_producto' => array(
                  'class' => 'imagen_producto',
                  'other_field' => 'imagen',
                  'join_other_as' => 'imagen_producto',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_imagen_producto',
                ),

                'marca' => array(
                  'class' => 'marca',
                  'other_field' => 'imagen',
                  'join_other_as' => 'marca',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_marca',
                ),

                'patrocinador' => array(
                  'class' => 'patrocinador',
                  'other_field' => 'imagen',
                  'join_other_as' => 'patrocinador',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_patrocinador',
                ),

                'valor' => array(
                  'class' => 'valor',
                  'other_field' => 'imagen',
                  'join_other_as' => 'valor',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_valor',
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

                'path' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'PATH',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 70 ),
                  'label' => 'NAME',
                )
            );

}