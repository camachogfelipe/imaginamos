<?php

/**
 * Check if the current user ip is banned
 */
$banned = UserBan::IsBanned($_SERVER['REMOTE_ADDR']);

/**
 * Output 0 if banned, alowing javascript to operate with this value
 */
if($banned) die("0");

/**
 * Load static function from class Messaging and return 1 if there are new messages
 * awaiting the current user or not.
 */
$time = Messaging::GetNewMsg();

/**
 * Outputs 0 or 1 to the browser for javascript operation
 */
echo $time->c;

?>