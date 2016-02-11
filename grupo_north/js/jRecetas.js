  $(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		var opts = {autoPlay: {enabled: true, pauseOnHover: true}, loop: true, controlNavigation: 'thumbnails', imageScaleMode: 'fill', arrowsNav: false, arrowsNavHideOnTouch: true, fullscreen: false, thumbs: {firstMargin: false, paddingBottom: 0 }, numImagesToPreload: 4, thumbsFirstMargin: false, autoScaleSlider: true, keyboardNavEnabled: true, navigateByClick: true, fadeinLoadedSlide: true};
  	var sliderJQ = $('.recetas-info').royalSlider(opts);
		$('a.anchor-cus, a.anchor-cus2').bind('click',function (event){var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 400, 'easeInOutExpo'); event.preventDefault();});
		$('.scroll-pasos').jScrollPane();
		$('.scroll-ing').jScrollPane({verticalDragMinHeight:12, verticalDragMaxHeight:12});
		$('.over-item-mas, .over-item-mas2').css({opacity: 0}).hover(function(){$(this).stop().animate({opacity: 1},250);}, function(){$(this).stop().animate({opacity: 0},250);});
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		var f= typeof(eval($('.footer-ahorranito').val()));
		         if ( f != 'undefined'){
         if (eval(f) != null){
			$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
		}
	}

  });