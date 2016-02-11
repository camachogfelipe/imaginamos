<?php

/*
* include files
* 
*/

include("../includes/ini.php");
include("../includes/session.php");
include("../includes/db.php");
include("../includes/config.php");
include("../includes/functions.php");
include("../lang/".getLang(''));

/*
* check profile id is number
* 
*/

if(isset($_GET['id']) && !is_numeric($_GET['id']))
{
	die("Invalid Profile ID");
}

/*
* check user is editing their own profile
* 
*/ 

if(isset($_REQUEST['edit']) && $_SESSION['myProfileID'] != $_REQUEST['id'] || isset($_REQUEST['edit']) && isset($_SESSION['guest']))
{
	die("You do not have the correct permissions to edit this profile");
}

/*
* update user profile
*
*/

if(isset($_POST['edit']) && isset($_SESSION['myProfileID']))
{
	$profileUpdated = updateProfile(
						$_SESSION['myProfileID'],
						$_POST['profileRealname'],
						$_POST['profileAge'],
						$_POST['profileGender'],
						$_POST['uploadedfile'],
						$_POST['del'],
						$_POST['imgID'],
						$_POST['profileLocation'],
						$_POST['profileHobbies'],
						$_POST['profileAboutme'],
						$_POST['profilePass'],
						$_POST['profileEmail']
					);		
}

/*
* get user details
* 
*/

list(
	$username,
	$realname,
	$age,
	$gender,
	$location,
	$hobbies,
	$aboutme,
	$imgID,
	$email

	) = userProfileInfo($_GET['id']);

/*
* set default profile values if fields null
*
*/

$def = " - ";

$realname = empty($realname) ? $def : $realname;
$age = empty($age) ? $def : $age;
$gender = empty($gender) ? $def : $gender;
$location = empty($location) ? $def : $location;
$hobbies = empty($hobbies) ? $def : $hobbies;
$aboutme = empty($aboutme) ? $def : $aboutme;

/*
* include template
*
*/

include("../templates/".$CONFIG['template']."/profile.php");

?>