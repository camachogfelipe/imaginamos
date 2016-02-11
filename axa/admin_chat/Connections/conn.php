<?php

$hostname_conn = "mysql51-006.wc2.dfw1.stabletransit.com";
$database_conn = "533638_axa";
$username_conn = "533638_axa";
$password_conn = "IMAGINA@axa205";


$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_conn, $conn);
?>