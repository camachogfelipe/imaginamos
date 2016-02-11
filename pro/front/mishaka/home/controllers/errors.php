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
         $this->output->set_status_header('200');
        $this->set_title('Página no encontrada - 404 not found', true);
        return $this->build('error/404');
    }

    
}
