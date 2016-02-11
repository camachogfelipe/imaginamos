<?PHP
    //include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/valores/view/files/";
    $urlproductos2="cms/modules/productos2/view/files/";
    $id=$_GET['id'];
    $productos3= noticias4("cms_productos",$id);
   // print_r($productos3);
    $productos2=noticias2("cms_productos2",$id);
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



<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="css/reset.css" />

  <link rel="stylesheet" type="text/css" href="css/global.css" />

  <link rel="stylesheet" type="text/css" href="css/sexyslider.css" />
  
  
  
  
  
  <style type="text/css">
<!--
@import url("styles_tabla.css");
-->
  </style>
  
  
  
  
  
  
  
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

<div id="continicio">
  <!-----------------CONTENIDO INTICIO MBA BRETON--------------------->
  
 <div id="contenidosprod_intprodtabs"><div id="btback"><a href="productos_eng.php">&nbsp;</a></div>
<h1> <a href="disolventes_aromaticos.php">&nbsp;&nbsp;Aromatic Solvents</a> / Mixed Xylenes </h1>

 <br />
 <br />
 </div>

 <div id="contenidos2jprodtabs">
 
 


<div id="divcolprods_izq2">

  Mixed xylenes are produced from the fractions of aromatics made by distillation, obtained in the reformed catalytic process from the naphtha of petroleum.  These are volatile liquids that are mixable in alcohol, ether, and other organic common solvents. Very few are soluble in water.<br/><br/>
  <strong>Precautions of Handling:</strong> These solvents are highly flammable, for this reason special care should be applied when handling or transporting these solvents. They cause higher skin irritation than toluene, and a prolonged exposure to these products can cause poisoning. </div>
 
 
 
 
 
 
 
 
 <div id="divcolprods_der2">The maximum permitted concentration of xylene vapors is at TLVP 100 ppm, for a period of 8 hours daily. <br />
   <br/>
   <strong>Modality of sale:</strong> These products are shipped in tank trucks. 
   <br />
   <br/>

<strong>UN: </strong>1307
<strong><br />
CAS:</strong> 1330-20-7
<br/>
<br/>

<strong>Place of delivery:</strong> According to the necessity of the client.</div>
 
<?PHP  
$resultado = Parametros::veriExisteArchivo(4);

$pieces = explode("-", $resultado );
$var1 = $pieces[0]; 
$var2 = $pieces[1];


?> 
 
 
 <div id="coldownload2">
 <? if($productos2->imagen1!=""){?>
<div id="envrow01">
<div id="textodownload"><a href="#nogo"><br/>MSDS</a></div>
</div>
<?PHP } ?>
<? if($productos2->imagen2!=""){?>
<div id="envrow">
  <div id="textodownload"><a href="#nogo">Emergency<br />
 Card </a></div>
</div>
<?PHP } ?>



</div>
 
 
 
 
 
 
 <div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
 
 
 
    <div id="txtituloficha">&nbsp;</div>
 <div id="txtituloficha">TECHNICAL SHEET</div>
 <div id="envtablaprods"><img src="images/disolventes_aromaticos/xilenos_eng.jpg" width="600" height="720" /></div>
 <br />
 <br />
 </div>
 
 <div id="contenidosprod_intprodtabs">


 <br />
 <br />
 </div>
 




 
 
 
 
 
 
</div>


















</body>
</html>