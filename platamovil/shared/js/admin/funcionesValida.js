// JavaScript Document
function LimitAttach(control, mensaje1, mensaje2, formatos) {
	var campo = document.getElementById(control);
	file = campo.value;
	var extArray = formatos.split("|");
	allowSubmit = false;
	if (!file) {
		alert(mensaje1);
		return false;
	}
	while (file.indexOf("\\") != -1)
		file = file.slice(file.indexOf("\\") + 1);
	ext = file.slice(file.indexOf(".")).toLowerCase();
	for ( var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) {
			allowSubmit = true;
			break;
		}
	}
	if (allowSubmit == false) {
		campo.value = "";
		alert(mensaje2);
		return false;
	}
	return true;
}

function textCounter(control, maxlimit, mensaje) {
	if ( $('#' + control).val().length > maxlimit) {
		$('#' + control).val( $('#' + control).val().substring(0, maxlimit) );
		alert(mensaje);
		return false;
	}
	return true;
}

function valmail(control, mensaje) {
	var campo = document.getElementById(control);
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(campo.value) || campo.value == '') {
		return true;
	} else {
		alert(mensaje);
		campo.value = "";
		campo.focus();
		return false;
	}
}

function validarNumero(control, mensaje) {
	if ( isNaN( $('#' + control).val() ) ) {
		alert(mensaje);
		$('#' + control).val('');
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarSelec(control, mensaje) {
	if ( $('#' + control).val() == "N") {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarTextoDefecto(control, mensaje, defecto) {
	if ( $('#' + control).val() == "" || $('#' + control).val() == defecto) {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarTexto(control, mensaje) {
	if ( $('#' + control).val() == "") {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarRadio(control, mensaje) {
	var campo = document.getElementById(control);
	var cuantos;

	cuantos = false;
	for (i = 0; i < campos.length; i++) {
		var cual = "document.formulario." + control + "[" + i + "].checked";
		if (eval(cual))
			cuantos = true;
	}
	if (cuantos == false) {
		alert(mensaje);
		var foco = "document.formulario." + control + "[0].focus()";
		eval(foco)
		return false;
	}
	
	return true;
}

function ValidarFormato(control, mensaje1, mensaje2) {
	var campo = document.getElementById(control);
	var Fecha = new String(campo.value)
	var ini = new String(Fecha.substring(0, Fecha.indexOf("-")))
	var fin = new String(Fecha.substring(Fecha.lastIndexOf("-") + 1,
			Fecha.length))
	//09/09/09-08/08/08

	var filter = /^([0-9])+\/([0-9])+\/([0-9])+$/;
	if (filter.test(eval(ini)) || eval(ini) == '') {
		if (filter.test(eval(fin)) || eval(fin) == '') {
			return true;
		} else {
			alert(mensaje1);
			campo.value = '';
			campo.focus();
			return false;
		}
	} else {
		alert(mensaje2);
		campo.value = '';
		campo.focus();
		return false;
	}
}

function passigual(control1, control2, mensaje) {
	if ( $('#' + control1).val() != $('#' + control2).val() ) {
		alert(mensaje);
		$('#' + control1).val('');
		$('#' + control2).val('');
		$('#' + control1).focus();
		return false
	}
	else
		return true
}

function NivelPassword(control1, control2, nivel) {
	if ( passwordLevel( $('#' + control1).val() ) < nivel ) {
		alert('El password es demasiado simple intentelo de nuevo');
		$('#' + control1).val('');
		$('#' + control2).val('');
		$('#' + control1).focus();
		return false;
	}
	else
		return true;
}

function passwordLevel(p) {
	l = 0;
	v1 = 'aeiou1234567890';
	v2 = 'AEIOUbcdfghjklmnpqrst';
	v3 = 'vxyzBCDFGHJKLMNPQRST';
	v4 = 'VXYZ$@#';
	for (i = 0; i < p.length; i++) {
		if (v1.indexOf(p[i]) != -1)
			l += 1;
		else if (v2.indexOf(p[i]) != -1)
			l += 2;
		else if (v3.indexOf(p[i]) != -1)
			l += 3;
		else if (v4.indexOf(p[i]) != -1)
			l += 4;
		else
			l += 5;
	}
	l *= 3;
	if (l > 100)
		l = 100;
	return l;
}

function validDate(id) {
	var elem = document.getElementById(id);
	var filter = /^[0-2][0-9][0-9][0-9]-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
	var s = elem.value;
	if (s.length == 0) {
		alert("Fecha no Valida");
		elem.value = ""
		elem.focus();
		return false;
	}
	if (filter.test(s))
		return true;
	else {
		alert("Fecha no Valida");
		elem.value = "";
		elem.focus();
		return false;
	}
}
function isEmailAddress(theElement, nombre_del_elemento) {
	var s = theElement.value;
	var filter = /^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/;
	if (s.length == 0)
		return true;
	if (filter.test(s))
		return true;
	else
		alert("Tu direccion de correo es invalida, ingresala nuevamente");
	theElement.focus();
	return false;
}

function inArray(vector, valor){
	for ( i=0; i<=vector.length; i++){
		if( vector[i] == valor ){
			return i;
		}
	}
	
	return -1;
}

function selectAll(control, clase){
	if ( $(control).is(':checked') == true ){
		$('.' + clase).attr('checked', true);
	}
	else{
		$('.' + clase).attr('checked', false);
	}
}