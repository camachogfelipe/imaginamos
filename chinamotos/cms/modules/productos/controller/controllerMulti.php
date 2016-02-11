<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$foreing_key = $_POST["foreing_key"];
$cat = $_POST["cat"];
$cat = htmlentities($cat);

$titulo = $_POST["titulo"];
$titulo = htmlentities($titulo);

$resum = $_POST["resum"];
$resum = substr($resum, 0, 125);
$resum = htmlentities($resum);

$contenido = $_POST["contenido"];
$contenido = htmlentities($contenido);

$carac = $_POST["carac"];
$carac = strip_tags($carac, '<ul><li>');
//$carac = htmlentities($carac);

$imageUpload = 0;
$imageUpload = count($_POST["CMSFiles"]);

if($titulo == "" or $resum == "" or $contenido == "" or $carac == "")
	{
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
	{
		
		if($imageUpload == 0)
		{
		$message = "<script>showError('Seleccione una imagen',3000);</script>";
		}
		else
		{
		
		$dateTime = date("Y-m-d H:i:s");
		$db->doQuery("INSERT INTO cms_vendemos_prod(vendemos_prod_id, vendemos_prod_cat, vendemos_prod_tit, vendemos_prod_resum, vendemos_prod_con, vendemos_prod_carac, vendemos_prod_nov, vendemos_prod_prom)VALUES('','$cat','$titulo','$resum','$contenido','$carac','0','0')",INSERT_QUERY);
		$lastId = $db->getLastId();
		
			if(count($_POST["CMSFiles"]>0))
			{
			for($i=0; $i<count($_POST["CMSFiles"]); $i++)
				{
				$imageOk = $_POST['CMSFiles'][$i];
				$db->doQuery("INSERT INTO cms_vendemos_prodimg(vendemos_prodimg_id, vendemos_prodimg_prod, vendemos_prodimg_img)VALUES('','$lastId','$imageOk')",INSERT_QUERY);
				}
			}
			
				//$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
				$message = "<script>setInterval('window.location.href = \"../view/indexProd.php\"', 2000); showSuccess('Carga correcta',3000);</script>";
		}
	}
echo $message;
?>