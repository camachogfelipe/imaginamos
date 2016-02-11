<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class planes_usuarios extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $usuariosfront_id;

    /**
     * @var int Max length is 11.
     */
    public $planes_id;

    public $table = 'planes_usuarios';

    public $model = 'planes_usuarios';
    public $primarykey = 'id';
    public $_fields = array('id','usuariosfront_id','planes_id');

    public $has_one =  array(
                'usuariosfront' => array(
                  'class' => 'usuariosfront',
                  'other_field' => 'planes_usuarios',
                  'join_other_as' => 'usuariosfront',
                  'join_self_as' => 'planes_usuarios',
                  'join_table' => 'cms_usuariosfront',
                ),

                'planes' => array(
                  'class' => 'planes',
                  'other_field' => 'planes_usuarios',
                  'join_other_as' => 'planes',
                  'join_self_as' => 'planes_usuarios',
                  'join_table' => 'cms_planes',
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


    public function get_usuariosfront_list($campo="name",$where=array()) {
         $model = new usuariosfront();
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


    public function get_usuariosfront($join_retale="") {
         $model = new usuariosfront();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_planes_usuarios_id($this->id);
         }else{
         	return $model->get_by_planes_usuarios_id($this->id);
         }
    }


    public function get_planes_list($campo="name",$where=array()) {
         $model = new planes();
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


    public function get_planes($join_retale="") {
         $model = new planes();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_planes_usuarios_id($this->id);
         }else{
         	return $model->get_by_planes_usuarios_id($this->id);
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

                'usuariosfront_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'USUARIOSFRONT',
                ),

                'planes_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PLANES',
                )
            );


    public $coments =  array(
);

}