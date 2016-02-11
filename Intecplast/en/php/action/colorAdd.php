<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/colorDAO.php';
include '../entities/color.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$color_nombre_e = $_POST['esp'];
$color_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$colorDAO = new colorDAO();

$color = new color();

$color_nombre_e = accents2HTML($color_nombre_e);  //     utilizar para eliminar tildes y � 
$color_nombre_i = accents2HTML($color_nombre_i);  //     utilizar para eliminar tildes y � 

$color->setid($color_id);
$color->setnombre_e($color_nombre_e);
$color->setnombre_i($color_nombre_i);


$colorDAO->save($color);

$location = "location: ./../../admin/coloresAdd.php?add=";

header($location.'1');
exit;


?>