<?php
session_start();
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );

$nombre = $_POST['nombre'];
$nombre = str_replace("'", '\\\'', $nombre );
$email = $_POST['email'];
$email = str_replace("'", '\\\'', $email );

if(isset($_POST['blog'])){
    $blog = 1;
}else{
    $blog = 0;
}
if(isset($_POST['trailers'])){
    $tr = 1;
}else{
    $tr = 0;
}
if(isset($_POST['industry'])){
    $ind = 1;
}else{
    $ind = 0;
}
$sql = "INSERT INTO subscribe(nombre, email, blog, trailers, industry)
    VALUES (
    '$nombre',
    '$email',
     $blog,
    $tr,
    $ind)";
$insert = DbHandler::Execute($sql);
if($insert){
    $location = 'Location: ../index.php?base&seccion=media&ok';
}else{
     $location = 'Location: ../index.php?base&seccion=media&error';
}
header($location);
exit();
?>
