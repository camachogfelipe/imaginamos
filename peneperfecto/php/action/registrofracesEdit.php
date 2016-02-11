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

$location = "location: ./../../admin/menuAdmin.php?s=registrofracesEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$registrofracesDAO = new registrofracesDAO();

$registrofraces = new registrofraces();

$registrofraces = $registrofracesDAO->getById($id);

$registrofraces->setid($id);
$registrofraces->settexto($texto);

$registrofracesDAO->update($registrofraces);

$location = "location: ./../../admin/menuAdmin.php?s=registrofracesEdit&a=".$id;

header($location.'&ok2');
exit;


?>