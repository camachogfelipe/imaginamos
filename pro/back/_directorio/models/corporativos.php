<?php include 'cms/core/mapping/include.mapping.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>-- : -- YAMBALO --:--</title>
    <script  src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Icon -->
<link rel="shortcut icon" href="favicon/favicon.ico" />

<!-- == CSS == -->

<!-- Styles -->
<link href="css/general.css" rel="stylesheet" type="text/css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/ddlevelsmenu.css" />

<!-- = JQuery = -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<!-- menu -->
<script type="text/javascript" src="js/ddlevelsmenu.js"></script>
<script src="js/tabbedpanels.js" type="text/javascript"></script>
<link href="css/tabbedpanels.css" rel="stylesheet" type="text/css" />sadfasdf
</head>fasd

<body>

<div id="contenedor">
  <div id="cabezote"> 
  <?php
	//Set values for page
	$current_page = "eventos";
	
	//Load cabezote
	include_once('cabezote.php'); 
?>  
  <!-- fin cabezote --></div>
  <div id="contenido">
  <h2>Eventos corporativos</h2>
  <img src="img/img-evecorporativos.png" width="474" height="276" class="fltrt" />
  <h3>Planeaci&oacute;n</h3>
  <p>Cualquier aventura requiere m&aacute;s tiempo de planeaci&oacute;n que de ejecuci&oacute;n. Un aventurero serio es un planeador meticuloso. Nuestra experiencia organizando programas para miles de personas nos da la confianza, tranquilidad y respaldo de ser un equipo confiable para planear al detalle, haciendo de cada evento un verdadero &eacute;xito.<br />
    Yambal&oacute; le ayudar&aacute; a crear las mejores experiencias para su equipo de trabajo. Solo siga estos simples pasos:</p>
  <p class="paso"><strong><em>Paso 1</em></strong> <a href="contactenos.php">Cont&aacute;ctenos</a> con su idea y objetivo</p>
<p class="paso"><strong><em>Paso 2 </em></strong>Yambal&oacute; dise&ntilde;ar&aacute; una propuesta con varias estrategias.</p>
<p class="paso"><strong><em>Paso 3 </em></strong>Juntos discutiremos los beneficios, pros y contras de<br />
  cada estrategia. Determinando el mejor resultado posible.</p>
<h3>Actividades</h3>
  <p>En Yambal&oacute; hemos creado exitosas experiencias de aventura por m&aacute;s de 10 a&ntilde;os. Si está buscando impacto e innovaci&oacute;n, la experiencia es la clave. Las posibilidades de actividades son inmensas. <br />
  </p>
  <h3>Tipo de eventos</h3>
  <p>Lanzamiento de productos, campa&ntilde;as BTL, un d&iacute;a de aventura fuera de la oficina o programas de <a href="entrenamiento-corporativo.php">Entrenamiento Corporativo</a>.</p>
   <div class="btn-prod-servicios"><a href="productos-servicios.php">Productos y Servicios</a></div>
  <br class="clearfloat" />
<!-- fin contenido --></div>
    <div id="push"></div>
  <!-- fin contenedor --></div>
  <div id="piedepagina">
  <div class="box-foto02"><img src="img/img-pievalla02.png" width="311" height="424" /></div>
  <div class="box-contenido">
    <?php require_once('piedepagina.php'); ?>
    </div>
<!-- fin piedepagina --></div>
</body>
</html>
