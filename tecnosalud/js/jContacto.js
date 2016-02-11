	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('.formCon').validationEngine();
		$('input.alerta').simpleDatepicker();
		$('#slider-footer').bxSlider({displaySlideQty:1, moveSlideQty:1, auto:true, pause:6000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});