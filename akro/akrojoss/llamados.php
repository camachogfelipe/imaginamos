<script type="text/javascript">

  $('.slider_home').bxSlider({
    controls:false,
    mode: 'fade',
    captions: true
  });

  $('.bt_menuresponsivo').sidr({
    name: 'sidr-left',
    side: 'left' // By default
  });

$(".bt_perfil, .cont_videoint, .bt_enviar").fancybox({
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

});

$(".bt_enviar").click(function(event){
	event.preventDefault();
	$("#enviado").css({'height':'auto','overflow':'visible'});
	$("#enviado").animate({'opacity':'1'});
	
	posicion_li = $(".bt_enviar").index(this);
	
	llamar_foto = parseInt(posicion_li);
	console.log(llamar_foto);
	
	$(".cont_enviado").css({'height':'auto','overflow':'visible'});
	$(".cont_enviado").animate({'opacity':'1'});

});

$('.slider_proceso').bxSlider({
      pager: false,
      auto: false,
      mode: 'fade'
    });


</script>
