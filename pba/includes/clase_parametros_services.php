<?PHP
	require_once("conexion.php");
	
	class Parametros_services {
		
		
		/* Imagen panama */
		static function getImagen() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_services;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
                	
	
	}	



?>