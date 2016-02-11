<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/atributoDAO.php';
include '../entities/atributo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$atributo_nombre_e = $_POST['esp'];
$atributo_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$atributoDAO = new atributoDAO();

$atributo = new atributo();

$atributo_nombre_e = accents2HTML($atributo_nombre_e);  //     utilizar para eliminar tildes y � 
$atributo_nombre_i = accents2HTML($atributo_nombre_i);  //     utilizar para eliminar tildes y � 

$atributo->setid($atributo_id);
$atributo->setnombre_e($atributo_nombre_e);
$atributo->setnombre_i($atributo_nombre_i);


$atributoDAO->save($atributo);

$location = "location: ./../../admin/atributosAdd.php?add=";

header($location.'1');
exit;


?>