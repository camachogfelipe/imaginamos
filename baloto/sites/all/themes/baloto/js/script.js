CONTEXT = "body, html";
(function(){
    var special = jQuery.event.special,
        uid1 = 'D' + (+new Date()),
        uid2 = 'D' + (+new Date() + 1);
    special.scrollstart = {
        setup: function() {
            var timer,
                handler =  function(evt) {
                    var _self = this,
                        _args = arguments;
                    if (timer) {
                        clearTimeout(timer);
                    } else {
                        evt.type = 'scrollstart';
                        jQuery.event.handle.apply(_self, _args);
                    }
                    timer = setTimeout( function(){
                        timer = null;
                    }, special.scrollstop.latency);
                };
            jQuery(this).bind('scroll', handler).data(uid1, handler);
        },
        teardown: function(){
            jQuery(this).unbind( 'scroll', jQuery(this).data(uid1) );
        }
    };
    special.scrollstop = {
        latency: 300,
        setup: function() {
            var timer,
                    handler = function(evt) {
                    var _self = this,
                        _args = arguments;
                    if (timer) {
                        clearTimeout(timer);
                    }
                    timer = setTimeout( function(){
                        timer = null;
                        evt.type = 'scrollstop';
                        jQuery.event.handle.apply(_self, _args);
                    }, special.scrollstop.latency);
                };
            jQuery(this).bind('scroll', handler).data(uid2, handler);
        },
        teardown: function() {
            jQuery(this).unbind( 'scroll', jQuery(this).data(uid2) );
        }
    };
})();
jQuery.fn.overlapped = function () {
    var $ = jQuery;
    var label = $(this);
    var ninput = this.attr('for');
    var input = $('#' + ninput);
    input.focus(function () {
        label.hide();
    });
    input.blur(function () {
        if (input.val() == "") label.show();
    });
    if (input.val() != "") label.hide();
    return this;
};

(function ($) {
  $(function(){    
    var arrVal = new Array();
  
    $('body.front').ajaxStart(function() {
      if($('.customStyleSelectBox',this).length == 0){
        $('select',this).customSelect();
      }
      $('#s-consulta-revancha .form-type-textfield input').each(function(ind) {
        arrVal[ind] = $(this).val();
      })
    });

    $('body').ajaxStop(function() {       
      if($('.customStyleSelectBox',this).length == 0){
        $('select',this).customSelect();
      }

      // $('#s-consulta-revancha .form-type-textfield input').each(function(ind) {
      //   $(this).removeClass('p-coincide');
      //   var tmp = $(this).val()
      //   if(arrVal[ind] == $(this).val() && $(this).val() != ''){
      //       $(this).addClass('p-coincide');
      //   }
      // })
    });
  });
  $(document).ready(function(){
    $('.form-type-select').each(function(){
      if($('.customStyleSelectBox',this).length == 0){
        $('select',this).customSelect();
      }
    })
    apareceinicio();
    scrolleado();
    flechas();
    alturaslide();
    $(".form-submit", '#-baloto-sorteos-anteriores-form').live("click",function(e){
      e.preventDefault();
      if($('#-baloto-sorteos-anteriores-form .s-encierra-submit').hasClass('sub-baloto')){
        $('#-baloto-sorteos-anteriores-form .s-encierra-submit').removeClass('sub-baloto').addClass('sub-revancha')
        $(this).attr('value','Click para ver Baloto');
        $('#edit-ganador-tittle label').html('Revancha ganador');
      } else {
        $('#-baloto-sorteos-anteriores-form .s-encierra-submit').removeClass('sub-revancha').addClass('sub-baloto')
        $(this).attr('value','Click para ver Revancha');
        $('#edit-ganador-tittle label').html('Baloto ganador');
      }
    });
    $(".webform-component label", CONTEXT).each(function () {
      $(this).overlapped();
    })
    $('.views-exposed-widget :input').keypress(function(){
      if (!$(this).hasClass('active')) {
        $(this).addClass('active');
      };
    })
    $('.views-exposed-widget :input').blur(function(){
      var balota_value = $(this).val();
      if (!balota_value) {
        $(this).removeClass('active');
      }
    });
    var ul = $('.quicktabs-wrapper > .item-list > ul');
    $('.active',ul).click(function(){
      scrolleado();
      flechas();
    })
    $('.views-accordion-header a',CONTEXT).click(function(){
      window.setTimeout('scrolleado()',200);
      window.setTimeout('flechas()',200);
    })
    $('#quicktabs-navegacion_internas_baloto .item-list li a').click(function(){
      alturaslide();
    });
    $('#quicktabs-navegacion_internas_baloto .item-list:eq(0) .quicktabs-tabs.quicktabs-style-navlist > li > a').click(function(){
      var uri = $(this).attr('href');
      location.hash=uri;
    })
    $('#quicktabs-navegacion_internas_baloto .item-list:eq(0) .quicktabs-tabs.quicktabs-style-navlist > li > a').each(function(ind){
      var uri = '#'+$(this).attr('href');
      if(location.hash==uri){
        var altura = 0;
        var activo = $('#quicktabs-container-navegacion_internas_baloto > #quicktabs-tabpage-navegacion_internas_baloto-'+ind);
        if($('.views_slideshow_cycle_main',activo).length != 0){
          setTimeout(function(){
            var quien = $('.views-slideshow-cycle-main-frame-row.views_slideshow_cycle_slide.views_slideshow_slide.views-row-1.views-row-odd',activo);
            var altura = quien.height();
            var padre = quien.parent();
            padre.height(altura);
          },400); 
        }
        $(this).click();
      }
    })
  });
  detectOrientation();
  window.onorientationchange = detectOrientation;
  $(window).scroll(function(){
     scrolleado();
  })
  jQuery(window).bind('scrollstop', function(e){
    flechas();
  });
})(jQuery);

function alturaslide(){
  var alto = $('#views_slideshow_cycle_teaser_section_terminos_uso-como_ganar_cobrar > div:eq(0)').height();
  $('#views_slideshow_cycle_teaser_section_terminos_uso-como_ganar_cobrar').css('height', alto);
  var alto_2 = $('#views_slideshow_cycle_teaser_section_terminos_uso-comojugar > div:eq(0)').height();
  $('#views_slideshow_cycle_teaser_section_terminos_uso-comojugar').css('height', alto_2);
}


function apareceinicio(){
  $ = jQuery;
  var pantalla = $(window).height();
  var altop = pantalla-80;
  /*if($(".region-top").length == 0) {
    altop = 200;
    //$("#top").css('min-height',altop);
  }*/

  $("#page-wrapper").show().animate({
    opacity: 1
  }, 1000, function(){
    $('body').css('background','URL(/sites/all/themes/baloto/images/fondo-textura.png)');
    $("#cargainicio").hide();
  });
  
  $("#block-menu-menu-menu-principal a[href='/']").click(function(){
    $(CONTEXT).animate({
      scrollTop: pantalla + 230
    },500);
    return false;
  });
  $(".s-top").click(function(){
    $(CONTEXT).animate({
      scrollTop: 0
    },500);
    return false;
  });
}


function scrolleado(){
  $=jQuery;
  var contenedor = $('.region.region-content').height();
  var contenido = $('#quicktabs-container-navegacion_internas_baloto').height() + 90;
  var content = $('.region.region-content').offset();
  var internas = $('#quicktabs-container-navegacion_internas_baloto');
  var back = $('.s-top');
  var ventana = $(document).scrollTop();
  var left = content.left;
  var top = (ventana) - content.top;
  var tope = contenedor - contenido;
  if(ventana < content.top){
    internas.css({'position':'absolute','top':'30px','left':'220px'})
    back.hide();
  } else if(contenedor + content.top < (ventana) + contenido){
    internas.css({'position':'absolute','left':'220px','top':tope})
    back.show();
  } else  if((contenido + top < contenedor)){
    internas.css({'position':'fixed','top':'30px','left':left+220});
    back.show();
  }
  else if(($(window).height() < contenido+40) && (ventana + $(window).height() < contenedor + content)){
    internas.css({'position':'absolute','left':'220px','top':tope})
    back.show();
  }

}

function flechas() {
  var ul = $('#quicktabs-navegacion_internas_baloto > .item-list > ul');
  var active = $('li.active',ul).position();
  var content = $('#quicktabs-container-navegacion_internas_baloto');
  var contenedor =  $('.region.region-content').offset();
  var center = $('.s-centro');
  var abajo = $('.s-abajo');
  var arriba = $('.s-arriba');
  var top = (content.offset().top-30) - contenedor.top;
  var desplaza = active.top - top;
  if(desplaza > content.height()){
    center.hide();
    abajo.show();
    arriba.hide();
  } else if(desplaza < 5){
    center.hide();
    abajo.hide();
    arriba.show();
  } else {
    arriba.hide();
    abajo.hide();
    center.show();
    center.animate({top:desplaza},300);
  }
  return false;
}





/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  function detectOrientation(){
    if(typeof window.onorientationchange != 'undefined'){
      jQuery('#quicktabs-container-navegacion_internas_baloto').css({'position':'absolute !important','left':'220px','top':'30px !important'})
    }
  }
