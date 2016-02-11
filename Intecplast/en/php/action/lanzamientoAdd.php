<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/articuloDAO.php';
include '../entities/articulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';



$tituloEspanol = $_POST['tituloEspanol'];
$descripcionEspanol = $_POST['descripcionEspanol'];
$tituloIngles = $_POST['tituloIngles'];
$descripcionIngles = $_POST['descripcionIngles'];

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$articuloDAO = new articuloDAO();

$articulo = new articulo();


$tituloEspanol = accents2HTML($tituloEspanol);
$descripcionEspanol = accents2HTML($descripcionEspanol);
$tituloIngles = accents2HTML($tituloIngles);
$descripcionIngles = accents2HTML($descripcionIngles);

$articulo->setId($articulo_id);
$articulo->setSeccionId(6);
$articulo->setFlagId(12);
$articulo->setTitulo_e($tituloEspanol);
$articulo->setDescripcion_e($descripcionEspanol);
$articulo->setTitulo_i($tituloIngles);
$articulo->setDescripcion_i($descripcionIngles);


if (is_uploaded_file($_FILES['imagenEspanol']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenEspanol']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenEspanol']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $articulo->setImagen_e($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

if (is_uploaded_file($_FILES['imagenIngles']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenIngles']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenIngles']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $articulo->setImagen_i($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$articuloDAO->save($articulo);

$location = "location: ./../../admin/menuAdmin.php?s=admLanzamientos&add=1";

header($location);
exit;
?>