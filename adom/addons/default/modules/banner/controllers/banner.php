<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Banner extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('banner_m');
    }

    public function index() {
        
    }

    public function getBanner() {
        $results = $this->banner_m->get_all();
        echo json_encode($results);
    }

}
