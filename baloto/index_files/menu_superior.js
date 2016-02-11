(function($){
   // Funcion encargada del scroll dirigido
  $(function() {
    var scroll = 0;
    var mouse_in = false;
    var posx_pointer = 0;
    var scroll_speed = 5;
    var scroll_limit_right = 0;
    var scroll_limit_left = 0;

    $('#block-baloto-acumulado-menu-superior-quicktabs').mouseover(function(e) {       
      mouse_in = true;
      posx_pointer = e.pageX;
      scroll_limit_right = Math.ceil($('#block-baloto-acumulado-menu-superior-quicktabs').width()/3);  
      scroll_limit_left = Math.ceil($('#block-baloto-acumulado-menu-superior-quicktabs').width() - scroll_limit_right);  

    }).mouseout(function(){
      mouse_in = false;
    });
    
    process = setInterval(function(){
      if (mouse_in) {
        $('#block-baloto-acumulado-menu-superior-quicktabs').each(function() {  
          /* Manejo de scroll */ 
          if (posx_pointer > scroll_limit_right && scroll < $('#tabs-navegacion-h', this).width()) {
            scroll = scroll + scroll_speed;
          }
          if (posx_pointer <= scroll_limit_left && scroll >= scroll_speed) {
            scroll = scroll - scroll_speed;
          }

          /* Manejo de flechas */ 
          if (scroll  > 0) {
            $('.prev-tab', this).addClass('active');
          } else {
            $('.prev-tab', this).removeClass('active');
          }

          if (scroll  < $('#tabs-navegacion-h', this).width() - 15) {
            $('.next-tab', this).addClass('active');
          } else {
            $('.next-tab', this).removeClass('active');
          }
          
          $('#tabs-navegacion-h', this).scrollLeft(scroll);          
        }); 
      }
    }, 10);
  });

  // Funcion encargada de la accion de click sobre 
  // los elementos del menu
  $(function() {       

    // Accion de click sobre un menu
    $('#tabs-navegacion-h .tab-navegacion-h').click(function() {
      // Obtiene el indice clickeado
      var index = $(this).index();
      // Salva el elemento activo
      $.cookie('menu_quicktab_activo', index);

      // EXISTE EL BLOQUE DE QUICKTABS
      if ($('#block-quicktabs-navegacion-internas-baloto').length) {
        // Establece el elemento como activo
        $('#tabs-navegacion-h .tab-navegacion-h').removeClass('active');
        $(this).addClass('active');
        // Click al elemento
        $('a', $('.quicktabs-style-navlist li').eq(index)).click();      
        // Calcula el scroll
        var scroll = $(('a', $('.quicktabs-style-navlist li').eq(index))).offset().top
        
        if (scroll > $('.quicktabs-style-navlist').offset().top + $('.quicktabs-style-navlist').height() - $(window).height()) 
          scroll = $('.quicktabs-style-navlist').offset().top + $('.quicktabs-style-navlist').height() - $(window).height();
        // Scroll vertical
        $("html, body").animate({ scrollTop: scroll}, 500);

      } else {
        // Redirect activo
        $.cookie('menu_quicktab_redirect', 'true');    
        
        // Redirect to home
        location.href='/#/node?qt-navegacion_internas_baloto=' + index + '#qt-navegacion_internas_baloto';        
      }

    });

    $('.btn-tab').click(function() {
      return false;
    });        
  });

$(window).load(function() {
    
  // Actualiza la seleccion del menu
  $().menu_quicktabs_update();
});

  /**
   * Update Custom atp widget
   */
  $.fn.menu_quicktabs_update = function() {
    
    // Si la cookie tiene algun valor    
    if ($.cookie('menu_quicktab_redirect') == 'true') {      
      $('#tabs-navegacion-h .tab-navegacion-h').eq(parseInt($.cookie('menu_quicktab_activo'))).click();
      
      // Evita el redirect en futuros casos
      $.cookie('menu_quicktab_redirect', 'false');
    }
  }

})(jQuery);
