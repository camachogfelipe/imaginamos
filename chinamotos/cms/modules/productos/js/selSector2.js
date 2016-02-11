$(function() {
		
		var id = $("#tselectCity").find(':selected').val();
			
		//alert(id);
		
		$.get('tabladatosRPS.php', { id: id } , function(resultado) { 
			$('#tselectSector').empty().html(resultado); 
		});
		
		
		
		$("#tselectCity").change(function(event){
			var id = $("#tselectCity").find(':selected').val();
			//alert(id);
			$.get('tabladatosRPS.php', { id: id } , function(resultado) { 
				$('#tselectSector').empty().html(resultado);
			});
		});
		
		$('#msjnprodinclud2').empty();
		
		var add = 0;
		$(".amt2").each(function() {
			add += Number(1);
		});
		$('#nprodinclud2').html(add);

		if(add >= 9){
		$('#botonGProm').hide();
		$('#msjnprodinclud2').empty().html("Ya seleccion&oacute; el m&aacute;ximo numero de productos que puede incluir");
		}
		
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