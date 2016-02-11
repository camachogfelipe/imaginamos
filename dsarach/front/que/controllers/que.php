<?php

defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Que extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->load->model(array(
                                "_quehacemos/quehacemos",
                                "_contacto/contacto"
                                
                                )
                        );
        $q = new Quehacemos();
        $info = $q->getQuehacemos();
        $this->_data["info"] = $info;
        
        $c = new Contacto();
        $contacto = $c->getContactoById(1);
        $this->_data["contacto"] = $contacto;
        
        $this->set_title("Bienvenidos a " . SITENAME, true);
        return $this->build();
    }
    
    public function info($idQ = ""){
        $this->load->model(array(
                                "_quehacemos/quehacemos",
                                "_contacto/contacto",
                                "_quehacemos/descripcion",
                                "_quehacemos/titulobulletsuno",
                                "_quehacemos/bulletsuno",
                                "_quehacemos/titulobulletsdos",
                                "_quehacemos/bulletsdos",
                                "_quehacemos/ventajas",
                                "_quehacemos/imagenes"
                                )
                        );
        $d = new Descripcion();
        //$dat = $b->getDescripcionById(1);
        $descripcion = $d->where("quehacemos_id", $idQ)->get();
        
        $tb = new Titulobulletsuno();
        //$dat = $b->getDescripcionById(1);
        $dattitulo = $tb->where("quehacemos_id", $idQ)->get();
        $this->_data["infotitulo"] = $dattitulo;
        
        $buno = new Bulletsuno();
        $bulletsuno = $buno->where("quehacemos_id", $idQ)->get(); 
        
        $tbd = new Titulobulletsdos();
        //$dat = $b->getDescripcionById(1);
        $dattitulo2 = $tbd->where("quehacemos_id", $idQ)->get();
        
        $bdos = new Bulletsdos();
        $bulletsdos = $bdos->where("quehacemos_id", $idQ)->get(); 
        
        $v = new Ventajas();
        $ventajas = $v->where("quehacemos_id", $idQ)->get(); 
        
        $i = new Imagenes();
        $imagenes = $i->where("quehacemos_id", $idQ)->get(); 
        
        
        $mensaje = "Oops. Lo sentimos, no hemos encontrado contenido para está sección, por favor intentelo más tarde!";
        if ($idQ!=""){
            
                $mensaje = '
                    <div class="nav-bqf"></div>
                        <div class="con-slider-que-info">
                          <h1>Dotaciones</h1>
                          <ul class="slider-que-info">
                            ';
                foreach ($imagenes as $i) {
                        $mensaje .=
                        '
                            <li>
                                <img src="'.base_url().'uploads/thumbnail/'.$i->imagen.'" width="620" height="306" alt="">
                                <div class="que-caption">
                                    <p>'.$i->descripcion.'</p>
                                </div>
                            </li>
                        ';
                        
                }
                
                          $mensaje .='  
                          </ul>
                          <ul id="que-pager">
                          ';
                          $s = 0;
                          foreach ($imagenes as $i) {
                            $mensaje .=
                            '
                              <li><a data-slide-index="'.$s.'" href="" id="b'.$s.'"><div></div></a></li>
                            ';
                            $s++;
                          }
                          $mensaje .='
                          </ul>
                        </div>
                        <div class="con-info-des clearfix">
                            <div class="info-des-c1">
                            <h1>'.$descripcion->titulo.'</h1>
                            <p>' 
                             .$descripcion->descripcion;
                            if ($descripcion->video !=""){ $mensaje .='<a class="modal-que-act">Ver video</a>';}
                            $mensaje .=        
                           '</p>
                            
                            <ul>
                                <h1>'.$dattitulo->titulo.'</h1>';
                                foreach ($bulletsuno as $f) {
                                     $mensaje .=
                                     '
                                         <li>'.$f->titulo.'</li>
                                     ';
                                 }
                           $mensaje .='   
                            </ul>
                            <ul>
                                <h1>'.$dattitulo2->titulo.'</h1>';
                                foreach ($bulletsdos as $f) {
                                    $mensaje .=
                                    '
                                        <li>'.$f->titulo.'</li>
                                    ';
                                 }
                            $mensaje .='
                            </ul>
                          </div>
                          <div class="info-des-c2">
                            <h1>Ventajas</h1>
                            <ul>';
                            foreach ($ventajas as $f) {
                                $mensaje .=
                                '
                                    <li>'.$f->titulo.'</li>
                                ';
                            }
                              $mensaje .='
                            </ul>
                          </div>
                        </div>

                        <script type="text/javascript">$(document).ready(function(){$(".slider-que-info").bxSlider({slideWidth:620, minSlides:0, maxSlides:1, slideMargin:0, controls:false, pagerCustom:"#que-pager", auto:true}); $("#que-pager a#b0").click(function(){$("#que-pager").find(".track-pager").animate({width:"0px"}, "fast").css({background:"#222"});}); $("#que-pager a#b1").click(function(){$("#que-pager").find(".track-pager").animate({width:"130px"}, "fast").css({background:"#222"});}); $("#que-pager a#b2").click(function(){$("#que-pager").find(".track-pager").animate({width:"250px"}, "fast").css({background:"#222"});}); $("#que-pager a#b3").click(function(){$("#que-pager").find(".track-pager").animate({width:"370px"}, "fast").css({background:"#222"});}); $("#que-pager a#b4").click(function(){$("#que-pager").find(".track-pager").animate({width:"490px"}, "fast").css({background:"#222"});}); if($(".modal-que-act").size()>0){$(".modal-que-act").click(function(){$.fancybox.open({href:"'.$descripcion->video.'", type:"iframe"});});};});</script>

               ';
            
            
        }
        echo $mensaje;
    }

    // ----------------------------------------------------------------------
   
}
