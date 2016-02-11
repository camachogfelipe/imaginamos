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
                $this->set_alert($this->ACL->errors(), 'error');
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
            $ok = $this->ACL->login($this->input->post('email'), $this->input->post('password'), true);
            if (!$ok) {
                $this->set_message('<strong>Email</strong> o <strong>contraseña</strong> inválidos');
                $this->_data['messages_type'] = 'error';
            } 
//            else {
//                $this->set_message('Has ingresado correctamente.');
//                $this->_data['messages_type'] = 'success';
//            }
        } else {
            $this->set_message(validation_errors());
            $this->_data['messages_type'] = 'error';
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    /**
     * Logout de usuarios
     */
    public function logout() {
        //log the user out
        $this->ACL->logout();

        //redirect them back to the page they came from
        redirect('/', 'refresh');
    }

    // ---------------------------------------------------------------------

    public function check_logged() {
        $ok = $this->is_usuario();

        if ($ok === true) {
            $user = new User;
            $user->get_current();
            $ok = $user->exists();

            if (!$ok) {
                $this->session->sess_destroy();
            }
        }

        echo json_encode($ok);
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
        

        $ok = false;

        if ($this->is_usuario()) {

            $this->form_validation->set_rules('old', 'Contraseña actual', 'required');
            $this->form_validation->set_rules('new', 'Nueva contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', 'Repetir nueva contraseña', 'required');


            $user = $this->ACL->user()->row();

            if ($this->form_validation->run() == false) {
                if (validation_errors()) {
                    $this->set_message(validation_errors());
                    $this->_data['messages_type'] = 'error';
                }
            } else {
                $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

                $ok = $this->ACL->change_password($identity, $this->input->post('old'), $this->input->post('new'));

                if ($ok) {
                     $this->set_message('Contraseña cambiada correctamente. Ingresa nuevamente para confirmarla.');
                    $this->_data['messages_type'] = 'success';
                    $this->_data['continue_url'] = site_url('usuarios/logout');
                    $this->_data['delay_to_continue'] = 1.5;
                } else {
                    $this->set_message($this->ACL->errors());
                    $this->_data['messages_type'] = 'error';
                }
            }
        }

        return $this->render_json($ok);
    }

    public function _datosUsuario($email){
        $this->db->where('email', $email);
        $q = $this->db->get('users');

        if($q->num_rows() == 0){
            return FALSE;
        }
        else{
            return $q->row();
        }

    }

    public function _change_password($id, $password){
        $this->db->where('id',$id);
        $this->db->update('users',array('password'=>$password));

        if($this->db->affected_rows() == 0){
            return false;
        }
        else{
            return true;
        }
    }

    public function recover_pass(){
        $username = $this->input->post('email');

        $ok = "1";
        $datoUsuario = $this->_datosUsuario($this->input->post('email'));

        if($username != ""){
            if($datoUsuario){
                $this->load->helper('string');

                $clave = random_string('alnum',10);
                $nuevaClave = sha1($clave.$datoUsuario->salt);

                if($this->_change_password($datoUsuario->id,$nuevaClave)){

                    $datos = array(
                        'clave' => $clave,
                        'nombres' => $datoUsuario->full_name,
                        'usuario' => $datoUsuario->email
                    );
                    $ok = "1";

                    $this->load->library('email');
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.gmail.com',
                        'smtp_port' => '465',
                        'smtp_user' => 'oscar.caranton@imaginamos.com.co',
                        'smtp_pass' => 'yoteesperare1234',
                        'mailtype' => 'html',
                        'chartset' => 'utf8'

                    );

                    $this->email->initialize($config);
                    $this->email->set_newline("r/n");
                    $this->email->from('cms@imaginamos.com','CMS');
                    $this->email->to($datoUsuario->email);
                    $this->email->subject('Nueva Clave');
                    $html = $this->load->view('email/cambio_clave',$datos,TRUE);
                    $this->email->message($html);
                    $this->email->send();
                }
                else{
                    $ok = "Error cambiando clave";
                }

            }
            else {
                $ok = "Usuario Invalido";
            }
        }
        else{
            $ok = "Ingrese su email.";
        }

        echo $ok;
    }

    // ----------------------------------------------------------------------
}