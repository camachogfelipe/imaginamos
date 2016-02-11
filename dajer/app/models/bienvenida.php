<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class bienvenida extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 33.
     */
    public $titulo;

    /**
     * @var varchar Max length is 480.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'bienvenida';

    public $model = 'bienvenida';
    public $primarykey = 'id';
    public $_fields = array('id','titulo','texto','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'bienvenida',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'bienvenida',
                  'join_table' => 'cms_imagen',
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

                'titulo' => array(
                  'rules' => array( 'max_length' => 33, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 480, 'required' ),
                  'label' => 'TEXTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );

}