<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Notificacion de contacto Metalmecanico</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body bgcolor="#FFFFFF" style="margin:0px;">
  <table style="font-family:Verdana, Geneva, sans-serif; font-size:13px" width="650" height="600" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="1">
        <img src="<?php echo base_url() ?>assets/img/head_email.jpg" width="650" height="150" alt="">
      </td>
    </tr>
    <tr>
      <td colspan="1" style="text-align:center;line-height:0.8;">
        <h2 style="color:#002f56;">Contacto:</h2>
      </td>
    </tr>
    <tr>
      <td width="100%" style="text-align:left;line-height:0.8;padding-left:20px;">
        <p style="color:#002f56">Nombre: <span style="color:#000"><?php echo ucwords(@$name) ?></span></p>
        <p style="color:#002f56">Teléfono: <span style="color:#000"><?php echo ucwords(@$phone) ?></span></p>
        <p style="color:#002f56">Correo electrónico: <span style="color:#000"><?php echo ucwords(@$email) ?></span></p>
        <p style="color:#002f56">Asunto: <span style="color:#000"><?php echo ucwords(@$subject) ?></span></p>
        <p style="color:#002f56">Comentario: <span style="color:#000"><?php echo ucfirst(@$message) ?></span></p>
      </td>
    </tr>
    <tr>
      <td colspan="1">
        <img src="<?php echo base_url() ?>assets/img/footer_email.jpg" width="650" height="80" alt="">
      </td>
    </tr>
  </table>
</body>
</html>