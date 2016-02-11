<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author rigobcastro
 */
class _Login extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {

        // Redirigir si está logueado y tiene acceso al area de administración
        if (true === $this->have_admin_access()) {
            return redirect(cms_url('dashboard'), 'refresh');
        }
        


        echo parent::view('login');
    }

    // ----------------------------------------------------------------------

    public function ingreso() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $ok = false;

        if ($this->form_validation->run($this) == true) {
            $remember = true;
            $ok = $this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember);
        }
        
        $redirect_url = cms_url('dashboard');
        
        if($this->_post('continue_url')){
            $redirect_url = site_url($this->_post('continue_url'));
        }

        $this->_data['redirect_url'] = $redirect_url;

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
    
    public function recovery_password() {
        $user = new User;
        $email = $this->_post('email_recovery');
        
        $user->where_in_related_group('name', array('admin', 'superadmin'));
        
        $user->where('email', $email);
        
        $user->get();
        
        $ok = false;
        
        if($user->exists()){
            
            // Limpiando las validaciones para evitar errores de guardado
            $user->validation = array();
            
            $securify = $this->load->library('securify');
            $new_password = $securify(random_string());
            
            $new_hash_password = $this->ACL->hash_password($new_password, $user->salt);
            
            $user->password = $new_hash_password;
            $user->remember_code = null;
            
            if($user->save()){
                $ok = $this->_send_email($email, $new_password);
                
                if($ok){
                    $this->set_message('<p style="padding: 0 4em;">La nueva contraseña fue enviada al correo <strong>' . $email . '</strong> correctamente. Si no recibe el correo en un tiempo, revise su carpeta de <strong>"Correo no deseado"</strong> o <strong>"Spam"</strong>.<br><br> <a href="#tologin">Click acá para ingresar.</a></p>');
                } else {
                    $this->set_message('Hubo un error al enviar el correo. Rectifique que esté activo e inténtelo de nuevo más tarde.');
                }
                
            } else {
                $this->set_message($user->error->string);
            }
            
        } else {
            $this->set_message('E-mail inválido, inténte nuevamente');
        }
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
    
    public function change_password() {
        $ok = false;
         // Redirigir si está logueado y no tiene acceso al area de administración
        if (false === $this->have_admin_access()) {
            return redirect(cms_url('login'), 'refresh');
        }
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('old_pasword', 'Contraseña actual', 'required');
        $this->form_validation->set_rules('new_pasword', 'Nueva contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm_pasword]');
        $this->form_validation->set_rules('new_confirm_pasword', 'Repetir nueva contraseña', 'required');        


        if ($this->form_validation->run() == false) {
            //display the form
            //set the flash data error message if there is one
             $this->set_message(validation_errors());
        } else {
            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

            $ok = $this->ion_auth->change_password($identity, $this->input->post('old_pasword'), $this->input->post('new_pasword'));

            if ($ok) {
                $this->set_message('Contraseña cambiada exitosamente, tendrá que ingresar de nuevo con su nueva contraseña.');
                $this->_data['continue_url'] = cms_url('logout?from-change-password='.md5(now()));
                
            } else {
                $this->set_message($this->ion_auth->errors());
            }
        }
        
         return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function logout() {
        $this->ACL->logout();

        return redirect(cms_url('login'), 'refresh');
    }
    
    // ----------------------------------------------------------------------
    
    private function _send_email($email, $password) {
        $this->load->library('email');
        
        $this->_data = array(
            'email' => $email,
            'password' => $password
        );
        $html = parent::view('_admin/emails/administradores/recovery_password');
       
        $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
        $this->email->to($email);

        $this->email->subject('Recuperación de contraseña para el CMS de Imaginamos: ' . SITENAME);
        $this->email->message($html);
        
        
        return $this->email->send();
    }

    // ----------------------------------------------------------------------
    public function install() {
        return $this->ACL->register('administrator', 'bogota', 'cms@imaginamos.com', array(), array(1));
    }
//
//    // ----------------------------------------------------------------------
}

