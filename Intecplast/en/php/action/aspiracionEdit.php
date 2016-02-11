<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/aspiracionDAO.php';
include '../entities/aspiracion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$aspiracion_id = $_POST['id'];
$valor = $_POST['valor'];


$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$aspiracion_id = str_replace(',', '.',$aspiracion_id);
if (!validarNumero($aspiracion_id)){
    header($location.'&error1');
    exit;
}

$aspiracionDAO = new aspiracionDAO();
$aspiracion = new aspiracion();

$aspiracion = $aspiracionDAO->getById($aspiracion_id);

$aspiracion->setId($aspiracion_id);
$aspiracion->setValor($valor);

$aspiracionDAO->update($aspiracion);


$location = "location: ./../../admin/admAspiracion.php?edit=";

header($location.'1');
exit;


?>