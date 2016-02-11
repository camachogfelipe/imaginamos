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

//Definicion datos facebook
define('FACEBOOK_PAGE_ID', '249218745162838');
define('FACEBOOK_ID', '483846224979285');
define('FACEBOOK_KEY', '49fe85f6693a1ba4a0380d19637e1417');
define('FACEBOOK_URL', 'http://apps.facebook.com/value_of_values/');
define('FACEBOOK_SCOPE', 'email,offline_access,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown');

// Define la llave de encriptacion para la clase de seguridad
define('KEY_DEFAULT_SECURITY', 'R@ub3nsHot');
?>