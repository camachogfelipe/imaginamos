<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>Taller postal</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/taller.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
<link href="assets/css/style_slider.css" rel="stylesheet" />
<link href="assets/css/validationEngine.jquery.css" rel="stylesheet" />

</head>

<body>
<div id="loader"><div id="progress"></div></div>
<div class="fondo_cart"></div>
<div class="main_content content_940">
  <?php include'header.php' ?>
  <div class="content">
<?php
 if (isset($_GET['seccion']) ){
	 if($_GET['seccion'] == 'home'){
		 include'home.php';
	 }elseif($_GET['seccion'] == 'firma'){
		 include'firma.php';
	 }elseif($_GET['seccion'] == 'cat_tienda'){
		 include'cat_tienda.php';
	 }elseif($_GET['seccion'] == 'subcat_tienda'){
		 include'subcat_tienda.php';
	 }elseif($_GET['seccion'] == 'custom_prod'){
		 include'custom_prod.php';
	 }elseif($_GET['seccion'] == 'comunidad'){
		 include'comunidad.php';
	 }elseif($_GET['seccion'] == 'disenador'){
		 include'disenador.php';
	 }elseif($_GET['seccion'] == 'servicios'){
		 include'servicios.php';
	 }elseif($_GET['seccion'] == 'preguntas'){
		 include'preguntas.php';
	 }elseif($_GET['seccion'] == 'registro_compra'){
		 include'registro_compra.php';
	 }
  }
?>
  
  </div>
</div>

<?php include'footer.php' ?>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.sudoSlider.js"></script>
<script src="assets/js/placeholder.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/custom_form.js"></script>
<script src="assets/js/jquery.validationEngine.js"></script>
<script src="assets/js/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
