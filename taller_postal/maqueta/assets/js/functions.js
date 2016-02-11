/*
Author: Jhon Moreno
Author URL: jhonmo09@gmail.com/
*/

//$(window).load(function(e) {$('#loader').fadeOut('slow');});


var over=0
$(document).ready(function(e) {
	
	$(".menu2 > li > a").last().css({marginLeft: 0});

	$('.item_dest').hover(function(e) {
        if(over==0){
			$(this).children('.over_dest').stop().fadeIn(200);
			over=1
		}else{
			$(this).children('.over_dest').stop().fadeOut(200);
			over=0
		}
    });
	
	if($('.slider').size()>0){
		var sudoSlider = $(".slider").sudoSlider({
			continuous:true,
			auto:true,
			pause:4500,
			speed:1000,
			numeric:true,
			prevNext:false
		});
	}
	
	$('.menu_cat li a').click(function(e) {
        $('.content_cat').fadeOut(300,function(){
			$(this).fadeIn(300);
		});
		$('.menu_cat li a').removeClass('cat_activa');
		$(this).addClass('cat_activa');
    });
	
	$('.select_colors a').click(function(e) {
        var thisRel = $(this).attr('rel');
		$(this).parent().parent().children('.item_dest').children('img').attr('src',thisRel);
    });
	
	$('.thumbs img').click(function(e) {
        var thisSrc = $(this).attr('src');
		$(this).parent().parent().parent().children('.big_img').attr('src',thisSrc);
    });
	
	$('.colors_int a').click(function(e) {
         var thisRel = $(this).attr('rel');
		$(this).parent().parent().parent().children('.big_img').attr('src',thisRel);
    });
	
	$('input[placeholder],textarea[placeholder]').placeholder();
	if($('.form_contacto, .form_val').size()>0){
		$('.form_contacto, .form_val').validationEngine();
	}
	
	$('.content_acord').hide();
	$('.btn_acord').click(function(e) {
		if( $(this).parent().children('.content_acord').is(":hidden") ){
			$('.content_acord').slideUp(300);
			$('.btn_acord').removeClass('btn_acord_abierto');
			$(this).addClass('btn_acord_abierto');
			$(this).parent().children('.content_acord').slideDown(300);
			$('.indic_btn_acord').removeClass('item_abierto');
			$('.indic_btn_acord').addClass('item_cerrado');
			$(this).children('.indic_btn_acord').removeClass('item_cerrado');
			$(this).children('.indic_btn_acord').addClass('item_abierto');
			
		}else{
			$(this).parent().children('.content_acord').slideUp(300);
			$(this).children('.indic_btn_acord').removeClass('item_abierto');
		    $(this).children('.indic_btn_acord').addClass('item_cerrado');
			$(this).removeClass('btn_acord_abierto');
			
		}	
     });
	 
	 $('.content_faq').hide();
	 $('.btn_contacto').click(function(e) {
        $('.content_faq').fadeOut(300,function(){
			$('.content_contacto').fadeIn(300);
		});
		$('.btn_faq').removeClass('tab_activo');
		$(this).addClass('tab_activo');
     });
	 $('.btn_faq').click(function(e) {
        $('.content_contacto').fadeOut(300,function(){
			$('.content_faq').fadeIn(300);
		});
		$('.btn_contacto').removeClass('tab_activo');
		$(this).addClass('tab_activo');
     });


	$(".pro-req").hide();
	$(".bt-acor").click(function(e){
		if($(this).parent().children(".pro-req").is(":hidden")){
			$(".bt-acor").siblings(".pro-req").removeClass("tab2_activo");
			$(".bt-acor").children("span").removeClass("icon-minus");
			$(this).siblings(".pro-req").addClass("tab2_activo");
			$(this).children("span").addClass("icon-minus");
		} else {
			$(this).parent().children(".pro-req").removeClass("tab2_activo");
			$(this).children("span").removeClass("icon-minus");
		}
  });
	
	$(window).load(function(){$(".slider-nav").css({display: "block"});});
	$(".slider-nav").bxSlider({mode: "fade", slideWidth: 750, minSlides: 1, maxSlides: 1, pager: false, slideMargin: 0});
	$(".ver-sub").hover(function(){$(this).children(".subnav").css({display: "block"});}, function(){$(this).children(".subnav").css({display: "none"});});

		 
	$(".footer_ahorranito").ahorranito({
		type:1,
		width: 210,
		fontColor1: "#a6a6a6"
	});
		 
});

$(function(){
	if($('.scroll-pane').size()>0){
		$('.scroll-pane').jScrollPane();
	}
})

function abrirCarrito(){
	$('.fondo_cart').fadeIn(300);
	$('html,body').animate({scrollTop:0},500);
	$('.carrito').show(function(){
		$('.scroll-pane').jScrollPane();
		$(this).animate({opacity:1,top:20},400);
	});
	
}

function cerrarCarrito(){
	$('.carrito').animate({opacity:0,top:-50},400,function(){
		$(this).hide();
		$('.fondo_cart').fadeOut(300);
	});
}

function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
}

function verReq (box1) {
		var chboxs = document.getElementsByName("ck-req");
		var see = "none";
		for(var i=0;i<chboxs.length;i++) { 
				if(chboxs[i].checked){
				 see = "block";
						break;
				}
		}
		document.getElementById(box1).style.display = see;
}