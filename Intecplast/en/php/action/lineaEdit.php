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


$linea_id = $_POST['id'];
$linea_nombre_e = $_POST['esp'];
$linea_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$linea_id = str_replace(',', '.',$linea_id);
if (!validarNumero($linea_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($linea_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($linea_nombre_i)){
    header($location.'&error1');
    exit;
}

$lineaDAO = new lineaDAO();

$linea = new linea();

$linea = $lineaDAO->getById($linea_id);

$linea_nombre_e = accents2HTML($linea_nombre_e);  //     utilizar para eliminar tildes y � 
$linea_nombre_i = accents2HTML($linea_nombre_i);  //     utilizar para eliminar tildes y � 

$linea->setid($linea_id);
$linea->setnombre_e($linea_nombre_e);
$linea->setnombre_i($linea_nombre_i);

$lineaDAO->update($linea);

$location = "location: ./../../admin/lineasAdd.php?edit=";

header($location.'1');
exit;


?>