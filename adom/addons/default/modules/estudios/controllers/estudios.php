<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Estudios extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('estudios_m');
    }

    public function index() {
        
    }

    public function getEstudios() {
        $results = $this->estudios_m->get_all();
				$this->output->set_content_type('application/json')->set_output(json_encode($results));
    }

}
