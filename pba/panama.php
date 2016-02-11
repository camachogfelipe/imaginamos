<?PHP 
	require_once("includes/clase_parametros_panama.php");
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
        <?php $datos = Parametros_panama::getImagen();?>
        <?php $faq = Parametros_panama::getFAQ()?>
        <?php $faq2 = Parametros_panama::getFAQ2()?>
        <?php $imgfinal = Parametros_panama::getImagenFinal();?>
        
    <div id="imagen">    	
        <div id="img" style="background-image: url(cms/modules/aboutPan/files/big/<?php echo str_replace(" ","%20",trim($datos[0]['imagen']));?>) !important; "></div>
    </div>      
    
    <div id="azul"><!--destacado-->
    
    	<div id="contentazul">
        	<div id="titulo">ABOUT PANAMA</div>
            <div id="textazul">
                	<?php echo trim($datos[0]['texto']);?>
            </div>
    	</div>
        
    </div><!--fin destacado-->
        
    <div class="contenido"> <!--contenido--> 
    	
    	<div id="contenido">
        
        	<div id="titulocontenido">FAQ'S PANAMA IN GENERAL</div>
            <div id="subtitulo">The Most Frequently Asked Questions about our beautiful country PANAMA</div>
            <div id="titulocentro"></div>
            
            <div id="seccion1"><!--seccion 1-->
            
            	<div class="basic" style="float:left; " id="list1a"><!--acordion-->
                   
                    <?php
                    if (is_array($faq) && !empty($faq)) {
                    
                        for ($i = 0; $i < sizeof($faq); $i++) {
                   
                            ?>	
            
                
                    <a><?php echo utf8_encode(nl2br($faq[$i]['titulo']));?></a><!--item 1-->
                    <div>
                        <p>
                            <?php echo utf8_encode(nl2br($faq[$i]['texto']));?>
                        </p>
                    </div><!--fin item 1-->
                    
                       <?php 
                        
                                }
                                
                            }
                        
                        ?>
                    
                </div><!--fin acordion-->
                
            </div> <!--fin seccion 1-->
            
            <div id="seccion2"><!--seccion 2-->
            	<div class="basic" style="float:left; " id="list1b"><!--acordion-->
                
                    <?php
                    if (is_array($faq2) && !empty($faq2)) {
                    
                        for ($n = 0; $n < sizeof($faq2); $n++) {
                   
                            ?>	
            
                
                    <a><?php echo utf8_encode(nl2br($faq2[$n]['titulo']));?></a><!--item 1-->
                    <div>
                        <p>
                            <?php echo utf8_encode(nl2br($faq2[$n]['texto']));?>
                        </p>
                    </div><!--fin item 1-->
                    
                       <?php 
                        
                                }
                                
                            }
                        
                        ?>
                    
                    
                    
                </div>
                
                <div id="publicidad">
                	<img src="cms/modules/aboutPan/files/big/<?php echo trim($imgfinal[0]['imagen']); ?>" width="485"/>
                </div>  
                    
            </div><!--fin seccion 2-->
            
    	</div>
        
    </div> <!--fin cotenido-->   
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
