<?PHP
	/*$host = "pbabase.db.11341161.hostedresource.com";
	$db = "pbabase";
	$usuario = "pbabase";
	$password = "Pba@260613";*/
	
	$host = "localhost";
	$db = "pbabase";
	$usuario = "root";
	$password = "camachitos";
	
	$conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $password); 

?>