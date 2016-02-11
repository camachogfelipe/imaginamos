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
if($id_check && $_GET['id'] != 1)
{
	
	$id = $_GET['id'];
	
	$post_check = Post::Check(array(
	"title",
	"users",
	"banned",
	"history"
	));
	
	if($post_check)
	{
		$edit = new UsersAndGroups();
		$result = $edit->GroupEditor($_POST['title'], $id, array($_POST['users'], $_POST['banned'], $_POST['history']));
		
		if(!$result)
		{
			$error = $edit->error;
		}
	}
	
	$group = UsersAndGroups::GetGroup($id);
	
	include 'views/template/groupedit.html';
	
	
} else {
	
	/*
	 * End with message
	 */
	Exceptions::PrintOut("You cannot edit the Administrators group");
	
}
?>