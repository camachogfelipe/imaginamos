<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Comunicados_constitucional extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//cargamos datos
    $com = new comunicados();
    $com->order_by("id", "asc")->join_related("demandas_tutelas")->join_related("demandas_tutelas/sentencias")->get();//$com->check_last_query();
    $this->_data['comunicados'] = $com->all_to_array(array("id", "cms_texto", "demandas_tutelas_id", "demandas_tutelas_sentencias_link_path"));
		$com->clear();
		$com->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get();
		$this->_data['anios'] = $com->all_to_array(array("cms_anio"));
		$com->clear();
		$com->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get();
		$this->_data['meses'] = $com->all_to_array(array("cms_mes"));
		$temas = new temas();
    $temas->order_by("id", "asc")->get();
    $this->_data['temas'] = $temas->all_to_array(array("id", "cms_tema"));		
		return $this->build();
	}

	public function buscar() {
		//Cargamos datos basicos
    $com = new comunicados();
		$com->select("DISTINCT(cms_anio) AS cms_anio")->order_by("cms_anio", "asc")->get();
		$this->_data['anios'] = $com->all_to_array(array("cms_anio"));
		$com->clear();
		$com->select("DISTINCT(cms_mes) AS cms_mes")->order_by("cms_mes", "asc")->get();
		$this->_data['meses'] = $com->all_to_array(array("cms_mes"));
		$temas = new temas();
    $temas->order_by("id", "asc")->get();
    $this->_data['temas'] = $temas->all_to_array(array("id", "cms_tema"));
		$com->clear();
		//filtro por anio
		$anio = $this->input->post('anio');
		if(!empty($anio))
			$com->where("cms_anio", $anio);
		//filtro por mes
		$mes = $this->input->post('mes');
		if(!empty($mes))
			$com->where("cms_mes", $mes);
		//filtro por sentencia
		$comencia = $this->input->post('sentencia');
		if(!empty($comencia))
			$com->like("cms_sentencia", $comencia);
		//filtro por demanda
		$demanda = $this->input->post('demanda');
		if(!empty($demanda))
			$com->like_related("demandas_tutelas", "cms_numeroref", $demanda);
		//filtro por magistrados
		$magistrado = $this->input->post('magistrado');
		if(!empty($magistrado))
			$com->where("magistrado_id", $magistrado);
		//filtro por tema
		$tema = $this->input->post('tema');
		if(!empty($tema))
			$com->join_related('temas', "cms_tema", $tema);
		//filtro por norma sentenciada
		$norma = $this->input->post('norma');
		if(!empty($norma))
			$com->like("cms_norma_sentenciada", $norma);
		//filtro por decision
		$decision = $this->input->post('decision');
		if(!empty($decision))
			$com->where("cms_decision", $decision);
		//filtro por otros temas
		$otros_temas = $this->input->post('otros_temas');
		if(!empty($otros_temas))
			$com->like("cms_otros_temas", $otros_temas);
    $com->order_by("id", "asc")->get();
    $this->_data['sentencias'] = $com->all_to_array(array("id", "link_path", "demandas_tutelas_id", "cms_sentencia"));
		//$com->check_last_query();
		return $this->build();
	}
}
?>