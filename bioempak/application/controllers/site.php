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
				$data['sectores'] = $this->site_model->obtenerSectores();
        $data['customers'] = $this->db->get('customers')->result();
        $data['map'] = $this->db->get('map')->row();
        $this->load->view('index', $data);
    }

    function us() {
				$data['sectores'] = $this->site_model->obtenerSectores();
        $this->load->view('nosotros', $data);
    }

    function productos() {
				$data['sectores'] = $this->site_model->obtenerSectores();
				$data['productos'] = $this->site_model->obtenerProductos();
				$data['impresiones'] = $this->site_model->obtenerImpresiones();
				$data['imagenes'] = $this->site_model->obtenerImagenes();
        $this->load->view('productos', $data);
    }
		
		function productos2() {
				$data['sectores'] = $this->site_model->obtenerSectores();
				$data['productos'] = $this->site_model->obtenerProductos();
				$data['impresiones'] = $this->site_model->obtenerImpresiones();
				$data['imagenes'] = $this->site_model->obtenerImagenes();
        $this->load->view('productos2', $data);
    }

    function news() {
				$data['sectores'] = $this->site_model->obtenerSectores();
				$data['intro'] = $this->site_model->obtenerIntroNews();
        $this->load->library('pagination');
        $noticias = $this->site_model->obtenerNoticias();
        $data['noticias'] = $noticias;
        $data['comentarios'] = $this->site_model->obtenerComentarios();
				$data['session'] = $this->session->all_userdata();
        //$this->load->view('noticias', $data);
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
        $data['tecnologia'] = $this->site_model->obtenerTech();
				$data['sectores'] = $this->site_model->obtenerSectores();
        $this->load->view('tecnologia', $data);
    }

    function contact() {
				$data['sectores'] = $this->site_model->obtenerSectores();
        $this->load->view('contacto', $data);
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
				$this->load->library('session');
        if ($this->input->post('email')){
          // Get the input from the form and dont forget to add md5
          // function to the password.	
					$datos = array("email" => $this->input->post('email'), "password" => md5($this->input->post('password')));
					$result = $this->site_model->verificaLogin($datos);
					if(!empty($result)){
						$datosUsuario = array(
							'id'        => $result[0]->id,
							'email'     => $result[0]->email,
							'nombre'    => $result[0]->nombre,
							'logged_in' => TRUE
						);
						$this->session->set_userdata($datosUsuario);
					}
					else $datosUsuario = array('error' => 'Login incorrecto');
        }//print_r($datosUsuario); exit();
				redirect('site/news', $data);
    }
		
		public function salir() {
			$this->session->sess_destroy();
			redirect('site/news', $data);
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
					'tipo' => $this->input->post('empresa') ,
					'empresa' => $this->input->post('nempresa'),
					'id_producto' => $this->input->post('producto'),
					'id_impresion' => $this->input->post('impresion') ,
					'telefono' => $this->input->post('telefono'),
					'unidades' => $this->input->post('unidad'),
					'cantidad' => $this->input->post('cantidad') ,
					'comentario' => $this->input->post('comentario'),
					'id_sector' => $this->input->post('sector')
					);
			$this->site_model->crearCotizacion($datos);
			
			$producto = $this->site_model->traeProducto($datos['id_producto']);
			$impresion = $this->site_model->traeImpresion($datos['id_impresion']);
			$sector = $this->site_model->traeSector($datos['id_sector']);
			
			$config = array('mailtype' => 'html');

			$msj = $datos['nombre']." ha enviado una cotización.<br><br>";
			$msj.= "Email : " . $datos['email'] . "<br>";
			$msj.= "Teléfono : " . $datos['telefono'] . "<br>";
			$msj.= "empresa : " . $datos['empresa'] . "<br><br>";			
			$msj.= "Producto : " . $producto[0]->titulo . " " . $producto[0]->subtitulo . "<br>";
			$msj.= "Impresion : " . $impresion[0]->nombre . "<br>";
			$msj.= "Unidad : " . $datos['unidades'] . "<br>";
			$msj.= "Cantidad : " . $datos['cantidad'] . "<br>";
			$msj.= "Sector : " . $sector[0]->nombre . "<br>";
			$msj.= "Comentario : " . $datos['comentario'] . "<br>" . "<br>";

			$this->load->library('email', $config);
			$this->email->from('administracion@bioempak.com', 'Bioempak');
			$this->email->to('mercadeo@bioempak.com');
			//$this->email->to('felipe.camacho@imaginamos.com');
			$this->email->subject('Cotizacion Bioempak');
			$this->email->message($msj);
			$this->email->send();
		}
		
		function registro(){
			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
			$cad = "";
			for($i=0;$i<12;$i++) {
				$cad .= substr($str,rand(0,62),1);
			}
			$datos = array(
					'nombre' => $this->input->post('nombre'),
					'email' => $this->input->post('correo'),
					'sector' => $this->input->post('sector') ,
					'tempresario' => $this->input->post('tempresario'),
					'empresa' => $this->input->post('empresa'),
					'cargo' => $this->input->post('cargo'),
					'vista' => $this->input->post('vista'),
					'pass' => md5($cad)
					);
			if($this->input->post('vista') == "") $datos['vista'] = "index";
			$mail['envio'] = false;
			$mail['registro'] = $this->site_model->crearRegistro($datos);
			$config = array('mailtype' => 'html');
			$msj = "";
			$msj.= "<strong>Apreciado usuario:</strong><br><br>";
			$msj.= "El registro en nuestro portal fue satisfactorio.<br><br>";
			$msj.= "La clave de ingreso es: <strong>" . $cad . "</strong><br><br>";
			$msj.= "Atentamente,<br><br>Administración Bioempak.&nbsp;&nbsp;";
			$msj.= 'Para más información ingresa en http://www.bioempak.com';
			$msj.= '<br><br><a href="'.base_url().'"><img src="'.base_url().'assets/img/logo-bioempack.jpg"></a><br><br>';
			$msj.= 'Cra 19B No 168 - 77&nbsp;&nbsp;-&nbsp;&nbsp;(57)1 674 7423 - (57)1 674 6915';

			$this->load->library('email', $config);
			$this->email->from('administracion@bioempak.com', 'Bioempak');
			$this->email->to($datos['email']);
			$this->email->subject('Registro portal Bioempak');
			$this->email->message($msj);
			$mail['envio'] = $this->email->send();
			return json_encode($mail);
			//$this->load->view($datos['vista']);
		}
		
		function calificar(){
			$datos = array(
					'noticia' => $this->input->post('noticia'),
					'calificacion' => $this->input->post('calificacion')
					);
			$return = array("save" => $this->site_model->calificar($datos));
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		}
		
		function comentar(){
			$datos = $this->input->post();
			$this->site_model->comentar($datos);
		}
		
		function recovery() {
			if ($this->input->post('email')){
				$datos = array("email" => $this->input->post('email'));
				$result = $this->site_model->verificaRecovery($datos);
				if(!empty($result)){
					$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
					$cad = "";
					for($i=0;$i<12;$i++) {
						$cad .= substr($str,rand(0,62),1);
					}
					$datos = array(
						'id'        => $result[0]->id,
						'email'     => $result[0]->email,
						'nombre'    => $result[0]->nombre,
						'password'  => md5($cad)
					);
					$this->site_model->reseteaRecovery($datos);
					
					$config = array('mailtype' => 'html');
					$msj = "";
					$msj.= "<strong>Apreciado usuario:</strong><br><br>";
					$msj.= "Se ha restablecido su contraseña.<br><br>";
					$msj.= "La nueva clave de ingreso es: <strong>" . $cad . "</strong><br><br>";
					$msj.= "Atentamente,<br><br>Administración Bioempak.&nbsp;&nbsp;";
					$msj.= 'Para más información ingresa en http://www.bioempak.com';
					$msj.= '<br><br><a href="'.base_url().'"><img src="'.base_url().'assets/img/logo-bioempack.jpg"></a><br><br>';
					$msj.= 'Cra 19B No 168 - 77&nbsp;&nbsp;-&nbsp;&nbsp;(57)1 674 7423 - (57)1 674 6915';
		
					$this->load->library('email', $config);
					$this->email->from('administracion@bioempak.com', 'Bioempak');
					$this->email->to($datos['email']);
					$this->email->subject('Recuperación de contraseña portal Bioempak');
					$this->email->message($msj);
					$mail['envio'] = $this->email->send();
					return json_encode($mail);
				}
				else {
					return true;
				}
			}
			else return false;
		}
}