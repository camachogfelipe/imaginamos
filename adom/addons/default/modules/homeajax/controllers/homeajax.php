<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home module
 *
 * @author      Eduard Russy
 * @website     
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class homeajax extends Public_Controller {

    /**
     * The constructor
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->lang->load('homeajax');
        $this->load->model('homeajax_m');
        $this->template->append_css('module::homeajax.css');
    }

    /**
     * List all homeajaxs
     *
     *
     * @access  public
     * @return  void
     */
    public function index() {
        
    }

    public function getHome() {
        if ($this->input->is_ajax_request()) {
            $results = $this->homeajax_m->get_home();
            echo json_encode($results);
        } else {
            echo 'Acceso Denegado';
        }
    }
    
    public function getRedes() {
       
            $results = $this->db->get('default_redes')->result();
            echo json_encode($results);
      
    }

    public function getNotices() {
        if ($this->input->is_ajax_request()) {
            $results = $this->homeajax_m->get_notices();

            foreach ($results as &$result) {
                $result->intro = strip_tags($result->intro);
            }

            return $this->template->build_json($results);
        } else {
            echo 'Acceso Denegado';
        }
    }

    public function sendEmail() {
        if ($this->input->is_ajax_request()) {
            // validate form
            foreach ($this->input->post() as $key => $value) {
                if ($value == '') {
                    echo 'Ingrese todos los campos';
                    exit;
                }
            }
            if ($this->input->post('asunto') == 'Asunto') {
                echo 'Seleccione un asunto';
                exit;
            }
            // Send mail to admin                
            $this->email->clear();
            $this->email->to('oscar.gonzalez@imaginamos.com');
            $this->email->from('info@mts.com.co');
            $this->email->subject($this->input->post('asunto'));
            $this->email->message('Hola, <br>' . $this->input->post('nombre') . ' ' . $this->input->post('apellido') . ' Acaba de enviar un solicitud de contacto
            de la ciudad ' . $this->input->post('coment') . '<br> ' . $this->input->post('observation') . '.');
            $this->email->send();


            $this->email->to($this->input->post('email'));
            $this->email->from('info@mts.com.co');
            $this->email->subject($this->input->post('asunto'));
            $this->email->message('Hola, <br>' . $this->input->post('nombre') . ' ' . $this->input->post('apellido') . ' Acabas de enviar un solicitud de contacto
            de la ciudad ' . $this->input->post('coment') . '<br> ' . $this->input->post('observation') . '.');

            if ($this->email->send()) {
                echo 'exito';
            } else {
                echo 'Ocurrio un problema comunicate con el administrador';
            }
        } else {
            echo 'Acceso Denegado';
        }
    }

}

/* End of file homeajax.php */