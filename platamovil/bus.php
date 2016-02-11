<?PHP
require_once("includes/clase_parametros.php");

$id = $_GET['id'];

$imgComercio = Parametros::getImgSeccion($id);
$ruta = $imgComercio[0]['imgseccion_image'];

echo $imgComercio[0]['imgseccion_titulo'];

?>