<?php 
// Recibimos las variables clave
if(isset($_REQUEST['tipo'])) :
	$nombre = $_REQUEST['nombre'];
	$email = $_REQUEST['email'];
	if(isset($_POST['tipo'])) $responder = $_POST['tipo'];
	
	if(isset($responder)) :
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cad = "";
		for($i=0;$i<12;$i++) {
			$cad .= substr($str,rand(0,62),1);
		}
		$lectura = $db->doQuery("SELECT email FROM usuarios WHERE email='".$email."'", SELECT_QUERY);
		if(count($db->results) > 0) :
			$respuesta = false;
			$msgerror = "Usuario ya existe.";
		else :
			require_once 'mailer/Correo.class.php';
			$body = '<div style="margin-left:20px;"><p>Hola '.$nombre.'!<br><br>
							Has sido registrado en la página de Asserto con los siguientes datos:<br><br>
							Usuario: '.$email.'<br>
							Password: '.$cad.'<br><br>
							Atentamente,<br><br>							
							Asserto
							</div>';
			$asunto = utf8_decode("Registro Asserto");
			$cCorreo = new Correo();
			$correo = $cCorreo->SendEmail($email, $asunto, $body, $archivo, $name_archivo);
			if($correo) :
				$insert=$db->doQuery("INSERT INTO usuarios (nombre, email, password) 
														VALUES ('".mysql_real_escape_string($nombre)."', '".$email."', '".md5($cad)."')", 
														INSERT_QUERY);
				if($insert) : $respuesta = true;
				else :
					$respuesta = false;
					$msgerror = "No se pudo Insertar el usuario en la base de datos. Intente nuevamente.";					
				endif;
			else :
				$respuesta = false;
				$msgerror = "No se pudo enviar el correo. Intente nuevamente.";
			endif;
		endif;
	endif;

	if($respuesta == true) :
		echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Se registro su respuesta',3000) }, 1500);</script>";
	elseif($respuesta == false) :
		echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR: $msgerror',3000) }, 1500);</script>";
	endif;
endif;
?>
<!-- Estilos Autogenerados. -->
<style>
  .delete_cus{
    width: 20px;
    height: 20px;
    background-image: url('icon_del_cus.png');
    cursor: pointer;
    position: absolute;
    top: 5px;
    right:-5px;
    z-index: 99;
  }
.SI-FILES-STYLIZED label.cabinet
{
    width: 79px;
    height: 22px;
    background: url(../../../../js/btn-choose-file.gif) 0 0 no-repeat;

    display: block;
    overflow: hidden;
    cursor: pointer;
}

.SI-FILES-STYLIZED label.cabinet input.file
{
    position: relative;
    height: 100%;
    width: auto;
    opacity: 0;
    -moz-opacity: 0;
    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
}  

</style>
<div class="widget">
	<div class ="content">
  	<div class="formEl_b">
    	<fieldset>
      	<h3>Agregar usuario</h3>
        <form class="forminterno" id="forminterno" name="forminterno" action="index.php?seccion=newusuarios" method="post" style="width: 900px;">
          <input type="hidden" name="tipo" value="insertar" />
          <div class="section">
          	<label>Nombre completo</label> <input type="text" class="validate[required]" name="nombre" id="nombre" /><br>
            <label>Correo electrónico</label> <input type="text" class="validate[required, custom[email]]" name="email" id="email" />
          </div>
          <br/>
          <div>
          	<a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
            <a class="uibutton special" href="index.php">Volver</a>
          </div>
        </form>
      </fieldset>
		</div>
</div>
 <!--aquÃ­ indicamos cual formulario ha de ser validado.-->
<script>
$(".forminterno").validationEngine();

</script>
<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
</script>
<script>
//Espacio para otros ckeditors.
   //CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
    </div>
