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
                'acerca_de' => array(
                  'class' => 'acerca_de',
                  'other_field' => 'imagen',
                  'join_other_as' => 'acerca_de',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_acerca_de',
                ),

                'barner' => array(
                  'class' => 'barner',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner',
                ),

                'barner_cafe' => array(
                  'class' => 'barner_cafe',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner_cafe',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner_cafe',
                ),

                'bienvenida' => array(
                  'class' => 'bienvenida',
                  'other_field' => 'imagen',
                  'join_other_as' => 'bienvenida',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_bienvenida',
                ),

                'catalogo' => array(
                  'class' => 'catalogo',
                  'other_field' => 'imagen',
                  'join_other_as' => 'catalogo',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_catalogos',
                ),

                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'imagen',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_categoria',
                ),

                'contactenos' => array(
                  'class' => 'contactenos',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contactenos',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contactenos',
                ),

                'destacado' => array(
                  'class' => 'destacado',
                  'other_field' => 'imagen',
                  'join_other_as' => 'destacado',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_destacado',
                ),

                'destacado_slider' => array(
                  'class' => 'destacado_slider',
                  'other_field' => 'imagen',
                  'join_other_as' => 'destacado_slider',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_destacado_slider',
                ),

                'fondo_cafe' => array(
                  'class' => 'fondo_cafe',
                  'other_field' => 'imagen',
                  'join_other_as' => 'fondo_cafe',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_fondo_cafe',
                ),

                'horario_atencion' => array(
                  'class' => 'horario_atencion',
                  'other_field' => 'imagen',
                  'join_other_as' => 'horario_atencion',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_horario_atencion',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'imagen',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_imagen_producto',
                ),

                'logos' => array(
                  'class' => 'logos',
                  'other_field' => 'imagen',
                  'join_other_as' => 'logos',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_logos',
                ),

                'servicio' => array(
                  'class' => 'servicio',
                  'other_field' => 'imagen',
                  'join_other_as' => 'servicio',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_servicio',
                ),

                'video' => array(
                  'class' => 'video',
                  'other_field' => 'imagen',
                  'join_other_as' => 'video',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_video',
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