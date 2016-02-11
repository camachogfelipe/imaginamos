<?php

/**
 * Check if user is banned. Returns integer 1 if banned, 0 otherwise
 */
$banned = UserBan::IsBanned($_SERVER['REMOTE_ADDR']);

/**
 * If $banned returns 1, die with message output
 */
if($banned) die($_['BANNED']);

/**
 * If the user passes steps before successfully, continue and check if the user
 * has posted a message.
 */
if(isset($_POST['msg']))
{
	/**
	 * If message is posted, start an AddMsg class and pass the post variable.
	 * Class AddMsg inserts the message in the database.
	 */
    $html = isset($_GET['html']) && $_GET['html'] == 1 ? true : false;
    $post = new AddMsg($_POST['msg'],$html);
}

/**
 * Start the Messaging class for operation with functions available.
 */
$msg = new Messaging();

/**
 * Here we delete all messages in the database that are older than 520 minutes.
 * With this we ensure, that messages are not hold to long in the database,
 * because larger databases are slower and consume more system resources.
 */
$msg->DeleteOld(520);

/**
 * Get all current user messages between the user and administrator
 */
$messages = $msg->GetMsgs();

/**
 * Load the current registered user id from session to variable
 */
$current_user = $_SESSION['visitor_chat_user'];

/**
 * Output the view template file
 */
include 'views/template/messages.tpl';

?>