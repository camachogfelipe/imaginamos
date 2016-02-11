<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRUPO NORTH</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="<?php echo Link::Build() ?>/css/north.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/royalslider.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/minimal-white/rs-minimal-white.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/navegador.css" rel="stylesheet" />

<style type="text/css">
	.nav-bt-1 {background-position:0 -116px;}
	.rsDefault .rsBullets {position: absolute; z-index: 10; bottom: 14px; left: 0; right: 0; width: auto; height: auto; text-align: left; overflow: hidden; line-height: 8px; background-color:transparent !important;}
	.rsDefault .rsBullet {width: 27px; height: 27px; display: inline-block; margin: 0 2px; border-radius: 50%; background: url(<?php echo Link::Build() ?>/css/minimal-white/bullets.png) 0 0 no-repeat; cursor: pointer !important;}
	.rsDefault .rsBullet.rsNavSelected {background: url(<?php echo Link::Build() ?>/css/minimal-white/bullets.png) 0 -27px no-repeat;}
	.rsDefault .rsArrow {height: 39px; width: 39px;}
	.rsDefault .rsArrowIcn {top:10px;}
	.rsDefault.rsHor .rsArrowRight {right: 15px; top: 10px;}
	.rsDefault.rsHor .rsArrowLeft {right: 58px;top: 10px;}
	.rsDefault.rsHor .rsArrowLeft:hover .rsArrowIcn {background-position: 0px -39px !important;}
	.rsDefault.rsHor .rsArrowLeft:hover .rsArrowIcn {background-position: 0px -39px !important;}
	.rsDefault.rsHor .rsArrowRight:hover .rsArrowIcn {background-position: -39px -39px !important;}
	.rsDefault.rsHor .rsArrowRight .rsArrowIcn {background-position: -39px 0px !important;}
	.rsMinW .rsArrowIcn, .rsDefault .rsArrowIcn {width: 39px !important; height: 39px !important; background: url(<?php echo Link::Build() ?>/css/minimal-white/arrows-slider.png) !important;}
	.rsDefault .rsArrow {height: 39px !important; width: 39px !important;}
</style>

</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php"); 
  //Prog: Héctor Fernández
  // Home. Tablas Relacionadas de Base de datos "banner", "Destacados", "Actividades", "Recetas".
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  //Datos Para Banner.
  $banner = DbHandler::GetAll("SELECT * FROM banner ORDER BY id DESC ");
  $contadorBanner = count($banner);
  // Datos para Destacados.
  $destacados = DbHandler::GetAll("SELECT * FROM destacados");
  // datos Para Actividades Especiales.
  $actividades = DbHandler::GetAll("SELECT * FROM actividades");
  $recetas = DbHandler::GetAll("SELECT * FROM recetas");
  ?>
  
  <div class="info-general">
  	<div class="con-info-general">
    	<div class="slider-home">
        <div class="royalSlider contentSlider rsDefault home-info">
          <!--Slide home-->
          
          <?php //Implementamos el bucle para el banner.
          for($i=0; $i<$contadorBanner; $i++):
              ?>
          <div data-rsDelay="6000">
            <div class="con-img-home">
                <div class="img-slide-home"><img src="<?php echo Link::Build() ?>/img/banner/<?php echo str_replace('original','redimension',$banner[$i]['imagen']) ?>" width="612" height="456" alt=""></div>
              <div class="tx-slide-home">
                <div class="bContainer">
                    <strong class="rsABlock txtCent blockHeadline" data-fade-effect="fadeIn" data-speed="0"><?php echo utf8_encode($banner[$i]['titulo1']) ?></strong>
                  <span class="rsABlock txtCent blockSubHeadline" data-fade-effect="fadeIn" data-speed="0"><?php echo utf8_encode($banner[$i]['titulo2']) ?></span>
                  <span class="rsABlock txtCent blockText" data-fade-effect="fadeIn" data-move-effect="none" data-opposite="true" data-move-offset="450" data-delay="350" data-speed="300" data-easing="easeOutBack"><?php echo utf8_encode($banner[$i]['texto']) ?></span>
                  <div class="rsABlock slide-decor" data-fade-effect="fadeIn" data-move-effect="none" data-opposite="true" data-move-offset="450" data-delay="350" data-speed="300" data-easing="easeOutBack"></div>
                </div>
              </div>
            </div>
          </div>
              <?php
          endfor;
            ?>
        </div>
      </div>
      <div class="sep-sombra"></div>
      
      <div class="home-galeria">
      	<!--<img src="imagenes/titulos/home-1.png" width="500" height="100" alt="">-->
          <h2><?php echo utf8_encode($destacados[0]['titulo1']); ?></h2>
        <h1><?php echo utf8_encode($destacados[0]['titulo2']); ?></h1>
        <div class="con-galeria">
          <div class="con-montaje">
            <div class="montaje-bg"><img src="<?php echo Link::Build() ?>/img/destacados/<?php echo $destacados[0]['imagen']; ?>" width="1000" height="460" alt=""></div>
            <a href="<?php echo $destacados[0]['link']; ?>">
            <div class="zona-gal col-1">
              <div class="globo seg-1">
                  <img src="<?php echo Link::Build() ?>/img/destacados/<?php echo str_replace('original','redimension',$destacados[0]['imagen1']); ?>" width="600" height="280" alt="">
              </div>
            </div>
            </a>
            <a href="<?php echo $destacados[0]['link_2']; ?>">
            <div class="zona-gal col-2">
              <div class="globo seg-2">
                <img src="<?php echo Link::Build() ?>/img/destacados/<?php echo str_replace('original','redimension',$destacados[0]['imagen2']); ?>" width="400" height="280" alt="">
              </div>  
            </div>
            </a>
            <a href="<?php echo $destacados[0]['link_3']; ?>">
            <div class="zona-gal col-3">
              <div class="globo seg-3">
              	<img src="<?php echo Link::Build() ?>/img/destacados/<?php echo str_replace('original','redimension',$destacados[0]['imagen3']); ?>" width="1000" height="180" alt="">
              </div>  
            </div>
            </a>
          </div>
        </div>
      </div>
      <div class="sep-sombra"></div>
    </div>
  </div>
  
  <div class="destacados-home">
  	<div class="con-destacados-home">
      <div class="destacado-izq-home">
      	<h2><?php echo utf8_encode($actividades[0]['titulo']); ?></h2>
        <div class="bloque-actividades">
        	<ul>
          	<a href="<?php echo $actividades[0]['link']; ?>"><li class="actividad-1"><div class="pick-actividad"><img src="<?php echo Link::Build() ?>/imagenes/actividad-1-pick.png" width="35" height="35" alt=""></div><p><?php echo utf8_encode($actividades[0]['descripcion']); ?></p></li></a>
            <a href="<?php echo $actividades[0]['link2']; ?>"><li class="actividad-2"><div class="pick-actividad"><img src="<?php echo Link::Build() ?>/imagenes/actividad-2-pick.png" width="35" height="35" alt=""></div><p><?php echo utf8_encode($actividades[0]['descripcion2']); ?></p></li></a>
            <a href="<?php echo $actividades[0]['link3']; ?>"><li class="actividad-3"><div class="pick-actividad"><img src="<?php echo Link::Build() ?>/imagenes/actividad-3-pick.png" width="35" height="35" alt=""></div><p><?php echo utf8_encode($actividades[0]['descripcion3']); ?></p></li></a>
          </ul>
        </div>
        <div class="icono-destacado-izq"><img src="<?php echo Link::Build() ?>/imagenes/icono-destacado-izq-home.png" width="252" height="214" alt=""></div>
      </div>
      <div class="destacado-der-home">
      	<h2>Recetas</h2>
        <div class="arrow-destacado-der"></div>
        <div class="recetas-bg">
        	<a href="index.php?base&seccion=recetas">
            <div class="img-receta">
                <img src="<?php echo Link::Build() ?>/img/recetas/<?php echo str_replace('original','redimension',$recetas[0]['imagen']); ?>" width="298" height="192" alt="">
              <div class="over-recetas">
                <h3><?php echo utf8_encode($recetas[0]['titulo']); ?></h3>
                <p><?php echo utf8_encode($recetas[0]['texto_descriptivo']); ?></p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
  
	<script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery-ui-1.8.22.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.royalslider.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.easing.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jHome.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/navegador.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.pajinate.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
</body>
</html>