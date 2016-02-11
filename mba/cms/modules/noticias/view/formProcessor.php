<?php
echo "The form has been send!<br />";
echo "Name: " . $_POST["name"];
echo "<br />Surname: " . $_POST["surname"];
if(count($_POST["IMUFiles"]))
{
	echo "<br />Uploaded files: ";
	for($i=0; $i<count($_POST["IMUFiles"]); $i++)
		echo "<br />" . $_POST["IMUFiles"][$i];
}
?>