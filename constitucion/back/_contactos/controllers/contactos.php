<?php

/**
 * @author rigobcastro
 */
class contactos extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'contact.update');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $obj = new\ contacto();
        $datos = $obj->to_array_first_row();
        $this->_data['datos'] = $datos;
        $this->_data["map"] = $this->loadGoogleMaps($datos['cordenada_x'],$datos['cordenada_y']);
        return $this->build('_contacto');
    }

    public function edit(){
        $obj = new\ contacto();
        $obj->get_by_id(1); 
        if($obj->exists()){
            $obj->{$this->input->post('field')} = $this->input->post('value');
          if ($obj->save())
            $this->set_alert('Datos guardado con exito...!', 'success');
          else
            $this->set_alert('No se pudo guardar los datos', 'error');
        }
        $this->render_json(true);
    }
    
     public function edit_xy(){
        $obj = new\ contacto();
        $obj->get_by_id(1); 
        if($obj->exists()){
            $obj->{$this->input->post('field')} = $this->input->post('value');
            $obj->{$this->input->post('field1')} = $this->input->post('value1');
          if ($obj->save())
            $this->set_alert('Datos guardado con exito...!', 'success');
          else
            $this->set_alert('No se pudo guardar los datos', 'error');
        }
        $this->render_json(true);
    }
    
    
     


}