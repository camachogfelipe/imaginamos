<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/categoriaDAO.php';
include '../entities/categoria.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$categoria_id = $_POST['id'];
$categoria_nombre_e = $_POST['esp'];
$categoria_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$categoria_id = str_replace(',', '.',$categoria_id);
if (!validarNumero($categoria_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($categoria_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($categoria_nombre_i)){
    header($location.'&error1');
    exit;
}

$categoriaDAO = new categoriaDAO();

$categoria = new categoria();

$categoria = $categoriaDAO->getById($categoria_id);

$categoria_nombre_e = accents2HTML($categoria_nombre_e);  //     utilizar para eliminar tildes y � 
$categoria_nombre_i = accents2HTML($categoria_nombre_i);  //     utilizar para eliminar tildes y � 

$categoria->setid($categoria_id);
$categoria->setnombre_e($categoria_nombre_e);
$categoria->setnombre_i($categoria_nombre_i);


if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];
        @unlink("./../..".$categoria->getimagen());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $categoria->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

if (is_uploaded_file($_FILES['rangos']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['rangos']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];

        @unlink("./../..".$categoria->getimgRango());

        move_uploaded_file($_FILES['rangos']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $categoria->setimgRango($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}











$categoriaDAO->update($categoria);

$location = "location: ./../../admin/categoriasAdd.php?edit=";

header($location.'1');
exit;


?>