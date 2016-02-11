<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
// Arrancar buffer de salida
ob_start();

// Archivo de configuracion
include( 'include/define.php' );
include( 'include/config.php' );
include( 'business/function/plGeneral.fnc.php' );

$cTermnos = new Dbzona_copy();
$teminos = $cTermnos->getByPk(3);
?>
<html>
  <head>
    <title>Zona Franca de Occidente - Mosquera</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo Link::Build('')?>/images/favicon.ico" />
    <!-- <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1024, maximum-scale=2">
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Keywords" lang="es" content="" />
    <meta name="Description" lang="es" content="" />
    <meta name="copyright" content="imaginamos.com" />
    <meta name="date" content="2013" />
    <meta name="author" content="diseño web: imaginamos.com" />
    <meta name="robots" content="All" />

    <!-- Estilos -->
    <link href="<?php echo Link::Build('')?>/styles/zona-franca.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Link::Build('')?>/styles/internas.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Link::Build('')?>/styles/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Link::Build('')?>/styles/jScrollPane.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

    <!-- FANCY BOX-->
    <link rel="stylesheet" type="text/css" href="<?php echo Link::Build('')?>/scripts/source/jquery.fancybox.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->

    <!-- Jquery -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery-1.8.3.min.js"></script>
    <!-- selectivizr -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
    <!-- Mootools -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery-selectivizr-min.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="assets/js/lib/jquery-selectivizr-min.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Placeholder -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery.placeholder.js"></script>
    <!-- Custom forms -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery.formularios.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery.formularios-select.js"></script>
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery.slider.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/jquery.easing.js"></script>
    <!-- Ahorranito -->
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
    <!-- FANCYBOX -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/lib/source/jquery.fancybox.js"></script>
    <!-- TABS -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/jquery.easytabs.js"></script>
    <!-- Scroll -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/jquery.jscrollpane.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/jquery.mousewheel.js"></script>
    <!-- Validador -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/jquery.validationEngine-es.js"></script>
    <!-- Actions -->
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/actions.js"></script>
    <script type="text/javascript" src="<?php echo Link::Build('')?>/scripts/funciones.js"></script>

    <script type="text/javascript">
      var ajaxRutaAbs = '<?php echo Link::Build('')?>/index.php?ajax';
      var rutaAbs = '<?php echo Link::Build('')?>/index.php?';
    </script>
  </head>
  <body>
    <h1><span><?php echo $teminos["titulo"];?></h1>
    <p><?php echo nl2br($teminos["texto"]);?></p>
  </body>
</html>
