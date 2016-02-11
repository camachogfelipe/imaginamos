<?php
/**
 * Start logout class
 */
$logout = new Logout('login');
/**
 * Reset the login
 */
$logout->Flush();

/**
 * Redirect to index.php which will then redirect to login form.
 */
header("Location: index.php");

?>