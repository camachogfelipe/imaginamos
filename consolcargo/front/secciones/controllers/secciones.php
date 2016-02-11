<?php

require_once 'app/config/config.php';

/**
 * Description of Secciones
 *
 * @author Andres Lopez
 */
define("CORREO_CONTACTENOS", "contactenos@consolcargo.com");
class Secciones extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('_redes_sociales/_redes_sociales_model');
        $this->load->model('_contactenos/cms_contactenos_model');
        $this->load->model('_visitenos/cms_visitenos_model');
        $this->load->model('_certificaciones/cms_certificaciones_model');
				$this->load->model('_tiempo_chat/_tiempo_chat_model');
	   		// $this->_data['termino_chat'] = isset($_SESSION['termino'])?$_SESSION['termino']:false;
	    	$this->_data['time_chat'] = $this->_tiempo_chat_model->getAll();
        $this->_data['redes'] = $this->_redes_sociales_model->getAll();
        $this->_data['contactenos'] = $this->cms_contactenos_model->getAll();
        $this->_data['visitenos'] = $this->cms_visitenos_model->getAll();
        $this->_data['certificaciones'] = $this->cms_certificaciones_model->getAll();
    }
    
    public function index() {
        $this->load->model('_banner/cms_banner_model');
        $this->load->model('_destacadohome/cms_destacadohome_model');
        $this->load->model('_noticias/cms_noticias_model');
				$this->load->model('_trm/cms_trm_model');
        
        $this->_data['banner'] = $this->cms_banner_model->getAll();
        $this->_data['destacado'] = $this->cms_destacadohome_model->getAll();
        $this->_data['noticias'] = $this->cms_noticias_model->getAll();
				$this->_data['trm'] = $this->cms_trm_model->getAll();
        $this->layout = 'index';
        $this->build('layouts/index');
    }
    
    public function empresa() {
        $this->layout = 'empresa';
        $this->build('layouts/empresa');
    }
    
    public function servicios() {
        $this->load->model('_nuestros_servicios/cms_nuestros_servicios_model');
        $this->load->model('_servicios/cms_servicios_model');
        $this->_data['nuestros_servicios'] = $this->cms_nuestros_servicios_model->getAll();
        $this->_data['servicios'] = $this->cms_servicios_model->getDetalleServicio();
        $this->layout = 'servicios';
        $this->build('layouts/servicios');
    }
		
		public function serviciosLinea() {
        $this->load->model('_servicios_linea/cms_servicios_linea_model');
        $this->_data['servicios_linea'] = $this->cms_servicios_linea_model->getAll();
        $this->layout = 'servicios-en-linea';
        $this->build('layouts/servicios-en-linea');
    }
    
    public function getCiudad() {
        $idPais = $this->input->post('pais');
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $ciudad = $this->cms_detalle_servicios_model->getCiudad($idPais);
        echo json_encode($ciudad);
    }
    
    public function servicioinfo() {
        $pais = $this->input->post('pais');
        
        if($pais != "") {
            $this->enviarCorreoServicios();
        }
        $idServicio = $this->uri->segment(3);
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $this->_data['detalle_servicios'] = $this->cms_detalle_servicios_model->getDetalle_servicios($idServicio);
        $this->_data['pais'] = $this->cms_detalle_servicios_model->getPais();
        $this->_data['idServicio'] = $idServicio;
        
        if($pais != "") {
            $this->_data['mensaje'] = "Correo enviado con exito";
        } else {
            $this->_data['mensaje'] = "";
        }
        
        $this->layout = 'servicio-info';
        $this->build('layouts/servicio-info');
    }
    
    public function enlaces() {
        $this->load->model('_enlaces/cms_enlaces_model');
        $this->_data['comercio'] = $this->cms_enlaces_model->getAllByTipo('comercio');
        $this->layout = 'enlaces';
        $this->build('layouts/enlaces');
    }
    
    public function senlacescolombia() {
        $this->load->model('_enlaces/cms_enlaces_model');
        $this->_data['comercio'] = $this->cms_enlaces_model->getAllByTipo('enlaces');
        $this->layout = 'enlaces-colombia';
        $this->build('layouts/enlaces-colombia');
    }
    
    public function enlacesnavieras() {
        $this->load->model('_enlaces/cms_enlaces_model');
        $this->_data['comercio'] = $this->cms_enlaces_model->getAllByTipo('itinerario');
        $this->layout = 'enlaces-navieras';
        $this->build('layouts/enlaces-navieras');
    }
    
    public function enlaceext() {
        $id = $this->uri->segment(3);
				$uri4 = $this->uri->segment(4);
				if(empty($uri4)) :
					$this->load->model('_enlaces/cms_enlaces_model');
					$this->_data['enlace'] = $this->cms_enlaces_model->getEnlaces($id);
				else :
					$this->_data['enlace'] = $this->uri->segment(3);
				endif;
        $this->layout = 'enlace-ext';
        $this->build('layouts/enlace-ext');
    }
    
    public function itinerario() {
				$this->load->model('_parrafo_itinerario/cms_parrafo_itinerario_model');
        $this->_data['parrafo_itinerario'] = $this->cms_parrafo_itinerario_model->getAll();
        $this->layout = 'itinerario';
        $this->build('layouts/itinerario');
    }
    
    public function getPaisCiudadItinerario() {

        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $ciudad = $this->cms_detalle_servicios_model->getCiudadAll();
        $pais = $this->cms_detalle_servicios_model->getPais();
        $respuesta = array();
        
        if($ciudad != false && $pais != false) {
            $respuesta = array_merge($ciudad, $pais);
        }
        echo json_encode($respuesta);
    }
   
    public function getPaisCiudadItinerarioOrigen() {
        
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $ciudad = $this->cms_detalle_servicios_model->getCiudadOrigen();
        $respuesta = array();
        $respuesta = $ciudad; 
        echo json_encode($respuesta);
    }

    public function getPaisCiudadItinerarioDestino() {
        
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $ciudad = $this->cms_detalle_servicios_model->getCiudadDestino();
        $respuesta = array();
        $respuesta = $ciudad; 
        echo json_encode($respuesta);
    }
   


    public function getItinerario() {
        $origen = explode("::", $this->input->post('origen'));
				$origen = $origen[0];
        $destino = explode("::", $this->input->post('destino'));
				$destino = $destino[0];
        $this->load->model('_itinerario/cms_itinerario_model');
        $itinerario = $this->cms_itinerario_model->getByOrigenDestino($origen, $destino);
        echo json_encode($itinerario);
    }
    
    public function contacto() {
        $pais = $this->input->post('pais');
        if($pais != "") {
            $this->enviarCorreoServicios();
        }
        if($pais != "") {
            $this->_data['mensaje'] = "Correo enviado con exito";
        } else {
            $this->_data['mensaje'] = "";
        }
        
        $this->load->model('_contactar/cms_contactar_model');
        $this->load->model('_oficinas/cms_oficinas_model');
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $this->_data['pais'] = $this->cms_detalle_servicios_model->getPais();
        $this->_data['contacto'] = $this->cms_contactar_model->getAll();
        $this->_data['oficinas'] = $this->cms_oficinas_model->getAll();
        $this->layout = 'contacto';
        $this->build('layouts/contacto');
    }
    
    public function enviarCorreoServicios() {
        $pais = $this->input->post('pais');
        $ciudad = $this->input->post('ciudad');
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $comentario = $this->input->post('comentario');
        $this->load->model('_detalle_servicios/cms_detalle_servicios_model');
        $objPais = $this->cms_detalle_servicios_model->getPaisById($pais);
        
        if($objPais != false) {
            $pais = $objPais->nombre;
        }
        $objCiudad = $this->cms_detalle_servicios_model->getCiudadById($ciudad);
        
        if($objCiudad != false) {
            $ciudad = $objCiudad->nombre;
        }
        $mensaje = ' Mensaje cont&aacute;ctenos de nuestros servicios <br/> <br/>';
        $mensaje .= ' <b>Nombre</b>: ' . utf8_decode($nombre) . '<br/>';
        $mensaje .= ' <b>Pais</b>: ' . utf8_decode($pais) . '<br/>';
        $mensaje .= ' <b>Ciudad</b>: ' . utf8_decode($ciudad) . '<br/>';
        $mensaje .= ' <b>Email</b>: ' . $correo . '<br/>';
        $mensaje .= ' <b>Comentarios</b>: ' . utf8_decode($comentario) . '<br/>';
        $this->load->library('email');
        $config['smtp_host'] = '127.0.0.1';
        $config['smtp_port'] = '25';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);

        $this->email->from(CORREO_CONTACTENOS, CORREO_CONTACTENOS);
        $this->email->to(CORREO_CONTACTENOS);
        $this->email->subject('Contáctenos');
        $this->email->message($mensaje);
        if (!$this->email->send()) {
            show_error('Error al enviar correo');
        }
    }

    public function default_page() {
        redirect('secciones', 'refresh');
    }
}

?>