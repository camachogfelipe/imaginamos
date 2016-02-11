<?PHP 
	require_once("includes/clase_parametros.php");
	
	$id = $_GET['id'];
	
	//$datos = Parametros::getTablaRedP($id);
	$datos = Parametros::getTablaRedP2($id);
	
	echo $datos;
?>