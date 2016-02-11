
$(window).load(function() {

   $(function(){
  
  
  var $container = $('#container_enterate'),
  $enteratess = $('.botones_enterate');
  
  $container.isotope({
    itemSelector: '.botones_enterate',
    masonry: {
      columnWidth: 10
    },
    getSortData : {
      selected : function( $enterates ){
        // sort by seleccionado first, then by original order
        console.log($enterates);
        return ($enterates.hasClass('seleccionado') ? -500 : 0 ) + $enterates.index();
      }
    },
    sortBy : 'seleccionado'
  })

   //$container.isotope('destroy')
  
  $(".mas_enterate").click(function(event) {
  event.preventDefault();

    var $this = $(this).parent().parent().parent("");

    // don't proceed if already selected
    var $previousSelected = $('.seleccionado');
    if ( !$this.hasClass('seleccionado') ) {
      $this.addClass('seleccionado');
    }
    
    $previousSelected.removeClass('seleccionado');
    
    // update sortData for new enteratess size
    $container
      .isotope( 'updateSortData', $this )
      .isotope( 'updateSortData', $previousSelected )
      .isotope();
    
  });

});

  /*centrar*/

$(window).resize(function(){



var ancho_ventana = $(window).width();

//Resoluciones

if(ancho_ventana < 1020 ) {
  $(".menuala_izquierda").stop(true).animate({left: "-150", opacity: "0",}, 500);
  $(".menu_responsivo").stop(true).animate({top: 0}, 500);
  $(".abrirsecciones_trabaje").stop(true).animate({width: "100%"}, 500);
}
else {
  $(".menuala_izquierda").stop(true).animate({left: "-25", opacity: "1",}, 500);
  $(".menu_responsivo").stop(true).animate({top: -50}, 500);
  $(".abrirsecciones_trabaje").stop(true).animate({width: "31%"}, 500);
}

if(ancho_ventana > 1020 ) {

jQuery.sidr('close','sidr-right');
jQuery.sidr('close','sidr-left');
        $(".cerrarx_trabajeprin").click(function(event) {
          $(".abrirsecciones_trabaje").stop(true).animate({width: "31%"}, 500);
        });

}

$(".bt_principalmueveizq").click(function(event) {
  event.preventDefault();

  posicion_li = $(this).parent("ul").children("li").index(this);
  activar_bt = parseInt(posicion_li);


  $(".nav_principal2").each(function() {

    var ancho_ventanaactual = $(window).width();
    var elemento = $(this);
    var posicion = elemento.offset();

      $(this).addClass("menuala_izquierda");
      $(".bt_navizquierda").addClass("bt_principalpeque");
      $(".copy_homenav1").addClass("copy_homenav1peque");


      if(ancho_ventanaactual > 1020 ) {
          $(".menuala_izquierda").css("opacity", "1");
      }


      $(".nav_principal1").stop(true).animate({opacity: 0}, 1);
      $(elemento).css({'left':posicion.left,'top':posicion.top, 'position':'fixed', 'z-index':'100'}); 

      
      $(this).stop(true).animate({ 
        height: "460px",
        width: "80px",
        left: "-25",
        top: "50" ,
        overflow: "visible"
       }, 800, function(){
        $('.bt_principalpeque:eq(0)').css('top','0');
        $('.bt_principalpeque:eq(1)').css('top','-12px');
        $('.bt_principalpeque:eq(2)').css('top','-24px');
        $('.bt_principalpeque:eq(3)').css('top','-36px');
        $('.bt_principalpeque:eq(4)').css('top','-48px');
        $('.bt_principalpeque:eq(5)').css('top','-60px');
        if(ancho_ventana < 1020 ) {
          $(this).stop(true).animate({left: -800}, 100);
        }
        $(this).css("overflow", "visible")
        $('.cont_navprincipal').css("overflow", "hidden")
        $('.cont_navprincipal').stop(true).animate({
          height: "0",
        }, 50, function(){
          $(".nav_principal2").children("li").eq(activar_bt).addClass("bt_navizquierda_activo");
          $(".lista_menuresponsivo").children("li").eq(activar_bt - 1).addClass("active");
        });
      });

  });
  return false;

});




$(".logo_prin").click(function(event) {
       event.preventDefault();

  var ancho_ventanaactual = $(window).width();

  $(".bt_navizquierda").removeClass("bt_principalpeque");
  $(".copy_homenav1").removeClass("copy_homenav1peque");
  $('.bt_navizquierda').removeClass("bt_navizquierda_activo");
  $('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  $('.cont_navprincipal').css({'height':'auto','overflow':'visible'});

    $(".nav_principal1").each(function() {

      var elemento = $(this);
      var elemento_width = $(this).outerWidth()
      var elemento_height = $(this).outerHeight()
      var posicion = elemento.offset();
      var posicion2 = $(".nav_principal2").offset();
      console.log(posicion.left);

       if(posicion2.left <= -25 ) {
        $(".nav_principal2").removeClass("menuala_izquierda");
        $(".nav_principal2").css("z-index", "10");
        $(".nav_principal1").css("opacity", "0");
        $(".cont_logosbuscadorhome").stop(true).animate({opacity: 1}, 50);

        if(ancho_ventanaactual < 1020 ) {
          $(".nav_principal2").css("opacity", "0");
        }
        
        $(".nav_principal2").stop(true).animate({height: elemento_height, width: elemento_width, left: posicion.left, top: posicion.top}, 1000, function(){
          console.log("funciona");

          $(".nav_principal2").stop(true).animate({opacity: 0}, 1000, function(){
            $(this).css({'left':0,'top':0, 'position':'absolute'}); 
          });


          $(".nav_principal1").stop(true).animate({opacity: 1}, 500);
        });

        $('.bt_navizquierda:eq(0)').css('top','12px');
        $('.bt_navizquierda:eq(1)').css('top','0');
        $('.bt_navizquierda:eq(2)').css('top','0');
        $('.bt_navizquierda:eq(3)').css('top','0');
        $('.bt_navizquierda:eq(4)').css('top','0');
        $('.bt_navizquierda:eq(5)').css('top','0');

      } 

      });

    return false;

    });





/*trabaje*/

  $(".cont_abrirsecciones_trabaje").each(function() {



    $(this).children(".abrirsecciones_trabaje").click(function(event) {
       event.preventDefault();
       console.log(ancho_ventana);
      $(".detalle_trabaje").css({'height':'0','overflow':'hidden', 'padding':'0', 'opacity':'0', 'margin':'0' });
      $(".cont_seccionestrabajep").css("width", "0");
      $(".abrirsecciones_trabaje").removeClass("abrirsecciones_trabajeactivo");
      $(this).addClass("abrirsecciones_trabajeactivo");
      $(this).parent().next(".detalle_trabaje").stop(true).animate({'opacity':'1'});
      $(this).parent().next(".detalle_trabaje").css({'height':'auto','overflow':'visible', 'padding':'20', 'margin':'20 0  20 0' });
      
      if(ancho_ventana > 1020 ) {
        $(".abrirsecciones_trabaje").stop(true).animate({width: "31%"}, 500);
        $(this).prevAll(".abrirsecciones_trabaje").stop(true).animate({width: "22%"}, 500);
        $(this).nextAll().stop(true).animate({width: "22%"}, 500);
        $(this).stop(true).animate({width: "50%"}, 500);
      }

        


      if(ancho_ventana > 450 ) {
        $(this).children(".cont_seccionestrabajep").stop(true).animate({width: "250px"}, 500);
      }
      
     });

     $(".cerrarx_trabajeprin").click(function(event) {
       event.preventDefault();
       $(this).parent(".detalle_trabaje").css({'height':'0','overflow':'hidden', 'padding':'0', 'opacity':'0', 'margin':'0'});
       $(".cont_seccionestrabajep").css("width", "0");
       $(".abrirsecciones_trabaje").removeClass("abrirsecciones_trabajeactivo");
       
       if(ancho_ventana > 1020 ) {
        $(".abrirsecciones_trabaje").stop(true).animate({width: "31%"}, 500);
      }
    });


  });

$(".bt_postularme").click(function(event) {
       event.preventDefault();
       $(this).next(".cont_formpostularse").stop(true).animate({'opacity':'1'});
       $(this).next(".cont_formpostularse").css({'height':'auto','overflow':'visible'}); 
       $(this).css("display", "none") 
    });

     $(".cerrar_formtrabaje").click(function(event) {
       event.preventDefault();
       $(this).parent(".cont_formpostularse").css({'height':'0','overflow':'hidden'}); 
       $(this).parent(".cont_formpostularse").prev(".bt_postularme").css("display", "block");
    });



       
});

// Ejecutamos la función
$(window).resize();




 });




