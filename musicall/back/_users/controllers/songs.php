<?php

/**
 * @author rigobcastro
 */
class Songs extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
				ini_set("memory_limit","256M");
        $this->load->library('user_agent');
        
        $datos = new Users_song;
        $datos->get();

        $this->set_datos($datos);

       
        
        // Enable audio
        $html5_audio = false;
        $browser_compare = 0;
        
        switch ($this->agent->browser()) {
            case 'Chrome':
                $browser_compare = 6;
                break;
            case 'Safari':
                 $browser_compare = 5;
                break;
            case 'MSIE':
                 $browser_compare = 9;
                break;
        }
        
        if(!empty($browser_compare)){
            $html5_audio = $this->agent->version() > $browser_compare;
        }
        
        $this->_data['html5_audio'] = $html5_audio;
        
         return $this->build('songs/body');
    }

    public function download($song) {
        $datos = new \Users_song;
        $datos->get_by_code($song);
        
        if(!$datos->exists()){
            return show_404();
        }
        
        $this->load->helper('download');
        
        $filepath = UPLOADSFOLDER . $datos->filepath;
        $filename = str_replace('songs/', '', $datos->filepath);
        
        force_download($filename, file_get_contents($filepath));
    }

    // ----------------------------------------------------------------------
}