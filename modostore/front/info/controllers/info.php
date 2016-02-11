<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Info extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($id = '') {
            
            $informacion = new informacion(); 
            $this->_data['informacion_get'] = $informacion->get_by_id($id); 
            
		return $this->build();
	}

}
?>