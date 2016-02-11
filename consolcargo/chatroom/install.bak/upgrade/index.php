<?php
/********************************************************************************************
*
*  Software: Pro Chat Rooms
*  Developer: Pro Chat Rooms
*  Url: http://prochatrooms.com
*  Support: http://community.prochatrooms.com
* 
*  Pro Chat Rooms is NOT free software - For more details visit, http://www.prochatrooms.com
*  This software and all of its source code/files are protected by Copyright Laws. 
*  The software license permits you to install this software on one domain only. Additional
*  installations require additional licences (one software licence per installation).
*  Pro Chat Rooms is unable to provide support if this software is modified by the end user.
*
********************************************************************************************/

/*
* check for software licence
*
*/

if(!file_exists("../../software_licence.txt"))
{
	die("Please upload the <b>software_licence.txt</b> file");
}

/*
* include files
*
*/

include("../../includes/config.php");
include("../../includes/functions.php");

/*
* create database connection
*
*/

$db_error = '';
$db_check = '0';

if ($_POST && $_POST['i']=='2')
{
	$dsn = 'mysql:dbname='.$_POST['C_DATA'].';host='.$_POST['C_HOST'];
	$user = $_POST['C_USER'];
	$password = $_POST['C_PASS'];

	try {
		$db = new PDO($dsn, $user, $password);
		$db_check = '1';
		
	} catch (PDOException $e) {
		$db_error = 'Connection failed: ' . $e->getMessage();
		$db_check = '0';
	}	

	if(!$db_check)
	{
		$_POST['i'] = '1';
		$db_check = 'fail';
	}
	else
	{
		$a = '';
		
		$sFile = "../../includes/db.php";
		$fh = @fopen($sFile, 'w') or die("Error: Unable to open file 'includes/db.php'. You will need to CHMOD the file 'includes/db.php' to 777 for installation.");

		$str="<?php \n";
		$str.="$".$a."host='".$_POST['C_HOST']."';\n";
		$str.="$".$a."user='".$_POST['C_USER']."';\n";
		$str.="$".$a."pass='".$_POST['C_PASS']."';\n";;
		$str.="$".$a."dbname='".$_POST['C_DATA']."';\n";		
		$str.="?>";

		fwrite($fh, $str);
		fclose($fh);
	}

}

if ($_POST && $_POST['i']=='3')
{
	include("../../includes/db.php");
}

/*
* show html
*
*/

?>

<html>
<title>Pro Chat Rooms - Version <?php echo $CONFIG['version'];?> - Installation</title>
<head>
<link type="text/css" rel="stylesheet" href="../../templates/default/style.css">
<style>
.installTable
{
	border: 1px solid #999999;
	background-color: #666666;
	font-family: Arial, Verdana;
	font-size: 12px;
	font-style: normal;
	color: #FFFFFF;
}
</style>
</head>
<body class="body">

<div style="padding-top:20px;padding-bottom:20px;width:100%;text-align:center;font-family: Arial, Verdana;font-size: 14px;">
	<b>Pro Chat Rooms - Version <?php echo $CONFIG['version'];?> - Installation</b>
</div>

<!-- begin install -->

<?php if (!$_POST){?>

	<script language="JavaScript">
	<!--
	function formCheck(form) 
	{
		if (!(install_licence.licence.checked))
		{
			alert( "Please agree to the software licence. ");
			return false ;
		}
	}
	// -->
	</script>

	<br>

	<table width="100%" align="center">
	<tr>
	<td align=center>

		<table cellpadding="10" width="400" border=0 class="installTable">
		<tr><td align=center width="60">
		<img src="images/help.gif" align="absmiddle">
		</td><td>

		<form OnSubmit="return formCheck(this)" action="index.php" method="post" name="install_licence">
		<br>
		<br>
		<b>Welcome to the Pro Chat Rooms installation.</b>
		<br>
		<br>
		Pre-Install Check List
		<br>
		<br>
		PHP Version:&nbsp;
		<?php
		if (phpversion() < "5.1.0") {
			echo '<span style="color: #FF0000;font-weight: bold;">'.phpversion().'</span>';
			$php_ok = '0';
		}
		else
		{
			echo '<span style="color: #33FF00;font-weight: bold;">'.phpversion().'</span>';
			$php_ok = '1';
		}		
		?>
		<br>		
		PDO Drivers:&nbsp; 
		<?php
		if (!defined('PDO::ATTR_DRIVER_NAME')) {
			echo '<span style="color: #FF0000;font-weight: bold;">Not Detected</span>';
			$pdo_ok = '0';
		}
		else
		{
			echo '<span style="color: #33FF00;font-weight: bold;">Installed</span>';
			$pdo_ok = '1';
		}
		
		if(!$php_ok || !$pdo_ok)
		{
				echo '<br><br><span style="color: red;font-weight: bold;">WARNING!<br>Your web server does not meet the minimum requirements to install this software. Please contact your web hosts for further assistance.</span>';
		}
		?>
		<br>
		<br>
		To begin the installation, please confirm you have read and agree to the <a style="color:#FFFFFF;" href="http://prochatrooms.com/software_licence.php" target="_blank">software licence</a>.
		<br>
		<br>
		<input type="checkbox" name="licence" onClick="document.install_licence['submit'].disabled =(document.install_licence['submit'].disabled)? false : true">
		I have read and agree to the <a style="color:#FFFFFF;" href="http://prochatrooms.com/software_licence.php" target="_blank">software licence</a>.
		<br>
		<br>
		<input type="hidden" name="i" value="1">
		<input type="submit" id="submit" name="submitthis" value="Continue ..." class="user_buttons_large" disabled>
		</form>
		<br>
		<br>
		</td></tr>
		</table>

	</td>
	</tr>
	</table>

<?php }?>

<!-- install - step 1 -->

<?php if ($_POST && $_POST['i']=='1'){?>

	<script language="JavaScript">
	<!--
	function formCheck(form) 
	{
		if (install.C_HOST.value == "") {alert( "Please enter your MySQL host name. ");return false ;}
		if (install.C_USER.value == "") {alert( "Please enter your MySQL user name. ");return false ;}
		if (install.C_DATA.value == "") {alert( "Please enter your MySQL database name. ");return false ;}
	}
	// -->
	</script>

	<br>
	<table width="100%" align="center">
	<tr><td align=center>

		<table cellpadding="10" width="500" class="installTable">
		<tr><td align=center width="60">
		<img src="images/help.gif" align="absmiddle">
		</td><td>
		<br>
		<br>
		<b>MySQL Database Information</b>
		<br>
		<br>

		<form OnSubmit="return formCheck(this)" action="index.php" method="post" name="install">
		<input type="hidden" name="i" value="2">
		<table width="100%" align="center" style="font-family: Arial, Verdana;font-size: 12px;font-style: normal;color: #FFFFFF">

		<?php if($db_check == 'fail'){?>
				<tr><td colspan="2" style="color: red;"><?php echo $db_error;?></td></tr>
				<tr><td>&nbsp;</td></tr>
		<?php }?>

		<tr><td colspan="2">Enter your version 7.x.x chat room MySQL database connection details below. If you are unable to remember these details, you can find them in the file 'includes/db.php'.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>MySQL Host Name</td><td><input type="text" name="C_HOST" value=""></td></tr>
		<tr><td>MySQL Username</td><td><input type="text" name="C_USER" value=""></td></tr>
		<tr><td>MySQL Password</td><td><input type="text" name="C_PASS" value=""></td></tr>
		<tr><td>MySQL Database</td><td><input type="text" name="C_DATA" value=""></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Continue ..."></td></tr>
		</table>
		</form>

		<br>
		<br>
		</td></tr>
		</table>

	</td></tr></table>

<?php }?>

<!-- install - step 2 -->

<?php if ($_POST && $_POST['i']=='2'){?>

	<br>
	<table width="100%" align="center">
	<tr><td align=center>

		<table cellpadding="10" width="400" class="installTable">
		<tr><td align=center width="60">
		<img src="images/help.gif" align="absmiddle">
		</td><td align="center">
		<br>
		<br>
		<b>MySQL Information Saved</b>
		<br>
		<br>
		Click on the button below to install the MySQL tables and complete the installation.
		<br>
		<br>
		<form action="index.php" method="post" name="cont_4">
		<input type="hidden" name="i" value="3">
		<input type="submit" name="submit" value="Continue ... " class="user_buttons_large">
		</form>
		<br>
		<br>
		</td></tr>
		</table>

	</td></tr></table>

<?php }?>

<!-- install - step 3 -->

<?php if ($_POST && $_POST['i']=='3'){?>

	<br>
	<table width="100%" align="center"><tr><td align=center>
	<table cellpadding="10" width="500" class="installTable">
	<tr><td align=center width="60">
	<img src="images/help.gif" align="absmiddle">
	</td><td align="center">
	<table width=500 border=0 border=0 style="font-family: Arial, Verdana;font-size: 12px;font-style: normal;color:#FFFFFF">
	<tr><td><b>Congratulations, you have upgraded your Pro Chat Rooms version 7.x.x to version 8.0.0<br><br>Below is your MySQL Table Installation Report.</b><br><br></td></tr>
	<tr><td><b>Install Results</b></td></tr>
	<tr><td>

	<?php

	/*
	* Table structure for table `prochatrooms_group`
	*
	*/
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "ALTER TABLE `prochatrooms_group` 
				  ADD `groupShare` VARCHAR( 3 ) NOT NULL DEFAULT '0',
				  ADD `groupVideo` VARCHAR( 3 ) NOT NULL DEFAULT '0'";							
		$action = $dbh->prepare($query);
		$action->execute($params);

		echo "&#187; prochatrooms_group - <font color=\"#33FF00\"><b>UPDATED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_group - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	
	}	

	echo "</td></tr>";
	echo "<tr><td>";

	/*
	* Dumping data for table `prochatrooms_config`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "ALTER TABLE `prochatrooms_config`	
				  DROP `moderator`,
				  DROP `speaker`";							
		$action = $dbh->prepare($query);
		$action->execute($params);

		echo "&#187; prochatrooms_config - <font color=\"#33FF00\"><b>UPDATED<b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_config - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	echo "</td></tr>";
	echo "<tr><td>";

	/*
	* Dumping data for table `prochatrooms_config` (update admin login details)
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "UPDATE prochatrooms_config 
				  SET 
				  `adminLogin` = '25e4ee4e9229397b6b17776bfceaf8e7',
				  `admin` = 'admin',
				  `avatars` = 'couple.gif,female.gif,male.gif,pc.gif,phone.gif,' 
				  WHERE id=1";							
		$action = $dbh->prepare($query);
		$action->execute($params);

		echo "&#187; admin details reset - <font color=\"#33FF00\"><b>UPDATED<b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; admin details reset - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	?>

	</td></tr>	
	
	
	<tr><td>

	<?php

	/*
	* Table structure for table `prochatrooms_group`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "ALTER TABLE `prochatrooms_users` 
				  ADD `admin` VARCHAR( 3 ) NOT NULL DEFAULT '0',
				  ADD `moderator` VARCHAR( 3 ) NOT NULL DEFAULT '0',	
				  ADD `speaker` VARCHAR( 3 ) NOT NULL DEFAULT '0'";					  
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#187; prochatrooms_users - <font color=\"#33FF00\"><b>UPDATED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_users - <font color=\"#FF0000\"><b>FAIL</b></font>";	
		
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	echo "</td></tr>";
	echo "<tr><td>";
	?>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Important!</b></td></tr>
	<tr><td>
	If all tables have successfully installed, please delete the folder '<b>install</b>' and CHMOD the file 'includes/db.php' to 444. 
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Configuration &amp; Settings</b></td></tr>
	<tr><td>
	All settings have been reset in the file '<b>includes/config.php</b>' and must be reconfigured.<br>
	General settings have been reset in the <b>admin area</b> > <b>settings</b> option.<br> 	
	Any plugins will need to be reinstalled. See your plugins README.txt file for details.<br>
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Admin Area Login Details</b></td></tr>
	<tr><td>Username: admin</td></tr>
	<tr><td>Password: adminpass</td></tr>
	<tr><td>Login to the <a style="color: #FFFFFF" href="../../admin/" target="_blank">admin area</a>.</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Thank you for choosing Pro Chat Rooms software.</b></td></tr>
	</table>
	</td></tr></table>

	</td></tr></table>

<?php }?>

<br>
<div style="width:100%;text-align:center;font-family: Arial, Verdana;font-size: 12px;font-style: normal;color:#666666;">
	If you require support during the installation process, please <a style="color:#666666;" href="http://www.prochatrooms.com/contact.php" target="_blank">contact us</a>.
	<br>
	&copy;<?php echo date("Y");?> <a style="color:#666666;" href="http://www.prochatrooms.com/" target="_blank">Pro Chat Rooms</a> All Rights Reserved.
<div>

</body>
</html>