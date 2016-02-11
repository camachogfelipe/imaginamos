<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class carro_compras extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var enum 'L','P').
     */
    public $cms_tipo;

    /**
     * @var int Max length is 11.
     */
    public $cms_id;

    /**
     * @var enum 'P','I','A').
     */
    public $cms_tipolibro;

    /**
     * @var decimal Max length is 10. ,2).
     */
    public $cms_valorarticulo;

    /**
     * @var decimal Max length is 10. ,2).
     */
    public $cms_valorenvio;

    /**
     * @var datetime
     */
    public $cms_fecha_compra;

    /**
     * @var enum 'N','Y').
     */
    public $cms_pago;

    /**
     * @var int Max length is 11.
     */
    public $usuariosfront_id;

    /**
     * @var varchar Max length is 50.
     */
    public $cms_nombres;

    /**
     * @var varchar Max length is 100.
     */
    public $cms_apellidos;

    /**
     * @var varchar Max length is 150.
     */
    public $cms_direccion;

    /**
     * @var varchar Max length is 200.
     */
    public $cms_ciudad;

    /**
     * @var varchar Max length is 20.
     */
    public $cms_telefono;

    public $table = 'carro_compras';

    public $model = 'carro_compras';
    public $primarykey = 'id';
    public $_fields = array('id','cms_tipo','cms_id','cms_tipolibro','cms_valorarticulo','cms_valorenvio','cms_fecha_compra','cms_pago','usuariosfront_id','cms_nombres','cms_apellidos','cms_direccion','cms_ciudad','cms_telefono');

    public $has_one =  array(
                'cms' => array(
                  'class' => 'cms',
                  'other_field' => 'carro_compras',
                  'join_other_as' => 'cms',
                  'join_self_as' => 'carro_compras',
                  'join_table' => 'cms_cms',
                ),

                'usuariosfront' => array(
                  'class' => 'usuariosfront',
                  'other_field' => 'carro_compras',
                  'join_other_as' => 'usuariosfront',
                  'join_self_as' => 'carro_compras',
                  'join_table' => 'cms_usuariosfront',
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


    public function get_cms_list($campo="name",$where=array()) {
         $model = new cms();
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


    public function get_cms($join_retale="") {
         $model = new cms();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_carro_compras_id($this->id);
         }else{
         	return $model->get_by_carro_compras_id($this->id);
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
         	return $model->join_related($join_retale)->get_by_carro_compras_id($this->id);
         }else{
         	return $model->get_by_carro_compras_id($this->id);
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

                'cms_tipo' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSTIPO',
                ),

                'cms_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'CMS',
                ),

                'cms_valorarticulo' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSVALORARTICULO',
                ),

                'cms_pago' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSPAGO',
                ),

                'usuariosfront_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'USUARIOSFRONT',
                ),

                'cms_nombres' => array(
                  'rules' => array( 'max_length' => 50 ),
                  'label' => 'CMSNOMBRES',
                ),

                'cms_apellidos' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'CMSAPELLIDOS',
                ),

                'cms_direccion' => array(
                  'rules' => array( 'max_length' => 150 ),
                  'label' => 'CMSDIRECCION',
                ),

                'cms_ciudad' => array(
                  'rules' => array( 'max_length' => 200 ),
                  'label' => 'CMSCIUDAD',
                ),

                'cms_telefono' => array(
                  'rules' => array( 'max_length' => 20 ),
                  'label' => 'CMSTELEFONO',
                )
            );


    public $coments =  array(
);

}