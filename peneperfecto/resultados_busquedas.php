<?
    include_once './php/clases.php';
    
    $comentarioDAO = new comentarioDAO();
    $comentarios = $comentarioDAO->gets(1);
    $total = $comentarioDAO->total(1);
    
    $ventaDAO = new ventaDAO();
    
    $p = 0;
    if (isset($_GET['p']))
        $p = $_GET['p'];
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENEPERFECTO.com / Ejercicios para agrandar tu pene</title>
<link rel="shortcut icon" href="favicon.ico" />
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
      <div id="menuh">
        <ul>
          <li><a href="empresa.php" >Empresa</a></li>
          <li><a href="tecnicas_aevitar.php">Técnicas a evitar</a></li>
          <li><a href="testimonios.php">Testimonios</a></li>
          <li><a href="comentarios.php">Comentarios</a></li>
          <li><a href="preguntas_frecuentes.php">Preguntas frecuentes</a></li>
          <li><a href="contactenos.php">Contáctenos</a></li>
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
        <div id="cajonmapaubicacion">
          <?php include "columna_modulos.php"; ?>
          <p><br/>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><br/>
              <br/>
              <br/>
			  <br/>
              <br/>
              <br/>
			  <br/>
              <br/>
              <br/>
          </p>
        </div>
        <div id="envcolder_cuerpo">
          <div id="tit_barconts">Resultados de su busqueda</div>
          <div id="env_cajonprograma">
          
          
          	<div id="textoscont_pperfectointernas">
              <div id="clear_sepinterno"></div>

              <div id="subtitulos_int">
                <div id="fecha_publicacion">Publicado el DD de MM del AAAA </div>
                <div id="subtitulos_int3">Título</div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              <div id="subtitulos_int">
                <div id="fecha_publicacion">Publicado el DD de MM del AAAA </div>
                <div id="subtitulos_int3">Título</div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              <div id="subtitulos_int">
                <div id="fecha_publicacion">Publicado el DD de MM del AAAA </div>
                <div id="subtitulos_int3">Título</div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              <div id="subtitulos_int">
                <div id="fecha_publicacion">Publicado el DD de MM del AAAA </div>
                <div id="subtitulos_int3">Título</div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              <div id="subtitulos_int">
                <div id="fecha_publicacion">Publicado el DD de MM del AAAA </div>
                <div id="subtitulos_int3">Título</div>
              </div>
              <div id="row_beneficios">
                <div id="txt_comentarios">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              
              
              <div id="paginacion">
                <li><a href="resultados_busquedas.php?p=0" class="active">1</a></li>
                <li><a href="resultados_busquedas.php?p=1">2</a></li>
                <li><a href="resultados_busquedas.php?p=2">3</a></li>
              </div>
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
