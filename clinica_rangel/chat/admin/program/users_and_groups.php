<?php

$perms = new Permission();

if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");


/**
 * List grous and users and pass the arrays to view template
 */
$groups = UsersAndGroups::ListGroups();
$users = UsersAndGroups::ListUsers();

include 'views/template/users_and_groups.html';

?>