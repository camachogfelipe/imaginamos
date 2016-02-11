<?
    include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/noticias/view/files/";
    $noticias=noticias("cms_noticias");
 //   print_r($noticias);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<head>
<title>jCarousel Examples</title>

	<link rel="stylesheet" href="css/styles.css" type="text/css"/>

	<script type="text/javascript" src="js/lib/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


<!--
  jQuery library
-->
<script type="text/javascript" src="lib/jquery-1.4.2.min.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="skins/tango/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        vertical: true,
        scroll: 1
    });
});

</script>
<link href="css/stylos_modulo.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>
<body>
<div id="wrap">

  <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">

<? if(count($noticias->idcms)>1){
    for($i=0;$i<count($noticias->idcms);$i++){?>	
<li><div id="slidefechaevent">
<div id="env_imgmod"> <img src="<?=$urlvalores.$noticias->imagen1[$i]; ?>" width="241" height="105" class="rounded"/></div>
<div id="env_titslideevento"><?=$noticias->titulo3[$i]; ?> </div>
<div id="env_textslideevento"><?=substr(strip_tags($noticias->titulo4[$i]),0,130); ?></div>
<div id="env_enlacemas"><a href="noticia_1.php?id=<?=$noticias->idcms[$i] ?>">Leer más</a></div>
</div></li>
 
<? }
}else{
?>
 <li><div id="slidefechaevent">
<div id="env_imgmod"> <img src="<?=$urlvalores.$noticias->imagen1; ?>" width="241" height="105" class="rounded"/></div>
<div id="env_titslideevento"><?=$noticias->titulo3; ?> </div>
<div id="env_textslideevento"><?=substr(strip_tags($noticias->titulo4),0,130); ?></div>
<div id="env_enlacemas"><a href="noticia_1.php?id=<?=$noticias->idcms ?>">Leer más</a></div>
</div></li>
<? }?>  
  </ul>

</div>
</body>
</html>
