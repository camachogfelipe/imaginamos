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
<title>AOA | Se mueve contigo</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/aoa.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
</head>

<body>

<?php include'header.php'; ?>

<?php include'menu.php';
$dbquienes = new Dbquienes_somos();
$idquienes = $dbquienes->getMaxId();
$quienes = $dbquienes->getByPk($idquienes);
?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">Qui&eacute;nes <span>somos</span></h2>
  </div>
</div>
<div class="content_int clearfix content_940">
  <div class="texto_quienes left">
      <p><?php echo $quienes['texto']; ?></p>
  </div>
  <div class="right content_img_quienes">
    <img src="img/quienes_somos/<?= str_replace("original","redimension",$quienes["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" />
    <img src="img/quienes_somos/<?= str_replace("original","redimension",$quienes["imagen_2"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" />
  </div>
</div>

<?php include'footer.php' ?>

<script src="assets/js/jquery.js" type="text/javascript"></script>	
<script src="assets/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>

</body>
</html>
