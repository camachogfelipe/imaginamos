<?PHP
	require_once("conexion.php");
	
	class ParametrosFoundation {
		
		
		/*  Banner Principal */
		static function getContenidoFoundation() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_foundation;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		 
		
		
        }
               ?>