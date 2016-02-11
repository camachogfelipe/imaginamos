<?php

/**
 * Check $_GET variables for id and email
 */
$check = Post::GCheck(array("id","email"));

if($check)
{
	/**
	 * Return the history contents if variables are passed
	 */
	$messages = History::GetHistorySess($_GET['id'],$_GET['email']);
	include 'views/template/history.tpl';
}

?>