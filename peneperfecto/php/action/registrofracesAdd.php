<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/registrofracesDAO.php';
include '../entities/registrofraces.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=registrofracesAdd";



if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$registrofracesDAO = new registrofracesDAO();

$registrofraces = new registrofraces();

$registrofraces->setid($id);
$registrofraces->settexto($texto);

$registrofracesDAO->save($registrofraces);

$id = $registrofracesDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=registrofracesEdit&a=".$id;

header($location.'&ok');
exit;


?>