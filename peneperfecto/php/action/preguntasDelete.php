<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/preguntasDAO.php';
include '../entities/preguntas.php';

$id = $_GET['id'];

$preguntasDAO = new preguntasDAO();

$preguntas = new preguntas();
$preguntas = $preguntasDAO->getById($id);
$result = $preguntasDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=preguntas&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>