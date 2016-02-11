<?php 
session_start();
include_once ('inicios.php');
?>
<!DOCTYPE html>

<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title>AXA Assistance</title>

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

<!-- emergente -->
<div class="fondo-emergente" style="display:none">
<div class="contenedoremergente">

	
    <div id="tabla_schengen">
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUR / 50.000 CHF en Suiza</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUR / 50.000 CHF en Suiza</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">150 EUR</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico local (ordenado por un Médico)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">3.000 EUR</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substitución</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Indemnización por perdida de equipaje complementaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Compensación por demora de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte público</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Coordinación compra y envío de flores y chocolates</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Información de eventos y espectáculos culturales en las principales ciudades del mundo</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Recordación de 3 fechas importantes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelación o interrupción de viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">-</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 EUR</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *    PAÍSES TERRITORIO SCHENGEN - Excepto el país de residencia * * *</td>
  			</tr>
 
	</table>
    
		<div class="titulo_emergente">
    		<p>NUEVO PRODUCTO SCHENGEN</p>
    	</div>

		<div class="titulo_emergente">
    		<p>TARIFAS POR DIAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">5</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">22</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">38</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">42</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">51</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">60</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">70</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">79</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">102</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">119</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="600px">DIA ADICIONAL</td>
    			<td class="titulos_clasico_emergente" width="345px">3</td>
  			</tr>
      </table>
 
  </div> <!--contenido schengen-->


	<div id="tabla_america">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">AMÉRICA</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 7.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 7.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 100</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación Sanitaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 7.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">Máximo 1000 USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DÍA MÁXIMO 5 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DÍA MÁXIMO 5 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">UNA PERSONA</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 7.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 100</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">>USD 5.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte público</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Límite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA Y EUROPA * * *</td>
  			</tr>
 
	</table>
    
		<div class="titulo_emergente">
    		<p>AMERICA</p>
    	</div>

		<div class="titulo_emergente">
    		<p>TARIFAS POR DÍAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DÍAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">0 A 5</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">6 A 10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">55</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">11 A 15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">75</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">16 A 20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">103</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">21 A 30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">140</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">171</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">203</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">255</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">306</td>
  			</tr>
      </table>
 
  </div> <!--contenido america-->



	<div id="tabla_clasico">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">CLÁSICO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 20.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 20.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 400</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 160</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación Sanitaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 20.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 20.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Límite de edad</td>
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
    		<p>CRUCEROS Y DEPORTES TARIFAS POR DÍAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DÍAS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">185</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">230</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">290</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">350</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">MÁXIMO DOS PERSONAS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
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
    		<p>EUROPA Y RESTO DEL MUNDO TARIFAS POR DÍAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DÍAS</td>
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
  

	<div id="tabla_economico">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">TURISTA ECONÓMICO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación Sanitaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 10.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte público</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Límite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO EUROPA * * *</td>
  			</tr>
 
	</table>
    

		<div class="titulo_emergente">
    		<p>TURISTA ECONOMICO TARIFAS POR DÍAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DÍAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">0 A 5 </td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">38</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">6 A 10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">68</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">11 A 15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">88</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">16 A 20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">115</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">21 A 30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">128</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">158</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">210</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">245</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">315</td>
  			</tr>
      </table>
 
  </div> <!--contenido economico-->  


<div id="tabla_mundial">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">TURISTA MUNDIAL</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 75.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 75.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 2.500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 2.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación Sanitaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 75.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">150 USD POR DÍA MÁXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">150 USD POR DÍA MÁXIMO 10 DÍAS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 75.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Indemnización por perdida de equipaje complementaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 4.500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Compensación por demora de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 30.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">60 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRÁFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA Y EUROPA * * *</td>
  			</tr>
 
	</table>
    

		<div class="titulo_emergente">
    		<p>TURISTA MUNDIAL TARIFAS POR DIAS, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">0 A 5 </td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">140</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">6 A 10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">11 A 15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">280</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">16 A 20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">340</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">21 A 30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">390</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">405</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">750</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">930</td>
  			</tr>
             <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">110</td>
  			</tr>
      </table>
 
  </div> <!--contenido mundial-->  
  
 
 <div id="tabla_multiviajes">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">MULTIVIAJES</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 40.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 40.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 2.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 700</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 40.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalización</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">150 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">150 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">MAXIMO DOS PERSONAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">€ 30.000 / Resto del mundo USD 40.000</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30 ó 60 (365)</td>
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
    		<p>MULTIVIAJES, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">MAX 30 DIAS POR CADA VIAJE AL AÑO</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">195</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">MAX 60 DIAS POR CADA VIAJE AL AÑO</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">295</td>
  			</tr>
      </table>
 
  </div> <!--contenido multiviajes-->  

 
  
  <div id="tabla_larga">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">LARGA ESTADIA</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 5.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">365 días</td>

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
    		<p>LARGA ESTADIA, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">270</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">120</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">320</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">150</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">390</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">180</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">460</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">210</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">550</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">240</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">600</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">270</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">680</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">300</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">750</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">330</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">840</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">360</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">900</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Dia adicional</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">3</td>
  			</tr>


      </table>
 
  </div> <!--contenido larga-->    
  
  <div id="tabla_estudiantil">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">ESTUDIANTIL</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 50.000 </td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 50.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 400</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 50.000 </td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">MAXIMO DOS PERSONAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 50.000 </td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substitución</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 200</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Búsqueda y localización de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 5.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">365 días</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">45 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
	</table>
    
<div class="vacio"> </div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">230</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">120</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">260</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">150</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">310</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">180</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">365</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">210</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">430</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">240</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">510</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">270</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">560</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">300</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">620</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">330</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">680</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">365</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">735</td>
  			</tr>


      </table>
 
  </div> <!--contenido ESTUDIANTIL-->  


  <div id="tabla_golden">
		<div class="titulo_emergente">
    		<p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
    	</div>
        <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
    			<td class="titulos_clasico_emergente" width="345px">GOLDEN BASIC</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Accidente</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Asistencia Médica por Enfermedad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUROS / Resto del Mundo U$D 15.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmacéuticos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.00</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontológicos</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación Sanitaria</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslado Médico (al centro hospitalario mas cercano)</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO en el monto máximo global</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADO</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">MAXIMO DOS PERSONAS</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Repatriación por fallecimiento ó Entierro local</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">INCLUIDO en el monto máximo global</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Indemnización por perdida de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Compensación por demora de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">USD 300</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Búsqueda y localización de equipaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelación o interrupción de viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
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
    			<td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">--</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Máximo de días por viaje</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">90 días</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">De 65 a 85 años</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Cobertura geográfica</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">Todo el mundo excepto Colombia.</td>
  			</tr>
            <tr>
    			<td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA * * *</td>
  			</tr>
 
	</table>
    

		<div class="titulo_emergente">
    		<p>LARGA ESTADIA, VALOR EXPRESADO EN DOLARES</p>
    	</div>

    <table class="tabla_emergente" width="950" border="1">
  			<tr>
    			<td class="titulos_clasico_emergente" width="600px">DIAS</td>
    			<td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
  			</tr>
  			<tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">5</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">70</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">10</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">110</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">15</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">165</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">20</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">220</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">30</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">330</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">45</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">360</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">60</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">480</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">75</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">600</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">90</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">720</td>
  			</tr>
            <tr>
    			<td class="tabla_arriba_blanco_emergente" width="600px">Dia Adicional</td>
    			<td class="tabla_arriba_blanco_emergente" width="345px">10</td>
  			</tr>


      </table>
 
  </div> <!--contenido gold-->  
 
      
<div class="vacio"> </div>

</div>

<div id="cerrar">
</div> <!-- cerrar -->

</div>
<!-- emergente -->

<header>
	<div id="logo"> <a href="index.php"><img src="images/layout/logo.png" /></a>
    </div>
    <div id="copy_home">
    	<h1>
        	<p class="copy_grande">Escoge la opción que m&aacute;s se acerca a lo que deseas.</p>
            <p class="copy_peque">Adquiere tu tarjeta de asistencia en 3 simples pasos. ¡te tomar&aacute; menos de 5 minutos!</p>
        </h1>
    </div>
</header>


<section class="contenedor_contenido">
	<table width="890" border="1">
  <tr>
    <td width="98px" class="tabla_arriba_azul">Plan</td>
    <td  width="196px" colspan="2" class="tabla_arriba_azul"><table width="196" border="1">
  <tr>
    <td class="tabla_arriba_azul_dentro">Coberturas</td>
  </tr>
  <tr>
    <td><table width="199" border="1">
  <tr>
    <td width="81px" class="tabla_arriba_azul_dentro">Europa</td>
    <td width="117px" class="tabla_arriba_azul_dentro">Resto del Mundo</td>
  </tr>
</table>
</td>
  </tr>
</table>
</td>
    <td width="98px"  class="tabla_arriba_azul">Duraci&oacute;n M&iacute;nima</td>
    <td width="98px"  class="tabla_arriba_azul">M&aacute;ximo de D&iacute;as por Viaje</td>
    <td width="98px"  class="tabla_arriba_azul">Edad Permitida</td>
    <td width="98px"  class="tabla_arriba_azul">Costo M&iacute;nimo por D&iacute;a*</td>
    <td width="98px"  class="tabla_arriba_azul">Destinos</td>
    <td width="98px"  class="tabla_arriba_azul">Compra</td>
  </tr>
  <tr id="schengen">
    <td width="117px" class="tabla_arriba_gris">Schengen Básico</td>
    <td width="81px" class="tabla_arriba_blanco">€ 30.000</td>
    <td class="tabla_arriba_blanco">-</td>
    <td class="tabla_arriba_blanco">2 dias </td>
    <td class="tabla_arriba_blanco">90 dias</td>
    <td class="tabla_arriba_blanco">65 años</td>
    <td class="tabla_arriba_blanco">1,3 USD </td>
    <td class="tabla_arriba_blanco">Paises tratado schengen</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=12">Comprar</a></td>
  </tr>
  <tr id="america">
    <td  class="tabla_arriba_gris">América</td>
    <td class="tabla_arriba_blanco">-</td>
    <td class="tabla_arriba_blanco">USD 7.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 3,38</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia y Europa</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=1">Comprar</a></td>
  </tr>
  <tr id="clasico">
    <td class="tabla_arriba_gris">Cl&aacute;sico</td>
    <td class="tabla_arriba_blanco">€ 30.000</td>
    <td class="tabla_arriba_blanco">USD 20.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 3,83</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=4">Comprar</a></td>
  </tr>
  <tr id="europa">
    <td  class="tabla_arriba_gris">Europa</td>
    <td class="tabla_arriba_blanco">€ 40.000</td>
    <td class="tabla_arriba_blanco">USD 55.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 4,22</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=7">Comprar</a></td>
  </tr>
  <tr id="economico">
    <td  class="tabla_arriba_gris">Turista Econ&oacute;mico</td>
    <td class="tabla_arriba_blanco">-</td>
    <td class="tabla_arriba_blanco">USD 15.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 3,27</td>
    <td class="tabla_arriba_blanco">Todos menos Europa</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=5">Comprar</a></td>
  </tr>
  <tr id="mundial">
    <td  class="tabla_arriba_gris">Turista Mundial</td>
    <td class="tabla_arriba_blanco">-</td>
    <td class="tabla_arriba_blanco">USD 75.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">60 Años</td>
    <td class="tabla_arriba_blanco">USD 9,00</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia y Europa</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=6">Comprar</a></td>
  </tr>
  <tr id="multiviajes">
    <td  class="tabla_arriba_gris">Multiviajes</td>
    <td class="tabla_arriba_blanco">€ 30.000</td>
    <td class="tabla_arriba_blanco">USD 40.000</td>
    <td class="tabla_arriba_blanco">365 D&iacute;as</td>
    <td class="tabla_arriba_blanco">30 / 60 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 0,82</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="#inline1" id="various1">Comprar</a></td>
  </tr>
  <tr id="larga">
    <td  class="tabla_arriba_gris">Larga Estad&iacute;a</td>
    <td class="tabla_arriba_blanco">€ 40.000</td>
    <td class="tabla_arriba_blanco">USD 55.000</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">365 D&iacute;as</td>
    <td class="tabla_arriba_blanco">65 Años</td>
    <td class="tabla_arriba_blanco">USD 2,47</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=3">Comprar</a></td>
  </tr>
  <tr id="estudiantil">
    <td  class="tabla_arriba_gris">Estudiantil</td>
    <td class="tabla_arriba_blanco">€ 30.000</td>
    <td class="tabla_arriba_blanco">USD 50.000</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">365 D&iacute;as</td>
    <td class="tabla_arriba_blanco">45 Años</td>
    <td class="tabla_arriba_blanco">USD 2,01</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=9">Comprar</a></td>
  </tr>
  <tr id="golden">
    <td  class="tabla_arriba_gris">Golden</td>
    <td class="tabla_arriba_blanco">€ 30.000</td>
    <td class="tabla_arriba_blanco">USD 15.000</td>
    <td class="tabla_arriba_blanco">2 D&iacute;as</td>
    <td class="tabla_arriba_blanco">90 D&iacute;as</td>
    <td class="tabla_arriba_blanco">De 65 a 85 Años</td>
    <td class="tabla_arriba_blanco">USD 8,00</td>
    <td class="tabla_arriba_blanco">Todos menos Colombia</td>
    <td class="tabla_arriba_blanco"><a class="compras" href="index2.php?idplan=8">Comprar</a></td>
  </tr>
</table>
	
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
