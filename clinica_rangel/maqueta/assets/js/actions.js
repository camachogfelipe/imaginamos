	// Nombre del proyecto: Clínica Rangel
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Marzo del 2013
	// Autor: Stive Zambrano

  $(document).ready(function(){
		$(window).bind("load", function(){$("#loader").fadeOut("slow");});
    $('.bt-nav, .esp-tels').css({backgroundPosition:"0px 0px"}).hover(function(){$(this).stop().animate({backgroundPosition:"0px -46px"}, 250);}, function(){$(this).stop().animate({backgroundPosition:"0px 0px"}, 250);});
		//var overNav = 0; $(".bt-nav-more").css({backgroundPosition:"50% 0%"}).hover(function(){if(overNav==0){$(this).children(".con-sub-nav").stop().animauto("height", "fast").css({borderBottom:"6px solid #f6f6f6"}, 250); $(this).stop().animate({backgroundPosition:"50% 100%"}, 250); overNav=1}else{$(".con-sub-nav").stop().animate({height:0}, 200).css({borderBottom:"0px"}, 0); $(this).stop().animate({backgroundPosition:"50% 0%"}); overNav=0}});
		//$(".con-main-sub-nav").hover(function(){$(".con-main-sub-nav").animate({height:58});}, function(){$(".con-main-sub-nav").animate({height:0});});
		$('#slider-rangel').royalSlider({autoHeight: true, arrowsNav: false, fadeinLoadedSlide: false, controlNavigationSpacing: 0, controlNavigation: 'tabs', imageScaleMode: 'none', transitionType: 'fade', imageAlignCenter:false, loop: false, loopRewind: true, numImagesToPreload: 5, keyboardNavEnabled: true, autoPlay: {enabled: true, pauseOnHover: false}});
		var overVids = 0; $(".item-home-video").hover(function(){if(overVids==0){$(this).find(".con-icon-des-v").children(".vn-des-t").stop().animate({left:0}, 500); $(this).find(".con-icon-des-v").children(".icon-des-v").stop().animate({right:0, bottom:0}); overVids=1}else{$(this).find(".con-icon-des-v").children(".vn-des-t").stop().animate({left:-800}, 250); $(this).find(".con-icon-des-v").children(".icon-des-v").stop().animate({right:-288, bottom:-162}, 500); overVids=0}});
		if($(".modal-media").size()>0){$(".modal-media").attr("rel", "media-gallery").fancybox({openEffect:"none", closeEffect:"none", prevEffect:"none", nextEffect:"none", arrows:false, helpers:{media:{}, buttons:{}}});};
		$(".mg-info .razon:even").css({background:"#fff url(assets/img/razones-bg-sup.png) left top repeat-x"}); $(".mg-info .razon img:odd").css({float:"left"}); $(".mg-info .razon .info-razon:odd").css({float:"right"}); $(".mg-info .con-section-info:odd").css({background:"#fff url(assets/img/section-info-t2-bg.png) top center no-repeat"});
		var readDg = 0; $(".mg-info .con-section-info").ready(function(){if(readDg==0){$(".con-section-info:odd").children(".section-var-img").css({float:"right"}); $(".con-section-info:odd").children(".section-var-info").css({float:"left"}); $(".con-section-info:odd").find(".section-var-vn").css({left:"0px"}); readDg=1}else{$(this).children(".section-var-img").css({float:"left"}); $(this).children(".section-var-info").css({float:"right"}); $(this).find(".section-var-vn").css({right:"0px"}); readDg=0}});
		var overGal = 0; $(".con-icon-gal-v").hover(function(){if(overGal==0){$(this).children(".vn-gal-v").stop().animate({left:0}, 500); $(this).children(".icon-gal-v").stop().animate({right:0, bottom:0}); overGal=1}else{$(this).children(".vn-gal-v").stop().animate({left:-800}, 250); $(this).children(".icon-gal-v").stop().animate({right:-188, bottom:-125}, 500); overGal=0}});
		var overDes = 0; $(".item-tratamiento").hover(function(){if(overDes==0){$(this).find(".con-icon-des-t").children(".vn-des-t").stop().animate({left:0}, 500); $(this).find(".con-icon-des-t").children(".icon-des-t").stop().animate({right:0, bottom:0}); overDes=1}else{$(this).find(".con-icon-des-t").children(".vn-des-t").stop().animate({left:-800}, 250); $(this).find(".con-icon-des-t").children(".icon-des-t").stop().animate({right:-280, bottom:-152}, 500); overDes=0}});
		if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
		if($(".modals-act").size()>0){$(".modals-act").fancybox();};
		$('.footer-red').css({backgroundPosition:"0px -44px"}).hover(function(){$(this).stop().animate({backgroundPosition:"0px 0px"}, 250);}, function(){$(this).stop().animate({backgroundPosition:"0px -44px"}, 250);});
		$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$("#toTop").fadeIn(500);}else{$("#toTop").fadeOut(250);}}); $("#toTop").click(function(){$("body,html").stop().animate({scrollTop:0}, 800, "easeInOutExpo");});});
		$(function(){$("a.an-din-li").bind("click",function(event){var $anchor = $(this); $("html, body").stop().animate({scrollTop: $($anchor.attr("href")).offset().top}, 800, "easeInOutExpo"); event.preventDefault();});});	
		var overVidb = 0; $(".item-site-video").hover(function(){if(overVidb==0){$(this).find(".con-icon-site-v").children(".vn-des-t").stop().animate({left:0}, 500); $(this).find(".con-icon-site-v").children(".icon-site-v").stop().animate({right:0, bottom:0}); overVidb=1}else{$(this).find(".con-icon-site-v").children(".vn-des-t").stop().animate({left:-800}, 250); $(this).find(".con-icon-site-v").children(".icon-site-v").stop().animate({right:-500, bottom:-300}, 500); overVidb=0}});
		
		
		
		$(".item-aco-info").css({height:0}); $(".item-aco-info").first().css({height:173}); 
		$(".item-aco-head").click(function(){
			if($(this).parent().children(".item-aco-info").height() == 0){
				$(".item-aco-info").stop().animate({height:0}); 
				$(this).parent().children(".item-aco-info").stop().animate({height:173}); 
				//$(".item-aco-head").removeClass("item-aco-act"); 
				//$(this).addClass("item-aco-act");
			}else{
				$(this).parent().children(".item-aco-info").stop().animate({height:0}); 
				//$(this).removeClass("item-aco-act");
			}
		});
		
		
		
		
		
		var overVidt = 0; $(".item-test-video").hover(function(){if(overVidt==0){$(this).find(".con-icon-test-v").children(".vn-des-t").stop().animate({left:0}, 500); $(this).find(".con-icon-test-v").children(".icon-test-v").stop().animate({right:0, bottom:0}); overVidt=1}else{$(this).find(".con-icon-test-v").children(".vn-des-t").stop().animate({left:-800}, 250); $(this).find(".con-icon-test-v").children(".icon-test-v").stop().animate({right:-350, bottom:-240}, 500); overVidt=0}});
		if($(".pager-info").size()>0){$(".pager-info").pajinate({items_per_page:2});};
		$(".form-fx").scrollToFixed({limit:function(){var limit=$(".con-section-destacados").offset().top-$(".form-fx").outerHeight(true) - 40; return limit;}});
		if($(".fx-form").size()>0){$(".fx-form").validationEngine({scroll:false});}; if($(".grl-form").size()>0){$(".grl-form").validationEngine({scroll:false});};
		$.browser.msie&&10==$.browser.version&&$("html").addClass("ie10");
    if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({theme:"oscuro", type:1});};
  });