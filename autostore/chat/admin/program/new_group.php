<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");

/**
 * Check if post names are set
 */
$post_check = Post::Check(
array(
	"title",
	"users",
	"banned",
	"history"
	)
);



/**
 * If post names are all set, try to insert the group
 */
if($post_check)
{
	$new_user = new UsersAndGroups();
	$result = $new_user->NewGroup($_POST['title'], array($_POST['users'], $_POST['banned'], $_POST['history']));

	/*
	 * If result is not true, output the error variable
	 */
	if(!$result)
	{
		$error = $new_user->error;
	}
	
}


/**
 * Include view template file
 */
include 'views/template/new_group.html';

?>