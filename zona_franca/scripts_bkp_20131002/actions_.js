$(document).ready(function() {


  /******** Formulario registro usuario **************/

   $(function() {
    $( "#datepicker , [id= datepicker1], #datepicker2, #datepiker3, #datepiker4" ).datepicker();
  });

  /*var numend;
  var numfield=0;
  var currfield;
  var nextfield;
  var newDiv; 


    
  $("#next_btn").click(function(){
    numfield ++;
    numend = $("fieldset").length;

    if (numfield < numend) {
      currfield=$("#info"+numfield);
      nextfield=$("#info"+(numfield+1));
      //alert(numfield);
      currfield.hide();
      nextfield.show();
    }
    else{
      alert("Finalizado");
    }
  });

   $("[id=add_btn]").click(function(){
    currfield = $(this).parent().parent().find(".paste_sp");
    alert(currfield);
     currfield.clone().insertAfter('[class =paste_sp]:last');
     newDiv =  $(".paste_sp").clone().insertAfter('.paste_sp');
   
     newDiv .find("") ).datepicker();
     
    }); */
   
/******** END Formulario registro usuario **************/

  $('form:nth-of-type(1) > select').msDropdown();
  $(".select_dd").msDropDown().data("dd");
  $('form').customForm();
    $('input[placeholder]').placeholder();
  $(".header > div > div:nth-of-type(1) ul").bxSlider({
      mode: 'fade',
      pause: 20000,
      auto: true,
      controls: false, 
      pager: false,
      easing: 'ease'   
  });

    $(".ultimas > ul").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });
  $(".cargos > div > ul").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });
  $(".destacados > div > div:nth-of-type(1) > ul").bxSlider({
      mode: 'fade',
      pause: 5000,
      auto: true,
      controls: true, 
      pager: true,
      easing: 'linear',
      pagerShortSeparator: '/'
  });
  $(".socios > div > div:nth-of-type(1) > ul").bxSlider({
      slideWidth: 745,
      auto: true,
      pause: 5000,
      controls: false, 
      pager: false,
      minSlides: 4,
      maxSlides: 4,
      moveSlides: 1,
      slideMargin: 0
  });
  $('.footer-ahorranito').ahorranito({
    type:1,
    fontColor1:'#fff',
    height: 30
  });


//LLAMADOS INTERNAS

  $("ul.slider_ofertasdesc").bxSlider({
      mode: 'horizontal',
      pause: 5000,
      auto: false,
      controls: true, 
      pager: true,
      pagerType: 'short',
      easing: 'ease',
      pagerShortSeparator: '/'
  });

/* FANCYBOX */

$('.fancybox').fancybox();

$(".carga_emergente").fancybox({
  'scrolling' : 'no',
  'width' : '700px',
  'height' : '700px',
  'autoScale' : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe'
});

//MENU OFERTAS EMPLEO

$(".campo_ofertaempleo").hover(function(){
  $(this).children().children("ul").stop(true).slideDown();
});
  
$(".campo_ofertaempleo").mouseleave(function(){
  $(this).children().children("ul").css("display", "none")
 });

$(".campo_areasempleo").hover(function(){
  $(this).children().children("ul").stop(true).slideDown();
});
  
$(".campo_areasempleo").mouseleave(function(){
  $(this).children().children("ul").css("display", "none")
 });


 
/*** end document ready***/
});



