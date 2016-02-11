<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$year = $_POST["year"];
$imageUpload = 0;
if(isset($_POST["CMSFiles"])) $imageUpload = count($_POST["CMSFiles"]);
if($imageUpload == "" and isset($_POST['idt'])) $imageUpload = 1;


if(isset($_POST['idt']) and !empty($_POST['idt'])) $idyear = $_POST['idt'];


if($imageUpload == "" || empty($year)) : $message = "<script>showError('Ingrese año e imagen',3000);</script>";
elseif(isset($idyear)) :
		if(!empty($_POST['CMSFiles'][0])) $nameImageUpload = $_POST["CMSFiles"][0];
		else $nameImageUpload = $_POST["oldFile"];
		
		$db->doQuery("UPDATE cms_testimonials_descargables SET year='$year', file='$nameImageUpload' WHERE id_descargables='$idyear'",UPDATE_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
else:
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("INSERT INTO cms_testimonials_descargables (year, file) VALUES('$year', '$nameImageUpload')", INSERT_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Inserción correcta',3000);</script>";
endif;
echo $message;

?>