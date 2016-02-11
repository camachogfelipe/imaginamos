<?php 

    include_once './php/clases.php';
   
    $puntoDAO = new puntoDAO();
    $punto = new punto();
    $puntos = $puntoDAO->gets();

    $puntoPpal = $puntoDAO->getByTipoPunto(1);

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Puntos de Venta</title>

<!-- styles specific to demo site -->

<!-- styles needed by jScrollPane - include in your own sites -->
<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<style type="text/css" id="page-css">
/* Styles specific to this particular page */			
#scroll-pane2{
	width: 181px;
	height:184px;	
	padding-left:4px;
	padding-right:10px;
	background-repeat: no-repeat;
	background-position: right top;
	color:#424242;
	font-family: DINMedium;
	text-align:justify;
	font-size:14px;
	font-weight:normal;
}

.horizontal-only{
	height: auto;
	
}
	
#rowptoventamod {
	width:162px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #DBDBDB;
	border-right-color: #DBDBDB;
	border-bottom-color: #DBDBDB;
	border-left-color: #DBDBDB;
	font-family: DINMedium;
	font-size:13px;
	font-weight:normal;
	color:#424242;
}

#rowptoventamod p{
	display:block;
	height:auto;
}

.titulorowptoventmod {
	font-family: DINMedium;
	font-size:16px;
	color:#424242;
}
			
			
#sepclearrows {
	clear:both;
	height:4px;
}
			
			
</style>

<!-- latest jQuery direct from google's CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<!-- the mousewheel plugin -->
<script type="text/javascript" src="script/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>
<!-- scripts specific to this demo site -->


		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('#scroll-pane2').each(
					function()
					{
						$(this).jScrollPane(
							{
								showArrows: $(this).is('.arrow')
							}
						);
						var api = $(this).data('jsp');
						var throttleTimeout;
						$(window).bind(
							'resize',
							function()
							{
								if ($.browser.msie) {
									// IE fires multiple resize events while you are dragging the browser window which
									// causes it to crash if you try to update the scrollpane on every one. So we need
									// to throttle it to fire a maximum of once every 50 milliseconds...
									if (!throttleTimeout) {
										throttleTimeout = setTimeout(
											function()
											{
												api.reinitialise();
												throttleTimeout = null;
											},
											50
										);
									}
								} else {
									api.reinitialise();
								}
							}
						);
					}
				)

			});
		</script>

 <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>

<div id="scroll-pane2"  >
	<?php foreach ($puntos as $punto): ?>
	
	<?php 
		$ciudadDAO = new ciudadDAO();
		$ciudad = new ciudad();
		$ciudad_id = $punto->getCiudadId();
		$ciudad = $ciudadDAO->getById($ciudad_id);

	 ?>
		
	<div id="rowptoventamod">
		<p> <span class="titulorowptoventmod"><?php echo $ciudad->getnombre_e() ?></span> <br/><?php echo $punto->getDireccion() ?> <br/><br/>Tel: <?php echo $punto->getTel() ?></p>
	</div>

	<?php endforeach ?>


	<br/>
	<br/>
	<br/>
	<br/>

</div>

</body>
</html>