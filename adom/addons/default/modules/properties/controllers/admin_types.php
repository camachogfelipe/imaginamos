<?php

/**
 * This is a properties_types module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Types extends Admin_Controller {

    protected $section = 'admin_types';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('properties_types_m');
        $this->load->library('form_validation');
        $this->lang->load('properties');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|max_length[100]|required'
            )
        );

        // We'll set the partials and metadata here since they're used everywhere
        $this->template
                ->append_js('module::function.js')
                ->append_js('module::admin.js')
                ->append_css('module::admin.css')
                ->append_js('module::jquery.dataTables.js')
                ->append_css('module::jquery.dataTables.css');
    }

    /**
     * List all items
     */
    public function index() {
        // here we use MY_Model's get_all() method to fetch everything
        $items = $this->properties_types_m->get_all();
        // Build the view with properties_types/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items_properties_types');
    }

    public function create() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {

            // See if the model can create the record
            if ($this->properties_types_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('properties_types.success'));
                redirect('admin/properties/types');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('properties_types.error'));
                redirect('admin/properties/types/create');
            }
        }

        $properties_types = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $properties_types->{$rule['field']} = $this->input->post($rule['field']);
        }

        // Build the view using properties_types/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('properties_types.new_item'))
                ->set('properties_types', $properties_types)
                ->build('admin/form_properties_types');
    }

    public function edit($id = 0) {
        $types = $this->properties_types_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->properties_types_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('properties_types.success'));
                redirect('admin/properties/types');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('properties_types.error'));
                redirect('admin/properties/types/edit');
            }
        }

        // Build the view using properties_types/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('properties_types.new_item'))
                ->set('types', $types)
                ->build('admin/form_properties_types');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->properties_types_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->properties_types_m->delete($id);
        }
        redirect('admin/properties/types');
    }

}
