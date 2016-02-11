  $(document).ready(function(){
		$(window).load("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		$('.home-info').royalSlider({
			autoHeight: true,
			arrowsNav: true,
			arrowsNavAutoHide: false,
			fadeinLoadedSlide: false,
			controlNavigationSpacing: 0,
			slidesSpacing: 0,
			navigateByClick: false,
			controlNavigation: 'bullets',
			imageScaleMode: 'none',
			controlsInside: false,
			imageAlignCenter:false,
			blockLoop: false,
			loop: false,
			loopRewind: false,
			numImagesToPreload: 6,
			transitionType: 'move',
			keyboardNavEnabled: true,
			autoPlay: {enabled: true, pauseOnHover: false}
		});
		var over = 0
			$('.zona-gal').hover(function(){
				if(over==0){
					$(this).css("z-index", 9);
				 	$(this).children('.globo').animate({opacity: 1});
				 	over=1
				}else{
					$(".zona-gal").css("z-index", 5); 
					$(this).children('.globo').animate({opacity: 0});
				 	over=0
				}
    	});
    $('.sup-col-1-home, .sup-col-2-home, .sup-col-3-home').css({opacity: 1}).hover(function(){$(this).stop().animate({opacity: 0},250);}, function(){$(this).stop().animate({opacity: 1},250);});
		$(".img-receta").hover(function(){$(this).find(".over-recetas").slideToggle("slow");},function(){$(this).find(".over-recetas").slideToggle("slow");});
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
  });