<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	SAFE ZONE Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Admin_Controller {

    protected $section = 'safezone';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('safezone_m');
        $this->load->model('file_type_m');
        $this->load->library('form_validation');
        $this->load->library('files/files');
        $this->lang->load('safezone');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => lang('safezone:name'),
                'rules' => 'trim|required'
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
        $items = $this->safezone_m->get_all();
        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items['data']['file'])
                ->build('admin/items');
    }

    public function create() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            $folder = $this->safezone_m->get_folder();
            $file = Files::upload($folder->id, $this->input->post('name'));
            if ($file) {
                if ($this->safezone_m->create($this->input->post(), $file['data']['id'])) {
                    // All good...
                    $this->session->set_flashdata('success', lang('safezone.success'));
                    redirect('admin/safezone');
                }
                // Something went wrong. Show them an error
                else {
                    $this->session->set_flashdata('error', lang('safezone.error'));
                    redirect('admin/safezone/create');
                }
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('safezone.error'));
                redirect('admin/safezone/create');
            }
        }

        $safezone = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $safezone->{$rule['field']} = $this->input->post($rule['field']);
        }
        $types = $this->file_type_m->get_all();
        $data = array();
        foreach ($types as $c) {
            $data[$c->id] = $c->name;
        }
        // Build the view using safezone/views/admin/form.php
        $this->template
                ->title($this->module_details['name'])
                ->set('types', $data)
                ->build('admin/form');
    }

    public function edit($id = 0) {
        $safezone = $this->safezone_m->get_all($id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->safezone_m->answer_safezone($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/safezone');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/safezone/edit');
            }
        }
        $types = $this->file_type_m->get_all();
        $data = array();
        foreach ($types as $c) {
            $data[$c->id] = $c->name;
        }
        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'])
                ->set('safezone', $safezone)
                ->set('types', $data)
                ->build('admin/form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and delete the items
            foreach ($_POST['action_to'] as $value) {
                Files::delete_file($value);
            }
            $this->session->set_flashdata('success', lang('safezone.success'));
        } else {
            Files::delete_file($id);
        }
        redirect('admin/safezone');
    }

}
