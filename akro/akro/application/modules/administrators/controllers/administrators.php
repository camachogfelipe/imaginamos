<?php

class Administrators extends MX_Controller {

    function index($return = '') {
        
        $returns['return'] = $return;

        $this->load->model('administrators_model');
        $sql = $this->administrators_model->getAll();
        if ($sql === FALSE) {
            $q = array();
        } else {
            $q = $sql;
        }
        $datos_plantilla["data"] = $q;

        $datos_plantilla["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $datos_plantilla["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $datos_plantilla["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $datos_plantilla["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);

        $this->load->view('administrators_view', $datos_plantilla);
    }

    function add() {

        $this->load->model('administrators_model');

        $email = $this->input->post('email_');
        $username = $this->input->post('username_');
        $password = $this->input->post('password_');

        $data = array(
            'username_user' => $username,
            'password_user' => md5($password),
            'email_user' => $email
        );

        $this->administrators_model->insert($data);
        $this->index('ok');
    }

    function delete() {
        $id_user = $this->uri->segment(3);
        $this->load->model('administrators_model');
        $code = $this->administrators_model->delete($id_user);
        redirect('administrators/index/' . $code);
    }

}
