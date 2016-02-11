<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/costoDAO.php';
//include '../entities/bienvenida.php';
include '../functions/simpleImages.php';

$id = $_GET['id'];
$id = base64_decode($id);//echo $id."asdas";


$location = "location: ./../../admin/menuAdmin.php?s=costo";

if($id == ""){
    header($location.'&error1');
    exit;
}


$serviciosDAO = new costoDAO;
/*$bienvenida = $bienvenidaDAO->getBienvenida($id);

if( $bienvenida == null ){
    header($location.'&error3');
    exit;
}*/


$serviciosDAO->deletecosto($id);

//everything fine!
header($location.'&ok');
exit;

?>