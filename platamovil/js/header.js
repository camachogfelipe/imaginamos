// JavaScript Document
$(document).ready(function() {
	
		var seccion = getUrlVars()["v"];
		
		var valor = seccion;
		var cabecera;
		var titulo;
		if (valor == "empresa"){
			cabecera="#cabecera2";
			titulo="#titulo2";
		}
		else if (valor == "comercio"){
			cabecera="#cabecera1";
			titulo="#titulo1";
		}
		else if (valor == "persona"){
			cabecera="#cabecera3";
			titulo="#titulo3";
		}
		else if (valor == "index"){
			$('.headerToCloseComercioWrapper').css('height', 0)
			cabecera="";
			titulo="";
		}
		$('#titulo1, #titulo2, #titulo3').css({display: 'none'});
		$('#cabecera1, #cabecera2, #cabecera3').css({display: 'none'});
		
		$(cabecera).css({display: 'block'});
		$(titulo).css({display: 'block'});

		
		//document.getElementById(cabecera).style.opacity="100";	
		//document.getElementById(titulo).style.opacity="100";
			
	//cerrando el banner
	var normalHeight = $(".headerToCloseComercioWrapper").height();
	var isClose = 0;
	$('#titulo1, #titulo2, #titulo3').click(function() {
		if(isClose == 0){
			$('.headerToCloseComercioWrapper').animate({ height: '0'}, {  duration: 700, complete:  function() { isClose = 1; } });
		}else if(isClose== 1){
			$('.headerToCloseComercioWrapper').animate({ height: normalHeight}, {  duration: 700, complete:  function() { isClose = 0; } });
			
		}
	});
  	setTimeout(function() {
		//$(".headerToCloseComercioWrapper").animate({height:  0 }, 700 );
		$('.headerToCloseComercioWrapper').animate({ height: '0'}, {  duration: 700, complete:  function() { isClose = 1; } });
	 }, 2000);
	
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}

		
})