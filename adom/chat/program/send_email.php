<?php

/**
 * Check post objects
 */
$post_check = Post::Check(
	array(
		"msg",
		"name",
		"email"
	)
);

/**
 * If post objects are set and not empty, continue to post email
 */
if($post_check)
{
	try {

		/**
		 * Start Email class and try to send the email
		 */
		$email = new Email();
		$email->MailFrom($_POST['email']);
		$email->MailTo($_['MAIL_FROM']);
		$email->Subject($_['MAIL_SUBJECT']);
		$email->Content($_POST['msg']);
		$email->SendMail();
		
		/**
		 * Build an array on success
		 */
		$success = array("msg"=>$_['EMAIL_SENT'],"response"=>1);
		
		/**
		 * Pass it to javascript with json
		 */
		echo json_encode($success);
		
	} catch(Exception $e)
	{
		/**
		 * Email sending failed, prepare an array for error
		 */
		$success = array("msg"=>$_['EMAIL_ERROR'],"response"=>0);
		
		/**
		 * Output the error to json
		 */
		echo json_encode($success);
	}
	
	
}
	
	
?>