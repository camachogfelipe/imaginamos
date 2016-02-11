<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is a sample module for PyroCMS
 *
 * @author 		Jerel Unruh - PyroCMS Dev Team
 * @website		http://unruhdesigns.com
 * @package 	PyroCMS
 * @subpackage 	Sample Module
 */
class Admin_Cities extends Admin_Controller {

    protected $section = 'cities';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('cities_m');
        $this->load->model('countries_m');
        $this->load->library('form_validation');
        $this->lang->load('entities');


        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'country_id',
                'label' => 'Pais',
                'rules' => 'required'
            )
        );

        // We'll set the partials and metadata here since they're used everywhere
        $this->template->append_js('module::admin.js')->append_css('module::admin.css');
        $this->template->append_js('module::jquery.dataTables.js')->append_css('module::jquery.dataTables.css');
    }

    /**
     * List all items
     */
    public function index($id_country = NULL) {
        // here we use MY_Model's get_all() method to fetch everything

        $items = $this->cities_m->get_all($id_country);
        
        $countries = $this->countries_m->get_all();
        $data = array();
        foreach ($countries as $c) {
            $data[$c->id] = $c->name;
        }

        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->set('countries', $data)
                ->set('id_country', $id_country)
                ->build('admin/cities_items');
    }

    public function add_city() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->cities_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('entities.success'));
                redirect('admin/entities/cities');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('entities.error'));
                redirect('admin/entities/cities/add_city');
            }
        }

        $sample = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $sample->{$rule['field']} = $this->input->post($rule['field']);
        }
        $countries = $this->countries_m->get_all();
        $data = array();
        foreach ($countries as $c) {
            $data[$c->id] = $c->name;
        }
        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('countries', $data)
                ->build('admin/cities_form');
    }

    public function edit($id = 0) {
        $cities = $this->cities_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->cities_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('entities.success'));
                redirect('admin/entities/cities');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('entities.error'));
                redirect('admin/entities/cities/edit');
            }
        }

        // Build the view using sample/views/admin/form.php
        $countries = $this->countries_m->get_all();
        $data = array();
        foreach ($countries as $c) {
            $data[$c->id] = $c->name;
        }
        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('countries', $data)
                ->set('city', $cities)
                ->build('admin/cities_form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->cities_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->cities_m->delete($id);
        }
        redirect('admin/entities/cities');
    }

}
