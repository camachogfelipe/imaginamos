<?php       
    
    include_once './php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $articulo = new articulo();
    $articulo = $articuloDAO->gets();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<title>Tabs Acerca de Nosotros</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="Keywords" lang="es" content="palabras clave" />
	<meta name="Description" lang="es" content="Acerca de Nosotros" />
	<meta name="date" content="2012" />
	<meta name="author" content="diseño web: imaginamos.com"/>
	<meta name="robots" content="All" />
	<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
	<link href="css/stylos_tabs.css" rel="stylesheet" type="text/css" />
	<link href="css/tabs.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.tab_content {
	width:900px;
}
</style>
	<!--1 ) Reference to the files containing the JavaScript and CSS.
		These files must be located on your server.-->

	<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
	
	<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
	<!--2) Optionally override the settings defined at the top
		of the highslide.js file. The parameter hs.graphicsDir is important!-->

	<script type="text/javascript">
		hs.graphicsDir = 'highslide/graphics/';
		hs.align = 'center';
		hs.transitions = ['expand', 'crossfade'];
		hs.wrapperClassName = 'dark borderless floating-caption';
		hs.fadeInOut = true;
		hs.dimmingOpacity = .75;

		// Add the controlbar
		if (hs.addSlideshow) hs.addSlideshow({
			//slideshowGroup: 'group1',
			interval: 5000,
			repeat: false,
			useControls: true,
			fixedControls: 'fit',
			overlayOptions: {
				opacity: .6,
				position: 'bottom center',
				hideOnMouseOut: true
			}
		});
	</script>

	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
							   
		//prepend span tag
		$(".jquery h1").prepend("<span></span>");
									  
	});
	</script>


	<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> 
	<script type="text/javascript"> 
	 
	$(document).ready(function() {
	 
		//Default Action
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
		
		//On Click Event
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			return false;
		});
	 
	});
	</script> 

</head> 
 
<body> 
 
<div class="container"> 

  <ul class="tabs"> 		  	
    <li><a href="#tab1">Historia</a></li> 
    <li><a href="#tab2">Sistema de calidad</a></li> 
    <li><a href="#tab3">Instalaciones</a></li> 
    <li><a href="#tab4">Servicios</a></li>
  </ul> 
<div class="tab_container"> 

<!--Tab #1 -->		

<div id="tab1" class="tab_content">
	<div id="txtconttab1">

		<div id="titulossectab"><?php echo $articulo[0]->getTitulo_e() ?></div>

    <div id="coltxtizqcontab1"><?php echo substr($articulo[0]->getDescripcion_e(), 0,-200) ?></div>
		<div id="coltxtdercontab1"  style="width:920px !important"><?php echo substr($articulo[0]->getDescripcion_e(), -200) ?></div>

		<div id="sepcleartxttabs"></div>
        <div style="clear:both"></div>
		
		<iframe width="920" height="460" src="slide_lineatiempo.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>
	</div>
</div>
</div>

<!--Tab #2 -->		
		
<div id="tab2" class="tab_content">	

<div id="txtconttab1">

  <div id="titulossectab">
  	<?php echo $articulo[1]->getTitulo_e() ?>
  </div>

  <div id="coltxtizqcontabsist2">
    <div id="imgsistint">
      <img src=".<?php echo $articulo[1]->getImagen_e() ?>" width="350" height="180" />
    </div>
    <?php echo $articulo[1]->getDescripcion_e() ?> 
  </div>
  
  <div id="sepcleartxttabssist"></div>
  <!--<div id="coltxtizqcontabsist2"><div id="imgsistint2"><img src="images/imgprueba.jpg" width="350" height="180" /></div></div>-->
  <div id="sepcleartxttabs"></div>

</div>

<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
</div> 	 	  
	  
<!--Tab #3 -->		

<div id="tab3" class="tab_content">

	<div id="txtconttab1">

		<div id="titulossectab">
			<?php echo $articulo[2]->getTitulo_e() ?>
		</div>

		<div id="imgsistint">
			<img src=".<?php echo $articulo[2]->getImagen_e() ?>" width="350" height="180" />
		</div>
			<?php echo $articulo[2]->getDescripcion_e() ?>

	</div>
	
	<div id="sepcleartxttabssist">&nbsp;</div>


	<div id="coltxtizqcontabsist">		

<?php 
	
	$imagenDAO = new imagenDAO();
	$oficina = new imagen();
	$oficinas = $imagenDAO->getBySeccionFlag(1,5);
	
 ?>	

		      <?php if ($oficinas>0): ?>
		      <?php foreach ($oficinas as $oficina): ?>

					<div id="thumbfac">
						<div id="velobt">
							<a  href=".<?php echo $oficina->getImagen_e() ?>" class="highslide" onclick="return hs.expand(this)">&nbsp;</a>
						</div>
							<img src=".<?php echo $oficina->getImagen_e() ?>" width="90" height="71" />
					</div>

		      <?php endforeach ?>		
		      <?php endif ?>

	
	</div>

	<div id="sepcleartxttabs"></div>

</div>

<!--Tab #4 -->		

<div id="tab4" class="tab_content">

	<div id="txtconttab1">

		<iframe width="900px" height="360px" src="slide_servicostabs.php" scrolling="no" frameborder="0" allowtransparency="no" ></iframe>

		<div id="sepcleartxttabs"></div>

		<div id="sepcleartxttabs"></div>

	</div>

</div>

</div> 

</div> 

<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"></div> 

</div>

</body> 
</html>