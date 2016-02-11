<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/restricionpaisplanDAO.php';
include '../entities/restricionpaisplan.php';
include '../functions/simpleImages.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}


$location = "location: ./../../admin/menuAdmin.php?s=restricionpaisplanDAOAdd";

if($idtbl_plan == "" ){/*|| $texto1 == "" /*|| $imagen1 == ""*/ //|| $texto2 == "" || /*$imagen2 == ""||*/ $texto3 == "" ||/* $imagen3 == ""||*/ $texto4 == "" || /*$imagen4 == ""||*/ $texto5 == "" || /*$imagen5 == "" || */$textodescripciongeneral == "" ){
    header($location.'&error1');
    exit;
}


$restricionpaisplanDAO = new restricionpaisplanDAO;
//$titulo = accents2HTML($titulo);

$restricionpaisplan = new restricionpaisplan;
$restricionpaisplan->setTbl_plan_idtbl_plan($idtbl_plan);
$restricionpaisplan->setTbl_destino_idtbl_destino($idtbl_destino);


$save = $restricionpaisplanDAO->savrestricionpaisplan($restricionpaisplan);


if ($save == 1)
{
	$id = $restricionpaisplanDAO->getLastId();
	$location = "location: ./../../admin/menuAdmin.php?s=restricionpaisplanVer&ok2&id=".$id;
	header($location.'&ok');
	exit;
}
if ($save == 2)
{
	$id = $restricionpaisplanDAO->getLastId();
	header($location.'&error2');
	exit;
}
if ($save == 3)
{
	$id = $restricionpaisplanDAO->getLastId();
	header($location.'&error3');
	exit;
}







//everything fine!


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