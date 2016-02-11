<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Elbert Tous
 */
class info_contacto extends Back_Controller {

   
    private $_mapper = 'contacto';
    
    
    public function __construct() {
        parent::__construct();
        $this->superadmin_area();
    }

    
        //param string or model
    public function _setDataModel(&$obj) {
       if($obj instanceof DataMapper)    
          if (is_array($obj->fields))
                {
                    foreach ($obj->fields as $field)
                    { 
                        if($field != 'id')
                         $obj->{$field} = $this->_post($field);
                    }
                }
       return $obj;   
    }
   
      
      public function add()
    {
        $error = false;
        
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|max_length[50]|valid_email');
        $this->form_validation->set_rules('direccion', 'Dirección', 'required|min_length[5]|max_length[21]');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required|min_length[5]|max_length[21]');
        if (!$this->form_validation->run()) {
              $this->set_message("No se pudo crear o actualizar los datos de contacto, favor revise los campos requeridos...!" . $this->form_validation->error_string());  
              $error = true;
            // $this->resetTemp($estado);
        } else {
            $not = new contacto();
            $not->get_by_id($this->_post('id'));
            if ($not->exists()) {
                $this->_setDataModel($not);
                if (!$not->save())
                {
                    $error = true;
                    $this->set_message("Error Ingresando notificacion...!");
                }
            }
        }     
 
        if(!$error)
          $this->set_message("Datos de contacto actualizado con exito...!");

         return $this->render_json($error);
    }

    public function index()
    {
         $not = new contacto();
         $not->get_by_id(1);
         $this->_data['obj'] = $not->get();
         $this->_data['datos'] = $not->get();
         return $this->build('info_contacto/body',array('error' => ' '));
    }
}