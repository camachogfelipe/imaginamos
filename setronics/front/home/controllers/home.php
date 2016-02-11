<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $redes = new\ redes();
        $this->_data['datos'] = $redes->get_redes();

        $contacto = new\ contacto();
        $this->_data['data_contact'] = $contacto->get_by_id(1);

        $departamentos = new\ departamentos();
        $this->_data['deptos'] = $departamentos->get_deptos();

        $obj = new novedad();
        $this->_data['novedades'] = $obj->join_related('imagen')
                        ->order_by('fecha', 'DESC')
                        ->limit(3)->get();
                $this->db->select('cms_imagen.*');
        $this->db->from('cms_imagen');
        $this->db->join('cms_logo', 'cms_imagen.id  = cms_logo.id');
        $this->_data['logos'] =  $this->getresult($this->db->get());

        //  $banners = new\ banners();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
        
        $b1 = new barner_izq();
        $b2 = new barner_der_up();
        $b3 = new barner_der_down();
        $l = new linea();
        $l->get();
       
        $datos = array();
        foreach ($l as $v) {
            $datos[$v->id]['l'] = $v;   
            $r2 =  $b1->join_related('imagen')->limit(1)->get_by_linea_id($v->id); 
            foreach ($r2 as $obj) {
                  $datos[$v->id]['b1'] = $obj; 
             }
            $resultb2 = $b2->join_related('imagen')->limit(2)->get_by_linea_id($v->id);  
            foreach ($resultb2 as $va) {
                $datos[$v->id]['b2'][] = $va; 
            }
            $r3 = $b3->join_related('imagen')->limit(1)->get_by_linea_id($v->id);  
             foreach ($r3 as $obj) {
                  $datos[$v->id]['b3'] = $obj; 
             }
            
        }
    
        $this->_data['barner'] =  $datos;
        


        return $this->build('index');
    }
    
   //    public function valadateZona($zona) {
//        $zonas = array('izq','der_up','der_down'); 
//        if(array_key_exists($zona, $zonas))
//            return true; 
//        else
//            return false;
//    }
//    
//     public function bpartializq() {
//       $id = $this->_get('id');
//       $b = new barner_der_up;
//       $b->join_related('imagen')->where('linea_id',$id)->limit(2)->get();
//       foreach ($b as $v) {
//          $datos = array(
//           'imagen' => $v->imagen_path,
//           'titulo' => $v->titulo,
//           'subtitulo' => $v->subtitulo,
//           'url' => $v->url,
//          );    
//       }
//       
//          echo json_encode($datos);
//    }
//    
//       public function bpartialial() {
//       $id = $this->_get('id');
//       $b = new barner_der_up;
//       $b->join_related('imagen')->where('linea_id',$id)->limit(2)->get();
//       foreach ($b as $v) {
//          $datos = array(
//           'imagen' => $v->imagen_path,
//           'titulo' => $v->titulo,
//           'subtitulo' => $v->subtitulo,
//           'url' => $v->url,
//          );    
//       }
//       
//          echo json_encode($datos);
//    }
//    
//    
//    
//    public function bpartialup() {
//       $id = $this->_get('id');
//       $b = new barner_der_up;
//       $b->join_related('imagen')->where('linea_id',$id)->limit(2)->get();
//       foreach ($b as $v) {
//          $datos = array(
//           'imagen' => $v->imagen_path,
//           'titulo' => $v->titulo,
//           'subtitulo' => $v->subtitulo,
//           'url' => $v->url,
//          );    
//       }
//       
//          echo json_encode($datos);
//    }
//    
//    
     

    
    // ----------------------------------------------------------------------
/*
    public function add_client() {
        $user = new \Clientes();
 id,
 ,
 ,
 ,
 salt,
 ,
 activation_code,
 forgotten_password_code,
 forgotten_password_time,
 remember_code,
 created_on,
 last_login,
         active,,,,,

        $post = array(
            "first_name" => $this->input->post('cli_nom'),
            "last_name" => $this->input->post('cli_ape'),
            "phone" => $this->input->post('cli_tel'),
            "email" => $this->input->post('cli_ema'),
            "company" => $this->input->post('cli_com'),
          //  "tipo_usuario" => $this->input->post('cli_tip'),
            "departamento_id" => $this->input->post('cli_dep'),
            //"ciudad" => $this->input->post('cli_ciu'),
            "username" => $this->input->post('cli_id_usu'),
            "password" => md5($this->input->post('cli_pass_usu')),
            "ip_address" => $_SERVER['REMOTE_ADDR']
        );

        $save = (bool) $user->insert($post);
        if ($save == 1) {
            $this->set_alert_session('Se ha creado el cliente correctamente', 'success');
            redirect('home');
        } else {
            $this->set_alert_session('Error al crear el cliente', 'error');
            redirect('home');
        }
    }
 * 
 */
    
    
    public function add() {
        $securify = $this->load->library('securify');

        $password = $securify($this->input->post('cli_pass_usu'));
        $username = $this->_post('cli_id_usu');
        $email = $this->_post('cli_ema');

        
        $post = array(
            "first_name" => $this->input->post('cli_nom'),
            "last_name" => $this->input->post('cli_ape'),
            "phone" => $this->input->post('cli_tel'),
         //   "email" => $this->input->post('cli_ema'),
            "company" => $this->input->post('cli_com'),
          //  "tipo_usuario" => $this->input->post('cli_tip'),
            "departamento_id" => $this->input->post('cli_dep'),
            //"ciudad" => $this->input->post('cli_ciu'),
          //  "username" => $this->input->post('cli_id_usu'),
        //    "password" => md5($this->input->post('cli_pass_usu')),
            "ip_address" => $_SERVER['REMOTE_ADDR']
        );
        
        $grupos = new Groups();
        $group = 'cliente';

        $save = false;

        if ($this->_post('tipo_usuario') == 1 ) {
            $group = 'cliente';
        }

        if ($this->_post('tipo_usuario') == 2 ) {
            $group = 'proveedor';
        }
        
        $grupos->get_by_name($group);

        if (!$this->ACL->email_check($email)) {
            $save = (bool) $this->ACL->register($username, $password, $email, $post, (array) $grupos->id);
        } else {
            $user = new \User;
            $user->get_by_email($email);

            $save = (bool) $this->ACL->add_to_group($grupos->id, $user->id);
        }

        if ($save) {
            $this->set_alert_session('Se ha creado el usuario','success');
            $this->_send_email($username, $email, $password);
        } else {
            $errors = 'Error al crear el usuario';

            if ($this->ACL->errors()) {
                $errors = $this->ACL->errors();
            }
            $this->set_alert_session($errors,'error');
        }

        redirect('home');
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
        $html = $this->view('emails/user/nuevo_usuario');

        $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
        $this->email->to($email);

        $this->email->subject('Hola ' . $username . ', estos son los datos de su nueva cuenta');
        $this->email->message($html);


        return $this->email->send();
    }


}
 