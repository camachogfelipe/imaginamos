<?PHP
	require_once("includes/clase_parametros.php");

	$email = $_POST['email'];
	
	echo"Esto es una prueba222...<br />";
	
	$fercho = "Fernando";
	
	$conteGen = Parametros::prueba($fercho);

	echo $conteGen;


?>