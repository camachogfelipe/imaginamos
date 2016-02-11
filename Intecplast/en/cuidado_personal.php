<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento sin t&iacute;tulo</title>



<link href="css/slide_mercados.css" rel="stylesheet" type="text/css" />

</head>



<body>



<div id="envcajonslidegal">
<?php if ($imagenes): ?>
	

<div id="colderbann"><div id="captionslide">
	<p id="textSliderBigHome" style="width:95%">
		<?php echo strip_tags($imagenes[0]->getDescripcion_e(), "</p>") ?>
	</p>
</div> <img id="imgSliderBigHome" src=".<?php echo $imagenes[0]->getImagen_e() ?>" /></div>

<?php endif ?>
<div id="colizqsliddegal"><div id="iconoleft"><img src="images_slide/icono_cuidado.png" /></div></div>







</div>









</body>

</html>