<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Registro - Usuario 
 *
 * Módulo de registro de usuarios
 * 
 * @author rigobcastro
 */
require_once APPPATH . 'third_party/recaptchalib' . EXT;
require_once APPPATH . 'third_party/facebook-sdk/src/facebook' . EXT;

define('PUBKEY_RECAPTCHA', '6Le14tgSAAAAAJezoEMr7bXsZXAaDsTxeV-E4cWO');
define('PRIKEY_RECAPTCHA', '6Le14tgSAAAAANrzWwTuQBu46Mo142oNhiVda20E');

class Registro extends Front_Controller {

    private $facebook_config = null;

    public function __construct() {
        parent::__construct();

        $this->config->load("facebook", TRUE);
        $this->facebook_config = $this->config->item('facebook');
    }

    // ----------------------------------------------------------------------
    

    public function index($type = 'individual') {
        $user = new \User;
        $error_captcha = null;
        $datos = null;

        $is_banda = $type === 'banda' ? true : false;

        $facebook = new Facebook($this->facebook_config);

        // Get User ID
        $user_facebook = $facebook->getUser();

        $facebook_connect_url = null;
        $logged_with_facebook = false;
        $user_profile = null;
        $authorize = false;

        if (!$user_facebook) {
            $facebook_connect_url = $facebook->getLoginUrl(array('scope' => 'user_birthday,publish_stream,email,user_location'));
        } else {
            try {
                $user_profile = $facebook->api('/me');
                $logged_with_facebook = true;
                
                // Si existe hacer login
                if ($this->ACL->login_facebook($user_profile['id'])) {
                    $facebook->destroySession();
                    return redirect('perfil/'.$this->session->userdata('username'), 'refresh');
                }
                
            } catch (FacebookApiException $e) {
                show_error($e);
                $user_facebook = null;
            }
        }

        $this->_data['facebook_connect_url'] = $facebook_connect_url;


        if ($this->_post(null) OR $logged_with_facebook === true) {

            $recaptcha = recaptcha_check_answer(PRIKEY_RECAPTCHA, $_SERVER["REMOTE_ADDR"], $this->_post('recaptcha_challenge_field'), $this->_post('recaptcha_response_field'));

            if ($logged_with_facebook === true && !$this->session->flashdata('error_validating_facebook')) {
                $authorize = true;
            } else {
                $authorize = $recaptcha->is_valid;
            }

            if ($authorize) {
                if ($is_banda) {
                    $user->validation['band_name'] = array(
                        'rules' => array('required', 'unique'),
                        'label' => 'Nombre de la banda'
                    );
                }

                $datos = $this->_post(null);

                // Si está logueado en facebook, settear los datos
                if ($logged_with_facebook) {
                    $datos = $user_profile;
                    
                    // Bug para cuentas de facebook - SIN USERNAME
                    if(empty($datos['username']) OR !isset($datos['username'])){
                        $datos['username'] = underscore_special($datos['first_name'] . $datos['last_name'] . $datos['id']);
                    }
                    
                    $facebook_birthday = new DateTime($datos['birthday']);
                    $datos['birthday'] = $facebook_birthday->format('Y-m-d');
                    $datos['facebook_id'] = $datos['id'];

                    if (!empty($datos['facebook_id'])) {

                        switch ($datos['gender']) {
                            case 'Male':
                                $datos['gender'] = 'Masculino';
                                break;
                            case 'Female':
                                $datos['gender'] = 'Femenino';
                                break;
                            default:
                                $datos['gender'] = null;
                                break;
                        }
                    }
                   

                    $datos['inshaka_url'] = $datos['username'];
                    $datos['phone'] = 1;

                    if (!empty($datos['location'])) {
                        $datos['city'] = $datos['location']['name'];
                    } 

                }
                
                // Bug Ciudad
                // Cuando no es encontrada la ciudad en facebook, dejar que el usuario
                // la inserte y la modifique
                if (empty($datos['ciudad'])) {
                    $datos['ciudad'] = $this->_post('city');
                }

                // Bug genero
                if (empty($datos['gender'])) {
                    $datos['gender'] = $this->_post('gender');
                }
                
                
                $user->from_array($datos);
                $user->validate();

                if ($user->valid) {

                    if (true === $logged_with_facebook) {
                        $run = $logged_with_facebook;
                    } else {
                        $this->load->library('form_validation');

                        $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                        $this->form_validation->set_rules('password_confirm', 'Confirme contraseña', 'required');

                        $run = $this->form_validation->run();
                    }

                    if ($run == true) {
                        $username = $datos['username'];
                        $email = $datos['email'];
                        $password = $this->input->post('password');

                        // Generating random pass for facebook login
                        if (true === $logged_with_facebook) {
                            $password = random_string();
                        }

                        $additional_data = array(
                            'first_name' => $datos['first_name'],
                            'last_name' => $datos['last_name'],
                            'city' => $datos['city'],
                            'phone' => $datos['phone'],
                            'gender' => $datos['gender'],
                            'birthday' => $datos['birthday'],
                            'inshaka_url' => $datos['inshaka_url'],
                            'subscribe_offers' => $this->input->post('subscribe_offers'),
                            'subscribe_news' => $this->input->post('subscribe_news'),
                            'is_band' =>  $is_banda,
                            'band_name' => $this->input->post('band_name'),
                            'facebook_id' => $datos['facebook_id']
                        );
                   
                    }
                    if ($run == true && $this->ACL->register($username, $password, $email, $additional_data)) {
                        if (true === $logged_with_facebook) {
                            $facebook->destroySession();
                        }
                        
                        $user = new \User;
                        $user->get_by_email($email);
                       
                        $personal_info = new \Users_personal_info;
                        $personal_info->social_facebook = $logged_with_facebook ? $datos['link'] : null;
                        $personal_info->user_id = $user->id;
                        
                        $personal_info->save();
                        
                        if ($this->ACL->login($email, $password, true)) {
                            return redirect(sprintf($this->urls->inshaka_url, $user->inshaka_url), 'refresh');
                        } 
                        
                        return redirect('usuarios/login', 'refresh');
                    } else {
                        if (validation_errors()) {
                            $this->set_alert(validation_errors(), 'error');
                        }
                    }
                } else {
                    $this->set_alert($user->error->string, 'error');

                    if ($logged_with_facebook) {
                        $this->session->set_flashdata('error_validating_facebook', true);
                    }
                }
            } else {
                $this->set_alert('Error en el código de seguridad', 'error');
                $error_captcha = $recaptcha->error;
            }
        }

        $this->_data['form_hidden'] = array(
            'is_banda' => $is_banda,
            'facebook_id' => ($logged_with_facebook ? $user_profile['id'] : null)
        );


        $this->_data['recaptcha'] = recaptcha_get_html(PUBKEY_RECAPTCHA, $error_captcha);
        $this->_data['is_banda'] = $is_banda;
        $this->_data['logged_with_facebook'] = $logged_with_facebook;
        $this->_data['user_profile_facebook'] = $datos;

        return $this->set_title('Registro')->build('registro/body');
    }

    // ----------------------------------------------------------------------
}