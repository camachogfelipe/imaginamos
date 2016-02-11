<?php
/****************************************************************************************
* LiveZilla functions.index.inc.php
* 
* Copyright 2013 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
***************************************************************************************/ 

if(!defined("IN_LIVEZILLA"))
	die();

function getFolderPermissions()
{
	global $CONFIG;
	$message = "";
	
	$directories = Array(PATH_UPLOADS,PATH_IMAGES,PATH_CONFIG,PATH_LOG,PATH_STATS,PATH_STATS."day/",PATH_STATS."month/",PATH_STATS."year/");
	foreach($directories as $key => $dir)
	{
		$result = testDirectory($dir);
			if(!$result)
				$message .= "Insufficient Write Access" . " (" . $dir . ")<br>";
	}
	if(!empty($message))
		$message = "<span class=\"lz_index_error_cat\">Write Access:<br></span> <span class=\"lz_index_red\">" . $message . "</span><a href=\"".CONFIG_LIVEZILLA_FAQ."en/?fid=changepermissions#changepermissions\" class=\"lz_index_helplink\" target=\"_blank\">Learn how to fix this problem</a>";
	return $message;
}

function getMySQL($error="")
{
	global $CONFIG;

	if(!empty($CONFIG["gl_db_host"]))
	{
		require(LIVEZILLA_PATH . "_lib/functions.internal.man.inc.php");
		$error = testDataBase($CONFIG["gl_db_host"],$CONFIG["gl_db_user"],$CONFIG["gl_db_pass"],$CONFIG["gl_db_name"],$CONFIG["gl_db_prefix"],true);
	}

	if(!function_exists("mysql_real_escape_string"))
		$error = "MySQL or the MySQL PHP extension is missing on this server.";
	
	if(empty($error))
		return null;
	else 
		return "<span class=\"lz_index_error_cat\">MySQL:<br></span><span class=\"lz_index_red\">" . $error ."</span>";
}

function getPhpVersion()
{
	$message = null;
	if(!checkPhpVersion(PHP_NEEDED_MAJOR,PHP_NEEDED_MINOR,PHP_NEEDED_BUILD))
		$message = "<span class=\"lz_index_error_cat\">PHP-Version:<br></span> <span class=\"lz_index_red\">" . str_replace("<!--version-->",PHP_NEEDED_MAJOR . "." . PHP_NEEDED_MINOR . "." . PHP_NEEDED_BUILD,"LiveZilla requires <!--version--> or greater.<br>Installed version is " . @phpversion()) . ".</span>";
	return $message;
}

function getDisabledFunctions()
{
	global $LZLANG;
	$message = null;
	if(!function_exists("file_get_contents"))
		$message .= "<span class=\"lz_index_error_cat\">Disabled function: file_get_contents<br></span> <span class=\"lz_index_red\">LiveZilla requires the PHP function file_get_contents which seems to be disabled.</span><br><br>";
	if(!function_exists("fsockopen"))
		$message .= "<span class=\"lz_index_error_cat\">Disabled function: fsockopen<br></span> <span class=\"lz_index_red\">LiveZilla requires the PHP function fsockopen which seems to be disabled.</span><br><br>";
	if(@get_magic_quotes_gpc() == 1 || strtolower(@get_magic_quotes_gpc()) == "on")
		$message .= "<span class=\"lz_index_error_cat\">PHP Magic Quotes:<br></span> <span class=\"lz_index_red\">This PHP feature has been DEPRECATED and is not supported by LiveZilla anymore. Relying on this feature is highly discouraged. Please <a class=\"lz_index_helplink\" href=\"http://www.php.net/manual/en/security.magicquotes.disabling.php\">deactivate (click me)</a> it on system level.<br><br>If you don't know how to do this, please get in touch with your webhosting company.</span><br><br>";
	if(TRANSLATION_STRING_COUNT != count($LZLANG) && TRANSLATION_STRING_COUNT != (count($LZLANG)+10))
		$message .= "<span class=\"lz_index_error_cat\">Outdated translation:<br></span> <span class=\"lz_index_red\">One or more translation strings are missing.</span><br><a href=\"".CONFIG_LIVEZILLA_FAQ."en/?fid=update-localization-files-manually#update-localization-files-manually\" class=\"lz_index_helplink\" target=\"_blank\">Learn how to fix this problem</a>";
	return $message;
}
?>
