jQuery(window).load(function() {
	/*abrir contacto*/
	jQuery(".bt_contactoheader ").click(function(){
		/*    console.log("finciona");*/
		jQuery(".seccion_contacto").animate({top: 0}, 600);
		jQuery(".opacidad_negro").fadeIn(300);
	});
	
	jQuery(".bt_video").click(function(event){
		/*    console.log("finciona");*/
		var d = event.timeStamp;
		jQuery.ajax({
			 url  :   'enterate/video',
			 type :   'POST',
			 data :   {
					 'id'  : jQuery(this).attr("data-id")
			 },
			 success:function(data){
				 jQuery("#video_enterate").attr("src", data.video+"?"+d);
				 jQuery("#titulo_enterate").html(data.titulo);
				 jQuery("#subtitulo_enterate").html(data.vid_titulo);
				 jQuery("#texto_enterate").html(data.vid_descripcion);
				 jQuery("#img_enterate_min").attr("src", data.vid_path+"?"+d);
			 }
		});
    jQuery(".seccion_video").animate({top: 0}, 600);
    jQuery(".opacidad_negro").fadeIn(300);
  });

  jQuery(".bt_imagenenterate").click(function(){
/*    console.log("finciona");*/
		jQuery("#img_enterate").attr("src", jQuery(this).attr("data-rel"));
    jQuery(".seccion_imagen").animate({top: 0}, 600);
    jQuery(".opacidad_negro").fadeIn(300);
  });
	
	jQuery(".bt_fotoequipo").click(function(event){
			var d = event.timeStamp;
			jQuery.ajax({
				 url  :   'equipo/trabajador',
				 type :   'POST',
				 data :   {
						 'id'  : jQuery(this).attr("data-id")
				 },
				 success:function(data){
					 jQuery("#nombre").html(data.nombre);
					 jQuery("#cargo").html(data.cargo);
					 jQuery("#comentario").html(data.comentario);
					 jQuery("#imagen").attr("src", data.img_min+"?"+d);
					 jQuery("#vc_twitter").attr("data-link", "http://twitter.com/home?status="+data.nombre+" - "+window.location.href);
					 jQuery("#vc_facebook").attr("data-link", "http://www.facebook.com/sharer.php?s=100&p[url]="+window.location.href+"&p[title]="+data.nombre+"&p[summary]="+data.cargo+"&p[images][0]="+URL_SITE+data.img);
					 jQuery("#vc_google").attr("data-link", "https://plus.google.com/share?url="+window.location.href);
					 jQuery("#vc_linkedin").attr("data-link", "http://www.linkedin.com/shareArticle?mini=true&url="+window.location.href+"&title="+data.nombre+"&summary="+data.cargo+"&source="+URL_SITE);					 
				 }
			});
    	jQuery(".seccion_imagenequipo").delay( 800 ).animate({top: 0}, 600);
    	jQuery(".opacidad_negro").fadeIn(300);
  });
  
  jQuery("#cerrar_contacto, #cerrar_video, #cerrar_imagen, #cerrar_seccion_imagenequipo, #cerrar_seccion_imagenequipo, #cerrar_seccion_emerlineas, .opacidad_negro").click(function(){
    jQuery(".seccion_contacto, .seccion_video, .seccion_imagen, .seccion_imagenequipo, .seccion_imagenequipo, .seccion_emerlineas").animate({top: -1500}, 1500);
    jQuery(".opacidad_negro").fadeOut(300);
  });


//menu principal  
jQuery(".bt_principal").hover(function(){
  jQuery(this).children(".info_btgeneral").stop(true).slideDown();
});
  
jQuery(".bt_principal").mouseleave(function(){
  jQuery(this).children(".info_btgeneral").stop(true).slideUp();
 });

jQuery(".bt_principalpeque").hover(function(){
  jQuery(this).children(".info_btgeneral").css("display", "none")
});

//FOOTER

//Desplegar footer

setTimeout(function() {jQuery(".footer_desplegable").delay(4000).stop(true).animate({'height':'55px'})} , 1500);



jQuery(".bt_headerdesplegable").click(function(event) {
  event.preventDefault();
  var alto_footer = jQuery(this).parent().height();

  if(alto_footer <= 55 ) {
    jQuery(this).parent().stop(true).animate({'height':'155px'});
		setTimeout(function() {jQuery(".footer_desplegable").delay(4000).stop(true).animate({'height':'55px'})} , 5000);
  } 
  else {
    if(alto_footer == 155 ) {
      jQuery(this).parent().stop(true).animate({'height':'55px'});
    } 
  }
});

//Desplegar buscador

jQuery(".buscador_home a").click(function(event) {
       event.preventDefault();
  var ancho_buscar = jQuery(this).next().children(".buscador_home input.text_buscarhome").width();

  console.log(ancho_buscar);

  if(jQuery(".buscador_home").width() <= 45 ) {
     jQuery(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'172px'},200);
     console.log(jQuery(".buscador_home").width());
  } 
  else {
    if(jQuery(".buscador_home").width() > 45  ) {
      jQuery(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'0px'},200);
    } 
  }
});

//tabs general

/*jQuery('.lista_menuresponsivo li').click(function(event) {
  event.preventDefault();
  jQuery(".lista_menuresponsivo").children("li").removeClass("active");
  jQuery(this).addClass("active");
  jQuery('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = jQuery(this).attr('id'); 
  jQuery('.'+ver_tab).animate({'opacity':'1'});
  jQuery('.'+ver_tab).css({'height':'auto','overflow':'visible'});
});*/

/*jQuery('.nav_principal1 li').click(function(event) {
  event.preventDefault();
	var href = jQuery(this).children("a").attr("href");
  //console.log("hola");
  posicion_li = jQuery(this).parent("ul").children("li").index(this);
  activar_bt = parseInt(posicion_li);
  jQuery(".lista_menuresponsivo").children("li").removeClass("active");
  jQuery(".lista_menuresponsivo").children("li").eq(activar_bt - 1).addClass("active");
  jQuery('.cont_navprincipal').css("overflow", "hidden")
  jQuery('.cont_navprincipal').stop(true).animate({height: "0"}, 50);
  jQuery('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = jQuery(this).attr('id'); 
  jQuery('.'+ver_tab).animate({'opacity':'1'});
  jQuery('.'+ver_tab).css({'height':'auto','overflow':'visible'});
	//jQuery(location).attr("href", href);
	//alert(jQuery(this+" a").attr("href"));
});


jQuery('.bt_navizquierda').click(function(event) {
  event.preventDefault();

  posicion_li = jQuery(this).parent("ul").children("li").index(this);
  activar_bt = parseInt(posicion_li);
  jQuery(".lista_menuresponsivo").children("li").removeClass("active");
  jQuery(".lista_menuresponsivo").children("li").eq(activar_bt - 1).addClass("active");
  jQuery('.bt_navizquierda').removeClass("bt_navizquierda_activo");
  jQuery(this).addClass("bt_navizquierda_activo");
  return false;
  });

jQuery('.bt_principal').click(function(event) {
event.preventDefault();
  jQuery('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = jQuery(this).attr('id'); 
  jQuery('.'+ver_tab).animate({'opacity':'1'});
  jQuery('.'+ver_tab).css({'height':'auto','overflow':'visible'});
  return false;
 });*/

//enterate

jQuery(".cont_pequenterate").hover(function() { // Mouse over
       jQuery(this).children(".hover_botones_enterate")
          .stop()
          .animate({
             opacity: 1
          }, 300);
         
    }, function() { // Mouse out
       jQuery(this).children(".hover_botones_enterate")
          .stop()
          .animate({
             opacity: 0
          }, 300);
    });

//tabs lineas

/*jQuery('.subcategorias_lineas a').click(function(event) {
  event.preventDefault();
  jQuery(this).parent().children('.subcategorias_lineas a').removeClass("activosubcategorias_lineas");
  jQuery(this).addClass("activosubcategorias_lineas");
  jQuery(".subcategoria_lineas").css("display", "none");
  var ver_tab = jQuery(this).attr('id'); 
  console.log('.'+ver_tab);
  jQuery(this).parent().parent().children('.'+ver_tab).fadeIn(800); 
  return false;
  });

	jQuery('.slidermenulineas li').click(function(event) {
  event.preventDefault();
  jQuery(this).parent().children('li').removeClass("activo_sliderlineas");
  jQuery(this).addClass("activo_sliderlineas");
  jQuery(".tab_generallineas").css("display", "none");
  var ver_tab = jQuery(this).attr('id'); 
  console.log('.'+ver_tab);
  jQuery(this).parent().parent().parent().parent().next().next().children('.'+ver_tab).fadeIn(800); 
  return false;
  });*/

	jQuery(".bt_videocorte").click(function() {
		var linkVideo = jQuery(this).attr("data-id");
		var linkFile = jQuery(this).attr("data-type");
		jQuery("#linkFile").attr("href", URL_SITE+linkFile);
		jQuery("#linkVideo").attr("src", linkVideo);
	});
	
	jQuery(".botoneslineas2222").click(function(event){
		var d = event.timeStamp;
		/*console.log("funciona");*/
		jQuery.ajax({
			 url  :   URL_SITE+'lineas/producto',
			 type :   'POST',
			 data :   {
					 'id'  : jQuery(this).attr("data-id"),
					 'tipo': jQuery(this).attr("data-type")
			 },
			 statusCode: {
					404: function() {
						alert( "La página no existe" );
					}
				},
			 success:function(data){
				 /*var salida = "";
				 for(x in data) salida += x+": "+data[x]+"\n";
				 alert(salida);*/
				 jQuery("#imagen_producto").attr("src", URL_SITE+data.img+"?"+d);
				 jQuery("#titulo_producto").html(data.titulo);
				 jQuery("#subtitulo_producto").html(data.subtitulo);
				 jQuery("#texto_producto").html(data.texto);
				 jQuery("#archivo_producto").attr("href", URL_SITE+data.file);
			 }
		}).fail(function() {
			alert( "error en comunicación" );
		});
    jQuery(".seccion_emerlineas").animate({top: 0}, 600);
    jQuery(".opacidad_negro").fadeIn(300);
  });
});
