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
<link href="assets/css/validationEngine.jquery.css" rel="stylesheet" />
<style type="text/css">.content_popup_doc {height:250px; margin-top:-125px;}</style>
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php' ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">PQR <span> </span></h2>
  </div>
</div>

<div class="content_int content_940">
  <p class="texto_pqr">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. 
  </p>
  <div class="clearfix">
    <form class="form_pqr1 left">
      <h3>Registra tu pqr</h3>
      <input class="validate[required]" type="text" placeholder="Nombre" />
      <input class="validate[required, custom[number]]" type="text" placeholder="C&eacute;dula" />
      <input class="validate[required]" type="text" placeholder="Direcci&oacute;n" />
      <input class="validate[required, custom[email]]" type="text" placeholder="E-mail" />
      <div class="clearfix middle_inputs">
        <input type="text" class="left" class="validate[required, custom[number]]" placeholder="Placa del veh&iacute;culo" />
        <select class="right validate[required]">
          <option value="">Aseguradora</option>
          <option value="option1">Opcion 1</option>
          <option value="option2">Opcion 2</option>
        </select>
      </div>
      <select class="select_form1 validate[required]">
        <option value="">Tipo de solicitud</option>
        <option value="option1">Opcion 1</option>
        <option value="option2">Opcion 2</option>
      </select>
      <textarea placeholder="Comentarios"></textarea>
      <input type="submit" value="Enviar" />
    </form>
    <div class="right">
      <img src="assets/img/img_pqr.jpg" class="img_pqr" />
      <form class="form_pqr1" action="#" method="post">
        <h3>Seguimiento de PQR</h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare.
        </p>
        <input class="validate[required, custom[number]]" type="text" placeholder="C&eacute;dula" />
        <input class="validate[required, custom[number]]" type="text" placeholder="N. de solicitud" />
        <input type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div> 

<?php include'footer.php' ?>

<div class="popup_doc">
 <div class="bg_popup"></div>
 <div class="content_popup_doc">
   <a href="javascript:cerrarDoc();" class="btn_close"></a>
   <div class="title_serv">
     <h3>No encontrado:</h3>
   </div>
   <p class="texto_doc">
     Lo sentimos, los datos ingresados<br>
     no est&aacute;n registrados con nosotros.<br>
     Por favor verifique los datos o llamenos para poder asesorarlo.
     </p>
 </div>
</div>

<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script src="assets/js/jquery.validationEngine.js"></script>
<script src="assets/js/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(){
  $('input[placeholder]').placeholder();
   $(".form_pqr1").validationEngine();
});
$(function(){abrirDocumentos();})
function abrirDocumentos(){$('.popup_doc').fadeIn(300);};
function cerrarDoc(){$('.popup_doc').fadeOut(300);};
</script>

</body>
</html>
