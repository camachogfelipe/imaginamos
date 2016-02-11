<?php

/**
 * @author Felipe Camacho
 */
class comunicado extends Back_Controller {

    protected $admin_area = true;
    public $model = 'comunicados';
    public $name = "comunicado";

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Comunicados"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->comunicados();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function comunicados() {
        $data['path_delete'] = cms_url("jurisprudencia/".$this->name.'/delete');
        $data['path_add'] = cms_url("jurisprudencia/".$this->name.'/form_add');
        $data['path_edit'] = cms_url("jurisprudencia/".$this->name.'/form_edit');
        $data['path_list'] = cms_url("jurisprudencia/".$this->name.'/lista');
				$data['breadcrum'] = array("Jurisprudencia", "Comunicados");
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new $this->model();
				$obj->get_by_id($this->_post('id'));
				$datadem = $obj->get_demandas_tutelas_list("cms_norma_demandada", array("tipo" => "D"));
				
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
				
				$data['form_content'] .= $this->combox($obj->demandas_tutelas_id, $datadem, "demandas_tutelas_id", "Demanda", "Seleccione la demanda", $obj->is_rule("demandas_tutelas_id", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_anio, "cms_anio", $obj->get_rule("cms_anio", "max_length"), "Año", "Maximo ".$obj->get_rule("cms_texto", "max_length")." caracteres", $obj->is_rule("cms_anio", "required"), "span3");
				
				$mes = array(
					array("id" => 1, "name" => "Enero"),
					array("id" => 2, "name" => "Febrero"),
					array("id" => 3, "name" => "Marzo"),
					array("id" => 4, "name" => "Abril"),
					array("id" => 5, "name" => "Mayo"),
					array("id" => 6, "name" => "Junio"),
					array("id" => 7, "name" => "Julio"),
					array("id" => 8, "name" => "Agosto"),
					array("id" => 9, "name" => "Septembre"),
					array("id" => 10, "name" => "Octubre"),
					array("id" => 11, "name" => "Noviembre"),
					array("id" => 12, "name" => "diciembre")
				);
				
				$data['form_content'] .= $this->combox($obj->cms_mes, $mes, "cms_mes", "Mes", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$obj1 = new temas();
				$obj1->get();
				foreach($obj1->all as $temas) :
					$datatit[] = array('id' => $temas->id, 'name' => $temas->cms_tema);
				endforeach;
				
				$data['form_content'] .= $this->combox($obj->temas_id, $datatit, "temas_id", "Tema", "Seleccione el Tema", $obj->is_rule("temas_id", "required"), "span3");
				
				$data['form_content'] .= $this->input($obj->cms_texto, "cms_texto", $obj->get_rule("cms_texto", "max_length"), "Comunicado", "Maximo ".$obj->get_rule("cms_texto", "max_length")." caracteres", $obj->is_rule("cms_texto", "required"), "span3");
				
				//$data['form_content'] .= $this->inputFile($obj->link_path, "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
				$obj = new $this->model();
				$datadem = $obj->get_demandas_tutelas_list("cms_norma_demandada", array("tipo" => "D"));
				
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
				
				$data['form_content'] .= $this->combox("", $datadem, "demandas_tutelas_id", "Demanda", "Seleccione la demanda", $obj->is_rule("demandas_tutelas_id", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_anio", $obj->get_rule("cms_anio", "max_length"), "Año", "Maximo ".$obj->get_rule("cms_texto", "max_length")." caracteres", $obj->is_rule("cms_anio", "required"), "span3");
				
				$mes = array(
					array("id" => 1, "name" => "Enero"),
					array("id" => 2, "name" => "Febrero"),
					array("id" => 3, "name" => "Marzo"),
					array("id" => 4, "name" => "Abril"),
					array("id" => 5, "name" => "Mayo"),
					array("id" => 6, "name" => "Junio"),
					array("id" => 7, "name" => "Julio"),
					array("id" => 8, "name" => "Agosto"),
					array("id" => 9, "name" => "Septembre"),
					array("id" => 10, "name" => "Octubre"),
					array("id" => 11, "name" => "Noviembre"),
					array("id" => 12, "name" => "diciembre")
				);
				
				$data['form_content'] .= $this->combox("", $mes, "cms_mes", "Mes", "Seleccione el mes", $obj->is_rule("cms_mes", "required"), "span3");
				
				$obj1 = new temas();
				$obj1->get();
				foreach($obj1->all as $temas) :
					$datatit[] = array('id' => $temas->id, 'name' => $temas->cms_tema);
				endforeach;
				
				$data['form_content'] .= $this->combox("", $datatit, "temas_id", "Tema", "Seleccione el Tema", $obj->is_rule("temas_id", "required"), "span3");
				
				$data['form_content'] .= $this->input("", "cms_texto", $obj->get_rule("cms_texto", "max_length"), "Comunicado", "Maximo ".$obj->get_rule("cms_texto", "max_length")." caracteres", $obj->is_rule("cms_texto", "required"), "span3");
				
				//$data['form_content'] .= $this->inputFile("", "link_path" ,"Archivo", "", $obj->is_rule("link_path","required"), "span6");
				
        $data['direct_form'] = "jurisprudencia/".$this->name.'/add';

        return $this->buildajax($this->name.'/form', $data);
		}

    public function lista() {
				$obj = new  $this->model();
        $data['datos'] = $obj->join_related('demandas_tutelas')->join_related('temas')->get();
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