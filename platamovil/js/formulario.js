// JavaScript Document
		function mostrar(){
			$("#cliente").css('visibility', 'visible')
			$("#cliente").css('display', 'block');	
		}
		function ocultar(){
			$("#cliente").css('visibility', 'hidden')
			$("#cliente").css('display', 'none');	
		}
		
		function mostrar2(){
			$("#num-cel").css('display', 'block');	
			$("#documento").css('display', 'none');	
			$('#infoProd').css('display', 'none');	
			$('#regimen').css('display', 'none');	
			$('#infoCuenta').css('display', 'none');	
		}
		function ocultar2(){
			$("#num-cel").css('display', 'none');	
			$("#documento").css('display', 'none');	
			$('#infoProd').css('display', 'none');	
			$('#regimen').css('display', 'none');
			$('#infoCuenta').css('display', 'none');
		}
		
		function mostrar3(){
			$("#num-cel").css('display', 'none');	
			$("#documento").css('display', 'none');
			$('#infoProd').css('display', 'none');	
			$('#regimen').css('display', 'block');	
			$('#infoCuenta').css('display', 'none');
		}
		function mostrar4(){
			$('#infoProd').css('display', 'block');	
			$("#documento").css('display', 'none');	
			$('#regimen').css('display', 'none');	
		}
		function mostrar5(){
			$('#infoCuenta').css('display', 'block');	
			$('#infoProd').css('display', 'none');	
			$("#documento").css('display', 'none');	
			$('#regimen').css('display', 'none');	
		}
