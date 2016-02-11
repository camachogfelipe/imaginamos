<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Blog module controller
 *
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Blog\Controllers
 */
class Pqr extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('pqr_m');
        $this->load->model('pqr_status_m');
        $this->load->model('pqr_type_m');
        $this->load->model('entities/countries_m');
        $this->load->model('entities/cities_m');
        $this->load->model('entities/buildings_m');
        $this->load->library('form_validation');
        $this->lang->load('pqr');

        // Set the validation rules
        $this->item_validation_rules = array(
            array(
                'field' => 'name',
                'label' => lang('pqr:name'),
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'last_name',
                'label' => lang('pqr:last_name'),
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'email',
                'label' => lang('pqr:email'),
                'rules' => 'trim|Email|required'
            ),
            array(
                'field' => 'type_id',
                'label' => lang('pqr:type'),
                'rules' => 'required|is_natural'
            ),
            array(
                'field' => 'building_id',
                'label' => lang('pqr:building'),
                'rules' => 'required|is_natural'
            ),
            array(
                'field' => 'coment',
                'label' => lang('pqr:coment'),
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
     * Form to send pqr
     *
     * URIs such as `pqr/page/x` also route here.
     */
    public function index() {
        $country = $this->countries_m->get_all();
        $countries = array(''=>'Seleccione..');
        foreach ($country as $a) {
            $countries[$a->id] = $a->name;
        }
        $statu = $this->pqr_status_m->get_all();
        $status = array(''=>'Seleccione..');
        foreach ($statu as $b) {
            $status[$b->id] = $b->name;
        }
        $type = $this->pqr_type_m->get_all();
        $types = array(''=>'Seleccione..');
        foreach ($type as $c) {
            $types[$c->id] = $c->name;
        }

        $this->template
                ->title($this->module_details['name'])
                ->set_breadcrumb(lang('pqr:pqr'))
                ->set('countries', $countries)
                ->set('status', $status)
                ->set('types', $types)
                ->build('form_send');
    }

    /**
     * Index
     *
     * Form to send pqr
     *
     * URIs such as `pqr/page/x` also route here.
     */
    public function create_pqr() {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->item_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run()) {
            // See if the model can create the record
            if ($this->pqr_m->create($this->input->post())) {
                $admins = $this->pqr_m->get_admin_building($this->input->post('building_id'));
                
                // Send mail to user                
                $this->email->clear();
                $this->email->to($this->input->post('email'));
                $this->email->from('noresponder@mts.com.co');
                $this->email->subject('PQR ' . $this->input->post('name'));
                $this->email->message('Hola ' . $this->input->post('name') . ' Acabas de enviar un PQR muy pronto recibiras respuesta.');
                $this->email->send();

                // Send mail to admin buildings
                foreach ($admins as $value) {
                    $this->email->clear();
                    $this->email->to($value->email);
                    $this->email->from('noresponder@mts.com.co');
                    $this->email->subject('PQR ' . $value->username);
                    $this->email->message('Hola ' . $value->username . ' Acaban de enviar un PQR.');
                    $this->email->send();
                }

                // All good...
                $this->session->set_flashdata('success', lang('pqr.success'));
                redirect('pqr');
            }
            // Something went wrong. Show them an error
            else {
                $this->session->set_flashdata('error', lang('pqr.error'));
                redirect('pqr/create_pqr');
            }
        }

        $pqr_status = new stdClass;
        foreach ($this->item_validation_rules as $rule) {
            $pqr_status->{$rule['field']} = $this->input->post($rule['field']);
        }

        $country = $this->countries_m->get_all();
        $countries = array();
        foreach ($country as $a) {
            $countries[$a->id] = $a->name;
        }
        $statu = $this->pqr_status_m->get_all();
        $status = array();
        foreach ($statu as $b) {
            $status[$b->id] = $b->name;
        }
        $type = $this->pqr_type_m->get_all();
        $types = array();
        foreach ($type as $c) {
            $types[$c->id] = $c->name;
        }

        $this->template
                ->title($this->module_details['name'], lang('pqr.formsend'))
                ->set_breadcrumb(lang('pqr:pqr'))
                ->set('countries', $countries)
                ->set('status', $status)
                ->set('types', $types)
                ->build('form_send');
    }

    public function get_cities($id) {
        $cities = $this->cities_m->get_all($id);
        echo json_encode($cities);
    }

    public function get_buildings($id) {
        $buildings = $this->buildings_m->get_all($id);
        echo json_encode($buildings);
    }
    

}
