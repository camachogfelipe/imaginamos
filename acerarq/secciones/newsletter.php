<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$newletter = DbHandler::Execute("INSERT INTO newsletter (nombre,email) VALUES ('".utf8_encode($nombre)."','".$email."')");
if($newletter){
header('Location:index.php?seccion=index&Erno=1');
exit;
}else{
header('Location:index.php?seccion=index&Erno=2');
exit;    
}
?>
