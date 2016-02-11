<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050050
     */

                        

class Productos_mes extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
                $productos = new producto(); 
                $this->_data['productos_mes'] = $productos->join_related('imagen')->where('recomendado',1)->get();
		return $this->build();
	}

}
?>