<?php 
session_start();
include_once ('inicios.php');
if (isset ($_GET['idplan']))
{
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
    
<title>AXA Assistance</title>

<meta name="description" content="">

<meta name="keywords" content="" >

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
<?php 
include ('php/functions/js_funciones.js');
include ('analytics.php');
?>
	<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?qczQAReea4cKuZwYRSVNKkMNnxS9ZjH8';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

<!--End of Zopim Live Chat Script-->

$(document).ready(function(){
	
	
$(".boton_siguiente1_1").click(function () {
	var fecha_salida = document.getElementById('fecha_salida').value;
	var fecha_entrada = document.getElementById('fecha_llegada').value;
	
	if (fecha_salida != 'Fecha salida' && fecha_entrada != 'Fecha Llegada')
	{
			var fechaActual = new Date();
			var dia = fechaActual.getDate();
			var mes = fechaActual.getMonth()+1;
			var anno = fechaActual.getFullYear();
			arrfecha1 = fecha_salida.split('/');
			arrfecha2 = fecha_entrada.split('/');
			var dia1 = arrfecha1[0];
			var mes1 = arrfecha1[1];
			var ano1 = arrfecha1[2];
			var dia2 = arrfecha2[0];
			var mes2 = arrfecha2[1];
			var ano2 = arrfecha2[2];
			fecha1=new Date(ano1,mes1,dia1);
			fecha2=new Date(ano2,mes2,dia2);
			fechaA = new Date(anno,mes,dia);
			if (fecha1>=fechaA )
			{
				if (fecha2>=fechaA)
				{
					if(fecha2<=fecha1)
					{
						alert ('La fecha de salida: '+fecha_salida+' ,no puede ser mayor o igual a la fecha de llegada: '+fecha_entrada+ '. Seleccione nuevamente las fechas.');
					}
					else
						{
							var arrfecha1 = new Array();
							var arrfecha2 = new Array();
							arrfecha1 = fecha_salida.split('/');
							arrfecha2 = fecha_entrada.split('/');
							var dia1 = arrfecha1[0];
							var mes1 = arrfecha1[1];
							var ano1 = arrfecha1[2];
							var dia2 = arrfecha2[0];
							var mes2 = arrfecha2[1];
							var ano2 = arrfecha2[2];
							//var diasviaje = FechaDif(dia1,mes1,ano1,dia2,mes2,ano2);
							var diasviaje = DiferenciaFechas()
							var url2 = 'php/action/valorPlan_prueba.php';
							var datos = new Array();
							datos[0] = document.getElementById('hddidplan').value;
							datos[1] = diasviaje;
							var consult2 = consulta(url2,datos);alert (consult2)
							consult2 = consult2.split(',');
							/*if (consult2.length==1)
							{
								alert ('Los días permitidos para este plan son '+consult2+', haz seleccionado '+diasviaje+', cambia las fechas o verfica un plan que cumpla con tus días. ');
							}
							else
							{					
								$('#fecha').html('Salida: '+fecha_salida+'. Llegada: '+fecha_entrada);
								$('#listo2').css('display','block');
								if($('#listo2').css('display','block'))
								{
									$("li#acordeon2").animate({height: '41'}, 500);
									$("li#acordeon3").animate({height: '410'}, 500);
									$("#header_acordeon2").css('color', '#666');
									$("li#acordeon2").css('background-image', 'url(images/layout/fondo_acordeon.png)');
									$("li#acordeon3").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
									$("#header_acordeon3").css('color', '#FF0000');
									$("#header_acordeon3").click(function () {
									$(this).css('color', '#FF0000');
									$("li#acordeon3").animate({height: '410'}, 500);
									$("li#acordeon3").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
									$("li#acordeon1").animate({height: '41'}, 500);
									$("li#acordeon2").animate({height: '41'}, 500);
									$("li#acordeon4").animate({height: '41'}, 500);
									$("li#acordeon1, li#acordeon2, li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon.png)');
									$("#header_acordeon1, #header_acordeon2, #header_acordeon4").css('color', '#666');
									});
								}
							}*/
						}
				}
				else
				{
					alert ('La fecha de llegada: '+fecha_salida+', no puede ser menor que la fecha actual: '+anno+'/'+mes+'/'+dia)			
				}
			}
			else
			{
				alert ('La fecha de salida: '+fecha_salida+', no puede ser menor que la fecha actual: '+anno+'/'+mes+'/'+dia)	
			}
	}else
	 {
		 alert ('Por favor selecciona la fecha de salida y fecha de llegada antes de seguir al siguiente paso.');
	 }
});
})
</script>
</head>

<body>

<header>
	<div id="logo"> <a href="index.php"><img src="images/layout/logo.png" /></a>
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
                		<input class="boton_siguiente1_1" name="buttom1" type="button" value="Siguiente" />  
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
    	<p class="condiciones_peque">* El cambio de d&oacute;lares a pesos se realiza en funcion de la tasa IATA de cada semana.</p>
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

$llave_encripcion = "137e2eab080";//"12ce183d5bc";//"1111111111111111";llave de encripción que se usa para generar la fima
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
