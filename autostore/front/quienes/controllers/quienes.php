<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050050
     */

                        

class Quienes extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
            
            $marca = new marca(); 
            $this->_data['marcas'] = $marca->join_related('imagen')->get();
            
            $patrocinadores = new patrocinador(); 
            $this->_data['patrocinadores'] = $patrocinadores->join_related('imagen')->get();
            
            $quienes = new empresa(); 
            $this->_data['quienes'] = $quienes->group_by('id')->join_related('imagen')->get(); 
            
		return $this->build();
	}

}
?>