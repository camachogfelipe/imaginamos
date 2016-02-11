<? 
include("lib_carrito.php"); 
$_SESSION["ocarrito"]->elimina_producto($_GET["linea"]);
$location = "location: ./cotizador.php?delete=";
header($location.'1');
?>