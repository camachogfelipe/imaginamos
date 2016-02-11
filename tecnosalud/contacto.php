<?php
require_once('class/class_pintar.php');
require_once('class.validar.php');
$obj = new Pintar();
$maps = $obj->PintarContacto();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>.: TECNOSALUD :.</title>
<meta name="viewport" content="width=1008, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/tecnosalud.css" rel="stylesheet" />

</head>
<body>


	<!--<div id="loader"><div id="progress"></div></div>-->


	<div class="con-general">
  	<div class="margen-general">
    
    
      <?php include("header.php"); ?>
      
      
      <div class="info-auto">
      	<h6>CONTÁCTENOS</h6>
        <div class="con-mapa">
          <div class="datos-mapa">
            <p class="t-datos"><?php echo $maps[0]['contacto_title']; ?></p>
            <p class="p-datos"><?php echo utf8_encode(nl2br($maps[0]['contacto_article'])); ?></p>
          </div>
          <div class="mapa-contacto">
              <?php
              
                  echo utf8_encode($maps[0]['contacto_mapa']);
              
              ?>
          </div>
        </div>
        <div class="formulario-contacto" >
          <form class="formCon" method="POST" action="">
            <label>
              <input value="Nombre:" name="nombre" onBlur="javascript:if(this.value=='') this.value='Nombre:';" onFocus="javascript:if(this.value=='Nombre:') this.value='';" class="validate[required]" data-validation-placeholder="Nombre:" />
            </label>
            <label>
              <input value="Apellido:" name="apellido" onBlur="javascript:if(this.value=='') this.value='Apellido:';" onFocus="javascript:if(this.value=='Apellido:') this.value='';" class="validate[required]" data-validation-placeholder="Apellido:" />
            </label>
            <label>
              <input value="País:" name="pais" onBlur="javascript:if(this.value=='') this.value='País:';" onFocus="javascript:if(this.value=='País:') this.value='';" class="validate[required]" data-validation-placeholder="País:" />
            </label>
            <label>
            	<input value="Ciudad:" name="ciudad" onBlur="javascript:if(this.value=='') this.value='Ciudad:';" onFocus="javascript:if(this.value=='Ciudad:') this.value='';" class="validate[required]" data-validation-placeholder="Ciudad:" />
            </label>
            <label>
                <input value="E-mail:" name="email" onBlur="javascript:if(this.value=='') this.value='E-mail:';" onFocus="javascript:if(this.value=='E-mail:') this.value='';" class="validate[custom[email]]" data-validation-placeholder="E-mail:" />
            </label>
            <label>
                <input value="Teléfono:" name="telefono" onBlur="javascript:if(this.value=='') this.value='Teléfono:';" onFocus="javascript:if(this.value=='Teléfono:') this.value='';" class="validate[custom[phone]]" data-validation-placeholder="Teléfono:" />
            </label>
            <div class="sep-3"></div>
            <label>
                <input value="Asunto:" name="asunto" onBlur="javascript:if(this.value=='') this.value='Asunto:';" onFocus="javascript:if(this.value=='Asunto:') this.value='';" />
            </label>
            <label>
                <input type="text" class="alerta" value="Fecha:" onBlur="javascript:if(this.value=='') this.value='Fecha:';" onFocus="javascript:if(this.value=='Fecha:') this.value='';" />
            </label>
            <textarea value="Mensaje:" name="mensaje" onBlur="javascript:if(this.value=='') this.value='Mensaje:';" onFocus="javascript:if(this.value=='Mensaje:') this.value='';" class="" data-validation-placeholder="Mensaje:" >Mensaje:</textarea>
            <label class="btEnvForm">
                
                <input type="submit" value="Enviar" />
            </label>
            <input type="hidden" name="grabar" value="si" />
                <?php
                //print_r($_POST);exit;
                if (isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
                       $obj = new Validar();
                      $obj->enviar_email();		
                  
                    
                  }
                ?>
          </form>
        </div>
      </div>
  	</div>
  </div>
  
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.valid.js"></script>
  <script type="text/javascript" src="js/jquery.date.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jContacto.js"></script>


</body>
</html>