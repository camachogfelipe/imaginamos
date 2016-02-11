<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class redes_sociales extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $red_social;

    /**
     * @var varchar Max length is 255.
     */
    public $link_red;

    /**
     * @var timestamp
     */
    public $fecha_creacion;

    public $table = 'redes_sociales';

    public $model = 'redes_sociales';
    public $primarykey = 'id';
    public $_fields = array('id','red_social','link_red','fecha_creacion');

    public $has_one = array();
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

    public function get_datos() {
        $model = clone $this;
        $model->get();
        $data_net = array();
        foreach ($model as $k) {
            $data_net [] = array(
                'id' => $k->id,
                'nombre' => $k->red_social,
                'link' => $k->link_red,
            );
        }
        return $data_net;
    }

    public function edit_data($input) {
        $data = array(
            'link_red' => $input['value']
        );
        $this->db->where('id', $input['id']);
        if ($this->db->update('cms_redes_sociales', $data))
            return true;
        else
            return false;
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

                'red_social' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'REDSOCIAL',
                ),

                'link_red' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'LINKRED',
                )
            );

}