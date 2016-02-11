<?PHP 
	require_once("includes/clase_parametros_testimonial.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="dicermex" lang="es" content="texto empresarial" />
<meta name="dicermex" content="2012" />
<meta name="calvo" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PBA Panama Holding Group</title>
<link rel="stylesheet" href="css/styleold.css" type="text/css" media="all" />
<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.dimensions.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script src="js/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, select, button").uniform();
      });
</script>

<script type="text/javascript">
	jQuery().ready(function(){
		// simple accordion
		jQuery('#list1a').accordion({
    		alwaysOpen: false,
			autoheight: false,			
		});
		jQuery('#list1b').accordion({
			autoheight: false,
    		active: false, 
    		alwaysOpen: false
		});	
	});		
</script>  
  
</head>

<body>

	<?php include 'header.php';?><!--contiene todo el footer-->
        <?php $testimonial = ParametrosTestimonial::getContenidoTestimonial();?>
        
    <div id="imagen"><!--imagen estatica-->    	
        <div id="imgtestimonials"style="background-image: url(cms/modules/testimonials/files/big/<?php echo str_replace(" ","%20",trim($testimonial[0]['imagen']));?>) !important;"></div>
    </div><!--fin imagen estatica-->      
    
    
        
    <div class="contenidometing"> <!--contenido--> 
    	
    	<div id="contenido">
        	<div id="titulocentro">TESTIMONIALS:</div>
            <div id="subtitulotex"><?php echo utf8_encode(nl2br(($testimonial[0]['texto'])));?>
            
            
            <!--<div id="titulocentro">DESCARGABLES:</div>

            <div id="btn-fpdf"><a href="#" target="_blank">2.013</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.012</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.011</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.010</a></div>
            
            <div id="btn-fpdf"><a href="#" target="_blank">2.009</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.008</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.007</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.006</a></div>
            
            <div id="btn-fpdf"><a href="#" target="_blank">2.005</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.004</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.003</a></div>
            <div id="btn-fpdf"><a href="#" target="_blank">2.002</a></div>-->
            
        
				<div class="clr-pdfs"></div>  
    	</div>
    </div> <!--fin cotenido-->   
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
