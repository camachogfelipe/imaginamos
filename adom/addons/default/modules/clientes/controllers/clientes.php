<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Clientes extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('clientes_m');
    }

    public function index() {
        $url = site_url('clientes');
        $base_url = isset($_SERVER['QUERY_STRING']) ? $url . '?' . $_SERVER['QUERY_STRING'] : $url;
        $params = array(
            'stream' => 'clientes',
            'namespace' => 'clientes',
        );

        $clientes = $this->streams->entries->get_entries($params, array('suffix' => '?' . $_SERVER['QUERY_STRING'], 'first_url' => $base_url));
        
        $params = array(
            'stream' => 'convenios',
            'namespace' => 'convenios',
        );

        $convenios = $this->streams->entries->get_entries($params, array('suffix' => '?' . $_SERVER['QUERY_STRING'], 'first_url' => $base_url));

        
//        echo '<pre>';
//        print_r($convenios);
//        print_r($clientes);
//        exit;
        
        $this->template
                ->set_layout('internas.html')
                ->title($this->module_details['name'])
                ->set('clientes', $clientes['entries'])
                ->set('convenios', $convenios['entries'])
                ->build('index');
        
    }

   

}
