<?PHP 
	require_once("includes/clase_parametros.php");
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
        <?php $datos = Parametros::getContenido();?>
        <?php $titulo = Parametros::getTitulo(); ?>
        <?php //$item = Parametros::getItem();?>
    <div id="imagen"><!--imagen estatica-->    	
        <div id="imgmeting" style="background-image: url(cms/modules/aboutus/files/big/<?php echo trim($datos[0]['imagen']);?>) !important;"></div>
    </div><!--fin imagen estatica-->      
    
    <?php //var_dump($datos[0]['imagen']);?>
        
    <div class="contenidometing"> <!--contenido--> 
    	
    	<div id="contenido">
        
        	<div id="titulocontenido">About us:</div>        
                <div id="titulocentro"><?php echo utf8_encode($datos[0]['titulo']);?></div>
            <div id="subtitulotex"><?php echo utf8_encode(nl2br($datos[0]['texto']));?>

			</div>
            <div id="fila1">
                <div id="seccion1abou"> <!--item 1-->
                    <div id="titulopq"><?php echo utf8_encode(nl2br($titulo[0]['titulo'])); ?></div>
                    <ul type="circle" class="lista">
                        
                        <?PHP
                    $id = 57;
                    $item = Parametros::getItem($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>	
<!--                        <li><span id="listile">&#9679;</span>Our "One-Stop-Shop" Meeting Planner & Destination Management<br /><span id="listile">&nbsp;&nbsp;&nbsp;</span>Company (DMC)</li>
                        <li><span id="listile">&#9679;</span>Innovative program design and development</li>
                        <li><span id="listile">&#9679;</span>Local knowledge providing an authentic destination experience</li>
                        <li><span id="listile">&#9679;</span>Our commitment guaranteed in writing </li>-->
                    </ul>
                </div> <!--fin item 1-->
                
                <div id="seccion2abou"> <!--item 2-->
                    <div id="titulopq"><?php echo utf8_encode(nl2br($titulo[1]['titulo'])); ?></div>
                    <ul type="circle" class="lista">
                        
                    <?PHP
                    $id = 59;
                    $item = Parametros::getItem($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    
                        
<!--                        <li><span id="listile">&#9679;</span>Individual private tours</li>
                        <li><span id="listile">&#9679;</span>Operational excellence based on best practices and continuous<br /><span id="listile">&nbsp;&nbsp;&nbsp;&nbsp;</span>training</li>
                        <li><span id="listile">&#9679;</span>Dependable, highly experienced "single-point-of-contact"</li>
                        <li><span id="listile">&#9679;</span>Guests testimonials are proof of our successful track record</li>-->
                    </ul>
                </div> <!--item 2-->
            </div>
                                    
                        
    	</div>
        
    </div> <!--fin cotenido-->   
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
