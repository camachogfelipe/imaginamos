<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Perfil extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->_data['user'] = $this->session->userdata;
		if(empty($this->_data['user'])) redirect(base_url());
		return $this->build();
	}

}
?>