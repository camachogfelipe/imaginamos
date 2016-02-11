<?php
//incluye clase para enviar correo
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//require_once 'mailer/Correo.class.php';

include("admin/core/class/db.class.php");

//codigo para enviar correo
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];
$comentario = $_POST['mensaje'];
$archivo = '';
$name_archivo = '';

$correo="info@terracapitalgroup.co";
//luismejiaposada@gmail.com


$body= 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&oacute;n:
</p>
Nombre : '. utf8_decode(utf8_encode($nombre)).'<br/>
Empresa : '. utf8_decode(utf8_encode($empresa)).'<br/> 
Email : '.$email.'<br/>
Contrasena : '. utf8_decode($contrasena).'<br/>
Tel&eacute;fono : '.$telefono.'<br/>  
Mensaje: '. utf8_decode(utf8_encode(nl2br($comentario))).'<br/><br/>
</div>

';
 $asunto = utf8_decode("Formulario de Registro");
                    $cCorreo = new Correo();
                    $cCorreo->SendEmail($correo, $asunto, $body,$archivo,$name_archivo);
                    
                    //fin codigo para enviar correo

$db = new Database();
$db->connect();
//var_dump($_POST);exit
//echo  $_SESSION['Nombre'];exit;//
if (isset($_SESSION['Nombre'])) {
    echo "<script type='text/javascript'>window.location='index.php?seccion=zonasegura';</script>";
}
if (!isset($_SESSION['Nombre'])) {

    $db->doQuery("SELECT * FROM usuarios WHERE correo='" . $_POST["correo"] . "'", SELECT_QUERY);
    $corr = $db->results;
    if (count($corr) > 0) {
        echo "<script type='text/javascript'>window.location='index.php?seccion=index&ya';</script>";
    } else {        
        $db->doQuery("INSERT INTO usuarios
                            (
                            id,
                            nombres,
                            empresa,
                            correo,
                            activo,
                            contrasena,
                            telefono,
                            mensaje)
                            VALUES(
                            NULL,
                            '" . $_POST["nombre"] . "',
                            '" . $_POST["empresa"] . "',
                            '" . $_POST["correo"] . "',
                            0,
                            '" . md5($_POST["contrasena"]) . "',
                            '" . $_POST["telefono"] . "',
                            '" . $_POST["mensaje"] . "'
                            );", INSERT_QUERY);
        $id = $db->getLastId();

        $db->doQuery("INSERT INTO forgot_pass
                            (
                            id,
                            id_usuario,
                            pass,
                            correo
                            )
                            VALUES(
                            NULL,
                            $id,
                            '" . $_POST["contrasena"] . "',
                            '" . $_POST["correo"] . "'                           
                            );", INSERT_QUERY);

        $db->doQuery("SELECT * FROM usuarios WHERE correo='" . $_POST["correo"] . "' and contrasena='" . md5($_POST["contrasena"]) . "'", SELECT_QUERY);
        $resultado = $db->results;
  
      if (count($resultado) > 0) {
////            $_SESSION['id'] = $resultado[0]["id"];
////            $_SESSION['Nombre'] = $resultado[0]["nombres"];
////            $_SESSION['correo'] = $resultado[0]["correo"];
////            $_SESSION['sector'] = $resultado[0]["sector"];
////            echo "Cargando ... "; 
//            //echo "<script type='text/javascript'>window.location='index.php?seccion=zona-cliente';</script>";
           echo "<script type='text/javascript'>window.location='index.php?seccion=index&log';</script>";
       }
    }
}
?>