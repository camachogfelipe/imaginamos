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


$material_id = $_POST['id'];
$material_nombre_e = $_POST['esp'];
$material_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$material_id = str_replace(',', '.',$material_id);
if (!validarNumero($material_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($material_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($material_nombre_i)){
    header($location.'&error1');
    exit;
}

$materialDAO = new materialDAO();

$material = new material();

$material = $materialDAO->getById($material_id);

$material_nombre_e = accents2HTML($material_nombre_e);  //     utilizar para eliminar tildes y � 
$material_nombre_i = accents2HTML($material_nombre_i);  //     utilizar para eliminar tildes y � 

$material->setid($material_id);
$material->setnombre_e($material_nombre_e);
$material->setnombre_i($material_nombre_i);

$materialDAO->update($material);

$location = "location: ./../../admin/materialesAdd.php?edit=";

header($location.'1');
exit;


?>