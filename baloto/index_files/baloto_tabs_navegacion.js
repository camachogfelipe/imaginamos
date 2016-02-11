CONTEXT = "body";
(function ($) {
	Drupal.behaviors.baloto_tabs_navegacion = {attach: function(context, settings){
          selects();
          var contslide = 0;
          $(".s-arriba a").click(function(){
            contslide--;
            slidemenu(contslide);
            return false;
          })
          $(".s-abajo a").click(function(){
            contslide++;
            slidemenu(contslide);
            return false;
          })
			$('#quicktabs-tabpage-navegacion_internas_baloto-4 > .item-list .first > a').click(function(){
				$('#quicktabs-que_es_baloto_ > .item-list li').each(function(index, value){
					if($(this).hasClass('active')){
						$(this).removeClass('active');
						if($(this).hasClass('last')){
							$('#quicktabs-que_es_baloto_ > .item-list li.first').addClass('active');
							$('#quicktabs-que_es_baloto_ > .item-list li.first a').click();
							return false;
						}else{
                                                        var active = $(this).next()
							active.addClass('active');
							$('a',active).click();
							return false;
						}
					}
				});
				return false;
			});
			$('#quicktabs-tabpage-navegacion_internas_baloto-4 > .item-list .last > a').click(function(){
				$('#quicktabs-que_es_baloto_ > .item-list li').each(function(index, value){
					if($(this).hasClass('active')){
						$(this).removeClass('active');
						if($(this).hasClass('first')){
							$('#quicktabs-que_es_baloto_ > .item-list li.last').addClass('active');
							$('#quicktabs-que_es_baloto_ > .item-list li.last a').click();
							return false;
						}else{
                                                        var active = $(this).prev()
							active.addClass('active');
							$('a',active).click();
							return false;
						}
					}
				});
				return false;
			});
			$('#quicktabs-navegacion_internas_baloto > .item-list:eq(0)').prepend($('#quicktabs-container-navegacion_internas_baloto > .item-list:eq(0)'));
			$('#quicktabs-container-navegacion_internas_baloto > .item-list:eq(0)').appendTo($('#quicktabs-navegacion_internas_baloto > .item-list:eq(0)'));
		}
	}
})(jQuery);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


 function slidemenu(direct){
   $ = jQuery;
   var contexts = $("#quicktabs-navegacion_internas_baloto > .item-list");
   var corre = $('.quicktabs-style-navlist', contexts).height();
   var dist = contexts.height();
   if (direct == 0) {
     $('.s-arriba a').hide();
   } else {
     $('.s-arriba a').css('display','block');
   }
   if ( (dist*direct)+dist > corre) {
     $('.s-abajo a').hide();
   } else {
     $('.s-abajo a').show();
   }
   contexts.animate({
     scrollTop : dist*direct
   },800);
 }
function selects(){
  $=jQuery;
  if($('.not-front').length == 0){
    $('.form-type-select').each(function(){
      if($('.customStyleSelectBox',this).length == 0){
        $('select',this).customSelect();
      }
    })
  }
}
