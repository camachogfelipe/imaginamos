<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/capacidadDAO.php';
include '../entities/capacidad.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$capacidad_id = $_POST['id'];
$capacidad_rango = $_POST['capacidad'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$capacidad_id = str_replace(',', '.',$capacidad_id);
if (!validarNumero($capacidad_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($capacidad_rango)){
    header($location.'&error1');
    exit;
}


$capacidadDAO = new capacidadDAO();

$capacidad = new capacidad();

$capacidad = $capacidadDAO->getById($capacidad_id);

$capacidad_rango = accents2HTML($capacidad_rango);  //     utilizar para eliminar tildes y � 

$capacidad->setId($capacidad_id);
$capacidad->setCapacidad_rango($capacidad_rango);

$capacidadDAO->update($capacidad);

$location = "location: ./../../admin/capacidadesAdd.php?edit=";

header($location.'1');
exit;


?>