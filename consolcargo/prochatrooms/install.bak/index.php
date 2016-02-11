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

if(!file_exists("../software_licence.txt"))
{
	die("Please upload the <b>software_licence.txt</b> file");
}

/*
* include files
*
*/

include("../includes/config.php");
include("../includes/functions.php");

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
		
		$sFile = "../includes/db.php";
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
	include("../includes/db.php");
}

/*
* show html
*
*/

?>

<html>
<title>Pro Chat Rooms - Version <?php echo $CONFIG['version'];?> - Installation</title>
<head>
<link type="text/css" rel="stylesheet" href="../templates/default/style.css">
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

		<tr><td colspan="2">Enter your MySQL database connection details below. If you are not sure what this means, contact your web hosting provider who will be able to provide you with the correct information.</td></tr>
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
	<tr><td><b>Congratulations, you have completed the Pro Chat Rooms installation.<br><br>Below is your MySQL Table Installation Report.</b><br><br></td></tr>
	<tr><td><b>Install Results</b></td></tr>
	<tr><td>

	<?php

	/*
	* Table structure for table `prochatrooms_config`
	*
	*/
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_config` (
																	`id` int(11) NOT NULL AUTO_INCREMENT,
																	`adminLogin` varchar(32) NOT NULL DEFAULT '',
																	`modLogin` varchar(32) NOT NULL DEFAULT '',
																	`avatars` text NOT NULL DEFAULT '',
																	`badwords` text NOT NULL DEFAULT '',
																	`font_color` text NOT NULL DEFAULT '',
																	`font_size` text NOT NULL DEFAULT '',
																	`font_family` text NOT NULL DEFAULT '',
																	`sfx` text NOT NULL DEFAULT '',
																	`smilies_text` text NOT NULL DEFAULT '',
																	`smilies_images` text NOT NULL DEFAULT '',
																	`gender` varchar(255) NOT NULL DEFAULT 'Male,Female,Couple',
																	`profileOn` varchar(3) NOT NULL DEFAULT '',
																	`profileUrl` varchar(255) NOT NULL DEFAULT '',
																	`profileRef` varchar(3) NOT NULL DEFAULT '',
																	`privateOn` varchar(3) NOT NULL DEFAULT '',
																	`whisperOn` varchar(3) NOT NULL DEFAULT '',
																	`webcamsOn` varchar(3) NOT NULL DEFAULT '',
																	`advertsOn` varchar(3) NOT NULL DEFAULT '',
																	`enableUrl` varchar(3) NOT NULL DEFAULT '',
																	`enableEmail` varchar(3) NOT NULL DEFAULT '',
																	`enableShoutFilter` varchar(3) NOT NULL DEFAULT '',
																	`floodChat` varchar(3) NOT NULL DEFAULT '',
																	`defaultSFX` varchar(25) NOT NULL DEFAULT '',
																	`newPm` varchar(10) NOT NULL DEFAULT '',
																	`newPmMin` varchar(10) NOT NULL DEFAULT '',
																	`refreshRate` varchar(10) NOT NULL DEFAULT '',
																	`displayMDiv` varchar(13) NOT NULL DEFAULT '',
																	`totalMessages` varchar(3) NOT NULL DEFAULT '',
																	`showMessages` varchar(3) NOT NULL DEFAULT '',
																	`admin` varchar(255) NOT NULL DEFAULT '',
																	`textAdverts` varchar(3) NOT NULL DEFAULT '0',
																	`textAdvertsDesc` text NOT NULL DEFAULT '',
																	`textAdvertsRate` varchar(3) NOT NULL DEFAULT '10',
																	`userStatusMes` varchar(50) NOT NULL DEFAULT 'here,brb,away',
																	`showTimeStamp` varchar(3) NOT NULL DEFAULT '1',
																	`news` text NOT NULL DEFAULT '',
																	`integrated` varchar(3) NOT NULL DEFAULT '0',
																	`eCredits` varchar(3) NOT NULL DEFAULT '0',
																	PRIMARY KEY (`id`)
																	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2";							
		$action = $dbh->prepare($query);
		$action->execute($params);

		echo "&#187; prochatrooms_config - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
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
	* Dumping data for table `prochatrooms_config`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "INSERT INTO `prochatrooms_config` (
													`id`, 
													`adminLogin`, 
													`modLogin`, 
													`avatars`, 
													`badwords`, 
													`font_color`, 
													`font_size`, 
													`font_family`, 
													`sfx`, 
													`smilies_text`, 
													`smilies_images`, 
													`gender`, 
													`profileOn`, 
													`profileUrl`, 
													`profileRef`, 
													`privateOn`, 
													`whisperOn`, 
													`webcamsOn`, 
													`advertsOn`, 
													`enableUrl`, 
													`enableEmail`, 
													`enableShoutFilter`, 
													`floodChat`, 
													`defaultSFX`, 
													`newPm`, 
													`newPmMin`, 
													`refreshRate`, 
													`displayMDiv`, 
													`totalMessages`, 
													`showMessages`, 
													`admin`, 
													`textAdverts`, 
													`textAdvertsDesc`, 
													`textAdvertsRate`, 
													`userStatusMes`, 
													`showTimeStamp`, 
													`news`, 
													`integrated`, 
													`eCredits`
													) 
													VALUES 
													(
													1, 
													'25e4ee4e9229397b6b17776bfceaf8e7', 
													'', 
													'couple.gif,female.gif,male.gif,pc.gif,phone.gif,', 
													'', 
													'#000000,#003300,#006600,#009900,#00CC00,#00FF00,#000033,#003333,#006633,#009933,#00CC33,#00FF33,#000066,#003366,#006666,#009966,#00CC66,#00FF66,#000099,#003399,#006699,#009999,#00CC99,#00FF99,#0000CC,#0033CC,#0066CC,#0099CC,#00CCCC,#00FFCC,#0000FF,#0033FF,#0066FF,#0099FF,#00CCFF,#00FFFF,#990000,#993300,#996600,#999900,#99CC00,#99FF00,#990033,#993333,#996633,#999933,#99CC33,#99FF33,#990066,#993366,#996666,#999966,#99CC66,#99FF66,#990099,#993399,#996699,#999999,#99CC99,#99FF99,#9900CC,#9933CC,#9966CC,#9999CC,#99CCCC,#99FFCC,#9900FF,#9933FF,#9966FF,#9999FF,#99CCFF,#99FFFF,#FF0000,#FF3300,#FF6600,#FF9900,#FFCC00,#FFFF00,#FF0033,#FF3333,#FF6633,#FF9933,#FFCC33,#FFFF33,#FF0066,#FF3366,#FF6666,#FF9966,#FFCC66,#FFFF66,#FF0099,#FF3399,#FF6699,#FF9999,#FFCC99,#FFFF99,#FF00CC,#FF33CC,#FF66CC,#FF99CC,#FFCCCC,#FFFFCC,#FF00FF,#FF33FF,#FF66FF,#FF99FF,#FFCCFF,#FFFFFF', 
													'12px,14px,16px,18px,20px,22px', 
													'Arial,Verdana,Times New Roman,Courier,Comic Sans MS,Georgia', 
													'bite.mp3,boo.mp3,burp.mp3,cough.mp3,die.mp3,evil.mp3,fart.mp3,giggle.mp3,hiccup.mp3,kiss.mp3,punches.mp3,ricochet.mp3,scream.mp3,slap.mp3,slurp.mp3,smooch.mp3,sneeze.mp3,snore.mp3,yehaw.mp3', 
													':),;),:P,:7,;(,:(,:V,[(,[x,:h,*R,8),:d,:L,:o,', 
													'smile.gif,wink.gif,puh2.gif,blush.gif,cry.gif,sadley.gif,confused.gif,frown.gif,frusty.gif,heart.gif,rolleyes.gif,shadey.gif,biggrin.gif,loveit.gif,omg.gif,', 
													'Male,Female,Couple', 
													'1', 
													'profiles/?id=', 
													'0', 
													'1', 
													'1', 
													'0', 
													'0', 
													'1', 
													'1', 
													'0', 
													'2', 
													'beep_high.mp3', 
													'#EDF1FA', 
													'#B9D3EE', 
													'3000', 
													'chatContainer', 
													'30', 
													'0', 
													'admin%2C', 
													'1', 
													'1|Visit http://google.com,1|Visit http://msn.com,2|Visit http://yahoo.com', 
													'10', 
													'select,Here%2CBRB%2CAway', 
													'1', 
													'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.', 
													'0', 
													'1'
													)";							
		$action = $dbh->prepare($query);
		$action->execute($params);

		echo "&#43; config settings - <font color=\"#33FF00\"><b>INSTALLED<b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#43; config settings - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
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
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_group` (
																	`id` varchar(3) NOT NULL DEFAULT '1',
																	`groupName` varchar(64) NOT NULL DEFAULT '0',
																	`groupChat` varchar(3) NOT NULL DEFAULT '0',
																	`groupPChat` varchar(3) NOT NULL DEFAULT '0',
																	`groupCams` varchar(3) NOT NULL DEFAULT '0',
																	`groupWatch` varchar(3) NOT NULL DEFAULT '0',
																	`groupRooms` varchar(3) NOT NULL DEFAULT '0',
																	`groupShare` VARCHAR(3) NOT NULL DEFAULT '0',
																	`groupVideo` VARCHAR(3) NOT NULL DEFAULT '0',
																	UNIQUE KEY `id` (`id`)
																	) ENGINE=MyISAM DEFAULT CHARSET=latin1";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#187; prochatrooms_groups - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_groups - <font color=\"#FF0000\"><b>FAIL</b></font>";	
		
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	echo "</td></tr>";
	echo "<tr><td>";

	/*
	* Dumping data for table `prochatrooms_group`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "INSERT INTO `prochatrooms_group` (
													`id`, 
													`groupName`, 
													`groupChat`, 
													`groupPChat`, 
													`groupCams`, 
													`groupWatch`, 
													`groupRooms`,
													`groupShare`,
													`groupVideo`													
													) 
													VALUES 
													('2', 'Member', '1', '1', '1', '1', '1', '1', '1'),
													('1', 'Guest', '1', '1', '0', '0', '0', '0', '0')";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#43; groups settings - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#43; groups settings - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
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
	* Table structure for table `prochatrooms_message`
	*
	*/
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_message` (
																	`id` int(11) NOT NULL AUTO_INCREMENT,
																	`uid` varchar(10) NOT NULL DEFAULT '0',
																	`mid` varchar(255) NOT NULL DEFAULT '',
																	`username` varchar(255) NOT NULL DEFAULT '',
																	`tousername` varchar(255) NOT NULL DEFAULT '',
																	`message` text NOT NULL DEFAULT '',
																	`sfx` varchar(50) NOT NULL DEFAULT '',
																	`room` varchar(32) NOT NULL DEFAULT '',
																	`share` varchar(3) NOT NULL DEFAULT '0',
																	`messtime` varchar(20) NOT NULL DEFAULT '0',
																	UNIQUE KEY `id` (`id`)
																	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();

		echo "&#187; prochatrooms_message - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_message - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
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
	* Table structure for table `prochatrooms_profiles`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_profiles` (
																	`id` int(11) NOT NULL AUTO_INCREMENT,
																	`username` varchar(64) NOT NULL DEFAULT '',
																	`real_name` varchar(64) NOT NULL DEFAULT '',
																	`age` varchar(64) NOT NULL DEFAULT '',
																	`gender` varchar(64) NOT NULL DEFAULT '',
																	`photo` varchar(64) NOT NULL DEFAULT '',
																	`location` varchar(64) NOT NULL DEFAULT '',
																	`hobbies` varchar(64) NOT NULL DEFAULT '',
																	`aboutme` varchar(500) NOT NULL DEFAULT '',
																	PRIMARY KEY (`id`)
																	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#187; prochatrooms_profiles - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_profiles - <font color=\"#FF0000\"><b>FAIL</b></font>";
		
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
	* Table structure for table `prochatrooms_rooms`
	*
	*/
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_rooms` (
																`id` varchar(10) NOT NULL DEFAULT '0',
																`roomid` varchar(32) NOT NULL DEFAULT '',
																`roomname` varchar(255) NOT NULL DEFAULT '',
																`roomowner` varchar(100) NOT NULL DEFAULT '',
																`roompassword` varchar(100) NOT NULL DEFAULT '',
																`roomusers` varchar(100) NOT NULL DEFAULT '0',
																`roomcreated` varchar(100) NOT NULL DEFAULT '',
																`roombg` varchar(255) NOT NULL DEFAULT 'default.jpg',
																`roomdesc` varchar(500) NOT NULL DEFAULT '',
																PRIMARY KEY (`id`),
																UNIQUE KEY `id` (`id`)
																) ENGINE=MyISAM DEFAULT CHARSET=latin1";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#187; prochatrooms_rooms - <font color=\"#33FF00\"><b>INSTALLED</b></font>";
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#187; prochatrooms_rooms - <font color=\"#FF0000\"><b>FAIL</b></font>";	
	
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	echo "</td></tr>";
	echo "<tr><td>";

	/*
	* Dumping data for table `prochatrooms_rooms`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "INSERT INTO `prochatrooms_rooms` (`id`, `roomid`, `roomname`, `roomowner`, `roompassword`, `roomusers`, `roomcreated`, `roombg`, `roomdesc`) VALUES
													('1', '', 'Lobby', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.'),
													('2', '', 'Lounge', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.'),
													('3', '', 'Chill+Out', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.')";						
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#43; rooms settings - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		echo "&#43; rooms settings - <font color=\"#FF0000\"><b>FAIL</b></font>";
	
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
	* Table structure for table `prochatrooms_users`
	*
	*/

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "CREATE TABLE IF NOT EXISTS `prochatrooms_users` (
																`id` int(11) NOT NULL AUTO_INCREMENT,
																`username` varchar(255) NOT NULL DEFAULT '',
																`userid` varchar(255) NOT NULL DEFAULT '0',
																`password` varchar(255) NOT NULL DEFAULT '',
																`email` varchar(255) NOT NULL DEFAULT '',
																`userIP` varchar(32) NOT NULL DEFAULT '0',
																`prevroom` varchar(32) NOT NULL DEFAULT '1',
																`room` varchar(32) NOT NULL DEFAULT '',
																`avatar` varchar(50) NOT NULL DEFAULT '',
																`watching` text NOT NULL DEFAULT '',
																`webcam` varchar(10) NOT NULL DEFAULT '0',
																`streamID` varchar(50) NOT NULL DEFAULT '0',
																`active` varchar(10) NOT NULL DEFAULT '0',
																`lastActive` varchar(32) NOT NULL DEFAULT '0',
																`kick` varchar(10) NOT NULL DEFAULT '',
																`ban` varchar(3) NOT NULL DEFAULT '',
																`online` varchar(3) NOT NULL DEFAULT '',
																`status` varchar(255) NOT NULL DEFAULT '0',
																`blocked` text NOT NULL DEFAULT '',
																`eCredits` varchar(255) NOT NULL DEFAULT '0',
																`eCreditsEarned` varchar(100) NOT NULL DEFAULT '0',
																`points` varchar(100) NOT NULL DEFAULT '0',
																`guest` varchar(3) NOT NULL DEFAULT '0',
																`userGroup` varchar(3) NOT NULL DEFAULT '1',
																`enabled` varchar(12) NOT NULL DEFAULT '0',
															    `admin` varchar(3) NOT NULL DEFAULT '0',
															    `moderator` varchar(3) NOT NULL DEFAULT '0',
															    `speaker` varchar(3) NOT NULL DEFAULT '0',																
																UNIQUE KEY `id` (`id`)
																) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";					
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		echo "&#187; prochatrooms_users - <font color=\"#33FF00\"><b>INSTALLED</b></font>";		
			
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
	?>

	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Important!</b></td></tr>
	<tr><td>
	If all tables have successfully installed, please delete the folder '<b>install</b>' and CHMOD the file 'includes/db.php' to 444. 
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Configuration &amp; Settings</b></td></tr>
	<tr><td>
	Additional settings can be edited in the file '<b>includes/config.php</b>'. General settings can be edited within the <b>admin area</b> > <b>settings</b> option. 
	</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><b>Admin Area Login Details</b></td></tr>
	<tr><td>Username: admin</td></tr>
	<tr><td>Password: adminpass</td></tr>
	<tr><td>Login to the <a style="color: #FFFFFF" href="../admin/" target="_blank">admin area</a>.</td></tr>
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