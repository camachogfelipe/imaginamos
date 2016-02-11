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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="videogallery/vplayer.css"/>
<script type="text/javascript" src="videogallery/vplayer.js"></script>

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
$resumGestionHumana = Parametros::getTxtGenGestionH();
?>

<div id="cajondestacados">

<div id="envcontentnosotros">
<div id="tituloseccion">GESTIÓN HUMANA y talentos </div>
<div id="sepclear2"></div>
<div id="envtxtcontnosotros">
  
  
  <div id="colnosder">
	<?PHP echo trim($resumGestionHumana[0]['gestionh_contenido']); ?>
  </div>
  <div id="colicosecs" style="text-align:center"><img src="cms/modules/gestionHumana/files/big/<?PHP echo $resumGestionHumana[0]['gestionh_imagenInt']; ?>" width="356" height="250" /></div>
  
  
    <div id="sepclear"></div>
  
  </div>
  
  
  <div id="sepclear"></div>
  
  <div id="envtxtcontnosotros">
  
  
  <div id="envimgsecint2">
	
  
  
  
  
  
  </div>
	
	
	
	
	
	
	
	
	
	
  <div id="colicosecs">
	<?PHP echo trim($resumGestionHumana[0]['gestionh_contenido2']); ?>
</div>
  
  
    <div id="sepclear"></div>
  
  </div>
  
    <div id="sepclear"></div>
  
  
  
</div>

<div id="colmenulat">


<div id="sepclear4"></div>
<div id="menuv">

        <ul>

             

                  <li><a href="foodservice.php">foodservice</a></li>

                <li><a href="consulting.php">consulting</a></li>

            
				   <li><a href="gestion_humana.php" style="color:#fecc00">GestiÓn Humana y talentos </a></li>
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
		'width':'356px',
		'height':'100%',
		'font-family': 'BebasNeueRegular',
		'font-size': '38px',
		'font-weight':'normal',
		'line-height': '34px',
		'color': '#0a1d4e',
		'text-align':'left'
	}
	
	 $("h1").css(cssObj);


  </script>
<script>
var videoplayersettings = {
	autoplay : "off",
	videoWidth : 500,
	videoHeight : 300,
	constrols_out_opacity : 0.9,
	constrols_normal_opacity : 0.9,
	design_scrubbarWidth:-201
}
var videoplayersettings2 = {
	autoplay : "on",
	videoWidth : 342,
	videoHeight : 187,
	constrols_out_opacity : 0.1,
	constrols_normal_opacity : 0.9,
	design_scrubbarWidth:-201,
   	design_skin: 'skin_white',
	design_background_offsetw: -95
	, cueVideo : 'off'
	, responsive : 'on'
	
}
	
jQuery(document).ready(function(){
$('#vGallery').vGallery({
   menuSpace:0,
   randomise:"off",
   autoplay :"off",
   autoplayNext : "on",
   menuitem_width:275,
   menuitem_height:76,
   menuitem_space:1,
   menu_position:'right',
   transition_type:"slideup",
   design_skin: 'skin_default',
   videoplayersettings : videoplayersettings
   ,embedCode:'<div>here you can place your embed code - if you want automatic generation check one of our cms solutions</div>'
   ,shareCode:'<a class="icon" href="#"><img src="img/facebook.png"/></a><a class="icon" href="#"><img src="img/twitter.png"/></a><a class="icon" href="#"><img src="img/youtube.png"/><a class="icon" href="#"><img src="img/vimeo.png"/><a class="icon" href="#"><img src="img/flickr.png"/></a>'
   ,logo: 'img/thelogo.png'
   ,responsive: 'on'
})	
$('#vp1').vPlayer(videoplayersettings2)		
})
</script>
<link rel="stylesheet" type="text/css" href="videogallery/skin_white.css"/>





</body>
</html>
