<?
    include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/noticias/view/files/";
    $id=$_GET['id'];
    $noticias=noticias_detalle("cms_noticias",$id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>MBA Breton</title><link rel="stylesheet" href="css/styles.css" type="text/css"/>

	<script type="text/javascript" src="js/lib/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="css/reset.css" />

  <link rel="stylesheet" type="text/css" href="css/global.css" />

  <link rel="stylesheet" type="text/css" href="css/sexyslider.css" />
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>

<body class="body">


<!-----------------HEADER MBA BRETON--------------------->



<div id="headerinternas">

<div id="envheaderinternas">








<div id="envmenu">
<div id="envchatidioma">
<div id="btchat">


<a href="chat.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )"><img src="images/btonline.png" width="81" height="49" border="0" /></a>



</div>
<div id="idioma"><a href="index.php"><img src="images/flagidiomaes.png" width="25" height="24" border="0" title="Versión en Español" /></a></div>
</div>

<div id="logotop"><img src="images/logomba.png" /></div>
  <div id="navmenu" >
        <ul id="button">
        		<li><a href="index_eng.php">HOME</a></li>  
        <li><a href="quienes_somos_eng.php">ABOUT US</a></li>  
        <li><a href="actualidad_noticias_eng.php"  class="activo">NEWS & EVENTS</a></li>  
		<li><a href="responsabilidad_social_eng.php">SOCIAL RESPONSIBILITY  </a></li>  
		<li><a href="contactenos_eng.php">CONTACT US</a></li> 
        </ul>
      </div>
</div>
  
	
	
	
	
	
	
	
	
	
	
	
    <!-----------------BANNER MBA BRETON--------------------->
    <div id="envbannerinternas"><img src="images/img_int1.jpg" /></div>
  </div>




</div>


<!-----------------DESTACADOS MBA BRETON--------------------->
<div id="continicio">





<div id="sepclear4top"></div>



  <!-----------------CONTENIDO INTICIO MBA BRETON--------------------->
<div id="titulossecciones2">

<div id="enlacedestinterno2"><a href="contactenos_eng.php">03 CONTACT US</a></div>

<div id="enlacedestinterno"><a href="productos_eng.php">02 PRODUCTS</a></div>
<div id="enlacedestinterno"><a href="servicios_eng.php">01 SERVICES</a></div>

<div id="subtitinternas">News & Events </div>
</div>






<div id="envcontinternos">       



<div id="contenidos2">
  <div id="img_izqint"><img src="<?=$urlvalores.$noticias->imagen1 ?>" width="300" height="160" class="rounded" /></div>
<h1><?=$noticias->titulo3; ?></h1>
<h2><?=$noticias->titulo5; ?></h2><br/>
    <?=$noticias->titulo4; ?>
 <br />
 </div>


<div id="contenidosprod_intprodtabs2">
 <div id="btback"><a href="actualidad_noticias_eng.php">&nbsp;</a></div>

 <br />
 <br />
 </div>


<p>&nbsp;</p><p>&nbsp;</p>
</div>


<div id="footbgcont"></div>




</div>












<div id="footmba">
<?php include "footmbabreton_eng.php"; ?>
</div>





</body>
</html>