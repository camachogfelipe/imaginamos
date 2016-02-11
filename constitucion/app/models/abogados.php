<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class abogados extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 250.
     */
    public $cms_nombre;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_especialidad;

    /**
     * @var text
     */
    public $cms_descripcion;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'abogados';

    public $model = 'abogados';
    public $primarykey = 'id';
    public $_fields = array('id','cms_nombre','cms_especialidad','cms_descripcion','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'abogados',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'abogados',
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
         	return $model->join_related($join_retale)->get_by_abogados_id($this->id);
         }else{
         	return $model->get_by_abogados_id($this->id);
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

                'cms_nombre' => array(
                  'rules' => array( 'max_length' => 250, 'required' ),
                  'label' => 'CMSNOMBRE',
                ),

                'cms_especialidad' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'CMSESPECIALIDAD',
                ),

                'cms_descripcion' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSDESCRIPCION',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


    public $coments =  array(
);

}