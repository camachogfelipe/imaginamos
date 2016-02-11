	// Nombre del proyecto: ASSERTO
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Mayo del 2013
	// Autor: Stive Zambrano


  $(document).ready(function(){
		$(window).bind("load", function(){$("#loader").fadeOut("slow");});
		var over = 0;
		$(".mg-interna").hover(function(){
			if(over==0){
				$(".main-img img").animate({width:1128, height:360, left:-94, top:-15}, 500);
				$(".over-main-img").animate({opacity:1}, 250);
				$(".main-img img-help").animate({width:1128, height:360, left:-94, top:-15}, 500);
				$(".over-main-img-help").animate({opacity:1}, 250);
				$(".main-img img-contact").animate({width:1128, height:360, left:-94, top:-15}, 500);
				$(".over-main-img-contact").animate({opacity:1}, 250);
				over=1
			}else{
				$(".main-img img").animate({width:940, height:300, left:0, top:0}, 500);
				$(".over-main-img").animate({opacity:0.02}, 500);
				$(".main-img img-help").animate({width:940, height:300, left:0, top:0}, 500);
				$(".over-main-img-help").animate({opacity:0.02}, 500);
				$(".main-img img-contact").animate({width:940, height:300, left:0, top:0}, 500);
				$(".over-main-img-contact").animate({opacity:0.02}, 500);
				over=0
			}
		});
		var over2 = 0;
		$(".grid").hover(function(){
			if(over2==0){
				$(this).children(".grid-bg").animate({opacity:1}, 250);
				over2=1
			}else{
				$(this).children(".grid-bg").animate({opacity:0}, 250);
				over2=0
			}
		});
		var over3 = 0;
		$(".con-form-calcular").hover(function(){
			if(over3==0){
				$(this).children(".form-bg").animate({opacity:1}, 250);
				over3=1
			}else{
				$(this).children(".form-bg").animate({opacity:0}, 250);
				over3=0
			}
		});
		if($(".slider-asserto-e2").size()>0){$(".slider-asserto-e2").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:4444, slideWidth:470, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-e3").size()>0){$(".slider-asserto-e3").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:5555, slideWidth:470, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-s2").size()>0){$(".slider-asserto-s2").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:4444, slideWidth:170, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-s4").size()>0){$(".slider-asserto-s4").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:5555, slideWidth:470, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-s5").size()>0){$(".slider-asserto-s5").bxSlider({controls:false, auto:true, speed:1200, pause:6666, slideWidth:230, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-s7").size()>0){$(".slider-asserto-s7").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:7777, slideWidth:200, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-h1").size()>0){$(".slider-asserto-h1").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:4444, slideWidth:470, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-h3").size()>0){$(".slider-asserto-h3").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:5555, slideWidth:225, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-a2").size()>0){$(".slider-asserto-a2").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:5555, slideWidth:470, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-a5").size()>0){$(".slider-asserto-a5").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:6666, slideWidth:225, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-a7").size()>0){$(".slider-asserto-a7").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:7777, slideWidth:210, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-a8").size()>0){$(".slider-asserto-a8").bxSlider({controls:false, auto:true, speed:1200, pause:8888, slideWidth:220, minSlides:1, slideMargin:0});};
		if($(".slider-asserto-a10").size()>0){$(".slider-asserto-a10").bxSlider({mode:'vertical', controls:false, auto:true, speed:1200, pause:9999, slideWidth:210, minSlides:1, slideMargin:0});};
		if($(".scroll-links").size()>0){$(".scroll-links").jScrollPane();};
		if($(".scroll-help").size()>0){$(".scroll-help").jScrollPane();};
		if($("#form-contact").size()>0){$("#form-contact").validationEngine();};
		$("form#form-calcular fieldset:odd").css({marginRight: 0});
		$("form#form-calcular label.psel-t1:odd").css({marginRight: 0});
		if($.browser.msie){$('input[placeholder], textarea[placeholder]').each(function(){var input = $(this); $(input).val(input.attr('placeholder')); $(input).focus(function(){if (input.val() == input.attr('placeholder')){input.val('');}}); $(input).blur(function(){if (input.val() == '' || input.val() == input.attr('placeholder')){input.val(input.attr('placeholder'));}});});};
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
  });