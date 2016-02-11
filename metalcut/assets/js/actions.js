	// Nombre del proyecto: METALCUT
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Mayo del 2013
	// Autor: Stive Zambrano


	$(document).ready(function(){
    $(window).bind("load", function(){$("#loader").fadeOut("slow");});
		$(".nav-main li").hover(function(){$(this).children(".con-nav-sub").stop().slideDown(120, "linear");}, function(){$(this).children(".con-nav-sub").stop().slideUp(120, "swing");});
		if($(".slider-home").size()>0){$(".slider-home").bxSlider({mode:"fade", slideWidth:940, minSlides:0, maxSlides:1, moveSlides:1, slideMargin:0, auto:true, pause:5000});};
		$(".destacado-info").hover(function(){$(this).find(".globo-fx").stop().fadeIn("fast");}, function(){$(this).find(".globo-fx").stop().fadeOut("fast");}); $(".destacado-info").first().find(".globo-fx").css({background:"none"});
		if($(".slider-tree").size()>0){$('.slider-tree').bxSlider({slideWidth:235, minSlides:4, maxSlides:5, slideMargin:0, startSlide:0, pager:false, infiniteLoop:false, hideControlOnEnd:true});};
		$(".con-paso:first").css({height:"428px"});
		//Arbol
		//Paso-1
		$(".paso-item-p1").click(function(){$(".item-act-p1").removeClass("item-act-p1"); $(this).parent().addClass("item-act-p1"); $(".con-paso-1-1, .con-paso-1-1-1, .con-paso-1-1-1-1, .con-paso-1-1-1-1-1, .con-paso-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-2
		$(".paso-item-p2").click(function(){$(".item-act-p2").removeClass("item-act-p2"); $(this).parent().addClass("item-act-p2"); $(".con-paso-1-1-1, .con-paso-1-1-1-1, .con-paso-1-1-1-1-1, .con-paso-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-3
		$(".paso-item-p3").click(function(){$(".item-act-p3").removeClass("item-act-p3"); $(this).parent().addClass("item-act-p3"); $(".con-paso-1-1-1-1, .con-paso-1-1-1-1-1, .con-paso-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-4
		$(".paso-item-p4").click(function(){$(".item-act-p4").removeClass("item-act-p4"); $(this).parent().addClass("item-act-p4"); $(".con-paso-1-1-1-1-1, .con-paso-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-5
		$(".paso-item-p5").click(function(){$(".item-act-p5").removeClass("item-act-p5"); $(this).parent().addClass("item-act-p5"); $(".con-paso-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-6
		$(".paso-item-p6").click(function(){$(".item-act-p6").removeClass("item-act-p6"); $(this).parent().addClass("item-act-p6"); $(".con-paso-1-1-1-1-1-1-1, .con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-7
		$(".paso-item-p7").click(function(){$(".item-act-p7").removeClass("item-act-p7"); $(this).parent().addClass("item-act-p7"); $(".con-paso-1-1-1-1-1-1-1-1, .con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"428px"});});
		//Paso-8
		$(".paso-item-pfn").click(function(){$(".item-act-pfn").removeClass("item-act-pfn"); $(this).parent().addClass("item-act-pfn"); $(".con-paso-fn").css({height:"0px"}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).css({height:"100px"});});
		//Fin arbol
		if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane({autoReinitialise:true});};
		oTable = $('#tabla-rs').dataTable({"bJQueryUI":true, "bLengthChange":false, "sPaginationType":"full_numbers", "iDisplayLength":10});
		oTable = $('#tabla-rs-coco').dataTable({"bJQueryUI":true, "bLengthChange":false, "sPaginationType":"full_numbers", "iDisplayLength":5, "bFilter":false, "bInfo":false});
		if($.browser.msie){$("input[placeholder], textarea[placeholder]").each(function(){var input = $(this); $(input).val(input.attr("placeholder")); $(input).focus(function(){if (input.val() == input.attr("placeholder")){input.val('');}}); $(input).blur(function(){if (input.val() == '' || input.val() == input.attr("placeholder")){input.val(input.attr("placeholder"));}});});};
		if($(".modals-act").size()>0){$(".modals-act").fancybox();}; if($(".modals-reg").size()>0){$(".modals-reg").fancybox({width:940, minHeight:530});}; if($("#modal-rec-ok").size()>0){$("#modal-rec-ok").fancybox().trigger('click');};
		if($(".fm-int").size()>0){$(".fm-int").validationEngine();}; if($(".fm-rec").size()>0){$(".fm-rec").validationEngine();}; if($("#site-login").size()>0){$("#site-login").validationEngine({promptPosition:"bottomLeft"});};
		if($("input.date-born").size()>0){$("input.date-born").simpleDatepicker();};
		$(".bt-submit").click(function(){$(".con-bts-coco").show();});
		$(function(){$("a.vn-nav").bind("click", function(event){var $anchor = $(this); $("html, body").stop().animate({scrollTop: $($anchor.attr("href")).offset().top}, 800, "easeInOutExpo"); event.preventDefault();});});
		$(function(){var offset = $(".con-redes").offset(); var topPadding = 140; $(window).scroll(function(){if($(window).scrollTop() > offset.top){$(".con-redes").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});}else{$(".con-redes").stop().animate({marginTop:0});};});});
		$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$("#toTop").fadeIn(500);}else{$("#toTop").fadeOut(250);}}); $("#toTop").click(function(){$("body,html").animate({scrollTop:0}, 800, "easeInOutExpo");});});
		$(".red-pick").hover(function(){$(this).find("span").stop().fadeIn("fast");}, function(){$(this).find("span").stop().fadeOut("fast");});
		$(".pick-tool-carro").hover(function(){$(this).find(".carro-tool").stop().fadeIn("fast");}, function(){$(this).find(".carro-tool").stop().fadeOut("fast");});
		$(".footer-ahorranito").ahorranito({theme:"claro"});
  });
	function new_window(pagina,w,h){var left = (screen.width/2)-(w/2); var top = (screen.height/2)-(h/2+20); var opciones= ('toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left); window.open(pagina,'',opciones);};