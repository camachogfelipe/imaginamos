<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/materialDAO.php';
include '../entities/material.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$material_nombre_e = $_POST['esp'];
$material_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$materialDAO = new materialDAO();

$material = new material();

$material_nombre_e = accents2HTML($material_nombre_e);  //     utilizar para eliminar tildes y � 
$material_nombre_i = accents2HTML($material_nombre_i);  //     utilizar para eliminar tildes y � 

$material->setid($material_id);
$material->setnombre_e($material_nombre_e);
$material->setnombre_i($material_nombre_i);


$materialDAO->save($material);

$location = "location: ./../../admin/materialesAdd.php?add=";

header($location.'1');
exit;


?>