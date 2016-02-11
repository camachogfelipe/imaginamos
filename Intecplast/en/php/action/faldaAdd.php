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

$falda_nombre_e = $_POST['esp'];
$falda_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$faldaDAO = new faldaDAO();

$falda = new falda();

$falda_nombre_e = accents2HTML($falda_nombre_e);  //     utilizar para eliminar tildes y � 
$falda_nombre_i = accents2HTML($falda_nombre_i);  //     utilizar para eliminar tildes y � 

$falda->setid($falda_id);
$falda->setnombre_e($falda_nombre_e);
$falda->setnombre_i($falda_nombre_i);


$faldaDAO->save($falda);

$location = "location: ./../../admin/faldasAdd.php?add=";

header($location.'1');
exit;


?>