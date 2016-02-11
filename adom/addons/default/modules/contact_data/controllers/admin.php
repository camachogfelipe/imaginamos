<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 *
 * @author 		Eduard Russy
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
        $this->load->model('contact_data_m');
        $this->load->library('form_validation');
        $this->lang->load('contact_data');

        // $this->load->library('files/files');
        // $this->load->model('files/file_folders_m');
        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'direccion',
                'label' => 'Direccion',
                'rules' => 'required',
            ),
            array(
                'field' => 'barrio',
                'label' => 'Barrio',
                'rules' => 'required',
            ),
            array(
                'field' => 'ciudad',
                'label' => 'Ciudad',
                'rules' => 'required',
            ),
            array(
                'field' => 'telefono',
                'label' => 'Telefono',
                'rules' => 'required',
            ),
            array(
                'field' => 'tel_cel',
                'label' => 'Tel_cel',
                'rules' => 'required',
            ),
            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|trim|valid_email',
            ),
						array(
                'field' => 'map_url',
                'label' => 'Url del Mapa',
                'rules' => 'required',
            ),
						array(
                'field' => 'parrafo_contacto',
                'label' => 'Parrafo de contactenos',
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
        $contact_data = $this->contact_data_m->order_by('order')->get_all();
        $this->template
                ->title($this->module_details['name'])
                ->set('contact_data', $contact_data)
                ->build('admin/index');
    }

    public function create() {
        $contact_data = new StdClass();
        // $folder = $this->file_folders_m->get_by('name', 'contact_data');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->contact_data_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('contact_data.success'));
                redirect('admin/contact_data');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('contact_data.error'));
                redirect('admin/contact_data/create');
            }
        }
        $contact_data->data = new StdClass();
        foreach ($this->item_validation_rules AS $rule) {
            $contact_data->data->{$rule['field']} = $this->input->post($rule['field']);
        }
        $this->_form_data();
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('contact_data.new_item'))
                ->build('admin/form', $contact_data->data);
    }

    public function edit($id = 0) {
        $this->data = $this->contact_data_m->get($id);

        // $this->load->model('files/file_folders_m');
        // $folder = $this->file_folders_m->get_by('name', 'contact_data');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->contact_data_m->edit($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('contact_data.success'));
                redirect('admin/contact_data');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('contact_data.error'));
                redirect('admin/contact_data/create');
            }
        }
        // starting point for file uploads
        // $this->data->fileinput = json_decode($this->data->fileinput);
        $this->_form_data();
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('contact_data.edit'))
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
            $this->contact_data_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->contact_data_m->delete($id);
        }
        redirect('admin/contact_data');
    }

    public function order() {
        $items = $this->input->post('items');
        $i = 0;
        foreach ($items as $item) {
            $item = substr($item, 5);
            $this->contact_data_m->update($item, array('order' => $i));
            $i++;
        }
    }

}
