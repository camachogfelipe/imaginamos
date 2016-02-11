<?php 

$perms = new Permission();

if(!$perms->IsAllowed('banned')) Exceptions::PrintOut ("You do not have access to the Banned area");

/**
 * List banned users
 */
$ban = UserBan::ListBanned();

include 'views/template/banned.html';

?>