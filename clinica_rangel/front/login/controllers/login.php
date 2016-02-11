<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author Elbert Tous
 */

class Login extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $categoria = new categoria(); 
        $categorias_conmunicaciones = $categoria->join_related('linea')->where('cms_linea.titulo','LÍNEA DE COMUNICACIÓN')->where('categoria_id',NULL)->get(); 
  
        $categoria1 = new categoria(); 
        $categorias_seguiridad = $categoria1->join_related('linea')->where('cms_linea.titulo','SISTEMAS ELECTRÓNICOS DE SEGURIDAD')->where('categoria_id',NULL)->get(); 
  

        $this->_data['cat_com'] =  $categorias_conmunicaciones;
        $this->_data['cat_seg'] =  $categorias_seguiridad;
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
            $this->set_message(validation_errors(),'error');
        }
        if($ok){
            $this->_data['continue_url'] = site_url('home');
        }else{
            $this->set_message('Sus credenciales no son válidas','error');
        }
        return redirect('home');
    }

    // ----------------------------------------------------------------------
    
    public function recovery_password() {
        $user = new User;
        $email = $this->_post('email_recovery');
        
        $user->where_in_related_group('name', array('cliente', 'proveedor'));
        
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
                    $this->set_message('La nueva contraseña fue enviada al correo ' . $email . ' correctamente.','success');
                } else {
                    $this->set_message('Hubo un error al enviar el correo. Rectifique que esté activo e inténtelo de nuevo más tarde.','error');
                }
                
            } else {
                $this->set_message($user->error->string,'error');
            }
            
        } else {
            $this->set_message('E-mail inválido, inténte nuevamente','error');
        }
        
           return redirect('home');
    }

    // ----------------------------------------------------------------------

    public function logout() {
        $this->ACL->logout();

        return redirect('login', 'refresh');
    }
    
    // ----------------------------------------------------------------------
    
    private function _send_email($email, $password) {
        $this->load->library('email');
        
        $this->_data = array(
            'email' => $email,
            'password' => $password
        );
        $html = parent::view('home/emails/recovery_password');
       
        $this->email->from('info@setronics.com', 'Setronics');
        $this->email->to($email);

        $this->email->subject('Recuperación de contraseña para el sitio web setronics: ' . SITENAME);
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

