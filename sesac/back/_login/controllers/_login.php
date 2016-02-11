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
        

        $this->add_modular_assets('js','login');
        $this->_data['public_assets'] = $this->publicAssets;
        return $this->view('login', false);
    }

    // ----------------------------------------------------------------------

    public function ingreso() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $ok = false;

        if ($this->form_validation->run($this) == true) {
            $remember = true;
            $ok = $this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember);
            
        }else{
            $this->set_alert(validation_errors(),'error');
        }
        if($ok){
            $this->_data['continue_url'] = cms_url('dashboard');
        }else{
            $this->set_alert('Sus credenciales no son válidas','error');
        }
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
                    $this->set_alert('La nueva contraseña fue enviada al correo ' . $email . ' correctamente.','success');
                } else {
                    $this->set_alert('Hubo un error al enviar el correo. Rectifique que esté activo e inténtelo de nuevo más tarde.','error');
                }
                
            } else {
                $this->set_alert($user->error->string,'error');
            }
            
        } else {
            $this->set_alert('E-mail inválido, inténte nuevamente','error');
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
//    public function install() {
//        return $this->ACL->register('administrator', 'bogota', 'cms@imaginamos.com', array(), array(1));
//    }
//
//    // ----------------------------------------------------------------------
}

