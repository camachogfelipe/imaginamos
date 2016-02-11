

/* Declare a namespace for the site */
var Site = window.Site || {};

/* Create a closure to maintain scope of the '$'
   and remain compatible with other frameworks.  */
(function($) {
	
	//same as $(document).ready();
	

        
	$(window).bind("load", function() {			
		
                $("#loader").fadeOut("slow");
		
		$("#slider").sudoSlider({prevNext:false,numeric:true, auto:true, pause:6000});
		$("#slider2").sudoSlider({prevNext:true,numeric:false});
		$("#slider3").sudoSlider({prevNext:false,numeric:false, fade:true, auto:true});
		
		var lightbox = jQuery(".lightbox");
		lightbox.css({			
			"height": $(window).height()
		});
		//cerrar parte inactiva
		var layer_close = jQuery(".layer_close");
		layer_close.css({			
			"height": $(window).height()
		}); 
		
		
		$("a.topnav").hover(function() {	
			
			$(this).parent().find("ul.subnav").slideDown('fast').show();
			$(this).parent().find("a.topnav").addClass("subhover");
	 
			$(this).parent().hover(function() {
			}, function(){	
				$(this).parent().find("ul.subnav").fadeOut('fast'); 
				$(this).parent().find("a.topnav").removeClass("subhover");
			});
						
		});
		
		$("a.subnav_a").hover(function() {
		
			
			$(this).parent().find("div.subnavfot").slideDown('fast').show();
			$(this).parent().find("a.subnav_a").addClass("subnav_a_active");
			
			
	 
			$(this).parent().hover(function() {
			}, function(){	
			//	$(this).parent().find("div.subnavfot").fadeOut('fast');
				$(this).parent().find("a.subnav_a").removeClass("subnav_a_active"); 
			
			});
						
		});
		
		
		
		/*$(".menu ul li a.catalogo").hover(
		
			function(){$(".menu_desplegado").slideDown(400)},
			function(){$(".menu_desplegado").slideUp(200)}
		);*/
		
		
		
		$(".menu_desplegado").hover(function() {						
			$('.catalogo').addClass('active');
			
		});	
		$(".catalogo").hover(function() {						
			$('.menu_desplegado').slideDown(500);
		});	
		
		$(".menu_desplegado").bind("mouseleave", function(){		
			$('.menu_desplegado').slideUp(200);
			$('.catalogo').removeClass('active');
			$('.content_filtrar').slideUp(200);
			$('.filtrar').removeClass('active');
			$('.content_servicio').slideUp(200);
			$('.servicio').removeClass('active');
		});
		
	
		$(".content_filtrar").hover(function() {						
			$('.filtrar').addClass('active');
		});	
		$(".filtrar").hover(function() {						
			$('.content_filtrar').slideDown(300);
		});	
		
		$(".content_filtrar").bind("mouseleave", function(){		
			$('.content_filtrar').slideUp(200);
			$('.filtrar').removeClass('active');
			$('.content_filtrar').slideUp(200);
			$('.filtrar').removeClass('active');
			$('.content_servicio').slideUp(200);
			$('.servicio').removeClass('active');
		});
		
		$(".content_servicio").hover(function() {						
			$('.servicio').addClass('active');
		});	
		$(".servicio").hover(function() {						
			$('.content_servicio').slideDown(300);
		});	
		
		$(".content_servicio").bind("mouseleave", function(){		
			$('.content_filtrar').slideUp(200);
			$('.filtrar').removeClass('active');
			$('.content_filtrar').slideUp(200);
			$('.filtrar').removeClass('active');
			$('.content_servicio').slideUp(200);
			$('.servicio').removeClass('active');
		});
		
		
		
		$(".val input, .val textarea").focus(function() {
		if( $(this).attr("value")  == 'Nombre completo' || $(this).attr("value")  == 'Correo electr\xf3nico' || $(this).attr("value")  == 'Comentario' || $(this).html("Comentario") || $(this).attr("value")  == 'Tel\xe9fono' || $(this).attr("value")  == 'Email' ){
            $(this).attr("value", "");
        }
	
	});
		
		
		
		
	
		
	});
})(jQuery);

jQuery(document).keyup(function(event){
        if(event.which==27)
        {
          cerrarPopup();	
        }
    });

//funcion cerrar popup
function cerrarPopup(){
	$('#light').fadeOut('medium');
	
}

function LanzarLight(){
	if($('#light').is(":hidden")){
		cerrarPopup();
		$('#light').fadeIn('medium');
	}	
}



