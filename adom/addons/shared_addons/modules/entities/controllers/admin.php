<?php
/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Entities Module
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Admin extends Admin_Controller {

    protected $section = 'countries';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('countries_m');
        $this->load->model('cities_m');
        $this->load->model('buildings_m');
        $this->load->library('form_validation');
        $this->lang->load('entities');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|max_length[100]|required'
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
        $items = $this->countries_m->get_all();
        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items');
    }

    public function add_country() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->countries_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/entities');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/entities/create');
            }
        }

        $sample = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $sample->{$rule['field']} = $this->input->post($rule['field']);
        }

        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('sample', $sample)
                ->build('admin/form');
    }

    public function edit($id = 0) {
        $country = $this->countries_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->countries_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/entities');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/entities/edit');
            }
        }

        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('country', $country)
                ->build('admin/form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->countries_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->countries_m->delete($id);
        }
        redirect('admin/entities');
    }

}
