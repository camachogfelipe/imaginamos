<?php

$fields = array(
              "username",
              "password"
          );

/**
 * Check the $_POST for fields "username" and "password"
 */
$checkfields = Post::Check($fields);
$post = $_POST;
/**
 * Start login class
 */
$login = new Login();
/**
 * Set the name of the cookie that will hold remember status
 */
$login->SetCookieName('login');

/**
 * Continue if $checkfield are passed
 */
if($checkfields)
{
	/**
	 * If remember hidden field is set, fill the remember variable with 1
	 */
    $remember = isset($post['remember']) ? $post['remember'] : "";

	/**
	 * Set the passed credentials to function
	 */
    $login->SetCredentials(
        $post['username'],
        $post['password'],
        $remember
        );
    
	/**
	 * Check if login succeded
	 */
    $login->CheckLogin();

	/**
	 * We can redirect the user if he landed the page with "ref" variable.
	 */
    if(isset($_GET['ref']) && !empty($_GET['ref'])) Redirect::Go($_GET['ref']);
	
	/**
	 * If no "ref" variable has been passed just redirect the user to index.php
	 */
	if($login->success) Redirect::Go("index.php");
	
}

include 'views/template/login.html';
?>