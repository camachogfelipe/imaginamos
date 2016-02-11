	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#paging_site').pajinate({items_per_page : 2});
		$('.bar').mosaic({animation: 'slide'});		
		$('a.item-novedad').click(function(){
			$('.novedad-big').hide();
			var ver_contenido = $(this).attr('data-id');
			$('.'+ver_contenido).fadeIn(750);
		});
		$('.iframe').colorbox({iframe:true, width:700, height:600});
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});