/*
Author: Jhon Moreno
Author URL: jhonmo09@gmail.com/
*/

//$(window).load(function(e) {$('#loader').fadeOut('slow');});



var over=0; 
var envio = 0; 
var papel = 0; 
var precio_ant = 0; 
var precio_ant_cant = 0; 
var precio_ant_cant_sobre = 0; 
var precio_ant_sobre = 0

$(window).load(function(){
setTimeout(function(){$('#big-88').click();},2000);
});


$(document).ready(function(e) {

	/*$('.cambia_color').click(function () {
		$.ajax({
          url:, 
          dataType: 'JSON',
		  data: 'id='+$(this).attr('id'),
          success: function (data) {
              alert(data);
          },
          error: function (jqXHR, textStatus, errorThrown) {
           alert('Stado del Error: '+textStatus+'\n error:'+errorThrown);              
          }
        });
	});*/
	
     
     $('.papel').change(function(){
       $this_data = $(this);   
            if(precio_ant != 0){  
               var total = parseFloat($('#total').data('precio')); 
               result =  total - precio_ant; 
               $('#total').data('precio',result); 
               precio_ant = 0; 
            }else{
               result = parseFloat($('#total').data('precio')); 
            }
			$('#papel_producto_precio').val($this_data.data('precio'));
            var diseno = parseFloat($this_data.data('precio'))*parseFloat($('#cantidad_producto_id').data('precio')); 
            precio_ant = diseno; 
            var result = (result+diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
			
         $.ajax({
          url:$this_data.data('url'), 
          dataType: 'html',
          success: function (data) {
              if(parseInt(data) != 0){
                $("#color_papel").html(data);
              }
          },
          error: function (jqXHR, textStatus, errorThrown) {
           alert('Stado del Error: '+textStatus+'\n error:'+errorThrown);              
          }
        });
        
       
    });
	
	
    
    $('#diseno').change(function(){
         if($('#diseno').is(':checked')){
            var diseno = parseFloat($('#diseno').data('precio')); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
             $('#req').fadeIn(); 
         }else{
            var diseno = parseFloat($('#diseno').data('precio')); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#req').fadeOut(); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
         }
    });
    
      $('#dorso').change(function(){
         if($('#dorso').is(':checked')){
            var diseno = parseFloat($('#dorso').data('precio')) * parseFloat($('#cantidad_producto_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
         }else{
            var diseno = parseFloat($('#dorso').data('precio')) * parseFloat($('#cantidad_producto_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#total').data('precio',result);
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
         }
    });
	
	 $('.sticker_cierre').change(function(){
         var data_this = $(this);
		 if(data_this.is(':checked')){
			 $('.sticker_cierre').attr('checked',true);
            var diseno = parseFloat(data_this.data('precio')) * parseFloat($('#'+data_this.data('id_sobre')).val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
         }else{
			 $('.sticker_cierre').removeAttr('checked');
            var diseno = parseFloat(data_this.data('precio')) * parseFloat($('#'+data_this.data('id_sobre')).val()); 
	        var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
         }
    });
    
    $('#envio').change(function(){
         if($('#envio').is(':checked')){
            var diseno = parseFloat($('#envio').data('precio')); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
            envio = 1; 
            $('#total').data('precio',result); 
            result = $.number( result , 0 , '.' );
            $('#total').html('TOTAL: $'+result);
         }else{
             envio = 0;   
         }
    });
    
    $('#envio1').change(function(){
           if(envio == 1){
            var diseno = parseFloat($('#envio').data('precio')); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
           }
    });
	
	$('.color_diseno_act').click(function(){
		  $('#color_diseno_actual').val($(this).data('color')); 
    });
	
    
    $('#cantidad_producto_id').change(function (){
         if($('#dorso').is(':checked')){
		  var diseno = parseFloat($('#cantidad_producto_id').val()); 
          precio_ant_cant = diseno; 
          
          result = $.number( $('#total').data('precio') , 0 , '.' );
          $('#total').html('TOTAL: $'+ result); 
         if($('#dorso').is(':checked')){
            var diseno = parseFloat($('#dorso').data('precio')) * parseFloat($('#cantidad_producto_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
         }else{
		    var diseno = parseFloat($('#dorso').data('precio')) * parseFloat($('#cantidad_producto_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#total').data('precio',result);
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
          }
		}
    }); 
    
     
    $('#cantidad_sobre_id').change(function (){
         if($('.sticker_cierre').is(':checked')){
		  var diseno = parseFloat($(this).val()); 
          precio_ant_cant = diseno; 
          result = $.number( $('#total').data('precio') , 0 , '.' );
          $('#total').html('TOTAL: $'+ result); 
          if($('.sticker_cierre').is(':checked')){
            var diseno = parseFloat($('.sticker_cierre').data('precio')) * parseFloat($('#cantidad_sobre_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total+diseno); 
             $('#total').data('precio',result);
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result);
         }else{
            var diseno = parseFloat($('.sticker_cierre').data('precio')) * parseFloat($('#cantidad_sobre_id').val()); 
            var total = parseFloat($('#total').data('precio')); 
            var result = (total-diseno); 
             $('#total').data('precio',result); 
             result = $.number( result , 0 , '.' );
             $('#total').html('TOTAL: $'+result); 
         }
		 }
    });
    
    $('.ck-5').change(function(){
       $this_data = $(this);   
            var result = 0; 
            if(precio_ant_sobre != 0){  
               var total = parseFloat($('#total').data('precio')); 
               result =  total - precio_ant_sobre; 
               $('#total').data('precio',result); 
               precio_ant_sobre = 0; 
            }else{
                result = parseFloat($('#total').data('precio'));  
            }
			
            var diseno = parseFloat($this_data.data('precio'));
			$('#papel_sobre_precio').val(diseno);
            precio_ant_sobre = diseno;  
            var result = (result+diseno); 
            $('#total').data('precio',result); 
            result = $.number( result , 0 , '.' );
            $('#total').html('TOTAL: $'+result);
    });
    
    
    
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
	
	$(".big_img:first").css({display: "block"}); 
	$(".thumbs:first").css({display: "block"}); 
	$(".con-thumbs-tx:first").css({display: "block"}); 
	
	$(".colors_int a").click(function(){
		$(".thumbs").hide(); 
		$(".con-thumbs-tx").hide(); 
		var ver_contenido = $(this).attr("data-id"); 
		$("."+ver_contenido).stop().fadeIn(200); 
		$(".big_img").css({display: "none"}); 
		/*$(".big_img:first").css({display: "block"});*/
		
		var ver_contenidob = $(this).attr("id"); 
		$(".big_img").removeClass("pepito"); 
		$("."+ver_contenidob).addClass("pepito").css({display: "block"}); 
	}); 
	
	
	
	
	
	
		
	$(".thumbs img").click(function(){$(".big_img").hide(); var ver_contenido = $(this).attr("data-id"); $("."+ver_contenido).stop().fadeIn(200);});
	
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
	
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();}; if($(".modals-act").size()>0){$(".modals-act").fancybox();}; $(".con-papel:odd h1").css({textAlign: "right"}); $(".con-papel:odd img").css({margin: "5px 20px 10px 0px", float: "left"});
	
	if($("#modal-ok").size()>0){$("#modal-ok").fancybox().trigger("click");};
		 
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
/**
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
**/



$( function( ){

	$( "#cantidad_producto_id" ).change( function( ){

		var cambiar_tipo_papel = true;
		$( "input[name=papel_producto_id]" ).each( function( ){
			if( $( this ).is( ":checked" ) ){
				cambiar_tipo_papel = false;
			}
		});
		if( cambiar_tipo_papel === true ){
			$( "#ck-0" ).attr( "checked" , true );
		}

	});
	
});


 