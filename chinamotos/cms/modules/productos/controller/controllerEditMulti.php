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

if($titulo == "" or $resum == "" or $contenido == "" or $carac == "")
	{
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
	{
		if(count($_POST["CMSFiles"]))
		{
		for($i=0; $i<count($_POST["CMSFiles"]); $i++)
		$db->doQuery("INSERT INTO cms_vendemos_prodimg(vendemos_prodimg_id, vendemos_prodimg_prod, vendemos_prodimg_img)VALUES('','$foreing_key','".$_POST['CMSFiles'][$i]."')",INSERT_QUERY);
		}
			$db->doQuery("UPDATE cms_vendemos_prod SET vendemos_prod_cat = '$cat', vendemos_prod_tit = '$titulo', vendemos_prod_resum = '$resum', vendemos_prod_con = '$contenido', vendemos_prod_carac = '$carac' WHERE vendemos_prod_id = '$foreing_key'",UPDATE_QUERY);
			//$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Actualizado correctamente',3000);</script>";
			$message = "<script>setInterval('window.location.href = \"../view/indexProd.php\"', 2000); showSuccess('Actualizado correctamente',3000);</script>";
}
echo $message;
?>