<?php session_start(); ?>
<?php
include '../php/dao/daoConnection.php';
include '../php/dao/userDAO.php';
include '../php/dao/galeriaDAO.php';
include '../php/dao/aspectsDAO.php';



include '../php/entities/user.php';
include '../php/entities/aspect.php';
include '../php/entities/galeria.php';

if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit;
}

$thisUser = unserialize($_SESSION['admin']);
if (isset($_GET['s'])) {
    $s = $_GET['s'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrador de Contenidos :: Versi&oacute;n 7.7</title>

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

        <!-- DATA PICKER 
        <link rel="stylesheet" type="text/css" href="../css/custom-theme/jquery-ui-1.8.16.custom.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/timepicker.css" media="all">
        <script type="text/javascript" src="../js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="../js/timepicker.js"></script>
        <script type="text/javascript" src="../js/date.js"></script>-->


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

        <!-- pop up 
        <script>
                !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
        </script>
        <script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="../js/highcharts.js"></script>
                        
        <link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox-1.3.4.css" media="screen" />-->

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
                $(document).ready(function() { 
    
                }); 

                $("#tableOne").tablesorter({ debug: false, headers: { 0:{sorter: 'digit'} }, sortList: [[0,0]], widgets: ['zebra'] })
                .tablesorterPager({ container: $("#pagerOne"), positionFixed: false })
                .tablesorterFilter({ filterContainer: $("#filterBoxOne"),
                    filterClearContainer: $("#filterClearOne"),
                    filterColumns: [0],
                    filterCaseSensitive: false})
							
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
                <div class="cabezote_logo_empresa"><img src="../images/layout/logo.png" alt="Logo Empresarial" width="120" height="80" /></div>
                <div class="cabezote_logo_imaginamos"></div>
            </div>
        </div>
        <div class="marco">
        	<div class="version">Versi&oacuten 7.7.</div>
          <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
          	<tr><td colspan="3"><div id="marco_sup"></div></td></tr>
            <tr>
            	<td width="3" background="imagenes/contenido/marco_izq.png">&nbsp;</td>
              <td width="996" valign="top" bgcolor="#FFFFFF">
              	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                	<tr>
                  	<td width="174" valign="top">
                    	<div id="wrapper">
                      	<div id="menu_marco">
                        	<div id="menu_marco2">
                          	<ul id="menu">
                            	<li>
                              	<a href="menuAdmin.php?s=userPass" id="menu3">
                                	<div class="icono" id="icono"></div>Cambiar Clave
                                </a>
                             	</li>
                              <li><a href="#"><div class="icono" id="icono"></div>Principal</a>
                              	<ul>
                                	<li><a href="menuAdmin.php?s=Terminos">Terminos</a></li>
                                  <li><a href="menuAdmin.php?s=Plan">Planes</a></li>
                                  <li><a href="menuAdmin.php?s=costo">Costos</a></li>
                                  <li><a href="menuAdmin.php?s=aspecto&type=3&a=IATA">IATA</a></li>
                                </ul>
                              </li>
                              <li><a href="#"><div class="icono" id="icono"></div>Parametros Planes</a>
                              	<ul>
                                	<li><a href="menuAdmin.php?s=valorcostoplan">Valor Costo/Plan</a></li>
                                  <li><a href="menuAdmin.php?s=restricionpaisplan">Restricci&oacuten País/Plan</a></li>
                                </ul>
                              </li>
                              <li><a href="menuAdmin.php?s=venta2"><div class="icono" id="icono"></div>Venta</a></li>
                              <li><a href="menuAdmin.php?s=generador"><div class="icono" id="icono"></div>Generador Url</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td width="819" valign="top"><div id="content">

                                        <?php
                                        $s = "userPass";
                                        if (isset($_GET['s']))
                                            $s = $_GET['s'];
                                        include_once $s . '.php';
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