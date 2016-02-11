<?php

/*
 * @file               : Config.php
 * @brief              : Archivo de configuracion variables del entorno
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes Torres
 */

// Directorio Principal
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');

// Directorio de Configuraciones generales.
define('DIRCONF', SITE_ROOT . 'config/');

// DIRECTORIO DE APLICACIONES
define('PRESENTATION_DIR', SITE_ROOT . 'presentation/');
define('BUSINESS_DIR', SITE_ROOT . 'business/');

// CONFIGURACION PARA EL SMARTY
define('SMARTY_DIR', SITE_ROOT . 'libs/smarty/');

//Directorio de Clases generales del CMS.
define('CLASSX', BUSINESS_DIR . 'class/');

//Directorio de Funciones para manejo de base de datos del CMS.
define('DBMODEL', BUSINESS_DIR . 'model/');

// Define la llave de encriptacion para la clase de seguridad
define('KEY_DEFAULT_SECURITY', 'R@ub3nsHot');
?>