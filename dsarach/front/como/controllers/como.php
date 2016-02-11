<?php

defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Como extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->load->model(array(
                                "_comolohacemos/comolohacemos",
                                "_contacto/contacto"
                                
                                )
                        );
        $b = new Comolohacemos();
        $info = $b->getComolohacemos();
        $this->_data["info"] = $info;
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        
        $this->set_title("Bienvenidos a " . SITENAME, true);
        return $this->build();
    }
    
    public function info($idQ = "",$nombre = ""){
        $this->load->model(array(
                                "_comolohacemos/quehacemos",
                                "_comolohacemos/video",
                                "_comolohacemos/imagenes"
                                )
                        );
        
        $mensaje = "Oops. Lo sentimos, no hemos encontrado contenido para está sección, por favor intentelo más tarde!";
        if ($idQ!=""){
            $nombre = str_replace("%C3%B3", "ó", $nombre);
            $nombre = str_replace("%20", " ", $nombre);
            $b = new Video();
            $dat = $b->where("comolohacemos_id", $idQ)->get();
            
            $b = new Imagenes();
            $info = $b->where("comolohacemos_id", $idQ)->get(); 
            $mensaje = '
                <div class="nav-bqf"></div>
                    <div class="con-slider-que-info">
                      <h1>'.$nombre.'</h1>
                      <div class="con-slider-como">
                        <div id="slider-como-info" class="lof-slidecontent"><div class="preload"></div>
                          <div class="main-slider-content">
                            <ul class="sliders-wrap-inner">
                              ';
                                $s = 1;
                                foreach ($info as $i) {
                                    $mensaje .=
                                    '
                                        <li>
                                        <img src="'.base_url().'uploads/thumbnail/'.$i->imagen.'" width="500" height="306" alt="">
                                        <div class="como-caption">
                                          <h1>Paso '.$s.'</h1>
                                          <p>'.$i->descripcion.'</p>
                                        </div>
                                        </li>
                                    ';
                                     $s++;   
                                }
                                
                              $mensaje .='
                              
                            </ul>  	
                          </div>
                          <div class="navigator-content">
                                        <div class="navigator-wrapper">
                              <ul class="navigator-wrap-inner">
                              ';
                                foreach ($info as $i) {
                                    $mensaje .=
                                    '
                                        <li><img src="'.base_url().'uploads/thumbnail/'.$i->imagen.'" width="101" height="62" alt=""></li>
                                                        
                                    ';
                                }
                                
                              $mensaje .='
                                
                              </ul>
                            </div>
                                </div><div class="button-previous"></div><div class="button-next"></div><div class="button-control"><span></span></div>
                                                </div>
                        <p>'.$dat->descripcion;
                              if ($dat->video!=""){
                                  $mensaje .=
                                          '<a class="modal-que-act">Ver video</a></p>';
                              }
                              $mensaje .='
                      </div>
                    </div>

                    <script type="text/javascript">$(document).ready(function(){var buttons = {previous:$("#slider-como-info .button-previous"), next:$("#slider-como-info .button-next")};	$("#slider-como-info").lofJSidernews({mainHeight:306, auto:true, buttons:buttons});	if($(".modal-que-act").size()>0){$(".modal-que-act").click(function(){$.fancybox.open({href:"'.$dat->video.'", type:"iframe"});});};});</script>

           ';
            
        }
        echo $mensaje;
    }

    // ----------------------------------------------------------------------
   
}
