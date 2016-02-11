<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();

        // Mostrar banner principal
        $this->show_principal_banner = true;
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->set_title('Bienvenidos a Inshaka Entertainment', true);

        // Cargando noticias
        $news = new News;
        $this->_data['news'] = $news->get();

        // Cargando audiciones
        $audiciones = new Audicion;
        $this->_data['audiciones'] = $audiciones->get_only_actives();

        // Cargando clasificados
        $clasificados = new Clasificado;
        $this->_data['clasificados'] = $clasificados->get_only_actives();

        $body = 'body';
        if ($this->is_usuario()) {
            $user = new User;
            $user->get_current();

            $body = 'body_logged';


            $bandas = new Band();

            $where_in_bands = array();
            $bands_instruments_user = new Bands_instruments_user;
            $bands_instruments_user->where('is_invited', true)->get_by_related($user);
         

            $this->_data['mis_bandas'] = $bands_instruments_user;

            $audiciones_aplicaciones = new Audiciones_aplicacion;

            $audiciones_aplicaciones->get_by_related_user($user);

            $this->_data['audiciones'] = $audiciones_aplicaciones->audicion;

            $directorio = new Directorio;
            $this->_data['directorio'] = $directorio->get_by_related($user);

            $clasificados_categoria = new Clasificados_categoria;
            $this->_data['clasificados_categoria'] = $clasificados_categoria->get();
        }

        return $this->build($body);
    }

    // ----------------------------------------------------------------------
}
