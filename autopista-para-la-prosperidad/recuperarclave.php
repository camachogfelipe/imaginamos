<?php
include("cms/core/class/db.class.php");
include("cms/core/mapping/functions.mapping.php");
include("cms/core/mapping/mapping.class.php");
include './funciones_php/phpmailer/phpmailer.inc.php';

$correo = $_POST['correo'];

$db = new Database();
$db->connect();
            
$constructor = new CMS_mapping("usuario", $db);
$db->doQuery("SELECT * FROM usuario WHERE correo = '$correo' ",SELECT_QUERY);
$results = $db->results;
$obj = $constructor->mapping($results);


if($obj != null){

$mail = new PHPMailer();
$correoSend = $correo;
$correoEncrypt = base64_encode($correo);
$mail->Host = "localhost";
$mail->From = "pagina@autopista.com";
$mail->FromName = "Autopistas";
$mail->Subject = 'clave de acceso Autopista';
$mail->Body = "suclave de acceso es: ".$obj->clave;
$mail->AddAddress($correoSend);
$mail->IsHTML(true);
$mail->Send();
header('Location: index.php?ok1');
exit;
}  else {
header('Location: index.php?Erno');    
}

?>
