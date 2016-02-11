<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Donde extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('donde_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $results = $this->donde_m->get_all();
        $this->template
                ->set('donde', $results)
                ->build('index');
    }

    public function getDonde() {
        $results = $this->donde_m->get_all();
        echo json_encode($results);
    }

}
