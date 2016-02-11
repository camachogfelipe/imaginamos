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

  <link rel="stylesheet" type="text/css" href="css/reset.css" />

  <link rel="stylesheet" type="text/css" href="css/global.css" />

  <link rel="stylesheet" type="text/css" href="css/sexyslider.css" />
  <style type="text/css">
<!--
@import url("styles_tabla.css");
-->
  </style>




<link href="style_acord/format.css" rel="stylesheet" type="text/css" />
<link href="style_acord/text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>
</head>

<body class="body">


<div id="wrapcontentintecplast">


<!----------------------------HEADER INTECPLAST-------------------------------------------->


<?php include("includes/principalHeader.php"); ?>


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->


<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->




<?php 

include("lib_carrito.php"); 
?>

<? 
$_SESSION["ocarrito"]->imprime_carrito(); 
?>





</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>

</div>


<div id="envcontprodinf">
  <div id="sepclear"></div>






</div>
<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>