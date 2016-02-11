	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#paging_site').pajinate({items_per_page : 1});
		$('.bar').mosaic({animation: 'slide'});
		$('.catalogo-1').colorbox({rel:'catalogo-1'});
		$('.catalogo-2').colorbox({rel:'catalogo-2'});
		$('.catalogo-3').colorbox({rel:'catalogo-3'});
                $('.catalogo-7').colorbox({rel:'catalogo-7'});
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});