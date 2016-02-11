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

$boca_nombre= $_POST['boca'];

$bocaDAO = new bocaDAO();

$boca = new boca();

$boca_nombre = accents2HTML($boca_nombre);  //     utilizar para eliminar tildes y � 

$boca->setId($boca_id);
$boca->setBoca($boca_nombre);


$bocaDAO->save($boca);

$location = "location: ./../../admin/bocasAdd.php?add=";

header($location.'1');
exit;


?>