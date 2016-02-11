<?php

/**
 * @author rigobcastro
 */
class _propuesta extends Back_Controller {

    protected $admin_area = true;
    private $model = 'propuesta';

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $propuesta = new propuesta_valor();
        $this->_data['propuesta'] = $propuesta->join_related('categoria')->get_by_id(1); 
        return $this->build('_propuesta');
    }
    

    public function add() {
        $error = false;
        $msg = ""; 
          $categoria = new categoria(); 
          $categoria->get_by_categoria('PROPUESTA DE VALOR');
          if($categoria->exists()){
               $obj = new propuesta_valor(); 
               $obj->get_by_id(1);
               if(!$obj->exists()){
                 $obj->id = 1; 
                 $obj->texto = $this->_post('texto'); 
                 $obj->categoria_id = $categoria->id;
                if(!$obj->save_as_new()){
                  $error = true;
                  $msg = $obj->error->string;
                }
               }else{
                 $obj->texto = $this->_post('texto'); 
                 if(!$obj->save()){
                  $error = true;
                  $msg = $obj->error->string;
                }   
               }
          }else{
              $error = true;
              $msg = "No existe la categoria PROPUESTA DE VALOR";
          }
          
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('propuesta'));
    }

    public function edit() {
        $object = new propuesta_valor(); 
        $object->get();
        echo $this->_get_json_datos($object);
    }

}