<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Compromisos extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
    }

    public function index() {
        $url = site_url('compromisos');
        $base_url = isset($_SERVER['QUERY_STRING']) ? $url . '?' . $_SERVER['QUERY_STRING'] : $url;
        $params = array(
            'stream' => 'compromisos',
            'namespace' => 'compromisos',
        );

        $entry = $this->streams->entries->get_entries($params, array('suffix' => '?' . $_SERVER['QUERY_STRING'], 'first_url' => $base_url));

        $this->template
                ->set_layout('internas.html')
                ->title($this->module_details['name'])
                ->set('entry', $entry['entries'][0])
                ->build('index');
    }

    

}
