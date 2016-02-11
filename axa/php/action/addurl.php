<?php session_start(); ?>
<?php

if (!isset($_SESSION['admin'])) {
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../functions/simpleImages.php';
$daoConnection = new DAO;
$daoConnection->conectar();

foreach ($_POST as $key => $value) {
    $$key = $value;
}


$location = "location: ./../../admin/menuAdmin.php?s=costoAdd";

if ($nombre == "") {/* || $texto1 == "" /*|| $imagen1 == "" */ //|| $texto2 == "" || /*$imagen2 == ""||*/ $texto3 == "" ||/* $imagen3 == ""||*/ $texto4 == "" || /*$imagen4 == ""||*/ $texto5 == "" || /*$imagen5 == "" || */$textodescripciongeneral == "" ){
    header($location . '&error1');
    exit;
}


// hacemos el insert
$sql = 'INSERT INTO empresa_url (nombre)
VALUES ("'.$_POST['nombre'].'");';
$daoConnection->consulta($sql);

// traemos el id guadado
$id=$daoConnection->max_id();

//generamos la url
$url= $_SERVER['SERVER_NAME'].'/index.php?rede='.$id;

// guadamos la url generada
$sql = 'UPDATE  empresa_url  set url="'.$url.'"
WHERE id='.$id;
$daoConnection->consulta($sql);


$location = "location: ./../../admin/menuAdmin.php?s=generador";
header($location . '&ok');
exit;

?>