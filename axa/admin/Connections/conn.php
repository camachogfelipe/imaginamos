<?php

$hostname_conn = "localhost";
$database_conn = "nuevasca_axa";
$username_conn = "nuevasca_axa";
$password_conn = "k,3d,%Wn_HrQ";


$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_conn, $conn);
?>