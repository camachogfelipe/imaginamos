var winWidth = (window.innerWidth);
var winHeight = (window.innerHeight);


$(window).load(function(e) {
	/*$('.content_subir').click(function(e) {
        $('.drop_genero').fadeOut();
    });*/
	$('.tooltip_genero').hide();
    $('.drop_genero_tienes li .checkbox').click(function(e) {
        var thisVal = $(this).parent().children('h4').html();
		var thisId = $(this).parent().children('h4').attr('id');
		var thisInput = $(this).parent().children('.input_otros');
		if($(this).parent().children('input').is(':checked')){
			if($('#tooltip_genero_tienes h3').size()<3){
				$('#tooltip_genero_tienes').fadeIn();
				$('#tooltip_genero_tienes').append('<h3 id="tool_'+thisId+'">'+thisVal+'</h3>');
				
			}
			
		}else{
			$('#tool_'+thisId+'').remove();
			if(thisId==('otros')){
				thisInput.attr('value','');
			}
			//$('.tooltip_genero').remove('<h3>'+thisVal+'</h3>')
			if($('#tooltip_genero_tienes h3').size()==0){
				$('#tooltip_genero_tienes').fadeOut();
			}
		}
		
    }); 
	
	$('#drop_uso li .checkbox').click(function(e) {
        var thisVal = $(this).parent().children('h4').html();
		var thisId = $(this).parent().children('h4').attr('id');
		var thisInput = $(this).parent().children('.input_otros');
		if($(this).parent().children('input').is(':checked')){
			if($('#tooltip_uso_tienes h3').size()<3){
				$('#tooltip_uso_tienes').fadeIn();
				$('#tooltip_uso_tienes').append('<h3 id="tool_'+thisId+'">'+thisVal+'</h3>');
				
			}
			
		}else{
			$('#tool_'+thisId+'').remove();
			if(thisId==('otros_uso')){
				thisInput.attr('value','');
			}
			//$('.tooltip_genero').remove('<h3>'+thisVal+'</h3>')
			if($('#tooltip_uso_tienes h3').size()==0){
				$('#tooltip_uso_tienes').fadeOut();
			}
		}
		
    });
	
	$('#drop_genero_buscas li .checkbox').click(function(e) {
        var thisVal = $(this).parent().children('h4').html();
		var thisId = $(this).parent().children('h4').attr('id');
		var thisInput = $(this).parent().children('.input_otros');
		if($(this).parent().children('input').is(':checked')){
			if($('#tooltip_genero_buscas h3').size()<3){
				$('#tooltip_genero_buscas').fadeIn();
				$('#tooltip_genero_buscas').append('<h3 id="tool_'+thisId+'">'+thisVal+'</h3>');
				
			}
			
		}else{
			$('#tool_'+thisId+'').remove();
			if(thisId==('otros2')){
				thisInput.attr('value','');
			}
			//$('.tooltip_genero').remove('<h3>'+thisVal+'</h3>')
			if($('#tooltip_genero_buscas h3').size()==0){
				$('#tooltip_genero_buscas').fadeOut();
			}
		}
		
    }); 
	
	$('#drop_uso_buscas li .checkbox').click(function(e) {
        var thisVal = $(this).parent().children('h4').html();
		var thisId = $(this).parent().children('h4').attr('id');
		var thisInput = $(this).parent().children('.input_otros');
		if($(this).parent().children('input').is(':checked')){
			if($('#tooltip_uso_buscas h3').size()<3){
				$('#tooltip_uso_buscas').fadeIn();
				$('#tooltip_uso_buscas').append('<h3 id="tool_'+thisId+'">'+thisVal+'</h3>');
				
			}
			
		}else{
			$('#tool_'+thisId+'').remove();
			if(thisId==('otros_uso2')){
				thisInput.attr('value','');
			}
			//$('.tooltip_genero').remove('<h3>'+thisVal+'</h3>')
			if($('#tooltip_uso_buscas h3').size()==0){
				$('#tooltip_uso_buscas').fadeOut();
			}
		}
		
    }); 
});		 
var check=0
var over =0

$(document).ready(function(){
	$('.scroll-pane').jScrollPane();
	$('.content_drop').each(function(index, element) {
        $(this).bind( "clickoutside", function(event){
			$(this).children('.drop_genero').fadeOut();
			$(this).children('.drop_genero_buscas').fadeOut();
			$(this).children('.select_genero').removeClass('select_abierto')
			$(this).children('.select_genero_buscas').removeClass('select_abierto')
		});
    });
	
	$('.content_input_info input').hover(function(e) {
        if(over==0){
			$(this).parent().children('.tooltip_info').stop().fadeIn();
			over=1
		}else{
			$(this).parent().children('.tooltip_info').stop().fadeOut();
			over=0
		}
    });
	$('.select_genero,.select_genero_buscas').each(function(index, element) {
        $(this).click(function(e) {
        	$(this).toggleClass('select_abierto');
    	});
    });
	
	
	if ($.browser.webkit){
		$('input[name="password"]').attr('autocomplete', 'off');
	}
	//	$(window).bind('resize', function() {
	//	window.location.href = window.location.href;
	//	});
	$("#slider").sudoSlider({
		numeric: false,
		continuous: false,
		auto: false,
		ease: 'easeInOutQuart',
		speed: 1200
	});
	$("#slider2").sudoSlider({
		numeric: false,
		continuous: false,
		auto: false,
		ease: 'easeInOutQuart',
		speed: 1200
	});
	$('.left_home').hover(function(){
		$('.titleright').css({
			backgroundPosition: 'top'
		});
		$('.titleleft').css({
			backgroundPosition: 'bottom'
		});
		/*$('.img_over_home').fadeToggle(600,'easeInOutQuart');*/
	});
	$('.right_home').hover(function(){
		$('.titleright').css({
			backgroundPosition: 'bottom'
		});
		$('.titleleft').css({
			backgroundPosition: 'top'
		});
		/*$('.img_over_homeR').fadeToggle();*/
	});
	$('.right_home').mouseleave(function(){
		$('.titleright').css({backgroundPosition: 'top'});
	});
	$('.left_home').mouseleave(function(){
		$('.titleleft').css({backgroundPosition: 'top'});
	});
	$('.footer').hover(function(){
		if (encu == 0){
			$('.creditos').css({color: '#FFF'});
			$('.creditos').children('span').css({color: '#FFF'});
			encu = 1
		} else {
			$('.creditos').css({color: '#001421'});
			$('.creditos').children('span').css({color: '#001421'});
			encu = 0
		}
	});
	$('.popup_mimusica').hide();
	$('.popup_misproyectos').hide();
	$('.popup_notif').hide();
	$('html, body').animate({scrollLeft: winWidth * 2}, animTime, 'easeInOutQuart');
	$('.popup1').css({top: winHeight});
	$('.popup_masinfo').css({top: 0 - winHeight});
	$('.popup_masinfo2').css({top: 0 - winHeight});
	$('.popup_ingreso').css({top: 0 - winHeight});
	
	
});
								
var encu = 0;
var animTime = 1000;
var medioWidth = winWidth / 2;

function toRegistro(){
	$('html, body').animate({scrollLeft: winWidth * 3}, animTime, 'easeInOutQuart');
	$('.footer').fadeOut(700, function(){});
	$('.right_home').css({
		background: '#001421'
	});
	setTimeout(function(){
		$('.content_registro').fadeIn(300, function(){});
	}, animTime + 300);
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#FFF'});
		$('.creditos2').hide();
	},300);
}

function toHome(){
	$('html, body').animate({scrollLeft: winWidth * 2}, animTime, 'easeInOutQuart');
	setTimeout(function(){
		$('.right_home').css({background: 'none'});
		$('.left_home').css({background: 'none'});
		$('.content_subir').fadeOut(300, function(){});
		$('.content_registro').fadeOut(300, function(){});
		$('.content_registro_quieres').fadeOut(300, function(){});
		$('.content_solic').fadeOut(300, function(){});
		$('.footer').fadeIn(700, function(){});
		$('.creditos').children('span').addClass('imagina1');
	},700);
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#001421'});
		$('.creditos2').show();
	},animTime);
}

function toBienvenido(){
	$('.content_registro').animate({opacity: 1}, animTime, 'easeInOutQuart');
	$('.popup_ingreso').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('html, body').animate({scrollLeft: winWidth * 4}, animTime, 'easeInOutQuart');
	$('.footer').fadeOut(700, function(){});
	setTimeout(function(){
		$('.content_subir').fadeIn(300, function(){})
	},animTime);
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#FFF'});
		$('.creditos').children('span').removeClass('imagina1');
		$('.creditos2').hide();
	},300);
}

function abrirFooter(){
	$('.content_footer').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#FFF'});
	},600);
}

function cerrarFooter(){
	$('.popup1').animate({top: winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#001421'});
	},600);
}

function abrirMasinfo(){
	$('.popup_masinfo').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 0.3}, animTime, 'easeInOutQuart');
}

function cerrarMasinfo(){
	$('.popup_masinfo').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirIngreso(){
	$('#ingreso').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function abrirRecupera2(){
	$('#ingreso_recupera2').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_ingreso').animate({opacity: 1}, animTime, 'easeInOutQuart');
}

function cerrarIngreso(){
	$('.popup_ingreso').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_subir1').animate({opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_solic').animate({opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirTerminos(){
	$('#popup_terminos').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function abrirNotif(){
	window.MusicAll.loadNotifications('tienes');
	$('#popup_notif').show();
	$('#popup_notif').animate({top: 70, opacity: 1}, animTime, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function cerrarNotif(){
	$('.popup_notif').animate({top: 0, opacity: 0}, animTime, 'easeInOutQuart');
	$('.popup_notif').hide(animTime);
}

function abrirListaMusica(){
	$('.popup_mimusica').fadeIn(600, 'easeInOutQuart');
	$('.textoBienvenido').fadeOut(600, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function cerrarListaMusica(){
	$('.popup_mimusica').fadeOut(600, 'easeInOutQuart');
	$('.textoBienvenido').fadeIn(600, 'easeInOutQuart');
}

function abrirRegistro(){
	$('#popup_registro').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

$('#country_id, #country_id2, #country_id3, #country_id4, #country_id5').livequery(function(){return $(this).selectbox();})

function abrirRegistroBanda(value){
	$('.select1').fadeOut(300, 'easeInOutQuart');
	setTimeout(function(){
		$('.' + ucfirst(value)).fadeIn(600, 'easeInOutQuart');
	},310);
}

function abrirGenero(){
	/*if($('#drop_genero').css('display')==('block') & $('#tooltip_genero_tienes').css('display')==('block')){
		$('#tooltip_genero_tienes').fadeOut();
	}else if($('#tooltip_genero_tienes').css('display')==('none') & $('#tooltip_genero_tienes h3').size()>0){
		$('#tooltip_genero_tienes').fadeIn();
	}
	$('#tooltip_uso_tienes').fadeOut();*/
	$('#drop_uso').fadeOut(400, 'easeInOutQuart');
	$('#drop_genero').fadeToggle(400, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function abrirUso(){
	/*if($('#drop_uso').css('display')==('block') & $('#tooltip_uso_tienes').css('display')==('block')){
		$('#tooltip_uso_tienes').fadeOut();
	}else if($('#tooltip_uso_tienes').css('display')==('none') & $('#tooltip_uso_tienes h3').size()>0){
		$('#tooltip_uso_tienes').fadeIn();
	}
	$('#tooltip_genero_tienes').fadeOut();
*/	$('#drop_genero').fadeOut(400, 'easeInOutQuart');
	$('#drop_uso').fadeToggle(400, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function abrirEditar(){
	$('#popup_editar1').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_subir1').animate({opacity: 0.3}, animTime, 'easeInOutQuart');
}

function editaPass(){
	$('#popup_editar1').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar_pass').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
}

function editaPaso2(){
	$('#popup_editar_pass').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar1').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar2').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirNotif2(content){
	$('.popup_notif').animate({top: 0, opacity: 0}, animTime, 'easeInOutQuart');
	$('.content-notification-tienes').html(content);
	$('.popup_notif').hide(animTime);
	$('#notif1').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_subir1').animate({opacity: 0.3}, animTime, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function toRegistroQuieres(){
	$('html, body').animate({scrollLeft: winWidth}, animTime, 'easeInOutQuart');
	$('.footer').fadeOut(700, function(){});
	$('.left_home').css({background: '#001421'});
	setTimeout(function(){
		$('.content_registro_quieres').fadeIn(300, function(){});
	},animTime + 300);
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#FFF'});
		$('.creditos').children('span').removeClass('imagina1');
		$('.creditos2').hide();
	},300);
}

function abrirMasinfo2(){
	$('.popup_masinfo2').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 0.3}, animTime, 'easeInOutQuart');
}

function cerrarMasinfo2(){
	$('.popup_masinfo2').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirIngresoBuscas(){
	$('#ingreso_buscas').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function abrirRecupera(){
	$('#ingreso_recupera').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_ingreso').animate({opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirTerminosBuscas(){
	$('#popup_terminos2').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function abrirRegistroBuscas(){
	$('#popup_registro_buscas').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_registro_quieres').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function totoSolicitud(){
	$('.content_registro_quieres').animate({opacity: 1}, animTime, 'easeInOutQuart');
	setTimeout(function(){
		$('.creditos').children('span').css({color: '#FFF'});
		$('.creditos').children('span').removeClass('imagina1');
		$('.creditos2').hide();
	},300);
	$('.popup_ingreso').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('.footer').fadeOut(700, function(){});
	$('html, body').animate({scrollLeft: 0}, animTime, 'easeInOutQuart');
	setTimeout(function(){
		$('.content_solic').fadeIn(300, function(){})
	},animTime)
}

function abrirEditarBuscas(){
	$('#popup_editar1_buscas').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_solic').animate({opacity: 0.2}, animTime, 'easeInOutQuart');
}

function editaPaso2Buscas(){
	$('#popup_editar1_buscas').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar_pass_buscas').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar2_buscas').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
}
																				
function editaPassBuscas(){
	$('#popup_editar1_buscas').animate({top: 0 - winHeight, opacity: 0}, animTime, 'easeInOutQuart');
	$('#popup_editar_pass_buscas').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
}

function abrirGenero_buscas(){
	/*if($('#drop_genero_buscas').css('display')==('block') & $('#tooltip_genero_buscas').css('display')==('block')){
		$('#tooltip_genero_buscas').fadeOut();
	}else if($('#tooltip_genero_buscas').css('display')==('none') & $('#tooltip_genero_buscas h3').size()>0){
		$('#tooltip_genero_buscas').fadeIn();
	}
	$('#tooltip_uso_buscas').fadeOut();*/
	$('#drop_uso_buscas').fadeOut(400, 'easeInOutQuart');
	$('#drop_genero_buscas').fadeToggle(400, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function abrirUsoBuscas(){
	/*if($('#drop_uso_buscas').css('display')==('block') & $('#tooltip_uso_buscas').css('display')==('block')){
		$('#tooltip_uso_buscas').fadeOut();
	}else if($('#tooltip_uso_buscas').css('display')==('none') & $('#tooltip_uso_buscas h3').size()>0){
		$('#tooltip_uso_buscas').fadeIn();
	}
	$('#tooltip_genero_buscas').fadeOut();*/
	$('#drop_genero_buscas').fadeOut(400, 'easeInOutQuart');
	$('#drop_uso_buscas').fadeToggle(400, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function abrirNotifBuscas(){
	window.MusicAll.loadNotifications('buscas');                                                                                 
	$('#popup_notif_buscas').show();
	$('#popup_notif_buscas').animate({top: 70, opacity: 1}, animTime, 'easeInOutQuart');
	$('.scroll-pane').each(function(){
  	$(this).jScrollPane({showArrows: $(this).is('.arrow')});
		var api = $(this).data('jsp');
 		var throttleTimeout;
  	$(window).bind('resize', function(){
			if ($.browser.msie){
     		if (!throttleTimeout){throttleTimeout = setTimeout(function(){api.reinitialise();throttleTimeout = null;},50);}
			} else {api.reinitialise();}
  	});
 	});
}

function abrirListaProyecto(){
	$('.popup_misproyectos').fadeIn(600, 'easeInOutQuart');
	$('.textoBienvenido_buscas').fadeOut(600, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();
}

function cerrarListaProyectos(){
	$('.popup_misproyectos').fadeOut(600, 'easeInOutQuart');
	$('.textoBienvenido_buscas').fadeIn(600, 'easeInOutQuart');
}

function abrirNotifBuscas2(){
	$('.popup_notif').animate({top: 0, opacity: 0}, animTime, 'easeInOutQuart');
	$('.popup_notif').hide(800);
	$('#popup_notif2').animate({top: 0, opacity: 1}, animTime, 'easeInOutQuart');
	$('.content_solic').animate({opacity: 0.3}, animTime, 'easeInOutQuart');
	$('.scroll-pane').jScrollPane();																																		
}

function ucfirst (str){
  str += '';
  var f = str.charAt(0).toUpperCase();
  return f + str.substr(1);
}

