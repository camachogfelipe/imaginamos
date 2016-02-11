<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/encuestaDAO.php';
include '../entities/encuesta.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$pregunta = $_POST['pregunta'];
$o1 = $_POST['o1'];
$o2 = $_POST['o2'];
$o3 = $_POST['o3'];
$o4 = $_POST['o4'];

$location = "location: ./../../admin/menuAdmin.php?s=encuestaEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pregunta)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($o1)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($o2)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($o3)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($o4)){
    header($location.'&error1');
    exit;
}

$encuestaDAO = new encuestaDAO();

$encuesta = new encuesta();

$encuesta = $encuestaDAO->getById($id);

$encuesta->setid($id);
$encuesta->setpregunta($pregunta);
$encuesta->seto1($o1);
$encuesta->seto2($o2);
$encuesta->seto3($o3);
$encuesta->seto4($o4);

$encuestaDAO->update($encuesta);

$location = "location: ./../../admin/menuAdmin.php?s=encuestaEdit&a=".$id;

header($location.'&ok2');
exit;


?>