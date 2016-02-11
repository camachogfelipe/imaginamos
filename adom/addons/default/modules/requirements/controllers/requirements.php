<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Requirements extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->template->set_layout('internas.html');
        $this->load->model('requirements_m'); 
        $this->lang->load('requirements');
    }

    public function index() {
        $this->template
                ->set('logged_in', $this->ion_auth->logged_in())
                ->build('index');
    }

    public function getContent() {
        $results = $this->services_m->get_all();
        echo json_encode($results);
    }

    public function getPage() {
        $results = $this->services_m->get_page();
        echo json_encode($results);
    }

    public function loginSend() {
        $login = $this->ion_auth->login($this->input->post('loginEmail'), $this->input->post('loginPass'));
        if ($login == 1) {
            $this->requirements_m->setReq($this->input->post());
        } else {
            return $this->template->build_json(0);
        }
        return $this->template->build_json(1);
    }

    public function registerSend() {
        $additional_data = array(
            'first_name' => $this->input->post('name'),
            'last_name' => $this->input->post('lastname'),
            'display_name' => $this->input->post('name') . ' ' . $this->input->post('lastname')
        );
        $new_user_id = $this->ion_auth->register($this->input->post('name'), $this->input->post('pass'), $this->input->post('email'), 2, $additional_data);
        if ($new_user_id > 0) {
            $this->requirements_m->setReq($this->input->post(), $new_user_id);
        } else {
            return $this->template->build_json(0);
        }
        return $this->template->build_json(1);
    }

}
