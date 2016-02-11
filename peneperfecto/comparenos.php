<?
    include_once './php/clases.php';
    
    //era comparenos
    
    $conparenosDAO = new conparenosDAO();
    $conparenoss = $conparenosDAO->gets();
    $total = $conparenosDAO->total();
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

<body><div id="headbarratop" class="navtop">
  
  
  
  
  
    <div id="bttop">
      <?php include "login_website.php"; ?>
    </div>
	
	
	
	
	
    <div id="bartop">
      <?php include "menutop_1.php"; ?>
    </div>
    <div id="envidioma"><a href="index.php">Español</a></div>
  </div>
<div id="wrapcontenidos">
  <!--------------------------------------------HEADER PP---------------------------->
  
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
        <div id="bt1"><a href="index.php">INICIO</a></div>
        <div id="bt2"><a href="como_funciona.php">CÓMO FUNCIONA</a></div>
        <div id="bt3"><a href="beneficios.php">BENEFICIOS</a></div>
        <div id="bt4"><a href="resultados.php">RESULTADOS</a></div>
        <div id="bt5cur"><a href="comparenos.php">COMPÁRENOS</a></div>
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
          <div id="tit_barconts">Compárenos</div>
          
          <div id="env_cajonprograma" style="overflow:hidden;">
            <div id="textoscont_pperfectointernas">
              <div id="row_titulos" style="margin-bottom:0;">
                <div id="caj_espacio"></div>
                <div id="caj_titulo2">OTROS</div>
                <div id="caj_titulo1"><span class="txtdest_pperfecto">PENE</span> <span class="txtdest_pperfecto2">PERFECTO</span></div>
              </div>

              <div class="con-lis-compara">
              	<ul>
                	<li>
                  	<div class="con-tx-compa col-3">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-2">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-1">
                    	<h1>Funcionalidad del programa</h1>
                    </div>
                  </li>
                  <li>
                  	<div class="con-tx-compa col-3">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-2">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-1">
                    	<h1>Resultados optimos</h1>
                    </div>
                  </li>
                  <li>
                  	<div class="con-tx-compa col-3">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-2">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-1">
                    	<h1>Comparación</h1>
                    </div>
                  </li>
                  <li>
                  	<div class="con-tx-compa col-3">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-2">
                    	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="con-tx-compa col-1">
                    	<h1>Compromiso con los datos de prueba y más cosa nuevas</h1>
                    </div>
                  </li>
                </ul>
              </div>
                
               <?php /*?> <? if($total>0): foreach ($conparenoss as $conparenos): ?>
                    <div id="row_compare">
                        <div id="caj_caracteristicas"><?=$conparenos->getcaracteristica() ?></div>
                    <div id="caj_compar1">
                        <p><?=$conparenos->getpp() ?></p>
                    </div>
                    <div id="caj_compar2">
                        <p><?=$conparenos->getotro() ?></p>
                    </div>
                  </div>
                  <div id="clear_sepinterno2"></div>
                <? endforeach;  endif;  ?><?php */?>
                
                
                
                <!--
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 1</div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 2 </div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 3 </div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 4 </div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 5 </div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
              <div id="row_compare">
                <div id="caj_caracteristicas">Característica 6 </div>
                <div id="caj_compar1">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
                <div id="caj_compar2">
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus.</p>
                </div>
              </div>
              <div id="clear_sepinterno2"></div>
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
