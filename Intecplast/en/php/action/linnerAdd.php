<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/linnerDAO.php';
include '../entities/linner.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$linner_nombre_e = $_POST['esp'];
$linner_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$linnerDAO = new linnerDAO();

$linner = new linner();

$linner_nombre_e = accents2HTML($linner_nombre_e);  //     utilizar para eliminar tildes y � 
$linner_nombre_i = accents2HTML($linner_nombre_i);  //     utilizar para eliminar tildes y � 

$linner->setid($linner_id);
$linner->setnombre_e($linner_nombre_e);
$linner->setnombre_i($linner_nombre_i);


$linnerDAO->save($linner);

$location = "location: ./../../admin/linnersAdd.php?add=";

header($location.'1');
exit;


?>