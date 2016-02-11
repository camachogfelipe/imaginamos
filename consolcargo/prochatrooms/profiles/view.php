<?php

/*
* include files
* 
*/

include("../includes/ini.php");
include("../includes/db.php");
include("../includes/functions.php");

/*
* get image details
* 
*/

list($type,$img) = showImage($_GET['id']);

/*
* show image
* 
*/

header("Content-Type: " . $type);
readfile("uploads/".$img);

?>