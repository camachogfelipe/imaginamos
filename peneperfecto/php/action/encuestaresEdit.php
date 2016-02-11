<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
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

$location = "location: ./../../admin/menuAdmin.php?s=encuestaresEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$venta = str_replace(',', '.',$venta);
if (!validarNumero($venta)){
    header($location.'&error1');
    exit;
}

$respuesta = str_replace(',', '.',$respuesta);
if (!validarNumero($respuesta)){
    header($location.'&error1');
    exit;
}

$encuestaresDAO = new encuestaresDAO();

$encuestares = new encuestares();

$encuestares = $encuestaresDAO->getById($id);

$encuestares->setid($id);
$encuestares->setventa($venta);
$encuestares->setrespuesta($respuesta);

$encuestaresDAO->update($encuestares);

$location = "location: ./../../admin/menuAdmin.php?s=encuestaresEdit&a=".$id;

header($location.'&ok2');
exit;


?>