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
class Administradores extends Back_Controller {

    private $_mapper = 'Users';

    public function __construct() {
        parent::__construct();

        $this->superadmin_area();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $grupos = new Groups();
        $grupos->where_in('name', array('superadmin', 'admin'))->get();

        $grupos_buscar = array();

        foreach ($grupos->all as $grupo) {
            $grupos_buscar[] = $grupo->id;
        }

        $datos = $this->ACL->users($grupos_buscar)->result();

        if (!empty($datos)) {
            foreach ($datos as &$dato) {
                $dato->grupos = $this->ACL->get_users_groups($dato->id)->result();
            }
        }

        $this->_data['datos'] = $datos;

        return $this->build('administradores/body');
    }

    // ----------------------------------------------------------------------

    public function add() {
        $securify = $this->load->library('securify');

        $password = $securify(random_string());
        $username = $this->_post('username');
        $email = $this->_post('email');

        $grupos = new Groups();
        $group = 'admin';

        $save = false;

        if ($this->_post('is_superadmin')) {
            $group = 'superadmin';
        }

        $grupos->get_by_name($group);

        if (!$this->ACL->email_check($email)) {
            $save = (bool) $this->ACL->register($username, $password, $email, array(), (array) $grupos->id);
        } else {
            $user = new \User;
            $user->get_by_email($email);

            $save = (bool) $this->ACL->add_to_group($grupos->id, $user->id);
        }

        if ($save) {
            $this->_send_email($username, $email, $password);
        } else {
            $errors = 'Error al crear el usuario';

            if ($this->ACL->errors()) {
                $errors = $this->ACL->errors();
            }
            $this->set_message($errors);
        }

        $this->_data['continue_url'] = cms_url('admin/administradores');

        return $this->render_json($save);
    }

    // ----------------------------------------------------------------------

    public function _send_email($username, $email, $password) {
        $this->load->library('email');

        $this->email->clear();

        $this->_data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $html = $this->view('emails/administradores/nuevo_usuario');

        $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
        $this->email->to($email);

        $this->email->subject('Hola ' . $username . ', estos son los datos de su nueva cuenta');
        $this->email->message($html);


        return $this->email->send();
    }

// ----------------------------------------------------------------------
}