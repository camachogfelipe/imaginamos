<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Módulo de registro de usuarios
 * 
 * @author rigobcastro
 */
require_once APPPATH . 'third_party/facebook-sdk/src/facebook' . EXT;

class Registro extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------


    public function validation_register() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_rules('password_confirm', 'Repetir contraseña', 'required|matches[password]');
        $this->form_validation->set_rules('terms', 'Acepto los términos y condiciones', 'required');


        $ok = $this->form_validation->run($this);

        if (!$ok) {
            $this->set_message(validation_errors());
            $this->_data['messages_type'] = 'error';
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function complete_register($type = 'tienes') {
        $user = new User;

        $user->from_array($this->_post(null));

        $user->terms = $this->_post('terms');
        $user->password_confirm = $this->_post('password_confirm');

        if($type == 'buscas'){
            $user->validation['about_you']['rules'] = array();
            $user->validation['company_name']['rules'] = array();
        }

        $user->validate();
        $ok = $user->valid;
        if (!$ok) {
            $this->set_message($user->errors->string);
            $this->_data['messages_type'] = 'error';
        } else {

            $username = underscore_special($this->_post('full_name'));
            $email = $this->_post('email');
            $password = $this->_post('password');

            $additional_data = array(
                'full_name' => $this->_post('full_name'),
                'about_you' => $this->_post('about_you'),				
				'company_name' => $this->_post('company_name'),
				'mobile_phone' => $this->_post('mobile_phone'),				
                'city' => $this->_post('city'),
                'facebook' => $this->_post('facebook'),
                'twitter' => $this->_post('twitter'),
                'youtube' => $this->_post('youtube'),
            );

            $user_id = $this->ACL->register($username, $password, $email, $additional_data);

            if ($user_id) {
                if ($this->ACL->login($email, $password, true)) {
                    $this->set_message('Registro exitoso.');
                    $this->_data['is_logged'] = true;
                } else {
                    $this->_data['is_logged'] = false;
                    $this->set_message('Registro exitoso, ahora ingresa tus nuevos datos');
                }


                // Si es banda registrar miembros
                if ($this->_post('about_you') == 'Banda' && $this->_post('members')) {
                    $users_member = $user->users_member;
                    foreach ($this->_post('members') as $member) {
                        if (!empty($member)) {
                            $users_member->name = $member;
                            $users_member->user_id = $user_id;
                            if ($users_member->save_as_new()) {
                                $users_member->clear();
                            }
                        }
                    }
                }

                // Si es representante guardar representatodos
                if ($this->_post('about_you') == 'Representante' && $this->_post('representations')) {
                    $users_representation = $user->users_representation;
                    foreach ($this->_post('representations') as $representation) {
                        if (!empty($representation)) {
                            $users_representation->name = $representation;
                            $users_representation->user_id = $user_id;
                            if ($users_representation->save()) {
                                $users_representation->clear();
                            }
                        }
                    }
                }

                $this->_data['messages_type'] = 'success';
                $this->_data['messages_timeout'] = true;
                
            } else {
                $this->set_message($user->ACL->errors());
                $this->_data['messages_type'] = 'error';
            }
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
	
	public function recupera_correo() {

        $email = $_POST['emailRC'];

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        $ok = $this->form_validation->run($this);


        if ($ok) {
            echo json_encode(array('respuesta' => "ok"));
        }
        else{
            echo json_encode(array('respuesta' => "error"));

        }

        /*

        if (!$ok) {
            $this->set_message(validation_errors());
            $this->_data['messages_type'] = 'error';
        }else{
            $this->set_message('el corrreo se envio exitosamente.');
            $this->_data['messages_type'] = 'success';
        }
        */

        return $this->render_json($ok);





        
		

        
		
    }
	
	
	
	
}