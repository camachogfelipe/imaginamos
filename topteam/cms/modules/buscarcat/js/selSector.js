$(function() {
		
		var id = $("#tselectCity").find(':selected').val();
			
		alert(id);
		
		$.get('tabladatosRP.php', { id: id } , function(resultado) { 
			$('#tselectSector').empty().html(resultado); 
		});
		
		/*
		$.get('tabladatosRP.php', { id: id } , function(resultado) { 
			$('#tablaselect').empty().html(resultado); 
		});
  
		
		$("#tiposelect").change(function(event){
			var id = $("#tiposelect").find(':selected').val();
			//alert(id);
			$.get('tabladatosRP.php', { id: id } , function(resultado) { 
				$('#tablaselect').empty().html(resultado);
			});
		});
		
		
		var id2 = $("#tiposelect2").find(':selected').val();
			
		//alert(id);
		
		
		$.get('tabladatosRP.php', { id: id2 } , function(resultado) { 
			$('#tablaselect2').empty().html(resultado); 
		});
  
		
		$("#tiposelect2").change(function(event){
			var id2 = $("#tiposelect2").find(':selected').val();
			//alert(id);
			$.get('tabladatosRP.php', { id: id2 } , function(resultado) { 
				$('#tablaselect2').empty().html(resultado);
			});
		});
		
		
		
		
		var cssObj = {
		'width':'233px',
		'height':'60px',
		'background-image': 'url(imagenes/tiposCuentaSimplificada.png)',
		'background-repeat': 'no-repeat',
		'display':'block'
		}
		
		var cssObj2 = {
		'width':'233px',
		'height':'60px',
		'background-image': 'url(imagenes/tiposCuentaTipica.png)',
		'background-repeat': 'no-repeat',
		'display':'block'
		}
		
		
		
		$(".tab-txt9 a:first")
		.empty()
        .css(cssObj)
		.hover(
		  function () {
			$(this).addClass("sobre");
		  },
		  function () {
			$(this).removeClass("sobre");
		  });
	
		$(".tab-txt9 a:last")
		.empty()
        .css(cssObj2)
        .hover(
		  function () {
			$(this).addClass("sobre");
		  },
		  function () {
			$(this).removeClass("sobre");
		  });
		*/
	});