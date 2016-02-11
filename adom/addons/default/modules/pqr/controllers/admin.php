<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Admin_Controller {

    protected $section = 'pqr';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('pqr_m');
        $this->load->library('form_validation');
        $this->lang->load('pqr');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'answer',
                'label' => lang('pqr:answer'),
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
        $items = $this->pqr_m->get_all();
        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items');
    }

    public function edit($id = 0) {
        $pqr = $this->pqr_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->pqr_m->answer_pqr($id, $this->input->post())) {
                // Send mail to user                
                $this->email->clear();
                $this->email->to($pqr->email);
                $this->email->from('respuestapqr@mts.com.co');
                $this->email->subject('PQR ' . $pqr->name);
                $this->email->message('Hola ' . $pqr->name . ' Respondieron tu pqr: ' . $this->input->post('answer') . '.');
                $this->email->send();


                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/pqr');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/pqr/edit');
            }
        }

        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('pqr', $pqr)
                ->build('admin/form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->pqr_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->pqr_m->delete($id);
        }
        redirect('admin/pqr');
    }
    
    public function view_comment($id = 0) {
        $pqr = $this->pqr_m->get($id);
       
        // Set some options and the feed url from the options provided
       
        $this->load->view('admin/pqr_view_comment', array('pqr'=>$pqr));
    }

}
