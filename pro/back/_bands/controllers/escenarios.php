<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Escenarios extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = new Stage();
        $datos->get();

        $save_url = cms_url('bands/escenarios/save');

        $this->_data['save_url'] = $save_url;
        $this->_data['upload_url'] = cms_url('bands/escenarios_upload');

        $this->_data['datos'] = $datos;
        
       
        $this->_data['delete_url'] = cms_url('bands/escenarios/delete/%d/');


        return $this->build('escenarios/body');
    }

    // ----------------------------------------------------------------------

    public function save($id = null) {
        $datos = new Stage($id);

        $datos->from_array($this->_post(null));
       
        
        if (!$datos->exists()) {
            $datos->created_on = datetime_now();
        }

        // Guardando el subtema con la relacion al tema
        $ok = $datos->save();

        if (!$ok) {
            $this->set_message($datos->error->string);
        }

        // Titulo de la alerta de error
        $this->_data['title_error'] = 'Error al guardar datos';

        // URL de continuación del formulario
        $this->_data['continue_url'] = cms_url('build_a_band/escenarios');

        // ID del nuevo elemento (si llega a guardar)
        $this->_data['id'] = $datos->id;

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}