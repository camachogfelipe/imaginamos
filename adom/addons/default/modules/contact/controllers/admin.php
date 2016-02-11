<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 *
 * @author 		eduardrussy
 * @website		
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class Admin extends Admin_Controller {

    protected $section = 'items';

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
    
    public function download($id) {
    
       $results = $this->db->where('id', $id)->get('contact')->result();
     // $results = $this->db->get($this->namespace)->result();
      foreach ($results as $value) {
            $dat .= ("Nombre, ".$value->nombre.";".
                       "Telefono, ".$value->tel.";".
                       "Celular, ".$value->celular.";".
                       "Email, ".$value->email.";".
                       "Empresa, ".$value->empresa.";".
                       "Telefono, ".$value->telefono.";".
                       "pais, ".$value->pais.";".
                       "Ciudad, ".$value->ciudad.";".
                       "Comentario, ".$value->comentario.
                      
                    "\n");
     }
     $this->output->set_content_type('application/octet-stream')
                  ->set_header("Content-Disposition:attachment; filename=datos.txt")            
                  ->set_output($dat);
        
   
    }

    /**
     * List all items
     */
    public function index() {
        $contact = $this->contact_m->order_by('order')->get_all();
        $this->template
                ->title($this->module_details['name'])
                ->set('contact', $contact)
                ->build('admin/index');
    }
    


    public function create() {
        $contact = new StdClass();
        // $folder = $this->file_folders_m->get_by('name', 'contact');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->contact_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('contact.success'));
                redirect('admin/contact');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('contact.error'));
                redirect('admin/contact/create');
            }
        }
        $contact->data = new StdClass();
        foreach ($this->item_validation_rules AS $rule) {
            $contact->data->{$rule['field']} = $this->input->post($rule['field']);
        }
        $this->_form_data();
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('contact.new_item'))
                ->build('admin/form', $contact->data);
    }

    public function edit($id = 0) {
        $this->data = $this->contact_m->get($id);

        // $this->load->model('files/file_folders_m');
        // $folder = $this->file_folders_m->get_by('name', 'contact');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->contact_m->edit($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('contact.success'));
                redirect('admin/contact');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('contact.error'));
                redirect('admin/contact/create');
            }
        }
        // starting point for file uploads
        // $this->data->fileinput = json_decode($this->data->fileinput);
        $this->_form_data();
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('contact.edit'))
                ->build('admin/form', $this->data);
    }

    public function _form_data() {
        // $this->load->model('pages/page_m');
        // $this->template->pages = array_for_select($this->page_m->get_page_tree(), 'id', 'title');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->contact_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->contact_m->delete($id);
        }
        redirect('admin/contact');
    }

    public function order() {
        $items = $this->input->post('items');
        $i = 0;
        foreach ($items as $item) {
            $item = substr($item, 5);
            $this->contact_m->update($item, array('order' => $i));
            $i++;
        }
    }

}
