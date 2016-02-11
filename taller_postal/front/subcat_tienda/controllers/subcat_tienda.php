<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Subcat_tienda extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);
                
	}

	public function index() {
		return $this->build();
	}

}
?>