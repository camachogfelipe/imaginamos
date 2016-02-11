<?php

/**
 * Perfil - Usuario 
 *
 * Módulo de perfil del usuario
 * 
 * @author rigobcastro
 */
class Perfil extends Front_Controller {

    public $assets_js = array(
        'editar_perfil.js'
    );
    
    private $_datos_usuario;

    public function __construct() {
        parent::__construct();

        // Load Ciudades model
        $this->load->model(array('cms_admin/ciudad', 'cms_pedidos/pedidos_pago'));

        if (!$this->is_usuario()) {
            redirect('usuarios/login');
        }

        // Tomamos el id del usuario actual desde el ACL
        $user_id = $this->ACL->user_id();
        $this->_datos_usuario = new User($user_id);

        if (empty($this->_datos_usuario) OR !$this->_datos_usuario->exists()) {
            show_error('Error al acceder a la aplicación.');
        }
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->set_datos($this->_datos_usuario);

        $this->_data['editar_url'] = site_url('usuarios/perfil/editar');

        return $this->set_title('Mi perfil')->build('perfil/body');
    }

    // ----------------------------------------------------------------------

    public function editar() {
        $tipos_documento = new Tipos_documento;
        $datos = & $this->_datos_usuario;
        $this->set_datos($datos);

        $this->_data['tipos_documento'] = $tipos_documento->get_for_select();
        $this->_data['editar_action_form'] = site_url('usuarios/perfil/do_editar');
        $this->_data['change_password_action_form'] = site_url('usuarios/perfil/change_password');

        return $this->set_title('Editar perfil')->build('perfil/editar');
    }

    // ----------------------------------------------------------------------

    public function do_editar() {
        $datos = & $this->_datos_usuario;
        
        
        
        $ok = $datos->from_array($this->input->post(null), null, true);
        if (!$ok) {
            if (!empty($datos->error->string)) {
                $this->set_alertbox($datos->error->string, 'error');
            }
        } else {
            $this->set_alertbox('Perfil editado exitosamente', 'success');
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function change_password() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('current_password', 'Contraseña actual', 'required');
        $this->form_validation->set_rules('new_password', 'Nueva contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_password_confirm]');
        $this->form_validation->set_rules('new_password_confirm', 'Repita nueva contraseña', 'required');

       
        $ok = $this->form_validation->run($this);

        if ( ! $ok) {
            //display the form
            //set the flash data error message if there is one
            $this->set_alertbox((validation_errors()) ? validation_errors() : $this->session->flashdata('message'), 'error');
            
        } else {
            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

            $change = $this->ion_auth->change_password($identity, $this->input->post('current_password'), $this->input->post('new_password'));

            if ($change) {
                $this->set_alertbox('El cambio de contraseña fue exitoso, ahora tendrás que ingresar de nuevo con la nueva contraseña...', 'success');
                $this->_data['redirect_url'] = site_url('usuarios/logout');
               
            } else {
                $this->set_alertbox($this->ion_auth->errors(), 'error');
            }
        }
        
        return $this->render_json($ok);
    }

}