<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public testimonies module controller
 *
 * @author  Eduard  russy
 */
class Testimonies extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('testimonies_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $results = $this->testimonies_m->get_all();
        $this->template
                ->set('results', $results)
                ->build('index');
    }

    public function getContent() {
        $results = $this->testimonies_m->get_all();
        echo json_encode($results);
    }

    public function getPage() {
        $results = $this->testimonies_m->get_page();
        echo json_encode($results);
    }

}