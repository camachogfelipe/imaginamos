<?
    include_once './php/clases.php';
    
    $terminosDAO = new terminosDAO();
    $terminos = $terminosDAO->gets();
    $total = $terminosDAO->total();
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
<div id="headbarratop" class="navtop"> <div id="bttop"><?php include "login_website.php"; ?></div>
    <div id="bartop">
      <?php include "menutop_1.php"; ?>
    </div>
    <div id="envidioma"><a >Español</a></div>
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
        <div id="cajonmapaubicacion">
		
		
		
		
		
		
		
		<?php include "columna_modulos.php"; ?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          <p><br/>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><br/>
              <br/>
              <br/>
     
       
          </p>
        </div>
        <div id="envcolder_cuerpo">
          <div id="tit_barconts">Términos y condiciones </div>
          
          <div id="env_cajonprograma">
            <div id="textoscont_pperfectointernas">
                
                <? if ($total>0): foreach ($terminos as $termino): ?>
              <div id="subtitulos_int">
                  <div id="subtitulos_int3"><?=$termino->gettitulo() ?> </div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p><?=$termino->getdescripcion() ?></p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              <? endforeach;              endif; ?>
              
              
              
              <!--
              
              
              <div id="subtitulos_int">
                <div id="subtitulos_int3">PuntoNo. 2 </div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              <div id="subtitulos_int">
                <div id="subtitulos_int3">PuntoNo. 3 </div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              
              <div id="subtitulos_int">
                <div id="subtitulos_int3">PuntoNo. 4 </div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              
              -->
              <p> </p>
              <div id="btpperfect_int"><a href="registro_pagaduria.php">&nbsp;</a></div>
              <p></p>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
            </div>
            <br/>
          </div><div id="footcajonprogram"></div>
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