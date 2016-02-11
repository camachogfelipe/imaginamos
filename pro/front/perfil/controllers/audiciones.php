<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Audiciones extends Front_Controller {

    protected $user_area = true;

    public function __construct() {
        parent::__construct();

        // Mostrar header del perfil del usuario
        $this->show_header_perfil = true;

        $this->load->model(array('_audiciones/audicion', '_audiciones/audiciones_aplicacion'));
    }

    // ----------------------------------------------------------------------

    public function index($page = 1) {


        $user = new User;
        $user->get_current();

        if ($this->_get('order')) {
            $user->audicion->order_by($this->_get('order'), $this->_get('type'));
        }

        $datos = $user->audicion->get_paged($page, 10);

        // Setteando la URL del paginador
        $paginator_url = site_url('perfil/audiciones/pagina/%d/');
        $this->_data['paginator_url'] = $_SERVER['QUERY_STRING'] ? $paginator_url . '?' . $_SERVER['QUERY_STRING'] : $paginator_url;

        $this->set_title('Mis audiciones');

        return $this->set_datos($datos)->build('mis_audiciones/body');
    }

    // ----------------------------------------------------------------------

    public function pagina($page) {
        return $this->index($page);
    }

    // ----------------------------------------------------------------------

    public function eliminar($id) {
        $datos = new Audicion($id);

        if (!$datos->exists()) {
            return show_404();
        }

        if (!empty($datos->imagen)) {
            $path = UPLOADSFOLDER . $datos->imagen;

            if (is_file($path)) {
                @unlink($path);
            }
        }
        
        

        $ok = $this->db->where('id', $id)->delete('audiciones');
        
        if ($ok) {
            return redirect('perfil/audiciones?delete_success=' . $id);
        }

        return show_error('Hubo un error en la aplicación, intente de nuevo más tarde.');
    }

    // ----------------------------------------------------------------------
}