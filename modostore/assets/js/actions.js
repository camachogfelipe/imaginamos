// Nombre del proyecto: Modo Store
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Octubre del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#preload").stop().fadeOut(600);});
  $(".over-bw").hover(function(){$(this).children(".icon-bw").stop().animate({marginTop: -10}, 400, "easeInOutExpo");}, function(){$(this).children(".icon-bw").stop().animate({marginTop: 0}, 400, "easeInOutExpo");}); $(".over-bt-bw").click(function(){$(this).parent().parent().parent().fadeOut(200);});
	$(window).bind("load", function(){$(".head-como").stop().animate({top: 17}, 1200, "easeOutBounce");}); $(".head-como span").click(function(){$(this).parent().stop().fadeOut(400);});
	$(".nav-sub-bt").stop(); $(".nav-sub-bt").hover(function(){$(this).children(".con-sub-nav").slideDown(400, "easeInOutExpo");}, function(){$(this).children(".con-sub-nav").delay(200).hide();});
	$(".mg-sub-nav li .sub-nav-col:odd").css({background: "#001f32"});
	$(".con-slider-b .slider-src .logo-tarjetas li").first().next().next().next().css({margin: 0});
	$(".home-slider").children("li").length; if($(".home-slider").size()>0){$(".home-slider").bxSlider({auto: ($(".home-slider").children("li").length > 1)?true:false, pager: ($(".home-slider").children("li").length > 1)?true:false, slideWidth: 640});};
	$(".con-great-nav .mg-great-nav li a:odd").css({background: "#f3f3f3"});
	$(".great").first().css({margin: "0"});
	$(".home-tab").click(function(){$(".home-tab").removeClass("tab-act"); $(this).addClass("tab-act"); $(".great").stop().fadeOut(200).css({margin: "408px 0 0", opacity: 1}); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).stop().fadeIn(200).animate({margin: "0", opacity: 1}, {queue: false, duration: 800, easing:"easeInOutExpo"});}); 
		$(".con-greats .great .great-item").hover(function(){$(this).children().children("img").stop().animate({height: 212, left: -20, top: -13, width: 320}, 300, "easeInOutExpo");}, function(){$(this).children().children("img").stop().animate({height: 186, left: 0, top: 0, width: 280}, 300, "easeInOutExpo");});
	/*$(window).scroll(function(){var valScroll = $(window).scrollTop();	if(valScroll>=500){$(".great-home").stop().animate({opacity:1}, 800);} else {$(".great-home").stop().animate({opacity:0}, 800);}; if(valScroll>=370){$(".great-f2").stop().animate({opacity:1}, 800);} else {$(".great-f2").stop().animate({opacity:0}, 800);}; if(valScroll>=880){$(".great-f3").stop().animate({opacity:1}, 800);} else {$(".great-f3").stop().animate({opacity:0}, 800);}; if(valScroll>=800){$(".great-f4").stop().animate({opacity:1}, 800);} else {$(".great-f4").stop().animate({opacity:0}, 800);};});*/
	$(".item-value").stop();	 $(".item-value").hover(function(){$(this).children(".item-value-tx").animate({height: 196}, 400, "easeInOutExpo");}, function(){$(this).children(".item-value-tx").animate({height: 18}, 400, "easeInOutExpo");});
	if($(".logos-slider-1").size()>0){$(".logos-slider-1").bxSlider({auto: true, controls: false, maxSlides: 4, minSlides: 4, moveSlides: 1, pager: false, slideWidth: 235});}; if($(".logos-slider-2").size()>0){$(".logos-slider-2").bxSlider({controls: false, maxSlides: 4, minSlides: 4, pager: false, slideWidth: 235, speed: 20000, ticker: true});};
	$(".con-footer .mg-footer .foo-col ul li a").hover(function(){$(this).children(".foo-line").stop().animate({width: "100%"});}, function(){$(this).children(".foo-line").stop().animate({width: 0});});
	$(".footer-redes .foo-red").hover(function(){$(this).children("span").stop().fadeIn();}, function(){$(this).children("span").stop().fadeOut();});
	$(".great-int").first().css({opacity: 1});
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
	/*Select paso 0*/ var $step1 = $("#step-1"); $filter1 = $(".filter-1"); $filter2 = $(".filter-2"); $filter3 = $(".filter-3"); $filter4 = $(".filter-4"); $step1.change(function(){if ($step1.val() == "step-0"){$filter1.removeAttr("disabled");} else {$filter1.attr("disabled", "disabled").val(""); $filter2.attr("disabled", "disabled").val(""); $filter3.attr("disabled", "disabled").val(""); $filter4.attr("disabled", "disabled").val("");}}).trigger("change");
	/*Select paso 1*/ var $step2 = $("#step-2"); $filter2 = $(".filter-2"); $step2.change(function(){if ($step2.val() == "step-1"){$filter2.removeAttr("disabled");} else {$filter2.attr("disabled", "disabled").val(""); $filter3.attr("disabled", "disabled").val(""); $filter4.attr("disabled", "disabled").val("");}}).trigger("change");
	/*Select paso 2*/ var $step3 = $("#step-3"); $filter3 = $(".filter-3"); $step3.change(function(){if ($step3.val() == "step-2"){$filter3.removeAttr("disabled");} else {$filter3.attr("disabled", "disabled").val(""); $filter4.attr("disabled", "disabled").val("");}}).trigger("change");
	/*Select paso 3*/ var $step4 = $("#step-4"); $filter4 = $(".filter-4"); $step4.change(function(){if ($step4.val() == "step-3"){$filter4.removeAttr("disabled");} else {$filter4.attr("disabled", "disabled").val("");}}).trigger("change");
	$(".pro-img-b").first().css({display: "block"});
	$(".pro-img-s").click(function(){$(".pro-img-s").removeClass("pro-thum-act"); $(this).addClass("pro-thum-act"); $(".pro-img-b").stop().fadeOut(200); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).stop().fadeIn(200);});
	$(".pro-info").last().css({border: "none"});
	$(".pro-img-s").hover(function(){$(this).children("span").stop().animate({opacity: 1});}, function(){$(this).children("span").stop().animate({opacity: 0});});
	$(".con-fletes ul li:odd").css({color: "#626262", textAlign: "right"});
	if($(".modals-act").size()>0){$(".modals-act").fancybox();};
	if($("#modal-ok").size()>0){$("#modal-ok").fancybox().trigger("click");};
	$(".con-grl-tx ul li").last().css({border: "none"});
	if($(".grl-contactenos").size()>0){$(".grl-contactenos").validationEngine({scroll:false});};
	jQuery("#newsletter").validationEngine({
		scroll:false,
		ajaxFormValidation: true,
		ajaxFormValidationMethod: 'post',
		onAjaxFormComplete: ajaxValidationCallback
	});
	var callbacks_list = $(".grl-col-c"); $(".grl-col-c input").on("ifCreated ifClicked ifChanged ifChecked ifUnchecked ifDisabled ifEnabled ifDestroyed").iCheck({checkboxClass: "icheckbox", radioClass: "iradio", increaseArea: "20%"});
	$(window).scroll(function(){if($(this).scrollTop()!=0){$(".up-bt").stop().animate({opacity: 0.8});} else {$(".up-bt").stop().animate({opacity: 0});}}); $(".up-bt").click(function(){$("body, html").stop().animate({scrollTop:0}, 400, "easeInOutExpo");});
	$(".up-bt").hover(function(){$(this).animate({opacity: 1});}, function(){$(this).animate({opacity: 0.8});});
	if($.browser.msie&&$.browser.version==10){$("html").addClass("ie10");};
	if($.browser.msie){$("input[placeholder], textarea[placeholder]").each(function(){var input = $(this); $(input).val(input.attr("placeholder")); $(input).focus(function(){if (input.val() == input.attr("placeholder")){input.val("");}}); $(input).blur(function(){if (input.val() == "" || input.val() == input.attr("placeholder")){input.val(input.attr("placeholder"));}});});};
	$(window).bind("load", function(){$(".call-bt").stop().delay(2000).animate({right: 0}, 600, "easeInOutExpo");});
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({margin: "1px 0 0", theme: "claro", width:"210px"});};
	$("#select_val").on("change", function() { $("#form_val").submit(); });
});

function ajaxValidationCallback() {
	$.ajax({
		type: "POST",
		url: jQuery("#newsletter").attr("action"),
		data: jQuery("#newsletter").serialize(),
		dataType: 'json',
		success: function(js) {
			if(js.ok){
				alert('Se ha registrado al Newsletter de Modo store');
			}else{
				alert('Error...!, Verifique sus datos por favor.');
			}
		}
	});
	return false;
}