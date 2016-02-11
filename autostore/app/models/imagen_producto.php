<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class imagen_producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $producto_id;

    public $table = 'imagen_producto';

    public $model = 'imagen_producto';
    public $primarykey = 'id';
    public $_fields = array('id','imagen_id','producto_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'imagen_producto',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'imagen_producto',
                  'join_table' => 'cms_imagen',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'imagen_producto',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'imagen_producto',
                  'join_table' => 'cms_producto',
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
                 $arrList = array('id' => $value->id,'name' => $value->{$campo});
              }
              return $arrList;
        } else {
              return $obj->get_by_id($id);
        }
    }



    public function get_imagen_list($campo="name",$where=array()) {
        $model = new imagen();
        $model->where($where)->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->{$campo},
            );
        }
        return $arrList;
    }

    public function get_imagen($join_retale="") {
        $model = new imagen();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_imagen_producto_id($this->id);
        }else{
           return $model->get_by_imagen_producto_id($this->id);
        }
    }

    public function get_producto_list($campo="name",$where=array()) {
        $model = new producto();
        $model->where($where)->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->{$campo},
            );
        }
        return $arrList;
    }

    public function get_producto($join_retale="") {
        $model = new producto();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_imagen_producto_id($this->id);
        }else{
           return $model->get_by_imagen_producto_id($this->id);
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

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'producto_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PRODUCTO',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|view',
                'imagen_id' => 'imagen|view|label#Imagen de Producto#|span#span3#|instructions#460px × 368px#',
                'producto_id' => 'combox|view|label#Producto#|span#span3#|instructions#Seleccionar un producto#',
);

}