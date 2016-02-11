	// Nombre del proyecto: DARK FACTORY
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Junio del 2013
	// Autor: Stive Zambrano


	$(document).ready(function(){
    $(window).bind("load", function(){$("#loader").fadeOut("slow");});
	
	//TOP UP
	$().UItoTop({ easingType: 'easeOutQuart' });
	
		$(".nav-main li").hover(function(){$(this).children("span").stop().animate({width:"100%", left:0},200, "easeInQuart")}, function(){$(this).children("span").stop().animate({width:0, left:"50%"},200, "easeInQuart")});
		if($("#full-width-slider").size()>0){$("#full-width-slider").royalSlider({arrowsNav:true, loop:true, keyboardNavEnabled:true, controlsInside:false, imageScaleMode:"fill", arrowsNavAutoHide:true, autoScaleSlider:true, autoScaleSliderWidth:1920, autoScaleSliderHeight:570, controlNavigation:"bullets", thumbsFitInViewport:false, navigateByClick:true, startSlideId:0, transitionType:"fade", globalCaption:true, autoPlay:{enabled:true, pauseOnHover:false}});};
		
                if($(".slider-des-0").size()>0){$(".slider-des-0").bxSlider({slideWidth:584, minSlides:1, maxSlides:1, slideMargin:0, controls:false, auto:false, pause:0, autoHover:true, pager:false});};
		if($(".slider-des-1").size()>0){$(".slider-des-1").bxSlider({slideWidth:584, minSlides:1, maxSlides:2, slideMargin:0, controls:false, auto:true, pause:6666, autoHover:true});}; 
		if($(".slider-des-2").size()>0){$(".slider-des-2").bxSlider({slideWidth:584, minSlides:1, maxSlides:2, slideMargin:0, controls:false, auto:true, pause:6666, mode:"fade", autoHover:true});};

		if($(".efecto-films1").size()>0){$(".efecto-films1").bxSlider({slideWidth:950, minSlides:1, maxSlides:2, slideMargin:0, controls:true, auto:true, pause:6666, pager:true, autoHover:true});};
		if($(".efecto-films2").size()>0){$(".efecto-films2").bxSlider({slideWidth:950, minSlides:1, maxSlides:2, slideMargin:0, controls:true, auto:true, pause:6666, mode:"fade", pager:true, autoHover:true});};
		if($(".film-tx").size()>0){$(".film-tx").jScrollPane({autoReinitialise:true});};
		
		if($(".text-df").size()>0){$(".text-df").jScrollPane({autoReinitialise:true});};
		
		if($(".efecto-theater1").size()>0){$(".efecto-theater1").bxSlider({slideWidth:950, minSlides:1, maxSlides:2, slideMargin:0, controls:true, auto:true, pause:6666, pager:true, autoHover:true});};
		if($(".efecto-theater2").size()>0){$(".efecto-theater2").bxSlider({slideWidth:950, minSlides:1, maxSlides:2, slideMargin:0, controls:true, auto:true, pause:6666, mode:"fade", pager:true, autoHover:true});};
		if($(".theater-tx").size()>0){$(".theater-tx").jScrollPane({autoReinitialise:true});};
		if($(".text-dt").size()>0){$(".text-dt").jScrollPane({autoReinitialise:true});};
		if($(".text-pop1").size()>0){$(".text-pop1").jScrollPane({autoReinitialise:true});};
		if($(".text-new").size()>0){$(".text-new").jScrollPane({autoReinitialise:true});};		
		if($(".destacado-tx").size()>0){$(".destacado-tx").jScrollPane({autoReinitialise:true});};
		if($(".fb-box").size()>0){$(".fb-box").jScrollPane({showArrows:true, autoReinitialise:true});}; 
		if($(".tw-box").size()>0){$(".tw-box").jScrollPane({showArrows:true, autoReinitialise:true});};
		if($("#lista-tw").size()>0){$("#lista-tw").tweet({avatar_size:50, count:10, username:"darkfactory1", list:"", loading_text:"Cargando lista..."});};
		$('.com-box:first').css({display:"block"});
		$('.item-com').click(function(){$(".com-act").removeClass("com-act"); $(this).addClass("com-act"); $('.com-box').hide(); var ver_contenido = $(this).attr('data-id'); $('.'+ver_contenido).fadeIn(200, "easeInQuart"); $(".fb-box").jScrollPane({showArrows:true, autoReinitialise:true}); $(".tw-box").jScrollPane({showArrows:true, maintainPosition:true, autoReinitialise:true});});
		if($(".foo-tx").size()>0){$(".foo-tx").jScrollPane({autoReinitialise:true});};
		$('.foo-red').css({backgroundPosition: "0px 0px"}).hover(function(){$(this).children("div").stop().animate({'background-position-y': "-44px"},200, "easeInQuart");}, function(){$(this).children("div").stop().animate({'background-position-y': "0px"},200, "easeInQuart");});
		
		$(".titulo-internas h1").animate({opacity: 1}, 1900)
		
	//CARRUSELES
	$('#foo1').carouFredSel({
			prev: '#prev1',
			next: '#next1',
			pagination: "#pager1",
			mousewheel: true,
			auto: {
			pauseOnHover: 'resume',
			progress: '#timer1',
			duration    : 1000,
		     }},
			 {			
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
		$('#foo2 a').lightBox();
		$('#foo2').carouFredSel({
			prev: '#prev2',
			next: '#next2',
			pagination: "#pager2",
			mousewheel: true,
			auto: {
			pauseOnHover: 'resume',
			progress: '#timer1',
			duration    : 1000,
		     }},
			 {			
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
		$('#foo3 a').lightBox();
		$('#foo3').carouFredSel({
			prev: '#prev3',
			next: '#next3',
			pagination: "#pager3",
			mousewheel: true,
			auto: {
			pauseOnHover: 'resume',
			progress: '#timer1',
			duration    : 1000,
		     }},
			 {			
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
		
				//EFECTO MEMBERS
	$('.caja-members').hover(
		function () {
			$('.over',$(this)).stop().animate({
				'margin-top':'0px'
			},500);
		},
		function () {
			$('.over',$(this)).stop().animate({
				'margin-top':'162px'
			},500);
		}
	);
		
		//MEDIA
		$('#media li').hover(
		function () {
			$('.over4',$(this)).stop().animate({
				'margin-top':'0px'
			},500);
		},
		function () {
			$('.over4',$(this)).stop().animate({
				'margin-top':'227px'
			},500);
		}
		);
		$('#media li').hover(
		function () {
			$('.text-blog',$(this)).stop().animate({
				'margin-top':'13px'
			},1100);
		},
		function () {
			$('.text-blog',$(this)).stop().animate({
				'margin-top':'130px'
			},1100);
		}
		);
		
		//TRAILER
		$('#trailer li').hover(
		function () {
			$('.over5',$(this)).stop().animate({
				'opacity':'0.50'
			},800);
		},
		function () {
			$('.over5',$(this)).stop().animate({
				'opacity':'0.00'
			},800);
		}
		);
		
		$('#trailer li').hover(
			function () {
				$('.over5 h1',$(this)).stop().animate({
					'margin-top':'0px'
				},600);
			},
			function () {
				$('.over5 h1',$(this)).stop().animate({
					'margin-top':'-10px'
				},600);
			}
		);
		
		//PAGINADOR
	$("ul.pagination1").quickPagination({pagerLocation:"button",pageSize:"6"});
	$("ul.pagination2").quickPagination({pagerLocation:"button",pageSize:"8"});
	$("ul.pagination3").quickPagination({pagerLocation:"button",pageSize:"4"});
		
		//VALIDADOR
	    $("#form-contacto").validationEngine('attach');		
  });