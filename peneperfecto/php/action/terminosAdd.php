<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/terminosDAO.php';
include '../entities/terminos.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$location = "location: ./../../admin/menuAdmin.php?s=terminosAdd";


if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($descripcion)){
    header($location.'&error1');
    exit;
}

$terminosDAO = new terminosDAO();

$terminos = new terminos();

$descripcion = accents2HTML($descripcion);  //     utilizar para eliminar tildes y � 

$terminos->setid($id);
$terminos->settitulo($titulo);
$terminos->setdescripcion($descripcion);

$terminosDAO->save($terminos);

$id = $terminosDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=terminosEdit&a=".$id;

header($location.'&ok');
exit;


?>