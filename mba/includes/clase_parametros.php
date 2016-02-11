<?PHP
	require_once("conexion.php");
	
	class Parametros {
		
		static function veriExisteArchivo($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_productos2 where idcms = '".$id."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			$file = 0;
			$file2 = 0;
			if(is_array($row) && !empty($row)) {
            
					for($i = 0; $i < sizeof($row); $i++) {
						
						if($row[$i]['adjunto1'] != "" ){
							$file = 1;
						}
						if($row[$i]['adjunto2'] != "" ){
							$file2 = 1;
						}
						
					}
			}
			
			$files = $file."-".$file2;
			
			return $files;
		}
		
		
		
		
		
		static function getImgBanner() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_banners order by banners_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getImgAliIn() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_aliados order by aliados_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		static function getProfesiones() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_buscar_catpro order by buscar_catpro_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		static function getInfoProfesiones($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_buscar_catpro where buscar_catpro_id = '".$id."' order by buscar_catpro_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getExperiencia() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_buscar_catexp order by buscar_catexp_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		static function getInfoExperiencia($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_buscar_catexp where buscar_catexp_id = '".$id."' order by buscar_catexp_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/*
		static function getImgGen($ubica,$pos,$subsec) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from imagenes where ubicacion = '".$ubica."' and subseccion = '".$subsec."' and posicion = '".$pos."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGen($subsec) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from secciones where subseccion = '".$subsec."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		
		static function getImgAliTot() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from imagenes where ubicacion = '7' and subseccion = '7' order by posicion;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		*/
		static function getTxtNotTot() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_news order by news_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtNot($orden) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_news where news_id = '".$orden."' order by news_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/*******************************************************************/
		
		static function getTxtGenHeadhunter($pos) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_headhunter where headhunter_id = '".$pos."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGenStaffing($pos) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_staffing where staffing_id = '".$pos."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/* Sección Nosotros*/
		static function getTxtGenNosotros() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_nosotros;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGenGestionH() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_gestionh;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGenConsulting() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_consulting;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGenFoodservice() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_foodservice;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getTxtGenSoluciones() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_soluciones;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getURLMapa() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_mapa;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
	
	}	



?>