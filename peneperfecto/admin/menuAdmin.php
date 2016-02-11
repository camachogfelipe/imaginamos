<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$s = $_GET['s'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador de Contenidos :: Versi&oacute;n 7.7</title>

<!-- datepicker -->
<link type="text/css"rel="stylesheet"
     href="http://jquery-ui.googlecode.com/svn/tags/1.7/themes/redmond/jquery-ui.css" />   
  <script type="text/javascript"
     src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript"
     src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#txtFechaSimple').datepicker();
      });
  </script>  

<!-- CSS ADMINISTRADOR -->
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />

<!-- CSS ICONOS UI JQUERY -->
<link type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />

<!-- MENU -->
<script src="jquery/menu.js" type="text/javascript"></script>
<!-- TO ask for comfirmation-->
<script src="confirm.js" type="text/javascript"></script>

<!-- VERSION JQUERY -->
<script type="text/javascript" src="jquery/jquery-1.4.2.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.8.5.custom/js/jquery-ui-1.8.5.custom.min.js"></script>
<link type="text/css" href="jquery/jquery-ui-1.8.5.custom/css/smoothness/jquery-ui-1.8.5.custom.css" rel="stylesheet" />
<!-- FORMULARIOS VALIDACION -->
<!--<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery/jquery.metadata.js"></script>-->

<!-- TABLAS DE RESULTADOS -->
<script src="jquery/jQueryTableSorterConPaging/_assets/js/jquery.tablesorter-2.0.3.js" type="text/javascript"></script>
<script src="jquery/jQueryTableSorterConPaging/_assets/js/jquery.tablesorter.filer.js" type="text/javascript"></script>
<script src="jquery/jQueryTableSorterConPaging/_assets/js/jquery.tablesorter.pager.js" type="text/javascript"></script>
<link href="jquery/jQueryTableSorterConPaging/_assets/themes/yui/style.css" rel="stylesheet" type="text/css" />

<!-- FORMULARIOS TRANSFORMACION -->
<link rel="stylesheet" href="css/jqtransform3.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/demo_jqtransform.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery/jquery.jqtransform.min.js" ></script>

<!-- MODAL DIALOG -->
<!--<script src='jquery/basic.js' type='text/javascript'></script>
<script src='jquery/jquery.simplemodal.js' type='text/javascript'></script>
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />-->
<!-- IE 6 hacks -->
<!--[if lt IE 7]>
<link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
<![endif]-->

<!-- GREYBOX -->
<script type="text/javascript">
        var GB_ROOT_DIR = "./greybox/";
</script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />

<!-- JQMODAL -->
<!--<script type="text/javascript" src="jquery/jqModal.js"></script>
<link type="text/css" rel="stylesheet" href="css/jqModal.css"  />-->

<!-- CARGA DE IMAGENES -->
<script type="text/javascript" src="jquery/jquery.uploadify.js"></script>
<link type="text/css" rel="stylesheet" href="css/uploadify.css"  />
<!-- EDICION DE IMAGENES -->
<script type="text/javascript" src="jquery/jquery.imgareaselect-0.3.min.js"></script>

<!-- SCRIPTS Y FUNCIONES JQUERY -->
<script type="text/javascript">

$(document).ready(function() {
	  initMenu();
	  $('#datepicker').datepicker();
	  $(function(){
			$('#form_boton').jqTransform({imgPath:'imagenes/forms/'});
		});

	   $("#tableOne").tablesorter({ debug: false, headers: { 0:{sorter: 'digit'} }, sortList: [[0,0]], widgets: ['zebra'] })
                        //.tablesorterPager({ container: $("#pagerOne"), positionFixed: false })
                        .tablesorterFilter({ filterContainer: $("#filterBoxOne"),
                            filterClearContainer: $("#filterClearOne"),
                            filterColumns: [0],
                            filterCaseSensitive: false
                        });
		$("#nuevo").click( function() {
			window.location.href="equipo_nuevo.php";
		});

});

</script>
<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
<![endif]-->
<style type="text/css">
.Estilo3 {color: #349AC0; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.Estilo4 {
	font-size: 12px;
	color: #666666;
	font-family: Arial, Helvetica, sans-serif;}
.EstiloRed {
	font-size: 12px;
	color: #df0101;
	font-family: Arial, Helvetica, sans-serif;}
.EstiloGreen {
	font-size: 12px;
	color: #1fa441;
	font-family: Arial, Helvetica, sans-serif;}
</style>
</head>

<body>

<div class="cabezote">
  <div class="cabezote_interior">
   	  <div class="cabezote_logo_empresa"><img src="../images/logo.png?1265757979" width="200" height="80" /></div>
    <div class="cabezote_logo_imaginamos"></div>
  </div>
</div>
<div class="marco">
<div class="version">Versión 7.7.</div>
   	  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3"><div id="marco_sup"></div></td>
          </tr>
          <tr>
            <td width="6" background="imagenes/contenido/marco_izq.png">&nbsp;</td>
            <td width="993" valign="top" bgcolor="#FFFFFF">
              <table width="993" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="184" valign="top">
                  	<div id="wrapper">
                    <div id="menu_marco">
                      <div id="menu_marco2">
                        <ul id="menu">
                          <li><a href="menuAdmin.php?s=userPass" id="menu3"><div class="icono" id="icono"></div>Cambiar Clave</a></li>
                          <li><a href="#"><div class="icono" id="icono"></div>Home</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=homebanner" class="first" id="menu1">Banner Estatico</a></li>
                                  <li><a href="menuAdmin.php?s=homebannerslider" class="first" id="menu1">Banner Dinamico</a></li>
                                  <li><a href="menuAdmin.php?s=homeintroduccion" class="first" id="menu1">Introducci&oacute;n</a></li>
                                  <li><a href="menuAdmin.php?s=homebeneficiotitulo" class="first" id="menu1">Beneficios Titulo</a></li>
                                  <li><a href="menuAdmin.php?s=homebeneficios" class="first" id="menu1">Beneficios</a></li>
                                  <li><a href="menuAdmin.php?s=hometextobtnpenep" class="first" id="menu1">Home texto -Quiero un pene perfecto-</a></li>
                                  
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Como Funciona</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=comofunciona" class="first" id="menu1">Como Funciona</a></li>
                                 <!-- <li><a href="menuAdmin.php?s=comoanimacion" class="first" id="menu1">Como Funciona Animaci&oacute;n</a></li>
                                  <li><a href="menuAdmin.php?s=comorecomendado" class="first" id="menu1">Como Funciona Recomendado</a></li>-->
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Beneficios</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=beneficios" class="first" id="menu1">Beneficios</a></li>
                                <!--  <li><a href="menuAdmin.php?s=beneficiosanimacion" class="first" id="menu1">Animaci&oacute;n</a></li>
                                  <li><a href="menuAdmin.php?s=beneficiosrecomendado" class="first" id="menu1">Recomendado</a></li>-->
                              </ul>
                          </li>
                          <li><a href="menuAdmin.php?s=resultados" id="menu3"><div class="icono" id="icono"></div>Resultados</a></li>
                          <li><a href="menuAdmin.php?s=conparenos" id="menu3"><div class="icono" id="icono"></div>Comparenos</a></li>
                          <li><a href="#"><div class="icono" id="icono"></div>Empresa</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=empresatitulo" class="first" id="menu1">Titulo</a></li>
                                  <li><a href="menuAdmin.php?s=empresasubtitulo" class="first" id="menu1">Subtitulos</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Tecnicas</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=tecnicastitulo" class="first" id="menu1">Titulo</a></li>
                                  <li><a href="menuAdmin.php?s=tecnicas" class="first" id="menu1">Tecnicas</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>T&eacute;stimonios</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=testimoniostitulo" class="first" id="menu1">Titulo</a></li>
                                  <li><a href="menuAdmin.php?s=testimonios" class="first" id="menu1">T&eacute;stimonios</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Preguntas Frecuentes</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=preguntastitulo" class="first" id="menu1">Titulo</a></li>
                                  <li><a href="menuAdmin.php?s=preguntas" class="first" id="menu1">Preguntas Frecuentes</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Columna Derecha</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=video" class="first" id="menu1">Video</a></li>
                                  <li><a href="menuAdmin.php?s=homerecomendado" class="first" id="menu1">Recomendado</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Contactenos</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=contactenosimagen" class="first" id="menu1">Imagen</a></li>
                                  <li><a href="menuAdmin.php?s=contactoinfo" class="first" id="menu1">Informaci&oacute;n</a></li>
                              </ul>
                          </li>
                          <li><a href="menuAdmin.php?s=terminos" id="menu3"><div class="icono" id="icono"></div>Terminos</a></li>
                          <li><a href="#"><div class="icono" id="icono"></div>Pagina Registro</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=registrotexto" class="first" id="menu1">Texto</a></li>
                                  <li><a href="menuAdmin.php?s=registrofraces" class="first" id="menu1">Fraces</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Pago En Efectivo</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=pagoefectivo" class="first" id="menu1">Texto</a></li>
                                  <li><a href="menuAdmin.php?s=formasdepago" class="first" id="menu1">Formas De Pago</a></li>
                              </ul>
                          </li>
                          <li><a href="#"><div class="icono" id="icono"></div>Comentarios</a>
                              <ul>
                                  <li><a href="menuAdmin.php?s=comentario&a=0" class="first" id="menu1">Pendientes</a></li>
                                  <li><a href="menuAdmin.php?s=comentario&a=1" class="first" id="menu1">Activos</a></li>
                              </ul>
                          </li>
                          <li><a href="menuAdmin.php?s=venta" id="menu3"><div class="icono" id="icono"></div>Usuarios</a></li>
                          <li><a href="menuAdmin.php?s=encuesta" id="menu3"><div class="icono" id="icono"></div>Encuesta</a></li>
                          <li><a href="menuAdmin.php?s=politicas" id="menu3"><div class="icono" id="icono"></div>Politicas</a></li>
                          <li><a href="menuAdmin.php?s=pdf" id="menu3"><div class="icono" id="icono"></div>PDF</a></li>
                          <li><a href="menuAdmin.php?s=helpdesk" id="menu3"><div class="icono" id="icono"></div>Help Desk</a></li>
                          <li><a href="menuAdmin.php?s=redes" id="menu3"><div class="icono" id="icono"></div>Redes</a></li>
                        </ul>
                      </div>
                    </div></div></td>
                  <td width="809" valign="top"><div id="content">

                  <?php
                    $s = "userPass";
					if(isset($_GET['s'])) $s = $_GET['s'];
					include_once $s.'.php';
                  ?>
                  
                  </div><!-- FIN CONTENT -->
                  </td>
                </tr>
              </table>
            </td>
            <td width="5" background="imagenes/contenido/marco_der.png">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3"><img src="imagenes/contenido/marco_inf.png" width="1004" height="10" /></td>
          </tr>
  </table>
      <div class="pie">&copy; 2009 - Todos los derechos reservados - Prohibida su reproducci&oacute;n parcial o total | Desarrollo InHouse: imagin<span class="a_imaginamos">a</span>mos.com</div>
</div>
</body>
</html>