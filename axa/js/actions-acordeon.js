/* Jose Montenegro */

$(document).ready(function () {
	


/* ------------- Acordeon -------------------------*/

$("#header_acordeon1").click(function () {
	$(this).css('color', '#FF0000');
	$("li#acordeon1").animate({height: '410'}, 500);
	$("li#acordeon1").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
	$("li#acordeon2").animate({height: '41'}, 500);
	$("li#acordeon3").animate({height: '41'}, 500);
	$("li#acordeon4").animate({height: '41'}, 500);
	$("li#acordeon2, li#acordeon3, li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon.png)');
	$("#header_acordeon2, #header_acordeon3, #header_acordeon4").css('color', '#666');


});

	

$(".bandera").click(function () {
	$(".contenedor_banderas_grande").css('background','#CCC');
	$(this).parent().parent(".contenedor_banderas_grande").css('background','#666666');
	$('#listo1').css('display','block');
	

		if($('#listo1').css('display','block')){
		$("li#acordeon1").animate({height: '41'}, 500);
		$("li#acordeon2").animate({height: '460'}, 500);
		$("#header_acordeon1").css('color', '#666');
		$("li#acordeon1").css('background-image', 'url(images/layout/fondo_acordeon.png)');
		$("li#acordeon2").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
		$("#header_acordeon2").css('color', '#FF0000');
			
			$("#header_acordeon2").click(function () {
				
				$(this).css('color', '#FF0000');
				$("li#acordeon2").animate({height: '460'}, 500);
				$("li#acordeon2").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
				$("li#acordeon1").animate({height: '41'}, 500);
				$("li#acordeon3").animate({height: '41'}, 500);
				$("li#acordeon4").animate({height: '41'}, 500);
				$("li#acordeon1, li#acordeon3, li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon.png)');
				$("#header_acordeon1, #header_acordeon3, #header_acordeon4").css('color', '#666');

});
}

});

$(".boton_siguiente1").click(function () {
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
							var url2 = 'php/action/valorPlan.php';
							var datos = new Array();
							datos[0] = document.getElementById('hddidplan').value;
							datos[1] = diasviaje;
							var consult2 = consulta(url2,datos);
							consult2 = consult2.split(',');
							if (consult2.length==1)
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
							}
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

$(".numero").click(function () {
	$(".contenedor_numeros_grande ").css('background','#CCC');
	$(this).parent().parent(".contenedor_numeros_grande").css('background','#666666');
	$('#listo3').css('display','block');
	

		if($('#listo3').css('display','block')){
		$("li#acordeon3").animate({height: '41'}, 500)
		$("li#acordeon4").animate({height: '410'}, 500);
		$("#header_acordeon3").css('color', '#666');
		$("li#acordeon3").css('background-image', 'url(images/layout/fondo_acordeon.png)');
		$("li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
		$("#header_acordeon4").css('color', '#FF0000');
			
			$("#header_acordeon4").click(function () {

				$(this).css('color', '#FF0000');
				$("li#acordeon4").animate({height: '410'}, 500);
				$("li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon_activo.png)');
				$("li#acordeon1").animate({height: '41'}, 500);
				$("li#acordeon2").animate({height: '41'}, 500);
				$("li#acordeon3").animate({height: '41'}, 500);
				$("li#acordeon1, li#acordeon2, li#acordeon3").css('background-image', 'url(images/layout/fondo_acordeon.png)');
				$("#header_acordeon1, #header_acordeon2, #header_acordeon3").css('color', '#666');
	
			});
			
		}

});

$(".boton_siguiente2").click(function () {
	var form = document.getElementById('frm_pasajeros');
	var cantidadactual = form.length;
	cantidad = parseInt(cantidadactual-1);
	cantidad = parseInt(cantidad/6);
	var envio;
	edad = new Array();
	for (k=1;k<=cantidad;k++)
		{
			edad[k] = new Array();
			if (document.getElementById('ano'+k).value == 'aaaa')
			{
				envio = false;
				document.getElementById('ano'+k).focus();
			}
			else
				{
					edad[k][0]  = document.getElementById('ano'+k).value;
					
					
				}
			if (document.getElementById('mes'+k).value == 'mm')
			{
				envio = false;
				document.getElementById('mes'+k).focus();	
			}
			else
				{
					edad[k][1] = document.getElementById('mes'+k).value;
					
				}
			if (document.getElementById('dia'+k).value == 'dd')
			{
				envio = false;
				document.getElementById('dia'+k).focus();		
			}
			else
				{
					edad[k][2] = document.getElementById('dia'+k).value;
					
				}
			if (document.getElementById('documento'+k).value == 'Documento de Identidad')
			{
				envio = false;
				document.getElementById('documento'+k).focus();			
			}
			
			if (document.getElementById('apellido'+k).value == 'Apellidos')
			{
				envio = false;	
				document.getElementById('apellido'+k).focus();			
			}
			
			if (document.getElementById('nombre'+k).value == 'Nombre Completo')
			{
				envio = false;
				document.getElementById('nombre'+k).focus();
			}
			
		}
	if (envio == false)
	{
		alert ('Debe completar todos los campos')	;
	}
	else
	{
		for (s=1;s<(edad.length);s++)
		{
			var calculaedad = displayage(edad[s][0], edad[s][1]-1, edad[s][2], "years", 0, "roundup");
			//if (calculaedad < edadmax  || calculaedad == edadmax &&  calculaedad > edadmin || calculaedad == edadmin )
			if (calculaedad >= edadmin && calculaedad <= edadmax)
			{
				cumpleedad = true;	
			}
			else
			{
				/*if ( confirm('El pasajero en la fila '+ s+' no cumple con la restricci\u00f3n de edad del plan. Deseas cambiarle el plan a esta persona? '))
				{*/
					alert ('El usuario en la fila '+ s+' no cumple con la edad para este plan. La edad debe estar entre '+ edadmin +' y '+edadmax+' a\u00f1os.');		
				/*}
				else
				{
					alert ('El usuario en la fila '+ s+' no cumple con la edad para este plan. La edad debe estar entre '+ edadmin +' y '+edadmax+' a\u00f1os.');
				}*/
				
				cumpleedad = false;
				document.getElementById('nombre'+s).focus();
				break;
			}
		}
		if (cumpleedad == true)
		{
			$('#completo').html('Completo');
			$('#listo4').css('display','block');
			$("li#acordeon4").animate({height: '41'}, 500);
			$("#header_acordeon4").css('color', '#666');
			$("li#acordeon4").css('background-image', 'url(images/layout/fondo_acordeon.png)');
			$("#contenedor_factura").fadeIn("slow");
			$("li#acordeon1, li#acordeon2, li#acordeon3, li#acordeon3").css('background-image', 'url(images/layout/fondo_acordeon.png)');
		}
	}
	
});


});

/* Jose Montenegro */

var one_day = 1000 * 60 * 60 * 24;
var one_month = 1000 * 60 * 60 * 24 * 30;
var one_year = 1000 * 60 * 60 * 24 * 30 * 12;

function displayage(yr, mon, day, unit, decimal, round) {
    today = new Date();
    var pastdate = new Date(yr, mon , day);

    var countunit = unit;
    var decimals = decimal;
    var rounding = round;

    finalunit = (countunit == "days") ? one_day : (countunit == "months") ? one_month : one_year;
    decimals = (decimals <= 0) ? 1 : decimals * 10;

    if (unit != "years") {
        if (rounding == "rounddown") {
            //document.write(Math.floor((today.getTime() - pastdate.getTime()) / (finalunit) * decimals) / decimals + " " + countunit);
            return (Math.floor((today.getTime() - pastdate.getTime()) / (finalunit) * decimals) / decimals);
        }
        else {
            //document.write(Math.ceil((today.getTime() - pastdate.getTime()) / (finalunit) * decimals) / decimals + " " + countunit);
            return (Math.ceil((today.getTime() - pastdate.getTime()) / (finalunit) * decimals) / decimals);
        }
    }
    else {
        yearspast = today.getFullYear() - yr - 1;
        tail = (today.getMonth() > mon - 1 || today.getMonth() == mon - 1 && today.getDate() >= day) ? 1 : 0;
        pastdate.setFullYear(today.getFullYear());
        pastdate2 = new Date(today.getFullYear() - 1, mon - 1, day);
        tail = (tail == 1) ? tail + Math.floor((today.getTime() - pastdate.getTime()) / (finalunit) * decimals) / decimals : Math.floor((today.getTime() - pastdate2.getTime()) / (finalunit) * decimals) / decimals;
        //document.write(yearspast + tail + " " + countunit);
        return (yearspast + tail);
    }
}