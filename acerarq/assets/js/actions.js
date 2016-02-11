	// Nombre del proyecto: ACERARQ
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Mayo del 2013
	// Autor: Stive Zambrano


	$(document).ready(function(){
    $(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});	
		if($(".slider1").size()>0){$(".slider1").bxSlider({mode: "fade", minSlides: 1, maxSlides: 1, slideMargin: 0});};
		if($(".slider2").size()>0){$(".slider2").bxSlider({slideWidth: 180, minSlides: 2, maxSlides: 2, slideMargin: 30, moveSlides: 1});};
		$(".intro-empresa").last().css({marginBottom: '25px'});
		if($(".collage").size()>0){$(".collage").bxSlider({slideWidth: 630, minSlides: 1, maxSlides: 4, slideMargin: 1, moveSlides: 1, infiniteLoop: false, hideControlOnEnd: true, speed: 800, auto: false, pager: true});};
		if($(".box-thumbs").size()>0){$(".box-thumbs").fancybox({helpers: {thumbs: {width: 100, height: 65}}});};
		$(".m-collage span").css({opacity: 0}).hover(function(){$(this).stop().animate({opacity: 1},250);}, function(){$(this).stop().animate({opacity: 0},250);});
		$(".con-project-bt").click(function(){var ancho = $(this).width(); if(ancho==205){$(".con-project-bt").each(function(index, element){var ancho2 = $(this).width(); if(ancho2>205){$(this).animate({width: 205}, 0).animate({height: 50}, 0);}}); $(this).stop().animate({width: 440}, 0).animate({height: 370}, 100);} else if(ancho>205){$(this).stop().animate({height: 50}, 0).animate({width: 205}, 0);}});
		$(".list-project > li:first-child").css({background: "#9ac032"});
		$(".paging_servs").delay(0).queue(function(next){$(this).hide(); next();}); $(".paging_servs").delay(500).queue(function(next){$(this).fadeIn(1000); next();});
		$("ul.content_serv li:odd").css({marginRight: 0});
		if($(".paging_servs").size()>0){$(".paging_servs").pajinate({items_per_page: 4});};
		if($(".box-info").size()>0){$(".box-info").fancybox({maxWidth: 600, maxHeight: 460, fitToView: false, width: 600, height: 460, autoSize: false, closeClick: false});};
		if($(".sirius-slider").size()>0){$(".sirius-slider").bxSlider({slideWidth: 520, minSlides: 1, maxSlides: 1, slideMargin: 1, moveSlides: 1, infiniteLoop: true, hideControlOnEnd: true, speed: 800, pager: true});};
		$(".paging_servs p").first().css({marginTop: '0px'});
		if($(".paging_desc").size()>0){$(".paging_desc").pajinate({items_per_page: 1, item_container_id: '.content_desc'});};
		if($("#contact-form").size()>0){$("#contact-form").validationEngine();};
		if($("#ok-form").size()>0){$("#ok-form").fancybox({maxWidth: 350, maxHeight: 120, fitToView: false, width: 350, height: 120, autoSize: false, closeClick: false}).trigger('click');};
		if($("#footer-form").size()>0){$("#footer-form").validationEngine();};
		$(".foo-map li").last().css({borderRight: "none"});
		$(".footer-ahorranito").ahorranito({theme: "claro"});
		$(function(){$(window).scroll(function(){if($(this).scrollTop() != 0){$('#toTop').fadeIn();	} else {$("#toTop").fadeOut();}}); $("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);});});
  });