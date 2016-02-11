<?php
//ini_set('display_errors', '1');
//error_reporting(E_ALL);
require("class.phpmailer.php");
foreach ($_POST as $key => $value)
    {
            $arrinputs[$key] = $value;
            $$key = $value;	
    }
    $emaildestino = 'alexandra.gomez@imaginamos.com';
 $message =
'
<div align="center">
<h3> Dark Factory </h3>
</div>
';  

 $message .= 

'
<p>
        Se han contactado con Dark Factory Dejando el siguiente Mensaje . <br/>
        -Dark Factory-
</p>
Nombre : '.$nombre.'<br/><br />
Email : '.$email.'<br/><br />
Apellido : '.$asunto.'<br/>
Comentario: '.nl2br($comentario).'<br/><br/>
<i>Enviado por info@darkfactory.com</i>
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
$mail->From = "info@darkfactory.com";
$mail->FromName = "Dark Factory";
$mail->Subject = 'Contacto desde sitio web';
$mail->AddAddress($emaildestino);
$body = "<strong>Mensaje</strong><br><br>";
$body.= wordwrap($message, 700)."<br>";
$mail->Body = $body;
$mail->IsHTML(true);   
if($mail->Send()){
    header('Location: ../index.php?base&seccion=contact&ok');
    exit();
}else{
    header('Location: ../index.php?base&seccion=contact&error');
    exit();
}
    
?>