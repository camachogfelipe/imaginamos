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

$lang=$_GET['lang'];

if ($lang==NULL) {
    exit;
}

$recurso=$_GET['s'];

$articulo_id = $_POST['id'];
$articulo_titulo = $_POST['titulo'];
$articulo_descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$enlace = '';

if (isset($_POST['enlace'])) {
    $enlace = $_POST['enlace'];
}

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$articulo_id = str_replace(',', '.',$articulo_id);
if (!validarNumero($articulo_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($articulo_titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($articulo_descripcion)){
    header($location.'&error1');
    exit;
}

$articuloDAO = new articuloDAO();

$articulo = new articulo();

$articulo = $articuloDAO->getById($articulo_id);

$articulo_titulo = accents2HTML($articulo_titulo);

$articulo_descripcion = accents2HTML($articulo_descripcion);

$articulo->setId($articulo_id);


if ($lang=="es") {

    $articulo->setTitulo_e($articulo_titulo);

    $articulo->setDescripcion_e($articulo_descripcion);
    
    $articulo->setEnlace_e($enlace);

}

else {
    
    $articulo->setTitulo_i($articulo_titulo);

    $articulo->setDescripcion_i($articulo_descripcion);    
    
    $articulo->setEnlace_i($enlace);
    
}

if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        $lang=="es" ? @unlink("./../..".$articulo->getImagen_e()) : @unlink("./../..".$articulo->getImagen_i());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;

        $lang=="es" ? $articulo->setImagen_e($logo) : $articulo->setImagen_i($logo);
    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$lang=="es" ? $articuloDAO->updateEspanol($articulo) : $articuloDAO->updateIngles($articulo);


$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&edit=1&lang=".$lang."&id=".$articulo_id;

header($location);
exit;
?>