<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/comentarioDAO.php';
include '../entities/comentario.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$venta = $_POST['venta'];
$fecha = $_POST['fecha'];
$comentario = $_POST['comentario'];
$activo = $_POST['activo'];

$location = "location: ./../../admin/menuAdmin.php?s=comentarioEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$venta = str_replace(',', '.',$venta);
if (!validarNumero($venta)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($fecha)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($comentario)){
    header($location.'&error1');
    exit;
}

$activo = str_replace(',', '.',$activo);
if (!validarNumero($activo)){
    header($location.'&error1');
    exit;
}

$comentarioDAO = new comentarioDAO();

$comentario = new comentario();

$comentario = $comentarioDAO->getById($id);

$comentario->setid($id);
$comentario->setventa($venta);
$comentario->setfecha($fecha);
$comentario->setcomentario($comentario);
$comentario->setactivo($activo);

$comentarioDAO->update($comentario);

$location = "location: ./../../admin/menuAdmin.php?s=comentarioEdit&a=".$id;

header($location.'&ok2');
exit;


?>