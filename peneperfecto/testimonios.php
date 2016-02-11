<?
    include_once './php/clases.php';
    
    $testimoniostituloDAO = new testimoniostituloDAO();
    $testimoniostitulo = $testimoniostituloDAO->getById(1);
    
    $testimoniosDAO = new testimoniosDAO();
    $testimonios = $testimoniosDAO->gets();
    $total = $testimoniosDAO->total();
    
    $p = 0;
    if(isset ($_GET['p'])){
        $p = $_GET['p'];
    }
    
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
          <li><a href="testimonios.php" id="primero">Testimonios</a></li>
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
          </p>
        </div>
        <div id="envcolder_cuerpo">
            <div id="tit_barconts"><?=$testimoniostitulo->gettitulo() ?> </div>
          <div id="env_cajonprograma">
            <div id="textoscont_pperfectointernas">
			
			<?
                        $numero = $total/4;
                        ?>
                
              <? if($numero>=1): ?>  
              <div id="paginacion">
                  <? for ($i = 0; $i < $numero; $i++) { ?>
                  <li><a href="./testimonios.php?p=<?=$i ?>" <? if($p==$i) echo 'class="active"' ?> ><?=$i+1 ?></a></li>
                  <? } ?>
              </div>
              <? endif; ?>
			
			
			
			
			
			
		<? for ($j = $p*4; $j < $total && $j<(($p*4)+4); $j++) { ?>	
                
                <?
                
                $testimonio = $testimonios[$j];
                
                //cambiar el formato de la fecha
                $fecha = explode('/', $testimonio->getfecha());
                
                $mes["01"] ="Enero";
                $mes["02"] ="Febrero";
                $mes["03"] ="Marzo";
                $mes["04"] ="Abril";
                $mes["05"] ="Mayo";
                $mes["06"] ="Junio";
                $mes["07"] ="Julio";
                $mes["08"] ="Agosto";
                $mes["09"] ="Septiembre";
                $mes["10"] ="Octubre";
                $mes["11"] ="Noviembre";
                $mes["12"] ="Diciembre";

                
                ?>
                
              <div id="subtitulos_int4">
                <div id="fecha_publicacion">Publicado el <?=$fecha[1] ?> de <?=$mes[$fecha[0]] ?> de <?=$fecha[2] ?> </div>
                <div id="subtitulos_int3"><?=$testimonio->gettitulo() ?></div>
              </div>
              <div id="row_beneficios">
                  <div id="img_beneficios"><img src=".<?=$testimonio->getimagen() ?>" width="250" height="150" /></div>
                <div id="txt_beneficios">
                    <p><?=$testimonio->getdescripcion() ?></p>
                </div>
              </div>
              <div id="clear_sepinterno"></div>
              <? } ?>
              
				
				
				
				
				
				
              
			  
	<? if($numero>=1): ?>  
              <div id="paginacion">
                  <? for ($i = 0; $i < $numero; $i++) { ?>
                  <li><a href="./testimonios.php?p=<?=$i ?>" <? if($p==$i) echo 'class="active"' ?>  ><?=$i+1 ?></a></li>
                  <? } ?>
              </div>
              <? endif; ?>
			  
			  
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
