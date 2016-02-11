// Nombre del proyecto: Dajer - Equipos
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Octubre del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#preload").fadeOut("slow");});
	$(".main-slider").children("li").length; var slider1 = $(".main-slider").bxSlider({auto: ($(".main-slider").children("li").length > 1)?true:false, controls: false, mode: "fade", pager: ($(".main-slider").children("li").length > 1)?true:false,}); var slider2 = $(".hight-slider").bxSlider({controls: false, mode: "fade"}); $(window).resize(function(){if($(slider1.reloadSlider).size()>0){slider1.reloadSlider({auto: true, controls: false, mode: "fade"});}; if($(slider2.reloadSlider).size()>0){slider2.reloadSlider({controls: false, mode: "fade"});};});
	 if($(".cat-slider").size()>0){$(".cat-slider").bxSlider({maxSlides: 4, minSlides: 1,  pager: false, slideMargin: 0, slideWidth: 310});}; if($(".clients-slider").size()>0){$(".clients-slider").bxSlider({auto: true, maxSlides: 5, pager: false, slideMargin: 20, slideWidth: 300});}; if($(".pro-slider").size()>0){$(".pro-slider").bxSlider({auto: true, pager: false});}; 
  $(".over-bw").hover(function(){$(this).children(".icon-bw").animate({marginTop: -10}, 400, "easeOutBounce");}, function(){$(this).children(".icon-bw").animate({marginTop: 0}, 400, "easeOutBounce");}); $(".over-bt-bw").click(function(){$(this).parent().parent().parent().fadeOut(200);});
	if($("#dl-menu").size()>0){$("#dl-menu").dlmenu({animationClasses: {classin: "dl-animate-in-4", classout: "dl-animate-out-4"}});};
	if($("#dl-menu-pro").size()>0){$("#dl-menu-pro").dlmenu({animationClasses: {classin: "dl-animate-in-4", classout: "dl-animate-out-4"}});};
	$(".item-pro").hover(function(){$(this).siblings(".item-pro").stop().animate({opacity: 0.25}); $(this).addClass("flip");}, function(){$(".item-pro").siblings(".item-pro").stop().animate({opacity: 1}); $(this).removeClass("flip");});
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
	$(".con-videos-s a li").hover(function(){$(this).children(".video-s-img").children(".video-over").stop().animate({opacity: 1});}, function(){$(this).children(".video-s-img").children(".video-over").stop().animate({opacity: 0});});
	$(window).bind("load", function(){$(".con-items-cat-b li").first().delay(200).queue(function(next){$(this).animate({height: "220px", width: "20%"}, 400, "easeInOutExpo"); next();}); $(".con-items-cat-b li").first().next().delay(600).queue(function(next){$(this).animate({height: "220px", width: "20%"}, 400, "easeInOutExpo"); next();}); $(".con-items-cat-b li").first().next().next().delay(1000).queue(function(next){$(this).animate({height: "220px", width: "20%"}, 400, "easeInOutExpo"); next();}); $(".con-items-cat-b li").first().next().next().next().delay(1400).queue(function(next){$(this).animate({height: "220px", width: "20%"}, 400, "easeInOutExpo"); next();}); $(".con-items-cat-b li").first().next().next().next().next().delay(1800).queue(function(next){$(this).animate({height: "220px", width: "20%"}, 400, "easeInOutExpo"); next();});});
	$(function(){$(".an-din").bind("click", function(event){var $anchor = $(this); $("html, body").stop().animate({scrollTop: $($anchor.attr("href")).offset().top}, 400, "easeInOutExpo"); event.preventDefault();});});	
	$(".con-catalogo-img .catalogo-img").first().css({display: "block"});
	$(".cat-slider a").click(function(){$(".cat-slider a").removeClass("cat-act"); $(this).addClass("cat-act"); $(".catalogo-img").fadeOut(200); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).fadeIn(200);});
	$(".slide-cafe-img").first().css({display: "block"}); $(".slider-colors li").click(function(){$(".slider-colors li").removeClass("color-act"); $(this).addClass("color-act"); $(".slide-cafe-img").fadeOut(200); var ver_color = $(this).attr("data-id"); $('.'+ver_color).fadeIn(200);});
	$(".serv-ac").awsAccordion({type:"horizontal", cssAttrsHor:{ulWidth:"responsive"}, startSlide:1, openOnebyOne:true, classTab:"ac-act", slideOn:"click"});
  setInterval(function(){$(".bt-mas-pro").animate({borderColor: "#ae0a10"}, 500).animate({borderColor: "#eaeaea"}, 500);}, 1500);
	$(".resultado-list li").last().css({border: "none"});
	if($(".grl-form").size()>0){$(".grl-form").validationEngine({scroll:false});};
	if($(".modals-act").size()>0){$(".modals-act").fancybox();};
	if($("#modal-ok").size()>0){$("#modal-ok").fancybox().trigger("click");};
	if($.browser.msie&&$.browser.version==10){$("html").addClass("ie10");};
	if($.browser.msie){$("input[placeholder], textarea[placeholder]").each(function(){var input = $(this); $(input).val(input.attr("placeholder")); $(input).focus(function(){if (input.val() == input.attr("placeholder")){input.val("");}}); $(input).blur(function(){if (input.val() == "" || input.val() == input.attr("placeholder")){input.val(input.attr("placeholder"));}});});};
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito().css({margin: "1px 0 0", width:"210px"});};
});