<?php

defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Calidadservicio extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->load->model(array(
                                "_calidad/calidad",
                                "_contacto/contacto",
                                "_calidad/imagenes",
                                "_calidad/destacado"
                                )
                        );
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        
        $ca = new Calidad();
        $info = $ca->getCalidad();
        $this->_data["texto"] = $info;
        
        $d = new Destacado();
        $destacados = $d->getDestacado(); 
        $this->_data["destacados"] = $destacados;
        
        $i = new Imagenes();
        $imagenes = $i->getImagenes(); 
        $this->_data["imagenes"] = $imagenes;
        
        $this->set_title("Bienvenidos a " . SITENAME, true);
        return $this->build();
    }
    
    public function info($seccion = ""){
        $mensaje = "Oops. Lo sentimos, no hemos encontrado contenido para está sección, por favor intentelo más tarde!";
        if ($seccion!=""){
            if ($seccion == "d"){
                $mensaje = '
                    <div class="nav-bqf"></div>
                        <div class="con-slider-que-info">
                          <h1>Título</h1>
                          <div class="con-slider-como">
                            <div id="slider-como-info" class="lof-slidecontent"><div class="preload"></div>
                              <div class="main-slider-content">
                                <ul class="sliders-wrap-inner">
                                  <li>
                                    <img src="'.base_url().'assets/img/info-como-img.jpg" width="500" height="306" alt="">
                                    <div class="como-caption">
                                      <h1>Paso 1</h1>
                                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="'.base_url().'assets/img/info-como-img.jpg" width="500" height="306" alt="">
                                    <div class="como-caption">
                                      <h1>Paso 2</h1>
                                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="'.base_url().'assets/img/info-como-img.jpg" width="500" height="306" alt="">
                                    <div class="como-caption">
                                      <h1>Paso 3</h1>
                                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="'.base_url().'assets/img/info-como-img.jpg" width="500" height="306" alt="">
                                    <div class="como-caption">
                                      <h1>Paso 4</h1>
                                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="'.base_url().'assets/img/info-como-img.jpg" width="500" height="306" alt="">
                                    <div class="como-caption">
                                      <h1>Paso 5</h1>
                                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                  </li>
                                </ul>  	
                              </div>
                              <div class="navigator-content">
                                            <div class="navigator-wrapper">
                                  <ul class="navigator-wrap-inner">
                                    <li><img src="'.base_url().'assets/img/info-como-img.jpg" width="101" height="62" alt=""></li>
                                    <li><img src="'.base_url().'assets/img/info-como-img.jpg" width="101" height="62" alt=""></li>
                                    <li><img src="'.base_url().'assets/img/info-como-img.jpg" width="101" height="62" alt=""></li>
                                    <li><img src="'.base_url().'assets/img/info-como-img.jpg" width="101" height="62" alt=""></li>    
                                    <li><img src="'.base_url().'assets/img/info-como-img.jpg" width="101" height="62" alt=""></li>   		
                                  </ul>
                                </div>
                                    </div><div class="button-previous"></div><div class="button-next"></div><div class="button-control"><span></span></div>
                                                    </div>
                            <p>Distracted by the readable content of a page when looking at its layout.... <a class="modal-que-act">Ver video</a></p>
                          </div>
                        </div>

                        <script type="text/javascript">$(document).ready(function(){var buttons = {previous:$("#slider-como-info .button-previous"), next:$("#slider-como-info .button-next")};	$("#slider-como-info").lofJSidernews({mainHeight:306, auto:true, buttons:buttons});	if($(".modal-que-act").size()>0){$(".modal-que-act").click(function(){$.fancybox.open({href:"video.php", type:"iframe"});});};});</script>
  
               ';
            }
            if ($seccion == "s"){
                $mensaje = "";
            }
            if ($seccion == "e"){
                $mensaje = "";
            }
            if ($seccion == "v"){
                $mensaje = "";
            }
            if ($seccion == "il"){
                $mensaje = "";
            }
            if ($seccion == "id"){
                $mensaje = "";
            }
        }
        echo $mensaje;
    }

    // ----------------------------------------------------------------------
   
}
