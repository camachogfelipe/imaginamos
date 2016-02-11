<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class sentencias extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 250.
     */
    public $link_path;

    /**
     * @var int Max length is 11.
     */
    public $demandas_tutelas_id;

    /**
     * @var int Max length is 11.
     */
    public $magistrados_id;

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
    public $cms_decision;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_tutela_expediente;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_sentencia;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_tutela_derecho;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_demanda;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_norma_sentenciada;

    /**
     * @var varchar Max length is 45.
     */
    public $cms_otros_temas;

    /**
     * @var int Max length is 11.
     */
    public $temas_id;

    /**
     * @var enum 'D','T').
     */
    public $tipo;

    public $table = 'sentencias';

    public $model = 'sentencias';
    public $primarykey = 'id';
    public $_fields = array('id','link_path','demandas_tutelas_id','magistrados_id','cms_anio','cms_mes','cms_decision','cms_tutela_expediente','cms_sentencia','cms_tutela_derecho','cms_demanda','cms_norma_sentenciada','cms_otros_temas','temas_id','tipo');

    public $has_one =  array(
                'demandas_tutelas' => array(
                  'class' => 'demandas_tutelas',
                  'other_field' => 'sentencias',
                  'join_other_as' => 'demandas_tutelas',
                  'join_self_as' => 'sentencias',
                  'join_table' => 'cms_demandas_tutelas',
                ),

                'magistrados' => array(
                  'class' => 'magistrados',
                  'other_field' => 'sentencias',
                  'join_other_as' => 'magistrados',
                  'join_self_as' => 'sentencias',
                  'join_table' => 'cms_magistrados',
                ),

                'temas' => array(
                  'class' => 'temas',
                  'other_field' => 'sentencias',
                  'join_other_as' => 'temas',
                  'join_self_as' => 'sentencias',
                  'join_table' => 'cms_temas',
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


    public function get_demandas_tutelas_list($campo="name",$where=array()) {
         $model = new demandas_tutelas();
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


    public function get_demandas_tutelas($join_retale="") {
         $model = new demandas_tutelas();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_sentencias_id($this->id);
         }else{
         	return $model->get_by_sentencias_id($this->id);
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
         	return $model->join_related($join_retale)->get_by_sentencias_id($this->id);
         }else{
         	return $model->get_by_sentencias_id($this->id);
         }
    }


    public function get_temas_list($campo="name",$where=array()) {
         $model = new temas();
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


    public function get_temas($join_retale="") {
         $model = new temas();
         if($join_retale!=""){
         	return $model->join_related($join_retale)->get_by_sentencias_id($this->id);
         }else{
         	return $model->get_by_sentencias_id($this->id);
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

                'link_path' => array(
                  'rules' => array( 'max_length' => 250, 'required' ),
                  'label' => 'ARCHIVO ADJUNTO',
                ),

                'demandas_tutelas_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'DEMANDA',
                ),

                'magistrados_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'MAGISTRADOS',
                ),

                'cms_anio' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'AÑO',
                ),

                'cms_mes' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'MES',
                ),

                'cms_decision' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'DECISION',
                ),

                'cms_tutela_expediente' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'EXPEDIENTE',
                ),

                'cms_sentencia' => array(
                  'rules' => array( 'max_length' => 45, 'required' ),
                  'label' => 'SENTENCIA',
                ),

                'cms_tutela_derecho' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'DERECHO',
                ),

                'cms_demanda' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'DEMANDA',
                ),

                'cms_norma_sentenciada' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'NORMA SENTENCIADA',
                ),

                'cms_otros_temas' => array(
                  'rules' => array( 'max_length' => 45 ),
                  'label' => 'OTROS TEMAS',
                ),

                'temas_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'TEMAS',
                ),

                'tipo' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TIPO',
                )
            );


    public $coments =  array(
);

}