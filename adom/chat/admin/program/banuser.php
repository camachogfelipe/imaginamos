<?php

$perms = new Permission();

if(!$perms->IsAllowed('banned')) Exceptions::PrintOut ("You do not have access to the Banned area");

/**
 * Check if $_POST variable user has been set and ban the user.
 */
$check = Post::Check(array("user"));

if($check)
{
	UserBan::BanUser($_POST['user']);
}


?>