<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/lineaDAO.php';
include '../entities/linea.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$linea_nombre_e = $_POST['esp'];
$linea_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$lineaDAO = new lineaDAO();

$linea = new linea();

$linea_nombre_e = accents2HTML($linea_nombre_e);  //     utilizar para eliminar tildes y � 
$linea_nombre_i = accents2HTML($linea_nombre_i);  //     utilizar para eliminar tildes y � 

$linea->setid($linea_id);
$linea->setnombre_e($linea_nombre_e);
$linea->setnombre_i($linea_nombre_i);


$lineaDAO->save($linea);

$location = "location: ./../../admin/lineasAdd.php?add=";

header($location.'1');
exit;


?>