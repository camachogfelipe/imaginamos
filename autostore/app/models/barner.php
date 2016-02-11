<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class barner extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $titulo_gris;

    /**
     * @var varchar Max length is 10.
     */
    public $titulo_naranja;

    /**
     * @var varchar Max length is 55.
     */
    public $titulo_blanco;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'barner';

    public $model = 'barner';
    public $primarykey = 'id';
    public $_fields = array('id','titulo_gris','titulo_naranja','titulo_blanco','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'barner',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'barner',
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
           return $model->join_related($join_retale)->get_by_barner_id($this->id);
        }else{
           return $model->get_by_barner_id($this->id);
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

                'titulo_gris' => array(
                  'rules' => array( 'max_length' => 40 ),
                  'label' => 'TITULOGRIS',
                ),

                'titulo_naranja' => array(
                  'rules' => array( 'max_length' => 10 ),
                  'label' => 'TITULONARANJA',
                ),

                'titulo_blanco' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'TITULOBLANCO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|view',
                'titulo_gris' => 'input|view|label#Texto Gris#|span#span3#',
                'titulo_naranja' => 'input|view|label#Texto Anaranjado#|span#span3#',
                'titulo_blanco' => 'input|view|label#Texto Blanco#|span#span3#',
                'imagen_id' => 'imagen|view|label#Imagen de Fondp#|span#span3#',
);

}