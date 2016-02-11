<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Services module controller
 *
 * @author Eduard Russy
 */
class Novedades extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct() {
        parent::__construct();
        // Load all the required classes
        $this->load->model('novedades_m');
        $this->template->set_layout('internas.html');
    }

    public function index() {
        $params = array(
            'stream' => 'novedades',
            'namespace' => 'pages',
            'paginate' => 'yes',
            'pag_segment' => '3',
            'limit' => '5'
        );
        $results = $this->streams->entries->get_entries($params, array('base_url' => base_url('novedades/index')));
        foreach ($results['entries'] as $key => $value) {
			$tmp = $this->novedades_m->get_all($value['id']);
			if(!empty($tmp)) :
	            $results['entries'][$key]['full_data'] = $this->novedades_m->get_all($value['id']);
			else :
				unset($results['entries'][$key]);
			endif;
        }
		$results['total'] = count($results['entries']);

        //echo '<pre>';
        //print_r($results);
        //exit;
        $this->template
                ->set('results', $results)
                ->build('index');
    }

    public function getContent() {
        $results = $this->novedades_m->get_all();
        echo json_encode($results);
    }

    public function getPage() {
        $results = $this->novedades_m->get_page();
        echo json_encode($results);
    }

}

