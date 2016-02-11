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

$capacidad_rango= $_POST['capacidad'];

$capacidadDAO = new capacidadDAO();

$capacidad = new capacidad();

$capacidad_rango = accents2HTML($capacidad_rango);  //     utilizar para eliminar tildes y � 

$capacidad->setId($capacidad_id);
$capacidad->setCapacidad_rango($capacidad_rango);


$capacidadDAO->save($capacidad);

$location = "location: ./../../admin/capacidadesAdd.php?add=";

header($location.'1');
exit;


?>