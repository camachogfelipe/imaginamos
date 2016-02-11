<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Globals extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function js() {
        $globals = array(
            'base_url' => base_url(),
            'site_url' => site_url(),
            'cms_url' => cms_url(),
            'global_asset' => global_asset(),
            'asset_url' => front_asset()
        );
        $format = 'var globals = %s';

        // Output init
        $_output = json_encode($globals);

        
        $this->output->set_header('Content-Type:application/x-javascript');
        $this->output->set_status_header('200');
        $this->output->set_header('Access-Control-Allow-Origin: ' . base_url());
        $this->output->set_header('Content-Length: ' . strlen($_output));

        return $this->output->set_output(sprintf($format, $_output));
    }

    // ----------------------------------------------------------------------
}