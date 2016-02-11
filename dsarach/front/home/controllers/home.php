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

    public function index() {
        $this->load->model(array(
                                "_banner/banner",
                                "_destacados/destacado",
                                "_multimedia/multimedia",    
                                "_contacto/contacto"        
                                )
                        );
        
        $b = new Banner();
        $info = $b->getBanner();
        $this->_data["banner"] = $info;
        
        
        $d = new Destacado();
        $info = $d->getDestacado();
        $this->_data["destacado"] = $info;
        
        $m = new Multimedia();
        $dat = $m->getMultimediaById(1);
        $this->_data["multimedia"] = $dat;
        if ($dat->seccion == "¿Qué hacemos?")
            { 
                $seccion = "que"; 
            }
        if ($dat->seccion == "¿Cómo lo hacemos?")
            { 
                $seccion = "como"; 
            }
        if ($dat->seccion == "Aplicaciones")
            { 
                $seccion = "aplicaciones"; 
            }
        if ($dat->seccion == "Calidad")
            { 
                $seccion = "calidad"; 
            }
        if ($dat->seccion == "Beneficiate")
            { 
                $seccion = "beneficios"; 
            }    
        $this->_data["vermas"] = $seccion;
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        
        $this->set_title('Bienvenidos a ' . SITENAME, true);
        return $this->build();
    }

    // ----------------------------------------------------------------------
   
}
