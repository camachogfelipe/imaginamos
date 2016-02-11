<?php

/**
 * @author rigobcastro
 */
class _Users extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = new \User;
        $datos->order_by('created_on', 'DESC')->get_by_related('group', 'name', 'usuarios');

        $this->set_datos($datos);
        return $this->build('body');
    }

    public function detail($username = null) {
        $this->load->library('user_agent');
        
        $datos = new User;
        
        $datos->get_by_username($username);
        
        
        if(!$datos->exists() OR empty($username)){
            return show_404();
        }
        
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
        
        $this->set_datos($datos);
        return $this->build('detail');
    }

    // ----------------------------------------------------------------------
}