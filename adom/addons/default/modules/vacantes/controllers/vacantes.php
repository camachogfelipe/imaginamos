<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class vacantes extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    
    public $dirImg = "./uploads/default/files/"; 
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('vacantes_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $results = $this->vacantes_m->get_all();
        $titulos = $this->db->get('default_titulos')->result();
        $this->template
                ->set('titulos', $titulos)
                ->set('vacantes', $results)
                ->build('index');
    }

    public function getContent() {
        $results = $this->vacantes_m->get_all();
        echo json_encode($results);
    }

   function simple_upload($field, $types = 'gif|jpg|png', $maxsize = 8192, $encryt = TRUE) {
        $msg = true;
        $file_element_name = $field;
        $config['upload_path'] = $this->dirImg;
        $config['allowed_types'] = $types;
        $config['max_size'] = $maxsize; //1024 * 8;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $msg = false;
        } else {
            $data = $this->upload->data();
            $msg = array($data['file_name'], $data['full_path']);
        }
        @unlink($_FILES[$file_element_name]);
        return $msg;
    }
    
    
    public function Aplicar() {
        $input = $this->input->post();
        $imagen = ""; 
        $imagen = $this->simple_upload('archivo','pdf|doc|docx|xls');
        $time = new DateTime('NOW'); 
        $data = array(
            'name' => $input['nombre'],
            'tel' => $input['tel'],
            'doc' => $input['doc'],
            'cel' => $input['cel'],
            'anos' => $input['exp'],
            'email' => $input['email'],
						'vacante' => $input['vacante'],
            'titulo' => $input['profe'],
            'titulo_otro' => $input['cual'],
            'comentario' => $input['coment'],
            'otro_estudio' => $input['otros'],
            'archivo' => $imagen[0]!=""?$imagen[0]:NULL,   
            'created' => $time->format('Y-m-d H:i:s')
        );

        $this->db->insert('default_vacantes_aplicar', $data);

        // Send mail to user                
        $this->email->clear();
        $this->email->to('recursoshumanos@adomsaluddomiciliaria.com');
				//$this->email->to('felipe.camacho@imaginamos.com');
        $this->email->from('cms@adom.com', 'CMS Adom');
        $this->email->subject("Aplicación a vacante " . $this->input->post('vacante').' por '.$this->input->post('nombre'));
        $this->email->message(
					'Hola<p><strong>' . $this->input->post('nombre') . '</strong> acaba de aplicar a la vacante <strong>'.$this->input->post('vacante') . 
					'</strong>, con los siguientes datos:</p>' . 
					'<p><strong>Nombre: </strong>' . $this->input->post('nombre') .
					'<br><strong>Teléfono: </strong>' . $this->input->post('tel') .
          '<br><strong>No. de documento: </strong>' . $this->input->post('doc') .
          '<br><strong>Celular: </strong>' . $this->input->post('cel') .
          '<br><strong>Años de experiencia: </strong>' . $this->input->post('exp') .
         	'<br><strong>Email: </strong>' . $this->input->post('email') .
					'<br><strong>Vacante: </strong>' . $this->input->post('vacante') .
          '<br><strong>Profesión: </strong>' . $this->input->post('profe') .
          '<br><strong>Otro título: </strong>' . $this->input->post('cual') .
					'<br><strong>Otros estudios: </strong>' . $this->input->post('otros') .
          '<br><strong>Comentario: </strong>' . $this->input->post('coment') .
          '<br><strong>Fecha de solicitud: </strong>' . $time->format('Y-m-d H:i:s') .
					'</p>Atentamente, <p>CMS Adom</p>');
				$this->email->attach($imagen[1]);
        $this->email->send();        
        redirect('vacantes');
    }

}
