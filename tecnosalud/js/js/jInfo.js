	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('.album').colorbox({rel:'album'});
		$('.scroll-producto').jScrollPane();
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});