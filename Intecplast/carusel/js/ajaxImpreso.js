function objetoAjax(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}

function mostrarImpreso(datos){
        divResultado = document.getElementById('impNota');
        ajax=objetoAjax();
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
						$("#impreso_secciones").removeClass("selected")
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function cambiarClass(seleccionado)
{
	var lista = new Array('TemaDelDia','Politica','Cultura','Nacional','Vivir','Deportes','Judicial','Negocios','Internacional','Bogota','Gente','UnChatCon');
	
	for(i = 0; i < lista.length ; i++ )
	{
		$("#li"+lista[i]).removeClass("selected");	
	}
		
	
	$("#"+seleccionado).addClass("selected");
}