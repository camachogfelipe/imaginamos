function confirmar(dir, element){
	var confirmar
	confirmar=confirm("Estas seguro que deseas eliminar ese "+element+"?");
	
	if (confirmar)
		window.location.href=dir;
	else
		return
}

function confirmarGen(dir, sms){
	var confirmar
	confirmar=confirm(sms+"?");

	if (confirmar)
		window.location.href=dir;
	else
		return
}


function confirmarForm(id, element){
	var confirmar
	confirmar=confirm("Estas seguro que deseas eliminar ese "+element+"?");
	
	if (confirmar)
		document.getElementById(id).submit()
	else
		return
}

