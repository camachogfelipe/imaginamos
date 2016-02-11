<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/promocionDAO.php';
include '../entities/promocion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$lang=$_GET['lang'];

if ($lang==NULL) {
    exit;
}

$recurso=$_GET['s'];

$promocion_id = $_POST['id'];
$promocion_titulo = $_POST['titulo'];
$promocion_descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$unidades = $_POST['unidades'];

$location = "location: ./../../admin/menuAdmin.php?s=admPromociones&id=1";

$promocion_id = str_replace(',', '.',$promocion_id);
if (!validarNumero($promocion_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($promocion_titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($promocion_descripcion)){
    header($location.'&error1');
    exit;
}

$promocionDAO = new promocionDAO();

$promocion = new promocion();

$promocion = $promocionDAO->getById($promocion_id);

$promocion_titulo = accents2HTML($promocion_titulo);

$promocion_descripcion = accents2HTML($promocion_descripcion);

$promocion->setId($promocion_id);
$promocion->setReferencia($referencia);
$promocion->setPrecio($precio);
$promocion->setUnidades($unidades);


if ($lang=="es") {

    $promocion->setTitulo_e($promocion_titulo);

    $promocion->setDescripcion_e($promocion_descripcion);
    

}

else {
    
    $promocion->setTitulo_i($promocion_titulo);

    $promocion->setDescripcion_i($promocion_descripcion);    
    
    
}

if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        $lang=="es" ? @unlink("./../..".$promocion->getImagen_e()) : @unlink("./../..".$promocion->getImagen_i());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;

        $lang=="es" ? $promocion->setImagen_e($logo) : $promocion->setImagen_i($logo);
    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$lang=="es" ? $promocionDAO->updateEspanol($promocion) : $promocionDAO->updateIngles($promocion);


$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&edit=1&lang=".$lang."&id=".$promocion_id;

header($location);
exit;
?>