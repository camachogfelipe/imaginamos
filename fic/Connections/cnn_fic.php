<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnn_fic = "localhost";
$database_cnn_fic = "usuariosbc_fic";
$username_cnn_fic = "usuariosbc";
$password_cnn_fic = "p&86XoI/P4Ea";
$cnn_fic = mysql_pconnect($hostname_cnn_fic, $username_cnn_fic, $password_cnn_fic) or trigger_error(mysql_error(),E_USER_ERROR); 
?>