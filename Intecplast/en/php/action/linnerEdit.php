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


$linner_id = $_POST['id'];
$linner_nombre_e = $_POST['esp'];
$linner_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$linner_id = str_replace(',', '.',$linner_id);
if (!validarNumero($linner_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($linner_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($linner_nombre_i)){
    header($location.'&error1');
    exit;
}

$linnerDAO = new linnerDAO();

$linner = new linner();

$linner = $linnerDAO->getById($linner_id);

$linner_nombre_e = accents2HTML($linner_nombre_e);  //     utilizar para eliminar tildes y � 
$linner_nombre_i = accents2HTML($linner_nombre_i);  //     utilizar para eliminar tildes y � 

$linner->setid($linner_id);
$linner->setnombre_e($linner_nombre_e);
$linner->setnombre_i($linner_nombre_i);

$linnerDAO->update($linner);

$location = "location: ./../../admin/linnersAdd.php?edit=";

header($location.'1');
exit;


?>