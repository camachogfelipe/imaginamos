/* Nombre del proyecto: Setronics */
/* Nombre del archivo: actions.js */
/* Descripción: Funciones globales */
/* Fecha de creación: Julio del 2013 */
/* Autor: Stive Zambrano */

$(document).ready(function(){
  $(window).bind("load", function(){$("#loader").fadeOut("slow");});
	$(".header-red").hover(function(){$(this).children("span").children("img").stop().animate({width:27, height:27, left:-1, top:-1}, 0);}, function(){$(this).children("span").children("img").stop().animate({width:25, height:25, left:0, top:0}, 0)});
	$(".con-nav-sub").hover(function(){$(this).children(".nav-sub").stop().fadeIn(100);}, function(){$(this).children(".nav-sub").stop().delay(400).fadeOut(200);}); $(".con-nav-sub-nav").hover(function(){$(this).children(".nav-sub-nav").stop().fadeIn(100);}, function(){$(this).children(".nav-sub-nav").stop().fadeOut(200);});
	$(".nav-main li").hover(function(){$(this).children("span").fadeIn(200);}, function(){$(this).children("span").fadeOut(200);});
	if($("#slider-home").size()>0){$("#slider-home").royalSlider({arrowsNav:false, arrowsNavAutoHide:true, fadeinLoadedSlide:false, controlNavigationSpacing:0, controlNavigation:"bullets", imageScaleMode:"none", imageAlignCenter:false, blockLoop:true, loop:true, numImagesToPreload:4, transitionType:"fade", keyboardNavEnabled:true, block:{delay:200}, autoPlay:{enabled: true, pauseOnHover:true}});};
	if($(".slider-footer").size()>0){$(".slider-footer").bxSlider({slideWidth:215, minSlides:3, maxSlides:4, slideMargin:10, moveSlides:1, controls:true, auto:true, pager:false});};
	if($(".modals-act").size()>0){$(".modals-act").fancybox().on("click", function(){$(".modal-form").validationEngine({scroll:false});})};
  if($(".menu-lt").size()>0){$(".menu-lt").accordion();};	
	//$(".menu-lt li a").click(function(){$(".menu-lt li a").removeClass("cl-act"); $(this).addClass("cl-act");});
	/*Contenido productos*/
	$(".menu-vn-t1").click(function(){$(".con-info-t1").stop().show(); $(".con-info-t2, .con-info-t3, .con-info-t4, .con-info-t5").stop().hide();});
	$(".menu-vn-t2").click(function(){$(".con-info-t2").stop().show(); $(".con-info-t1, .con-info-t3, .con-info-t4, .con-info-t5").stop().hide();});
	$(".menu-vn-t3").click(function(){$(".con-info-t3").stop().show(); $(".con-info-t1, .con-info-t2, .con-info-t4, .con-info-t5").stop().hide();});
	$(".menu-vn-t4").click(function(){$(".con-info-t4").stop().show(); $(".con-info-t1, .con-info-t2, .con-info-t3, .con-info-t5").stop().hide();});
	$(".menu-vn-t5").click(function(){$(".con-info-t5").stop().show(); if($(".slider-recom").size()>0){$(".slider-recom").bxSlider({slideWidth: 200, minSlides: 2, maxSlides: 3, slideMargin: 10, moveSlides: 1, infiniteLoop: false, hideControlOnEnd: true});}; if($(".slider-acces").size()>0){$(".slider-acces").bxSlider({slideWidth: 200, minSlides: 2, maxSlides: 3, slideMargin: 10, moveSlides: 1, infiniteLoop: false, hideControlOnEnd: true});}; $(".con-info-t1, .con-info-t2, .con-info-t3, .con-info-t4").stop().hide();});
	/*Contenido productos interno*/
	$(".item-vn-t1").click(function(){$(".con-info-t2").stop().show(); $(".con-info-t1, .con-info-t3, .con-info-t4, .con-info-t5").stop().hide();});
	$(".item-vn-t2").click(function(){$(".con-info-t3").stop().show(); $(".con-info-t1, .con-info-t2, .con-info-t4, .con-info-t5").stop().hide();});
	$(".item-vn-t3").click(function(){$(".con-info-t4").stop().show(); $(".con-info-t1, .con-info-t2, .con-info-t3, .con-info-t5").stop().hide();});
	$(".item-vn-t4").click(function(){$(".con-info-t5").stop().show(); if($(".slider-recom").size()>0){$(".slider-recom").bxSlider({slideWidth: 200, minSlides: 2, maxSlides: 3, slideMargin: 10, moveSlides: 1, infiniteLoop: false, hideControlOnEnd: true});}; if($(".slider-acces").size()>0){$(".slider-acces").bxSlider({slideWidth: 200, minSlides: 2, maxSlides: 3, slideMargin: 10, moveSlides: 1, infiniteLoop: false, hideControlOnEnd: true});}; $(".con-info-t1, .con-info-t2, .con-info-t3, .con-info-t4").stop().hide();});
	$(".items-pro").hover(function(){$(this).children(".con-item-info").stop().animate({height:"100%"});}, function(){$(this).children(".con-item-info").stop().animate({height:40});});
	/*Paginadores*/
	if($(".pager-info-t1").size()>0){$(".pager-info-t1").pajinate({items_per_page:4});};
	if($(".pager-info-t2").size()>0){$(".pager-info-t2").pajinate({items_per_page:6});};
	if($(".pager-info-t3").size()>0){$(".pager-info-t3").pajinate({items_per_page:4});};
	if($(".pager-info-t4").size()>0){$(".pager-info-t4").pajinate({items_per_page:8});};
	if($(".pager-items-x4").size()>0){$(".pager-items-x4").pajinate({items_per_page:8, item_container_id:".items-x4"});};
	if($(".pager-items-x3").size()>0){$(".pager-items-x3").pajinate({items_per_page:2, item_container_id:".items-x3"});};
	if($(".pager-servs").size()>0){$(".pager-servs").pajinate({items_per_page:3, item_container_id:".con-pager-serv"});};
	if($(".pager-serv-info").size()>0){$(".pager-serv-info").pajinate({items_per_page:4, item_container_id:".con-pager-serv-info"});};
	if($(".pager-items-certificados").size()>0){$(".pager-items-certificados").pajinate({items_per_page:2, item_container_id:".certificados-list"});};
	$(".item-pro-gal-img:first").show(); $(".item-pro-gal-img-s").click(function(){$(".item-pro-gal-img-s").children(".item-gal-act").removeClass("gal-act-s"); $(this).children(".item-gal-act").addClass("gal-act-s"); $(".item-pro-gal-img").hide(); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).fadeIn(200, "easeInQuart");});
	$(".item-pro-gal-img-s").hover(function(){$(this).children("span").stop().fadeIn();}, function(){$(this).children("span").stop().fadeOut();});
	$(".miga-site li:first").css({background:"none", padding:"0 16px 0 0"});
	var overItem = 0; $(".over-items").hover(function(){if(overItem==0){$(this).children(".item-over-img").stop().animate({margin:"15px auto 20px"}); $(this).children(".con-certificado-info").stop().animate({height:"160px"}); overItem=1;} else {$(this).children(".item-over-img").stop().animate({margin:"20px auto 15px"}); $(this).children(".con-certificado-info").stop().animate({height:"0px"}); overItem=0;}});
	$(".con-news:odd").children(".news-img").css({float:"right"}); $(".con-news:odd").children(".news-info").css({float:"left"});
	oTable = $('#tabla-rs').dataTable({"bJQueryUI":true, "bLengthChange":false, "sPaginationType":"full_numbers", "iDisplayLength":5});
	oTable = $('#tabla-rs-coco').dataTable({"bJQueryUI":true, "bLengthChange":false, "sPaginationType":"full_numbers", "iDisplayLength":5, "bFilter":false, "bInfo":false});
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
	if($(".contact-form").size()>0){$(".contact-form").validationEngine({scroll:false});};
	if($.browser.msie){$("input[placeholder], textarea[placeholder]").each(function(){var input = $(this); $(input).val(input.attr("placeholder")); $(input).focus(function(){if (input.val() == input.attr("placeholder")){input.val("");}}); $(input).blur(function(){if (input.val() == "" || input.val() == input.attr("placeholder")){input.val(input.attr("placeholder"));}});});};
	$(".menu-fx").scrollToFixed({limit:function(){var limit=$(".con-footer").offset().top-$(".menu-fx").outerHeight(true) - 40; return limit;}});
	if($.browser.msie&&$.browser.version==10){$("html").addClass("ie10");};
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({theme:"claro"});};
});
function new_window(pagina,w,h){var left = (screen.width/2)-(w/2); var top = (screen.height/2)-(h/2+20); var opciones= ('toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left); window.open(pagina,'',opciones);};