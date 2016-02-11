<?PHP 
	require_once("includes/clase_parametros.php");
	
	$id = $_GET['id'];
	
	$datos = Parametros::getSectorRedP($id);
	
	echo $datos;
?>