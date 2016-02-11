<?php

/*
 * @file               : Config.php
 * @brief              : Archivo de configuracion general del sitio
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes Torres
 */
date_default_timezone_set('America/Bogota');

define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

// Puerto por defecto del servidor HTTP
define('HTTP_SERVER_PORT', '80');

// Directorio donde se encuentra la aplicacion
define('VIRTUAL_LOCATION', '/metalcut');

// VARIABLES DE LA BASE DE DATOS
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'camachitos');
define('DB_DATABASE', 'img_metalcut');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Utilizar SSL si o no
define('USE_SSL', 'no');

// VARIABLES DE DESARROLLO
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// TIPOS DE ERRORES QUE SE REPORTARAN
define('ERROR_TYPES', E_ALL);

// ENVIAR UN EMAIL CON EL REPORTE DE ERRORES AL ADMIN
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'dayron.garzon@imaginamos.com.co');
define('SENDMAIL_FROM', 'dayron.garzon@imaginamos.com.co');
ini_set('sendmail_from', SENDMAIL_FROM);

// CONFIGURACCION DE LOGS DE ERROR
define('LOG_ERRORS', false);
//define('LOG_ERRORS_FILE', 'c:\\xamppt\\htdocs\\e-commerce\\errors_log.txt'); // Windows
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Se ha generado un error!</h1>');
?>