<?php
	date_default_timezone_set('America/Bogota');
	
	// Parametros de conexion a la base de datos
	define("HELP_DESK_SERVER","localhost");
	define("HELP_DESK_USER","root");
	define("HELP_DESK_PASS","camachitos");
	define("HELP_DESK_DATABASE","img_chat");
	
	// Constantes de conexion a la base de datos
	define("HELP_DESK_LINK",mysql_pconnect(HELP_DESK_SERVER,HELP_DESK_USER,HELP_DESK_PASS));
	define("HELP_DESK_DB_SELECTED",mysql_select_db(HELP_DESK_DATABASE,HELP_DESK_LINK)); 

	// Super usuarios
	define("HELP_DESK_ADMIN","administrador@dominio.com");
	define("HELP_DESK_MODER","moderador@dominio.com");

	// Parametros comunes
	define("HELP_DESK_THEME",2);
	define("REGISTROS_POR_PAGINA",11);
	define("INTERVALO_CALL_SERVER",1220);
?>