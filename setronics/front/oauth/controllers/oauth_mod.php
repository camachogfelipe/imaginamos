<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Oauth_mod extends Front_Controller {

    protected $providers = array(
        'facebook' => 'oauth2',
        'google' => 'oauth2',
        'twitter' => 'oauth',
    );

    function __construct() {
        parent::__construct();
        $this->load->model('_users/user');
        $this->load->model('_users/api_oauth');
        $this->load->model('_users/accounts_user');
        $this->load->model('_users/oauth_config');
    }

    //-------------------/* trae la informacion del user dependiendo al providers */------------------------/

    public function log($args = null) {
        $oauth_provider = new\Api_oauth;

        // Invalid method or no provider = BOOM
        if (empty($args)) {
            show_404();
        }

        // Get the provider (facebook, twitter, etc);
        // This provider is not supported by the module
        if (!isset($this->providers[$args])) {
            show_404();
        }
        $credentials = $oauth_provider->get_active_provider($args);
        // Look to see if we have this provider in the db?
        if (!$credentials->exists()) {
            $this->ion_auth->is_admin() ? show_error('Social Integration: ' . $args . ' is not supported, or not enabled.') : show_404();
        }

        // oauth or oauth 2?
        $strategy = $this->providers[$args];

        switch ($strategy) {
            case 'oauth':
                include APPPATH . 'third_party/oauth/OAuth.php';
                $oauth = new OAuth;
                // Create an consumer from the confiG                
                $consumer = $oauth->consumer(array(
                    'key' => $credentials->api_key,
                    'secret' => $credentials->api_secret,
                        ));

                // Load the provider
                $provider = $oauth->provider($args);

                $callback = 'http://127.0.0.1/baseapp/oauth/oauth_mod/log/' . $provider->name;
                if (!$this->input->get_post('oauth_token')) {
                    // Add the callback URL to the consumer
                    $consumer->callback($callback);

                    // Get a request token for the consumer
                    $token = $provider->request_token($consumer);
                    // Store the token
                    $this->session->set_userdata('oauth_token', base64_encode(serialize($token)));
                    // Get the URL to the twitter login page
                    $url = $provider->authorize($token, array(
                        'oauth_callback' => $callback,
                            ));

                    // Send the user off to login
                    redirect($url);
                } else {
                    if ($this->session->userdata('oauth_token')) {
                        // Get the token from storage
                        $token = unserialize(base64_decode($this->session->userdata('oauth_token')));
                    }

                    if (!empty($token) AND $token->access_token !== $this->input->get_post('oauth_token')) {
                        // Delete the token, it is not valid
                        $this->session->unset_userdata('oauth_token');

                        // Send the user back to the beginning
                        exit('invalid token after coming back to site');
                    }

                    // Get the verifier
                    $verifier = $this->input->get_post('oauth_verifier');

                    // Store the verifier in the token
                    $token->verifier($verifier);

                    // Exchange the request token for an access token
                    $token = $provider->access_token($consumer, $token);

                    // We got the token, let's get some user data
                    $user = $provider->get_user_info($consumer, $token);

                    // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                    // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                    //echo "<pre>Tokens: ";
                    //var_dump($token) . PHP_EOL . PHP_EOL;
                    //echo "User Info: ";
                    //var_dump($user);

                    $info = array('provider' => $args, 'userinfo' => $user);
                }

                break;

            case 'oauth2':
                include APPPATH . 'third_party/oauth2/OAuth2.php';
                $oauth2 = new OAuth2;

                // OAuth2 is the honey badger when it comes to consumers - it just dont give a shit
                $consumer = null;

                $provider = $oauth2->provider($args, array(
                    'id' => $credentials->api_key,
                    'secret' => $credentials->api_secret,
                    'scope' => $credentials->scope,
                        ));

                if (!$this->input->get('code')) {
                    // By sending no options it'll come back here
                    $provider->authorize();
                } else {
                    // Howzit?
                    try {
                        $token = $provider->access($_GET['code']);

                        $user = $provider->get_user_info($token);

                        // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                        // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
//                        echo "<pre>Tokens: ";
//                        var_dump($token);
//
//                        echo "\n\nUser Info: ";
//                        var_dump($user);

                        $info = array('provider' => $args, 'userinfo' => $user);
                    } catch (OAuth2_Exception $e) {
                        show_error('That didnt work: ' . $e);
                    }
                }
                break;

            default:
                exit('Something went properly wrong!');
        }

        $userinfo = $this->organize_info($info);
        $this->saveuser($userinfo);
    }

    //------------------/* Organiza la información para que sea amigable con el sistema*/--------------------------/
    protected function organize_info($info) {
        $info_user = array();
        switch ($info['provider']) {
            case 'facebook':
                $info_user = array(
                    'uid' => $info['userinfo']['uid'],
                    'nickname' => $info['userinfo']['nickname'],
                    'name' => $info['userinfo']['name'],
                    'first_name' => $info['userinfo']['first_name'],
                    'last_name' => $info['userinfo']['last_name'],
                    'email' => $info['userinfo']['email'],
                    'image' => $info['userinfo']['image'],
                    'provider' => $info['provider'],
                );
                break;
            case 'twitter':
                $info_user = array(
                    'uid' => $info['userinfo']['uid'],
                    'nickname' => $info['userinfo']['nickname'],
                    'name' => $info['userinfo']['name'],
                    'first_name' => '',
                    'last_name' => '',
                    'email' => '',
                    'image' => $info['userinfo']['image'],
                    'provider' => $info['provider'],
                );
                break;
            case 'google':
                $info_user = array(
                    'uid' => $info['userinfo']['uid'],
                    'nickname' => $info['userinfo']['nickname'],
                    'name' => $info['userinfo']['name'],
                    'first_name' => $info['userinfo']['first_name'],
                    'last_name' => $info['userinfo']['last_name'],
                    'email' => $info['userinfo']['email'],
                    'image' => $info['userinfo']['image'],
                    'provider' => $info['provider'],
                );
                break;
            default :
                exit('Something went properly wrong!');
        }
        return $info_user;
    }

    public function saveuser($userinfo = array(), $method = null) {
        $data = array(
            'name' => $userinfo['name'],
            'first_name' => $userinfo['first_name'],
            'first_namefirst_name' => $userinfo['last_name'],
            'active' => 1
        );
        $nickname = $userinfo['nickname'];
        $mail = $userinfo['email'];
        $uid = $userinfo['uid'];
        $user_grup = array('3');
        if (!$this->ion_auth_model->email_check($mail)) {
            $u = $this->ion_auth->register($nickname, $uid, $mail, $data, $user_grup);
            if ($u) {
                $account = new\Accounts_user;
                $account->user_id = $u;
                $account->uid = $userinfo['uid'];
                $account->name = $userinfo['name'];
                $account->first_name = $userinfo['first_name'];
                $account->last_name = $userinfo['last_name'];
                $account->nickname = $userinfo['nickname'];
                $account->imagen = $userinfo['image'];
                $account->email = $mail;
                $account->provider = $userinfo['provider'];
                if ($account->save()) {
                    if ($userinfo['provider'] == 'twitter') {
                        $userinfot['iduser'] = $u;
                        $userinfot['iduseraccount'] = $account->id;
                        return $this->load->view('form_twitter', $userinfot);
                    } else {
                        $this->set_alert_session('usuario guardado', 'success');
                    }
                } else {
                    $this->db->where('id', $u);
                    $this->db->delete('cms_users');
                    $this->set_alert_session('no se guardado el usuario', 'error');
                }
            } else {
                $this->set_alert_session('no se guardado el usuario', 'error');
            }
        } else {
            $this->set_alert_session('El usuario ya existe en el sistema', 'error');
        }
        $config_oauth = new\Oauth_config;
        $config_oauth->where('var', 'redirect')->get();
        redirect($config_oauth->uri);
    }

    public function saveuser_twitter() {
        if (!$this->ion_auth_model->email_check($this->input->post('email'))) {
            $this->db->where('id', $this->input->post('iduser'));
            if ($this->db->update('cms_users', array('email' => $this->input->post('email')))) {
                $this->db->where('id', $this->input->post('iduseraccount'));
                if ($this->db->update('cms_accounts_user', array('email' => $this->input->post('email')))) {
                    $this->set_alert_session('usuario guardado', 'success');
                } else {
                    $this->db->where('id', $this->input->post('iduser'));
                    $this->db->delete('cms_users');
                    $this->set_alert_session('no se guardado el usuario', 'error');
                }
            } else {
                $this->db->where('id', $this->input->post('iduser'));
                $this->db->delete('cms_users');
                $this->set_alert_session('no se guardado el usuario', 'error');
            }
        } else {
            $this->db->where('id', $this->input->post('iduser'));
            $this->db->delete('cms_users');
            $this->set_alert_session('El usuario ya existe en el sistema', 'error');
        }
        $config_oauth = new\Oauth_config;
        $config_oauth->where('var', 'redirect')->get();
        redirect($config_oauth->uri);
    }

}

