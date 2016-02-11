<?php

class Site extends MX_Controller {

    function __construct() {
        parent::__construct();
        // Se le asigna a la informacion a la variable $user.
        $this->user = $this->session->userdata('logged_user');
        $this->load->model('site_model');
    }


    function save() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->db->insert('members', $data);
        $msj = "";
        $msj.= "Nombre : " . $this->input->post('name') . "<br>";
        $msj.= "Empresa : " . $this->input->post('email') . "<br>";

        $config = array('mailtype' => 'html');
        
        $this->load->library('email', $config);
        $this->email->from($this->input->post('name'), 'Imaginamos - Bioempak - Suscripcion');
        $this->email->to('administracion@bioempak.com');
        $this->email->bcc('andres.ramirez@imaginamos.com.co');

        $this->email->subject('Suscripcion Bioempak');

        $this->email->message($msj);

        //$this->session->set_userdata($data_);

        $this->email->send();
        
    }

    function ndetail() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $data['new'] = $this->db->get('news')->row();
        $this->load->view('noticia_detalle', $data);
    }

    function send() {
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $company = $this->input->post('company');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $comment = $this->input->post('comment');

        $config = array('mailtype' => 'html');

        $msj = "";
        $msj.= "Nombre : " . $name . ' ' . $lastname . "<br>";
        $msj.= "Empresa : " . $company . "<br>";
        $msj.= "Email : " . $email . "<br>";
        $msj.= "Telefono : " . $phone . "<br>";
        $msj.= "Asunto : " . $subject . "<br>";
        $msj.= "Commentario : " . $comment . "<br>" . "<br>";

        $this->load->library('email', $config);
        $this->email->from($email, 'Imaginamos - Bioempak');
        $this->email->to('administracion@bioempak.com');
        $this->email->bcc('andres.ramirez@imaginamos.com.co');

        $this->email->subject('Contacto Bioempak');

        $this->email->message($msj);

        //$this->session->set_userdata($data_);

        $this->email->send();
    }
    
    function sendCC() {
        $producto = $this->input->post('producto');
        $impresion = $this->input->post('impresion');
        $unidad = $this->input->post('unidad');
        $cantidad = $this->input->post('cantidad');
        $comment = $this->input->post('comentario');

        $config = array('mailtype' => 'html');

        $msj = "";
        $msj.= "Producto : " . $producto . "<br>";
        $msj.= "Impresion : " . $impresion . "<br>";
        $msj.= "Unidad : " . $unidad . "<br>";
        $msj.= "Cantidad : " . $cantidad . "<br>";
        $msj.= "Commentario : " . $comment . "<br>" . "<br>";

        $this->load->library('email', $config);
        $this->email->from('administracion@bioempak.com', 'Imaginamos - Bioempak');
        $this->email->to('administracion@bioempak.com');
        $this->email->bcc('andres.ramirez@imaginamos.com.co');

        $this->email->subject('Cotizacion Bioempak');

        $this->email->message($msj);

        //$this->session->set_userdata($data_);

        $this->email->send();
    }

    function index() {

        $data['customers'] = $this->db->get('customers')->result();
        $data['map'] = $this->db->get('map')->row();
        $this->load->view('index', $data);
    }

    function us() {

        $this->load->view('nosotros');
    }

    function prods() {

        $this->load->view('productos');
    }

    function news() {
        $this->load->library('pagination');
        $noticias = $this->site_model->obtenerNoticias();
        $data['noticias'] = $noticias;
        $comentarios = $this->site_model->obtenerComentarios(1);
        $data['comentarios'] = $comentarios;
        $this->load->view('noticias', $data);
        //$this->leerComentarios();
        //$config['base_url']     = 'http://localhost/imaginamos/bioempak/site/news';
        $config['base_url'] = 'http://localhost/bioempak/site/news';
        $config['total_rows'] = count($this->db->get('noticias')->result());
        $config['per_page'] = 3;
        $config['num_links'] = 20;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        /*$this->db->order_by('id', 'desc');
        $data['news'] = $this->db->get('news', $config['per_page'], $this->uri->segment(3))->result();
        $this->load->view('noticias', $data);*/

        //cargar noticias
        
        
        $this->load->view('noticias', $data);

    }

    function tech() {
        $this->db->where('id', 1);
        $data['t1'] = $this->db->get('tech')->row();

        $this->db->where('id', 2);
        $data['t2'] = $this->db->get('tech')->row();

        $this->db->where('id', 3);
        $data['t3'] = $this->db->get('tech')->row();

        $this->load->view('tecnologia', $data);
    }

    function contact() {

        $this->load->view('contacto');
    }

    function sendc() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $company = $this->input->post('company');
        $website = $this->input->post('website');
        $tp = $this->input->post('tp');
        $cc = $this->input->post('cc');
        $co = $this->input->post('co');

        $config = array(
            'mailtype' => 'html'
        );

        $msj = "Nombre :" . $name . "<br>";
        $msj.= "Telefono :" . $phone . "<br>";
        $msj.= "Empresa :" . $company . "<br>";
        $msj.= "Email :" . $email . "<br>";
        $msj.= "Pagina web :" . $website . "<br>";
        $msj.= "Tipo proyecto :" . $tp . "<br>";
        $msj.= "Tipo documento :" . $cc . "<br>";
        $msj.= "Comentario :" . $co . "<br>";

        $this->load->library('email', $config);

        $this->email->from($email, $name);
        $this->email->to('contacto@promacompakltda.com');
        //$this->email->to('andres.ramirez@imaginamos.com.co');
        //$this->email->bcc('andres.ramirez@imaginamos.com.co');

        $this->email->subject('Contacto');

        $this->email->message($msj);

        $this->email->send();

        redirect('site/index');
    }

    function login(){
        if ($this->input->post('submit')){
          // Get the input from the form and dont forget to add md5
          // function to the password.
          $this->db->where('email', $this->input->post('email'));
          $this->db->where('password', md5($this->input->post('password')));
          $result = $this->db->get('usuarios');
          $this->site_model($result);
          
              if($result->num_rows() != 0){
                $datosUsuario = array(
                        'id'        => $result->id,
                        'email'     => $result->email,
                        'nombre'    => $result->nombre,
                        'logged_in' => TRUE
                       );
                $this->session->set_userdata($datosUsuario);
            }
    
        }
    }

    /*function leerComentarios(){
        if(isset($_POST['id_noticia'])){
            var_dump($_POST['id_noticia']);
            $data['id_noticia'] = $_POST['id_noticia'];
            $comentarios = $this->site_model->obtenerComentarios($_POST['id_noticia']);
            $data['comentarios'] = $comentarios;
            $this->load->view('noticias', $data);
        }
    }*/

    function obtenerVotacion(){
        //$noticias = $this->site_model->obtenerNoticias( );
        $data['id'] = $this->uri->segment(3);
        $this->site_model->calificarNoticia($_POST['votacion'], $id);
    }

    function datosCotizacion(){
    $datos = array(
        'nombre' => $this->input->post('nombre'),
        'email' => $this->input->post('email'),
        'tipo' => $this->input->post('tipo') ,
        'empresa' => $this->input->post('empresa'),
        'id_producto' => $this->input->post('id_producto'),
        'id_impresion' => $this->input->post('id_impresion') ,
        'telefono' => $this->input->post('telefono'),
        'unidades' => $this->input->post('unidades'),
        'cantidad' => $this->input->post('cantidad') ,
        'comentario' => $this->input->post('comentario'),
        'id_sector' => $this->input->post('id_sector')
        );
    $this->site_model->crearCotizacion($datos);
}
}