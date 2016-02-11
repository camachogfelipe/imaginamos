<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class catalogo extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 35.
     */
    public $titulo;

    /**
     * @var varchar Max length is 64.
     */
    public $texto;

    /**
     * @var varchar Max length is 255.
     */
    public $file_path;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    public $table = 'catalogos';

    public $model = 'catalogo';
    public $primarykey = 'id';
    public $_fields = array('id','titulo','texto','file_path','imagen_id','categoria_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'catalogo',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'catalogo',
                  'join_table' => 'cms_imagen',
                ),

                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'catalogo',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'catalogo',
                  'join_table' => 'cms_categoria',
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
               $arrList [] = array(
                  'id' => $value->id,
                  'name' => $value->{$campo}
                ); 
                 
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
            return FALSE;
    }


    public function is_rule($campo, $rule){
         if(in_array($rule, $this->validation[$campo]['rules']))
            return TRUE;
         else
            return FALSE;
    }


    public function to_array_first_row() {
     $model = clone $this;
     $model->get_by_id(1);
     $datos = array();
      foreach ($this->_fields as $key) {
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
                  'rules' => array( 'max_length' => 35, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 64 ),
                  'label' => 'TEXTO',
                ),

                'file_path' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'FILEPATH',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                )
            );


}