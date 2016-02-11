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


$color_id = $_POST['id'];
$color_nombre_e = $_POST['esp'];
$color_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$color_id = str_replace(',', '.',$color_id);
if (!validarNumero($color_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($color_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($color_nombre_i)){
    header($location.'&error1');
    exit;
}

$colorDAO = new colorDAO();

$color = new color();

$color = $colorDAO->getById($color_id);

$color_nombre_e = accents2HTML($color_nombre_e);  //     utilizar para eliminar tildes y � 
$color_nombre_i = accents2HTML($color_nombre_i);  //     utilizar para eliminar tildes y � 

$color->setid($color_id);
$color->setnombre_e($color_nombre_e);
$color->setnombre_i($color_nombre_i);

$colorDAO->update($color);

$location = "location: ./../../admin/coloresAdd.php?edit=";

header($location.'1');
exit;


?>