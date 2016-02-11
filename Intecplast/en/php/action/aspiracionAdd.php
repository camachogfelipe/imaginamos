<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/aspiracionDAO.php';
include '../entities/aspiracion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$valor = $_POST['valor'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$aspiracionDAO = new aspiracionDAO();

$aspiracion = new aspiracion();


$aspiracion->setId($id);
$aspiracion->setValor($valor);


$aspiracionDAO->save($aspiracion);

$location = "location: ./../../admin/admAspiracion.php?add=";

header($location.'1');
exit;


?>