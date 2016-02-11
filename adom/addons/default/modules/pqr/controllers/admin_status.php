<?php
/**
 * This is a pqr_status module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Admin_Status extends Admin_Controller {

    protected $section = 'pqr_status';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('pqr_status_m');
        $this->load->library('form_validation');
        // load lang
        $this->lang->load('pqr');

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
        $items = $this->pqr_status_m->get_all();
        // Build the view with pqr_status/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items_pqr_status');
    }
    public function add_status() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->pqr_status_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('pqr_status.success'));
                redirect('admin/pqr/status');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('pqr_status.error'));
                redirect('admin/pqr/status/create');
            }
        }

        $pqr_status = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $pqr_status->{$rule['field']} = $this->input->post($rule['field']);
        }

        // Build the view using pqr_status/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('pqr_status.new_item'))
                ->set('pqr_status', $pqr_status)
                ->build('admin/form_pqr_status');
    }
    public function edit($id = 0) {
        $status = $this->pqr_status_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->pqr_status_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('pqr_status.success'));
                redirect('admin/pqr/status');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('pqr_status.error'));
                redirect('admin/pqr/status/edit');
            }
        }

        // Build the view using pqr_status/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('pqr_status.new_item'))
                ->set('status', $status)
                ->build('admin/form_pqr_status');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->pqr_status_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->pqr_status_m->delete($id);
        }
        redirect('admin/pqr/status');
    }

}
