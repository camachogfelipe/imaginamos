<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class redes extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('redes_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $results = $this->redes_m->get_all();
        $this->template
                ->set('redes', $results)
                ->build('index');
    }

    public function getredes() {
        $results = $this->redes_m->get_all();
        echo json_encode($results);
    }

}
