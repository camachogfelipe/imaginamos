<?php

$perms = new Permission();

if(!$perms->IsAllowed('history')) Exceptions::PrintOut ("You do not have access to the History");


/**
 * Check $_GET for "sess" and "email"
 */
$check = Post::GCheck(array("sess","email"));

if($check)
{
	/**
	 * If passed, we delete the specific historic messages
	 */
	$delete = History::DeleteConv($_GET['sess'],$_GET['email']);	
	
	if($delete) {
		/**
		 * Delete success, return to history page
		 */
		header("Location: index.php?page=history");
	} else {
		/**
		 * Print out the error
		 */
		Exceptions::PrintOut("There is a problem deleting the historic conversation. Either no id has been passed or id does not exists in database");

	}
	
	
}

?>