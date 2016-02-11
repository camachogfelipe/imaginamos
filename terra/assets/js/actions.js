// Nombre del proyecto: TERRA
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Mayo del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#loader").fadeOut("slow");});
  $(".nav-main li").hover(function(){$(this).children(".nav-sub").stop().slideDown(200, 'easeInOutExpo');}, function(){$(this).children(".nav-sub").stop().slideUp("fast");});
  if($('#full-width-slider').size()>0){$('#full-width-slider').royalSlider({arrowsNav: true, loop: true, keyboardNavEnabled: true, controlsInside: false, imageScaleMode: 'fill', arrowsNavAutoHide: true, autoScaleSlider: true, autoScaleSliderWidth: 1080, autoScaleSliderHeight: 608, controlNavigation: 'bullets', thumbsFitInViewport: false, navigateByClick: true, startSlideId: 0, transitionType: 'fade', globalCaption: true, autoPlay: {enabled: true, pauseOnHover: false}});};
	$(window).scroll(function(){var valScroll = $(window).scrollTop(); if(valScroll>=150){$('.destacados-login').stop().animate({opacity:1}, 500);} else {$('.destacados-login').stop().animate({opacity:0.1}, 500);};});
	$(".nav-sub li").last().css({borderBottom:0});
	if($(".destacado-tx").size()>0){$(".destacado-tx").jScrollPane();};
	if($(".modal-ok-ct").size()>0){$(".modal-ok-ct").fancybox().trigger('click');};
	if($(".modal-login").size()>0){$(".modal-login").fancybox();};
	if($(".modal-registro").size()>0){$(".modal-registro").fancybox();};
	if($(".modal-news").size()>0){$(".modal-news").fancybox();};
	if($(".modal-terms").size()>0){$(".modal-terms").fancybox({width: 620});};
	if($(".modal-recordar").size()>0){$(".modal-recordar").fancybox();};
	if($(".modal-envio").size()>0){$(".modal-envio").fancybox().trigger('click');};
	$(".main-service").hover(function(){$(this).children(".main-service-info").stop().slideDown(600, 'easeOutQuart');}, function(){$(this).children(".main-service-info").stop().slideUp("fast");});
	if($(".car-service").size()>0){$(".car-service").bxSlider({slideWidth:180, minSlides:4, maxSlides:5, moveSlides:1, slideMargin:10, pager:false, infiniteLoop: false, hideControlOnEnd: true});};
	$('.info-b').first().css({display:"block"});
	$('.item-small-1').click(function(){$(".sev-active-1").removeClass("sev-active-1"); $(this).addClass("sev-active-1"); $('.info-b').hide(); var ver_contenido = $(this).attr('data-id'); $('.'+ver_contenido).fadeIn(400, "easeInQuart"); $(".servicio-tx").jScrollPane();});
	$('.item-small-2').click(function(){$(".sev-active-2").removeClass("sev-active-2"); $(this).addClass("sev-active-2"); $('.info-b').hide(); var ver_contenido = $(this).attr('data-id'); $('.'+ver_contenido).fadeIn(400, "easeInQuart"); $(".servicio-tx").jScrollPane();});
	$('.item-small-3').click(function(){$(".sev-active-3").removeClass("sev-active-3"); $(this).addClass("sev-active-3"); $('.info-b').hide(); var ver_contenido = $(this).attr('data-id'); $('.'+ver_contenido).fadeIn(400, "easeInQuart"); $(".servicio-tx").jScrollPane();}); 
	if($(".servicio-tx").size()>0){$(".servicio-tx").jScrollPane();};
	$('a.anchor-ct').bind('click',function (event){var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 500,'easeInOutExpo'); event.preventDefault();});
	if($(".news-box").size()>0){$(".news-box").jScrollPane();};
	oTable = $('#tabla-zona').dataTable({"bJQueryUI":true, "sPaginationType":"full_numbers", "aoColumnDefs":[{'bSortable':false, 'aTargets':[3]}]});
	if($(".company-tx").size()>0){$(".company-tx").jScrollPane();};
	if($(".rsc-tx").size()>0){$(".rsc-tx").jScrollPane();};
	//$(".con-company-info .company-tx").last().css({marginTop:10});
	if($(".contact-tx").size()>0){$(".contact-tx").jScrollPane();};
	if($(".registro-tx").size()>0){$(".registro-tx").jScrollPane({autoReinitialise:true, autoReinitialiseDelay:1});};
	if($(".con-terms").size()>0){$(".con-terms").jScrollPane();};
	if($(".zona-tx").size()>0){$(".zona-tx").jScrollPane();};
	if($.browser.msie){$('input[placeholder], textarea[placeholder]').each(function(){var input = $(this); $(input).val(input.attr('placeholder')); $(input).focus(function(){if (input.val() == input.attr('placeholder')){input.val('');}}); $(input).blur(function(){if (input.val() == '' || input.val() == input.attr('placeholder')){input.val(input.attr('placeholder'));}});});};
	if($(".contact-form").size()>0){$(".contact-form").validationEngine();};
	$(".footer-ahorranito").ahorranito({theme:'claro'});
});