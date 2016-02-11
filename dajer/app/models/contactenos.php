<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class contactenos extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 588.
     */
    public $fax;

    /**
     * @var varchar Max length is 100.
     */
    public $ciudad;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'contactenos';

    public $model = 'contactenos';
    public $primarykey = 'id';
    public $_fields = array('id','texto','ciudad','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'contactenos',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'contactenos',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'horario_atencion' => array(
                  'class' => 'horario_atencion',
                  'other_field' => 'contactenos',
                  'join_other_as' => 'horario_atencion',
                  'join_self_as' => 'contactenos',
                  'join_table' => 'cms_horario_atencion',
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

                'texto' => array(
                  'rules' => array( 'max_length' => 588, 'required' ),
                  'label' => 'TEXTO',
                ),

                'ciudad' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'CIUDAD',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );

}