<?php

$perms = new Permission();

if(!$perms->IsAllowed('banned')) Exceptions::PrintOut ("You do not have access to the Banned area");

/**
 * Check for $_GET variable "id"
 */
$delcheck = Post::GCheck(array("id"));

/**
 * If variable is set, delete the user and return to page
 */
if($delcheck)
{
	UserBan::BanDelete($_GET['id']);
	
	header("Location: index.php?page=UserBan");
}

?>