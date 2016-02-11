<?php include("config.php"); ?>
<!DOCTYPE>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js ie9">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>AUTOSTORE.com.co</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=1024, maximum-scale=2">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<!-- Estilos -->
<!-- Fuentes
================================================== -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Slider
================================================== -->
<link rel="stylesheet" type="text/css" href="assets/js/lib/bxslider/css/jquery.bxslider.css"/>
<!-- Bootstrap -->
<link href="assets/js/lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="assets/js/lib/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" type="text/css" />
<!-- Fancybox
================================================== -->
<link rel="stylesheet" type="text/css" href="assets/js/lib/source/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="assets/js/lib/source/helpers/jquery.fancybox-thumbs.css"/>
<!-- UI
================================================== -->
<link rel="stylesheet" href="assets/js/lib/ui/css/jquery-ui.css">
<!-- General
================================================== -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/css/wilson.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="loader"><div id="progress"></div></div>  


<?php include("tienda.php"); ?> 
<?php include("header.php"); ?>
<?php include(CURRENT_FILE); ?>
<?php include("footer.php"); ?>
<?php include("scripts.php"); ?>
</body>
</html>