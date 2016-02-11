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


$estado_id = $_POST['id'];
$estado_nombre = $_POST['esp'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$estado_id = str_replace(',', '.',$estado_id);
if (!validarNumero($estado_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($estado_nombre)){
    header($location.'&error1');
    exit;
}

$estadoDAO = new estadoDAO();

$estado = new estado();

$estado = $estadoDAO->getById($estado_id);

$estado_nombre = accents2HTML($estado_nombre);  //     utilizar para eliminar tildes y � 

$estado->setid($estado_id);
$estado->setnombre($estado_nombre);

$estadoDAO->update($estado);

$location = "location: ./../../admin/estadosAdd.php?edit=";

header($location.'1');
exit;


?>