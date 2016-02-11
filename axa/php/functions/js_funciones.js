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
					alert ('Se ha grabado la reserva del plan, para completar el proceso te enviaremos a la pagina de pagosonline.net')
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