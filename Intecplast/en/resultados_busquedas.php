<?php

// Tomamos el valor ingresado
$buscar = $_POST['buscar'];

// Si está vacío, lo informamos, sino realizamos la búsqueda

$con=mysql_connect("mysql51-021.wc2.dfw1.stabletransit.com","819448_intec","=N2@4KGlK7k$");

$sql = "SELECT articulos.articulo_titulo_i, articulos.articulo_descripcion_i, flags.front_file FROM articulos, flags WHERE articulos.articulo_descripcion_i like '%".$buscar."%' AND articulos.flag_id = flags.flag_id AND articulos.flag_id!=1 ORDER BY articulos.articulo_id DESC";
mysql_select_db("819448_intecplast", $con); 

$result = mysql_query($sql, $con); 

// Tomamos el total de los resultados
$total = mysql_num_rows($result);

// Imprimimos los resultados

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


<!----------------------------FIN HEADER INTECPLAST-------------------------------------------->



<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->

<div id="subtit1"></div>

<div id="subtit2">Search Results : <?php echo $buscar ?></div>







<div id="envproductos">
<div id="sepclear">&nbsp;</div>

<!--
<div id="subtit1">
<div id="envpaginacion">
<div id="btpag1"><a href="#nogo">PRIMERO</a></div>
<div id="btpag1"><a href="#nogo">ANTERIOR</a></div>
<div id="btpag2"><a href="#nogo" class="activo">1</a></div>
<div id="btpag2"><a href="#nogo">2</a></div>
<div id="btpag2"><a href="#nogo">3</a></div>
<div id="btpag2"><a href="#nogo">4</a></div>
<div id="btpag2"><a href="#nogo">5</a></div>
<div id="btpag1"><a href="#nogo">SIGUIENTE</a></div>
<div id="btpag1"><a href="#nogo">ÚLTIMO</a></div>

</div>
Mostrando 1 a 5 Resultados </div>
-->

<?php 

  if ($total>0){
        
      while ($fila = mysql_fetch_assoc($result)) {
        
 ?>

<div id="sepclear3"></div>


<div id="columderbusquedas"> 
  <h3><?php echo $fila['articulo_titulo_i'] ?></h3>
  <?php echo $fila['articulo_descripcion_i'] ?>
  <a href="<?php echo $fila['front_file'] ?>">Ver</a>
</div>


<?php 

        }
  }



 ?>



<div id="sepclear3"></div>











<div id="sepclear"></div>
<!--
<div id="subtit1">
<div id="envpaginacion">
<div id="btpag1"><a href="#nogo">PRIMERO</a></div>
<div id="btpag1"><a href="#nogo">ANTERIOR</a></div>
<div id="btpag2"><a href="#nogo" class="activo">1</a></div>
<div id="btpag2"><a href="#nogo">2</a></div>
<div id="btpag2"><a href="#nogo">3</a></div>
<div id="btpag2"><a href="#nogo">4</a></div>
<div id="btpag2"><a href="#nogo">5</a></div>
<div id="btpag1"><a href="#nogo">SIGUIENTE</a></div>
<div id="btpag1"><a href="#nogo">ÚLTIMO</a></div>

</div>
Mostrando 1 a 5 Resultados </div>
-->
<div id="envenlacecotizador"></div>

<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>

</div>


<div id="envcontprodinf">
  <div id="sepclear"></div>





</div>

</div>
<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>
