<?php

/**
 * @author Felipe Camacho
 */
class sentenciasconstitucionalidad extends Back_Controller {

    protected $admin_area = true;
    public $model = 'sentencias';
    public $name = "sentenciasconstitucionalidad";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Sentencias de constitucionalidad"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->sentencias();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function sentencias() {
        $data['path_delete'] = cms_url("jurisprudencia/".$this->name.'/delete');
        $data['path_add'] = cms_url("jurisprudencia/".$this->name.'/form_add');
        $data['path_edit'] = cms_url("jurisprudencia/".$this->name.'/form_edit');
        $data['path_list'] = cms_url("jurisprudencia/".$this->name.'/lista');
				$data['breadcrum'] = array("Jurisprudencia", "Sentencias", "De constitucionalidad");
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
				$obj->get_by_id($this->_post('id'));
				$datamag = $obj->get_magistrados_list("cms_nombre");
				$datadem = $obj->get_demandas_tutelas_list("cms_norma_demandada");
				$datatem = $obj->get_temas_list("cms_tema");
				
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				$data['form_content'] .= $this->inputHidden("D", "tipo", 11);
				
				$data['form_content'] .= $this->combox($obj->demandas_tutelas_id, $datadem, "demandas_tutelas_id", "Demanda", "Seleccione la demanda", $obj->is_rule("demandas_tutelas_id", "required"), "span3");
				
				$data['form_content'] .= $this->combox($obj->magistrado_id, $datamag, "magistrados_id", "Magistrado", "Seleccione el magistrado", $obj->is_rule("magistrados_id","required"), "span3");
				
				$data['form_content'] .= $this->combox($obj->temas_id, $datatem, "temas_id", "Tema", "Seleccione el tema", $obj->is_rule("temas_id", "required"), "span3");
				
				$anio = array();
				for($x = 1950; $x <= date("Y"); ++$x) $anio[] = array("id" => $x, "name" => $x);
				
				$data['form_content'] .= $this->combox($obj->cms_anio, $anio, "cms_anio", "Año al que pertenece", "Seleccione el año", $obj->is_rule("cms_anio", "required"), "span3");
				
				$meses = array("" => "", 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 
										 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");
				for($x = 1; $x <= 12; ++$x) $mes[] = array("id" => $x, "name" => $meses[$x]);
				
				$data['form_content'] .= $this->combox($obj->cms_mes, $mes, "cms_mes", "Mes al que pertenece", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_decision, "cms_decision", $obj->get_rule("cms_decision", "max_length"), "Decisión", "Maximo ".$obj->get_rule("cms_decision", "max_length")." caracteres", $obj->is_rule("cms_decision", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_sentencia, "cms_sentencia", $obj->get_rule("cms_sentencia", "max_length"), "Sentencia", "Maximo ".$obj->get_rule("cms_sentencia", "max_length")." caracteres", $obj->is_rule("cms_sentencia", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_otros_temas, "cms_otros_temas", $obj->get_rule("cms_otros_temas", "max_length"), "Otros temas", "Maximo ".$obj->get_rule("cms_otros_temas", "max_length")." caracteres", $obj->is_rule("cms_otros_temas", "required"), "span3");
				
				$data['form_content'] .= $this->inputFile($obj->link_path, "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
				$obj = new $this->model();
				$datamag = $obj->get_magistrados_list("cms_nombre");
				$datadem = $obj->get_demandas_tutelas_list("cms_norma_demandada");
				$datatem = $obj->get_temas_list("cms_tema");
				
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
				$data['form_content'] .= $this->inputHidden("D", "tipo", 11);
				
				$data['form_content'] .= $this->combox("", $datadem, "demandas_tutelas_id", "Demanda", "Seleccione la demanda", $obj->is_rule("demandas_tutelas_id", "required"), "span3");
				
				$data['form_content'] .= $this->combox("", $datamag, "magistrados_id", "Magistrado", "Seleccione el magistrado", $obj->is_rule("magistrados_id","required"), "span3");
				
				$data['form_content'] .= $this->combox("", $datatem, "temas_id", "Tema", "Seleccione el tema", $obj->is_rule("temas_id", "required"), "span3");
				
				$anio = array();
				for($x = 1950; $x <= date("Y"); ++$x) $anio[] = array("id" => $x, "name" => $x);
				
				$data['form_content'] .= $this->combox("", $anio, "cms_anio", "Año al que pertenece", "Seleccione el año", $obj->is_rule("cms_anio", "required"), "span3");
				
				$meses = array("" => "", 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 
										 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");
				for($x = 1; $x <= 12; ++$x) $mes[] = array("id" => $x, "name" => $meses[$x]);
				
				$data['form_content'] .= $this->combox("", $mes, "cms_mes", "Mes al que pertenece", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_decision", $obj->get_rule("cms_decision", "max_length"), "Decisión", "Maximo ".$obj->get_rule("cms_decision", "max_length")." caracteres", $obj->is_rule("cms_decision", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_sentencia", $obj->get_rule("cms_sentencia", "max_length"), "Sentencia", "Maximo ".$obj->get_rule("cms_sentencia", "max_length")." caracteres", $obj->is_rule("cms_sentencia", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_otros_temas", $obj->get_rule("cms_otros_temas", "max_length"), "Otros temas", "Maximo ".$obj->get_rule("cms_otros_temas", "max_length")." caracteres", $obj->is_rule("cms_otros_temas", "required"), "span3");
				
				$data['form_content'] .= $this->inputFile("", "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
		}

    public function lista() {
				$obj = new  $this->model();
        $data['datos'] = $obj->join_related('demandas_tutelas')->join_related('temas')->join_related('magistrados')->get_where(array("tipo" => "D"));
        $data['direct_form'] = "jurisprudencia/".$this->name.'/delete';
        return $this->buildajax($this->name.'/lista', $data);
		}

    public function add() {
			$error = false;
			$msg = "";
			$obj = new $this->model();
			$obj->get_by_id($this->_post('id'));
			if(!$obj->exists())
			$obj->id = "";
			$this->loadVar($obj);
			if (!$obj->save()) {
				$error = true;
				$msg = $obj->error->string;
				$this->deleteImg($this->data_id_obj_path($obj));
			}
			if ($error)
				$this->set_alert_session("Error guardando datos," . $msg, 'error');
			else
				$this->set_alert_session("Datos Guardados con exito...!", 'info');
			redirect(cms_url("jurisprudencia/".$this->name));
		}
	
		public function delete() {
			$error = false;
			$obj = new $this->model();
			$obj->get_by_id($this->_post('value'));
			$msg = "";
			if ($obj->exists()) {
				$id_file = $this->data_id_obj_path($obj);
				if (!$obj->delete()){
					$error = true;
					$msg = $obj->error->string;
				}
				$this->deleteImg($id_file);
			} else {
				$error = true;
				$msg = "No existe item...!";
			}
			if ($error)
				$this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
			else{
				$this->set_alert_session("Datos eliminados con éxito...!", 'info');
			}
			return $this->render_json(!$error);
		}
}