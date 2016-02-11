<?php 
session_start();
include_once ('inicios.php');
if (!isset($_SESSION['user']))
{
	$_SESSION['user'] = serialize($uniqid);
}
if (!isset($_SESSION['refcompra']))
{
	$_SESSION['refcompra'] = serialize($uniqidcompra.$uniqid);
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>AXA</title>

<meta name="description" content=" Encuentra los puntos Wifi ETB más cercanos y navega desde cualquier sitio. ">

<meta name="keywords" content=" wifi, zonas, etb, internet, sin cables, navega, mapa, velocidad, sitio, conectate, ciudad, navegacion, puntos, direccion" >

<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />


<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/actions-botones.js" type="text/javascript"></script>
    <script src="js/chat.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script>
	$(document).ready(function(){
		$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		
		})
	</script>
<?php include ('analytics.php');?>
</head>

<body>

<header>
	<div id="logo"> <a href="index6.php"><img src="images/layout/logo.png" /></a>
    </div>
    <div id="copy_home">
    	<h1>
        	<p class="copy_grande">Escoge la opción que más se acerque a tus necesidades.</p>
            <!--<p class="copy_peque">Adquiere tu tarjeta de asistencia en 3 simples pasos. ¡te tomar&aacute; menos de 5 minutos!</p>-->
        </h1>
    </div>
</header>


<section class="contenedor_contenido">

<div class="contenedr_botones_grande">

	<div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index.php">Viajas a Europa de Vacaciones?</a></p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p  style="margin-top:26px"><a class="planes_rojos" href="index2.php?idplan=8">Eres mayor de 65 años?</a></p>
            </div>
        </div>
    </div>
</div>    
    

<div class="contenedr_botones_grande">    
    
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index_2.php">Viajas a otra parte del Mundo?</a></p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p><a class="planes_rojos" href="index_3.php">Viajas por más de 6 meses?</a></p>
            </div>
        </div>
    </div>
    
</div>    


<div class="contenedr_botones_grande">
    
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p>
                	<!--<a class="planes_rojos" href="index2.php?idplan=2">Vas a viajar más de 2 veces al año?</a>-->
                    <a class="planes_azules" href="#inline1" id="various1">Vas a viajar más de 2 veces al año?</a>
                    </p>
            </div>
        </div>
    </div>
    <div class="botones_opciones">
    	<div class="contenedor_botones_opciones">
        	<div class="botones_opciones_dentro">
            	<p style="color:#113182; margin-top:26px"><a class="planes_azules" href="index6.php">Ver todos los planes</a></p>
            </div>
        </div>
    </div>

</div>
   
   
</section>
<div style="display: none;">
		<div id="inline1" style="width:400px;height:100px;overflow:auto;">
			<h1>Selecciona un plan</h1>
            <br/>
            <p><a class="compras" href="index2.php?idplan=10">Plan Multiviajes 60 días</a></p>
            <p><a class="compras" href="index2.php?idplan=2">Plan Multiviajes 30 días</a></p>
		</div>
	</div>

<?php 
include ('footer.php');
?>

</body>

</html>
