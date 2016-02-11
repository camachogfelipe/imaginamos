<?php
/**
 * Set up error reporting
 */
error_reporting(E_ALL);
ini_set("display_errors", 1); 

/**
 * Start the session
 */
session_start();

/**
 * Load main configuration file and language file
 */

include 'config.php';
include 'language.php';

/*
 * Function auto loads any classes used in this software.
 * Classes must be located in /classes folder
 */
function __autoload($class) {
	
	global $_;

    try {
        if(file_exists('classes/class.'.$class.'.php'))
        {
            require 'classes/class.'.$class . '.php';
        }
        else
        {
        	$error = sprintf($_['e_class'], 'classes/class.'.$class.'.php');
            throw new Exception($error);
        }
    } catch(Exception $e)
    {
        die($e->getMessage());
    }
}


try {
	
    /*
     * Load global db connector for usage across website
     */
    $db_connect = DB::PsqlConnect();

    /*
     * Main handler controller. We send request uri to controller,
     * uri is then searched for. If uri is found,
     * Proper handler file is loaded.
     */
    $page = isset($_GET['page']) ? $_GET['page'] : "";
    $include = new Controller($page);
    
    include($include->GetHandler());
    /*
     * Close main database connection with sql server. 
     */
    DB::Close();
    
    
} catch(Exception $e)
{
    /*
     * Serious error callout. If main loaders fail, website must
     * stop instantly. Error is printed out to the user.
     */
    die($e->getMessage());
}


?>