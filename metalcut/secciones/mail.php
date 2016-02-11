<?php
//require("../business/class/class.phpmailer.php");

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}else{
    $nombre = '';
}

if(isset($_POST['asunto'])){
    $asunto = $_POST['asunto'];
}else{
    $asunto = '';
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    $email = '';
}

if(isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];
}else{
    $ciudad = '';
}

if(isset($_POST['telefono'])){
    $telefono = $_POST['telefono'];
}else{
    $telefono = '';
}

if(isset($_POST['empresa'])){
    $empresa = $_POST['empresa'];
}else{
    $empresa = '';
}

if(isset($_POST['comentario'])){
    $comentario = $_POST['comentario'];
}else{
    $comentario = '';
}



$message = 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&#243;n:
</p>
Asunto : '.utf8_encode($asunto).'<br/>
Nombre : '.utf8_encode($nombre).'<br/>
Email : '.$email.'<br/>
Tel&#233;fono : '.$telefono.'<br/>
Empresa : '.  utf8_encode($empresa).'<br/>    
Ciudad : '.  utf8_encode($ciudad).'<br/>    
Mensaje: '.  utf8_encode(nl2br($comentario)).'<br/><br/>
<i>Enviado por  Metalcut</i>
<p>Este email fue generado autom&aacute;ticamente, por favor abst&eacute;ngase de responderlo.</p>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 10px 0px 0px 0px; padding: 10px 0px 0px 0px; border-top: 1px solid #168893">
    <tr>
        <td>
        <span style="height: 40px;line-height: 40px;width: 260px;position: relative;margin: 0px 0px 0px 0px; float:right">
        <span style="background: url(http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png) no-repeat 0px 0px;width: 21px;height: 22px;display: block;float: left;margin: 9px 10px 0px 0px;">						</span>
        <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">Creado por: </a>
        <a href="http://www.imaginamos.com" style="font-family: "Helvetica";font-weight: 500;font-size: 16px;color: #39444A;text-decoration: underline;">imagin<span style="color: #0CF;">a</span>mos.com</a>
        </span>
        </td>
    </tr>
</table>
';
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "info@metalcut.com";
$mail->FromName = "Metalcut";
$mail->Subject = utf8_encode($asunto);
$mail->AddAddress("alexandra.gomez@imaginamos.com");
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 70)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 70)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

header('Location:index.php?seccion=contacto&Erno=1');
exit;
?>
