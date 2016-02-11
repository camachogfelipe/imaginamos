<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/empresatituloDAO.php';
include '../entities/empresatitulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$location = "location: ./../../admin/menuAdmin.php?s=empresatituloEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

$empresatituloDAO = new empresatituloDAO();

$empresatitulo = new empresatitulo();

$empresatitulo = $empresatituloDAO->getById($id);

$empresatitulo->setid($id);
$empresatitulo->settitulo($titulo);

$empresatituloDAO->update($empresatitulo);

$location = "location: ./../../admin/menuAdmin.php?s=empresatituloEdit&a=".$id;

header($location.'&ok2');
exit;


?>