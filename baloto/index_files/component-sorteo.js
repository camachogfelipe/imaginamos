(function($){
  jQuery.fn.playSorteo = function() {    
    // Puts the result on the base
    $('#t-balota-uno .balota').animateBalota(200, 672, 500, false);
    $('#t-balota-dos .balota').animateBalota(400, 672, 500, false);
    $('#t-balota-tres .balota').animateBalota(600, 672, 500, false);
    $('#t-balota-cuatro .balota').animateBalota(800, 672, 500, false);
    $('#t-balota-cinco .balota').animateBalota(1000, 672, 500, false);
    $('#t-balota-seis .balota').animateBalota(1200, 672, 500, false);

    if (sorteo_active_rain == 1) $().rainBalotas(10, 200, 1200);

    return $(this);
  };

  // Create random 'balotas' around the top
  jQuery.fn.rainBalotas = function(balotas) {   
    CONTENT_POSX = $('.t-content').offset().left;

    $($().createBalota(300+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(300, 1000, 800, true);
    $($().createBalota(0+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(500, 1000, 800, true);  
    $($().createBalota(100+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(250, 1000, 800, true);
    $($().createBalota(1000+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(430, 1000, 800, true);
    $($().createBalota(900+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(560, 1000, 800, true);
    $($().createBalota(600+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(680, 1000, 800, true);
    $($().createBalota(500+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(720, 1000, 800, true);
    $($().createBalota(300+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(840, 1000, 800, true);
    $($().createBalota(700+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(1000, 1000, 800, true);
    $($().createBalota(400+CONTENT_POSX)).appendTo('#fireContainer').animateBalota(1100, 1000, 800, true);
    // Revancha
    if (revancha_is_active) {
      setTimeout(function(){
        $('#block-baloto-acumulado-block-acumulado').triggerRevancha();
      }, 4500);
    }

    if (dobles_is_active) {
      setTimeout(function(){
        $('#block-baloto-acumulado-block-acumulado').triggerDoubles();
      }, 4500);
    }
    
  };

  // Create one instance of a 'balota' with a random
  // Number diferent from the 'sorteo' entity
  jQuery.fn.createBalota = function(left) {
    // Random number different from originals
    var random = $().randomCifra();

    // Markup of random balota
    var markup = '';
    markup += '<div class="random-balota" style="left: ' + left + 'px; top:-228px;">'
    markup += '<span class="cifra">' + random + '</span>';
    markup += '</div>';

    return markup;
  };

  // Takes the 'balotas' instances to the initial point
  jQuery.fn.resetBalotas = function() {      
    // Puts the 'balota' at intial position
    $('.balota').css('top', '-774px');

    return $(this);
  };   

  // Animate one 'balota' at an specific moment
  jQuery.fn.animateBalota = function(time, fall, vspeed_time, destroy) {    
    var THIS = this;
    setTimeout(function(){
      // Plays balota animation until base
      $(THIS).animate({    
        top: '+=' + fall,    
      }, falling_speed, "linear", function() {
        if(!destroy) $(THIS).effect("bounce", { times:1, distance:100 }, 600);
        if(destroy) $(THIS).remove();
      });

    },time);
  };


  // Resolves one random number for a 'balota'
  // random instance
  jQuery.fn.randomCifra = function() {    
    var random = Math.floor(Math.random()*46);
    
    
    if(jQuery.inArray(random, cifras) == -1) {
      // Adds a new number to avoid repetition
      cifras.push(random);
      // Returns the random number
      return random;
    } else {
      // Continues looking again for a new one
      return $().randomCifra();
    }    
  };


})(jQuery);