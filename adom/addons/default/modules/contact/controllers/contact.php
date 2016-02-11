<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 *
 * @author      eduardrussy
 * @website     
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class contact extends Public_Controller {

    /**
     * The constructor
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('contact_m');
        $this->load->library('form_validation');
        $this->lang->load('contact');

        // $this->load->library('files/files');
        // $this->load->model('files/file_folders_m');
        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required',
            ),
            array(
                'field' => 'empresa',
                'label' => 'Empresa',
                'rules' => 'required',
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
            ),
            array(
                'field' => 'celular',
                'label' => 'Celular',
                'rules' => 'required',
            ),
            array(
                'field' => 'telefono',
                'label' => 'Telefono',
                'rules' => 'required',
            ),
            array(
                'field' => 'pais',
                'label' => 'Pais',
                'rules' => 'required',
            ),
            array(
                'field' => 'ciudad',
                'label' => 'Ciudad',
                'rules' => 'required',
            ),
            array(
                'field' => 'comentario',
                'label' => 'Comentario',
                'rules' => 'required',
            ),
        );

        // We'll set the partials and metadata here since they're used everywhere
        $this->template->append_js('module::admin.js')
                ->append_css('module::admin.css');
    }

    /**
     * List all items
     */
    public function index() {

        $this->template
                ->set_layout('internas.html')
                ->title($this->module_details['name'])
                ->set('contact', $contact)
                ->build('index');
    }

    public function create() {

        if ($this->contact_m->create($this->input->post())) {
            // All good...
            $this->session->set_flashdata('success', lang('contact.success'));
						$this->_send_email();
            redirect('contact');
        }
    }
		
		public function _send_email() {
        $this->load->library('email');

        $this->email->clear();
        $html = $this->template->build('contacto');

        $this->email->from('cms@adom.com', 'CMS Adom');
        $this->email->to("mercadeo@adomsaluddomiciliaria.com");

        $this->email->subject('Hola, Se han contactado de la página web');
        $this->email->message($html);


        return $this->email->send();
    }

}

/* End of file contact.php */