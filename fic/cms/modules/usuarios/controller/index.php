<?php
 include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		if ($_GET['id']=='1'){
			
			if ($_POST[nombre]=='' or $_POST[apellido]=='' or $_POST[email]=='' or $_POST[telefono]=='' or $_POST[pais]=='' or $_POST[ciudad]==''or $_POST[contrasena]==''or $_POST[subtitulo]==''or $_POST[descripcion2]==''){
				
				header('Location: ../view/index.php?error');
				}else{
			
		$query = "INSERT INTO t_usuarios (id_usuario,nombre,apellido,email,telefono,pais,ciudad,contrasena,subtitulo,descripcion,carpeta_archivos,estado) VALUES ('','".$_POST[nombre]."','".$_POST[apellido]."','".$_POST[email]."','".$_POST[telefono]."','".$_POST[pais]."','".$_POST[ciudad]."','".$_POST[contrasena]."','".$_POST[subtitulo]."','".$_POST[descripcion2]."','".$_POST[carpeta_archivos]."','".$_POST[estado]."')";
		$db->doQuery($query,INSERT_QUERY);
		header('Location: ../view/index.php');
				}
		}else if ($_GET['id']=='2'){
			
		$query = "UPDATE t_usuarios SET nombre = '".$_POST[nombre]."', apellido = '".$_POST[apellido]."', email = '".$_POST[email]."', telefono = '".$_POST[telefono]."', pais = '".$_POST[pais]."', ciudad = '".$_POST[ciudad]."', contrasena = '".$_POST[contrasena]."', subtitulo = '".$_POST[subtitulo]."', descripcion = '".$_POST[descripcion2]."', carpeta_archivos = '".$_POST[carpeta_archivos]."', estado = '".$_POST[estado]."' WHERE id_usuario ='".$_POST[id_usuario]."'";
		$db->doQuery($query,INSERT_QUERY);
		header('Location: ../view/edit.php?id='.$_POST[id_usuario].'&funcionality=2');
				
		}
		?>