<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/estadoDAO.php';
include '../entities/estado.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$estado_nombre = $_POST['esp'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$estadoDAO = new estadoDAO();

$estado = new estado();

$estado_nombre = accents2HTML($estado_nombre);  //     utilizar para eliminar tildes y � 

$estado->setid($estado_id);
$estado->setnombre($estado_nombre);


$estadoDAO->save($estado);

$location = "location: ./../../admin/estadosAdd.php?add=";

header($location.'1');
exit;


?>