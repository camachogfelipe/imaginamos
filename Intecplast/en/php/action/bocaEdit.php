<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/bocaDAO.php';
include '../entities/boca.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$boca_id = $_POST['id'];
$boca_nombre = $_POST['boca'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$boca_id = str_replace(',', '.',$boca_id);
if (!validarNumero($boca_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($boca_nombre)){
    header($location.'&error1');
    exit;
}


$bocaDAO = new bocaDAO();

$boca = new boca();

$boca = $bocaDAO->getById($boca_id);

$boca_nombre = accents2HTML($boca_nombre);  //     utilizar para eliminar tildes y � 

$boca->setId($boca_id);
$boca->setBoca($boca_nombre);

$bocaDAO->update($boca);

$location = "location: ./../../admin/bocasAdd.php?edit=";

header($location.'1');
exit;


?>