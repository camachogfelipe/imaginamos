<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class modelo extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $nombre;

    /**
     * @var int Max length is 11.
     */
    public $marca_id;

    public $table = 'modelo';

    public $model = 'modelo';
    public $primarykey = 'id';
    public $_fields = array('id','nombre','marca_id');

    public $has_one =  array(
                'marca' => array(
                  'class' => 'marca',
                  'other_field' => 'modelo',
                  'join_other_as' => 'marca',
                  'join_self_as' => 'modelo',
                  'join_table' => 'cms_marca',
                )
            );



    public $has_many =  array(
                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'modelo',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'modelo',
                  'join_table' => 'cms_producto_modelo',
                ),

                'producto_modelo' => array(
                  'class' => 'producto_modelo',
                  'other_field' => 'modelo',
                  'join_other_as' => 'producto_modelo',
                  'join_self_as' => 'modelo',
                  'join_table' => 'cms_producto_modelo',
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



    public function get_marca_list($campo="name",$where=array()) {
        $model = new marca();
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

    public function get_marca($join_retale="") {
        $model = new marca();
        if($join_retale!=""){
           return $model->join_related($join_retale)->get_by_modelo_id($this->id);
        }else{
           return $model->get_by_modelo_id($this->id);
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
    
    public function get_select_multiple($id = '', $campo = 'name',$group = 'marca_nombre', $related=NULL) {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
             if($related != NULL)
              $obj->join_related($related)->get();
             else
              $obj->get();   
             
             foreach ($obj as $value) {
                 $arrList[$value->{$group}][] = array('id' => $value->id, 'name' => $value->{$campo});
              }
              return $arrList;
        } else {
              return $obj->get_by_id($id);
        }
    }
    
    public function selected_multiple_id($id = '', $related = 'modelo') {
        $obj = new $this->model(); //$this->model();
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

                'nombre' => array(
                  'rules' => array( 'max_length' => 100, 'required' ),
                  'label' => 'NOMBRE',
                ),

                'marca_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'MARCA',
                )
            );


    public $coments =  array(
                'id' => 'inputhidden|view',
                'nombre' => 'input|view|label#Modelo#|span#span3#',
                'marca_id' => 'combox|view|label#Marca#|span#span3#',
);

}