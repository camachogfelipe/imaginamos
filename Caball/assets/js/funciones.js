//* Autor: Esteban Vera
// Twitter: @kiokotzu
// Email:esteban.vg@outlook.com, esteban.vera@imagina.co */

$(window).load(function(){
  
  $('.loader').fadeOut();

    /*-------activo menu-------*/
    setTimeout(function(){
      var url_completa = location.href;
      var url_incio = url_completa.lastIndexOf("/"); 
      var pagina_actual = url_completa.slice(url_incio+1);
      $("nav ul li a[href='"+ pagina_actual +"']").addClass("activo");

      if(pagina_actual == "" || pagina_actual == "index.php"){
        $('.contactenos').fadeOut();
        $("nav ul li:nth-child(1) a").addClass("activo");
        $(window).scroll(function(){
          var distancia = $('.destacado2').offset();
          if ($(this).scrollTop() > distancia.top) {
            $('.contactenos').fadeIn();
          } else {
            $('.contactenos').fadeOut();
          }
        });
      }else if(pagina_actual == 'sub_prod.php' || pagina_actual ==  'catalogo_prod.php' || pagina_actual ==  'detale_catalogo.php'){
        $("nav ul li:nth-child(3) a").addClass("activo");
      }else if(pagina_actual == 'detale_noticia.php'){
        $("nav ul li:nth-child(5) a").addClass("activo");
      }
    },500)

})

$(function(){

  var sudoSlider = $(".slider").sudoSlider({
    auto:true,
    continuous:true,
    responsive: true,
    prevNext: true,
    numeric: true,
    resumePause: 10000,
    pause:5000
  }); 

  /*---------------pop-ups-------------------*/
  $('.galeria').click(function(){
    $('.popup-gallery a').eq(0).click();    
  });

  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small></small>';
      }
    }
  });

  $('.popup-with-form').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#name',
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });

  // /*--------------Slider carrusel----------------*/
  var _sudoSlider = $(".slidercarrusel").sudoSlider({
    slideCount:3,
    continuous:true,
    numeric:false,
    auto:true,
    pause:3000,
    prevNext: true,
    resumePause: 5000,
  });

  /*----desplegar menu--------*/
  $('.menu').on("click", function(){
      if(!$(this).hasClass('activo2')){
          $(this).addClass('activo2');
          $('.menu2').slideDown();
      }else{
          $(this).removeClass('activo2');
          $('.menu2').slideUp();
      }
  });  

  /*---------mostrar video---------*/
    $('.videoss:first').on("click", function(){
      if(!$(this).children('div').hasClass('girar')){
          $(this).children('div').addClass('girar');
          $('.videos:first').slideDown();
      }else{
          $(this).children('div').removeClass('girar');
          $('.videos:first').slideUp();
      }
    });  

  /*-----------Validador formulario--------*/
    $(".formulario form, .pagar form").validationEngine('attach');
    $('.tel').mask('000000000000');

 /*------form contactenos-----------*/
 $('.contactenos').click(function(){
  $(this).fadeOut();
    $('.formulario').css({'right': 0});
    $('body').append('<div class="sombra2"></div>');
 });
   
   $('body').on('click','.cerrar, .sombra2', function(){
    $('.formulario').css('right', -320+'px');
    $('.sombra2').fadeOut(500, function() {
      $('.sombra2').remove();
      $('.contactenos').fadeIn();
    });
  });

  $(document).keyup(function(t) {
    if(t.keyCode == 27){
      $('.formulario').css('right', -320+'px');
        $('.sombra2').fadeOut(500, function() {
        $('.sombra2').remove();
        $('.contactenos').fadeIn();
      });
    }
  });

  // /*------checkbox-------*/
    var check = false;
    $('.check').click(function() {
      if(check == false){
        $(this).addClass('activo_check');
        $('.cont_check').find('input').prop('checked', true);
        check = true;
      }else{
        $('.cont_check').find('input').prop('checked', false).removeClass('activo_check');
        $(this).removeClass('activo_check');
        check = false;
      }
    }); 

  // /*--------scroll pop-up--------------*/
  $('.texto_ter').jScrollPane();
  $('.terminos').hide();
  $('.pagar').addClass('mfp-hide');
  $('.condiciones').click(function(){
    $('.terminos').slideDown();
  });

  $('.cerrar2').click(function() {
    $('.terminos').slideUp('slow');
  });

  $('.contactenos2').click(function(){
    $('.contactenos').click();
    /*$('.menu2').slideUp();*/
  })


  // /*---------------paginador----------------*/
  $('.destacado2 > ul, .sub_categoria_prod > ul, .catalago > ul').eq(0).fadeIn();
  $('.numeric a:nth-child(1)').addClass('activopaginador');

  $('.numeric a:nth-child(1)').click(function() {$('.uno').hide(); $('.dos').fadeIn('slow'); $('.numeric a').removeClass('activopaginador'); $(this).addClass('activopaginador'); });
  $('.numeric a:nth-child(2)').click(function() {$('.dos').hide(); $('.uno').fadeIn('slow'); $('.numeric a').removeClass('activopaginador'); $(this).addClass('activopaginador'); });

   var ieVersion;
   if (navigator.appName == "Microsoft Internet Explorer") {
    ie = true;    
    var ua = navigator.userAgent;
    var re = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
    if (re.exec(ua) != null) {
        ieVersion = parseInt(RegExp.$1);
    }
  }
  else {
      ie = false;
  }
  if(ieVersion < 9){
     $('body').append('<div class="fondoblanco"></br></br><div class="wrapper"><p>El navegador que está utilizando actualmente no es compatible con las nuevas tecnologías que se estÃ¡n implementando en esta página, por favor actualice su versión o instale una navegador alternativo</p></br></br><a href="https://www.google.com/intl/es/chrome/browser/?brand=CHMO" target="_black"><strong>Google Chrome</strong></a></br></br><a href="http://www.mozilla.org/es-ES/firefox/new/" target="_black"><strong>Mozilla Firefox</strong></a></br></br><a href="http://www.opera.com/es-419/computer/windows" target="_black"><strong>Opera</strong></a></br></br><a href="http://support.apple.com/kb/dl1531?viewlocale=es_ES&locale=es_ES" target="_black"><strong>Safari</strong></a></br></br><a href="http://windows.microsoft.com/es-co/internet-explorer/ie-10-worldwide-languages" target="_black"><strong>Internet Explorer 10</strong></a></br></br></div></div>');
  } 
})

