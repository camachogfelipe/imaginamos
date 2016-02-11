<?php
require("class.phpmailer.php"); //Importamos la función PHP class.phpmailer
        include_once './../php/clases.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$pais_id = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$date = $_POST['date'];
$profesion = $_POST['profesion'];
$cargo = $_POST['cargo'];
$aspiracion = $_POST['aspiracion'];
$academica = $_POST['academica'];
$complementaria = $_POST['complementaria'];
$experiencia = $_POST['experiencia'];
$telefono = $_POST['telefono'];

$paisDAO = new paisDAO();
$pais = new pais();
$pais = $paisDAO->getById($pais_id);
$pais = $pais->getnombre_e();

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true; // True para que verifique autentificación de la cuenta o de lo contrario False
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "infointecplast@gmail.com"; // Cuenta de e-mail
$mail->Password = "1m4g1n42012"; // Password

$mail->From = $email;
$mail->FromName = $nombre." ".$apellidos;
$mail->Subject = "Informacion Aspirante ".$nombre." ".$apellidos;
$mail->AddAddress("seleccion@intecplast.com.co");


        if (is_uploaded_file($_FILES['adjunto']['tmp_name'])) {
            $src = "/img/";
            $imagen = $_FILES['adjunto']['name'];
            $imagen1 = explode(".", $imagen);
            if ($imagen1[1] == "swf" || $imagen1[1] == "SWF" || $imagen1[1] == "ppsx" || $imagen1[1] == "PPSX" || $imagen1[1] == "pptx" || $imagen1[1] == "PPTX" || $imagen1[1] == "xppt" || $imagen1[1] == "XPPT" || $imagen1[1] == "pps" || $imagen1[1] == "PPS" || $imagen1[1] == "ppt" || $imagen1[1] == "PPT" || $imagen1[1] == "docx" || $imagen1[1] == "DOCX" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "wtx" || $imagen1[1] == "WTX" || $imagen1[1] == "wri" || $imagen1[1] == "WRI" || $imagen1[1] == "txt" || $imagen1[1] == "TXT" || $imagen1[1] == "scp" || $imagen1[1] == "SCP" || $imagen1[1] == "rtf" || $imagen1[1] == "RTF" || $imagen1[1] == "log" || $imagen1[1] == "LOG" || $imagen1[1] == "idx" || $imagen1[1] == "IDX" || $imagen1[1] == "exc" || $imagen1[1] == "EXC" || $imagen1[1] == "dochtml" || $imagen1[1] == "DOCHTML" || $imagen1[1] == "diz" || $imagen1[1] == "DIZ" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "dic" || $imagen1[1] == "DIC" || $imagen1[1] == "xlam" || $imagen1[1] == "XLAM" || $imagen1[1] == "xltx" || $imagen1[1] == "XLTX" || $imagen1[1] == "xltm" || $imagen1[1] == "XLTM" || $imagen1[1] == "xlsm" || $imagen1[1] == "XLSM" || $imagen1[1] == "xlsb" || $imagen1[1] == "XLSB" || $imagen1[1] == "xlsx" || $imagen1[1] == "XLSX" || $imagen1[1] == "xla" || $imagen1[1] == "XLA" || $imagen1[1] == "xlt" || $imagen1[1] == "XLT" || $imagen1[1] == "xml" || $imagen1[1] == "XML" || $imagen1[1] == "csv" || $imagen1[1] == "CSV" || $imagen1[1] == "xls" || $imagen1[1] == "XLS" || $imagen1[1] == "pdf" || $imagen1[1] == "PDF" || $imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP") {
                $imagen2 = $imagen1[0]."." . $imagen1[1];
                $get = 'get'.'adjunto';
                move_uploaded_file($_FILES['adjunto']['tmp_name'], ".".$src . $imagen2);
                $logo = $src . $imagen2;
                $mail->AddAttachment(".".$logo, $imagen2);
            } 
        }


$mail->WordWrap = 50;
$body .= "<h3>Nuevo Aspirante</h3>";
$body .= "<label><b>Nombre: </b></label>".$nombre."<br/><br/>";
$body .= "<label><b>Apellidos: </b></label>".$apellidos."<br/><br/>";
$body .= "<label><b>Genero: </b></label>".$genero."<br/><br/>";
$body .= "<label><b>E-mail: </b></label>".$email."<br/><br/>";
$body .= "<label><b>Pais: </b></label>".$pais."<br/><br/>";
$body .= "<label><b>Ciudad: </b></label>".$ciudad."<br/><br/>";
$body .= "<label><b>Fecha de Nacimiento: </b></label>".$date."<br/><br/>";
$body .= "<label><b>Profesion: </b></label>".$profesion."<br/><br/>";
$body .= "<label><b>Cargo al que aspira: </b></label>".$cargo."<br/><br/>";
$body .= "<label><b>Aspiracion Salarial: </b></label>".$aspiracion."<br/><br/>";
$body .= "<label><b>Formación Academica: </b></label>".$academica."<br/><br/>";
$body .= "<label><b>Formación Complementaria: </b></label>".$complementaria."<br/><br/>";
$body .= "<label><b>Experiencia: </b></label>".$experiencia."<br/><br/>";
$body .= "<label><b>Telefono: </b></label>".$telefono."<br/><br/>";

$mail->MsgHTML($body);
$mail->IsHTML(true); // El correo se envía como HTML

// Notificamos al usuario del estado del mensaje

if(!$mail->Send()){
   echo "No se pudo enviar el Mensaje.";
}else{
  $location = "location: trabaje_connosotros.php?send=1";
  header($location);
}

?>