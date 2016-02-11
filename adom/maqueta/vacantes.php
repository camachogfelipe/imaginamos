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
<title>ADOM - Salud domiciliaria</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/adom.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
<link href="assets/css/style_slider.css"  rel="stylesheet" />
<link href="assets/css/validationEngine.jquery.css" rel="stylesheet" />
<style type="text/css">.share {margin:0 0 20px; width:100%;}</style>
</head>

<body>
<div class="bg_body"></div>
<?php include'header.php' ?>




<div class="content">
  <?php include'menu.php' ?>
  
  <div class="content_940 content_home">
    <div class="linea_home">
      <h1 class="title_dest bold">VACANTES</h1>
    </div>
    <div class="clearfix">
      <div class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
      <div class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
      <div style="margin-right:0" class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
      <div class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
      <div class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
      <div style="margin-right:0" class="item_vacante left">
        <h2>Vacante lorem ipsum</h2>
        <img src="assets/img/img_servicio1.jpg" width="278" />
        <a href="javascript:abrirVacante();" class="btn_vermas">Ver más <span></span></a>
      </div>
    </div>
    
  </div>
</div>

<div class="popup_vacante popup1">
  <div class="bg_popup"></div>
  <div class="content_popup1">
    <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
    <div class="contenido_popup">
      <h2 class="bold">Vacante 1 lorem ipsum</h2>
      <div class="clearfix">
      	<div class="share left">
        	<span class='st_facebook_hcount' displayText='Facebook'></span>
      	</div>
        <div class="texto_vacante clearfix">
          <img class="right" src="assets/img/img_servicio1.jpg" width="230" />
          <p class="main_p">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet aliquet ante, at faucibus purus. Praesent enim tortor, dapibus quis mi nec, fermentum egestas massa. Nam pretium lacinia orci, vulputate ultrices mauris mattis sed. Maecenas elementum ac erat eget aliquam. Nulla sed tincidunt nisi, vel ultrices erat. Donec luctus sapien velit, quis congue justo auctor eget. Fusce aliquet suscipit metus sed hendrerit. Aliquam commodo risus sit amet suscipit ullamcorper. Quisque egestas eros id velit consectetur, at luctus dui condimentum. Pellentesque in varius odio, in dictum nibh. In ac ornare ipsum. Proin id elementum purus. Integer pulvinar massa nec velit vestibulum, quis ornare nisi ullamcorper.
          </p>
          
        </div>
        <a href="javascript:aplicarVacante();" class="btn_vermas2">Aplicar  <span></span></a>
      </div>
    </div>
  </div>
</div>

<div class="popup_aplicar popup1">
  <div class="bg_popup"></div>
  <div class="content_popup1">
    <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
    <div class="contenido_popup">
      <h2 class="bold">Formulario de aplicación</h2>
      <form class="form_vacante">
        <div class="clearfix">
          <input type="text" class="input2 validate[required] left" placeholder="Nombre" />
          <input type="text" class="input2 validate[required] right" placeholder="No. de cédula" />
        </div>
        <div class="clearfix">
          <input type="text" class="input2 validate[required] left" placeholder="Correo electrónico" />
          <input type="text" class="input2 validate[required] right" placeholder="Teléfono" />
        </div>
        <div class="clearfix">
          <input type="text" class="input2 validate[required] left" placeholder="Celular" />
          <input type="text" class="input2 validate[required] right" placeholder="Años de experiencia" />
        </div>
        <div class="clearfix">
          <select class="select1 left">
            <option>Título profesional o técnico</option>
            <option>Carrera lorem ipsum</option>
            <option value="Otro">otro</option>
          </select>
          <input type="text" class="input2 validate[required] right" placeholder="Teléfono" />
        </div>
        
        <div class="clearfix">
          <input type="text" class="input2 validate[required] left" id="input_pro" placeholder="Escriba cuál" />
        </div>
        <input type="file" class="file" value="Adjuntar archivo" />
        <textarea class="textarea3" placeholder="Comentario"></textarea>
        <input type="submit" class="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>

<?php include'footer.php' ?>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.sudoSlider.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/placeholder.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/jquery.validationEngine.js"></script>
<script src="assets/js/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "b54dfb70-2ce0-4423-8074-aa062eca5d3b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
</body>
</html>
