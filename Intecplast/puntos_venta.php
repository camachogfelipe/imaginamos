<?php 

    include_once './php/clases.php';
    
    $puntoDAO = new puntoDAO();
    $punto = new punto();
    $puntoPpal = $puntoDAO->getByTipoPunto(1);
    $sucursales = $puntoDAO->getSucursales();

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>INTECPLAST S.A.</title>
<style type="text/css">
<!--

-->
</style>
<link href="css/stylos_intecplastptoventa.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #00FFFF}
-->
</style>

<link href="style_acord/format.css" rel="stylesheet" type="text/css" />
<link href="style_acord/text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>


</head>

<body class="body">

<div id="wrapcontentintecplasttabs">

<!----------------------------HEADER INTECPLAST-------------------------------------------->


<?php include("includes/principalHeader.php"); ?>


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->



<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->



<div id="subtit01tabs2"><?php echo $puntoPpal->getNombre() ?></div>

<div id="rowmapas">

<div id="envofertames">

<div id="colrightmapa">

<h1>Visitanos en:</h1>
<?php
  
  $ciudadDAO = new ciudadDAO();
  $ciudad = new ciudad();
  $ciudadOfPpal = $puntoPpal->getCiudadId();
  $ciudadOfPpal = $ciudadDAO->getById($ciudadOfPpal);

?>

<?php echo $ciudadOfPpal->getnombre_e() ?><br/>
<?php echo $puntoPpal->getDireccion() ?>

<h1>Contáctanos en:</h1>
Teléfono: <?php echo $puntoPpal->getTel() ?><br />
PBX: <?php echo $puntoPpal->getPbx() ?><br />
<?php echo $puntoPpal->getEmail() ?><br />

<h1>Horario de atención:</h1>
Lunes a Viernes<br />
<?php echo $puntoPpal->getHlv() ?><br />
Sábados<br />
<?php echo $puntoPpal->getHs() ?><br />


</div>
<div id="colmapa">




<div id="envmapapuntoventatop">

<iframe width="661" height="252" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $puntoPpal->getGmap() ?>"></iframe>

<br />
<small></small>

</div>


<div id="sepclear"></div>

<div id="sepclear3"></div>

</div>

<div id="sepclear2"></div>

<?php foreach ($sucursales as $punto): ?>
  
<div id="colmodmap2">
<div id="envcentmodmaps">
<div id="tit1maps"><?php echo $punto->getNombre() ?></div>
<div id="mapminmod">

  <iframe width="259" height="108" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $punto->getGmap() ?>"></iframe>

  
</div>

<div id="textosmodsmaps">

<h1>Visitanos en:</h1>
<?php echo $punto->getDireccion() ?>


<h1>Contáctanos en:</h1>
Teléfono: <?php echo $punto->getTel() ?> PBX   <?php echo $punto->getPbx() ?><br />
<?php echo $punto->getEmail() ?>

<h1>Horario de atención:</h1>
Lunes a Viernes   <?php echo $punto->getHlv() ?><br />
Sábados   <?php echo $punto->getHs() ?><br />
</div>
</div>
</div>
<?php endforeach ?>


<div id="sepclear"></div>

</div>

</div>

<div id="rowmapas">
  <div id="sepdotted"></div>
</div>




<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>


<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->


</body>
</html>