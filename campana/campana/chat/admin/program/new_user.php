<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");


/**
 * Check if post names are set
 */
$post_check = Post::Check(
array(
	"username",
	"password",
	"password2",
	"group"
	)
);



/**
 * If post names are all set, try to insert the user
 */
if($post_check)
{

	$new_user = new UsersAndGroups();
	$result = $new_user->NewUser($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['group']);

	/*
	 * If result is not true, output the error variable
	 */
	if(!$result)
	{
		$error = $new_user->error;
	}
	
}

/**
 * List groups to select element
 */
$groups = UsersAndGroups::ListGroups();


/**
 * Include view template file
 */
include 'views/template/new_user.html';

?>