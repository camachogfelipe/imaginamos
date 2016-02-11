<?php

/*
 * @file               : Config.php
 * @brief              : Archivo de configuracion variables del entorno
 */

// Directorio Principal
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');

// Directorio de Configuraciones generales.
define('DIRCONF', SITE_ROOT.'config/');

// DIRECTORIO DE APLICACIONES
define('PRESENTATION_DIR', SITE_ROOT.'presentation/');
define('BUSINESS_DIR', SITE_ROOT.'business/');

// CONFIGURACION PARA EL SMARTY
define('SMARTY_DIR', SITE_ROOT.'libs/smarty/');

//Directorio de Clases generales del CMS.
define('CLASSX', BUSINESS_DIR.'class/');

//Directorio de Funciones para manejo de base de datos del CMS.
define('DBMODEL', SITE_ROOT.'cms/business/model/');

// Define la llave de encriptacion para la clase de seguridad
define('KEY_DEFAULT_SECURITY', '1m4g1n4m0s');

// Define el directorio de archivos alojados en la aplicacion
define( 'FILES_DIR', SITE_ROOT.'cms/files/' );

// Define los datos de pagos online
define( 'PO_KEY', '12de7361f07' );
define( 'PO_USER', '67819' );

define( 'recap_pubkey', '6Ldma-gSAAAAACFjxPlY7gFfslCh9qbXR2bn747t' );
define( 'recap_prikey', '6Ldma-gSAAAAAMsL90s9fGz3Z3rIfI1nashIv7aG' );

?>