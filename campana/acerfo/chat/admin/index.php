<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); 

session_start();

/*
* Load main configuration file
*/

include '../config.php';
include '../language.php';

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
     * Login handler.
     *
	 */
    if(empty($_SESSION['userid']))
    {
        $cookie_check = new LogedIn("login", "username", "hash");
        $cookie_check->Check();

        $loged_in = !empty($_SESSION['userid']) ? true : false;
        
    } else {
        $loged_in = !empty($_SESSION['userid']) ? true : false;
    }
	
	/**
	 * Check if install folder still exists
	 */
	 $install_folder = file_exists('../install') ? true : false;


    /*
     * Main handler controller. We send request uri to controller,
     * uri is then searched for. If uri is found,
     * Proper handler file is loaded.
     */
    $page = isset($_GET['page']) ? $_GET['page'] : "";
	$page = $loged_in ? $page : "login";
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