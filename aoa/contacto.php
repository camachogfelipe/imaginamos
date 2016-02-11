<?php
function cuerpo_mensaje($mensaje)
{
  $mensaje='
  <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <html>
  <head>
    <style><endnote><head>
    <meta http-equiv="Content-Type"
   content="text/html; charset=iso-8859-1">
    <title>Mensaje de Contacto</title>
  </head>
  <body>
  <style type="text/css">
  <!--
  .Estilo1 {font-family: Arial, Helvetica, sans-serif}
  .topText {font-size:10px; color:#EEEEEE; line-height:25px;}
  .date {font-size:20px; font-weight:bold; color:#CC6600; font-family:trebuchet ms,verdana;}
  .title {font-size:16px; font-weight:bold; color:#000000;}
  .sideTitle {font-size:15px; font-weight:bold; color:#333333;}
  .subTitle {font-size:13px; font-weight:bold; color:#000000;}
  .sideText {font-size:11px; color:#000000; line-height:22px;}
  p {font-size:12px; color:#666666; line-height:20px; font-family: georgia, times, serif;}
  .footerText {font-size:11px; color:#666666;}
  .headerBanner {font-size: 18px; font-weight: bold;}
  td {font-family: verdana;}
  -->
  </style>
  <table bgcolor="#ffffff" border="0" cellpadding="0"
   cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td colspan="4" valign="top">
        <p align="justify"><span class="Estilo1">'.$mensaje.'</span></p>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  </body>
  </html>
  ';
  return $mensaje;
}

function envio_email($nombre,$apellido,$email,$mensaje)
{
/* Para enviar correo HTML, puede definir la cabecera Content-type. */
$cabeceras  = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* cabeceras adicionales */
$cabeceras .= "To: Administración Operativa Automotriz <arturoquintero@aoacolombia.com>\r\n";
$cabeceras .= "From: $nombre $apellido <$email>\r\n";

$asunto = "Contacto AOA";
$CuerpoMensaje=cuerpo_mensaje($mensaje);
if(mail("arturoquintero@aoacolombia.com", $asunto, $CuerpoMensaje, $cabeceras)){$msj="Correo ha sido enviado.";}
else{$msj="No es posible enviar el correo.";}
return $msj;
//fin de la parte de envio de correo
}

//Toma datos del formulario
$nombre=$_POST['txt_cnombre'];
$apellido=$_POST['txt_capellido'];
$email=$_POST['txt_cemail'];
$mensaje=addslashes(trim($_POST['txt_cmensajes']));

if(!($nombre=="" or $apellido=="" or $email=="" or $mensaje=="")){
$msj=envio_email($nombre,$apellido,$email,$mensaje);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
  <title></title>
  <link id="sitestyles" href="css/formato.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript">
function validar()
{
  if(contacto.txt_cnombre.value == "")
  {
    alert("Ingreso Nombre es obligatorio.");contacto.txt_cnombre.focus();return false;
  }
  if(contacto.txt_capellido.value == "")
  {
    alert("Ingreso Apellido es obligatorio.");contacto.txt_capellido.focus();return false;
  }
  if(contacto.txt_cemail.value == "")
  {
    alert("Ingreso email es obligatorio.");contacto.txt_cemail.focus();return false;
  }
  if(!ValidarCorreo(contacto.txt_cemail.value))
  {
    contacto.txt_cemail.focus();return false;
  }
  if(contacto.txt_cmensajes.value == "")
  {
    alert("Ingreso Mensaje es obligatorio.");contacto.txt_cmensajes.focus();return false;
  }
  else return true;
}
</script>
</head>
<body>
<!--
<a href='http://mail.google.com/a/aoacolombia.com' target='_blank'>Ver correo</a> 
<a href='http://www.google.com/a/aoacolombia.com' target='_blank'>Panel de correo</a> 
-->
<table style="width: 100%; height: 100%;" border="0"
 cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="text-align: left; vertical-align: middle;">
       <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
        <tbody>
         <tr>
          <td style="color: rgb(51, 51, 255);" align="center" valign="middle">
          <br>
          CARRERA 69B 98A-10<br>
          PBX: (571) 7560510<br>
          M&oacute;vil: (571) 310-7826671<br>
          Bogota D.C. - Colombia.
		  </td>
         </tr>
        </tbody>
       </table>
	   <br><br>     
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td>
            <form style="margin: 0px; padding: 0px;" action='Control/operativo/util.php' method="post" name="contacto" onsubmit="return validar()">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td style="text-align: center;" colspan="2" class="titulo" valign="top">
                    <input type='hidden' name='Acc' value='enviar_email_contacto'>
                    Contactenos y en breve nos comunicaremos. 
                    </td>
                  </tr>
                  <tr>
                    <td class="aoa" align="right" valign="top" width="368">
                    <div align="right">Nombre :&nbsp;</div>
                    </td>
                    <td align="left" valign="top" width="511">
                      <input name="txt_cnombre" value=<?php echo '"'.$nombre.'"'; ?> maxlength="30" size="30" 
                        style="padding: 0pt; text-transform: uppercase; overflow: visible;" type="text">
                     </td>
                  </tr>
                  <tr>
                    <td class="aoa" align="right" valign="top" width="368">
                    <div align="right">Apellido :&nbsp;</div>
                    </td>
                    <td align="left" valign="top" width="511">
					<input name="txt_capellido" value=<?php echo '"'.$apellido.'"'; ?> maxlength="30" size="30" 
					style="padding: 0pt; text-transform: uppercase; overflow: visible;" type="text">
					</td>
                  </tr>
                  <tr>
                    <td class="aoa" align="right" valign="top" width="368">
                    <div align="right">Correo electr&oacute;nico :&nbsp;</div>
                    </td>
                    <td align="left" valign="top" width="511">
					<input name="txt_cemail" value=<?php echo '"'.$email.'"'; ?> size="30" maxlength="40" 
					style="padding: 0pt; overflow: visible;" type="text">
					</td>
                  </tr>
                  <tr>
                    <td class="aoa" align="right"
 valign="top">
                    <div align="right">mensaje :&nbsp;</div>
                    </td>
                    <td align="left" valign="top">
			 <textarea name="txt_cmensajes" cols="50" rows="10" wrap="PHYSICAL" 
			 style="padding: 0pt;"><?php echo $mensaje; ?></textarea>
            </td>
                  </tr>
                  <tr>
                    <td align="right" height="40">&nbsp;</td>
                    <td align="left"><input value="Enviar" name="submit" type="submit">
                    &nbsp;&nbsp; <input value="Borrar" name="submit2" type="reset"></td>
                  </tr>
                </tbody>
              </table>
            </form>
            </td>
          </tr>
        </tbody>
      </table>
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
   <tr>
    <td align="center" style="color: RED"><?php echo $msj; ?></td>
   </tr>
  </tbody>
 </table>
      </td>
    </tr>
  </tbody>
</table>

</body>
</html>
