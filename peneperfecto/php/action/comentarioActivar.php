<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/comentarioDAO.php';
include '../entities/comentario.php';

$id = $_GET['id'];

$comentarioDAO = new comentarioDAO();

$comentario = new comentario();
$comentario = $comentarioDAO->getById($id);
$comentario->setactivo(1);

$result = $comentarioDAO->update($comentario);

$location = "location: ./../../admin/menuAdmin.php?s=comentario&a=0";

header($location.'&ok3');
exit;


?>