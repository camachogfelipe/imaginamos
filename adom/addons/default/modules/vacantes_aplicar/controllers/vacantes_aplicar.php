<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Vacantes_aplicar extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('vacantes_aplicar_m');
    }

    public function index() {
        
    }
    public function download() {
        echo "hola mundo";
    }

    public function getBanner() {
        $results = $this->vanates_aplicar->get_all();
        echo json_encode($results);
    }

}
