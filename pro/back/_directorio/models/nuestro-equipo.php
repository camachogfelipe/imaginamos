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
</head>

<body>

<div id="contenedor">
  <div id="cabezote"> 
  <?php
	//Set values for page
	$current_page = "nuestro-equipo";
	
	//Load cabezote
	include_once('cabezote.php'); 
?>  
  <!-- fin cabezote --></div>
  <div id="contenido">  
  <h2>Nuestro Equipo</h2>
  <img src="img/nuestro-equipo.png" width="564" height="284" class="fltrt" /><p>Nuestro staff está liderado por un grupo de profesionales de educaci&oacute;n al aire libre. Los counselors y facilitadores de Yambal&oacute; son j&oacute;venes profesionales y estudiantes universitarios en diferentes &aacute;reas que disfrutan compartiendo y ense&ntilde;ando sus habilidades a los participantes de nuestros programas y aprendiendo de ellos. </p>
  <h3>Trabaje con nosotros</h3>
  <p>Para nosotros es un placer saber de alguien que disfruta el aire libre y quiere compartir sus experiencias. Si desea explorar su potencial y ayudarnos a crear experiencias de aventura, <a href="contactenos.php">cont&aacute;ctenos</a>!</p>
  <p> Tel&eacute;fono:	(57-1) 311 74 34, 
    Cel: 		315 602 82 82<br />
    E-mail:	<a href="mailto:yambalo@gmail.com">yambalo@gmail.com</a><br />
  </p>
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
