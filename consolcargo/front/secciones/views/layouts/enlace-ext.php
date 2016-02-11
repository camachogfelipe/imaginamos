<!DOCTYPE html>
  <!--[if lt IE 9]>	<html lang="es" class="no-js lt-ie9">	<![endif]-->
  <!--[if IE 9]>		<html lang="es" class="no-js ie9">		<![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
	<head>
  	<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
		<title>Consolcargo...</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Keywords" content="palabras clave" lang="es" />
		<meta name="Description" content="texto empresarial" lang="es" />
		<meta name="date" content="2013" />
		<meta name="author" content="diseño web: imaginamos.com" />
		<meta name="robots" content="All" />	
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no" />
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/consolcargo.css" />
    <style type="text/css">html, body {overflow:hidden;}</style>
	</head>
	<body>
  
		<div id="header-bar">
   		<div class="close-header"><a id="close-button" title="Cerrar marco | volver a consolcargo.com" class="close" href="<?= base_url(); ?>">X</a></div>
     	<p class="meta-data"><a class="close" href="<?= base_url(); ?>">Remover Marco</a> | Consolcargo S.A.S no se hace responsable por el contenido de los sitios aquí visualizados </p>
     	<!--<a class="consolcargo-preview-logo site-loopback" href="../Consolcargo/">
     		<div class="consolcargo-preview-logo">
      		<img src="assets/img/header-logo.png" alt="">
      	</div>
     	</a>-->
   	</div>
   
   	<iframe id="preview-frame" src="<?php echo $enlace->link;?>" name="preview-frame" frameborder="0" noresize="noresize"></iframe>  
  
    <script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
    <script type="text/javascript">var calcHeight = function(){var headerDimensions = $('#header-bar').height(); $('#preview-frame').height($(window).height() - headerDimensions);}; $(document).ready(function(){calcHeight(); $('#header-bar a.close').mouseover(function(){$('#header-bar a.close').addClass('activated');}).mouseout(function(){$('#header-bar a.close').removeClass('activated');});}); $(window).resize(function(){calcHeight();}).load(function(){calcHeight();});</script>

	</body>
</html>