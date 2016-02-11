<?PHP 
	//require_once("procesos/clase_parametros.php");
	
	require_once 'core/validation.php';
	require_once 'procesos/class_procesos.php';
	$objecta = new Procesos();
	
	
	
	//$id = $_GET['id'];
	
	//$datos = Parametros::getCityEstado($id);
	//$datos = "<option value='0' selected='selected' >Todos</option>";
	
	//echo $datos;
	
	
	
	if (isset($_GET['id'])) {
		echo '
		<option value="">-- Seleccione --</option>';

		$result = $objecta->GetCiudad($_GET['id']);
		for ($i = 0; $i < count($result); $i++) {

			echo '<option value="' . $result[$i]["id_Ciudad"] . '">' . utf8_encode($result[$i]["nombre_Ciudad"]) . '</option>';
		}
	}
	
	
	
	
	
?>