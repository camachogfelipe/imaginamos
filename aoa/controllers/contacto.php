<?php
//ini_set('display_errors', '1');
//error_reporting(E_ALL);
require("class.phpmailer.php");
foreach ($_POST as $key => $value)
    {
            $arrinputs[$key] = $value;
            $$key = $value;	
    }
    $emaildestino = 'jose.sanchez@imaginamos.com';
 $message =
'
<div align="center">
<h3> Qualified Mining S.A.S </h3>
</div>
';  

 $message .= 

'
<p>
        Se han contactado con Qualified Mining S.A.S Dejando el siguiente Mensaje . <br/>
        -Qualified Mining S.A.S-
</p>
Nombre : '.$nombre.'<br/><br />
Email : '.$email.'<br/><br />
Tel&eacute;efono : '.$tel.'<br/>
Ciudad : '.$ciudad.'<br/>
Direcci&oacute;n : '.$dir.'<br/>
Comentario: '.nl2br($comentario).'<br/><br/>
<i>Enviado por info@qualifiedminings.a.s.com</i>
<p>Este email fue generado autom&aacute;ticamente, por favor abst&aacute;ngase de responderlo.</p>
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
$mail->From = "info@qualifiedminings.a.s.com";
$mail->FromName = "Qualified Mining S.A.S";
$mail->Subject = 'Contacto desde sitio web';
$mail->AddAddress($emaildestino);
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 700)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);   
if($mail->Send()){
    header('Location: ../index.php?base&seccion=contacto&ok');
    exit();
}else{
    header('Location: ../index.php?base&seccion=contacto&error');
    exit();
}
    
?>