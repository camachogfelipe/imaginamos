<?php

/**
 * @author Felipe Camacho
 */
class tutelas extends Back_Controller {

    protected $admin_area = true;
    public $model = 'demandas_tutelas';
    public $name = "tutelas";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Tutelas"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->tutelas();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function tutelas() {
        $data['path_delete'] = cms_url("jurisprudencia/".$this->name.'/delete');
        $data['path_add'] = cms_url("jurisprudencia/".$this->name.'/form_add');
        $data['path_edit'] = cms_url("jurisprudencia/".$this->name.'/form_edit');
        $data['path_list'] = cms_url("jurisprudencia/".$this->name.'/lista');
				$data['breadcrum'] = array("Constitución", "Tutelas");
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
				$obj->get_by_id($this->_post('id'));
				$obj1 = new magistrados();
				$obj1->get();
				foreach($obj1->all as $magistrado) :
					$datatit[] = array('id' => $magistrado->id, 'name' => $magistrado->cms_nombre);
				endforeach;
				$obj1 = new constitucion();
				$obj1->get();
				foreach($obj1->all as $articulo) :
					$dataart[] = array('id' => $articulo->id, 'name' => $articulo->cms_articulo);
				endforeach;
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				$data['form_content'] .= $this->inputHidden("T", "tipo", 11);
				
				$data['form_content'] .= $this->combox($obj->constitucion_id, $dataart, "constitucion_id", "Artículo asociado", "Seleccione el artículo", $obj->is_rule("constitucion_id", "required"), "span3");
				
				$anio = array();
				for($x = 1950; $x <= date("Y"); ++$x) $anio[] = array("id" => $x, "name" => $x);
				
				$data['form_content'] .= $this->combox($obj->cms_anio, $anio, "cms_anio", "Año al que pertenece", "Seleccione el año", $obj->is_rule("cms_anio", "required"), "span3");
				
				$meses = array("" => "", 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 
										 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");
				for($x = 1; $x <= 12; ++$x) $mes[] = array("id" => $x, "name" => $meses[$x]);
				
				$data['form_content'] .= $this->combox($obj->cms_mes, $mes, "cms_mes", "Mes al que pertenece", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_numeroref, "cms_numeroref", $obj->get_rule("cms_numeroref", "max_length"), "Expediente", "Maximo ".$obj->get_rule("cms_numeroref", "max_length")." caracteres", $obj->is_rule("cms_numeroref", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_demandante_accionante, "cms_demandante_accionante", $obj->get_rule("cms_demandante_accionante", "max_length"), "Demandante", "Maximo ".$obj->get_rule("cms_demandante_accionante", "max_length")." caracteres", $obj->is_rule("cms_demandante_accionante", "required"), "span3");
				
				$data['form_content'] .= $this->combox($obj->magistrados_id, $datatit, "magistrados_id", "Magistrado", "Seleccione el magistrado", $obj->is_rule("magistrados_id","required"), "span3");
				
				$data['form_content'] .= $this->inputFile($obj->link_path, "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
				$obj = new $this->model();
				$obj1 = new magistrados();
				$obj1->get();
				foreach($obj1->all as $magistrado) :
					$datatit[] = array('id' => $magistrado->id, 'name' => $magistrado->cms_nombre);
				endforeach;
				$obj1 = new constitucion();
				$obj1->get();
				foreach($obj1->all as $articulo) :
					$dataart[] = array('id' => $articulo->id, 'name' => $articulo->cms_articulo);
				endforeach;
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
				$data['form_content'] .= $this->inputHidden("T", "tipo", 11);
				
				$data['form_content'] .= $this->combox("", $dataart, "constitucion_id", "Artículo asociado", "Seleccione el artículo", $obj->is_rule("constitucion_id", "required"), "span3");
				
				$anio = array();
				for($x = 1950; $x <= date("Y"); ++$x) $anio[] = array("id" => $x, "name" => $x);
				
				$data['form_content'] .= $this->combox("", $anio, "cms_anio", "Año al que pertenece", "Seleccione el año", $obj->is_rule("cms_anio", "required"), "span3");
				
				$meses = array("" => "", 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 
										 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");
				for($x = 1; $x <= 12; ++$x) $mes[] = array("id" => $x, "name" => $meses[$x]);
				
				$data['form_content'] .= $this->combox("", $mes, "cms_mes", "Mes al que pertenece", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_numeroref", $obj->get_rule("cms_numeroref", "max_length"), "Expediente", "Maximo ".$obj->get_rule("cms_numeroref", "max_length")." caracteres", $obj->is_rule("cms_numeroref", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_demandante_accionante", $obj->get_rule("cms_demandante_accionante", "max_length"), "Demandante", "Maximo ".$obj->get_rule("cms_demandante_accionante", "max_length")." caracteres", $obj->is_rule("cms_demandante_accionante", "required"), "span3");
				
				$data['form_content'] .= $this->combox("", $datatit, "magistrados_id", "Magistrado", "Seleccione el magistrado", $obj->is_rule("magistrados_id","required"), "span3");
				
				$data['form_content'] .= $this->inputFile("", "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
		}

    public function lista() {
				$obj = new  $this->model();
        $data['datos'] = $obj->join_related('magistrados')->get_where(array("tipo" => "T"));
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
				$this->set_alert("Datos eliminados con éxito...!", 'info');
			}
			return $this->render_json(!$error);
		}
}