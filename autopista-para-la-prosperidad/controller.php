<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
include("cms/core/class/db.class.php");
include './funciones_php/phpmailer/phpmailer.inc.php';
//Creamos objeto database
$db = new Database();

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $empresa = $_POST['empresa'];
            $cargo = $_POST['cargo'];
            $telefono = $_POST['telefono'];
            $movil = $_POST['movil'];
            $pais = $_POST['pais'];
            //Conectamos
            $db->connect();
            $db->doQuery("INSERT INTO usuario (nombre,apellido,correo,clave,empresa,cargo,telefono,movil,pais,activo)
                         values ('$nombre','$apellido','$correo','$password','$empresa','$cargo','$telefono','$movil','$pais',0)", INSERT_QUERY);
$mail = new PHPMailer();
$correoSend = $correo;
$correoEncrypt = base64_encode($correo);
$mail->Host = "localhost";
$mail->From = "pagina@autopista.com";
$mail->FromName = "Autopistas";
$mail->Subject = 'Notificacion creacion de usuario';
$mail->Body = "<b>Cuenta creada exitosamente.</b><br/><br/>Para confirmar esta cuenta en nuestro sistema haga click 
    <a href='".$_SERVER['SERVER_NAME']."/JES/Autopistas/index.php?confirm=".$correoEncrypt."'>AQUI</a>";
$mail->AddAddress($correoSend);
$mail->IsHTML(true);
$mail->Send();
header('Location: registro.php?Erno=1');
exit;
?>

