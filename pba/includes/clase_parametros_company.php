<?PHP
	require_once("conexion.php");
	
	class ParametrosCompany {
		
		
		/*  Banner Principal */
		static function getContenidoCompany() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_company;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
	}
?>