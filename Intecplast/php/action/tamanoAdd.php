<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tamanoDAO.php';
include '../entities/tamano.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$tamano_nombre_e = $_POST['esp'];
$tamano_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$tamanoDAO = new tamanoDAO();

$tamano = new tamano();

$tamano_nombre_e = accents2HTML($tamano_nombre_e);  //     utilizar para eliminar tildes y � 
$tamano_nombre_i = accents2HTML($tamano_nombre_i);  //     utilizar para eliminar tildes y � 

$tamano->setid($tamano_id);
$tamano->setnombre_e($tamano_nombre_e);
$tamano->setnombre_i($tamano_nombre_i);


$tamanoDAO->save($tamano);

$location = "location: ./../../admin/tamanosAdd.php?add=";

header($location.'1');
exit;


?>