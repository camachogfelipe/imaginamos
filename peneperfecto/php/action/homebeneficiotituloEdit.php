<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/homebeneficiotituloDAO.php';
include '../entities/homebeneficiotitulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$location = "location: ./../../admin/menuAdmin.php?s=homebeneficiotituloEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

$homebeneficiotituloDAO = new homebeneficiotituloDAO();

$homebeneficiotitulo = new homebeneficiotitulo();

$homebeneficiotitulo = $homebeneficiotituloDAO->getById($id);

$homebeneficiotitulo->setid($id);
$homebeneficiotitulo->settitulo($titulo);

$homebeneficiotituloDAO->update($homebeneficiotitulo);

$location = "location: ./../../admin/menuAdmin.php?s=homebeneficiotituloEdit&a=".$id;

header($location.'&ok2');
exit;


?>