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
<div id="bt3"><a href="soluciones.php">SOLUCIONES</a></div>
<div id="bt4"><a href="aliados.php">ALIADOS</a></div>
<div id="bt4fijo"><a href="noticias.php">NOTICIAS</a></div>
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


<div id="cajondestacados">

<div id="envcontentnosotros">
<div id="tituloseccion">NOTICIAS</div>
<div id="sepclear"></div>
	<?PHP
	$datos = Parametros::getTxtNotTot();
			$conta = 1;
			if(is_array($datos) && !empty($datos)) {
				for($i = 0; $i < sizeof($datos); $i++) {
					$enlace = 'noticia_'.$conta.'.php';
					
					$resumen = trim($datos[$i]['news_article']);
					$resumen = substr($resumen, 50); 
					$resumen = $resumen."...";
					
	?>  
	
				
					<div id="rownots">
						<div id="txtrownots"> 					
							<h1><?PHP echo trim($datos[$i]['news_title']); ?></h1>
								<?PHP echo trim($datos[$i]['news_resum']); ?>
							<div id="sepclear"></div>
						
							<div id="rowbtvermasdestnot">
								<div id="btvermasdest"><a href="<?PHP echo $enlace; ?>"></a></div>
							</div>
							<div id="sepclear"></div>					
						</div>
						<div id="imgnotthumb"><img src="cms/modules/noticias/files/big/<?PHP echo trim($datos[$i]['news_image']); ?>" /></div>
						<div id="sepclear"></div>					  
					</div>
					<div id="sepclear2"></div>
					
		<?PHP	
				$conta++;
				}
			}

?> 
 
</div>

<div id="colmenulat">


<div id="sepclear4"></div>
<div id="menuv">
		<ul>
			<li><a href="foodservice.php">foodservice</a></li>
			<li><a href="consulting.php">consulting</a></li>
            <li><a href="gestion_humana.php">GESTIÓN HUMANA Y TALENTOS </a></li>
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







</body>
</html>
