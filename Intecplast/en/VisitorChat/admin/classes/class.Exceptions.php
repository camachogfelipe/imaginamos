<?php
/* 
 * Print out exception details and stop the software
 */
class Exceptions
{
    public static function PrintOut($e)
    {
		$_error = $e;
		include 'views/template/error.html';
		die();
    }
}


?>