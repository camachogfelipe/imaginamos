<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Cms extends MX_Controller {

    function index($return = '') {
        $is_logged = $this->session->userdata('is_logged_in');
        if ($is_logged === TRUE) {

            $datos_plantilla["administrator"] = $this->load->view('general_includes/cms_administrator', null, true);
            $datos_plantilla["icons"] = $this->load->view('general_includes/cms_icons', null, true);

            $this->load->model('cms_model');
            $lista_menu['menu'] = $this->cms_model->menuIndex();
            $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
            $returns['return'] = $return;
            $lista_menu["functions"] = $this->load->view('general_includes/cms_functions', $returns, true);
            $datos_plantilla["index"] = $this->load->view('general_includes/cms_index', $lista_menu, true);

            $this->load->view('cms_dashboard', $datos_plantilla);
        } else {
            $returns['return'] = $return;
            $datos_plantilla["functions"] = $this->load->view('general_includes/cms_functions', $returns, true);
            $this->load->view('cms_login', $datos_plantilla);
        }
    }

    //-------------------------- Carga la zona admin

    function admin_zone($return = '') {

        $is_logged = $this->session->userdata('is_logged_in');

        if ($is_logged === TRUE) {

            $datos_plantilla["administrator"] = $this->load->view('general_includes/cms_administrator', null, true);
            $datos_plantilla["icons"] = $this->load->view('general_includes/cms_icons', null, true);
            $datos_plantilla["index"] = $this->load->view('general_includes/cms_menu_admin', null, true);


            $this->load->view('cms_admin_zone', $datos_plantilla);
        } else {
            $returns['return'] = $return;
            $datos_plantilla["functions"] = $this->load->view('general_includes/cms_functions', $returns, true);
            $this->load->view('cms_login', $datos_plantilla);
        }
    }

    //-------------------------- vista para recuperar contraseña

    function recovery() {
        $returns['return'] = $this->uri->segment(3);
        $datos_plantilla["functions"] = $this->load->view('general_includes/cms_functions', $returns, true);
        $this->load->view('cms_recovery', $datos_plantilla);
    }

    //-------------------------- vista cms "perfil"

    function dashboard($return = '') {

        $returns['return'] = $return;

        $datos_plantilla["administrator"] = $this->load->view('general_includes/cms_administrator', null, true);
        $datos_plantilla["icons"] = $this->load->view('general_includes/cms_icons', null, true);
        $datos_plantilla["index"] = $this->load->view('general_includes/cms_index', null, true);
        $datos_plantilla["functions"] = $this->load->view('general_includes/cms_functions', $returns, true);
        $this->load->view('cms_dashboard', $datos_plantilla);
    }

    //-------------------------- Validar login

    function validate() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');


        if ($user == "" || $pass == "") {
            $this->index('erLogVac');
        } else {
            $this->load->model('cms_model');
            $data = array('email_user ' => $user, 'password' => $pass);
            $q = $this->cms_model->validate($data);
            if ($q === FALSE) {
                $this->index('erLogin');
            } else {

                $session_array = array(
                    'is_logged_in' => TRUE,
                    'roll' => $q[0]->rol_user,
                    'username_user' => $q[0]->username_user,
                    'id_user' => $q[0]->id_user
                );

                $this->session->set_userdata($session_array);
                redirect('cms/');
            }
        }
    }

    //-------------------------- Salir CMS


    function logout() {
        $this->session->sess_destroy();
        redirect('cms/index');
    }

    //-------------------------- Recuperar contraseña por medio de un email


    function recovery_() {
        $email = $this->input->post('emailRecovery');
        if ($email == "") {
            redirect('cms/recovery/fail1');
        } else {
            $this->load->model('cms_model');
            $q = $this->cms_model->getpass($email);
            if ($q === FALSE) {
                redirect('cms/recovery/fail2');
            } else {

                $newpass = $this->RandomString();

                $dataNew = array(
                    'password_user' => md5($newpass)
                );
                $this->cms_model->updatepass($dataNew, $q[0]->id_user);

                $config = array(
                    'mailtype' => 'html'
                );



                $parameters['username'] = $q[0]->username_user;
                $parameters['newpass'] = $newpass;
                $msj = $this->load->view('cms_recovery_template_mail', $parameters, true);


                $this->load->library('email', $config);
                $this->email->from('cms@imaginamos.com', 'Imaginamos');
                $this->email->to($email);
//                $this->email->bcc('andres.ramirez@imaginamos.com.co');
                $this->email->subject('Solicitud de contrase&ntilde;');
                $this->email->message($msj);
                $this->email->send();
                redirect('cms/index/ok');
            }
        }
    }

    //-------------------------- Se crea una cadena aleatoria

    function RandomString($length = 8, $uc = TRUE, $n = TRUE) {

        $source = '';
        if ($uc == 1) {
            $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($n == 1) {
            $source .= '1234567890';
        }
        if ($length > 0) {
            $rstr = "";
            $source = str_split($source, 1);
            for ($i = 1; $i <= $length; $i++) {
                mt_srand((double) microtime() * 1000000);
                $num = mt_rand(1, count($source));
                $rstr .= $source[$num - 1];
            }
        }
        return $rstr;
    }

    //-------------------------- Cambiar clave desde el perfil


    function chagePass() {
        $newpass = $this->input->post('newpass');
        $oldpass = $this->input->post('oldpass');


        if ($newpass == "" || $oldpass == "") {
            $this->index('erRequired');
        } else {
            $this->load->model('cms_model');
            $q = $this->cms_model->getOne($this->session->userdata('id_user'));

            if ($q[0]->password_user != md5($oldpass)) {
                $this->index('fail2');
            } else {

                $dataNew = array(
                    'password_user' => md5($newpass)
                );
                $this->cms_model->updatepass($dataNew, $q[0]->id_user);

                redirect('cms/index/ok');
            }
        }
    }

    //-------------------------- Cambiar orden del Menú



    function changeOrder() {

        $this->load->model('cms_model');

        $newOrder = $this->input->post('mod');
        $changed = 1;

        foreach ($newOrder as $orden => $id) {
            
            $changedArray = array(
                'pos' => $changed
            );

            if ($this->cms_model->changeOrden($id, $changedArray)) {
                $changed++;
            }
        }
    }

}