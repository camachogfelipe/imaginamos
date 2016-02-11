<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Modulo para el formulario de trabaje con nosotros
 *
 * @author 		Eduard Russy
 * @website		imaginamos.com
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class Admin extends Admin_Controller {

    protected $section = 'items';

    public function __construct() {
        parent::__construct();

        // Load all the required classes
        $this->load->model('work_us_m');
        $this->load->model('entities/cities_m');
        $this->load->model('entities/countries_m');
        $this->load->library('form_validation');
        $this->lang->load('work_us');


        

        // $this->load->library('files/files');
        // $this->load->model('files/file_folders_m');
        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
            ),
            array(
                'field' => 'last_name',
                'label' => 'Last_name',
                'rules' => 'required',
            ),
            array(
                'field' => 'date_birth',
                'label' => 'Date_birth',
                'rules' => 'required',
            ),
            array(
                'field' => 'document_type',
                'label' => 'Document_type',
                'rules' => 'required',
            ),
            array(
                'field' => 'document',
                'label' => 'Document',
                'rules' => 'required',
            ),
            array(
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required',
            ),
            array(
                'field' => 'tel',
                'label' => 'Tel',
                'rules' => 'required',
            ),
            array(
                'field' => 'tel_mobile',
                'label' => 'Tel_mobile',
                'rules' => 'required',
            ),
            array(
                'field' => 'country_id',
                'label' => 'Country_id',
                'rules' => 'required',
            ),
            array(
                'field' => 'city_id',
                'label' => 'City_id',
                'rules' => 'required',
            ),
            array(
                'field' => 'neighborhood',
                'label' => 'Neighborhood',
                'rules' => 'required',
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
            ),
            array(
                'field' => 'charge_id',
                'label' => 'Charge_id',
                'rules' => 'required',
            ),
            array(
                'field' => 'schooling_id',
                'label' => 'Schooling_id',
                'rules' => 'required',
            ),
            array(
                'field' => 'is_student',
                'label' => 'Is_student',
                'rules' => 'required',
            ),
            array(
                'field' => 'career',
                'label' => 'Career',
                'rules' => 'required',
            ),
            array(
                'field' => 'semester',
                'label' => 'Semester',
                'rules' => 'required',
            ),
            array(
                'field' => 'university',
                'label' => 'University',
                'rules' => 'required',
            ),
            array(
                'field' => 'company_name',
                'label' => 'Company_name',
                'rules' => '',
            ),
            array(
                'field' => 'company_tel',
                'label' => 'Company_tel',
                'rules' => '',
            ),
            array(
                'field' => 'company_career',
                'label' => 'Company_career',
                'rules' => '',
            ),
            array(
                'field' => 'company_chief',
                'label' => 'Company_chief',
                'rules' => '',
            ),
            array(
                'field' => 'company_admission_date',
                'label' => 'Company_admission_date',
                'rules' => '',
            ),
            array(
                'field' => 'company_retirement_date',
                'label' => 'Company_retirement_date',
                'rules' => '',
            ),
            array(
                'field' => 'company_reason_leaving',
                'label' => 'Company_reason_leaving',
                'rules' => '',
            ),
            array(
                'field' => 'file',
                'label' => 'File',
                'rules' => '',
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
        $work_us = $this->work_us_m->order_by('order')->get_all();
        $this->template
                ->title($this->module_details['name'])
                ->set('work_us', $work_us)
                ->build('admin/index');
    }

    public function create() {
        $work_us = new StdClass();

        // $folder = $this->file_folders_m->get_by('name', 'work_us');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->work_us_m->create($this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('work_us.success'));
                redirect('admin/work_us');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('work_us.error'));
                redirect('admin/work_us/create');
            }
        }
        $work_us->data = new StdClass();
        foreach ($this->item_validation_rules AS $rule) {
            $work_us->data->{$rule['field']} = $this->input->post($rule['field']);
        }
        $this->_form_data();
        
        // get countries
        $countries = $this->countries_m->get_all();
        $country = array();
        foreach ($countries as $c) {
            $country[$c->id] = $c->name;
        }

        // get cities
        $cities = $this->cities_m->get_all();
        $city = array();
        foreach ($cities as $c) {
            $city[$c->id] = $c->name;
        }
        
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('work_us.new_item'))
                ->set('cities', $city)
                ->set('countries', $country)
                ->build('admin/form', $work_us->data);
    }

    public function edit($id = 0) {
        $this->data = $this->work_us_m->get($id);

        // $this->load->model('files/file_folders_m');
        // $folder = $this->file_folders_m->get_by('name', 'work_us');
        // $this->data->files = Files::folder_contents($folder->id);
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->work_us_m->edit($id, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('work_us.success'));
                redirect('admin/work_us');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('work_us.error'));
                redirect('admin/work_us/create');
            }
        }
        // starting point for file uploads
        // $this->data->fileinput = json_decode($this->data->fileinput);
        $this->_form_data();
        
        // get countries
        $countries = $this->countries_m->get_all();
        $country = array();
        foreach ($countries as $c) {
            $country[$c->id] = $c->name;
        }

        // get cities
        $cities = $this->cities_m->get_all();
        $city = array();
        foreach ($cities as $c) {
            $city[$c->id] = $c->name;
        }
        
        // Build the view using sample/views/admin/form.php
        $this->template->title($this->module_details['name'], lang('work_us.edit'))
                ->set('cities', $city)
                ->set('countries', $country)
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
            $this->work_us_m->delete_many($this->input->post('action_to'));
        } elseif (is_numeric($id)) {
            // they just clicked the link so we'll delete that one
            $this->work_us_m->delete($id);
        }
        redirect('admin/work_us');
    }

    public function order() {
        $items = $this->input->post('items');
        $i = 0;
        foreach ($items as $item) {
            $item = substr($item, 5);
            $this->work_us_m->update($item, array('order' => $i));
            $i++;
        }
    }

}
