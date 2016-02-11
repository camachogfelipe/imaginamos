<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["cat"];
$texto2 = $_POST["producto"];


//Validamos
if($texto1 == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Debe seleccionar un producto',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				
				$db->doQuery("UPDATE cms_vendemos_prod SET vendemos_prod_nov = '1' WHERE vendemos_prod_id = '$texto2'",UPDATE_QUERY);
				$message = "<script>setInterval('window.location.href = \"../view/indexNov.php\"', 2000); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>