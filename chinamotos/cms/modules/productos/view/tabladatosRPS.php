<?PHP 
session_start();
//Evita presentar contenidos sin el login debido
include("../../admin/security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/functions.xajax.php");
//Carga conexión e interacción con la base de datos
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
			
			//$datos .= "<option value='0' selected='selected' >Todos 2</option>";
			
		    /*
			$query = "SELECT * FROM cms_vendemos_prod WHERE vendemos_prod_cat = '$id' ORDER BY vendemos_prod_id";
			$this->db->doQuery($query,SELECT_QUERY);
			$results = $this->db->results;
			*/
			
			$db->doQuery("SELECT * FROM cms_vendemos_prod WHERE vendemos_prod_cat = '$id' ORDER BY vendemos_prod_id",SELECT_QUERY);					
						$results = $db->results;
			
				
			$datos .= "<option value='0' selected='selected' >Seleccione</option>";
			foreach($results as $result)
			{
				$datos .= "<option value='".$result['vendemos_prod_id']."'>".trim($result['vendemos_prod_tit'])."</option>";
			
			}
			
			
			/*
			$sql = "select * from cms_vendemos_prod where vendemos_prod_cat = '".$id."' order by vendemos_prod_id;"; 
			$dbRS = $conexion->query($sql); 
			$row = $dbRS->fetchAll();
				
			if(is_array($row) && !empty($row)) {
				
				$datos .= "<option value='0' selected='selected' >Todos 2</option>";
					for($i = 0; $i < sizeof($row); $i++) {
						$datos .= "<option value='".$row[$i]['vendemos_prod_id']."'>".trim($row[$i]['vendemos_prod_tit'])."</option>";
					}
			}
			*/
				
		}
	
	echo $datos;
?>