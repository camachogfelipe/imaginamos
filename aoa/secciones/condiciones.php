<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>AOA | Se mueve contigo</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/aoa.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php' ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">Condiciones <span>del servicio</span></h2>
  </div>
</div>

<div class="content_int content_940" style="min-height:350px;">
  <div class="lista_servicios clearfix">
    <ul class="car-service">
      <?php $serv = DbHandler::GetAll("SELECT * FROM servicios WHERE visible_condiciones = 1");
      $contador = count($serv);
      $active = '';
       for($i=0; $i<$contador; $i++):
           if($i==0){ $active='serv_activo';}else{$active='';}
      ?>
        <li onclick='getaseguradoras(<?php echo $serv[$i]['id'];  ?>);' class="slide"><a class="<?php echo $active; ?> bt-tab" href="javascript:void(0)"><?php echo $serv[$i]['titulo'];  ?></a></li>
      <?php
      endfor;
      ?>
    </ul>
  </div>
  <div class="content_desc_aseguradora">
    <div id='condiciones' class="item_aseguradora1">
      <h3></h3>
      <p></p>
      <div class="clearfix">
        <div class="content_datos_seguro left">
          <h4></h4>
          <ul>
            <li>	</li>
            <li></li>
          </ul>
        </div>
        <a href="javascript:abrirDocumentos();" class="btn_documentos right">Documentaci&oacute;n requerida</a>
      </div>
    </div>
  </div>
  <div id='aseguradoras_buttons' class="content_btns_aseguradora clearfix">
   <?php  
   if(isset($serv[0]['id'])){
    $aseguradoras = DbHandler::GetAll("SELECT * FROM aseguradoras WHERE servicios_id =".$serv[0]['id']);
    $contador = count($aseguradoras);
   }
   for($i=0; $i<$contador; $i++):  ?>
    <a onclick='getcondiciones(<?php echo $aseguradoras[$i]['id'];  ?>);' href="javascript:void(0)"><?php echo $aseguradoras[$i]['titulo'];  ?></a>
     <?php
      endfor;
      ?>
  </div> 
</div> 

<?php include'footer.php' ?>

<div class="popup_doc">
 <div class="bg_popup"></div>
 <div class="content_popup_doc">
   <a href="javascript:cerrarDoc();" class="btn_close"></a>
   <div class="title_serv">
     <h3>Documentaci&oacute;n requerida:</h3>
   </div>
   <p id='condiciones_pop' class="texto_doc">
     
   </p>
 </div>
</div>


<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(e) {
		$(".content_btns_aseguradora:first").show();
    $('.lista_servicios a.bt-tab').click(function(e) {
		$('.content_btns_aseguradora a').removeClass('seguro_activo');
		$('.lista_servicios a.bt-tab').removeClass('serv_activo');
		$(this).addClass('serv_activo');
		$('.content_desc_aseguradora').slideUp(200);
        $('.content_btns_aseguradora').slideUp(200,function(){
			$(this).slideDown();
		});
    });
	$('.content_btns_aseguradora a').click(function(e) {
		$('.content_btns_aseguradora a').removeClass('seguro_activo');
		$(this).addClass('seguro_activo');
        $('.content_desc_aseguradora').slideUp(200,function(){
			$(this).slideDown();
		});
    });

});
function getdocumentacion(id){
$.get('./controllers/condiciones.php', { id: id, kind: 3  } , function(datos) {
$('#condiciones_pop').html(datos).change();
          });
}
function getdocumentacion2(id){
$.get('./controllers/condiciones.php', { id: id, kind: 5  } , function(datos) {
$('#condiciones_pop').html(datos).change();
          });
}
function abrirDocumentos(){
	$('.popup_doc').fadeIn(300);
}

function cerrarDoc(){
	$('.popup_doc').fadeOut(300);
}
function getaseguradoras(id){
    $.get('./controllers/condiciones.php', { id: id, kind: 1  } , function(datos) {
        $("#aseguradoras_buttons").html(datos).change();
        $('.content_btns_aseguradora a').click(function(e) {
		$('.content_btns_aseguradora a').removeClass('seguro_activo');
		$(this).addClass('seguro_activo');
        $('.content_desc_aseguradora').slideUp(200,function(){
			$(this).slideDown();
		});
    });
          });
}
function getcondicionesserv(id){
$.get('./controllers/condiciones.php', { id: id, kind: 4  } , function(datos) {
$('#condiciones').html(datos).change();
          });
}

function getcondiciones(id){
    $.get('./controllers/condiciones.php', { id: id, kind: 2  } , function(datos) {
        $("#condiciones").html(datos).change();
       //////////////
       $(".content_btns_aseguradora:first").show();
    $('.lista_servicios a.bt-tab').click(function(e) {
		$('.content_btns_aseguradora a').removeClass('seguro_activo');
		$('.lista_servicios a.bt-tab').removeClass('serv_activo');
		$(this).addClass('serv_activo');
		$('.content_desc_aseguradora').slideUp(200);
        $('.content_btns_aseguradora').slideUp(200,function(){
			$(this).slideDown();
		});
    });
	$('.content_btns_aseguradora a').click(function(e) {
		$('.content_btns_aseguradora a').removeClass('seguro_activo');
		$(this).addClass('seguro_activo');
        $('.content_desc_aseguradora').slideUp(200,function(){
			$(this).slideDown();
		});
    });
       ////////////
          });
}
</script>

</body>
</html>
