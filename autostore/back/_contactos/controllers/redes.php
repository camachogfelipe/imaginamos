<?php

/**
 * @author rigobcastro
 */
class redes extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'redes.update');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $redes = new redes_sociales();
        $this->_data['datos'] = $redes->get_datos();
        return $this->build('_redes');
    }

    public function edit() {
        $redes = new redes_sociales();
        if ($this->_data['datos'] = $redes->edit_data($this->input->post()))
            $this->set_alert('Datos guardado con exito...!', 'success');
        else
            $this->set_alert('No se pudo guardar los datos', 'error');
        $this->render_json(true);
    }

}