<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");

/**
 * Check if $_GET variables for id are set
 */
if(isset($_GET['id']) && !empty($_GET['id']))
{
	/**
	 * If variable id equals 1. stop the execution and print out error.
	 * We cannot delete the administrator group. It is a superuser group and must
	 * remain safe at all times.
	 */
	if($_GET['id'] == 1)
	{
		/**
		 * Print out the error
		 */
		Exceptions::PrintOut("You cannot delete the Administrator Group");
		
	} else {
		
		/**
		 * If id is not equal to 1, continue to group delete function
		 */
		$delete = UsersAndGroups::GroupDelete($_GET['id']);
	}
	
	/**
	 * If delete is successful, retun the user to back page
	 */
	if($delete) {
		header("Location: index.php?page=users_and_groups");
	} else {
		
		/**
		 * If the group delete failed for some reason, output this as an error
		 */
		Exceptions::PrintOut("There is a problem with deleting your group. Either no id has been passed or id does not exists in database");
	}
	
	
}

?>