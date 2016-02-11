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

    public function index($id='') {
        $this->set_title('Bienvenidos a ' . SITENAME, true);
         $this->load->model(array(
                    CMSPREFIX."banner/banner",
                    CMSPREFIX."bienvenido/bienvenido",
                    CMSPREFIX."destacado/destacado",
                    CMSPREFIX."recuadro/recuadro"
                    )
                );
        $dbbanner = new Banner();
        $banner = $dbbanner->getBanner();
        $this->_data['banner'] = $banner;
        
        $dbbienvenido = new Bienvenido();
         $bienvenido = $dbbienvenido->getBienvenido();
         $this->_data['titulo_de_bienvenida'] = $bienvenido->titulo;
         $this->_data['texto_de_bienvenida'] = $bienvenido->texto;
         
         $dbdest = new Destacado();
         $destacados = $dbdest->getDestacado();
         $this->_data['destacados'] = $destacados;
         
         $dbrecuadro = new Recuadro();
         $contador = $dbrecuadro->count();
         $recuadros = $dbrecuadro->getRecuadro();
         $a=0;
         foreach ($recuadros as $r):
             $array[$a]['titulo'] = $r->titulo;
             $array[$a]['subtitulo'] = $r->subtitulo;
             $array[$a]['texto'] = $r->texto;
             $array[$a]['imagen'] = $r->imagen;
             $array[$a]['link'] = $r->link;
         $a++;
         endforeach;
         $this->_data["Erno"] = $id;
         $this->_data['array'] = $array;
        return $this->build();
    }

    // ----------------------------------------------------------------------
   
}
