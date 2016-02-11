<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Trabaja extends Front_Controller {
	
	private $dirImg = "./uploads/hojas_vida/";

	public function __construct() {
		parent::__construct();
		set_time_limit (600);
	}
	
	// ----------------------------------------------------------------------
	
	public function index($submit = NULL) {	
		$data['is_home'] = false;
		$data['section'] = "trabaja";
		$data['inicio'] = $this->get_inicio();
		$data['vacantes'] = $this->get_vacantes();
		if(is_null($submit)) $data['mensaje'] = NULL;
		elseif($submit == 0) $data['mensaje'] = 0;
		elseif($submit == 1) $data['mensaje'] = 1;
		
		$data['footer']	= $this->get_footer();
		
		$this->_data['datos'] = $data;
		return $this->build();
	}
	
	// Función para obtener los datos del footer
	public function get_footer() {
		$this->db->select('cms_contacto.*');
		$this->db->from('cms_contacto');
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data[0];
	}
	
	public function get_inicio() {
		$this->db->select('cms_trabaje_nosotros.cms_media_id, cms_media.path as imagen');
		$this->db->from('cms_trabaje_nosotros');
		$this->db->join('cms_media', 'cms_media.id  = cms_trabaje_nosotros.cms_media_id');
		$result = $this->db->get();
		
		$data = $this->result($result);
		
		return $data;
	}
	
	public function get_vacantes($id = NULL) {
		$this->db->select('cms_vancante.*, cms_media.path as imagen');
		$this->db->from('cms_vancante');
		$this->db->join('cms_media', 'cms_media.id  = cms_vancante.media_id');
		if(!is_null($id)) :
			$this->db->where('cms_vancante.id', $id);
		endif;
		
		$result = $this->db->get();
		$data = $this->result($result);
		
		return $data;
	}
	
	private function result(&$result) {
		if(!empty($result)) :
			foreach ($result->result() as $fila) {
				$data[] = $fila;
			}
		else: $data = array();
		endif;
		return $data;
	}
	
	public function vacante() {
		$id = $this->input->post('id');
		$data = array();
		if(!empty($id)) :
			$data = $this->get_vacantes($id);
			//$data[0]->detalle = nl2br($data[0]->detalle);
		endif;
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
	}
	
	public function postularse() {
		
		$error = 1;
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|max_lenght[47]');
		$this->form_validation->set_rules('email', 'email', 'required|max_lenght[47]');
		$this->form_validation->set_rules('ciudad', 'ciudad', 'required|max_lenght[70]');
		$this->form_validation->set_rules('telefono', 'telefono', 'required|max_lenght[27]');
		$this->form_validation->set_rules('comentario', 'Comentario', 'required|max_lenght[500]');
		if ($this->form_validation->run()) :
			$nombre = $this->_post('nombre');
			$email = $this->_post('email');
			$ciudad = $this->_post('ciudad');
			$telefono = $this->_post('telefono');
			$comentario = $this->_post('comentario');
			$vacante = $this->_post('vacante_id');
			$archivo1 = $this->simple_upload('ac_pdf','gif|jpg|png|pdf');
			$archivo2 = $this->upload_video();
			//if($archivo1 != false) :
				$data = array(
					'nombre' => $nombre,
					'email' => $email,
					'ciudad' => $ciudad,
					'cv' => $archivo1,
					'cvideo' => $archivo2,
					'telefono' => $telefono,
					'comentario' => $comentario,
					'vancante_id' => $vacante
				);
				
				$this->db->insert('cms_postulado', $data);
				$this->index(0);
			//else : $this->index(1);
			//endif;
		else: $this->index(1);
		endif;
	}
/*	
	function simple_upload($field, $types = 'gif|jpg|png|mov|wmv|ogv|mp4|pdf', $maxsize = 8192, $encryt = TRUE) {	
        $msg = true;
        $file_element_name = $field;
        $config['upload_path'] = $this->dirImg;
        $config['allowed_types'] = $types;
        $config['max_size'] = $maxsize; //1024 * 8;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
				$num_archivos = count($_FILES[$field]['tmp_name']);
				$archivos = array();
				for ($i=0;$i<$num_archivos;$i++){
					if(!empty($_FILES[$field]['name'][$i])) :
						$_FILES['userfile']['name'] = $_FILES[$field]['name'][$i];
						$_FILES['userfile']['type'] = $_FILES[$field]['type'][$i];
						$_FILES['userfile']['tmp_name'] = $_FILES[$field]['tmp_name'][$i];
						$_FILES['userfile']['error'] = $_FILES[$field]['error'][$i];
						$_FILES['userfile']['size'] = $_FILES[$field]['size'][$i];
								
						if (!$this->upload->do_upload()) {
								$msg = false;
								//$archivos = $this->upload->display_errors();
						} else {
								$data = $this->upload->data();
								$archivos[$i] = $data['file_name'];
						}
					endif;
				}
				if(!empty($archivos)) $msg = $archivos;
        @unlink($_FILES[$file_element_name]);
        return $msg;
    }
    */

    function simple_upload($field, $types = 'gif|jpg|png|mov|wmv|ogv|mp4|pdf', $maxsize = 102400, $encryt = TRUE) {
        $msg = true;
        $file_element_name = $field;
        $config['upload_path'] = $this->dirImg;
        $config['allowed_types'] = $types;
        $config['max_size'] = $maxsize; //1024 * 8;
        $config['encrypt_name'] = TRUE;
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($field)) {
            $msg = false;
        } else {
            $data = $this->upload->data();
            $msg = $data['file_name'];
        }
        @unlink($_FILES[$file_element_name]);
        return $msg;
    }
    

    function upload_video(){
    	  $name_tmp = $_FILES['ac_video']['tmp_name'];
		//read temporay filename
		  $name = $_FILES['ac_video']['name'];
		//read initial filename
		if(is_uploaded_file($name_tmp)){
		    $ext =explode('.', $name);
		    $ext = $ext[count($ext)-1];
		    //get extension of uploaded file
		    $rand = rand(5, 15).date("Ymd");
		    $name = $rand.".".$ext;
		    $new = $this->dirImg.$name;
		      if(@move_uploaded_file($name_tmp,$new)){
		         return $name; 
		      }
		      else{
		      	return false; 
		      }
		}else{
		    return false; 
		}

    }



	
	// ----------------------------------------------------------------------
}
