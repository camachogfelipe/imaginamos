<?php

/**
 * Description of Home
 *
 * @author rigobcastro
 */
class Errors extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function error_404() {

        $this->output->set_header("HTTP/1.0 404 Not Found");



        $this->set_title('Página no encontrada o no disponible - Error 404', true);
        return $this->build('error/404');
    }

}
