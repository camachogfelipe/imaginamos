<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Home extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	// ----------------------------------------------------------------------
	
	public function index() {	
		$this->set_title('Bienvenidos a ' . SITENAME, true);
		$data['fmenu']	=	$this->get_rollover();
		$data['footer']	= $this->get_footer();
		$data['totalDocumentos'] = $this->get_documentos();
		$data['totalEnterese'] = $this->get_enterese();
		$data['is_home'] = true;
		
		$this->_data['datos'] = $data;
		return $this->build();
	}
	// Función para obtener los textos del rollover del menu principal
	public function get_rollover() {
		$this->db->select('cms_fmenu_text.*, cms_fmenu_items.item');
		$this->db->from('cms_fmenu_text');
		$this->db->join('cms_fmenu_items', 'cms_fmenu_items.id  = cms_fmenu_text.fmenu_items_id');
		$result = $this->db->get();
		
		$data = $this->result($result);
		
		return $data;
	}
	// Función para obtener los datos del footer
	public function get_footer() {
		$this->db->select('cms_contacto.*');
		$this->db->from('cms_contacto');
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data[0];
	}
	// Función para obtener el número de árticulos en documentos
	public function get_documentos() {
		$data = $this->count_all('cms_documento', array("destacado" => 1));		
		return $data;
	}
	// Función para obtener el número de árticulos de enterese
	public function get_enterese() {
		$data = $this->count_all('cms_enterese', array("destacado" => 1));		
		return $data;
	}
	// Función general para obtener los datos de una consulta
	private function result(&$result) {
		$data = array();
		if(!empty($result)) :
			foreach ($result->result() as $fila) {
				$data[] = $fila;
			}
		else: $data = array();
		endif;
		return $data;
	}
	// Función para obtener el count de una tabla dada
	function count_all($table = '', $campo = array()) {
		if ($table == '') return '0';
		$where = "";
		if(!empty($campo)) :
			$where1 = array();
			foreach($campo as $key => $val) $where1[] .= $key."='".$val."'";
			$where = " WHERE ".implode(" AND ", $where1);
		endif;
		
		$query = $this->db->query("SELECT COUNT(*) AS numrows FROM ".$table.$where);
		
		if ($query->num_rows() == 0) return '0';
		
		$row = $query->row();
		return $row->numrows;
	}	
	
	// ----------------------------------------------------------------------
	
	// ----------------------- FUNCIONES PARA CONTACTENOS -------------------
	function contactanos() {
		$datosContacto = $this->get_footer();
		$retorn['save'] = FALSE;
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$telefono = $this->input->post("telefono");
		$ciudad = $this->input->post("ciudad");
		$comentario = $this->input->post("comentario");
		//contacto-ok.php        
		//////////////Email
		$this->load->library('email');
		$this->email->from($nombre, $email);
		$this->email->to($datosContacto->email); 

		$this->email->subject('Contacto desde sitio Web.');
		$message ="
				Se ha realizado un comentario con la siguiente informacion:<br /><br />
				Nombre: ".$nombre.", <br />
				Email: ".$email."<br />
				Teléfono: ".$telefono."<br />
				Ciudad: ".$ciudad."<br />
				Comentario: ".$comentario."<br />";
		$this->email->message($message);

		if ($this->email->send()) $retorn['save'] = true;
		else $retorn['save'] = false;
		
		$this->output->set_content_type('application/json')->set_output(json_encode($retorn));
	}
	// ----------------------- FUNCIONES PARA CONTACTENOS -------------------
}
