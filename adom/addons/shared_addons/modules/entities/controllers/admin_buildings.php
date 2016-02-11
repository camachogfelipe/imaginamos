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
class Admin_buildings extends Admin_Controller {

    protected $section = 'buildings';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        
        $this->load->model('buildings_m');
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
                'field' => 'city_id',
                'label' => 'Ciudad',
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
    public function index() {
        // here we use MY_Model's get_all() method to fetch everything
        $items = $this->buildings_m->get_all();

        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/buildings_items');
    }

    public function add_building() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->buildings_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('entities.success'));
                redirect('admin/entities/buildings');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('entities.error'));
                redirect('admin/entities/buildings/add_building');
            }
        }

        $sample = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $sample->{$rule['field']} = $this->input->post($rule['field']);
        }
        $cities = $this->cities_m->get_all($id_country=NULL);
        $data = array();
        foreach ($cities as $c) {
            $data[$c->id] = $c->name;
        }
        
        $ad = $this->buildings_m->get_admin();
        $admin = array();
        foreach ($ad as $a) {
            $admin[$a->id] = $a->username;
        }
        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('cities', $data)
                ->set('admin', $admin)
                ->build('admin/buildings_form');
    }

    public function edit($id = 0) {
        $building = $this->buildings_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->buildings_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('entities.success'));
                redirect('admin/entities/buildings');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('entities.error'));
                redirect('admin/entities/buildings/edit');
            }
        }
        
        // Build the view using sample/views/admin/form.php
        $cities = $this->cities_m->get_all();
        $data = array();
        foreach ($cities as $c) {
            $data[$c->id] = $c->name;
        }
        
       
        
        $ad = $this->buildings_m->get_admin();
        $admin = array();
        foreach ($ad as $a) {
            $admin[$a->id] = $a->username;
        }
        
        $adminB = $this->buildings_m->get_admin_building($id);
        $dataAdmin = array();
        foreach ($adminB as $a) {
            $dataAdmin[$a->id] = $a->user_id;
        }
        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('cities', $data)
                ->set('building', $building)
                ->set('admin', $admin)
                ->set('adminB', $dataAdmin)
                ->build('admin/buildings_form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->buildings_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->buildings_m->delete($id);
        }
        redirect('admin/entities/buildings');
    }

}
