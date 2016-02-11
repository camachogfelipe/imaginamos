<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
    <base href="<?php echo base_url('assets') . '/' ?>">
	<meta charset="UTF-8">
	<link href="img/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/gallery.css">
	<link rel="stylesheet" href="css/anythingslider.css">
	<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/slides.jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/component.js"></script>
	<script src="js/jquery.anythingslider.js" type="text/javascript"></script>

	<title>Metalmecanico</title>
	<script type="text/javascript">
		$(document).ready(function (){    
		$(function(){
			var startSlide = 1;
			$('#slides').slides({
				preload: true,
				generatePagination: false,
				play: 7000,
				pause: 3000,
				hoverPause: false,
				generateNextPrev: true,
				animationComplete: function(current){
				}
			});
		});
	});

$(function() {
   $('#slider, #slider2, #slider3').anythingSlider({
	   	buildArrows: false,
	    buildNavigation: true,
	    buildStartStop: false,
   });
});   
	</script>
</head>
<body>
	<div class="bar_top"></div>
	<header>
		<a href="../"><div id="logo"><img src="img/logo.png"></div></a>
		<nav>
			<ul>
				<li><a href="../quienes_somos"><div class="m_quienes m_tamanos"></div></a></li>
				<li><a href="../front_alcance"><div class="m_alcance m_tamanos"></div></a></li>
				<li><a href="../front_proyectos"><div class="m_proyectos m_tamanos"></div></a></li>
				<li><a href="../front_clientes"><div class="m_clientes m_tamanos"></div></a></li>
				<li><a href="../front_noticias"><div class="m_noticias m_tamanos"></div></a></li>
				<li><a href="../contactenos"><div class="m_contactenos m_tamanos"></div></a></li>
			</ul>
		</nav>
	</header>
	<div class="clean"></div>
	<div style="height:20px;"></div>