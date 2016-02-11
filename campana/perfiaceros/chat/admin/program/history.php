<?php

$perms = new Permission();

if(!$perms->IsAllowed('history')) Exceptions::PrintOut ("You do not have access to the History");

/**
 * Check $_POST variables for "search"
 */
$post_check = Post::Check(array("search"));

if($post_check)
{
	/**
	 * If variable is passed, search for the historic messages with passed variable
	 */
	$historic = History::SearchHistory($_POST['search']);
	
} else {
	
	/**
	 * Else output the default historic messages
	 */
	$historic = History::ListHistory();
	
}


include 'views/template/history.html';

?>