<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . 'third_party/facebook-sdk/src/facebook' . EXT;

/**
 * @author rigobcastro
 */
class Facebook_connect extends Front_Controller {

    private $facebook_config = null;

    public function __construct() {
        parent::__construct();

        $this->config->load("facebook", TRUE);
        $this->facebook_config = $this->config->item('facebook');
    }

    // ----------------------------------------------------------------------



    public function index() {
        $facebook = new Facebook($this->facebook_config);
        // Get User ID
        $user_facebook = $facebook->getUser();

        if (!$user_facebook) {
            return redirect($facebook->getLoginUrl(array('scope' => 'user_birthday,publish_stream,email,user_location')));
        } else {
            try {
                $user_profile = $facebook->api('/me');
                // Si existe hacer login
                if ($this->ACL->login_facebook($user_profile['id'])) {
                    $facebook->destroySession();
                    return redirect('perfil/' . $this->session->userdata('username'), 'refresh');
                } 
                redirect('usuarios/registro/index/individual');
            } catch (FacebookApiException $e) {
                show_error($e);
                $user_facebook = null;
            }
        }
    }

    // ----------------------------------------------------------------------
}