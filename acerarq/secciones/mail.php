<?php
//require("../business/class/class.phpmailer.php");

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}else{
    $nombre = '';
}
if(isset($_POST['empresa'])){
    $empresa = $_POST['empresa'];
}else{
    $empresa = '';
}
if(isset($_POST['cargo'])){
    $cargo = $_POST['cargo'];
}else{
    $cargo = '';
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    $email = '';
}
if(isset($_POST['comentario'])){
    $comentario = $_POST['comentario'];
}else{
    $comentario = '';
}
if(isset($_POST['telefono'])){
    $telefono = $_POST['telefono'];
}else{
    $telefono = '';
}



$message = 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&oacute;n:
</p>
Nombre : '.utf8_encode($nombre).'<br/>
Email : '.$email.'<br/>
Tel&eacute;fono : '.$telefono.'<br/>
Empresa : '.  utf8_encode($empresa).'<br/>    
Cargo : '.  utf8_encode($cargo).'<br/>    
Mensaje: '.  utf8_encode(nl2br($comentario)).'<br/><br/>
<i>Enviado por  ACERARQ</i>
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
$mail->Host = "smtp.emailsrvr.com";
$mail->Port = 25;
$mail->SMTPAuth = true;  
$mail->Username = "info@acerarq.com";
$mail->From = "info@acerarq.com";
$mail->Password = 'Dat3n2013'; 
$mail->FromName = "ACERARQ";
$mail->Subject = 'Contacto desde sitio web';
$mail->AddAddress("info@acerarq.com");
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 70)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);
$mail->Send();

header('Location:../index.php?seccion=contacto&Erno=1');
exit;
?>
