<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/costoDAO.php';
include '../entities/costo.php';
include '../functions/simpleImages.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}


$location = "location: ./../../admin/menuAdmin.php?s=costoAdd";

if($nombre == ""){/*|| $texto1 == "" /*|| $imagen1 == ""*/ //|| $texto2 == "" || /*$imagen2 == ""||*/ $texto3 == "" ||/* $imagen3 == ""||*/ $texto4 == "" || /*$imagen4 == ""||*/ $texto5 == "" || /*$imagen5 == "" || */$textodescripciongeneral == "" ){
    header($location.'&error1');
    exit;
}


$costoDAO = new costoDAO;
//$titulo = accents2HTML($titulo);

$costo = new costo;
$costo->setDescripciontbl_costos($nombre);
$save = $costoDAO->savcosto($costo);
if ($save==1)
	{
		$id = $costoDAO->getLastId();
		$costo = $costoDAO->getcosto($id);
		$location = "location: ./../../admin/menuAdmin.php?s=costoVer&ok2&id=".base64_encode($id);
		header($location.'&ok');
		exit;
	}
if ($save==3)
	{
		header($location.'&error2');
		exit;
	}	
if ($save==2)
	{
		header($location.'&error3');
		exit;
	}


function accents2HTML($mensaje){
    $mensaje = str_replace("á","&aacute;",$mensaje);
    $mensaje = str_replace("é","&eacute;",$mensaje);
    $mensaje = str_replace("í","&iacute;",$mensaje);
    $mensaje = str_replace("ó","&oacute;",$mensaje);
    $mensaje = str_replace("ú","&uacute;",$mensaje);
    $mensaje = str_replace("ñ","&ntilde;",$mensaje);
    return $mensaje;
}

?>