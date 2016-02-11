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
$result = $comentarioDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=comentario&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>