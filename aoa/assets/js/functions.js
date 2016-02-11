/*
Author: Jhon Moreno
Author URL: jhonmo09@gmail.com/
*/


$(document).ready(function(e) {
    $('.footer_ahorranito').ahorranito({
		type:1,
		fontColor1:'#818181'
	});
	
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
	if($(".pager-aoa-serv").size()>0){$(".pager-aoa-serv").pajinate({items_per_page:4});  $(".logos_serv").bxSlider({slideWidth:132, minSlides:3, maxSlides:3, moveSlides:1, slideMargin:12, pager:false, infiniteLoop: false, hideControlOnEnd: true});}; 
		if($(".pager-aoa-faq").size()>0){$(".pager-aoa-faq").pajinate({items_per_page:10});}; if($(".pager-aoa-gal").size()>0){$(".pager-aoa-gal").pajinate({items_per_page:1});};
	if($(".car-service").size()>0){$(".car-service").bxSlider({slideWidth:233, minSlides:3, maxSlides:4, moveSlides:1, slideMargin:2, pager:false, infiniteLoop: false, hideControlOnEnd: true});};
});


$(function()
{
	if($('.scroll-pane').size()>0){
		$('.scroll-pane').jScrollPane();
	}
});

function abrirDetalleGal(id){
    $.get('./controllers/galeria.php', { id: id  } , function(datos) {
        $("#contenidogaleriadetalle").html(datos).change();
        $('.scroll-pane').jScrollPane();
          });
	$('.popup_gal').fadeIn(300);
	$('.scroll-pane').jScrollPane();
}


function cerrarGal(){
	$('.popup_gal').fadeOut(300);
	$('.scroll-pane').jScrollPane();
}