<?php

/**
 * Check the $_POST variables: "msg" and "to"
 */
$post_check = Post::Check(array("msg", "to"));

if($post_check)
{
	/**
	 * If variables are passed we set the $html variable. This defines
	 * if html is allowed or not. We don't allow html for messages, but
	 * we will have to allow it when administrator sends a file to the user.
	 */
	$html = isset($_GET['html']) && $_GET['html'] == 1 ? true : false;
	
	if($_POST['to'] > 0) {
		
		/**
		 * Add message if there is someone to pass it
		 */
    	$post = new AddMsg($_POST['msg'], $_POST['to'], $html);
	
	}

}

/**
 * Start Messaging class
 */
$msg = new Messaging();
/**
 * Delete all messages older that 520 minutes. This can be adjusted, but must
 * be adjusted in the client area as well, because all the users trigger this
 * function.
 */
$msg->DeleteOld(520);

/**
 * Get the message by the users respectivly
 */
$to_user = isset($_GET['to']) ? $_GET['to'] : $_POST['to'];
$messages = $msg->GetMsgs($to_user);

include 'views/template/messages.tpl';



?>