	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#slider-nosotros').bxSlider({displaySlideQty:1, moveSlideQty:1, pager:true, auto:true, pause:6000, easing: 'easeInQuart'});
		$('.scroll-nosotros').jScrollPane();
		$('#slider-footer').bxSlider({displaySlideQty:1, moveSlideQty:1, auto:true, pause:6000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});