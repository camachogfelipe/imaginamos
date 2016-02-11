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

include("includes/ini.php");
include("includes/session.php");
include("includes/config.php");
include("includes/functions.php");

/*
* include language file
*
*/

include("lang/".getLang($_POST['langID']));

/*
* check software
*
*/

validSoftware();

/*
* reset login errors
*
*/


$loginError = '';

if(getUsersOnline('1') >= $CONFIG['maxUsers'] && !isset($_GET['logout']))
{
	$loginError = C_LANG200;

	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* cms integration
*
*/

if($CONFIG['CMS'] && !isset($_GET['logout']))
{
	// cookie login
	if($_REQUEST['uname'])
	{

		if(isset($_COOKIE['login']))
		{
			// assign user details
			$_REQUEST['userName'] = $_REQUEST['uname'];
			$_SESSION['username'] = $_REQUEST['uname'];
			$_SESSION['userid'] = $_REQUEST['uid'];

			// unset login
			setcookie($_COOKIE['login'],'',time()-3600);
		}
		else
		{
			die("Login error, please try again.");
		}
	}

	// session login
	if(!$_SESSION['username'])
	{
		// include files
		include("cms.php");

		// session login
		if(C_CUSTOM_LOGIN && $uname)
		{
			// assign user details
			$_SESSION['username'] = $uname;
			$_SESSION['userid'] = $uid;
		}

	}

	// add user
	addUser('');

	// assign default room login
	if(!$_REQUEST['roomID'])
	{
		$_REQUEST['roomID'] = '1';

		// version 6 used room names, in 7 and above we use room id instead
		if(isset($_REQUEST['room']) && is_numeric($_REQUEST['room']))
		{
			$_REQUEST['roomID'] = $_REQUEST['room'];
		}
	}
	
	// if js login, redirect to index.php
	if(isset($_REQUEST['uname']) && isset($_COOKIE['login']))
	{		
		// unset login
		setcookie($_COOKIE['login'],'',time()-3600);
		if(isset($_REQUEST['ad']))
		  header('Location: index.php?ad');
	    else
	      header('Location: index.php');
	}
}

/*
* check events
*
*/

$loginError = checkEvent();

if($loginError)
{
	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* get transcripts
*
*/

if(isset($_GET['transcripts']) && isset($_GET['roomID']))
{
	include("templates/".$CONFIG['template']."/transcripts.php");
	die;
}

/*
* confirm email register
*
*/

if(isset($_GET['nReg']) && isset($_GET['email']))
{
	$loginError = confirmReg($_GET['nReg'],$_GET['email']);

	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* register user
*
*/

if(isset($_POST['reg']))
{
	if(empty($_POST['rUsername']))
	{
		$loginError .= C_LANG1."<br>";
	}
	else
	{
		$loginError .= validChars($_POST['rUsername']);
	}

	if(empty($_POST['rPassword']))
	{
		$loginError .= C_LANG2."<br>";
	}

	if(empty($_POST['rEmail']))
	{
		$loginError .= C_LANG3."<br>";
	}
	else
	{
		$loginError .= validEmail($_POST['rEmail']);
	}

	if(empty($_POST['terms']))
	{
		$loginError .= C_LANG4."<br>";
	}

	if($loginError)
	{
		include("templates/".$CONFIG['template']."/login.php");
		die;	
	}
	else
	{
		$loginError = registerUser($_POST['rUsername'],$_POST['rPassword'],$_POST['rEmail']);

		include("templates/".$CONFIG['template']."/login.php");
		die;
	}	

}

/*
* reset eCredit sessions
*
*/

if($_SESSION['eCreditsInit'])
{
	unset($_SESSION['eCreditsInit']);
	unset($_SESSION['eCreditsAwardTo']);
	unset($_SESSION['eCredits_start']);
}

/*
* logout user
*
*/

if(isset($_REQUEST['logout']) && isset($_SESSION['username']))
{
	logoutUser($_SESSION['username'],$_SESSION['room']);

	if($_REQUEST['logout'] == 'kick')
	{
		banKickUser('KICK', $_SESSION['username']);
	}

	unset($_SESSION['username']);
	unset($_SESSION['userid']);
	unset($_SESSION['room']);
	unset($_SESSION['guest']);

	$loginError = C_LANG5;

	if($CONFIG['CMS'])
	{
		die($loginError);
	}
	else
	{
		include("templates/".$CONFIG['template']."/login.php");
		die;
	}
}

/*
* check room is set
*
*/

if(!$_REQUEST['roomID'][0])
{
	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* check username is valid
*
*/

if(!isset($_SESSION['username']) && empty($_REQUEST['userName']))
{
	$loginError = C_LANG1;

	include("templates/".$CONFIG['template']."/login.php");
	die;
}

if(empty($_REQUEST['userName']) && isset($_REQUEST['login']))
{
	$loginError = C_LANG1;

	include("templates/".$CONFIG['template']."/login.php");
	die;
}

if(isset($_REQUEST['userName']))
{
	$loginError = validChars($_REQUEST['userName']);

	if($loginError)
	{
		include("templates/".$CONFIG['template']."/login.php");
		die;
	}

}

if($_POST['userName'])
{
	unset($_SESSION['guest']);
}

/*
* if user is not guest and password is empty
* 
*/

if(!$_POST['isGuest'] && isset($_POST['userPass']) && empty($_POST['userPass']))
{
	$loginError = C_LANG6;

	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* count total rooms
*
*/

$totalRooms = totalRooms();

if($CONFIG['singleRoom'] || $_REQUEST['singleRoom'])
{
	$totalRooms = '1';
}

/*
* get previous room id
* 
*/

$prevRoom = prevRoom();


/*
* create user
*
*/

if(isset($_SESSION['username']))
{
		$_REQUEST['userName'] = $_SESSION['username'];
}

if(isset($_SESSION['userid']))
{
		$_REQUEST['userId'] = $_SESSION['userid'];
}

if(empty($_REQUEST['userId']))
{
	$_REQUEST['userId'] = '-1';
}

list($username,$userid,$loginError) = createUser(
                     $_REQUEST['userName'],
                     $_REQUEST['userId'],
                     $_REQUEST['userPass'],
                     $_REQUEST['genderID'],
                     isset($_REQUEST['login']),
                     isset($_POST['isGuest'])
                  );

if(isset($_REQUEST['login']) && $loginError)
{
	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* get create room details
* 
*/

$roomPass = '';

if(isset($_REQUEST['roomPass']))
{
		$roomPass = $_REQUEST['roomPass'];		
}

list($roomID,$roomOwnerID) = chatRoomID($_REQUEST['roomID'],$roomPass);

list($roomBg,$roomDesc) = chatRoomDesc($roomID);

/*
* get user details
*
*/

$guestUser = '0';

if($_POST['isGuest'])
{
	updateGuestAvatar($_REQUEST['genderID']);
}

list($id,$avatar,$loginError,$blockedList,$guestUser) = getUser($prevRoom,$roomID);

/*
* assign user group
*
*/

getUserGroup($_SESSION['userGroup']);

/*
* final check for user login error
*
*/

if($loginError)
{
	// if single room mode, ignore user name not found error
	// this is only an option for multi user rooms and cms
	if($CONFIG['singleRoom'] && $loginError == C_LANG17)
	{
		$loginError = '';
	}

	// show login error
	include("templates/".$CONFIG['template']."/login.php");
	die;
}

/*
* assign room owner
*
*/

$roomOwner = '0';

if($id == $roomOwnerID)
{
	$roomOwner = '1';
}

/*
* silence duration
*
*/

$silent = $CONFIG['silent'];

/*
* get room last message id
*
*/

$lastMessageID = getLastMessageID($roomID);

/*
* alls ok, include main template
*
*/

include("templates/".$CONFIG['template']."/main.php");

?>