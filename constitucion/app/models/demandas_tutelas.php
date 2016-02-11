<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class demandas_tutelas extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var enum 'D','T').
     */
    public $tipo;

    /**
     * @var int Max length is 11.
     */
    public $cms_anio;

    /**
     * @var int Max length is 11.
     */
    public $cms_mes;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_numeroref;

    /**
     * @var varchar Max length is 250.
     */
    public $cms_demandante_accionante;

    /**
     * @var varchar Max length is 250.
     */
    public $link_path;

    /**
     * @var int Max length is 11.
     */
    public $magistrados_id;

    /**
     * @var varchar Max length is 250.
     */
    public $cms_norma_demandada;

    /**
     * @var int Max length is 11.
     */
    public $constitucion_id;

    public $table = 'demandas_tutelas';

    public $model = 'demandas_tutelas';
    public $primarykey = 'id';
    public $_fields = array('id','tipo','cms_anio','cms_mes','cms_numeroref','cms_demandante_accionante','link_path','magistrados_id','cms_norma_demandada','constitucion_id');

    public $has_one =  array(
                'magistrados' => array(
                  'class' => 'magistrados',
                  'other_field' => 'demandas_tutelas',
                  'join_other_as' => 'magistrados',
                  'join_self_as' => 'demandas_tutelas',
                  'join_table' => 'cms_magistrados',
                ),

                'constitucion' => array(
                  'class' => 'constitucion',
                  'other_field' => 'demandas_tutelas',
                  'join_other_as' => 'constitucion',
                  'join_self_as' => 'demandas_tutelas',
                  'join_table' => 'cms_constitucion',
                )
            );



    public $has_many =  array(
                'comunicados' => array(
                  'class' => 'comunicados',
                  'other_field' => 'demandas_tutelas',
                  'join_other_as' => 'comunicados',
                  'join_self_as' => 'demandas_tutelas',
                  'join_table' => 'cms_comunicados',
                ),

                'sentencias' => array(
                  'class' => 'sentencias',
                  'other_field' => 'demandas_tutelas',
                  'join_other_as' => 'sentencias',
                  'join_self_as' => 'demandas_tutelas',
                  'join_table' => 'cms_sentencias',
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


    public function get_magistrados_list($campo="name",$where=array()) {
         $model = new magistrados();
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


    public function get_magistrados($join_retale="") {
         $model = new magistrados();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_demandas_tutelas_id($this->id);
         }else{
         	return $model->get_by_demandas_tutelas_id($this->id);
         }
    }


    public function get_constitucion_list($campo="name",$where=array()) {
         $model = new constitucion();
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


    public function get_constitucion($join_retale="") {
         $model = new constitucion();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_demandas_tutelas_id($this->id);
         }else{
         	return $model->get_by_demandas_tutelas_id($this->id);
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

                'cms_anio' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'AÑO',
                ),

                'cms_mes' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'MES',
                ),

                'cms_numeroref' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'NUMERO REF',
                ),

                'cms_demandante_accionante' => array(
                  'rules' => array( 'max_length' => 250 ),
                  'label' => 'CMSDEMANDANTEACCIONANTE',
                ),

                'link_path' => array(
                  'rules' => array( 'max_length' => 250, 'required' ),
                  'label' => 'ARCHIVO ADJUNTO',
                ),

                'magistrados_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'MAGISTRADO',
                ),

                'cms_norma_demandada' => array(
                  'rules' => array( 'max_length' => 250 ),
                  'label' => 'NORMA DEMANDADA',
                ),

                'constitucion_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CONSTITUCION',
                )
            );


    public $coments =  array(
);

}