<?php

/**
 * Auth 
 *
 * Módulo de autentificación de usuarios
 * 
 * @author rigobcastro
 */
class Usuarios extends Front_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
    }

    // ----------------------------------------------------------------------

    /**
     * Login de usuarios
     * 
     * @return build
     */
    public function login() {

        // SI es usuario enviar al perfil
        if ($this->is_usuario()) {
            return redirect('perfil', 'refresh');
        }
        $continue_uri = $this->_get('continue_uri') ? $this->_get('continue_uri') : 'perfil';

        // Validate form input
        $this->form_validation->set_rules('username', 'Usuario', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|xss_clean');

        if ($this->form_validation->run($this) == true) {
            //check to see if the user is logging in
            if ($this->ion_auth->login_both($this->input->post('username'), $this->input->post('password'), true)) {
                //if the login is successful
                //redirect them back to the home page
                redirect($continue_uri, 'refresh');
            } else {
                //if the login was un-successful
                //redirect them back to the login page
                $this->set_alert($this->ion_auth->errors(), 'error');
            }
        } else {
            //the user is not logging in so display the login page
            //set the flash data error message if there is one
            $this->set_alert(validation_errors(), 'error');
        }

        $this->_data['action_form'] = site_url('usuarios/login?do&continue_uri=' . $continue_uri);
        $this->_data['remember_pass_url'] = site_url('usuarios/forgot_password');


        return $this->set_title('Ingreso a Inshaka')->build('login');
    }

    // ----------------------------------------------------------------------

    /**
     * Login ajax
     * 
     * @return type
     */
    public function login_ajax() {
        $ok = false;

        $this->load->library('form_validation');

        //validate form input
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

        if ($this->form_validation->run($this) == TRUE) {
            $ok = $this->ion_auth->login($this->input->post('email'), $this->input->post('password'), true);
            if (!$ok) {
                $this->set_message('<strong>Email</strong> o <strong>contraseña</strong> inválidos');
            }
        } else {
            $this->set_message(validation_errors());
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    /**
     * Registro de un nuevo usuario
     * 
     */
    public function register() {

        if ($this->is_usuario()) {
            return redirect('home', 'refresh');
        }

        //validate form input
        $this->form_validation->set_rules('first_name', 'Nombre de contacto', 'required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Apellido de contacto', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Confirme contraseña', 'required');

        if ($this->form_validation->run($this) == true) {
            $username = strtolower($this->input->post('first_name')) . strtolower($this->input->post('last_name'));
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name')
            );
        }
        if ($this->form_validation->run($this) == true && $this->ion_auth->register($username, $password, $email, $additional_data)) {
            // Si el registro es exitoso, loguear automaticamente
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'))) {
                return redirect('usuarios/perfil', 'refresh');
            }
        } else {
            //display the create user form
            //set the flash data error message if there is one
            $this->set_alertbox((validation_errors()) ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : null), 'error');
        }

        $this->_data['nombre_input'] = array(
            'name' => 'first_name',
            'id' => 'first_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('first_name'),
            'class' => 'inputText442px'
        );
        $this->_data['apellidos_input'] = array(
            'name' => 'last_name',
            'id' => 'last_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('last_name'),
            'class' => 'inputText442px'
        );
        $this->_data['email_input'] = array(
            'name' => 'email',
            'id' => 'email',
            'type' => 'text',
            'value' => $this->form_validation->set_value('email'),
            'class' => 'inputText442px'
        );

        $this->_data['password_input'] = array(
            'name' => 'password',
            'id' => 'password',
            'type' => 'password',
            'value' => $this->form_validation->set_value('password'),
            'class' => 'inputText442px'
        );
        $this->_data['password_confirm_input'] = array(
            'name' => 'password_confirm',
            'id' => 'password_confirm',
            'type' => 'password',
            'value' => $this->form_validation->set_value('password_confirm'),
            'class' => 'inputText442px'
        );

        return $this->set_title('Ingreso')->build('registro');
    }

    // ----------------------------------------------------------------------

    /**
     * Logout de usuarios
     */
    public function logout() {
        $continue = $this->input->get('continue');

        if (empty($continue)) {
            $continue = 'usuarios/login';
        }

        //log the user out
        $this->ion_auth->logout();

        //redirect them back to the page they came from
        redirect($continue, 'refresh');
    }

    // ----------------------------------------------------------------------

    /**
     * Recordar contraseña
     * 
     * @return type
     */
    public function forgot_password() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == false) {
            $this->set_alertbox((validation_errors()) ? validation_errors() : null, 'error');
        } else {
            //run the forgotten password method to email an activation code to the user
            $forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

            if ($forgotten) {
                //if there were no errors
                $this->set_alertbox($this->ion_auth->messages(), 'success');
            } else {
                $this->set_alertbox($this->ion_auth->errors(), 'error');
            }
        }


        $this->_data['action_form'] = site_url('usuarios/forgot_password');
        $this->_data['login_url'] = site_url('usuarios/login');

        return $this->set_title('Recordar contraseña')->build('forgot_password');
    }

    // ----------------------------------------------------------------------

    /**
     * Resetear contraseña
     * 
     * @param string $code
     * @return build
     */
    public function reset_password($code = NULL) {
        if (!$code) {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);

        if ($user) {
            //if the code is valid then display the password reset form

            $this->form_validation->set_rules('new', 'Contraseña nueva', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', 'Confirma contraseña nueva', 'required');

            if ($this->form_validation->run($this) == false) {
                //display the form
                //set the flash data error message if there is one
                $this->set_alertbox((validation_errors()) ? validation_errors() : null, 'error');
            } else {
                // do we have a valid request?
                if ($user->id != $this->input->post('user_id')) {

                    //something fishy might be up
                    $this->ion_auth->clear_forgotten_password_code($code);

                    return show_error('La aplicación no ha validado los protocolos de seguridad.');
                } else {
                    // finally change the password
                    $identity = $user->{$this->config->item('identity', 'ion_auth')};

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                    if ($change) {
                        //if the password was successfully changed
                        //$this->session->set_flashdata('message', $this->ion_auth->messages());
                        return $this->logout();
                    } else {
                        $this->set_alertbox($this->ion_auth->errors(), 'error');
                    }
                }
            }
        } else {
            // Log del intento de recuperacion de contraseña fallido
            log_message('error', 'Intento de recuperación de contraseña fallido por IP:' . $this->input->ip_address());

            // Retornar el error a pantalla
            return show_error('El link para cambiar la contraseña no es válido, está vencido o ya fue usado. Regrese a la página correspondiente para solicitar uno nuevo.', 500, 'Error al resetear contraseña');
        }

        $this->_data['action_form'] = current_url();
        $this->_data['login_url'] = site_url('usuarios/login');


        $this->_data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
        $this->_data['new_password_input'] = array(
            'name' => 'new',
            'id' => 'new',
            'type' => 'password',
            'class' => 'campo',
            'placeholder' => 'Nueva contraseña',
            'pattern' => '^.{' . $this->_data['min_password_length'] . '}.*$',
        );
        $this->_data['new_password_confirm_input'] = array(
            'name' => 'new_confirm',
            'id' => 'new_confirm',
            'type' => 'password',
            'class' => 'campo',
            'placeholder' => 'Repite nueva contraseña',
            'pattern' => '^.{' . $this->_data['min_password_length'] . '}.*$',
        );
        $this->_data['form_idden'] = array(
            'user_id' => $user->id
        );
        $this->_data['code'] = $code;

        return $this->set_title('Crear nueva contraseña')->build('reset_password');
    }
    
    // ----------------------------------------------------------------------

    public function change_password() {
        $this->form_validation->set_rules('old', 'Contraseña actual', 'required');
        $this->form_validation->set_rules('new', 'Nueva contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', 'Repetir nueva contraseña', 'required');

        if (!$this->is_usuario()) {
            return show_404();
        }

        $user = $this->ACL->user()->row();

        if ($this->form_validation->run() == false) {
            if(validation_errors()){
                $this->set_alert(validation_errors(), 'error');
            }
        } else {
            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));
            
            $change = $this->ACL->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change) {
                return redirect('usuarios/logout?continue=usuarios/login?change_password=' . time());
            } else {
                $this->session->set_flashdata('message', $this->ACL->errors());
                $this->set_alert($this->ion_auth->errors(), 'error');
            }
        }
        
        return $this->set_title('Cambiar contraseña de usuario')->build('change_password');
    }

    // ----------------------------------------------------------------------
}