<?
include("email/PHPMailer/class.phpmailer.php");
$mail = new phpmailer();
$mail->PluginDir = "email/PHPMailer/";
$mail->Mailer = "smtp";
$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host = 'http://owa.grupogondi.com';
$mail->Host =  "ssl://imap.gmail.com";
//	$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = "465";
$mail->SMTPAuth = true;
$mail->SMTSecure = 'ssl';
$mail->Username = 'admin@imaginamos.com'; 
$mail->Password = 'Soporte2009';
$mail->From = "no-reply@imaginamos.com";
$mail->FromName = "MBA BABRETO";
$mail->Timeout=30;
$mail->AddAddress("jacosta@imaginamos.co");
$mail->IsHTML ();
$mail->Subject = "MBA BABRETO - Buzón de atención";
$tabla="<table>
    <tr>
        <td  colspan='2'>Hola Has recibido una formulario de contactenos por la pagina web, con la siguiente informacion</td>
    </tr> 
    <tr>
        <td><b>Nombre</b></td>
        <td>".$_POST['nombre']."</td>
    </tr> 
    <tr>
        <td><b>Apellido</b></td>
        <td>".$_POST['apellido']."</td>
    </tr> 
    <tr>
        <td><b>Correo</b></td>
        <td>".$_POST['correo']."</td>
    </tr> 
    <tr>
        <td><b>Ciudad</b></td>
        <td>".$_POST['ciudad']."</td>
    </tr>
    
    <tr>
        <td><b>Motivo</b></td>
        <td>".$_POST['sujeto']."</td>
    </tr>
    <tr>
        <td  colspan='2'><b>Comentario</b></td>
    </tr>
    <tr>
        <td  colspan='2'>".$_POST['textarea']."</td>
    </tr>
</table>";
$mail->Body = $tabla;
//$mail->Body = accents2HTML($mail->Body);
//echo $mail->Body;
//$exito = $mail->Send();
header('Location: contactenos.php');

?>