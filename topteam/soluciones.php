<?PHP 
	require_once("includes/clase_parametros.php");
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
<title>TeamGroup</title>






<link href="css/stylos_teamgroup.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>



<!-----------------------------------HEADER TEAM GROUP--------------------------------->

<div id="headlogmenu">
<div id="envmenuprincipal">
<div id="cajbarmenu">

<div id="bt1"><a href="index.php">INICIO</a></div>
<div id="bt2"><a href="nosotros.php">NOSOTROS</a></div>
<div id="bt3fijo"><a href="soluciones.php">SOLUCIONES</a></div>
<div id="bt4"><a href="aliados.php">ALIADOS</a></div>
<div id="bt4"><a href="noticias.php">NOTICIAS</a></div>
<div id="bt5"><a href="contactenos.php">CONTÁCTENOS</a></div>

</div>












<div id="envmenuregistro">









<?php include "redes.php"; ?>


</div>




</div>

<div id="logoteamgropu"><a href="index.php"><img src="images/logo.png" border="0" /></a></div>

</div>

<!-----------------------------------FIN HEADER TEAM GROUP--------------------------------->


<!-----------------------------------BANNER TEAM GROUP--------------------------------->
<!-----------------------------------FIN BANNER TEAM GROUP--------------------------------->
<!-----------------------------------CONTENIDOS TEAM GROUP-------------------------------------->
<div id="sepclear"></div>

<div id="sepclear2"></div>
<?PHP
$resumSoluciones = Parametros::getTxtGenSoluciones();
?>

<div id="cajondestacados">

<div id="cajcontentsolu">
<div id="tituloseccion">SOLUCIONES</div>
<div id="sepclear"></div>
 <div id="frasesoluciones"><?PHP echo trim($resumSoluciones[0]['soluciones_mensaje']); ?></div>
  <div id="sepclear"></div>
  
  
  <div id="sepclear2"></div>
  
    <div id="rowsols">
    <div id="txtrowsols"> 
	
	<h1><?PHP echo trim($resumSoluciones[0]['soluciones_titulo1']); ?></h1>
		<?PHP echo trim($resumSoluciones[0]['soluciones_contenido1']); ?>
    <div id="sepclear"></div>
	
	  <div id="rowbtvermassols"><div id="btvermasdest"><a href="<?PHP echo trim($resumSoluciones[0]['soluciones_enlace1']); ?>"></a></div>
</div>
	<div id="sepclear"></div>
	
  </div>
  
  
  
  
  
  <div id="imgnotthumb"><a href="foodservice.php"><img src="cms/modules/soluciones/files/big/<?PHP echo $resumSoluciones[0]['soluciones_imagenInt1']; ?>" width="220" height="145" border="0" /></a></div>
  
  

  
  <div id="sepclear"></div>
  
   </div>
   
   
   
   <div id="sepclear2"></div>
   
   
   
   <div id="rowsols">
    <div id="txtrowsols"> 
	
	<h1><?PHP echo trim($resumSoluciones[0]['soluciones_titulo2']); ?></h1>
		<?PHP echo trim($resumSoluciones[0]['soluciones_contenido2']); ?>
	<br />
	<br />
	<br />
	<div id="sepclear"></div>
	
	  <div id="rowbtvermassols"><div id="btvermasdest"><a href="<?PHP echo trim($resumSoluciones[0]['soluciones_enlace2']); ?>"></a></div>
</div>
	<div id="sepclear"></div>
	
  </div>
  
  
  
  
  
  <div id="imgnotthumb"><a href="consulting.php"><img src="cms/modules/soluciones/files/big/<?PHP echo $resumSoluciones[0]['soluciones_imagenInt2']; ?>" width="220" height="145" border="0" /></a></div>
  
  

  
  <div id="sepclear"></div>
  
   </div>
   
   
   
   
   
   
   
   
   <div id="sepclear2"></div>
   <div id="rowsols">
    <div id="txtrowsols"> 
	
	<h1><?PHP echo trim($resumSoluciones[0]['soluciones_titulo3']); ?></h1>
		<?PHP echo trim($resumSoluciones[0]['soluciones_contenido3']); ?>
 
    <div id="sepclear"></div>
	
	  <div id="rowbtvermassols"><div id="btvermasdest"><a href="<?PHP echo trim($resumSoluciones[0]['soluciones_enlace3']); ?>"></a></div>
</div>
	<div id="sepclear"></div>
	
  </div>
  
  
  
  
  
  <div id="imgnotthumb"><a href="gestion_humana.php"><img src="cms/modules/soluciones/files/big/<?PHP echo $resumSoluciones[0]['soluciones_imagenInt3']; ?>" width="220" height="145" border="0" /></a></div>
  
  

  
  <div id="sepclear"></div>
  
   </div>
   <div id="sepclear"></div>
  
  
  
</div>

<div id="sepclear"></div>
</div>


<!-----------------------------------FIN CONTENIDOS TEAM GROUP-------------------------------------->
<!----------------------------------FOOT TEAM GROUP------------------------------->
<div id="sepclear3"></div>

<div id="sombfoot"></div>
<div id="footteamgroup">
<div id="cajfooter">


<?php include "foot_teamgroup.php"; ?>



</div>



</div>

<!----------------------------------FIN FOOT TEAM GROUP------------------------------->







</body>
</html>
