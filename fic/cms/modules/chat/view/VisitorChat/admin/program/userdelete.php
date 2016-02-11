<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");

/**
 * Check if $_GET variable id has been set
 */
if(isset($_GET['id']) && !empty($_GET['id']))
{
	/**
	 * If id equals 1, print out error. We cannot delete the administrator
	 * account.
	 */
	if($_GET['id'] == 1)
	{
		Exceptions::PrintOut("You cannot delete the Administrator account");

	} else {
		
		/**
		 * If id is not equal 1, delete the user.
		 */
		$delete = UsersAndGroups::UserDelete($_GET['id']);
	}
	
	/**
	 * Return on user and groups page if delete is successfull
	 * output an error otherwise.
	 */
	if($delete) {
		header("Location: index.php?page=users_and_groups");
	} else {
		Exceptions::PrintOut("There is a problem with deleting the user. Either no id has been passed or id does not exists in database");
	}
	
	
}

?>