<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Build_a_band extends Front_Controller {

    protected $user_area = true;
    private $_datos = null;

    public function __construct() {
        parent::__construct();

        // Mostrar header del perfil del usuario
        $this->show_header_perfil = true;

        $this->load->model(array('_bands/stage', '_bands/instrument', '_bands/musical_gender', '_bands/band', '_bands/bands_instrument', '_bands/bands_instruments_user'));

        $this->_datos = new \User;
        $this->_datos->get_current();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = $this->_datos->band;

        $this->set_title('Mi Build a Band');

        return $this->set_datos($datos)->build('mi_build_a_band/body');
    }

    // ----------------------------------------------------------------------

    public function eliminar($band_id = null) {

        $datos = & $this->_datos->band;

        $datos->get_by_id($band_id);
        
        if(!$datos->exists()){
            return show_404();
        }
        
        if($this->db->where('id', $datos->id)->delete('bands')){
            return redirect('perfil/build-a-band?delete='.$band_id);
        }
        
        return show_error('Hubo un error en la aplicación, intente de nuevo más tarde.', 500, 'Error al eliminar');
    }

    // ----------------------------------------------------------------------
}