<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/PlanDAO.php';
include '../entities/Plan.php';
include '../functions/simpleImages.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}


$location = "location: ./../../admin/menuAdmin.php?s=PlanAdd";

if($nombre == "" ){/*|| $texto1 == "" /*|| $imagen1 == ""*/ //|| $texto2 == "" || /*$imagen2 == ""||*/ $texto3 == "" ||/* $imagen3 == ""||*/ $texto4 == "" || /*$imagen4 == ""||*/ $texto5 == "" || /*$imagen5 == "" || */$textodescripciongeneral == "" ){
    header($location.'&error1');
    exit;
}


$planDAO = new PlanDAO;
//$titulo = accents2HTML($titulo);

$plan = new plan;
$plan->setDescripciontbl_plan($nombre);
$plan->setProductoanualtbl_plan($panual);
$plan->setDiasmaxtbl_plan($diasmax);
$plan->setEdadmintbl_plan($edadmin);
$plan->setEdamaxtbl_plan($edadmax);
$plan->setValordiaAddtbl_plan($valordia);

$save = $planDAO->savPlan($plan);


if ($save == 1)
{
	$id = $planDAO->getLastId();
	$location = "location: ./../../admin/menuAdmin.php?s=PlanVer&ok2&id=".$id;
	header($location.'&ok');
	exit;
}
if ($save == 2)
{
	$id = $planDAO->getLastId();
	header($location.'&error2');
	exit;
}
if ($save == 3)
{
	$id = $planDAO->getLastId();
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