jQuery(document).ready(
	
/**otros planes**/



function() {
	

$('.custom-options-otros li').css({width: '488px'});

var ulotros="";

      $("#Inicio_idOtros option").each(function(){
	  		  	  
        ulotros +="<li value="+$(this).attr('value')+">"+ $(this).text() + "</li>";
		 
      });
	  
	  	$('#Inicio_idOtros').css('display','none');
				
		$('#Inicio_idOtros').parent().prepend("<ul class='custom-options-otros'>" + ulotros + "</ul>");
		$('#Inicio_idOtros').parent().prepend("<div class='custom-select-otros'></div>");
		$('div.custom-select-otros').html("Otros Destinos");
		
		$('.custom-select-otros').click(function(){
			$('.custom-options-recursos').slideUp('fast');
			if ($('.custom-options-otros').css('display')=='none'){
			$('.custom-options-otros').slideDown('fast');}
			
			else{
				$('.custom-options-otros').slideUp('fast');
			}
						
		});
		


		
		$('.custom-options-otros li').click(function(){
		
			$('.custom-select-otros').html($(this).text());
			
			$('p#lugar').html($(this).text());
			$('#hddlugar').val($(this).val());
			
//			$('#Inicio_idOtros').html($(this).text());
			

			$('.custom-options-otros').slideUp('fast');
			$(".bandera").animate({marginTop: '0', marginLeft: '0'}, 200);
			$(".contenedor_banderas_grande").css('background','#CCC');
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
		
		$("#header_acordeon2, #header_acordeon3, #header_acordeon4, .bandera, .numero").click(function(){
				$('.custom-options-otros').css('display','none');
				$('.custom-options-otros_personas').css('display','none');
		});
		

	
	/**mas personas**/	

$('.custom-options-otros_personas li').css({width: '488px'});

var ulotros_personas="";

      $("#Inicio_idOtros_personas option").each(function(){
	  		  	  
        ulotros_personas +="<li value="+$(this).attr('value')+">"+ $(this).text() + "</li>";
		 
      });
	  
	  	$('#Inicio_idOtros_personas').css('display','none');
				
		$('#Inicio_idOtros_personas').parent().prepend("<ul class='custom-options-otros_personas'>" + ulotros_personas + "</ul>");
		$('#Inicio_idOtros_personas').parent().prepend("<div class='custom-select-otros_personas'></div>");
		$('div.custom-select-otros_personas').html("M&aacute;s personas?");
		
		$('.custom-select-otros_personas').click(function(){
			
			$('.custom-options-recursos_personas').slideUp('fast');
			if ($('.custom-options-otros_personas').css('display')=='none'){
			$('.custom-options-otros_personas').slideDown('fast');}
			
			else{
				$('.custom-options-otros_personas').slideUp('fast');
			}
						
		});
		
		//otros botones
		
		$('.custom-options-otros_personas li').click(function(){
		
			$('.custom-select-otros_personas').html($(this).text());
			creainput($(this).text());
			$('#Inicio_idOtros_personas').attr('value',$(this).attr('value'));
			$('.custom-options-otros_personas').slideUp('fast');
			$(".contenedor_numeros_grande ").css('background','#CCC');
			$(".numero").animate({marginTop: '0', marginLeft: '0'}, 200);
			$('#listo3').css('display','block');
			
							if($('#listo3').css('display','block')){
								$('.scroll-pane').jScrollPane();
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
		

		
		$("#header_acordeon2, #header_acordeon3, #header_acordeon4").click(function(){
				$('.custom-options-otros_personas').css('display','none');
		});


$(".bandera").click(function () {
	$('div.custom-select-otros').html("Otros Destinos");
});

$(".numero").click(function () {
	$('div.custom-select-otros_personas').html("M&aacute;s personas?");
});
			

		
});