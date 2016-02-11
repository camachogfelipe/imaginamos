// Some context var
CONTEXT = "body";
(function($) { 

  // Load Drupal global variables
	Drupal.behaviors.baloto_acumulado = { attach: function(context, settings) {
    	// Global variables used by other functions
      falling_speed = parseInt(Drupal.settings.baloto_acumulado['falling_speed']);
      sorteo_active_rain = parseInt(Drupal.settings.baloto_acumulado['sorteo_active_rain']);
      delay_rain = parseInt(Drupal.settings.baloto_acumulado['delay_rain']);      
      acumulado_speed = parseInt(Drupal.settings.baloto_acumulado['acumulado_speed']);      
      acumulado = Drupal.settings.baloto_acumulado['acumulado'];
    	cifra_uno = Drupal.settings.baloto_acumulado['cifra_uno'];
    	cifra_dos = Drupal.settings.baloto_acumulado['cifra_dos'];
    	cifra_tres = Drupal.settings.baloto_acumulado['cifra_tres'];
    	cifra_cuatro = Drupal.settings.baloto_acumulado['cifra_cuatro'];
    	cifra_cinco = Drupal.settings.baloto_acumulado['cifra_cinco'];
      cifra_seis = Drupal.settings.baloto_acumulado['cifra_seis'];      

      cifras = new Array(
        parseInt(cifra_uno),
        parseInt(cifra_dos), 
        parseInt(cifra_tres), 
        parseInt(cifra_cuatro), 
        parseInt(cifra_cinco), 
        parseInt(cifra_seis)
      );      

      // Revancha esta activo
      revancha_is_active = true;
      
      // Carga asincronamente las imagenes de revancha
      img_tableros = new Image();       
      img_tableros.src = path_to_bacumulado + '/imagenes/img-doble-tablero.png';    
      bkg_revancha = new Image();       
      bkg_revancha.src = path_to_bacumulado + '/imagenes/bkg-revancha.jpg';   
      bkg_tableros = new Image();       
      bkg_tableros.src = path_to_bacumulado + '/imagenes/bkg-dobles.jpg';
      // Configura los respectivos backgrounds
      $('#page-bkg-revancha').css('background-image', 'url(' + path_to_bacumulado + '/imagenes/bkg-revancha.jpg' + ')');
      $('#page-bkg-dobles').css('background-image', 'url(' + path_to_bacumulado + '/imagenes/bkg-dobles.jpg' + ')');

      // Tableros dobles estan activos
      dobles_is_active = false;     
    }     
	}	

  // Function that intitalizes the components
  $(function() {  
    // Code...
    
    // Code if browser is IE 8
    // $('#number-baloto-acumulado').text(acumulado.formatMoney(0, ',', '.'));      
     
    // Initializes 'sorteo' animation   
    $(this).resetBalotas();
    // Load balota background
    bkg_balota = new Image(); 
    bkg_balota.src = path_to_bacumulado + '/imagenes/balota.png';

    // When image is loaded
    bkg_balota.onload = function() {
      // Plays sorteo component
      setTimeout(function(){
        $('#t-balotas').playSorteo();
      }, global_delay_rain);       
      // Plays acumulado component
      $('#number-baloto-acumulado').playAcumulado();
    }
    
  });

  // Function that intitalizes the components 
  // when all is loaded
  $(window).load(function() {
    // Code...        
  });  

  jQuery.fn.triggerRevancha = function() {      
    
    // Revancha queda desactivado
    revancha_is_active = false;
    dobles_is_active = true;
    // Establece el acumulado de la Revancha
    acumulado = Drupal.settings.baloto_revancha['acumulado'];
    // Ocultar bloque
    $('#t-acumulado-wrapper', this).fadeOut('fast');
    // Ocultar logo
    $('#t-logo').fadeOut('fast');   

    setTimeout(function() {      
      var top_distance = $('#t-revancha-logo').offset().top; 
      // Lo dezplasa a la parte superior para ocultarlo
      $('#t-revancha-logo').css('top', top_distance*(-1));
      // Muestra el logo de la revancha
      $('#t-revancha-logo').show();  
      // Lo dezplasa rapidamente hacia abajo
      $('#t-revancha-logo').animate({ top: '+=' + (top_distance + 250)}, 200, function() {
        // Lo dezplasa rapidamente hacia su posicion final
        $('#t-revancha-logo').animate({ top: 0}, 500);
      });
    }, 800);

    setTimeout(function() {
      $('#t-acumulado-wrapper')
      // Reinicia sorteo
      .resetBalotas()
      // Reinicia acumulado
      .restartAcumulado()      
      // Mostrar
      .fadeIn('slow')
      // Establece las cifras de la revancha
      .changeCifras();           

      // Establece la informacion de la revancha
      // $().componentInfoTheme();
      
      // Ocultar background
      $('#page-bkg-normal').fadeOut('slow');
      $('#page-bkg-revancha').fadeIn('slow');
    }, 1500);

    // Inicializar componente
    setTimeout(function() {
      $(this)      
      // Inicializar sorteo
      .playSorteo()
      // Inicializar acumulado
      .playAcumulado();    
    }, 2250);
  }

  jQuery.fn.changeCifras = function() {    
    // Obtine las cifras de la revancha
    cifra_1 = Drupal.settings.baloto_revancha['cifra_1'];
    cifra_2 = Drupal.settings.baloto_revancha['cifra_2'];
    cifra_3 = Drupal.settings.baloto_revancha['cifra_3'];
    cifra_4 = Drupal.settings.baloto_revancha['cifra_4'];
    cifra_5 = Drupal.settings.baloto_revancha['cifra_5'];
    cifra_6 = Drupal.settings.baloto_revancha['cifra_6'];     
    // Cambio en el DOM
    $('#t-balota-uno .balota span').text(cifra_1);
    $('#t-balota-dos .balota span').text(cifra_2);
    $('#t-balota-tres .balota span').text(cifra_3);
    $('#t-balota-cuatro .balota span').text(cifra_4);
    $('#t-balota-cinco .balota span').text(cifra_5);
    $('#t-balota-seis .balota span').text(cifra_6); 
  }

  jQuery.fn.triggerDoubles = function() {          
    // Dobles queda desactivado    
    dobles_is_active = false;
    // Establece el acumulado de la Revancha
    acumulado = Drupal.settings.baloto_revancha['acumulado'];
    // Ocultar bloque
    $('#t-acumulado-wrapper').fadeOut('fast');
    // Ocultar logo
    $('#t-revancha-logo').fadeOut('fast');
    

    setTimeout(function() {
      $().changeCifrasDouble();
      // Ocultar background
      $('#page-bkg-revancha').fadeOut('slow');
      // Mostrar      
      $('#t-logo').fadeIn('slow');  
      $('#t-tablero-doble').append(img_tableros).fadeIn('slow');  
      $('#page-bkg-dobles').fadeIn('slow');         
    }, 1000);
  }

  jQuery.fn.changeCifrasDouble = function() {    
    // Acumulado
    acumulado = Drupal.settings.baloto_revancha['acumulado'];
    cifra_1 = Drupal.settings.baloto_revancha['cifra_1'];
    cifra_2 = Drupal.settings.baloto_revancha['cifra_2'];
    cifra_3 = Drupal.settings.baloto_revancha['cifra_3'];
    cifra_4 = Drupal.settings.baloto_revancha['cifra_4'];
    cifra_5 = Drupal.settings.baloto_revancha['cifra_5'];
    cifra_6 = Drupal.settings.baloto_revancha['cifra_6'];     
    // Cambio en el DOM
    $('#tablero-baloto-revancha .acumulado span').text('$ ' + acumulado.formatMoney(0, ',', '.'));
    $('#tablero-baloto-revancha .cifra-1').text(cifra_1);
    $('#tablero-baloto-revancha .cifra-2').text(cifra_2);
    $('#tablero-baloto-revancha .cifra-3').text(cifra_3);
    $('#tablero-baloto-revancha .cifra-4').text(cifra_4);
    $('#tablero-baloto-revancha .cifra-5').text(cifra_5);    
    $('#tablero-baloto-revancha .cifra-6').text(cifra_6); 

    // Establece las variables de reemplazo
    ciudad = Drupal.settings.baloto_revancha['acumulado_cayo'];
    n_sorteo = Drupal.settings.baloto_revancha['sorteo_numero'];
    f_sorteo = Drupal.settings.baloto_revancha['sorteo_fecha'];

    $('#tablero-baloto-revancha .t-sorteo-info').append($().componentInfoThemed(ciudad, n_sorteo, f_sorteo));

    // Revancha
    acumulado = Drupal.settings.baloto_acumulado['acumulado'];
    cifra_1 = Drupal.settings.baloto_acumulado['cifra_uno'];
    cifra_2 = Drupal.settings.baloto_acumulado['cifra_dos'];
    cifra_3 = Drupal.settings.baloto_acumulado['cifra_tres'];
    cifra_4 = Drupal.settings.baloto_acumulado['cifra_cuatro'];
    cifra_5 = Drupal.settings.baloto_acumulado['cifra_cinco'];
    cifra_6 = Drupal.settings.baloto_acumulado['cifra_seis'];     
    // Cambio en el DOM
    $('#tablero-baloto-acumulado .acumulado span').text('$ ' + acumulado.formatMoney(0, ',', '.'));
    $('#tablero-baloto-acumulado .cifra-1').text(cifra_1);
    $('#tablero-baloto-acumulado .cifra-2').text(cifra_2);
    $('#tablero-baloto-acumulado .cifra-3').text(cifra_3);
    $('#tablero-baloto-acumulado .cifra-4').text(cifra_4);
    $('#tablero-baloto-acumulado .cifra-5').text(cifra_5);    
    $('#tablero-baloto-acumulado .cifra-6').text(cifra_6);   


    // Establece las variables de reemplazo
    ciudad = Drupal.settings.baloto_acumulado['acumulado_cayo'];
    n_sorteo = Drupal.settings.baloto_acumulado['numero_sorteo'];
    f_sorteo = Drupal.settings.baloto_acumulado['fecha_sorteo'];

    $('#tablero-baloto-acumulado .t-sorteo-info').append($().componentInfoThemed(ciudad, n_sorteo, f_sorteo));

  }

  jQuery.fn.componentInfoTheme = function() {    
    // Establece las variables de reemplazo
    ciudad = Drupal.settings.baloto_revancha['acumulado_cayo'];
    n_sorteo = Drupal.settings.baloto_revancha['sorteo_numero'];
    f_sorteo = Drupal.settings.baloto_revancha['sorteo_fecha'];

    var info = '';
    info += '<span>Sorteo No. </span>';
    info += n_sorteo;    
    info += '<span> Fecha del sorteo: </span>';    
    info += f_sorteo;
    if (ciudad) {
      info += '<span> Baloto Cayo en: </span>';
      info += ciudad;
    }

    $('#t-sorteo-info').html(info);
  } 

  jQuery.fn.componentInfoThemed = function(ciudad, n_sorteo, f_sorteo) {    
    var info = '';    
    info += '<span>Sorteo No. </span>';
    info += n_sorteo;    
    info += '<span> Fecha del sorteo: </span>';    
    info += f_sorteo;
    if (ciudad) {
      info += '<span> Baloto Cayo en: </span>';
      info += ciudad;
    }  

    return info;
  }

})(jQuery);