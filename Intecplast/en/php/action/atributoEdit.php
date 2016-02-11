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


$atributo_id = $_POST['id'];
$atributo_nombre_e = $_POST['esp'];
$atributo_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$atributo_id = str_replace(',', '.',$atributo_id);
if (!validarNumero($atributo_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($atributo_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($atributo_nombre_i)){
    header($location.'&error1');
    exit;
}

$atributoDAO = new atributoDAO();

$atributo = new atributo();

$atributo = $atributoDAO->getById($atributo_id);

$atributo_nombre_e = accents2HTML($atributo_nombre_e);  //     utilizar para eliminar tildes y � 
$atributo_nombre_i = accents2HTML($atributo_nombre_i);  //     utilizar para eliminar tildes y � 

$atributo->setid($atributo_id);
$atributo->setnombre_e($atributo_nombre_e);
$atributo->setnombre_i($atributo_nombre_i);

$atributoDAO->update($atributo);

$location = "location: ./../../admin/atributosAdd.php?edit=";

header($location.'1');
exit;


?>