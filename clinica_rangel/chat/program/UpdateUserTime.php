<?php
/**
 * Check if current user is banner
 */
$banned = UserBan::IsBanned($_SERVER['REMOTE_ADDR']);

/**
 * Die if user is banned. No output is necessary here.
 */
if($banned) die();

/**
 * Check if $_GET variables are set. We need them for the user
 * to register the first time.
 */
$get_check = Post::GCheck(array('name','email'));

if($get_check)
{
	/**
	 * If variables are set, register new user with passed variables
	 */
	$usercheck = new RegisterUser($_GET['name'], $_GET['email']);

} else {
	
	/**
	 * No variables have been passed, so we assume that user is allready registered
	 * The script will just update the user in the database
	 */
	$usercheck = new RegisterUser();
}

?>
