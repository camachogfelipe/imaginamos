<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Blog module controller
 *
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Blog\Controllers
 */
class safezone extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('safezone_m');
        $this->load->model('pqr/pqr_m');
        $this->load->model('pqr/pqr_status_m');
        $this->load->model('pqr/pqr_type_m');
        $this->load->model('entities/countries_m');
        $this->load->model('entities/cities_m');
        $this->load->model('entities/buildings_m');
        $this->load->model('entities/offices_m');
        $this->load->library('form_validation');
        $this->lang->load('safezone');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => lang('safezone:name'),
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'last_name',
                'label' => lang('safezone:last_name'),
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'email',
                'label' => lang('safezone:email'),
                'rules' => 'trim|valid_email|required'
            ),
            array(
                'field' => 'cel',
                'label' => lang('safezone:cel'),
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'tel',
                'label' => lang('safezone:tel'),
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'office_id',
                'label' => lang('safezone:offices'),
                'rules' => 'required'
            ),
            array(
                'field' => 'coment',
                'label' => lang('safezone:coment'),
                'rules' => 'trim|required'
            )
            ,
            array(
                'field' => 'pass',
                'label' => lang('safezone:pass'),
                'rules' => 'trim|required|matches[comfpass]'
            ),
            array(
                'field' => 'comfpass',
                'label' => lang('safezone:comfpass'),
                'rules' => 'trim|required'
            )
        );

        // We'll set the partials and metadata here since they're used everywhere
        $this->template->append_js('module::function.js')->append_css('module::admin.css');
        $this->template->append_js('module::jquery.dataTables.js')->append_css('module::jquery.dataTables.css');
    }

    /**
     * Index
     *
     * Form to send safezone
     *
     * URIs such as `safezone/page/x` also route here.
     */
    public function index() {
        if ($this->ion_auth->logged_in()) {
            redirect('safezone/my_control_panel');
        } else {
            redirect('register');
        }
    }

    public function register_user() {
        $country = $this->countries_m->get_all();
        $countries = array('' => 'Seleccione..');
        foreach ($country as $a) {
            $countries[$a->id] = $a->name;
        }
        $this->template
                ->title($this->module_details['name'])
                ->set_breadcrumb(lang('safezone:login'))
                ->set('countries', $countries)
                ->build('register');
    }

    public function my_control_panel() {
        if ($this->ion_auth->logged_in()) {
            $country = $this->countries_m->get_all();
            $countries = array('' => 'Seleccione..');
            foreach ($country as $a) {
                $countries[$a->id] = $a->name;
            }
            $this->template
                    ->title($this->module_details['name'])
                    ->set_breadcrumb(lang('safezone:login'))
                    ->set('countries', $countries)
                    ->build('control_panel');
        } else {
            redirect('register');
        }
    }

    public function set_register() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            $additional_data = array(
                'first_name' => $this->input->post('name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('tel'),
                'mobile' => $this->input->post('cel'),
                'display_name' => $this->input->post('name') . ' ' . $this->input->post('last_name'),
                'bio' => $this->input->post('coment'),
            );
            $regis = $this->ion_auth->register($this->input->post('name'), $this->input->post('pass'), $this->input->post('email'), 1, $additional_data);

            if ($this->safezone_m->set_user_offices($regis, $this->input->post())) {
                // All good...
                $this->session->set_flashdata('success', lang('safezone.success'));
                redirect('safezone');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('safezone.error'));
                redirect('safezone/set_register');
            }
        }
        $country = $this->countries_m->get_all();
        $countries = array('' => 'Seleccione..');
        foreach ($country as $a) {
            $countries[$a->id] = $a->name;
        }
        $this->template
                ->title($this->module_details['name'])
                ->set_breadcrumb(lang('safezone:login'))
                ->set('countries', $countries)
                ->build('register');
    }

    public function get_cities($id) {
        $cities = $this->cities_m->get_all($id);
        echo json_encode($cities);
    }

    public function get_buildings($id) {
        $buildings = $this->buildings_m->get_all($id);
        echo json_encode($buildings);
    }

    public function get_offices($id) {
        $offices = $this->offices_m->get_all($id);
        echo json_encode($offices);
    }

}
