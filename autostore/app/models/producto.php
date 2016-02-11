<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class producto extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 154.
     */
    public $nombre;

    /**
     * @var varchar Max length is 370.
     */
    public $descripcion;

    /**
     * @var double
     */
    public $precio;
    
    /**
     * @var double
     */
    public $precio_envio;

    /**
     * @var tinyint Max length is 4.
     */
    public $recomendado;

    /**
     * @var tinyint Max length is 4.
     */
    public $promocion;

    /**
     * @var timestamp
     */
    public $fecha;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;
     
    /**
     * @var int Max length is 15.
     */  
    public $referencia; 

    public $table = 'producto';

    public $model = 'producto';
    public $primarykey = 'id';
    public $_fields = array('id','referencia','nombre','descripcion','precio','recomendado','promocion','fecha','precio_envio','categoria_id');

    public $has_one =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'producto',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_categoria',
                )
            );



    public $has_many =  array(
                'caracteristica' => array(
                  'class' => 'caracteristica',
                  'other_field' => 'producto',
                  'join_other_as' => 'caracteristica',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_caracteristica',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'producto',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_imagen_producto',
                ),

                'imagen_producto' => array(
                  'class' => 'imagen_producto',
                  'other_field' => 'producto',
                  'join_other_as' => 'imagen_producto',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_imagen_producto',
                ),

                'modelo' => array(
                  'class' => 'producto',
                  'other_field' => 'producto',
                  'join_other_as' => 'modelo',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_modelo',
                ),

                'producto_modelo' => array(
                  'class' => 'producto_modelo',
                  'other_field' => 'producto',
                  'join_other_as' => 'producto_modelo',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_modelo',
                ),

                'venta' => array(
                  'class' => 'producto',
                  'other_field' => 'producto',
                  'join_other_as' => 'venta',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_venta',
                ),

                'producto_venta' => array(
                  'class' => 'producto_venta',
                  'other_field' => 'producto',
                  'join_other_as' => 'producto_venta',
                  'join_self_as' => 'producto',
                  'join_table' => 'cms_producto_venta',
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



    public function get_categoria_list($campo="name",$where=array()) {
        $model = new categoria();
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

    public function get_categoria($join_retale="") {
        $model = new categoria();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_producto_id($this->id);
        }else{
           return $model->get_by_producto_id($this->id);
        }
    }
    
    public function selected_id($related_id = '', $related = 'modelo') {
        $obj = new $this->model();
        $obj->where_related($related, 'id', $related_id)->get();
        if ($obj->exists()) {
            return $obj->id;
        } else {
            return 0;
        }
    }
    
    public function selected_multiple_id($id = '', $related = 'modelo') {
        $obj = new $this->model(); //$this->model();
        $obj->join_related($related)->get_by_id($id);
        $array = array(); 
        if ($obj->exists()) {
            foreach ($obj as $value) {
               $array[] = $value->modelo_id;
            }
        }
        return $array;
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
                  'label' => 'Id',
                ),

                'nombre' => array(
                  'rules' => array( 'max_length' => 154, 'required' ),
                  'label' => 'Nombre',
                ),

                'descripcion' => array(
                  'rules' => array( 'max_length' => 370 ),
                  'label' => 'Descripción',
                ),

                'precio' => array(
                  'rules' => array( 'required' ),
                  'label' => 'Precio',
                ),
                
                'precio_envio' => array(
                  'rules' => array( 'required' ),
                  'label' => 'Precio de Envio',
                ),

                'recomendado' => array(
                  'rules' => array( 'max_length' => 4),
                  'label' => 'Recomendado',
                ),

                'promocion' => array(
                  'rules' => array( 'max_length' => 4),
                  'label' => 'Promocion',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'Categoria',
                ),
                'referencia' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'Referencia',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|view',
                'nombre' => 'input|view|label#Nombre#|span#span3#',
                'referencia' => 'input|view|label#Referencia#|span#span3#',
                'descripcion' => 'texto|view|label#Descripción#|span#span4#',
                'precio' => 'input_money|view|label#Precio#|span#span3#',
                'categoria_id' => 'combox|view|label#Categoria#|span#span3#',
);

}