<?
    include_once './php/clases.php';
    
    $homeintroduccionDAO = new homeintroduccionDAO();
    $homeintroduccion = $homeintroduccionDAO->getById(1);

    $homebeneficiotituloDAO = new homebeneficiotituloDAO();
    $homebeneficiotitulo = $homebeneficiotituloDAO->getById(1);
    
    $homebeneficiosDAO = new homebeneficiosDAO();
    $homebeneficios = $homebeneficiosDAO->gets();
    
    $hometextobtnpenepDAO = new hometextobtnpenepDAO();
    $hometextobtnpenep = $hometextobtnpenepDAO->getById(1);
    
    $homebannerDAO = new homebannerDAO();
    $homebanner = $homebannerDAO->getById(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENEPERFECTO.com / Ejercicios para agrandar tu pene</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />







<style type="text/css">
<!--
body {
	background-image: url(images/bg_pp.png);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapcontenidos">
  <div id="metroimg"></div>
  <div id="colderbanner">
    <iframe width="450" height="250" src="slide_pperfecto.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>
  </div>
  <!--------------------------------------------HEADER PP---------------------------->
  <div id="headbarratop" class="navtop">
    <div id="bttop">
      <?php include "login_website.php"; ?>
    </div>
    <div id="bartop">
      <?php include "menutop_1.php"; ?>
    </div>
      <div id="envidioma"><a >Espa&ntilde;ol</a></div>
  </div>
  <div id="headlgomenu">
    <div id="envlogo"><a href="index.php"><img src="images/logopp.png" alt="PENEPERFECTO.com" width="484" height="129" border="0" /></a></div>
    <div id="envsearchmenu">
      <? include_once './buscar.php'; ?>
      <div id="envmenudest">
        <div id="bt1cur"><a href="index.php">INICIO</a></div>
        <div id="bt2"><a href="como_funciona.php">CÓMO FUNCIONA</a></div>
        <div id="bt3"><a href="beneficios.php">BENEFICIOS</a></div>
        <div id="bt4"><a href="resultados.php">RESULTADOS</a></div>
        <div id="bt5"><a href="comparenos.php">COMPÁRENOS</a></div>
      </div>
    </div>
  </div>
  <!-------------------------------FIN HEADER-------------------------------------->
  <!-------------------------------BANNER----------------------------------------->
  <div id="envbanner">
    <div id="colizqbanner">
        <div id="envfrasesbannizq"><img src=".<?=$homebanner->getbanner() ?>" width="622" height="231"/></div>
    </div>
  </div>
  <!----------------------------------FIN BANNER------------------------------------------->
  <!----------------------------------CONTENIDOS--------------------------------------------->
  <div id="env_internas">
    <div id="caja_centbienestar">
      <div class="cont_pperfecto" >
        <div id="cajonmapaubicacion">
          <?php include "columna_modulos.php"; ?>
          <p><br/>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><br/></p>
        </div>
        <div id="envcolder_cuerpo">
         
            <div id="tit_barconts"><?=$homeintroduccion->gettitulo() ?></div>
          <div id="textoscont_pperfecto">
              <?=$homeintroduccion->gettexto() ?>
          </div>
            <div id="tit_barconts"><?=$homebeneficiotitulo->gettitulo() ?> </div>
          <div id="env_cajonprograma">
              
              
          <? $control=0; for ($i = 0; $i < count($homebeneficios); $i++) { 
              $homebeneficio = $homebeneficios[$i]; 
              
              ?>
              <div id="enncolrow<? 
              
              if ($control==0) {
                  echo "2"; 
                  $control=1;

                  } 
              else{ 
                  $control=0; 
                  
                  } 
              
              ?>">
                  <? if(isset($homebeneficios[$i+1])){ $homebeneficio = $homebeneficios[$i+1]; ?>
                        <div id="colrightprogm"><img src=".<?=$homebeneficio->geticono() ?>" width="65" height="67" hspace="5" align="left" /><?=$homebeneficio->getdescripcion() ?> </div>
                  <? }else{ echo '<div id="colrightprogm">&nbsp;</div>'; } 
                  $homebeneficio = $homebeneficios[$i];
                  ?>
                <div id="colleftprogm"> <img src=".<?=$homebeneficio->geticono() ?>" width="65" height="67" hspace="5" align="left" /><?=$homebeneficio->getdescripcion() ?> </div>
                <? $i++; ?>
              </div>
          <? } ?>
            <br/>
            
            
          </div>
          <div id="footcajonprogramhome"> <div id="cajaenlace">
              <p><?=$hometextobtnpenep->gettexto() ?> </strong></p>
            <div id="btpperfect_inthome"><a href="registro_pagaduria.php">&nbsp;</a></div>
          </div></div>
          <div id="cajoncomentarios">
            <div id="tit_cajoncomentarios">Comentarios de nuestros Usuarios </div>
            <div id="txt_cajoncomentarios"> Para compartir un comentario, debes ingresar a nuestra zona de usuarios </div>
            <div id="btingrsear"><a href="inicio_usuarios.php">&nbsp;</a></div>
            <div id="btsuscribase"><a href="registro_pagaduria.php">&nbsp;</a></div>
          </div>
          
          
          <div class="conta-comentarios">
          	<h1>TOTAL COMENTARIOS</h1>
            <h2>99.999.999</h2>
          </div>
          
          
          <div id="env_moddestacados">
            <?php include "slide_testimonios.php"; ?>
           
          </div>
        </div>
        <br />
        <br/>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------FIN CONTENIDOS---------------------------------------->
<!---------------------------------------FOOTER PP--------------------------------------------->
<div id="piedepagina">
  
  <div id="envcont_foot">
    <?php include "foot_pperfecto.php"; ?>
  </div>
  <div id="envcreditos">
      <div class="footer_autor"><span id="ahorranito"></span><a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a><a href="http://www.imaginamos.com" target="_blank" >imagin<span>a</span>mos.com</a></div>
    <div id="logfootpperfecto">
     Copyright © 2013&nbsp; PenePerfecto.com  -Todos los derechos reservados.
    </div>
  </div>
</div>
</body>
</html>
<? if(isset ($_GET['ur'])): ?>
<script type="text/javascript">
    alert('Ingrese su E-Mail y Contraseña para entrar al sistema')
</script>
<? endif; ?>
<? if(isset ($_GET['lr'])): ?>
<script type="text/javascript">
    alert('El E-Mail o Contraseña ingresados son incorrectos')
</script>
<? endif; ?>