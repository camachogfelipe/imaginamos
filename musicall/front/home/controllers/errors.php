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
        $this->set_title('404 - Not found', true);
        return $this->build('error/404');
    }

    
}
