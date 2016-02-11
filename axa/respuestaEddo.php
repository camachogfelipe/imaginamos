<?php

require 'php/functions/class.phpmailer.php';

$nombrecsv = "12345678" . date('Ymd') . ".csv";
$csvName = 'csv/' . $nombrecsv;
$fileHandle = fopen($csvName, 'w') or die('Can\'t create .csv file, try again later.');
$elCSV = "Eduardo,80844715,edruiz_1@msn.com,21/06/1985,27,econo,italia,27/02/13,15/03/13,15,discovery,21/02/13,$5000,ninguna,terminos,12345678,Lista pasajeros \n ";
fwrite($fileHandle, $elCSV);

$body = "cuerpo del mensaje";

# envio de .csv a AXA
$mail = new PHPMailer();
$mail->AddAttachment($csvName, $nombrecsv);
$mail->Host = "localhost";
$mail->From = "mailto:noreply@tarjetasdeasistencia-axa.com";
$mail->FromName = "AXA";
$mail->Subject = '45086';
$mail->AddAddress('edruiz_1@msn.com');
$mail->AddBCC('eduardo.ruiz@imaginamos.com.co');
$mail->AddBCC('dimarti.ing@gmail.com');
$mail->AddBCC('marisolarenasb@gmail.com');
$mail->Body = $body;
$mail->IsHTML(true);
if($mail->Send()){
    echo 'Success';
} else{
    echo 'Error';
}
# FIN envio .csv a AXA

?>