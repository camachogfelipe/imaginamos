<!--HEADER-->
<!DOCTYPE>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js ie9">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Zona Franca de Occidente - Mosquera</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=1024, maximum-scale=2">
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<!-- Estilos -->
<link href="styles/zona-franca.css" rel="stylesheet" type="text/css" />
<link href="styles/internas.css" rel="stylesheet" type="text/css" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link href="styles/jScrollPane.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<!-- FANCY BOX-->
<link rel="stylesheet" type="text/css" href="assets/js/source/jquery.fancybox.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
<![endif]-->

<!-- Jquery --> 
<script type="text/javascript" src="assets/js/lib/jquery-1.8.3.min.js"></script> 
<!-- selectivizr -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
<!-- Mootools -->
<script type="text/javascript" src="assets/js/lib/jquery-selectivizr-min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="assets/js/lib/jquery-selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Placeholder --> 
<script type="text/javascript" src="assets/js/lib/jquery.placeholder.js"></script> 
<!-- Custom forms --> 
<script type="text/javascript" src="assets/js/lib/jquery.formularios.js"></script> 
<script type="text/javascript" src="assets/js/lib/jquery.formularios-select.js"></script> 
<!-- Slider --> 
<script type="text/javascript" src="assets/js/lib/jquery.slider.js"></script> 
<script type="text/javascript" src="assets/js/lib/jquery.easing.js"></script> 
<!-- Ahorranito --> 
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<!-- FANCYBOX -->
<script type="text/javascript" src="assets/js/lib/source/jquery.fancybox.js"></script> 
<!-- TABS -->
<script type="text/javascript" src="assets/js/jquery.easytabs.js"></script> 
<!-- Scroll -->
<script type="text/javascript" src="assets/js/jquery.jscrollpane.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script> 
<!-- Actions --> 
<script type="text/javascript" src="assets/js/actions.js"></script>
</head>
<body>



<!--HEADER-->
<!--MENU-->

<div class="header">
	<div class="cont_header"> <a class="logo_home" href="index.php"></a>
		<div class="cont_sliderheader" style="overflow: hidden;">
			<ul id="sliderheader" >
				<li><img src="assets/img/slider01.png" height="61" width="167" alt=""></li>
			
				<li><img src="assets/img/slider03.png" height="61" width="167" alt=""></li>
					<li><img src="assets/img/slider02.png" height="61" width="167" alt=""></li>
			</ul>
		</div>
		<a href="#zona_segura_empresa" id="bt_zona_segura_empresa" class="fancybox">empresas</a> <a href="#zona_segura_usuario" id="bt_zona_segura_usuario" class="fancybox">usuarios</a> <a href="#" class="cerrar-sesion"><strong>Cerrar sesión</strong></a> <span class="divisor">|</span>
		<p class="bienvenida"><span><strong>Bienvenido,</strong></span> Juan Felipe Rojas</p>
		<ul class="menu">
			<li><a>Ayuda</a>
				<ul class="submenu-2">
					<li><a href="buscar-empleo.php?seccion=5" class="<?php if ($_GET['seccion'] == '5'){echo 'activo';}?> " > Cómo Buscar Empleo</a></li>
					<li><a href="cargar-hv.php?seccion=5" class="<?php if ($_GET['seccion'] == '5'){echo 'activo';}?> " > Cómo cargar su HV</a></li>
					<li><a href="preguntas-frecuentes.php?seccion=5" class="<?php if ($_GET['seccion'] == '5'){echo 'activo';}?> " > Preguntas Frecuentes </a></li>
				</ul>
			</li>
			<li><a href="consejos-profesionales.php?seccion=4" class="<?php if ($_GET['seccion'] == '4'){echo 'activo';}?> " >Consejos profesionales </a>
			<ul class="submenu-1">
			<li><a href="noticias.php?seccion=4" class="<?php if ($_GET['seccion'] == '4'){echo 'activo';}?> " >Noticias </a></li>
			</ul>
			
			
			</li>
			<li><a>Ofertas de Empleo</a>
				<ul class="submenu-1">
					<li><a href="areas_deempleo.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?> " > Áreas de empleo </a></li>
					<li><a href="ofertas_publicadas.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?> " > Últimas Ofertas</a></li>
					<li><a href="ofertas_publicadas.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?> " > Cargos con Mayor Ofertas</a></li>
					<li><a href="ofertas_publicadas.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?> " > Ofertas en Otras Ciudades </a></li>
					<li><a href="directorio-empresas.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?> " > Directorio de Empresas </a></li>
				</ul>
			</li>
			<li><a href="registro_usuario.php?seccion=2" class="<?php if ($_GET['seccion'] == '2'){echo 'activo';}?> ">Registre su hoja de vida</a></li>
			<li><a href="nosotros.php?seccion=1" class="<?php if ($_GET['seccion'] == '1'){echo 'activo';}?> ">Nosotros</a></li>
		</ul>
	</div>
</div>

<!--MENU-->
<!-- buscador_internas -->
<div class="buscador_internas">
  <div class="container cont_buscadorinternas">
    <div class="row">
      <form action="">
        <div class="span4 campo_buscadorinternas">
          <input type="text" placeholder="Palabra clave:">
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" id="select1" style="width:100%;">
            <option value="">Fecha de publicación:</option>
            <option value="">Hoy</option>
            <option value="">Esta Semana</option>
            <option value="">Este Mes</option>
            <option value="">Historial</option>
          </select>
        </div>
        <div class="span3 campo_buscadorinternas">
          <select class="select_dd" id="select2" style="width:100%;">
            <option value="">Sector:</option>
            <option value="">Lorem Ipsum Dolor</option>
            <option value="">Lorem Ipsum Dolor</option>
            <option value="">Lorem Ipsum Dolor</option>
          </select>
        </div>
        <div class="span2 campo_buscadorinternas">
          <input class="bt_buscarinternas" type="submit" value="Buscar Empleo" onclick="location.href = 'ofertas_publicadas.php'">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- buscador_internas -->

<!-- contenedor_internas -->
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas">
	<div class="container cont_contenidos">
		<div class="cont_titulos-2 inline">
			<h1 class="inline">Hoja de <span>vida</span></h1>
			<div class="clear"></div>
			<h2 class="inline">Lorem ipsum dolor sit consectetur</h2>
		</div>
	</div>
</div>
<div class="fondo-gris">
	<div class="campo-perfil">
		<div class="row-fluid">
			<div class="span2 ">
				<div class="perfil-img"><img src="assets/img/perfil.png"></div>
			</div>
			<div class="span10 ">
				<div class="espacio_en_blanco"></div>
				<h2>Juan Felipe Rojas, <span>Bienvenido</span> <em>Administrador de empresas</em></h2>
				<div class="espacio_en_blanco"></div>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo parame inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, es 
					sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				<ul class="perfil-iconos">
					<li class="mail">juan.feliperojas@hotmail.com</li>
					<li class="movil">(57) 314 2345678</li>
					<li class="telefono">(57 1) 489 5612</li>
					<li class="ubicacion">Bogotá D.C - Colombia</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="clear espacio_en_blancogrande"></div>
<div class="contenedor_internas-2">
	<div class="container cont_contenidos">
		<div id="tab-container" class='tab-container'>
			<div class='panel-container'>
				<div id="tabs2" class="relativo"> <a class="editar-dv" href="registro_usuario.php">Editar</a>
					<div class="clear espacio_en_blanco"></div>
					<div class="scroll-zonasegura">
						<div class="row-fluid">
							<div class="span6">
								<h2 class="hojadevida-titulo">Información General</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="info-general-dv">
									<p><span class="text_naranja">Fecha de nacimiento: </span>02 Octubre de 1989 </p>
									<p><span class="text_naranja">Nacionalidad: </span>Colombiano</p>
									<p><span class="text_naranja">Estado civil: </span>Soltero(a) </p>
									<p><span class="text_naranja">Teléfono: </span>(57 1 ) 489 5612</p>
									<p><span class="text_naranja">Celular: </span>314 234 5678</p>
									<p><span class="text_naranja">Ciudad de residencia: </span>Bogotá D.C</p>
								</div>
								<div class="clear espacio_en_blancopeque"></div>
								<p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<div class="clear espacio_en_blanco"></div>
								<h2 class="hojadevida-titulo">Estudios realizados</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="estudios-realizados-dv">
									<p>Administración de empresas</p>
									<p><em> <strong>Universidad pontificia ipsum 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>


									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
									<p >Lorem ipsum dolor sit amet</p>
									<p><em> <strong>deserunt mollit anim id 2008</strong></em></p>
								</div>
							</div>
							<div class="span6 relativo">
								<div class="borde-gris"></div>
								<h2 class="hojadevida-titulo">Experiencia Laboral</h2>
								<div class="clear espacio_en_blancopeque"></div>
								<div class="experiencia-item">
									<p class="float_left">Administrador de empresas</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> Federación de banqueros</em></p>
									<p class="float_left"><span class="text_naranja"> Desde:</span> 14 Octubre de 2010 </p>
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> 10 Febrero de 2013 </p>
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempeñada:</em></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris.</p>
								</div>
								<div class="experiencia-item">
									<p class="float_left">Administrador de empresas</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> Federación de banqueros</em></p>
									<p class="float_left"><span class="text_naranja"> Desde:</span> 14 Octubre de 2010 </p>
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> 10 Febrero de 2013 </p>
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempeñada:</em></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris.</p>
								</div>
								<div class="experiencia-item">
									<p class="float_left">Administrador de empresas</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> Federación de banqueros</em></p>
									<p class="float_left"><span class="text_naranja"> Desde:</span> 14 Octubre de 2010 </p>
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> 10 Febrero de 2013 </p>
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempeñada:</em></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris.</p>
								</div>
								<div class="experiencia-item">
									<p class="float_left">Administrador de empresas</p>
									<span class="separador-punto"></span>
									<p class="float_left"><em> Federación de banqueros</em></p>
									<p class="float_left"><span class="text_naranja"> Desde:</span> 14 Octubre de 2010 </p>
									<p class="float_left"><span class="text_naranja"> &nbsp; &nbsp; Hasta: </span> 10 Febrero de 2013 </p>
									<div class="clear espacio_en_blancopeque"></div>
									<p><em>Labor desempeñada:</em></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	</div>
</div>


<!-- contenedor_internas -->
<!--footer-->
<div class="footer">
  <div>
    <div>
      <h1>Empleo en marcha - Contacto</h1>
      <ul>
        <li>Teléfono:<span>(057)(1) 489 0902- 567 9899</span></li>
        <li>Email:<span>info@empleoenmarcha.com</span></li>
      </ul>
    </div>
    <div>
      <h1>Mapa de Navegación</h1>
      <ul>
        <li><a href="nosotros.php">Nosotros </a></li>
        <li><a href="registro_hv.php">Registre su hoja de vida</a></li>
        <li><a href="ofertas_publicadas.php">Ofertas de empleo</a></li>
        <li><a href="consejos-profesionales.php">Consejos profesionales</a></li>
        <li><a href="preguntas-frecuentes.php">Ayuda </a></li>
     
      </ul>
    </div>
    <div> 
      <a target="new" href="http://www.zonafrancaoccidente.com/"></a> <!--LOGO 1--> 
       <a target="new" href="http://www.alcaldiademosquera.gov.co/"></a> <!--LOGO 3--> 
							 <a target="new" href="http://www.alcaldiademosquera.gov.co/"></a><!--LOGO 2--> 
    </div>
    <div>© 2013 <span>Zona Franca de Occidente - Mosquera</span> - Todos los derechos reservados</div>
    <div class="footer-ahorranito"></div>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function(){

  $('.scroll-zonasegura').jScrollPane();

  $('#tab-container').easytabs();

  $("#sliderheader").bxSlider({
      mode: 'fade',
      pause: 5000,
      auto: true,
      controls: false, 
      pager: false,
      easing: 'ease'   
  });


$('#slider1').bxSlider({
    pager: true,
      pause: 5000,
    pagerType: 'short',
    moveSlides: 1,
    auto: true,
    autoHover: true
  });


$('#slider2').bxSlider({
    pager: true,
      pause: 5500,
    pagerType: 'short',
    moveSlides: 1,
    auto: true,
    autoHover: true
  });

$("#noticias_home").bxSlider({
      mode: 'fade',
      pause: 5000,
      auto: true,
      controls: false, 
      pager: true,
      easing: 'linear',
      pagerShortSeparator: '/'
  });


});

  
  $(".select_dd").msDropDown().data("dd");

  $('form').customForm();
  
  $('input[placeholder]').placeholder();


  $('.footer-ahorranito').ahorranito({
    type:1,
    fontColor1:'#fff',
    height: 30
  });


//LLAMADOS INTERNAS

  $("ul.slider_ofertasdesc").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

    $("ul.slider_directorio").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

   $("ul.slider_noticias").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

     $("ul.slider_empresas").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

 $("ul.slider-perfil-dv").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: true,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

  $("ul.slider-buscador-dv").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });


     

      $(".socios > div > div:nth-of-type(1) > ul").bxSlider({
      slideWidth: 745,
      auto: true,
      pause: 5000,
      controls: false, 
      pager: false,
      minSlides: 4,
      maxSlides: 4,
      moveSlides: 1,
      slideMargin: 0
  });

/* FANCYBOX */

$('.fancybox').fancybox();

$(".popup").fancybox({
    'hideOnContentClick': true
  });

$(".carga_emergente").fancybox({
  'scrolling' : 'no',
  'width' : '700px',
  'height' : '700px',
  'autoScale' : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe'
});

$(".form_finalizado").fancybox({
  'scrolling' : 'no',
  'width' : '700px',
  'height' : '220px',
  'autoScale' : false,
   'fitToView' : false,
           'autoSize' : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe'
});

$(".terminos-condiciones").fancybox({
  'scrolling' : 'no',
  'width' : '700px',
  'height' : '600px',
  'autoScale' : false,
   'fitToView' : false,
           'autoSize' : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe'
});
            
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('.acc_container').show();
  $(".acc_trigger").click(function() {
     event.preventDefault();
  $(".opciones").slideDown();
   });
  $(".acc_trigger").click(function() {
     event.preventDefault();
    $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-4").slideUp();
   });

});
</script>



<script type="text/javascript">


$(".ampliar-opciones-1").click(function(event) {
     event.preventDefault();
     $(".mas-opciones-2, .mas-opciones-3, .mas-opciones-4, .mas-opciones-5").slideUp();
    $(".mas-opciones-1").slideDown();
   });


$('.mas-opciones-2').hide();
$(".ampliar-opciones-2").click(function(event) {
     event.preventDefault();
     $(".mas-opciones-1, .mas-opciones-3, .mas-opciones-4, .mas-opciones-5").slideUp();
    $(".mas-opciones-2").slideDown();
   });
$('.mas-opciones-3').hide();
$(".ampliar-opciones-3").click(function(event) {
     event.preventDefault();
     $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-4, .mas-opciones-5").slideUp();
    $(".mas-opciones-3").slideDown();
   });
$('.mas-opciones-4').hide();
$(".ampliar-opciones-4").click(function(event) {
     event.preventDefault();
     $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-5").slideUp();
    $(".mas-opciones-4").slideDown();
   });
$('.mas-opciones-5').hide();
$(".ampliar-opciones-5").click(function(event) {
     event.preventDefault();
     $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-4").slideUp();
    $(".mas-opciones-5").slideDown();
   });
</script>
  
</body>
</html>
<!--footer-->



