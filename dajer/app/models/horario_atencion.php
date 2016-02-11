<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class horario_atencion extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $dia_inicio;

    /**
     * @var varchar Max length is 20.
     */
    public $dia_final;

    /**
     * @var varchar Max length is 10.
     */
    public $hora_inicio_temp1;

    /**
     * @var varchar Max length is 10.
     */
    public $hora_inicio_temp2;

    /**
     * @var varchar Max length is 10.
     */
    public $hora_final_temp1;

    /**
     * @var varchar Max length is 10.
     */
    public $hora_final_temp2;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'horario_atencion';

    public $model = 'horario_atencion';
    public $primarykey = 'id';
    public $_fields = array('id','dia_inicio','dia_final','hora_inicio_temp1','hora_inicio_temp2','hora_final_temp1','hora_final_temp2','imagen_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'horario_atencion',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'horario_atencion',
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
                 $arrList['id'] = $value->id;
                 $arrList['name'] = $value->{$campo};
              }
              return $arrList;
        } else {
              return $obj->get_by_id($id);
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

                'dia_inicio' => array(
                  'rules' => array( 'max_length' => 20, 'required' ),
                  'label' => 'DIAINICIO',
                ),

                'dia_final' => array(
                  'rules' => array( 'max_length' => 20, 'required' ),
                  'label' => 'DIAFINAL',
                ),

                'hora_inicio_temp1' => array(
                  'rules' => array( 'max_length' => 10, 'required' ),
                  'label' => 'HORAINICIOTEMP1',
                ),

                'hora_inicio_temp2' => array(
                  'rules' => array( 'max_length' => 10, 'required' ),
                  'label' => 'HORAINICIOTEMP2',
                ),

                'hora_final_temp1' => array(
                  'rules' => array( 'max_length' => 10, 'required' ),
                  'label' => 'HORAFINALTEMP1',
                ),

                'hora_final_temp2' => array(
                  'rules' => array( 'max_length' => 10, 'required' ),
                  'label' => 'HORAFINALTEMP2',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );

}