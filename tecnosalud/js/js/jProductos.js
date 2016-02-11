	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#paging_site').pajinate();
		$('.bar').mosaic({animation: 'slide'});
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});