<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/preguntasDAO.php';
include '../entities/preguntas.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];

$location = "location: ./../../admin/menuAdmin.php?s=preguntasAdd";



if (!validarTexto($pregunta)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($respuesta)){
    header($location.'&error1');
    exit;
}

$preguntasDAO = new preguntasDAO();

$preguntas = new preguntas();

$respuesta = accents2HTML($respuesta);  //     utilizar para eliminar tildes y � 

$preguntas->setid($id);
$preguntas->setpregunta($pregunta);
$preguntas->setrespuesta($respuesta);

$preguntasDAO->save($preguntas);

$id = $preguntasDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=preguntasEdit&a=".$id;

header($location.'&ok');
exit;


?>