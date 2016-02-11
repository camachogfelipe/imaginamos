<?php 
session_start();
if (isset ($_GET['idplan']) and is_numeric($_GET['idplan']))
{
	include_once ('inicios.php');
	$idplan = $_GET['idplan'];
	
	if (!intval($idplan) )
	{
		header('Location: index.php')	;
		exit;
	}
	else 
	{
		$countventas = $ventaDAO->getCountVentas();
		$plan = $planDAO->getPlan($idplan);
		$listaRestricPaises = $restriccionpaisesDAO->getbyPlanid($idplan);
		$listaPais = $paisDAO->getpaisesResctric($idplan,"descripciontbl_destino ", "ASC");
		$edadmin = $plan->getEdadmintbl_plan();
		$edadmax = $plan->getEdamaxtbl_plan();
		$nombreplan = $plan->getDescripciontbl_plan();
	}
	
}
else
{
	header('Location: index.php')	;
	exit;
}



?>

<!DOCTYPE html>

<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
<?php 
	if ($idplan == 1)
		{
		?>
		<title>AXA assistance tarjetas asistencia viaje cualquier pais de America</title>
	
		<meta name="description" content="Viaje a cualquier parte de America con la mejor asistencia medica, administrativa y compensación por demora de equipaje">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substitución, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios, seguro, viaje, medico, internacional, canada, USA, mexico, guatemala, Honduras, El Salvador, Cuba, Haiti, Jamaica, Republica Dominicana, Puerto Rico, Nicaragua, Costa Rica, Panama, venezuela, Ecuador,  Peru, Brasil, Bolivia, Chile, Argentina, Uruguay, Paraguay " >
		<?php
		}
	if ($idplan == 2)
		{
		?>
		<title>AXA assistance tarjetas asistencia multiples viajes al año</title>
	
		<meta name="description" content="Tarjatas de asistencia para empresarios o viajeros que realizan multiples viajes al año, con las mejores tarifas.">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, ilimitado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, viaje, , limite, edad, costos, beneficios, 30, minimo" >
		<?php
		}
	if ($idplan == 3)
		{
		?>
		<title>AXA assistance tarjetas asistencia para viajes largos</title>
	
		<meta name="description" content="Viaje todo un año a cualquier parte del mundo">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substitución, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios " >
		<?php
		}
	if ($idplan == 4)
		{
		?>
		<title>AXA assistance tarjetas asistencia cualquier pais economico</title>
	
		<meta name="description" content="Viaje a cualquier parte del mundo con su tarjeta de asistencia economica">
	
		<meta name="keywords" content="caso, equipaje, busqueda, maleta, asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, entierro, local, mensajes, urgentes, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios " >
		<?php
		}
	if ($idplan == 5)
		{
		?>
		<title>AXA assistance tarjetas asistencia con coberturas economicas</title>
	
		<meta name="description" content="Viaje a paises sin requerimiento de visa con la mejor tarifa en su tarjeta de asistencia">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios" >
		<?php
		}
	if ($idplan == 6)
		{
		?>
		<title>AXA Assistance</title>
	
		<meta name="description" content="">
	
		<meta name="keywords" content="" >
		<?php
		}
	if ($idplan == 7)
		{
		?>
		<title>AXA assistance tarjetas asistencia viaje europa y el mundo</title>
	
		<meta name="description" content="Viaje a Europa y el resto del mundo con las mejores coberturas en su tarjeta de asistencia">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substitución, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios " >
		<?php
		}
	if ($idplan == 8)
		{
		?>
		<title>AXA assistance tarjetas asistencia para personas de 65 a 85 años</title>
	
		<meta name="description" content="Asistencia medica por enfermadad y accidente para viajeros mayores de 65 años">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substitución, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios " >
		<?php
		}
	if ($idplan == 9)
		{
		?>
		<title>AXA assistance tarjetas asistencia para viaje largos o de estudio</title>
	
		<meta name="description" content="Para estudiantes o viajeros menores de 45 años, viaje por todo el mundo hasta durante un año">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios, 45, años" >
		<?php
		}
	if ($idplan == 10)
		{
		?>
		<title>AXA assistance tarjetas asistencia para varios viajes al año</title>
	
		<meta name="description" content="Tarjatas de asistencia para empresarios o viajeros que realizan multiples viajes al año, con las mejores tarifas">
	
		<meta name="keywords" content="asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, ilimitado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, viaje, maximo, dias, limite, edad, costos, beneficios, 60, minimo" >
		<?php
		}
	
	if ($idplan == 12)
		{
		?>
		<title>AXA assistance tarjetas asistencia paises tratado schengen </title>
	
		<meta name="description" content="Cubrimiento para todos los paises del acuerdo schengen, la asistencia economica para sus viajes">
	
		<meta name="keywords" content="controles, fronterizos, asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substitución, administrativa, indemnización, perdida, equipaje, complementaria, compensación, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, público, coordinación, compra, envío, flores, chocolates, información, eventos, espectáculos, culturales, principales, ciudades, mundo, recordación, fechas, importantes, cancelación, interrupción, viaje, maximo, dias, limite, edad, costos, beneficios, 65, años, alemania, austria, bulgaria, bélgica, republica, checa, dinamarca, eslovaquia, eslovenia, españa, estonia, finlandia, francia, grecia, hungría, islandia, italia, letonia, lituania, liechtenstein, luxemburgo, malta, noruega, países, bajos, polonia, portugal, rumanía, suecia, suiza" >
		<?php
		}
	?>

<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link type="text/css" href="css/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/ezmark.css" media="all" />

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min"><\/script>')</script>
    <script src="js/jquery.animate-colors-min.js" type="text/javascript"></script>
	<script src="js/actions-botones.js" type="text/javascript"></script>
    <script src="js/actions-acordeon.js" type="text/javascript"></script>
    <script src="js/chat.js" type="text/javascript"></script>
    <script src="js/misfunciones.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
	</script>
    <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type="text/javascript" src="js/cambiar_es.js"></script>
    <script type="text/javascript" src="js/acciones_calendario.js"></script>
    <script type="text/javascript" src="js/jquery.ezmark.min.js"></script>
    <script src="js/Ajax_Post.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jsalphanumeric/jquery.alphanumeric.js"></script>
    <script type="text/javascript" src="js/jsalphanumeric/jquery.alphanumeric.pack.js"></script>
    <script type="text/javascript" src="js/jsalphanumeric/jquery.validate.js"></script>
    <script type="text/javascript">
		$(function() {
			$('.defaultP input').ezMark();
			$('#customP input[type="checkbox"]').ezMark({checkboxCls: 'ez-checkbox-green', checkedCls: 'ez-checked-green'})
		});	
	</script>
    <script>
	function mostrarPais(pais,paisid)
	{
		document.getElementById('lugar').innerHTML = pais;
		document.getElementById('hddlugar').value = paisid;
		
	}
    </script>
  
    
<!--[if IE 7]>

<style>
#header_acordeon1, #header_acordeon2, #header_acordeon3, #header_acordeon4{
	color:#666;
	cursor:pointer;
	height:41px;
	text-align:left;
	width:790px;
}

#header_acordeon2{
	height:83px;
}

</style>
<![endif]-->
<script>
edadmin = '<?php echo $edadmin;?>';
edadmax = '<?php echo $edadmax;?>';
</script>
<script>
$(document).ready(function(){
	
	$("#hddidplan").val('<?php echo $idplan?>');
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
        	<p class="copy_grande" style="float:right">Plan <br /> <?php echo $plan->getDescripciontbl_plan()?></p>
        </h1>
    </div>
</header>


<section class="contenedor_contenido">
	<div class="header_contenidos">
    		<img src="images/direct/dos.png" style="margin-left:42px" />
            <p class="header_contenidos_copy">Contesta unas simples preguntas:</p>
    </div>
    
    <ul id="acordeon">
    	<li id="acordeon1">
        	<div id="header_acordeon1">
            	<p style="float:left">Destino</p>
                <p id="lugar">Destino</p>
                <!--<div id="banderita"></div>-->
            </div>
            <div id="listo1"></div>
            <div class="contenido_acordeon">
            	<p class="titulo_contenido_acordeon">Para d&oacute;nde viajas? </p>
                 <?php 
				if ($idplan == 4 || $idplan== 7)
				{
				?>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Espa&ntilde;a',75)"><img src="images/layout/Banderas/espana.png" /></div>
                    	</div>
                	</div>	
                    <p>Espa&ntilde;a </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Francia',84)"><img src="images/layout/Banderas/Francia.png" /></div>
                    	</div>
                	</div>	
                    <p>Francia </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Alemania',6)"><img src="images/layout/Banderas/Alemania.png" /></div>
                    	</div>
                	</div>	
                    <p>Alemania </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Reino Unido',182)"><img src="images/layout/Banderas/Reino-Unido.png" /></div>
                    	</div>
                	</div>	
                    <p>Reino Unido </p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Territorio Schengen',243)"><img src="images/layout/Banderas/Shengen.png" /></div>
                    	</div>
                	</div>	
                    <p>Territorio Schengen </p>
                </div>
                <?php 
				}
				?>
                <?php 
				if ($idplan ==  6 || $idplan== 2 || $idplan== 3 || $idplan== 9 || $idplan== 8 || $idplan== 10)
				{
				?>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('EEUU',77)"><img src="images/layout/Banderas/eu.png" /></div>
                    	</div>
                	</div>	
                    <p>EEUU</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Espa&ntilde;a',75)"><img src="images/layout/Banderas/espana.png" /></div>
                    	</div>
                	</div>	
                    <p>España</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Francia',84)"><img src="images/layout/Banderas/Francia.png" /></div>
                    	</div>
                	</div>	
                    <p>Francia</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Argentina',15)"><img src="images/layout/Banderas/argentina.png" /></div>
                    	</div>
                	</div>	
                    <p>Argentina</p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Australia',18)"><img src="images/layout/Banderas/australia.png" /></div>
                    	</div>
                	</div>	
                    <p>Australia</p>
                </div>
                <?php 
				}
				?>
                <?php 
				if ($idplan ==  5)
				{
				?>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('EEUU',77)"><img src="images/layout/Banderas/eu.png" /></div>
                    	</div>
                	</div>	
                    <p>EEUU</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Colombia',245)"><img src="images/layout/Banderas/colombia.png" /></div>
                    	</div>
                	</div>	
                    <p>Colombia</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Argentina',15)"><img src="images/layout/Banderas/argentina.png" /></div>
                    	</div>
                	</div>	
                    <p>Argentina</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('China',49)"><img src="images/layout/Banderas/china.png" /></div>
                    	</div>
                	</div>	
                    <p>China</p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Perú',175)"><img src="images/layout/Banderas/peru.png" /></div>
                    	</div>
                	</div>	
                    <p>Per&uacute;</p>
                </div>
                <?php 
				}
				?>
                <?php 
				if ($idplan ==  1)
				{
				?>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('EEUU',77)"><img src="images/layout/Banderas/eu.png" /></div>
                    	</div>
                	</div>	
                    <p>EEUU</p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Australia',18)"><img src="images/layout/Banderas/australia.png" /></div>
                    	</div>
                	</div>	
                    <p>Australia</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Argentina',15)"><img src="images/layout/Banderas/argentina.png" /></div>
                    	</div>
                	</div>	
                    <p>Argentina</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('China',49)"><img src="images/layout/Banderas/china.png" /></div>
                    	</div>
                	</div>	
                    <p>China</p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Perú',175)"><img src="images/layout/Banderas/peru.png" /></div>
                    	</div>
                	</div>	
                    <p>Per&uacute;</p>
                </div>
                <?php 
				}
				?>
                <?php 
				if ($idplan == 12 )
				{
				?>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Espa&ntilde;a',75)"><img src="images/layout/Banderas/espana.png" /></div>
                    	</div>
                	</div>	
                    <p>Espa&ntilde;a </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Francia',84)"><img src="images/layout/Banderas/Francia.png" /></div>
                    	</div>
                	</div>	
                    <p>Francia </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Alemania',6)"><img src="images/layout/Banderas/Alemania.png" /></div>
                    	</div>
                	</div>	
                    <p>Alemania </p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Suiza',210)"><img src="images/layout/Banderas/suiza.png" /></div>
                    	</div>
                	</div>	
                    <p>Suiza </p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera" onClick="mostrarPais('Italia',114)"><img src="images/layout/Banderas/italia.png" /></div>
                    	</div>
                	</div>	
                    <p>Italia </p>
                </div>
                <?php 
				}
				?>
                <div class="contenedor_select">
                	<form>
                     <select id="Inicio_idOtros" onChange="mostrarPais(this.options[this.selectedIndex].text,this.options[this.selectedIndex].value)">
                     <?php 
                     foreach ($listaPais as $pais)
                     {
                     ?>
                     <option value="<?php echo $pais->getIdtbl_destino()?>"><?php echo utf8_encode( $pais->getDescripciontbl_destino()); ?></option>
                     <?php
                     }
                     ?>            			
                     </select>
                    </form>
                </div>
            </div>
        </li>
    	<li id="acordeon2">
        	<div id="header_acordeon2">
            	<p style="float:left">Fecha de Viaje </p> 
                <p id="fecha">Fecha</p>
                <span  class="titulo_contenido_acordeon"><p style="float:left">Selecciona la fecha de salida y regreso.</p><p style="float:left; margin-left:340px">Salida</p><input type="checkbox" id="activa1" readonly ><p style="float:left">Llegada</p><input type="checkbox" id="activa2" readonly > </span>
             </div>
             <div id="listo2"></div>
                <div id="contenedor_calendarios">
                	<div id="calendario_salida">
                		<div id="datepicker_salida"></div>
                	</div> 
                    <div id="calendario_llegada">
                        <div id="datepicker_llegada"></div>
                	</div> 
                </div>   
            
            <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Fecha salida'" onclick="if(this.value=='Fecha salida') this.value=''" value="Fecha salida" id="fecha_salida" style="margin-left:87px"/>
             <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Fecha Llegada'" onclick="if(this.value=='Fecha Llegada') this.value=''" value="Fecha Llegada" id="fecha_llegada"/>
            <div class="contenedor_boton_siguiente_grande" style="margin: 10px 50px"> 
               		<div class="contenedor_boton_siguiente">
                		<input class="boton_siguiente1" name="buttom1" type="button" value="Siguiente" />  
                    </div>          
            </div>
        </li>
        <li id="acordeon3">
        	<div id="header_acordeon3">
            	<p style="float:left">N&uacute;mero de Personas</p>
                <p id="personas">Personas</p>
            </div>
            </div>
            <div id="listo3"></div>
            <div class="contenido_acordeon">
            	<p class="titulo_contenido_acordeon">Cuantas personas viajan?</p>
                <div class="contenedor_numeros" style="margin-left:0">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero" onClick="creainput(1)"><img src="images/layout/Numeros/uno.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="numero" onClick="creainput(2)"><img src="images/layout/Numeros/dos.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero" onClick="creainput(3)"><img src="images/layout/Numeros/tres.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero" onClick="creainput(4)"><img src="images/layout/Numeros/cuatro.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros" style="float:left; margin-left:0">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero" onClick="creainput(5)"><img src="images/layout/Numeros/cinco.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div  class="contenedor_select" style="float:right">
                	<form>
               			 <select id="Inicio_idOtros_personas">
                			<option value="a">5</option>
                   			<option value="b">6</option>
                    		<option value="c">7</option>
                    		<option value="d">8</option>
                    		<option value="e">9</option>
                            <option value="f">10</option>
                		</select>
                	</form>
                </div>
            </div>
        </li>
        <li id="acordeon4">
        	<div id="header_acordeon4">
            	<p style="float:left">Informaci&oacute;n Pasajero(s)</p>
                <p id="completo"></p>
            </div>
            <div id="listo4"></div>
            <div id="contenedor_scroll"  class="scroll-pane">
            <form id="frm_pasajeros" name="frm_pasajeros"  action="php/action/addPasajeros.php" method="post">
            <div class="nombres"><p style="float:left" id="pcantidadP"></p><p style="float:right">Fecha de Nacimiento</p></div>
 			</form>
            	<div class="contenedor_boton_siguiente_grande"> 
               		<div class="contenedor_boton_siguiente">
                		<input class="boton_siguiente2" name="buttom" type="button" value="Siguiente" />  
                    </div>          
               </div>
            </div>
        </li>
    </ul>

   
</section>

<section id="contenedor_factura">
	<p id="titulo_factura">Realiza tu Pago</p>
    <div class="costo">
    	<p>El costo de tu AXA Assistance <?php echo $plan->getDescripciontbl_plan()?>:</p> <br />
    	<p id="costo_persona">Por Persona: $133,00 USD*</p>
    	<p id="total">Total: $399,00 USD*</p> 
        <p class="condiciones_peque">* El cambio de d&oacute;lares a pesos se realiza en funci&oacute;n de la tasa TRM del d&iacute;a.</p>
    </div>
    <div class="certificado_correo">
    	<p id="costo_persona">Tu certificado de asistencia ser&aacute; enviado a tu correo electr&oacute;nico 
cuando se haya confirmado la transacci&oacute;n.</p>   
		<input class="correo_factura" type="email" onblur="if(this.value=='') {this.value='Correo Electr&oacute;nico';}" onclick="if(this.value=='Correo Electr&oacute;nico') this.value=''" value="Correo Electr&oacute;nico" id="emailuser" />
    </div>
    <div class="acepto_los_terminos" id="customP">
		<input type="checkbox" name="jquery_like" id="jquery_like" onClick="if (this.checked){this.value=0;}else{this.value=1;}" />
		<label style="float:left; margin-top:8px" for="Acepto">Confirmo que soy mayor de edad y acepto los<br /> <a href="docpdf/<?php echo $listaPDF->getPdf(); ?>" class="link_peque" target="_blank"> t&eacute;rminos y condiciones propuestos.</a></label>
    </div>
    
    <a class="link_grande" href="#" id="comprar" onClick="enviar_pago()">Comprar</a> 
    <form name="guarda_compra" id="guarda_compra" style=" visibility:hidden" >
    <input type="hidden" id="hddidplan" />
    <input type="hidden" id="hddlugar" value="0" />
    <input type="hidden" id="hddfecha_salida"/>
    <input type="hidden" id="hddfecha_llegada"/>
    <input name="valor" id="valor2" type="hidden">
    </form>
</section>

<?php 
include ('footer.php');

//$llave_encripcion = "61a312cc826";//"12ce183d5bc";//"1111111111111111";llave de encripción que se usa para generar la fima
$llave_encripcion = "137e2eab080";
$usuarioId = "85894";//"2";// //código único del cliente
$iva = 0; //impuestos calculados de la transacción
$baseDevolucionIva = 0; //el precio sin iva de los productos que tienen iva
$valor = $valor; //el valor total
$moneda ="COP"; //la moneda con la que se realiza la compra
$prueba = "1"; //variable para poder utilizar tarjetas de crédito de prueba
$descripcion = $hdd_descrip; //descripción de la transacción
//$refVenta = 'UVA-00'.$total;
$url_respuesta = "tarjetasdeasistencia-axa.com/respuesta.php";
$emailComprador = $email; //email al que llega confirmación del estado final de la transacción, forma de identificar al comprador
//$firma_cadena = "$llave_encripcion~$usuarioId~$refVenta~$valor~$moneda"; //concatenación para realizar la firma
//$firma = md5($firma_cadena); //creación de la firma con la cadena previamente hecha
?>
<form  name='form_pagos' id='form_pagos' method="post" action="https://gateway.pagosonline.net/apps/gateway/index.html" target="_self"> 
<!--<form  name='form_pagos' id='form_pagos' method="post" action="https://gateway2.pagosonline.net/apps/gateway/index.html" target="_self">  -->
   
    <input name="usuarioId" id="usuarioId" type="hidden" value="<?php echo $usuarioId?>">
    <input name="descripcion" id="descripcion" type="hidden" value="" >
    <input name="extra1" id="extra1" type="hidden" value="" >
    <input name="refVenta" id="refVenta" type="hidden" value="">
    <input name="valor"  id="valor" type="hidden" value="">
    <input name="iva" id="iva" type="hidden" value="<?php echo $iva ?>">
    <input name="baseDevolucionIva" id="baseDevolucionIva" type="hidden" value="<?php echo $baseDevolucionIva ?>" >
    <input name="firma" id="firma" type="hidden" value="">
    <input name="emailComprador" id="emailComprador" type="hidden" value="" >
    <input name="prueba" id="prueba" type="hidden" value="0">
    <input name="url_respuesta" id="url_respuesta" type="hidden" value="<?php echo $url_respuesta?>">
</form>


</body>

</html>
<script>
function enviar_pago()
{
	var emailuser = document.getElementById('emailuser').value;
	var terminos = document.getElementById('jquery_like');
	document.getElementById('emailComprador').value = emailuser;
	if (terminos.checked)
	{
		if (emailuser!='')
		{
			validaEmail = valEmail(emailuser);
			if (validaEmail==true)
			{
				//document.form_pagos.submit();
				var url2 = 'php/action/addPasajeros.php';
				var datos = new Array();
				var form = document.getElementById('frm_pasajeros');
				var cantidadactual = form.length;
				cantidad = parseInt(cantidadactual-1);
				cantidad = cantidad/6;
				var envio = true;
				edad = new Array();
				for (k=1;k<cantidad+1;k++)
					{
						var nombre = document.getElementById('nombre'+k).value;
						var apellido = document.getElementById('apellido'+k).value;
						var identifica = document.getElementById('documento'+k).value;
						var email = document.getElementById('emailuser').value;
						var fecha = (document.getElementById('ano'+k).value+'-'+document.getElementById('mes'+k).value+'-'+document.getElementById('dia'+k).value);
						var calculaedad = displayage(document.getElementById('ano'+k).value, (document.getElementById('mes'+k).value)-1, document.getElementById('dia'+k).value, "years", 0, "roundup");
						var edad = calculaedad;
						edad =  parseInt(edad);
						datos[k] = (nombre +','+apellido+','+identifica+','+email+','+fecha+','+edad);
					}
				var consult2 = consulta(url2,datos);
				var userid = new Array();
				userid = consult2.split(',');
				var url1 = 'php/action/addVenta.php';
				var datos1 = new Array();
				var url3 = 'php/action/cantidadVentas.php';
				var cantidadVentas = consulta(url3);
				for (k=0;k<userid.length;k++)
					{
						var fechasalida = document.getElementById('hddfecha_salida').value;
						var fechallegada = document.getElementById('hddfecha_llegada').value;
						var arrfecha1 = new Array();
						var arrfecha2 = new Array();
						arrfecha1 = fechasalida.split('/');
						arrfecha2 = fechallegada.split('/');
						var dia1 = arrfecha1[0];
						var mes1 = arrfecha1[1];
						var ano1 = arrfecha1[2];
						var dia2 = arrfecha2[0];
						var mes2 = arrfecha2[1];
						var ano2 = arrfecha2[2];
						//var diasviaje = FechaDif(dia1,mes1,ano1,dia2,mes2,ano2);alert (diasviaje);
						var diasviaje =  DiferenciaFechas();
						var canalventa = 'Canal Venta Web';
						var valortotalventa = document.getElementById('valor2').value;
						var terminostbl = 1;
						var idpasajeros = userid[k];
						var idplan = '<?php echo $idplan?>';
						idplan = parseInt(idplan);
						if (idplan == 2 || idplan == 10)
						{
							ano1 = parseInt(ano1);
							(ano1 = ano1 + 1)
							fechallegada = dia1+'/'+mes1+'/'+ano1;
						}
						var iddestino = document.getElementById('hddlugar').value;
						var refventa = 'AXA_'+idplan+'_'+iddestino+'_'+cantidadVentas;
						datos1[k] = (fechasalida +','+fechallegada+','+diasviaje+','+canalventa+','+valortotalventa+','+terminostbl+','+idpasajeros+','+idplan+','+iddestino+','+refventa);
					}
				var consult1 = consulta(url1,datos1);
				if (consult1==false)
				{
					alert ('Inconvenientes al enviar la transacción, intente nuevamente!')	;
					//window.location.reload();
				}
				else
				{
					//alert (consult1);
					document.getElementById('descripcion').value = '<?php echo utf8_encode($nombreplan)?>';
					document.getElementById('extra1').value = '<?php echo utf8_encode($nombreplan)?>';
					document.getElementById('refVenta').value = refventa;
					document.getElementById('valor').value = valortotalventa;
					document.getElementById('firma').value = consult1;
					document.getElementById('emailComprador').value = email;
					alert ('Se ha grabado la reserva del plan, para completar el proceso te enviaremos a la pagina de pagosonline.net, No olvides hacer click en "Finalizar" para que tu compra quede registrada. Gracias')
					document.form_pagos.submit();
				}
				
			}
			else
			{
				alert("La dirección de email: "+emailuser +" es incorrecta.");
				document.getElementById('emailuser').focus();
				var comprar = document.getElementById('comprar').href = '#emailuser';
			}
		}
	}
	else
		{
			alert ('Debe aceptar los terminos y condiciones')	;
			document.getElementById('jquery_like').focus();
			var comprar = document.getElementById('comprar').href = '#jquery_like';
			
		}
}
function FechaDif(dia1,mes1,anio1,dia2,mes2,anio2)
    {
        /* Meses con 31:
            Enero(1) Marzo(3) Mayo(5) Julio(7) Agosto(8) Octubre(10) Diciembre(12)
            
            Meses con 30:
            Abril(4) Junio(6) Setiembre(9) Noviembre(11)
            
            Meses con 28:
            Febrero(2)
        */
        var dias1,dias2,dif;
        //convertir a numeros
      dia1 = parseInt(dia1,10);
      mes1 = parseInt(mes1,10);
      anio1 = parseInt(anio1,10);
      dia2 = parseInt(dia2,10);
      mes2 = parseInt(mes2,10);
      anio2 = parseInt(anio2,10);
      
        //Chequear valores.
        if((mes1>12)||(mes2>12)){ return -1;}
        
        if((mes1==1)||(mes1==3)||(mes1==5)||(mes1==7)||(mes1==8)||(mes1==10)||(mes1==12)){
            if(dia1>31){
                return -1;}
      }
        if((mes2==1)||(mes2==3)||(mes2==5)||(mes2==7)||(mes2==8)||(mes2==10)||(mes2==12)){
            if(dia2>31){
                return -1;}
      }
        if((mes1==4)||(mes1==6)||(mes1==9)||(mes1==11)){
            if(dia1>30){
                return -1;}
      }
        if((mes2==4)||(mes2==6)||(mes2==9)||(mes2==11)){
            if(dia2>30){
                return -1;}
      }
        if(mes1==2 && dia1>29){
                return -1;}
        if(mes2==2 && dia2>29){
                return -1;}
        
        dias1 = FechaADias(dia1,mes1,anio1);
        dias2 = FechaADias(dia2,mes2,anio2);
        //devolver la diferencia positiva
        dif = dias2 - dias1;
        if(dif<0){
            return ((-1*dif));}
        return dif;
    }
    
function FechaADias(dia, mes, anno){
	/*Devuelve la cantidad de d�as desde el 1/01/1904
	No verifica datos. Llamada desde FechaDif()
	intervalo permitido: 1904-2099
	 */
	
  dia = parseInt(dia,10);
  mes = parseInt(mes,10);
  anno = parseInt(anno,10);
	var cant_bic,cant_annos,cant_dias, no_es_bic;
 
	
	//verificar la cantidad de biciestos en el periodo (div entera)
	//+1 p/contar 1904
	cant_bic = parseInt((anno-1904)/4 + 1);
	no_es_bic = parseInt((anno % 4));
	//calcular dias transcurridos hasta el 31 de dic del a�o anterior
	cant_annos = parseInt(anno-1904);
	cant_dias = parseInt(cant_annos*365 + cant_bic);
	
	//calcular dias transcurridoes desde el 31 de dic del a�o anterior
	//hasta el mes anterior al ingresado
	var i;
	for(i=1;i<=mes;i++){
		if((i==1)||(i==3)||(i==5)||(i==7)||(i==8)||(i==10)||(i==12)){
			cant_dias+=31;}
		if((i==4)||(i==6)||(i==9)||(i==11)){
			cant_dias+=30;}
		if(i==2)
			{
			if(no_es_bic){
				cant_dias+=28;}
			else{
				cant_dias+=29;}
		}
	}   
	//sumarle los dias transcurridos en el mes
	cant_dias+=dia;
	return cant_dias;
}

function valEmail(valor){
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(valor))    {
        return false;
    }else{
        return true;
    }
}

function creainput(cantidad)
{
	var form = document.getElementById('frm_pasajeros');
	var formsave = document.getElementById('guarda_compra');
	var fechasalida = document.getElementById('fecha_salida').value;
	var fechallegada = document.getElementById('fecha_llegada').value;
	var arrfecha1 = new Array();
	var arrfecha2 = new Array();
	arrfecha1 = fechasalida.split('/');
	arrfecha2 = fechallegada.split('/');
	var dia1 = arrfecha1[0];
	var mes1 = arrfecha1[1];
	var ano1 = arrfecha1[2];
	var dia2 = arrfecha2[0];
	var mes2 = arrfecha2[1];
	var ano2 = arrfecha2[2];
	//var diasviaje = FechaDif(dia1,mes1,ano1,dia2,mes2,ano2);alert (diasviaje);
	var diasviaje = DiferenciaFechas();
	var cantidadactual = form.length;
	var url2 = 'php/action/valorPlan.php';
	var datos = new Array();
	datos[0] = '<?php echo $idplan?>';
	datos[1] = diasviaje;
	var consult2 = consulta(url2,datos);
	consult2 = consult2.split(',');
	if (consult2.length==1)
	{
		alert ('Los días permitidos para este plan son '+consult2+', haz seleccionado '+diasviaje+', cambia las fechas o verfica un plan que cumpla con tus días. ');
	}
	else
		{
			document.getElementById('costo_persona').innerHTML = 'Por Persona: $'+consult2[0]+' USD*';
			var totalmaspersonas = cantidad * consult2[1];
			document.getElementById('total').innerHTML = 'Total: $'+totalmaspersonas+' USD*';
			document.getElementById('valor2').value = cantidad * consult2[2];
			document.getElementById('valor').value = cantidad * consult2[2];
			document.getElementById('pcantidadP').innerHTML = 'Total pasajeros: '+cantidad;
			document.getElementById('personas').innerHTML = cantidad+ ' personas';
			if(cantidadactual>0)
			{
				$('#acordeon4 input:text').remove();
				$('#guarda_compra input:text').remove();
			}
			input = document.createElement('input');
			input.type =  'hidden';
			input.value = cantidad;
			input.id = 'cantidadpax';
			input.name = 'cantidadpax';
			form.appendChild(input);
			cantidad = parseInt(cantidad);
			for (k=1;k<cantidad+1;k++)
			{
				for (j=0;j<6;j++)
				{
					if (j==0)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'nombre'+k;
						input.name = 'nombre'+k;
						input.value = 'Nombre Completo';
						input.onblur = function(){if(this.value=='') this.value='Nombre Completo';};
						input.onclick = function(){ if(this.value=='Nombre Completo')this.value='';};
						input.className = 'nombres_text';
						form.appendChild(input);
					}
					if (j==1)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'apellido'+k;
						input.name = 'apellido'+k;
						input.value = 'Apellidos';
						input.onblur = function(){if(this.value=='') this.value='Apellidos';};
						input.onclick = function(){ if(this.value=='Apellidos')this.value='';};
						input.className = 'nombres_text';
						form.appendChild(input);
						
					}
					if (j==2)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'documento'+k;
						input.name = 'documento'+k;
						input.value = 'Documento de Identidad';
						input.onblur = function(){if(this.value=='') this.value='Documento de Identidad';};
						input.onclick = function(){ if(this.value=='Documento de Identidad')this.value='';};
						input.className = 'nombres_text';
						form.appendChild(input);
						
					}
					if (j==3)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'dia'+k;
						input.name = 'dia'+k;
						input.value = 'dd';
						input.maxLength = '2';
						input.onblur = function(){if(this.value=='' || this.value>31) this.value='dd';};
						input.onclick = function(){ if(this.value=='dd')this.value='';};
						input.className = 'fechas_text';
						form.appendChild(input);
						$('#dia'+k).numeric();
					}
					if (j==4)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'mes'+k;
						input.name = 'mes'+k;
						input.value = 'mm';
						input.maxLength = '2';
						input.onblur = function(){if(this.value=='' || this.value>12) this.value='mm';};
						input.onclick = function(){ if(this.value=='mm')this.value='';};
						input.className = 'fechas_text';
						form.appendChild(input);
						$('#mes'+k).numeric();
					}
					if (j==5)
					{
						input = document.createElement('input');
						input.type =  'text';
						input.id = 'ano'+k;
						input.name = 'ano'+k;
						input.value = 'aaaa';
						input.maxLength = '4';
						miFechaActual = new Date();
						anoActual = miFechaActual.getFullYear() 
						input.onblur = function(){if(this.value=='' || this.value > anoActual || this.value<1912 ) this.value='aaaa';};
						input.onclick = function(){ if(this.value=='aaaa')this.value='';};
						input.className = 'fechas_text';
						form.appendChild(input);
						$('#ano'+k).numeric();
					}
				}
			}
		}
	
}

function DiferenciaFechas () {  
  
   		var fechasalida = document.getElementById('fecha_salida').value;
		var fechallegada = document.getElementById('fecha_llegada').value;
		var arrfecha1 = new Array();
		var arrfecha2 = new Array();
		arrfecha1 = fechasalida.split('/');
		arrfecha2 = fechallegada.split('/');
		var dia1 = arrfecha1[0];
		var mes1 = arrfecha1[1];
		var ano1 = arrfecha1[2];
		var dia2 = arrfecha2[0];
		var mes2 = arrfecha2[1];
		var ano2 = arrfecha2[2];
		//calculo timestam de las dos fechas
		var timestamp1 = mktime(0,0,0,mes1,dia1,ano1);
		var timestamp2 = mktime(4,12,0,mes2,dia2,ano2);
		var segundos_diferencia = timestamp1 - timestamp2; //resto a una fecha la otra
		//echo $segundos_diferencia;
		var dias_diferencia = segundos_diferencia / (60 * 60 * 24); 
		dias_diferencia = Math.abs(dias_diferencia); //obtengo el valor absoulto de los días (quito el posible signo negativo)
		dias_diferencia = Math.floor(dias_diferencia); //quito los decimales a los días de diferencia
		dias_diferencia = (dias_diferencia + 1)
		return dias_diferencia; 
  
    
}

function mktime () {
    // Get UNIX timestamp for a date  
    // 
    // version: 1109.2015
    // discuss at: http://phpjs.org/functions/mktime
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: baris ozdil
    // +      input by: gabriel paderni
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: FGFEmperor
    // +      input by: Yannoo
    // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +      input by: jakes
    // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Marc Palau
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +      input by: 3D-GRAF
    // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Chris
    // +    revised by: Theriault
    // %        note 1: The return values of the following examples are
    // %        note 1: received only if your system's timezone is UTC.
    // *     example 1: mktime(14, 10, 2, 2, 1, 2008);
    // *     returns 1: 1201875002
    // *     example 2: mktime(0, 0, 0, 0, 1, 2008);
    // *     returns 2: 1196467200
    // *     example 3: make = mktime();
    // *     example 3: td = new Date();
    // *     example 3: real = Math.floor(td.getTime() / 1000);
    // *     example 3: diff = (real - make);
    // *     results 3: diff < 5
    // *     example 4: mktime(0, 0, 0, 13, 1, 1997)
    // *     returns 4: 883612800 
    // *     example 5: mktime(0, 0, 0, 1, 1, 1998)
    // *     returns 5: 883612800 
    // *     example 6: mktime(0, 0, 0, 1, 1, 98)
    // *     returns 6: 883612800 
    // *     example 7: mktime(23, 59, 59, 13, 0, 2010)
    // *     returns 7: 1293839999
    // *     example 8: mktime(0, 0, -1, 1, 1, 1970)
    // *     returns 8: -1
    var d = new Date(),
        r = arguments,
        i = 0,
        e = ['Hours', 'Minutes', 'Seconds', 'Month', 'Date', 'FullYear'];
 
    for (i = 0; i < e.length; i++) {
        if (typeof r[i] === 'undefined') {
            r[i] = d['get' + e[i]]();
            r[i] += (i === 3); // +1 to fix JS months.
        } else {
            r[i] = parseInt(r[i], 10);
            if (isNaN(r[i])) {
                return false;
            }
        }
    }
 
    // Map years 0-69 to 2000-2069 and years 70-100 to 1970-2000.
    r[5] += (r[5] >= 0 ? (r[5] <= 69 ? 2e3 : (r[5] <= 100 ? 1900 : 0)) : 0);
 
    // Set year, month (-1 to fix JS months), and date.
    // !This must come before the call to setHours!
    d.setFullYear(r[5], r[3] - 1, r[4]);
 
    // Set hours, minutes, and seconds.
    d.setHours(r[0], r[1], r[2]);
 
    // Divide milliseconds by 1000 to return seconds and drop decimal.
    // Add 1 second if negative or it'll be off from PHP by 1 second.
    return (d.getTime() / 1e3 >> 0) - (d.getTime() < 0);

}
</script>


