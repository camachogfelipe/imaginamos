<?php 

session_start();



require_once '../php/clases.php';



//Lammado de Secciones



  $seccionDAO = new seccionDAO();

  $seccion = new seccion();

  $secciones = $seccionDAO->gets();

  $totalSecciones = $seccionDAO->total();


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



<!--FancyBox-->

        <script src="js/jquery-1.7.1.min.js"></script>



        <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

        <script>

                !window.jQuery && document.write('<script src="js/jquery-1.4.3.min.js"><\/script>');

        </script>

        <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>

        <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>



  <script type="text/javascript">

            var j = jQuery.noConflict();

            j(document).ready(function() {

  

                j(".various").fancybox({

                    'width'             : '11',

                    'height'            : '6',

                    'autoScale'         : false,

                    'transitionIn'      : 'elastic',

                    'transitionOut'     : 'elastic',

                    'type'              : 'iframe'

                });

                

            });

            var i = jQuery.noConflict();

            i(document).ready(function() {

  

                i(".delete").fancybox({

                    'width'             : '4',

                    'height'            : '4',

                    'autoScale'         : false,

                    'transitionIn'      : 'elastic',

                    'transitionOut'     : 'elastic',

                    'type'              : 'iframe'

                });

                

            });

            var k = jQuery.noConflict();

            k(document).ready(function() {

  

                k(".variousk").fancybox({

                    'width'             : '11',

                    'height'            : '4',

                    'autoScale'         : false,

                    'transitionIn'      : 'elastic',

                    'transitionOut'     : 'elastic',

                    'type'              : 'iframe'

                });

                

            });

        </script>



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
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />



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

   	  <div class="cabezote_logo_empresa"><img src="../images/log.png" width="200" height="80" /></div>

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

                        <div style="font-weight:bold; font-size:13px; text-align:center; height:28px; padding-top:7px; border-bottom:1px dashed #CCC;">Administración Contenidos</div>

                          <li><a href="menuAdmin.php?s=userPass" id="menu3"><div class="icono" id="icono"></div>Cambiar Clave</a></li>

                          <li><a href="#"><div class="icono" id="icono"></div>Secciones</a>

                           <ul>



                              <?php if ($totalSecciones>0): ?>

                                <?php foreach ($secciones as $seccion): ?>

                                    <li><a href="menuAdmin.php?s=<?php echo $seccion->getAdminFile()."&lang=es&id=".$seccion->getId() ?>" class="first" id="menu1"><?php echo $seccion->getNombre_e() ?></a></li>

                                <?php endforeach ?>

                                

                              <?php endif ?>

                            </ul>

                          </li>

                        </ul>                        

                      </div>

                      <div id="menu_marco3">

                        <ul id="menu">

                        <div style="font-weight:bold; font-size:13px; text-align:center; height:28px; padding-top:7px; border-bottom:1px dashed #CCC;">Administración Catálogo</div>

                          <li><a href="menuAdmin.php?s=view_clientes" id="menu3"><div class="icono" id="icono"></div>Clientes</a></li>

                          <li><a href="menuAdmin.php?s=view_productos"><div class="icono" id="icono"></div>Productos</a></li>

                          <li><a href="menuAdmin.php?s=view_cotizaciones" id="menu3"><div class="icono" id="icono"></div>Cotizaciones</a></li>

                          <li><a href="menuAdmin.php?s=view_ensambles"><div class="icono" id="icono"></div>Ensambles</a>

                          </li>

                          <li><a href="menuAdmin.php?s=miscelanea" id="menu3"><div class="icono" id="icono"></div>Miscelanea de Atributos</a></li>

                          <li><a href="menuAdmin.php?s=tbasicas"><div class="icono" id="icono"></div>Tablas Básicas</a></li>

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