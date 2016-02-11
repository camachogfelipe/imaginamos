<?php


    include_once './php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $articulo = new articulo();
    $articulo = $articuloDAO->getBySeccion(3);


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
<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
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

<div id="subtit01tabs2">Ingeniería de producto y diseño</div>

<div id="envingenieria">
<div id="txting"><h1><?php echo $articulo[0]->getTitulo_e() ?></h1> <br/>

<?php echo $articulo[0]->getDescripcion_e() ?>


</div>
<div id="envslideing"> <div id="overimg"><img src="img/overimg.png" /></div>      <?php include "slide_caption.php"; ?>
</div>

<div id="sepclear2"></div>

</div>

<div id="tabshistoria"></div>

<div id="sepdotted"><img src="images/seplineatabs.png" width="965" height="60" /></div>

<div id="sepdotted"><img src="images/seplineatabs.png" width="965" height="60" /></div>

<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>