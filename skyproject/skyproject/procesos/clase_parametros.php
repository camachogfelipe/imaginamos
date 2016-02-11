<?PHP
	require_once("conexion.php");
	
	class Parametros {
		
		
		
		
		/* Extrae los datos de los sectores de acuerdo al ID de la ciudad en RED de Puntos */
		static function getCityEstado($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$datos ="";
			
			if($id == 0){	
				$datos .= "<option value='0' selected='selected' >Todos</option>";
			}else{
				
				$sql = "select * from cms_redpuntos_sector where redpuntos_sector_activa = '1' and redpuntos_ciudad_id = '".$id."' order by redpuntos_sector_id;"; 
				$dbRS = $conexion->query($sql); 
				$row = $dbRS->fetchAll();
				
				if(is_array($row) && !empty($row)) {
				
						$datos .= "<option value='0' selected='selected' >Todos</option>";
						for($i = 0; $i < sizeof($row); $i++) {
							$datos .= "<option value='".$row[$i]['redpuntos_sector_id']."'>".trim($row[$i]['redpuntos_sector_nombre'])."</option>";
						}
				}
				
			}
			
			return $datos;
		}
		
		
		
		/*
			Estrae todo el contenido de la sección con formato1
		*/
		static function getConGen($subsec) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_conformato1 where conformato1_id = '".$subsec."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/*
			Estrae todo el contenido de la sección con formato2
		*/
		static function getConGen2($subsec) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_conformato2 where conformato2_id = '".$subsec."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/*
			Extrae Los datos de las tablas generales
		*/
		static function getDatosTablas($subsec) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_datostablas where datostablas_tipo = '".$subsec."';"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/*
			Extrae Los datos de Tabla Red de Puntos
		*/
		static function getDatosRedPuntos($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			if($id == 0){
				$sql = "select * from cms_redpuntos order by redpuntos_id;"; 
			}else{
				$sql = "select * from cms_redpuntos where redpuntos_campo1 = '".$id."' order by redpuntos_id;"; 
			}
			
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		/*
			Extrae Los datos de Tabla Red de Puntos seleccionando el Sector
		*/
		static function getDatosRedPuntos2($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			
			$divID = explode("-", $id);
			$divID1 = $divID[0];
			$divID2 = $divID[1]; 

			if($divID2 == 0){
				if($divID1 == 0){
					$sql = "select * from cms_redpuntos order by redpuntos_id;";
				}
				else{
					$sql = "select * from cms_redpuntos where redpuntos_campo1 = '".$divID1."' order by redpuntos_id;"; 
				}
			}else{
				$sql = "select * from cms_redpuntos where redpuntos_campo2 = '".$divID2."' order by redpuntos_id;"; 
			}
			
			/*
			if($id == 0){
				$sql = "select * from cms_redpuntos order by redpuntos_id;"; 
			}else{
				$sql = "select * from cms_redpuntos where redpuntos_campo2 = '".$id."' order by redpuntos_id;"; 
			}
			*/
			
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		static function getDatosSecRedPuntos($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_redpuntos_sector where redpuntos_sector_activa = '1' order by redpuntos_sector_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			
			$datos ="";
			if(is_array($row) && !empty($row)) {
            
					for($i = 0; $i < sizeof($row); $i++) {
						
						if($row[$i]['redpuntos_sector_id'] == $id ){
							$datos .= trim($row[$i]['redpuntos_sector_nombre']);
						}
						
					}
			}
			
			return $datos;
		}
		
		/* banner Principal */
		static function getImgBanner() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_banners order by banners_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/* Banners inferiores apoyo */	
		static function getImgAliIn() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_aliados order by aliados_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		/* Reemplaza texto por simbolos HTML */	
		static function getRemplaza($txt) {
			
			global $conexion;
			
			$busq  = array('á', 'é', 'í', 'ó', 'ú','Á','É','Í','Ó','Ú');
			$remplaza = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;');

			$busq2  = array('·','<div>','</div>','<br>','ñ', 'Ñ', 'ü', '“','”','¿','?','¡','!');
			$remplaza2 = array('&middot;','<p>','</p>','<br />','&ntilde;', '&Ntilde;', '&uuml;', '&#8220;', '&#8221;','&iquest;','&#63;','&iexcl;','&#33;');
			
			$txt = str_replace($busq, $remplaza, $txt);
			$txt = str_replace($busq2, $remplaza2, $txt);
			
			return $txt;
		}

		
		/* Extrae la imagen correspondiente a la sección */
		static function getImgSeccion($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_imgseccion where imgseccion_id = '".$id."' order by imgseccion_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			return $row;
		}
		
		
		/* Extrae los datos de la ciudades RED de Puntos */
		static function getCityRedP() {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_redpuntos_ciudad where redpuntos_ciudad_activa = '1' order by redpuntos_ciudad_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			
			$datos ="";
			if(is_array($row) && !empty($row)) {
            
					$datos .= "<option value='0' selected='selected' >Todas</option>";
					for($i = 0; $i < sizeof($row); $i++) {
						$datos .= "<option value='".$row[$i]['redpuntos_ciudad_id']."'>".trim($row[$i]['redpuntos_ciudad_nombre'])."</option>";
					}
			}
			
			return $datos;
		}
		
		
		
		/* Extrae los datos de la ciudades RED de Puntos */
		static function getCityRedP2($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$sql = "select * from cms_redpuntos_ciudad where redpuntos_ciudad_activa = '1' order by redpuntos_ciudad_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
			
			
			$datos ="";
			if(is_array($row) && !empty($row)) {
            
					for($i = 0; $i < sizeof($row); $i++) {
						
						if($row[$i]['redpuntos_ciudad_id'] == $id ){
							$datos .= trim($row[$i]['redpuntos_ciudad_nombre']);
						}
						
					}
			}
			
			return $datos;
		}
		
		/* Construye la tabla de RED de Puntos */
		static function getTablaRedP($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$tabla = "";
			$tabla .="<tr><th >Ciudad</th><th >Localidad</th><th >Barrio</th><th >Nombre del Punto</th><th >Direcci&oacute;n</th><th >Horario</th><th >Mapa</th></tr>";
			
			
			$datos = Parametros::getDatosRedPuntos($id);
			if(is_array($datos) && !empty($datos)) {
				for($i = 0; $i < sizeof($datos); $i++) {
					
					$idciudad = trim($datos[$i]['redpuntos_campo1']);
					$idsector = trim($datos[$i]['redpuntos_campo2']);
					
					$ciudad = Parametros::getCityRedP2($idciudad);
					
					$sector = Parametros::getDatosSecRedPuntos($idsector);
					
					
					$tabla .="<tr><td>".$ciudad."</td><td>".$sector."</td><td>".trim($datos[$i]['redpuntos_campo3'])."</td><td>".trim($datos[$i]['redpuntos_campo4'])."</td><td>".trim($datos[$i]['redpuntos_campo5'])."</td><td>".trim($datos[$i]['redpuntos_campo6'])."</td><td>Ver</td></tr>";	
				}
			}	
			
			
			
			
			
			
			return $tabla;
		}
		
		/******************/
		
		/* Construye la tabla de RED de Puntos */
		static function getTablaRedP2($id) {
			
			global $conexion;
			
			if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR); 
			
			$tabla = "";
			$tabla .="<tr><th >Ciudad</th><th >Zona</th><th >Barrio</th><th >Nombre del Punto</th><th >Direcci&oacute;n</th><th >Horario</th><th >Mapa</th></tr>";
			
			
			$datos = Parametros::getDatosRedPuntos2($id);
			if(is_array($datos) && !empty($datos)) {
				for($i = 0; $i < sizeof($datos); $i++) {
					
					$idciudad = trim($datos[$i]['redpuntos_campo1']);
					$idsector = trim($datos[$i]['redpuntos_campo2']);
					
					$ciudad = Parametros::getCityRedP2($idciudad);
					
					$sector = Parametros::getDatosSecRedPuntos($idsector);
					
					
					$tabla .="<tr><td>".$ciudad."</td><td>".$sector."</td><td>".trim($datos[$i]['redpuntos_campo3'])."</td><td>".trim($datos[$i]['redpuntos_campo4'])."</td><td>".trim($datos[$i]['redpuntos_campo5'])."</td><td>".trim($datos[$i]['redpuntos_campo6'])."</td><td><a class='fancybox-media' href='http://maps.google.com/?ll=48.85796,2.295231&spn=0.003833,0.010568&t=h&z=17'>Ver</a></td></tr>";	
				}
			}	
			
			
			
			
			
			
			return $tabla;
		}
		
		
		
		
		/*******************/
		
		
		
				
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