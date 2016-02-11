<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class papel extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var varchar Max length is 100.
     */
    public $titulo;

    /**
     * @var varchar Max length is 500.
     */
    public $texto;

    public $table = 'papel';

    public $model = 'papel';
    public $primarykey = 'id';
    public $_fields = array('id','imagen_id','titulo','texto');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'papel',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'papel',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_categoria_papel',
                ),

                'categoria_papel' => array(
                  'class' => 'categoria_papel',
                  'other_field' => 'papel',
                  'join_other_as' => 'categoria_papel',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_categoria_papel',
                ),

                'color' => array(
                  'class' => 'color',
                  'other_field' => 'papel',
                  'join_other_as' => 'color',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_color_papel',
                ),

                'color_papel' => array(
                  'class' => 'color_papel',
                  'other_field' => 'papel',
                  'join_other_as' => 'color_papel',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_color_papel',
                ),

                'sobre' => array(
                  'class' => 'sobre',
                  'other_field' => 'papel',
                  'join_other_as' => 'sobre',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_sobre_papel',
                ),

                'sobre_papel' => array(
                  'class' => 'sobre_papel',
                  'other_field' => 'papel',
                  'join_other_as' => 'sobre_papel',
                  'join_self_as' => 'papel',
                  'join_table' => 'cms_sobre_papel',
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
         	return $model->join_related($join_retale)->get_by_papel_id($this->id);
         }else{
         	return $model->get_by_papel_id($this->id);
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
        $obj = new $this->model();
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
                  'label' => 'ID',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'IMAGEN',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 500, 'required' ),
                  'label' => 'TEXTO',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|none',
                'imagen_id' => 'imagen|view|label#Imagen#||span#span3#',
                'titulo' => 'input|view|label#Titulo#|span#span5#',
                'texto' => 'text|view|label#Texto Descriptivo#|span#span8#',
);

}