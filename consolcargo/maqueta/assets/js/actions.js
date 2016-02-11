// Nombre del proyecto: Consolcargo
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Agosto del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#preload").fadeOut("slow");});
  $(".over-bw").hover(function(){$(this).children(".icon-bw").animate({marginTop: -10}, 400, "easeOutBounce");}, function(){$(this).children(".icon-bw").animate({marginTop: 0}, 400, "easeOutBounce");}); $(".over-bt-bw").click(function(){$(this).parent().parent().parent().fadeOut(200);});
	$(".con-sub-nav-b").hover(function(){$(this).children("ul").stop().slideDown("fast");}, function(){$(this).children("ul").stop().slideUp();});
	$(function(){$("#dl-menu").dlmenu({animationClasses: {classin: 'dl-animate-in-2', classout: 'dl-animate-out-2'}});});
	if($(".main-slider").size()>0){$(".main-slider").bxSlider({auto: true, controls: false, maxSlides: 1, minSlides: 1, /*mode: "fade",*/ moveSlides: 1, pager: true, slideMargin: 0});};
	if($(".news-slider").size()>0){$(".news-slider").bxSlider({controls: false, maxSlides: 2, minSlides: 1, moveSlides: 2, slideMargin: 0, slideWidth: 316});};
  $(".bt-valor").on("click", function(){if($(this).parent(".con-info-valor").height() == 48){$(".bt-valor").removeClass("bt-valor-act"); $(this).addClass("bt-valor-act"); $(".con-info-valor").animate({height: 48}); $(this).parent(".con-info-valor").animate({height: 180});} else {$(this).removeClass("bt-valor-act"); $(this).parent(".con-info-valor").animate({height: 48});}});
  $(".con-head-des").on("click", function(){if($(this).parent(".info-destacada-col").height() == 50){$(".con-head-des").removeClass("item-info-act"); $(this).addClass("item-info-act"); $(".info-destacada-col").animate({height: 50}); $(this).parent(".info-destacada-col").animate({height: 360}); $("html, body").animate({scrollTop: 720}, 200); return false;} else {$(this).removeClass("item-info-act"); $(this).parent(".info-destacada-col").animate({height: 50});}});
  if($(".slide-cert").size()>0){$(".slide-cert").bxSlider({auto: true, controls: false, maxSlides: 1, minSlides: 1, mode: "fade", moveSlides: 1, slideWidth: 200});};
  $(".con-info-bc:first").css({display: "block"});
  $('.nav-din-con-bt').click(function(){$(".nav-din-con-bt").removeClass("nav-din-act"); $(this).addClass("nav-din-act"); $('.con-info-bc').hide(); var ver_contenido = $(this).attr('data-id'); $('.'+ver_contenido).show();});
	if($(".enlaces-slider").size()>0){$(".enlaces-slider").bxSlider({controls: false, maxSlides: 3, minSlides: 1, moveSlides: 1, slideMargin: 0, slideWidth: 318});};
	var navPro = $(".nav-din-bt"); navPro.on("click", function(e){e.preventDefault(); $(".nav-din-bt").removeClass("nav-din-act"); $(this).addClass("nav-din-act"); var theURL = "error"; if($(this).attr("href") != "#"){theURL = $(this).attr("href");}; $.ajax({url: theURL, type: "POST", success: function(data, textStatus, xhr){$(".con-info-b").empty(); $(".con-info-b").append(data); $(".enlaces-slider").bxSlider({controls: false, maxSlides: 3, minSlides: 1, moveSlides: 1, slideMargin: 0, slideWidth: 318});}, error: function(xhr, textStatus, errorThrown){$(".con-info-b").empty(); $(".con-info-b").append("<p class='error-tx'>Oops. Lo sentimos, no hemos encontrado contenido para está sección, por favor intentelo más tarde!</p>");}});});
		var infoTabla = 0; $(".bt-info-tabla").click(function(){if (infoTabla==0){$(this).parent().parent().siblings().children(".con-tabla").children(".tab-content").css({height:"auto"}); $(this).text("Ocultar información"); infoTabla=1;} else {$(this).parent().parent().siblings().children(".con-tabla").children(".tab-content").css({height:0}); $(this).text("Ver información"); infoTabla=0;}});
		$(function(){$('.nav-tabs a').click(function(e){$(this).tab('show');}).on('shown', function(e){$('.tab-pane.active .footable').trigger('footable_resize');}); if (window.location.hash.length > 0){$('.nav-tabs a[href="' + window.location.hash + '"]').tab('show');}});
    $(function(){$("table").footable(); $(".colour-switch a").click(function(e){e.preventDefault(); $(".colour-switch a").each(function(){$("table").removeClass($(this).data("class"));}); $("table").addClass($(this).data("class"));});});
	if($(".grl-form").size()>0){$(".grl-form").validationEngine({scroll:false});};
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({theme: "claro"});};
});