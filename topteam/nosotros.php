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
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
</head>

<body>



<!-----------------------------------HEADER TEAM GROUP--------------------------------->

<div id="headlogmenu">
<div id="envmenuprincipal">
<div id="cajbarmenu">

<div id="bt1"><a href="index.php">INICIO</a></div>
<div id="bt2fijo"><a href="nosotros.php">NOSOTROS</a></div>
<div id="bt3"><a href="soluciones.php">SOLUCIONES</a></div>
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



</div>

<!-----------------------------------FIN HEADER TEAM GROUP--------------------------------->


<!-----------------------------------BANNER TEAM GROUP--------------------------------->
<!-----------------------------------FIN BANNER TEAM GROUP--------------------------------->
<!-----------------------------------CONTENIDOS TEAM GROUP-------------------------------------->
<div id="sepclear"></div>

<div id="sepclear2"></div>
<?PHP
$resumNosotros = Parametros::getTxtGenNosotros();
?>
<div id="cajondestacados">

<div id="envcontentnosotros">
<div id="tituloseccion">nosotros</div>
<div id="sepclear2"></div>
<div id="rowimgnosotros"><div id="imgnosot"><img src="cms/modules/nosotros/files/big/<?PHP echo $resumNosotros[0]['nosotros_imagenInt']; ?>" /></div></div>
  <div id="sepclear"></div>
  
  <div id="txttopnosotros"><?PHP echo trim($resumNosotros[0]['nosotros_mensaje']); ?></div>
  
  <div id="sepclear"></div>
  
  
  <div id="envtxtcontnosotros">
  
  
  <div id="colnosdervin">
	<?PHP 
	$txt1 = trim($resumNosotros[0]['nosotros_contenido2']);
	$txt1 = nl2br($txt1);

	echo $txt1; 
	
	
	?>

  <div id="sepclear"></div>
  </div>
  <div id="colnosizq">
	<?PHP 
	
	$txt2 = trim($resumNosotros[0]['nosotros_contenido']);
	$txt2 = nl2br($txt2);

	echo $txt2; 
	
	?>  
  </div>
  
  
    <div id="sepclear"></div>
  
  </div>
  
  
  
  
  
  
    <div id="sepclear"></div>
  
  
  
</div>

<div id="colmenulat">


<div id="sepclear4"></div>
<div id="menuv">

        <ul>

                <li><a href="gestion_humana.php">GESTIÓN HUMANA Y TALENTOS </a></li>

                

                <li><a href="consulting.php">consulting</a></li>

                <li><a href="foodservice.php">foodservice</a></li>
        </ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>






  <div id="sepclear">
    
  </div>
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

<script type="text/javascript">
	var cssObj = {
		'width':'339px',
		'height':'auto',
		'float':'right',
		'font-family': 'Arial, Helvetica, sans-serif',
		'font-size': '14px',
		'line-height': '20px',
		'color': '#828282',
		'text-align':'left',
		'padding-left':'15px',
		'background-image': 'url(images/disco.png)',
		'background-repeat': 'no-repeat',
		'background-position': 'left 7px'
	}
	
	$("ol li").css(cssObj);


  </script>





</body>
</html>
