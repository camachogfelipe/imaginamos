<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/redesDAO.php';
include '../entities/redes.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$link = $_POST['link'];

$location = "location: ./../../admin/menuAdmin.php?s=redesEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($link)){
    header($location.'&error1');
    exit;
}

$redesDAO = new redesDAO();

$redes = new redes();

$redes = $redesDAO->getById($id);

$redes->setid($id);
$redes->setlink($link);

$redesDAO->update($redes);

$location = "location: ./../../admin/menuAdmin.php?s=redesEdit&a=".$id;

header($location.'&ok2');
exit;


?>