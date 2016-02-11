jQuery.fn.extend({
	
	armarVector: function() {
		var vector = new Array();
		/*Recorre todos los elementos encapsulados*/
		$(this).each(function(){
			vector[ vector.length ] = $(this).val();
        });
		return vector;
	},
	
	armarVectorCheck: function() {
		var vector = new Array();
		/*Recorre todos los elementos encapsulados*/
		$(this).each(function(){
			if ( $(this).is(':checked') == true ){
				vector[ vector.length ] = $(this).val();
			}
        });
		return vector;
	}

});

jQuery.extend({
	
	ejecutar: function(rutaControlador, xdata) {
		$.ajax({
			type: "POST",
	        url: rutaControlador,
	        data: xdata,
	        success: function(data){
	           alert(data);
	        },
			error: function(jqXHR, textStatus, errorThrown){
				alert(jqXHR + "\n" + errorThrown);
	        }
		});
	},
	
	ejecutaToInner: function(rutaControlador, xdata, idControl) {
		$.ajax({
			type: "POST",
	        url: rutaControlador,
	        data: xdata,
	        success: function(data){
	           $('#' + idControl).html(data);
	        },
			error: function(jqXHR, textStatus, errorThrown){
				alert(jqXHR + "\n" + errorThrown);
	        }
		});
	}

});