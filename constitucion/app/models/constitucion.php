<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class constitucion extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_articulo;

    /**
     * @var text
     */
    public $cms_texto;

    /**
     * @var int Max length is 11.
     */
    public $titulos_constitucion_id;

    public $table = 'constitucion';

    public $model = 'constitucion';
    public $primarykey = 'id';
    public $_fields = array('id','cms_articulo','cms_texto','titulos_constitucion_id');

    public $has_one =  array(
                'titulos_constitucion' => array(
                  'class' => 'titulos_constitucion',
                  'other_field' => 'constitucion',
                  'join_other_as' => 'titulos_constitucion',
                  'join_self_as' => 'constitucion',
                  'join_table' => 'cms_titulos_constitucion',
                )
            );



    public $has_many =  array(
                'comentarios' => array(
                  'class' => 'comentarios',
                  'other_field' => 'constitucion',
                  'join_other_as' => 'comentarios',
                  'join_self_as' => 'constitucion',
                  'join_table' => 'cms_comentarios',
                ),

                'concordancias' => array(
                  'class' => 'concordancias',
                  'other_field' => 'constitucion',
                  'join_other_as' => 'concordancias',
                  'join_self_as' => 'constitucion',
                  'join_table' => 'cms_concordancias',
                ),

                'demandas_tutelas' => array(
                  'class' => 'demandas_tutelas',
                  'other_field' => 'constitucion',
                  'join_other_as' => 'demandas_tutelas',
                  'join_self_as' => 'constitucion',
                  'join_table' => 'cms_demandas_tutelas',
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


    public function get_titulos_constitucion_list($campo="name",$where=array()) {
         $model = new titulos_constitucion();
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


    public function get_titulos_constitucion($join_retale="") {
         $model = new titulos_constitucion();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_constitucion_id($this->id);
         }else{
         	return $model->get_by_constitucion_id($this->id);
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

                'cms_articulo' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'CMSARTICULO',
                ),

                'cms_texto' => array(
                  'rules' => array( 'required' ),
                  'label' => 'CMSTEXTO',
                ),

                'titulos_constitucion_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'TITULOSCONSTITUCION',
                )
            );


    public $coments =  array(
);

}