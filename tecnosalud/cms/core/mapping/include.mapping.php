<?php
session_start();
include("cms/core/class/db.class.php");
include("cms/core/mapping/functions.mapping.php");
include("cms/core/mapping/mapping.class.php");
//Creamos objeto database
$db = new Database();
//Conectamos
$db->connect();
/////////////////////////////////////////////////
	//Tabla de consulta, definimos tantas tablas como necesitemos separadas con coma (,)
	$table = "cms_configuration,cms_user,cms_news";
	//$table = "cms_user";
	/////////////////////////////////////////////////
  	//Construimos el nuevmo Mapping
	$constructor = new CMS_mapping($table,$db);
	/////////////////////////////////////////////////
	//Realizamos el query necesario
	//Si no es realmente necesario recomiendo NO usar * en el query sino solamente los campos que realmente necesitamos convertir en propiedades del objeto CMS_mapping
	
	$db->doQuery("SELECT * FROM $table ORDER BY id_user DESC, news_id DESC", SELECT_QUERY);
		
	$results = $db->results;
	$obj = $constructor->mapping($results);
	/////////////////////////////////////////////////
	
	//Creamos las variables que sean necesarias para imprimirlas en el FRONT
	////////////////////////////////////
	//CONFIGURACION DEL CMS
	$path = $obj->config_path[0];
	$rss = $obj->config_rss[0];
	$web = $obj->config_web[0];
	
	//NOTICIAS
	$title = $obj->news_title[0];
	$article = shortText($obj->news_article[0],196);
	
	//USUARIO
	$user = $obj->username_user[0];
	/////////////////////////////////////////////////
	//Desconectamos de la DB
	$db->disconnect();
		
	/////////////////////////////////////////////////
	//Funcion para listar todos los usuarios
	function selectAllUsers()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_user", $db);
		$db->doQuery("SELECT * FROM cms_user ORDER BY id_user DESC", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		for($i=0;$i<count($obj->id_user);$i++)
		echo "Usuario: ".$obj->username_user[$i]." Ciudad: ".$obj->password_user[$i]."<br>";
		$db->disconnect();
		}
	/////////////////////////////////////////////////
	/////////////////////////////////////////////////
	
  	/////////////////////////////////////////////////
	//Funcion para crear lista desplegable de nombres de imagenes
	function selectsOptionImagesNames()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_gallery_pics", $db);
		$db->doQuery("SELECT * FROM cms_gallery_pics", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		for($i=0;$i<count($obj->filename);$i++)
		echo "<option>".$obj->filename[$i]."</option>";
		$db->disconnect();
		}
	/////////////////////////////////////////////////
	/////////////////////////////////////////////////
?>