<?php

    /**
     * @autor Felipe Camacho
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Modal_corte extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$tipo = $this->uri->segment(2);
		$id = $this->uri->segment(3);
		switch($tipo) :
			case "demanda"	:
			default					:
				if(!empty($id)) :
					//Cargamos datos basicos
					$dem = new demandas_tutelas();
					$dem->join_related("constitucion")->order_by("id", "asc")->get_where(array("id" => $id));
					$this->_data['demandas'] = $dem->all_to_array(array("id", "link_path", "cms_numeroref", "constitucion_cms_texto"));
				endif;
				break;
			case "sentencia"					:
				if(!empty($id)) :
					//Cargamos datos basicos
					$dem = new sentencias();
					$dem->join_related("demandas_tutelas")->join_related("demandas_tutelas/constitucion")->order_by("id", "asc")->get_where(array("demandas_tutelas_id" => $id));
					$this->_data['demandas'] = $dem->all_to_array(array("id", "link_path", "demandas_tutelas_cms_numeroref", "demandas_tutelas_constitucion_cms_texto"));
				endif;
				break;
		endswitch;
		return $this->buildajax();
	}

}
?>