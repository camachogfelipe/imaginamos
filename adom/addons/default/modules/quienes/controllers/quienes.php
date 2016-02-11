<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public quienes module controller
 *
 * @author  Eduard  russy
 */
class Quienes extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('quienes_m');
         $this->load->model('valores/valores_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $quienes= $this->quienes_m->get_all();
        $valores = $this->valores_m->get_all();
        $this->template
                ->set('quienes', $quienes)
                ->set('valores', $valores)
                ->build('index');
    }

    public function getContent() {
        $results = $this->quienes_m->get_all();
        echo json_encode($results);
    }

    public function getPage() {
        $results = $this->quienes_m->get_page();
        echo json_encode($results);
    }

}
