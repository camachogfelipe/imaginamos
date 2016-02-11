<?php
if(isset($_POST['ciudades']) and isset($_POST['code'])) :
	$ciudades = DbHandler::GetAll("SELECT Id, Name FROM City WHERE CountryCode='".$_POST['code']."' ORDER BY Name");
	if(!empty($ciudades)) :
		foreach($ciudades as $key=>$ciudad) :
			foreach($ciudad as $k=>$v) $ciudad[$k] = $v;
			$ciudades[$key] = $ciudad;
		endforeach;
		echo json_encode($ciudades);
	endif;
	exit();
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GRUPO NORTH | Cont&aacute;ctenos</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="dise&ntilde;o web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="<?php echo Link::Build() ?>/css/north.css" rel="stylesheet" />
<!--<link type="text/css" href="<?php echo Link::Build() ?>/css/royalslider.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/minimal-white/rs-minimal-white.css" rel="stylesheet" />-->
<!-- <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery-1.9.1.min.js"></script>-->

<link rel="stylesheet" href="<?php echo Link::Build() ?>/css/validationEngine.jquery.css" media="all">
<script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.validationEngine.js"></script>
<style type="text/css">
	.rsDefault .rsArrowIcn {top: 498px;}
</style>

</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php"); ?>
  
  <div class="info-general">
  	<div class="con-info-general">
    	<div class="con-contacto">
      	<img src="<?php echo Link::Build() ?>/imagenes/titulos/contacto-1.png" width="500" height="50" alt="">
      	<!--<h1>Contactenos</h1>-->
      	<div class="royalSlider contentSlider rsDefault contacto-info">
          <!--Slide contacto-->
          <div data-rsDelay="7500">
            <div class="con-img-contacto">
              <div class="contacto-bg"><img src="<?php echo Link::Build() ?>/imagenes/contacto-bg.jpg" width="1000" height="390" alt=""></div>
              <div class="contacto-img"><img src="<?php echo Link::Build() ?>/imagenes/contacto-img-1.png" width="255" height="465" alt=""></div>
            </div>
          </div>
          <!--Slide contacto-->
          <!--<div data-rsDelay="7500">
            <div class="con-img-contacto">
              <div class="contacto-bg"><img src="imagenes/contacto-bg.jpg" width="1000" height="390" alt=""></div>
              <div class="contacto-img"><img src="imagenes/contacto-img-2.png" width="255" height="465" alt=""></div>
            </div>
          </div>-->
        </div>
        <div class="caption-contacto">
        	<span></span>
        	<h1>PREGUNTAS O SUGERENCIAS</h1>
          <h2>Queremos conocerte m&aacute;s! Env&iacute;anos tu mensaje y pronto recibir&aacute;s nuestra respuesta.</h2>
        </div>
        <div class="sombra-img-receta"></div>
        <form id="formulario" action="<?php echo Link::Build() ?>/controllers/contacto.php" method="post">
          <div class="form-c1">
            <input name="nombre" placeholder="Nombre" class="validate[required]" type="text" tabindex="1"/>
            <input name="email" placeholder="E-mail" class="validate[required, custom[email]]" type="text" tabindex="6"/>
            <?php $paises = DbHandler::GetAll("SELECT Code, Name FROM Country ORDER BY Name"); ?>
            <select name="pais" class="sel-item validate[required]" onchange="getcities(this.value)" tabindex="8">
              <option value="">Pa&iacute;s </option>
              <?php foreach($paises as $pais) : ?>
              <option value="<?= $pais['Code'] ?>"> &bull; &nbsp; <?= $pais['Name'] ?></option>
			  <?php endforeach; ?>              
            </select>
          </div>
          <div class="form-c1">
            <input name="apellido" placeholder="Apellido" class="validate[required]" type="text" tabindex="2"/>
            <input name="fecha_nacimiento" placeholder="Fecha de nacimiento" type="text" maxlength="10" tabindex="3"/>
            <div id="cities"><select name="ciudad" class="sel-item validate[required]" id="citiesselect" tabindex="9">
            	<option value="">Ciudad</option>
            </select></div>
          </div>
          <div class="form-c2">
            <textarea name="comentario" placeholder="Mensaje" class="validate[required]" tabindex="10"></textarea>
            <div class="con-check">
            	<input type="checkbox" name="condiciones" class="validate[required]" value="Y"> 
            	<p>Acepto los <a href="#modal-terminos"  class="modal-form click">t&eacute;rminos y condiciones</a></p>
            </div>
            <input type="submit" class="bt-envio" value="enviar" tabindex="11"/><a href="#modal-exito" class="modal-form click"></a>
          </div>
        </form>
      </div>
      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>
  <div style="display:none;">
 		<div id="modal-exito">
           <div id="mensajito">
    	<h1>Formulario enviado exitosamente!</h1>
      <h2>pronto nos comunicaremos con usted.</h2>
    </div>
        </div>
	</div>
  <div style="display:none">
  	<div id="modal-terminos">
    	<h1>Terminos y condiciones<span></span></h1>
      <p>Por medio del presente aviso nos dirigimos a todos nuestros Clientes Finales, Empleados, Ex empleados, Proveedores, Contratistas, Accionistas y dem&aacute;s titulares y legitimados de los datos personales registrados en cada una de nuestras bases de datos.<br /><br /><strong>COMPA&Ntilde;&Iacute;A COLOMBIANA DE ESMALTES S.A,</strong> identificada con el NIT 890.300.510-1, con domicilio en la ciudad de Santiago de Cali, como responsable del tratamiento de los datos personales que actualmente reposan en las bases de datos de la compa&ntilde;&iacute;a, y de acuerdo con lo establecido en  la Ley 1581 de 2012 y en el Decreto 1377 de 2013, nos permitimos solicitar autorizaci&oacute;n para continuar con el tratamiento de sus datos personales conforme a las Pol&iacute;ticas de Tratamiento de la Informaci&oacute;n, la informaci&oacute;n y los datos personales suministrados a la compa&ntilde;&iacute;a seguir&aacute;n siendo y podr&aacute;n ser objeto de almacenamiento tanto nacional como internacional, uso, circulaci&oacute;n, supresi&oacute;n, recepci&oacute;n, recolecci&oacute;n, actualizaci&oacute;n, transferencia, y transmisi&oacute;n tanto nacional como internacional.<br /><br />Seg&uacute;n nuestras pol&iacute;ticas de tratamiento de datos personales, los mecanismos a trav&eacute;s de los cuales hacemos uso de &eacute;stos son seguros y confidenciales, pues contamos con los medios tecnol&oacute;gicos id&oacute;neos para asegurar que sean almacenados de manera tal que se impida el acceso indeseado por parte de terceras personas, y en ese mismo orden aseguramos la confidencialidad de los mismos.<br /><br />El tratamiento de estos datos personales tiene como finalidad el desarrollo del objeto social de la compa&ntilde;&iacute;a,  lo cual incluye pero no se limita a: fines estad&iacute;sticos, comerciales, informativos, de seguimiento al producto, de mercadeo relacional y/o similares, verificaci&oacute;n en centrales de riesgo, aspectos contables y de n&oacute;mina, y dem&aacute;s aplicables a cada uno de los titulares.<br /><br />
Los titulares de la informaci&oacute;n as&iacute; como los legalmente legitimados tendr&aacute;n derecho a: acceder, conocer, actualizar, rectificar, revocar y solicitar prueba de la autorizaci&oacute;n, as&iacute; como a la supresi&oacute;n de los datos personales en los casos contemplados en la Ley, para lo cual podr&aacute;n enviar su solicitud a: adburbano@gruponorth.com o comunicarse con nuestro departamento  de atenci&oacute;n al cliente, en Cali al 4384600.<br /><br />Si en el t&eacute;rmino de treinta (30) d&iacute;as h&aacute;biles contados a partir de la fecha de la presente publicaci&oacute;n, los titulares previamente rese&ntilde;ados no se han manifestado ni solicitado la supresi&oacute;n de la informaci&oacute;n a trav&eacute;s de alguno de los canales dispuestos en los t&eacute;rminos establecidos en el numeral 4º del art&iacute;culo 10º del Decreto 1377 de 2013, COLOMBIANA DE ESMALTES S.A  entender&aacute; que ha sido autorizado por los titulares y podr&aacute; continuar con el tratamiento de estos datos personales.</p>
    </div>
  </div>

	<?php include("footer.php"); ?>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.colorbox.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.valid.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.easing.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jContacto.js"></script>

</body>

</html>
<?php 
if(isset($_GET['ok'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
?>
<script type="text/javascript" >
    $(document).ready(function(){
    //$('#mensajito').html('Mensaje enviado con &eacute;xito, te responderemos muy pronto!');
    setTimeout(function(){$('.click').click(); },500);
      
    });

</script>
<?php }elseif(isset($_GET['error'])){ ?>
<script type="text/javascript" >
    $(document).ready(function(){
    $('#mensajito').html('Error, Estamos presentando fallas  de conexi&oacute;n, intentalo m&aacute;s tarde.');
     setTimeout(function(){$('.click').click(); },500);
    });
</script>
<?php } ?>