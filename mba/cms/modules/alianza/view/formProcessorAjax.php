<?php
$message = "";
$message .= "The form has been sent!<br />";
$message .= "Name: " . $_POST["name"];
$message .= "<br />Surname: " . $_POST["surname"];
if(count($_POST["IMUFiles"]))
{
	$message .= "<br />Uploaded files: ";
	for($i=0; $i<count($_POST["IMUFiles"]); $i++)
		$message .= "<br />" . $_POST["IMUFiles"][$i];
}
echo $message;
?>