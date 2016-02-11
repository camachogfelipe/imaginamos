<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");


/**
 * Check if $_GET['id] is set and is greater than 0
 */
$id_check = Post::GCheck(array('id'));


/*
 * If id is ok and we are not editing administrators group proceed with operation
 */
if($id_check)
{
	
	$id = $_GET['id'];
	
	$post_check = Post::Check(array(
	"username",
	"group"
	)
	);

	if($post_check)
	{

		$edit = new UsersAndGroups();
		$result = $edit->UserEditor($id, $_POST['password'], $_POST['password2'], $_POST['group']);
		
		if(!$result)
		{
			$error = $edit->error;
		}
	}
	
	$user = UsersAndGroups::GetUser($id);
	
	/**
	 * List groups to select element
	 */
	$groups = UsersAndGroups::ListGroups();	
	include 'views/template/useredit.html';
	
	
} else {
	
	/*
	 * End with message
	 */
	Exceptions::PrintOut("You cannot edit the Administrator Super User Account.");
	
}
?>