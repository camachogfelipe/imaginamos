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
    }

    // ----------------------------------------------------------------------

    public function index($ok = 0) {
        $this->_data['ok'] =$ok;
        $this->set_title('Bienvenidos a ' . SITENAME, true);
        return $this->build();
    }
    
    public function send() {
    
    $this->load->model(array(
                    CMSPREFIX."registro/registro",
                    )
                );
        $dbr = new Registro();
        $r = $dbr->getRegistro();
        
        ///////////////////////////////
        $retorn['save'] = FALSE;
        $razon_social = $this->input->post("razon_social");
        $nit = $this->input->post("nit");
        $rut = $this->input->post("rut");
        $direccion = $this->input->post("direccion");
        $ciudad = $this->input->post("ciudad");
        $telefono = $this->input->post("telefono");
        $actividad_comercial = $this->input->post("actividad_comercial");
        $marcas_porta = $this->input->post("marcas_porta");
        $mayorista = $this->input->post("mayorista");
        $distribuidor = $this->input->post("distribuidor");
        $puntosdeventa = $this->input->post("puntosdeventa");
        $puntos_venta = $this->input->post("puntos_venta");
        $papelerias = $this->input->post("papelerias");
        $droguerias = $this->input->post("droguerias");
        $miscelaneas = $this->input->post("miscelaneas");
        $comentarioadicional = $this->input->post("comentarioadicional");
        $cantidad_vendedores = $this->input->post("cantidad_vendedores");
        $zona_cobertura = $this->input->post("zona_cobertura");
        $nombre_ref = $this->input->post("nombre_ref");
        $telefono_ref = $this->input->post("telefono_ref");
        $direccion_ref = $this->input->post("direccion_ref");
        $tiempo_operaciones = $this->input->post("tiempo_operaciones");
        $contacto_resp = $this->input->post("contacto_resp");
        $cargo = $this->input->post("cargo");
        $celular = $this->input->post("celular");
        $correo_contacto = $this->input->post("correo_contacto");
        $trabajadoantes = $this->input->post("trabajadoantes");
        $distribuidor_panini = $this->input->post("distribuidor_panini");
        $sobres_2006 = $this->input->post("sobres_2006");
        $sobres_2010 = $this->input->post("sobres_2010");
        $cantidad_sobres = $this->input->post("cantidad_sobres");
        
     
        $email = $this->input->post("email");
        
        $datos = array(
            'razon_social' => $razon_social,
            'nit' => $nit,
            'rut' => $rut,
            'direccion' => $direccion,
            'ciudad' => $ciudad,
            'telefono' => $telefono,
            'actividad_comercial' => $actividad_comercial,
            'marcas_porta' => $marcas_porta,
            'mayorista' => $mayorista,
            'distribuidor' => $distribuidor,
            'puntosdeventa' => $puntosdeventa,
            'puntos_venta' => $puntos_venta,
            'items' => $papelerias.' '.$droguerias.' '.$miscelaneas,
            'comentarioadicional' => $comentarioadicional,
            'cantidad_vendedores' => $cantidad_vendedores,
            'zona_cobertura' => $zona_cobertura,
            'nombre_ref' => $nombre_ref,
            'telefono_ref' => $telefono_ref,
            'tiempo_operaciones' => tiempo_operaciones,
            'contacto_resp' => $contacto_resp,
            'cargo' => $cargo,
            'celular' => $celular,
            'correo_contacto' => $correo_contacto,
            'trabajadoantes' => $trabajadoantes,
            'distribuidor_panini' => $distribuidor_panini,
            'sobres_2006' => $sobres_2006,
            'sobres_2010' => $sobres_2010,
            'cantidad_sobres' => $cantidad_sobres          
        ); 
        
        $r->saveRegistro($datos);
        //////////////Email
        $this->load->library('email');
        $emailsend = 'hector.fernandez@imaginamos.co';
                        $this->email->from('info@panini.com', $this->input->post("email"));
                        $this->email->to($emailsend); 
                        
                        $this->email->subject('Contacto desde sitio Web.');
                        $message ="
                            
                            Se ha enviado la siguiente informacion:<br /><br />
                            
                            Razón Social: $razon_social <br />
         NIT:  $nit <br />
        RUT:  $rut <br />
        Direccion: $direccion <br />
        Ciudad:  $ciudad <br />
        Teléfono:  $telefono <br />
        Actividad Comnercial: $actividad_comercial = <br />
        Marcas o portafolio: $marcas_porta <br />
        Tipo de Distribución: $mayorista  $distribuidor<br />
         
        Puntos de Venta: $puntosdeventa <br />
        Cuantos punto de venta tiene? $puntos_venta <br />
        <br/>
        Red Distribución: (Clientes tipo a los que llega)<br/>
        $papelerias, 
        $droguerias,  
        $miscelaneas,        
        
        Comentario: $comentarioadicional<br /> 
        Cantidad de vendedores $cantidad_vendedores <br />
        Zona de cobertura  $zona_cobertura <br />
        Referencias Comerciales:<br />
        
        Nombre: $nombre_ref <br />
        Teléfono: $telefono_ref <br />
        Dirección: $direccion_ref <br/>
        Tiempo de operaciones comerciales: $tiempo_operaciones <br />
        Contacto responsable: $contacto_resp <br />
        Cargo: $cargo <br />
        Celular: $celular <br />
        Correo de contacto: $correo_contacto<br />
        Ha trabajado antes en el mundial panini:  $trabajadoantes <br />
        Con que distribuidor? $distribuidor_panini <br />
        Número de sobres 2006 $sobres_2006 <br />
        Número de sobres 2010: $sobres_2010 <br />
        Total: $cantidad_sobres <br />




";
                       
                        
                        $this->email->message($message);
       
                        if ($this->email->send()){
                           $d = 1;
                           return redirect('home/index/'.$d);                          
                        }else{
                           $d = 2;
                           return redirect('home/index/'.$d);
                        } 
    }
    
    

    // ----------------------------------------------------------------------
   
}
