// Nombre del proyecto: SESAC
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Agosto del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#preload").fadeOut("slow");});
  $(".over-bw").hover(function(){$(this).children(".icon-bw").animate({marginTop: -10}, 400, "easeOutBounce");}, function(){$(this).children(".icon-bw").animate({marginTop: 0}, 400, "easeOutBounce");}); $(".over-bt-bw").click(function(){$(this).parent().parent().parent().fadeOut(200);});
	$(".con-nav .nav-main li a").hover(function(){$(this).children("span").animate({left: 2, width: "100%"});}, function(){$(this).children("span").animate({left: "50%", width: 0});});
	$(".slider").fractionSlider({"fullWidth": true, "controls": true, "pager": true, "responsive": true, "dimensions": "940,508", "increase": false});	
	$(".des-item a, .serv-des-item a").hover(function(){$(this).children(".des-img").children("span").stop().animate({fontSize: 86, height: 150, lineHeight: "142px", width: 272});}, function(){$(this).children(".des-img").children("span").stop().animate({fontSize: 24, height: 42, lineHeight: "42px", width: 36});});
	//$(".emp-info:first").css({display: "block"}); 
	$(".emp-bt").click(function(){$(".emp-bt").removeClass("emp-act"); $(this).addClass("emp-act"); $(".emp-info").hide(); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).show();});
	
	
	
	
	
	$(".globo").hover(function(){$(this).children("a").children(".globo-info").slideDown();}, function(){$(this).children("a").children(".globo-info").slideUp();});
	$("#globo-1").delay(1200).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-2").delay(1600).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-3").delay(2000).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-4").delay(2400).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-5").delay(2800).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-6").delay(3200).queue(function(next){$(this).fadeIn(800); next();}); $("#globo-7").delay(3600).queue(function(next){$(this).fadeIn(800); next();});
	
	
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
	if($(".pager-serv").size()>0){$(".pager-serv").pajinate({items_per_page: 2});}; if($(".pager-news").size()>0){$(".pager-news").pajinate({items_per_page: 5});};
	

	
	if($(".modals-act").size()>0){$(".modals-act").fancybox();};
	
	
	
	
	if($(".cliente-crr").size()>0){$(".cliente-crr").bxSlider({slideWidth: 225, minSlides: 3, maxSlides: 4, moveSlides: 1, slideMargin: 10});};
	
	
	
	$(".over-cl").hover(
	function(){$(this).children("span").stop().fadeIn(400);},
	function(){$(this).children("span").stop().fadeOut(400);}
	
	);
	
	
	
	$(".img-s").click(function(){$(".img-s").removeClass("img-act"); $(this).addClass("img-act"); $(".img-b").hide(); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).fadeIn(400);});
	$(".over-crr").hover(function(){$(this).children().children(".cliente-logo").animate({margin:"0 auto 10px"});}, function(){$(this).children().children(".cliente-logo").animate({margin:"10px auto 0"});});
	
	
	
	
	$(".work-an").css({left:-520}); setTimeout(function(){$(".work-an").animate({left: "50%"}, 1000, "easeInOutQuad", function(){animateBU()});}, 1500); function animateBU(){$(".work-an").animate({top: 250}, 1500, "easeInOutQuad", function(){animateBD()});}; function animateBD(){$(".work-an").animate({top: 260}, 1500, "easeInOutQuad", function(){animateBU()});};
	
	
	
	
	$(function(){$(".an-din").bind("click", function(event){var $anchor = $(this); $("html, body").stop().animate({scrollTop: $($anchor.attr("href")).offset().top}, 800, "easeInOutExpo"); event.preventDefault();});});
	
	
	var clUl = 0; $(".ul-bt").click(function(){if (clUl == 0){$(this).hide(); $(this).siblings("h1").fadeIn(); $(this).siblings(".datos-up").fadeIn(); clUl = 1} else {clUl = 0}});
	
	if($(".date-born").size()>0){$(".date-born").simpleDatepicker();};
	if($(".grl-form").size()>0){$(".grl-form").validationEngine({scroll:false});};
	
	if($("#modal-ok").size()>0){$("#modal-ok").fancybox().trigger('click');};
	
	$(".foo-red-1").hover(function(){$(".foo-red-1").css({color: "#3b5998"});},function(){$(".foo-red-1").css({color: "#6c6c6c"});}); $(".foo-red-2").hover(function(){$(".foo-red-2").css({color: "#00aced"});},function(){$(".foo-red-2").css({color: "#6c6c6c"});}); $(".foo-red-3").hover(function(){$(".foo-red-3").css({color: "#007bb6"});},function(){$(".foo-red-3").css({color: "#6c6c6c"});}); $(".foo-c3 ul li:last").css({border: "none"}); $(".foo-c4 ul li a:first").css({padding: "0 6px 0 0"}); $(".foo-c4 ul li a:last").css({padding: "0 0 0 10px"});
	
	$(".tool-foo").hover(function(){$(this).children("span").stop().fadeIn(200);}, function(){$(this).children("span").stop().fadeOut(200);});
	
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({theme: "claro"});};
	$("#bgUl").carouFredSel({auto: {items: 5, duration: 18000, easing: "linear", pauseDuration: 0, pauseOnHover: "immediate"}});
});