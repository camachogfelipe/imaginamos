<?PHP 
	require_once("includes/clase_parametros_services.php");
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
        <?php $services = Parametros_services::getImagen();?>
        
    <div id="imagen"><!--imagen estatica-->    	
        <div id="imgservi"style="background-image: url(cms/modules/service/files/big/<?php echo trim($services[0]['imagen_services']);?>) !important;"></div>
    </div><!--fin imagen estatica-->      
    
    
        
    <div class="contenidometing"> <!--contenido--> 
    	
    	<div id="contenido">
             
        	<div id="titulocentro">Services:</div>
            
            <div id="botones">
            	<!--<div id="btn"><a href="testimonial.php">TESTIMONIALS</a></div>-->
            	<div id="btn"><a href="foundation.php" style="padding: 5px 70px;">FOUNDATION</a></div>
            	<div id="btn"><a href="destination.php" style="padding: 5px 70px;">PRIVATE TOURS</a></div>
            	<div id="btn"><a href="meeting.php" style="padding: 5px 70px;">MEETING PLANNER</a></div>
            </div>                                    
                        
    	</div>
        
    </div> <!--fin cotenido-->   
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
