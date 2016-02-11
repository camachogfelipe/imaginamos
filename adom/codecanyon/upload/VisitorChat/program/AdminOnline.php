<?php
/**
 * Check if the user is banned
 */
$banned = UserBan::IsBanned($_SERVER['REMOTE_ADDR']);

/**
 * If the user is banned, stop the execution of the website
 * and output the banned signals over json
 */
if($banned) die(json_encode(array("msg"=>$_['BANNED'], "response"=>0, "registered"=>0)));

/**
 * Start the UserOnline class
 */
$online = new UserOnline();

/**
 * Check if admin is online or not
 */
$admin_online = $online->AdminOnline();

/**
 * If the current guest has allready registered, we output 1, 0 otherwise
 */
$registered_user = isset($_SESSION['visitor_chat_user']) ? 1 : 0;


/**
 * Pass the admin online return signals to json and to browser
 */
echo ($admin_online >= 1) ? json_encode(array("msg"=>$_['ADMIN_ONLINE'], "response"=>1, "registered"=>$registered_user)) : json_encode(array("msg"=>$_['ADMIN_OFFLINE'], "response"=>0,"registered"=>$registered_user));

?>