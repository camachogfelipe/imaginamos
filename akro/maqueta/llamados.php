<script type="text/javascript">
	
	$('.slider_home').children("li").length;
  if($('.slider_home').size()>0){$('.slider_home').bxSlider({auto: ($('.slider_home').children("li").length > 1)?true:false, controls:false, mode: 'fade', pager: ($('.slider_home').children("li").length > 1)?true:false, pause: 6000, captions: true});};

  $('.bt_menuresponsivo').sidr({
    name: 'sidr-left',
    side: 'left' // By default
  });

$(".bt_perfil, .cont_videoint").fancybox({
  'autoScale' : true,
  'transitionIn' : 'none',
  'transitionOut' : 'none'
});

$(".bt_perfil").click(function(event){
  event.preventDefault();
    $("#perfiles").css({'height':'auto','overflow':'visible'});
    $("#perfiles").animate({'opacity':'1'});
    posicion_li = $(".bt_perfil").index(this);

    llamar_foto = parseInt(posicion_li);

    console.log(llamar_foto);
    
    $(".cont_perfiles").eq(llamar_foto).css({'height':'auto','overflow':'visible'});
    $(".cont_perfiles").eq(llamar_foto).animate({'opacity':'1'});

})

$('.slider_proceso').bxSlider({
      pager: false,
      auto: false,
      mode: 'fade',
			speed: 100
    });


</script>
