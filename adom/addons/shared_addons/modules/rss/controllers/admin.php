<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Rss Module
 * @year 	2013
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Admin_Controller {

    protected $section = 'rss';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('rss_m');
        $this->load->library('form_validation');
        //Load the simplepie library
        $this->load->library('simplepie');
        $this->lang->load('rss');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'url',
                'label' => 'Url',
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
        $items = $this->rss_m->get_all();
        // Build the view with sample/views/admin/items.php
        $this->template
                ->title($this->module_details['name'])
                ->set('items', $items)
                ->build('admin/items');
    }

    public function add_rss() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->rss_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/rss');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/rss/create');
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
        $rss = $this->rss_m->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->rss_m->update($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('sample.success'));
                redirect('admin/rss');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('sample.error'));
                redirect('admin/rss/edit');
            }
        }

        // Build the view using sample/views/admin/form.php
        $this->template
                ->title($this->module_details['name'], lang('sample.new_item'))
                ->set('rss', $rss)
                ->build('admin/form');
    }

    public function delete($id = 0) {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to'])) {
            // pass the ids and let MY_Model delete the items
            $this->rss_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->rss_m->delete($id);
        }
        redirect('admin/rss');
    }

    public function view_rss($id = 0) {
        $rss = $this->rss_m->get($id);
       
        // Set some options and the feed url from the options provided
        $this->simplepie->set_cache_location($this->config->item('simplepie_cache_dir'));
        $this->simplepie->set_feed_url($rss->url);
        // Fire it up
        $this->simplepie->init();
        $this->simplepie->handle_content_type();
        // Store the feed items
        $this->load->view('admin/rss_view', array('rss_items'=>$this->simplepie->get_items(0, 5)));
    }

}
