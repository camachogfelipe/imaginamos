/*
Author: Jhon Moreno
Author URL: jhonmo09@gmail.com/
*/

function abrirVacante(){$('.popup_vacante').slideDown(350);}

$(window).load(function(e) {
    $('#loader').fadeOut('slow');
	var winWidth = $(window).innerWidth()
	var leftWidth = (winWidth-940)/2
	$('.outer_black').width(leftWidth)
});
var over=0
$(document).ready(function(e){
	//abrirVacante();
	$('.mainnav').hover(function(e) {
        if(over==0){
			$(this).children('.subnav').stop().fadeIn(100);
			over=1
		}else{
			$(this).children('.subnav').stop().fadeOut(200);
			over=0
		}
    });
	
	if($('.slider').size()>0){
		var sudoSlider = $(".slider").sudoSlider({
			prevNext: true,
			numeric:true,
			continuous:true,
			auto:true,
			pause:4500
		});
	}
	
	$('.item_dest1').hover(function(e) {
        if(over==0){
			$(this).children().children().children('.texto_dest').stop().animate({width:220});
			$('.item_dest1 h3').stop().animate({width:215});
			$('.img_dest').stop().animate({marginLeft:10});
			$('.contenido_dest').stop().animate({width:235});
			$(this).children('.contenido_dest').stop().animate({width:465});
			$(this).children().children().children().children('.over_dest').stop().fadeIn(250);
			over=1
		}else{
			$('.item_dest1 h3').stop().animate({width:285});
			$('.img_dest').stop().animate({marginLeft:45});
			$('.contenido_dest').stop().animate({width:305});
			$(this).children().children().children('.texto_dest').stop().animate({width:130});
			$(this).children().children().children().children('.over_dest').stop().fadeOut(250);
			over=0
		}
    });
	
	if($('.content_main_slider').size()==0){
		$('.content_menu2').css({
			'margin-top':-100/*,
			'border-top':'2px solid #2c2d73'*/
		});
	}
	
	$('.footer_ahorranito').ahorranito({
		type:1,
		fontColor1:'#fff'
	});
	
	if($('.scroll_pane').size()>0){
		$('.scroll_pane').jScrollPane();
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
	 
	 if($('.form_contacto').size()>0){
		$('input[placeholder],textarea[placeholder]').placeholder();
		//$('.form_contacto').validationEngine();
	}
	
	if($('.form_vacante').size()>0){
		$('input[placeholder],textarea[placeholder]').placeholder();
		//$('.form_vacante').validationEngine();
	}
	$('#input_pro').hide();
	$('.select1').change(function(e) {
        if($(this).val() == 'Otro'){
			$('#input_pro').slideDown();
			$('.popup_aplicar .content_popup1').animate({height:490});
		}
    });
		$(".item_news img:odd").removeClass("left").addClass("right").css({margin: "0 0 10px 10px"}); $(".item_news .btn_vermas:odd").css({margin: "15px auto auto 15px"});
});

$(window).scroll(function(e) {
    var valScroll = $(window).scrollTop();
	$('.fixed_box').stop().animate({top:valScroll});
});



function cerrarPopup(){
	$('.popup1').slideUp(350);
	$('.popup_aplicar .content_popup1').animate({height:450});
	$('#input_pro').slideUp();
}

function aplicarVacante(){
	$('.popup_vacante').slideUp(350);
	setTimeout(function(){
		$('.popup_aplicar').slideDown(350);
	},200)
}