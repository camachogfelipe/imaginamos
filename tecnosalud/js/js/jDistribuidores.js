	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('a.item-distribuidor').click(function(){
			$('.distribuidor-big').hide();
			var ver_contenido = $(this).attr('data-id');
			$('.'+ver_contenido).fadeIn(750);
		});
		$('#slider-distribuidores').bxSlider({displaySlideQty: 4, moveSlideQty: 4, auto:true, pause:15000, speed:750, easing: 'easeInQuart'});
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:6000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});