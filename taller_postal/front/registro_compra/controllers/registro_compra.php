<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Registro_compra extends Front_Controller {

	public function __construct() {
                $this->_data['current_page'] = strtolower(__CLASS__);  
		parent::__construct();
	}

	public function index() {
            
            
		return $this->build();
	}

}
?>