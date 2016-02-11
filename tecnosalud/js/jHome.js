	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#banner-tecnosalud').zAccordion({tabWidth: "15%", width: "100%", height: "350px", trigger: "mouseover"});
		$("ul#banner-tecnosalud li a").hover(
			function(){$(this).children(".slide-producto").children('img').css("margin-top", "-20px");},
			function(){$(this).children(".slide-producto").children('img').css("margin-top", "0px");}
		);
		$('.scroll-destacados').jScrollPane();
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});