<?PHP
	require_once("conexion.php");
	
	class ParametrosTestimonial {
		
		
		/*  Banner Principal */
		static function getContenidoTestimonial() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_testimonials;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		 
		
		
        }
               ?>