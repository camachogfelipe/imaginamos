$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		$('.paging_act').pajinate({items_per_page : 4, item_container_id : '#locations', num_page_links_to_display : 5}).on('click', function(){$('.scroll-map').jScrollPane();});
		
		//var opts = {autoPlay: {enabled: true, pauseOnHover: true}, loop: true, controlNavigation: 'thumbnails', imageScaleMode: 'fill', arrowsNav: false, arrowsNavHideOnTouch: true, fullscreen: false, thumbs: {firstMargin: false, paddingBottom: 0 }, numImagesToPreload: 4, thumbsFirstMargin: false, autoScaleSlider: true, navigateByClick: true, fadeinLoadedSlide: true}; var sliderJQ = $('.recetas-info').royalSlider(opts);
		
		
		if($(".recetas-info").size()>0){$(".recetas-info").royalSlider({arrowsNav: false, loop: true, keyboardNavEnabled: true, imageScaleMode: 'fill', arrowsNavHideOnTouch: true, autoScaleSlider: false, controlNavigation: 'thumbnails', thumbsFirstMargin: false, navigateByClick: true, fullscreen: false, numImagesToPreload: 4, fadeinLoadedSlide: true,  thumbs: {firstMargin: false, paddingBottom: 0}, autoPlay: {enabled: true, pauseOnHover: true}});};
		
		
		$('.scroll-map').jScrollPane();
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});


			$('.footer-ahorranito').ahorranito({theme:'claro',type:1});



		$('a').bind('click', function(event){var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 500,'easeInOutExpo'); event.preventDefault();}); 

  });