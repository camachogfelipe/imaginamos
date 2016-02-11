<?php 
session_start();
$uniqidcompra = uniqid();
$uniqid = rand(0,2000);
if (!isset($_SESSION['user']))
{
	$_SESSION['user'] = serialize($uniqid);
}
if (!isset($_SESSION['refcompra']))
{
	$_SESSION['refcompra'] = serialize($uniqidcompra.$uniqid);
}
include_once ('inicios.php');

$idplan = 7;
$planEuropa = $planDAO->getPlan($idplan);

$idplan = 4;
$planClasico = $planDAO->getPlan($idplan);
?>
<!DOCTYPE html>

<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<title>AXA</title>

<meta name="description" content=" Encuentra los puntos Wifi ETB más cercanos y navega desde cualquier sitio. ">

<meta name="keywords" content=" wifi, zonas, etb, internet, sin cables, navega, mapa, velocidad, sitio, conectate, ciudad, navegacion, puntos, direccion" >

<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/emergentes.css" rel="stylesheet" type="text/css" media="all"/>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/actions-botones.js" type="text/javascript"></script>
    <script src="js/chat.js" type="text/javascript"></script>
    <script src="js/mapa_pop.js" type="text/javascript"></script>
<?php include ('analytics.php');?>
</head>

<body>

<!-- emergente -->
<div class="fondo-emergente" style="display:none">
<div class="contenedoremergente">

	<div id="tabla_clasico">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">CRUCEROS Y DEPORTES</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 160</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substitución</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Indemnización por perdida de equipaje complementaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Compensación por demora de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte público</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 20.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Coordinación compra y envío de flores y chocolates</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">COSTO BENEFICIO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Información de eventos y espectáculos culturales en las principales ciudades del mundo</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Recordación de 3 fechas importantes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelación o interrupción de viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">90</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA * * *</td>
  			</tr>
 
	</table>
    
		<div class="titulo_emergente">
    		<p>Deportes cubiertos SKI, SURF, BUCEO</p>
    	</div>

		<div class="titulo_emergente">
    		<p>CRUCEROS Y DEPORTES TARIFAS POR DIAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">5</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">40</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">68</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">88</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">120</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">130</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">180</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">230</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">280</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">330</td>
  			</tr>
      </table>
 
  </div> <!--contenido clasico-->
  
  
  	<div id="tabla_europa">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">EUROPA Y RESTO DEL MUNDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">MAXIMO DOS PERSONAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substitución</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Indemnización por perdida de equipaje complementaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Compensación por demora de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 5.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte público</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 20.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Coordinación compra y envío de flores y chocolates</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">COSTO BENEFICIO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Información de eventos y espectáculos culturales en las principales ciudades del mundo</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Recordación de 3 fechas importantes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelación o interrupción de viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">90</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA * * *</td>
  			</tr>
 
	</table>

		<div class="titulo_emergente">
    		<p>EUROPA Y RESTO DEL MUNDO TARIFAS POR DIAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">0 A 5 </td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">50</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">6 A 10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">90</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">11 A 15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">110</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">16 A 20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">130</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">21 A 30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">140</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">200</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">260</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">320</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">380</td>
  			</tr>
      </table>
 
  </div> <!--contenido EUROPA-->
  
  
      
<div class="vacio"> </div>

</div>

<div id="cerrar">
</div> <!-- cerrar -->

</div>
<!-- emergente -->


<header>
	<div id="logo">
    	<img src="images/layout/logo.png" />
    </div>
    <div id="copy_home">
    	<h1>
        	<p class="copy_grande">Cumple con los requisitos para tu visita Schengen.</p>
            <p class="copy_peque">Adquiere tu tarjeta de asistencia en 3 simples pasos. &iexcl;te tomar&aacute; menos de 5 minutos!</p>
        </h1>
    </div>
</header>


<section class="contenedor_contenido_home">
	<div class="header_contenidos">
    		<img src="images/direct/uno.png" />
            <p class="header_contenidos_copy">Selecciona tu plan:</p>
    </div>
    <div class="planes1">
    	<div class="contenedor_planes">
        	<div class="plan1">
            	<p class="titulo_planes1">Plan <?php echo $planClasico->getDescripciontbl_plan();?></p>
                <p class="copy_contenidos_grande">Desde  $3.83 USD<br />Cobertura &euro;30.000</p>
                <p class="copy_contenidos_peque">Cumple los requisitos de manera econ&oacute;mica</p>
                <a href="#" class="link_peque">» M&aacute;s informaci&oacute;n</a> <br />
                <a href="index2.php?idplan=<?php echo $planClasico->getIdtbl_plan()?>" class="link_grande">» Comprar</a>
            </div>
        </div>
    </div>

    <div class="planes2">
    	<div class="contenedor_planes">
        	<div class="plan2">
            	<p class="titulo_planes2">Plan <?php echo $planEuropa->getDescripciontbl_plan()?></p>
                <p class="copy_contenidos_grande">Desde  $4.22 USD<br />Cobertura &euro;40.000</p>
                <p class="copy_contenidos_peque">Obt&eacute;n la mayor seguridad en tu viaje a Europa</p>
                <a href="#" class="link_peque">» M&aacute;s informaci&oacute;n</a> <br />
                <a href="index2.php?idplan=<?php echo $planEuropa->getIdtbl_plan()?>" class="link_grande">» Comprar</a>
            </div>            
            </div>
        </div>
    </div>    
    </div> 
    
</section>

<section class="contenedor_bordes">
    <p class="copy_contenidos_grande_rojo">No viajas a Europa?</p> <br />
    <a href="index5.php" class="link_peque_azul">» Otros planes</a>
</section>
<?php 
include ('footer.php');
?>

</body>

</html>