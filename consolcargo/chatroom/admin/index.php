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
* include files
*
*/

include("../includes/ini.php");
include("../includes/session.php");
include("../includes/config.php");
include("../includes/functions.php");

/*
* include admin files
*
*/

include("includes/functions.php");

/*
* do logout
*
*/

if($_REQUEST['option'] == 'logout')
{
	unset($_SESSION['adminUser']);

	header('Location: index.php');
	return;
}

/*
* reset result
*
*/

$result = '&nbsp;';

/*
* do login
* 
*/

if(!$_SESSION['adminUser'])
{
	if($_POST)
	{
		$result = updateAdminLogin($_POST);

		if($result == '0')
		{
			$result = "Login Failed";
		}

		if($result == '1')
		{
			header("Location: index.php?option=home");
			die("");
		}

	}

	if($_REQUEST['option'] == 'lostPassword')
	{
		if($_SESSION['resent'] > date("U")-900)
		{
			$result = "Please wait 15 minutes ...";	
		}

		if(!$_SESSION['resent'] || $_SESSION['resent'] < date("U")-900)
		{
			resetAdminLogin('1');
			$result = "Password has been reset.";

			$_SESSION['resent'] = date("U");
		}
	}

	$html = getAdminLogin();

	include("templates/header.php");
	include("templates/login.php");
	include("templates/footer.php");
	return;
}

/*
* if option is null
* redirect to home page
*/

if(!$_REQUEST['option'])
{
	header("Location: index.php?option=home");
	die("");
}

/*
* include header
*
*/

include("templates/header.php");

/*
* include menu
*
*/

include("templates/menu.php");

/*
* include settings
* 
*/

if($_REQUEST['option'] == 'settings')
{
	if($_POST)
	{
		$result = updateAdminConfig($_POST);
	}

	list(

		$id,
		$adminLogin,
		$avatars,
		$badwords,
		$font_color,
		$font_size,
		$font_family,
		$sfx,
		$smilies_text,
		$smilies_images,
		$gender,
		$profileOn,
		$profileUrl,
		$profileRef,
		$privateOn,
		$whisperOn,
		$webcamsOn,
		$advertsOn,
		$enableUrl,
		$enableEmail,
		$enableShoutFilter,
		$floodChat,
		$newPm,
		$newPmMin,
		$refreshRate,
		$totalMessages,
		$admin,
		$textAdverts,
		$textAdvertsDesc,
		$textAdvertsRate,
		$userStatusMes,
		$news

		) = getAdminConfig();

	include("templates/settings.php");
}

/*
* include adverts
* 
*/

if($_REQUEST['option'] == 'adverts')
{
	if($_POST)
	{
		$result = updateAdminAdverts($_POST);
	}

	$html = getAdminAdverts();

	include("templates/adverts.php");
}

/*
* include games
* 
*/

if($_REQUEST['option'] == 'games')
{
	if($_POST)
	{
		$result = updateAdminGames($_POST);
	}

	$html = getAdminGames();

	include("templates/games.php");
}

/*
* include rooms
* 
*/

if($_REQUEST['option'] == 'rooms')
{
	if($_POST)
	{
		$result = updateAdminRooms($_POST);
	}

	$singleRoom = '0';

	if($_POST['edit'])
	{
		$singleRoom = $_POST['edit'];
	}	

	$html = getAdminRooms($singleRoom);

	include("templates/rooms.php");
}

/*
* include groups
* 
*/

if($_REQUEST['option'] == 'groups')
{
	if(isset($_POST['addGroup']) || isset($_POST['editGroup']))
	{
		$result = updateAdminGroups($_POST);

		$html .= getAdminGroups();
	}

	elseif(isset($_POST['edit']) && !empty($_POST['edit']))
	{
		$result = updateAdminGroups($_POST);

		$html = editAdminGroups($_POST);
	}

	elseif(isset($_POST['del']) && !empty($_POST['del']))
	{
		$result = updateAdminGroups($_POST);

		$html = getAdminGroups();
	}

	else
	{
		$html .= getAdminGroups();
	}	

	include("templates/groups.php");
}

/*
* include bans
* 
*/

if($_REQUEST['option'] == 'bans')
{
	if($_POST)
	{
		$result = updateAdminBans($_POST);
	}	

	$html = getAdminBans();

	include("templates/bans.php");
}

/*
* include users
* 
*/

if($_REQUEST['option'] == 'users')
{
	if($_POST)
	{
		$result = updateAdminUsers($_POST);
	}

	$thisUser = '';

	if($_POST['findUser'])
	{
		$thisUser = $_POST['findUser'];
	}	

	$html = getAdminUsers($thisUser);

	include("templates/users.php");
}

/*
* include profiles
* 
*/

if($_REQUEST['option'] == 'profiles')
{
	if($_POST)
	{
		$result = updateAdminProfiles($_POST);
	}

	$thisUser = '';

	if($_POST['findUser'])
	{
		$thisUser = $_POST['findUser'];
	}	

	$html = getAdminProfiles($thisUser);

	include("templates/profiles.php");
}

/*
* include transcripts
* 
*/

if($_REQUEST['option'] == 'transcripts')
{
	$user = '';
	$room = '';
	$page = '0';

	if(!empty($_REQUEST['page']))
	{
		$page = $_REQUEST['page'];
	}

	if(!empty($_REQUEST['room']))
	{
		$room = $_REQUEST['room'];
	}

	if(!empty($_REQUEST['user']))
	{
		$user = $_REQUEST['user'];
	}

	if(!is_numeric($page))
	{
		$page= '0';
	}

	if(!is_numeric($room))
	{
		$room= '';
	}

	$html = getAdminTranscripts($user,$room,$page);

	include("templates/transcripts.php");
}

/*
* include email
* 
*/

if($_REQUEST['option'] == 'email')
{
	if($_POST)
	{
		$result = sendAdminGroupEmail($_POST);
	}	

	$html = getAdminGroupEmail();

	include("templates/email.php");
}

/*
* include database
* 
*/

if($_REQUEST['option'] == 'database')
{
	if($_POST)
	{
		$result = updateAdminDatabase($_POST);
	}	

	$html = getAdminDatabase();

	include("templates/database.php");
}

/*
* include home
* 
*/

if($_REQUEST['option'] == 'home')
{
	include("templates/home.php");
}

/*
* include footer
*
*/

include("templates/footer.php");

?>