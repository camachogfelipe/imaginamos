// JavaScript Document

// Scroll
  $('.menu_principal').localScroll(1500);

/* Tooltip */ 
  $(function () {
    $('.conttoltip').tooltip();
  });

/*  Check y Radios */  
  $('input').ezMark();

/*  Scroll */ 
  $('.cont_scroll').jScrollPane(
    {
      verticalDragMinHeight: 70,
      verticalDragMaxHeight: 70,
      horizontalDragMinWidth: 20,
      horizontalDragMaxWidth: 20,
      showArrows: false,
      autoReinitialise: true
    }
  );

/*  Slides  */ 
$('#slide_perfiles').bxSlider({
    slideWidth: 142,
    minSlides: 1,
    maxSlides: 5,
    slideMargin: 2,
    pager: false,
    moveSlides: 1,
    auto: false,
    autoHover: false
  });

$('#slider_productos1').bxSlider({
    slideWidth: 210,
    minSlides: 1,
    maxSlides: 3,
    slideMargin: 20,
    pager: false,
    moveSlides: 1,
    auto: false,
    autoHover: false
  });

/*  Acordeon  */ 
$(".topnav").accordion({
    accordion:false,
    speed: 500,
    closedSign: '[+]',
    openedSign: '[-]'
  });

/* Modal */ 

$(".carga_modal").fancybox({
  'width' : 960,
  'height' : 600,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalregistrarse").fancybox({
  'width' : 450,
  'height' : 200,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalpeque").fancybox({
  'width' : 500,
  'height' : 350,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalmediana").fancybox({
  'width' : 620,
  'height' : 600,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalmediana2").fancybox({
  'width' : 620,
  'height' : 300,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalmediana3").fancybox({
  'width' : 620,
  'height' : 180,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$(".carga_modalpequealta").fancybox({
  'width' : 500,
  'height' : 650,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
}); 

$("#check_newsletter").click(function(){
    $("#oculto_link").trigger('click');
});