<?php session_start();?>
<?php

if( !isset($_SESSION['usuariosPP']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/encuestaresDAO.php';
include '../entities/encuestares.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$venta = $_POST['venta'];
$respuesta = $_POST['respuesta'];

$location = "location: ./../../inicio_usuarios.php";



if (!validarNumero($venta)){
    header($location.'&error1');
    exit;
}

if (!validarNumero($respuesta)){
    header($location.'&error1');
    exit;
}

$encuestaresDAO = new encuestaresDAO();

$encuestares = new encuestares();

$encuestares->setid($id);
$encuestares->setventa($venta);
$encuestares->setrespuesta($respuesta);

$encuestaresDAO->save($encuestares);

$id = $encuestaresDAO->getLastId();

$location = "location: ./../../inicio_usuarios.php?enn";

header($location.'&ok');
exit;


?>