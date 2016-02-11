<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/faldaDAO.php';
include '../entities/falda.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$falda_id = $_POST['id'];
$falda_nombre_e = $_POST['esp'];
$falda_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$falda_id = str_replace(',', '.',$falda_id);
if (!validarNumero($falda_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($falda_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($falda_nombre_i)){
    header($location.'&error1');
    exit;
}

$faldaDAO = new faldaDAO();

$falda = new falda();

$falda = $faldaDAO->getById($falda_id);

$falda_nombre_e = accents2HTML($falda_nombre_e);  //     utilizar para eliminar tildes y � 
$falda_nombre_i = accents2HTML($falda_nombre_i);  //     utilizar para eliminar tildes y � 

$falda->setid($falda_id);
$falda->setnombre_e($falda_nombre_e);
$falda->setnombre_i($falda_nombre_i);

$faldaDAO->update($falda);

$location = "location: ./../../admin/faldasAdd.php?edit=";

header($location.'1');
exit;


?>