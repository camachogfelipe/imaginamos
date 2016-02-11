<?
    include_once './php/clases.php';
    
    $contactenosimagenDAO = new contactenosimagenDAO();
    $contactenosimagen = $contactenosimagenDAO->getById(1);
    
    $contactoinfoDAO = new contactoinfoDAO();
    $contactoinfo = $contactoinfoDAO->getById(1);
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
  <!--------------------------------------------HEADER PP---------------------------->
  <div id="headbarratop" class="navtop">
    <div id="bttop">
      <?php include "login_website.php"; ?>
    </div>
    <div id="bartop">
      <div id="menuh">
        <ul>
          <li><a href="empresa.php" >Empresa</a></li>
          <li><a href="tecnicas_aevitar.php">Técnicas a evitar</a></li>
          <li><a href="testimonios.php">Testimonios</a></li>
          <li><a href="comentarios.php">Comentarios</a></li>
          <li><a href="preguntas_frecuentes.php" >Preguntas frecuentes</a></li>
          <li><a href="contactenos.php" id="primero">Contáctenos</a></li>
        </ul>
      </div>
    </div>
    <div id="envidioma"><a href="index.php">Español</a></div>
  </div>
  <div id="headlgomenu">
    <div id="envlogo"><a href="index.php"><img src="images/logopp.png" alt="PENEPERFECTO.com" width="484" height="129" border="0" /></a></div>
    <div id="envsearchmenu">
      <div id="envsearch">
        <form action="" method="get">
          <div id="campsearch">
            <input name="text" type="text"  id="Buscar..." onfocus="if (this.value=='Buscar...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Buscar...';return false;}" value="Buscar..." class="transparente" />
          </div>
        </form>
      </div>
      <div id="envmenudest">
        <?php include "menutop_2.php"; ?>
      </div>
    </div>
  </div>
  <!-------------------------------FIN HEADER-------------------------------------->
  <!-------------------------------BANNER----------------------------------------->
  <!----------------------------------FIN BANNER------------------------------------------->
  <!----------------------------------CONTENIDOS--------------------------------------------->
  <div id="env_internas">
    <div id="caja_centbienestar">
      <div class="cont_pperfecto" >
        <div id="colatizq">
          <?php include "columna_modulos_contacto.php"; ?>
          <p></p>
        </div>
        <div id="envcolder_contacto">
          <div id="tit_barconts">Contáctenos </div>
          <div id="env_cajonprograma">
            <div id="textoscont_pperfectointernas">
              <div id="envcontacto">
                <iframe width="478" height="600" src="form_contacto.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>
                <br/>
                <br/>
				
			
				
				
				
              </div>
              <p> </p>
              <div id="img_contacto"><img src=".<?=$contactenosimagen->getimagen() ?>" width="240" height="353" /></div>
			  
			  
			  <div id="btpperfect_int"><a href="registro_pagaduria.php">&nbsp;</a></div>
			  
			  
			  
			  
			  
			  
			  
			  
			  <div id="col1_datoscont">
	 <span class="titulopie">Pene Perfecto </span>
	 <?php /*?><div id="cajondatos_dir">	 
             Dirección: <?=$contactoinfo->getdireccion() ?></div>
	 
	  <div id="cajondatos_tel">	 
              Teléfono: <?=$contactoinfo->gettelefono() ?></div><?php */?>
	  <div id="cajondatos_cel">	 
              Celular: <?=$contactoinfo->getcelular() ?></div>
	 
	  <div id="cajondatos_fax">	 
              Fax: <?=$contactoinfo->getfax() ?></div>
	 
	  <div id="cajondatos_mail">	 
              E-mail: <?=$contactoinfo->getmail() ?></div>
	 
	 
	  <div id="cajondatos_pais">Bogotá - Colombia </div>
	 
	 
	 
	 
	 
	 </div>
			  
			  
			  
			  
              
              <br/>
            </div>
            <br/>
          </div>
          <div id="footcajonprogram"></div>
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
  <div class="footer_autor"><span id="ahorranito"></span><a href="http://www.imaginamos.com">Diseño Web: </a><a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a></div>
    <div id="logfootpperfecto">
     Copyright © 2013&nbsp; PenePerfecto.com  -Todos los derechos reservados.
    </div>
  </div>
</div>
</body>
</html>
<? if(isset ($_GET['ok'])){
        ?>
    
    <script type="text/javascript">
        alert('Su mensaje ha sido enviado');
    </script>
    
        <?
    } ?>