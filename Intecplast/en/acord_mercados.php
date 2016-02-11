<?php


	include_once './../php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $mercado = new articulo();
	$mercado = $articuloDAO->getBySeccion(2);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	  <title>jQuery Easy Accordion Plugin</title>
	  
      <!-- Meta -->
      <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	  <meta name="author" content="Andrea Cima Serniotti - Madeincima.eu" />
	  <meta name="description" content="jQuery Easy Accordion Plugin - A highly flexible timed horizontal slider able to show any kind of content" />
	  <meta name="keywords" content="jQuery, plugin, accordion, slider, slideshow, horizontal, timed, interval" />	  
      <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
      <!-- Scripts -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	  <script type="text/javascript" src="script/jquery.easyAccordion.js"></script>
      <script type="text/javascript" src="script/utility.js"></script>
      <link href="css/acordMercado.css" rel="stylesheet" type="text/css" />


      
</head>
<body>

<div id="accordion-2">

<dl>
	<dt>
		<img src="images/iconocuid.png"  />
	</dt>
	<dd>
		<img src="images/iconocuidadotop.png" alt="" />
		<img src="./..<?php echo $mercado[0]->getImagen_i() ?>"  width="294" height="118" />
		<span class="tituloacordmercados">
			<?php echo $mercado[0]->getTitulo_i() ?>
		</span>
		<p>			
			<?php echo $mercado[0]->getDescripcion_i() ?>
		</p>
		<div id="bt_vergal">
			<a href="mercados_galeria.php"></a>
		</div>	
	</dd>
	
	<dt>
		<img src="images/iconofarm.png"  />
	</dt>
	<dd>
		<img src="images/iconocuidadotop.png" alt="" />
		<img src="./..<?php echo $mercado[1]->getImagen_i() ?>"  width="294" height="118" />
		<span class="tituloacordmercados">
			<?php echo $mercado[1]->getTitulo_i() ?>
		</span>
		<p>			
			<?php echo $mercado[1]->getDescripcion_i() ?>
		</p>
		<div id="bt_vergal">
			<a href="farmaceutica_galeria.php"></a>
		</div>
	</dd>
	
	<dt>
		<img src="images/iconoind.png"  />
	</dt>
	<dd>
		<img src="images/iconocuidadotop.png" alt="" />
		<img src="./..<?php echo $mercado[2]->getImagen_i() ?>"  width="294" height="118" />
		<span class="tituloacordmercados">
			<?php echo $mercado[2]->getTitulo_i() ?>
		</span>
		<p>			
			<?php echo $mercado[2]->getDescripcion_i() ?>
		</p>
		<div id="bt_vergal">
			<a href="industrias_galeria.php"></a>
		</div>
	</dd>
	
	<dt>
		<img src="images/iconoalimentos.png"  />
	</dt>
	<dd>
		<img src="images/iconocuidadotop.png" alt="" />
		<img src="./..<?php echo $mercado[3]->getImagen_i() ?>"  width="294" height="118" />
		<span class="tituloacordmercados">
			<?php echo $mercado[3]->getTitulo_i() ?>
		</span>
		<p>			
			<?php echo $mercado[3]->getDescripcion_i() ?>
		</p>
		<div id="bt_vergal">
			<a href="alimentos_galeria.php"></a>
		</div>
	</dd>
</dl>

</div>
    
</body>
</html>
