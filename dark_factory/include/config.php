<?php
date_default_timezone_set('America/Bogota');

define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

// Puerto por defecto del servidor HTTP
define('HTTP_SERVER_PORT', '80');

// Directorio donde se encuentra la aplicacion
define('VIRTUAL_LOCATION', '/HF/DF_prog');

// VARIABLES DE LA BASE DE DATOS
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'usuariohf');
define('DB_PASSWORD', 'FRaNJ172ZC9X');
define('DB_DATABASE', 'usuariohf_dark_factory');
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
define('ADMIN_ERROR_MAIL', 'hector.fernandez@imaginamos.co');
define('SENDMAIL_FROM', 'hector.fernandez@imaginamos.co');
ini_set('sendmail_from', SENDMAIL_FROM);

// CONFIGURACCION DE LOGS DE ERROR
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', 'c:\\xamppt\\htdocs\\e-commerce\\errors_log.txt'); // Windows
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Se ha generado un error!</h1>');
?>