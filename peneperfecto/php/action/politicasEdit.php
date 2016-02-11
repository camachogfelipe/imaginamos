<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/politicasDAO.php';
include '../entities/politicas.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=politicasEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$politicasDAO = new politicasDAO();

$politicas = new politicas();

$politicas = $politicasDAO->getById($id);

$politicas->setid($id);
$politicas->settitulo($titulo);
$politicas->settexto($texto);

$politicasDAO->update($politicas);

$location = "location: ./../../admin/menuAdmin.php?s=politicasEdit&a=".$id;

header($location.'&ok2');
exit;


?>