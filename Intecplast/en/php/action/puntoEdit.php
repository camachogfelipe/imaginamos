<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/puntoDAO.php';
include '../entities/punto.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$recurso=$_GET['s'];

$punto_id = $_POST['id'];
$punto_nombre = $_POST['nombre'];
$ciudad_id = $_POST['ciudad'];
$punto_direccion = $_POST['direccion'];
$punto_tel = $_POST['telefono'];
$punto_pbx = $_POST['pbx'];
$punto_email = $_POST['email'];
$punto_hlv = $_POST['hlv'];
$punto_hs = $_POST['hs'];
$punto_gmap = $_POST['gmap'];

$location = "location: ./../../admin/menuAdmin.php?s=admPuntos";

$punto_id = str_replace(',', '.',$punto_id);

if (!validarNumero($punto_id)){
    header($location.'&error1');
    exit;
}

$puntoDAO = new puntoDAO();

$punto = new punto();

$punto = $puntoDAO->getById($punto_id);

$punto_nombre = accents2HTML($punto_nombre);
$punto_direccion = accents2HTML($punto_direccion);
$punto_email = accents2HTML($punto_email);
$punto_hlv = accents2HTML($punto_hlv);
$punto_hs = accents2HTML($punto_hs);



$punto->setId($punto_id);
$punto->setNombre($punto_nombre);
$punto->setCiudadId($ciudad_id);
$punto->setDireccion($punto_direccion);
$punto->setTel($punto_tel);
$punto->setPbx($punto_pbx);
$punto->setEmail($punto_email);
$punto->setHlv($punto_hlv);
$punto->setHs($punto_hs);
$punto->setGmap($punto_gmap);


$puntoDAO->update($punto);

$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&edit=1&id=".$punto_id;

header($location);
exit;
?>