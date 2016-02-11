<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050050
 */
class Emergente_pago extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->buildajax();
    }

}

?>