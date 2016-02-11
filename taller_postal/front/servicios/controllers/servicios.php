<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Servicios extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);
	}

	public function index() {
                $servicio = new servicio();
                $this->_data['servicios'] = $servicio->join_related('imagen')->join_related('imagen1')->get();
		
                return $this->build();
	}

}
?>