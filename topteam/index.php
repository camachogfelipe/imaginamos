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
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" /></head>

<body>



<!-----------------------------------HEADER TEAM GROUP--------------------------------->

<div id="headlogmenu">
<div id="envmenuprincipal">
<div id="cajbarmenu">

<div id="bt1fijo"><a href="index.php">INICIO</a></div>
<div id="bt2"><a href="nosotros.php">NOSOTROS</a></div>
<div id="bt3"><a href="soluciones.php">SOLUCIONES</a></div>
<div id="bt4"><a href="aliados.php">ALIADOS</a></div>
<div id="bt4"><a href="noticias.php">NOTICIAS</a></div>
<div id="bt5"><a href="contactenos.php">CONTÁCTENOS</a></div>

</div>












<div id="envmenuregistro"><?php include "redes.php"; ?>




</div>



</div>
<div id="logoteamgropu"><a href="index.php"><img src="images/logo.png" border="0" /></a></div>


</div>

<!-----------------------------------FIN HEADER TEAM GROUP--------------------------------->


<!-----------------------------------BANNER TEAM GROUP--------------------------------->

<div id="envbanner">


<?php include "banner_teamgroup.php"; ?>





</div>
<!-----------------------------------FIN BANNER TEAM GROUP--------------------------------->



<!-----------------------------------CONTENIDOS TEAM GROUP-------------------------------------->


<div id="envingresos">

<div id="envcajingresos2">
<div id="envcamposingreso">
  <div id="btbuscarmod"><a href="busco_talento.php"></a></div>
</div>
<div id="txtingresos">BUSCO TALENTO</div>



</div>



<div id="envcajingresos1">
<div id="envcamposingreso">
  <div id="btregis2"><a href="busco_trabajo.php"></a></div>
</div>

<div id="txtingresos">BUSCO TRABAJO </div>


</div>



</div>


<div id="sepclear"></div>

<div id="rowtitselec">selecciÓn de personal (headhunter)</div>


<div id="cajondestacados">
<?PHP

$resum1Headhunter = Parametros::getTxtGenHeadhunter(1);
$resum2Headhunter = Parametros::getTxtGenHeadhunter(2);

$resum1Staffing = Parametros::getTxtGenStaffing(1);
$resum2Staffing = Parametros::getTxtGenStaffing(2);

/*
$imgConsulting = Parametros::getImgGen(1,1,4);
$imgFoodservice = Parametros::getImgGen(1,1,5);
$resum1Consulting = Parametros::getTxtGen(4);
$resumFoodservice = Parametros::getTxtGen(5);
$resumGestionHumana = Parametros::getTxtGen(8);
*/
?>
<div id="destacado2">

<div id="rowimagetextdest">
<div id="txtitdest"><?PHP echo $resum2Headhunter[0]['headhunter_titulo1']; ?><br/> 
<?PHP echo $resum2Headhunter[0]['headhunter_titulo2']; ?>
</div>
<div id="cajimgdest"><div id="imgdest"><img src="cms/modules/headhunter/files/big/<?PHP echo $resum2Headhunter[0]['headhunter_imagen']; ?>" width="287" height="191" /></div>
</div>


</div>
<div id="sepclear"></div>
<div id="rowtxtdest"><?PHP echo trim($resum2Headhunter[0]['headhunter_contenido']); ?></div>
<div id="rowbtvermasdest"><div id="btvermasdest"><a href="<?PHP echo trim($resum2Headhunter[0]['headhunter_enlace']); ?>"></a></div>
</div>
<div id="sepclear"></div>
</div>

<div id="destacado1">
<div id="rowimagetextdest">
<div id="txtitdest"><?PHP echo $resum1Headhunter[0]['headhunter_titulo1']; ?><br/> 
<?PHP echo $resum1Headhunter[0]['headhunter_titulo2']; ?>
</div>
<div id="cajimgdest"><div id="imgdest"><img src="cms/modules/headhunter/files/big/<?PHP echo $resum1Headhunter[0]['headhunter_imagen']; ?>" /></div></div>


</div>
<div id="sepclear"></div>
<div id="rowtxtdest"><?PHP echo trim($resum1Headhunter[0]['headhunter_contenido']); ?></div>

<div id="rowbtvermasdest"><div id="btvermasdest"><a href="<?PHP echo trim($resum1Headhunter[0]['headhunter_enlace']); ?>"></a></div>
</div>

<div id="sepclear"></div>
</div>


<div id="sepclear"></div>
</div>


<div id="sepconts"></div>

<div id="rowpersonaltemporal">




<div id="colizqpt">
personal 
temporal 
(staffing)
<div id="sepclear"></div>
</div>


<div id="colderpt">
<div class="btgestion">
	<a href="<?PHP echo trim($resum1Staffing[0]['staffing_enlace']); ?>">
		<img src="cms/modules/staffing/files/big/<?PHP echo $resum1Staffing[0]['staffing_imagen']; ?>" alt=""  />
		<p><?PHP echo trim($resum1Staffing[0]['staffing_contenido']); ?></p>

		
	</a>
</div>


<div class="btfoodservice">
	<a href="<?PHP echo trim($resum2Staffing[0]['staffing_enlace']); ?>">
		<img src="cms/modules/staffing/files/big/<?PHP echo $resum2Staffing[0]['staffing_imagen']; ?>" alt=""  />
		<p><?PHP echo trim($resum2Staffing[0]['staffing_contenido']); ?></p>
		&nbsp;
	
	</a><div id="sepclear"></div>
</div>


<div id="sepclear"></div>
</div>



<div id="sepclear"></div>
</div>

<div id="logsinf"><iframe width="998" height="152" src="pasarela_logos.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe></div>


<!-----------------------------------FIN CONTENIDOS TEAM GROUP-------------------------------------->







<!----------------------------------FOOT TEAM GROUP------------------------------->

<div id="sombfoot"></div>
<div id="footteamgroup">
<div id="cajfooter">


<?php include "foot_teamgroup.php"; ?>



</div>



</div>

<!----------------------------------FIN FOOT TEAM GROUP------------------------------->







</body>
</html>
