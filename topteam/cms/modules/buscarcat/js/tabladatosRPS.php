<?PHP 
	
	
	$id = $_GET['id'];
	
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
	
	echo $datos;
?>