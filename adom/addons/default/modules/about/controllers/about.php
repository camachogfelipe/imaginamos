<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public testimonies module controller
 *
 * @author  Eduard  russy
 */
class About extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('about_m');
    }


    public function index() {
        
    }

    public function getContent() {
        $results = $this->about_m->get_all();
        echo json_encode($results);
    }
     public function getPage() {
        $results = $this->about_m->get_page();
        echo json_encode($results);
    }

}
