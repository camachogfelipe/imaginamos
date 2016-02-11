<?php
if(isset($_SESSION['id'])) :
	$comentario = $_POST["comentario"];
	require_once("admin/core/class/db.class.php");
	$db = new Database();
	$db->connect();
	if(!empty($comentario)) :
		$db->doQuery("INSERT INTO comentarios (comentario, fecha, id_usuario) VALUES('".$comentario."', '".date("Y-m-d")."', '".$_SESSION['id']."')", INSERT_QUERY);
	endif;
	$retorno = UploadImage();
	if ($retorno["Status"]=="Uploader") :
		$db->doQuery("INSERT INTO archivos (nombre, tipo, id_usuario) VALUES('".$retorno['NameFile']."', 'pdf', '".$_SESSION['id']."')", INSERT_QUERY);
	endif;
	echo "<script>window.location.href = 'index.php?seccion=zona-usuario&okcom'</script>";
else :
	echo "<script>window.location.href = 'index.php?seccion=index&conno'</script>";
endif;

function UploadImage() {
	$name_input_file = "file";
	$path = "files";
	if ($_FILES[$name_input_file]['name']) {
		$file_size = $_FILES[$name_input_file]['size'];
		$ext = strtolower(strrchr($_FILES[$name_input_file]['name'], '.'));
		$name = explode(".", str_replace(" ", "_", $_FILES[$name_input_file]['name']));
		$name = substr($name[0], 0, 12);
		//$limitedext = array(".pdf", ".doc", ".docx", ".xls", ".");
		//if (in_array($ext, $limitedext)) {
			$nombre_archivo = $name."user".$_SESSION['id'];
			if (is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
				// Nuevo nombre Imgaen
				$nombre = $nombre_archivo . $ext;
				move_uploaded_file($_FILES[$name_input_file]['tmp_name'], "$path/$nombre");
				@chmod("$path/$nombre", 0777);
				//generamos la Thumb de la imagen
				//Retorno array con los parametros basicos necesaros
				return array("Status" => "Uploader", "Mensaje" => "Se subio el Archivo " . $nombre, "Ext" => $ext, "NameOriginal" => $nombre_archivo, "NameFile" => $nombre, "SizeFile" => $_FILES[$name_input_file]['size'], "URL" => "$path/$nombre", "name" => $name);
			}
			else {
				return array("Status" => "Error", "Error" => "Problemas con la carpeta de upload del file");
			}
		//}
		//else {
			//return array("Status" => "Error", "Error" => "La extencion del archivo no es valida");
		//}
	}
	else {
		return array("Status" => "Error", "Error" => "No selected file");
	}
}