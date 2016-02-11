<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/terminosDAO.php';
include '../entities/terminos.php';
include '../functions/simpleImages.php';

$id = $_GET['id'];

$location = "location: ./../../admin/menuAdmin.php?s=TerminosAdd";

if($id == "" ){/*|| $texto1 == "" /*|| $imagen1 == ""*/ //|| $texto2 == "" || /*$imagen2 == ""||*/ $texto3 == "" ||/* $imagen3 == ""||*/ $texto4 == "" || /*$imagen4 == ""||*/ $texto5 == "" || /*$imagen5 == "" || */$pdf == "" ){
    header($location.'&error1');
    exit;
}

$productoDAO = new TerminosDAO;

//$nombre = accents2HTML($nombre);

$terminos = new terminos;


$tamano = $_FILES["pdf"]['size'];
$tipo = $_FILES["pdf"]['type'];
$archivo = $_FILES["pdf"]['name'];
$prefijo = substr(md5(uniqid(rand())),0,6);
if ($archivo != "") {
	// guardamos el archivo a la carpeta files
	$namefile = $prefijo."_".$archivo;
	$destino =  "../../docpdf/".$namefile;
	copy($_FILES['pdf']['tmp_name'],$destino) ;
	$terminos->setPdf($namefile);
	$terminos->setId($id);
	if ($productoDAO->updateTerminos($terminos))
	{	
		$location = "location: ./../../admin/menuAdmin.php?s=TerminosVer&ok2&id=".$id."&a=".$nombre;
		//everything fine!
		header($location.'&ok');
		exit;
	}
}
else
{
	 header($location.'&error1');
    exit;
	}


?>