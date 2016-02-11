<?PHP 
	include("../../../core/class/db.class.php");
	//Creamos el nuevo objeto "Database"
	$db = new Database();
	//Conectamos
	$db->connect();	
	
	$id = $_GET['id'];
	
	$datos ="";
			
		if($id == 0){	
			$datos .= "<option value='0' selected='selected' >Seleccione</option>";
		}else{
			
			$datos .= "<option value='0' selected='selected' >Seleccione</option>";
			
			$sql = "select * from cms_vendemos_prod where vendemos_prod_cat = '".$id."' order by vendemos_prod_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
				
			if(is_array($row) && !empty($row)) {
				
				$datos .= "<option value='0' selected='selected' >Seleccione</option>";
					for($i = 0; $i < sizeof($row); $i++) {
						$datos .= "<option value='".$row[$i]['vendemos_prod_id']."'>".trim($row[$i]['vendemos_prod_tit'])."</option>";
					}
			}
			
				
		}
	
	echo $datos;
?>