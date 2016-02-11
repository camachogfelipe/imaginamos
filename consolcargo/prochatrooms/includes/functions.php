<?php

/* 
* conect to database
*
*/

function db_connect()
{
	include(dirname(__FILE__)."/db.php");
	
	try {
	  # MS SQL Server
	  #$dbh = new PDO("mssql:host=$host;dbname=$dbname, $user, $pass");

	  # Sybase with PDO_DBLIB
	  # $dbh = new PDO("sybase:host=$host;dbname=$dbname, $user, $pass");

	  # MySQL with PDO_MYSQL
	  $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

	  # SQLite Database
	  # $dbh = new PDO("sqlite:my/database/path/database.db");

	  # set error reporting
	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	  
	  
	  return($dbh);
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}
}

/*
* error reporting
*
*/

function debugError($data)
{
	include(dirname(__FILE__)."/config.php");
	
	if($CONFIG['debug'])
	{
		$error_log = fopen("error_log.txt","a+");
		echo fwrite($error_log,$data);
		fclose($error_log);
	}

	return;
}

/*
* get document path
*
*/

function getDocPath()
{
	return dirname(dirname(__FILE__))."/";
}

/*
* get language file
*
*/

function getLang($id)
{
	// include files
	include(getDocPath()."includes/config.php");

	// set admin default language file
	if(file_exists(getDocPath()."lang/".$CONFIG['lang'][1]))
	{
		$_SESSION['lang'] = $CONFIG['lang'][1];		
	}

	// if $id is set, check file exists and set new language file
	if(is_numeric($id) && file_exists(getDocPath()."lang/".$CONFIG['lang'][$id]))
	{
		$_SESSION['lang'] = $CONFIG['lang'][$id];		
	}
	
	// if no language file set system language file
	if(empty($_SESSION['lang']))
	{
		$_SESSION['lang'] = "english.php";
	}

	return $_SESSION['lang'];
}

/*
* get time
* 
*/

function getTime()
{
	return date("U");
}

/*
* create captcha text
*
*/

function getCaptchaText()
{
	return substr(md5(date("U").rand(1,99999)),0,-26);
}

/*
* make safe data for database
*
*/

function makeSafe($data)
{
	$data = htmlspecialchars($data);

	return $data;
}

/*
* check software licence has been uploaded
*
*/

function validSoftware()
{
	if(!file_exists("software_licence.txt"))
	{
		die(C_LANG7);
	}
}

/*
* bad words/characters
*
*/

function badChars()
{

	$badChars = array(

				'intelli-bot',
				'adbot',
				'fuck',
				'shit',
				'wank',
				'cunt',
				'\\',
				' ',
				'!',
				'<',
				'>',
				'.',
				',',
				'/',
				'\'',
				'"',
				':',
				'&',
				';',
				'#',
				'@',
				'~',
				'(',
				')',
				'[',
				']',
				'{',
				'}',
				'£',
				'$',
				'%',
				'^',
				'*',
				'?',
				'+',
				'='
			);

	return $badChars;

}

/*
* check data for bad words/characters
*
*/

function validChars($data)
{
	$i = 0;

	$badChars = badChars();

	for($i=0; $i < sizeof($badChars); $i+=1)
	{
		$pos = strpos(stripslashes(strtolower($data)),$badChars[$i]);

		if ($pos === false)
		{
    			// do nothing
		} 
		else 
		{
			if($badChars[$i] == ' ')
			{
				$badChars[$i] = 'space';
			}

			return C_LANG8.": [ ".$badChars[$i]." ]<br>";
		}
	}
}

/*
* validate email address
*
*/

function validEmail($email)
{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))	
	{ 
		return C_LANG9."<br>"; 
	} 	
}

/*
* show language options 
* displays on login page
*/

function showLang()
{
	// include files
	include(getDocPath()."includes/config.php");

	$count = count($CONFIG['lang']); 

	$html = '';

	for ($i = 1; $i < $count; $i++)
	{
		$selected = '';

		if($CONFIG['lang'][$i] == $_SESSION['lang'])
		{
			$selected = 'SELECTED';
		}

		$html .= "<option value='".$i."' ".$selected.">".ucfirst(substr($CONFIG['lang'][$i], 0, -4))."</option>";
	}

	return $html;
}

/*
* register user
*
*/

function registerUser($username,$password,$email)
{
	$result = '0';	

	// include files
	include(getDocPath()."includes/config.php");

	$username = urlencode($username);

	// check username is in database
	try {
		$dbh = db_connect();
		$params = array(
		'username' => makeSafe($username)
		);
		$query = "SELECT password 
				  FROM prochatrooms_users 
				  WHERE username = :username
				  LIMIT 1";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		foreach ($action as $i) 
		{
			$pass = $i['password'];

			$result = '1';
		}
			
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

	// if user exists but no password is found, 
	// update guest username to member status
	if(!$pass && $result)
	{
		// user found in db but has no password assigned (guest)
		// allow the user to register this username
		try {
			$dbh = db_connect();
			$params = array(
			'password' => md5($password),
			'email' => makeSafe($email),
			'username' => makeSafe($username),
			);
			$query = "UPDATE prochatrooms_users 
					  SET password = :password, 
					      email = :email 
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

		$result = C_LANG10;

		return $result;
	}

	// if username exists and password exists, 
	// user is already registered (already member)
	if($pass)
	{
		$result = C_LANG11;	
	}
	else
	{
		// if new registrations require email confirmation
		if($CONFIG['approve'])
		{
			$CONFIG['approve'] = substr(md5(date("U").rand(1,99999)), 0, -20);

			sendUserEmail($CONFIG['approve'],$username,$email,'','2');

			$result = C_LANG12;
		}
		else
		{
			$result = C_LANG13;
		}

		$incUserGroup = $CONFIG['userGroup'];

		if(is_numeric($_SESSION['userGroup']))
		{
			$incUserGroup = $_SESSION['userGroup'];
		}

		// user doesnt exist, add to database
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($username), 
			'userid' => '-1',
			'password' => md5($password),
			'email' => makeSafe($email),
			'room' => '1',
			'userIP' => $_SERVER['REMOTE_ADDR'],
			'avatar' => assignGenderImage('0'),
			'webcam' => '0',
			'online' => '0',
			'enabled' => $CONFIG['approve'],
			'active' => '0',
			'userGroup' => makeSafe($incUserGroup)
			);
			$query = "INSERT INTO prochatrooms_users
								(
									username, 
									userid,
									password,
									email,
									room, 
									userIP,
									avatar, 
									webcam,
									online,
									enabled,
									active,
									userGroup
								) 
								VALUES 
								(
									:username, 
									:userid,
									:password,
									:email,
									:room, 
									:userIP,
									:avatar, 
									:webcam,
									:online,
									:enabled,
									:active,
									:userGroup
								)";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

		// create a new user profile entry in db
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($username)
			);
			$query = "INSERT INTO prochatrooms_profiles
								(
									username
								) 
								VALUES 
								(
									:username
								)";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

	}

	return $result;
}

/*
* create user
*
*/

function createUser($loginName,$loginID,$loginPass,$loginGender,$login,$guest)
{
	// include files
	include(getDocPath()."includes/config.php");

	if($login)
	{
		if($loginName != $_SESSION['username'])
		{
			$loginName = urlencode($loginName);

			// check username status	
			try {
				$dbh = db_connect();
				$params = array(
				'loginname' => makeSafe($loginName)
				);
				$query = "SELECT active, password, enabled, kick, ban    
						  FROM prochatrooms_users 
						  WHERE username = :loginname
						  LIMIT 1
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);
				
				foreach ($action as $i) 
				{
					if(!$guest)
					{
						if($CONFIG['approve'] && ($i['enabled'] != '1') && $i['kick'] == '' && $i['ban'] == '')
						{
							$loginError = C_LANG14;
							return array('','',$loginError);
						}
					}

					if($i['active'] > date("U")-15)
					{
						$loginError = C_LANG15;
						return array('','',$loginError);
					}

					$password = $i['password'];
				}

				if($loginPass && $password != md5($loginPass) || $password && $password != md5($loginPass))
				{
					$loginError = C_LANG16;
					return array('','',$loginError);
				}				
					
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Function: ".__FUNCTION__."\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}					

		}

		// unset old session
		unset($_SESSION['username']);
		unset($_SESSION['userid']);

		// create new user session
		$_SESSION['username'] = $loginName;
		$_SESSION['userid'] = $loginID;

		// add user to database
		addUser($loginGender);

		// return details
		return array($_SESSION['username'],$_SESSION['userid'],'0');
	}

	if(!$login)
	{
		// user session already set
		return array($_SESSION['username'],$_SESSION['userid'],'0');
	}

}

/*
* get users details
*
*/

function getUser($prevRoom,$roomID)
{
	$loginError = '0';

	// include files
	include(getDocPath()."includes/config.php");

	// check username is in database
	try {
		$dbh = db_connect();
		$params = array(
		'username' => makeSafe($_SESSION['username'])
		);
		$query = "SELECT id, userid, avatar, kick, ban, blocked, room, guest, userGroup  
				  FROM prochatrooms_users 
				  WHERE username = :username 
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$id = $i['id'];
			$avatar = $i['avatar'];
			$kick = $i['kick'];
			$ban = $i['ban'];
			$blockedList = $i['blocked'];
			$guest = $i['guest'];

			$_SESSION['userGroup'] = $i['userGroup'];
			$_SESSION['myProfileID'] = $id;
			$_SESSION['myStreamID'] = streamID();			
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	if(!$id)
	{
		$loginError = C_LANG17;		
	}

	if($kick > date("U"))
	{
		$loginError = C_LANG18.' '.$CONFIG['kickTime'].' '.C_LANG19;
	}

	if($ban)
	{
		$loginError = C_LANG20;
	}

	if($CONFIG['banIP'] && getIPBanList(getIP()))
	{
		$loginError = C_LANG20;
	}

	if(!$loginError)
	{
		// update user in database
		updateUser();
		
		// update room details
		try {
			$dbh = db_connect();
			$params = array(
			'roomID' => makeSafe($roomID)
			);
			$query = "UPDATE prochatrooms_rooms 
					  SET roomusers = roomusers + 1
					  WHERE id = :roomID
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		

		// update room details
		try {
			$dbh = db_connect();
			$params = array(
			'prevRoom' => makeSafe($prevRoom)
			);
			$query = "UPDATE prochatrooms_rooms 
					  SET roomusers = roomusers - 1 
					  WHERE id = :prevRoom
					  AND roomusers > '0'
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

		// update watching, webcam, avatar, lastactive 
		try {
			$dbh = db_connect();
			$params = array(
			'lastActive' => getTime(),
			'username' => makeSafe($_SESSION['username']),			
			);
			$query = "UPDATE prochatrooms_users 
					  SET watching = '', webcam = '0', lastActive = :lastActive  
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

	}

	// return details
	return array($id, $avatar, $loginError, $blockedList, $guest);

}

/*
* get user group
*
*/

function getUserGroup($id)
{
	// include files
	include(getDocPath()."includes/config.php");

	if(!is_numeric($id))
	{
		// set default user group
		$_SESSION['userGroup'] = $CONFIG['userGroup'];
	}

	// select user group 
	try {
		$dbh = db_connect();
		$params = array(
		'userGroup' => makeSafe($_SESSION['userGroup'])
		);
		$query = "SELECT *  
				  FROM prochatrooms_group 
				  WHERE id = :userGroup
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$_SESSION['groupChat'] = $i['groupChat'];
			$_SESSION['groupPChat'] = $i['groupPChat'];
			$_SESSION['groupCams'] = $i['groupCams'];
			$_SESSION['groupWatch'] = $i['groupWatch'];
			$_SESSION['groupRooms'] = $i['groupRooms'];
			$_SESSION['groupShare'] = $i['groupShare'];
			$_SESSION['groupVideo'] = $i['groupVideo'];						
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
}

/*
* assign gender image
*
*/

function assignGenderImage($loginGender)
{
	// assign avatar
	switch ($loginGender)
	{
		case 1:
  			$avatar = "male.gif";
  			break;
		case 2:
  			$avatar = "female.gif";
  			break;
		case 3:
  			$avatar = "couple.gif";
  			break;
		default:
  			$avatar = "male.gif";
	}

	return $avatar;
}

/*
* update guest avatar
*
*/

function updateGuestAvatar($loginGender)
{
	// assign guest user
	$_SESSION['guest'] = '1';

	// assign avatar
	$loginGender = assignGenderImage($loginGender);

	// update watching, webcam, avatar
	try {
		$dbh = db_connect();
		$params = array(
		'avatar' => makeSafe($loginGender),
		'userIP' => $_SERVER['REMOTE_ADDR'],
		'guest' => $_SESSION['guest'],
		'username' => makeSafe($_SESSION['username']),		
		);
		$query = "UPDATE prochatrooms_users 
				  SET avatar = :avatar, userIP = :userIP, guest = :guest
				  WHERE username = :username
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	return $_SESSION['guest'];
}

/*
* add guest user to database
*
*/

function addUser($loginGender)
{
	// include files
	include(getDocPath()."includes/config.php");

	// assign avatar
	if($loginGender)
	{
		$loginGender = assignGenderImage($loginGender);
	}
	else
	{
		$loginGender = 'online.gif';
	}

	// check username is in database		
	try {
		$dbh = db_connect();
		$params = array(
		'username' => makeSafe($_SESSION['username'])
		);
		$query = "SELECT username 
				  FROM prochatrooms_users 
				  WHERE username = :username 
				  LIMIT 1
				 ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();		
		
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
	
	// if user doesnt exist, add to database
	if(!$count)
	{
		$incUserGroup = $CONFIG['userGroup'];

		if(is_numeric($_SESSION['userGroup']))
		{
			$incUserGroup = $_SESSION['userGroup'];
		}
		
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($_SESSION['username']), 
			'userid' => makeSafe($_SESSION['userid']), 
			'userIP' => $_SERVER['REMOTE_ADDR'], 
			'room' => '1', 
			'avatar' => makeSafe($loginGender), 
			'webcam' => '0', 
			'active' => '0', 
			'userGroup' => makeSafe($incUserGroup)
			);
			$query = "INSERT INTO prochatrooms_users
								(
									username, 
									userid,
									userIP,
									room, 
									avatar, 
									webcam,
									active,
									userGroup
								) 
								VALUES 
								(
									:username, 
									:userid,
									:userIP,
									:room, 
									:avatar, 
									:webcam,
									:active,
									:userGroup
								)";							
			$action = $dbh->prepare($query);
			$action->execute($params);
				
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		

		// if no profile exists for this user
		// create a new user profile entry in db
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "INSERT INTO prochatrooms_profiles
								(
									username
								) 
								VALUES 
								(
									:username
								)";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			
	}
}

/*
* count total rooms
* 
*/

function totalRooms()
{
	// include files
	include(getDocPath()."includes/config.php");

	// count rooms total	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT roomid FROM prochatrooms_rooms";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	

		if($CONFIG['singleRoom'])
		{
			return $CONFIG['singleRoom'];
		}
		else
		{
			return $count;
		}		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

}

/*
* update user
*
*/

function updateUser()
{
	// update details
	try {
		$dbh = db_connect();

		$params = array(	
		'userIP' => $_SERVER['REMOTE_ADDR'],
		'room' => makeSafe($_SESSION['room']),
		'isActive' => getTime(),
		'isOnline' => '1',
		'streamID' => makeSafe($_SESSION['myStreamID']),	
		'username' => makeSafe($_SESSION['username'])		
		);
		$query = "UPDATE prochatrooms_users 
				  SET 
				  userIP = :userIP,
				  room = :room, 
				  active = :isActive, 
				  online = :isOnline, 
				  streamID = :streamID  
				  WHERE username = :username
				  ";		  
		$action = $dbh->prepare($query);
		$action->execute($params);
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
}

/*
* catch previous room (for logout messages)
*
*/

function prevRoom()
{
	$prevRoom = '1';

	if(isset($_SESSION['room']))
	{
		$prevRoom = $_SESSION['room'];
	}

	if(isset($_SESSION['username']))
	{
		// update users previous room
		try {
			$dbh = db_connect();
			$params = array(
			'prevroom' => makeSafe($prevRoom),
			'status' => '1',
			'username' => makeSafe($_SESSION['username']),
			);
			$query = "UPDATE prochatrooms_users 
					  SET prevroom = :prevroom, 
					  status = :status    
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		
		
	}

	return $prevRoom;

}

/*
* delete any expired user created rooms
*
*/

function deleteUserRoom($id)
{
	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id),
		);
		$query = "DELETE FROM prochatrooms_rooms WHERE id = :id";							
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
}

/*
* get the chat room id
*
*/

function chatRoomID($id,$pass)
{
	// include files
	include(getDocPath()."includes/config.php");

	if(!$id || !is_numeric($id))
	{
		// if no room ID or room ID is not numeric then
		// log user into default room (set in config.php)

		$_SESSION['room'] = $CONFIG['defaultRoom'];

		return array($CONFIG['defaultRoom'],'1');	
	}
	else
	{
		// password encryption
		if(!empty($pass))
		{
			$pass = md5($pass);
		}

		$roomPassword = "1";

      	// admin & mods dont need a password ;)
      	if(getAdmin($_SESSION['username']) || getModerator($_SESSION['username']))
     	{
         	$roomPassword = '';
      	}

		// check room exists	
		try {
			$dbh = db_connect();
			
			if($roomPassword)
			{
				$params = array(
				'id' => makeSafe($id),
				'roompassword' => makeSafe($pass)				
				);
				$query = "SELECT id, roomid, roomowner   
						  FROM prochatrooms_rooms 
						  WHERE id = :id  
						  AND roompassword = :roompassword 
						  ORDER BY id DESC
						  LIMIT 1
						  ";
			}
			else
			{
				$params = array(
				'id' => makeSafe($id)
				);
				$query = "SELECT id, roomid, roomowner   
						  FROM prochatrooms_rooms 
						  WHERE id = :id
						  ORDER BY id DESC
						  LIMIT 1
						  ";
			}		 
					  
			$action = $dbh->prepare($query);
			$action->execute($params);
			$count = $action->rowCount();			
			
			if($count)
			{
				foreach ($action as $i)  
				{
					$_SESSION['room'] = $i['id'];
					$roomowner = $i['roomowner'];
				}

				return array($id,$roomowner);
			}
			else
			{
				include("templates/".$CONFIG['template']."/private.php");
				die;
			}			
			
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}				

	}

	updateRoomUserCount($id);

}

/*
* get the chat room details
*
*/

function chatRoomDesc($roomID)
{
	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($roomID)
		);
		$query = "SELECT roombg,roomdesc   
				  FROM prochatrooms_rooms 
				  WHERE id = :id
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$roombg = $i['roombg'];
			$roomdesc = urldecode($i['roomdesc']);				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	return array($roombg,$roomdesc);
}

/*
* get last message id
*
*/

function getLastMessageID($room)
{
	$id = '0';
	
	try {
		$dbh = db_connect();
		$params = array(
		'room' => makeSafe($room),
		'tousername' => makeSafe($_SESSION['username']),	
		'share' => '1'	
		);
		$query = "SELECT id   
				  FROM prochatrooms_message 
				  WHERE room = :room 
				  OR tousername = :tousername
				  OR share = :share
				  ORDER BY id DESC
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$id = $i['id'];

			// include files
			include(getDocPath()."includes/config.php");
			$id -= $CONFIG['dispLastMess'];				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	$_SESSION['transcriptsID'] = $id + 1;

	return $id;

}

/*
* auto logout
* 
*/

function logoutUser($username,$room)
{
	// include files
	include(getDocPath()."includes/config.php");

	if(empty($room) || $room == '')
	{
		$room = '0';
	}

	$showLogout = '1';

	if(invisibleAdmins($username))
	{
		$showLogout = '0';
	}

	if($showLogout)
	{
		if(file_exists(getDocPath()."lang/".$_SESSION['lang']))
		{
			include(getDocPath()."lang/".$_SESSION['lang']);
		}		

		// set user to offline
		$offlineTime = getTime()-$CONFIG['activeTimeout'];
		
		try {
			$dbh = db_connect();
			$params = array(
			'active' => $offlineTime,
			'online' => '0',
			'webcam' => '0',
			'status' => '0',		
			'username' => makeSafe($username)				
			);
			$query = "UPDATE prochatrooms_users 
					  SET active = :active, online = :online, webcam = :webcam, status = :status    
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{	
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";
			
			debugError($error);
		}		

		// get userid
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($username)
			);
			$query = "SELECT id   
					  FROM prochatrooms_users 
					  WHERE username = :username
					  LIMIT 1
					";							
			$action = $dbh->prepare($query);
			$action->execute($params);
						
			foreach ($action as $i) 
			{
					$id = $i['id'];			
			}
			
			$dbh = null;
		}
		catch(PDOException $e) 
		{	
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			
	
		// send logout message
		try {
			$dbh = db_connect();
			$params = array(
			'uid' => $id,
			'mid' => 'chatContainer',
			'username' => makeSafe($username),
			'tousername' => '',
			'message' =>  '1|#000000|12px|Verdana|** '.makeSafe($username).' '.makeSafe(C_LANG22),
			'sfx' => 'beep_high.mp3',
			'room' => makeSafe($room),
			'messtime' => getTime()
			);
			$query = "INSERT INTO prochatrooms_message
								(
									uid,
									mid,
									username, 
									tousername, 
									message, 
									sfx,
									room,
									messtime
								) 
								VALUES 
								(
									:uid,
									:mid,
									:username, 
									:tousername, 
									:message, 
									:sfx,
									:room,
									:messtime
								)
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);		
			$dbh = null;
		}
		catch(PDOException $e) 
		{	
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";
	
			debugError($error);
		}				

		// update room user count
		try {
			$dbh = db_connect();
			$params = array(
			'id' => makeSafe($room)
			);
			$query = "UPDATE prochatrooms_rooms 
					  SET roomusers = roomusers - 1 
					  WHERE id = :id
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}
	}
}

/*
* streamID
* 
*/

function streamID()
{
	// include files
	include(getDocPath()."includes/config.php");

	$id = md5(date("U").$CONFIG['salt'].$_SESSION['username'].rand(1,9999999));

	return $id;
}

/*
* check for valid streamID
*
*/

function validStreamID($id)
{
	try {
		$dbh = db_connect();
		$params = array(
		'streamID' => makeSafe($id)
		);
		$query = "SELECT streamID   
				  FROM prochatrooms_users 
				  WHERE streamID = :streamID
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	
		
		if($count)
		{
			$valid = '1';
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}
	
	return $valid;
}

/*
* admin permissions
*			
*/

function adminPermissions()
{
	// include files
	include(getDocPath()."includes/config.php");

	// default values	
	$admin = '0';	
	$mod = '0';	
	$speaker = '0';		

	try {
		$dbh = db_connect();
		$params = array(
		'username' => makeSafe($_SESSION['username'])
		);
		$query = "SELECT admin, moderator, speaker  
				  FROM prochatrooms_users 
				  WHERE username = :username
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);	
	
		foreach ($action as $i) 
		{
			$admin = $i['admin'];
			$mod = $i['moderator'];
			$speaker = $i['speaker'];
			
			// if user is admin and config setting is set to 1 
			// allows auto-login to admin area
			if($admin && $CONFIG['adminArea'])
			{
				$_SESSION['adminUser'] = '1';
			}
		}
		
		$dbh = null;		
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	return array($admin,$mod,$speaker);
}

/*
* toUser permissions
* this function is called when we send a message to a user
* sendData.php		
*/

function toUserPermissions($id)
{
	// include files
	include(getDocPath()."includes/config.php");

	// default values	
	$admin = '0';	
	$mod = '0';	
	$speaker = '0';		

	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT admin, moderator, speaker  
				  FROM prochatrooms_users 
				  WHERE username = :id
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);	
	
		foreach ($action as $i) 
		{
			$admin = $i['admin'];
			$mod = $i['moderator'];
			$speaker = $i['speaker'];
		}
		
		$dbh = null;		
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

	return array($admin,$mod,$speaker);
}


/*
* admin 
* 
*/

function getAdmin($id)
{
	$result = '0';	

	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT admin   
				  FROM prochatrooms_users 
				  WHERE username = :id
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$result = $i['admin']; 				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
	
	return $result;
}

/*
* moderator 
* 
*/

function getModerator($id)
{
	$result = '0';

	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT moderator   
				  FROM prochatrooms_users 
				  WHERE username = :id
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$result = $i['moderator']; 				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	return $result;
}

/*
* speaker 
* 
*/

function getSpeaker($id)
{
	$result = '0';
	
	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT speaker   
				  FROM prochatrooms_users 
				  WHERE username = :id
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$result = $i['speaker']; 				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
	
	return $result;
}

/*
* get user age 
* shows on profile
*/

function getUserAge($age)
{
	$html = '';
	$selected = ''; 

	for($i = 16; $i <= 100; $i++) 
	{
		if($i == $age)
		{
			$selected = 'SELECTED '; 
		}

		if($i < $age || $i > $age)
		{
			$selected = ''; 
		}

		$html .= "<option value='".$i."' ".$selected.">".$i."</option>"; 
	}

	return $html;
}

/*
* get user genders
* shows on login/profiles
*/

function getUserGenders($userGender)
{
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT gender    
				  FROM prochatrooms_config 
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$gender = $i['gender'];			
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	$html = '';

	$x = 1;

	$gender = explode(",", $gender);
	$genderArrayLength = count($gender);

	for ($i = 0; $i < $genderArrayLength; $i++)
	{
		if($x == $userGender)
		{
			$selected = 'SELECTED '; 
		}

		if($x < $userGender || $x > $userGender)
		{
			$selected = ''; 
		}

		$html .= "<option value='".$x."' ".$selected." >".$gender[$i]."</option>"; 

		$x++;
	}

	return $html;
}

/*
* get profile genders
* shows on profile
*/

function getProfileGenders($userGender)
{
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT gender    
				  FROM prochatrooms_config 
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$gender = $i['gender'];			
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	$gender = explode(",", $gender);

	// all arrays start @ 0
	// so lets subtract 1 for true gender
	$result = $gender[$userGender-1]; 

	return $result;
}

/*
* get user rooms 
* shows on login
*/

function getUserRooms($id)
{
	try {
		$dbh = db_connect();
		
		if(!$id)
		{		
			$params = array(
			'roomownerID' => '1',
			'roomName' => 'User Room'			
			);
			$query = "SELECT id, roomname    
					  FROM prochatrooms_rooms 
					  WHERE roomowner = :roomownerID
					  AND roomname != :roomName
					  ORDER BY id
					  ";	
		}
		else
		{
			// include files
			include(getDocPath()."includes/config.php");	

			// check roomID is numeric
			if(!is_numeric($id))
			{
				$id = $CONFIG['defaultRoom'];
			}
		
			$params = array(
			'roomownerID' => '1',
			'roomid' => makeSafe($id)	
			);
			$query = "SELECT id, roomname    
					  FROM prochatrooms_rooms 
					  WHERE roomowner = :roomownerID
					  AND id = :roomid 
					  ORDER BY id
					  ";			
		}
				  
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		$html = ''; 
					
		foreach ($action as $i) 
		{
			$html .= "<option value='".$i['id']."'>".urldecode($i['roomname'])."</option>"; 	
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		
	
	return $html;
}

/*
* get login news
* shows on login
*/

function getLoginNews()
{
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT news    
				  FROM prochatrooms_config 
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$html = stripslashes(urldecode($i['news']));				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	return $html;
}

/*
* copyright title
* 
*/

function copyrightTitle()
{
	// include files
	include(getDocPath()."includes/config.php");

	$html = "Powered by Pro Chat Rooms ".$CONFIG['version'];

	if(file_exists(getDocPath()."plugins/rembrand/index.php"))
	{
		$html = $CONFIG['chatroomName'];
	}

	return $html;
}

/*
* copyright footer
* 
*/

function copyrightFooter()
{
	// include files
	include(getDocPath()."includes/config.php");

	$html = "<span class='link'>&copy;<a href='http://prochatrooms.com'>Pro Chat Rooms</a> ".$CONFIG['version']."</span>";

	if(file_exists(getDocPath()."/plugins/rembrand/index.php"))
	{
		$html = "<span class='link'>&copy;".date("Y")." - <a href='".$CONFIG['chatroomUrl']."'>".$CONFIG['chatroomName']."</a></span>";	
	}

	return $html;
}

/*
* show profile image
* 
*/

function showImage($id)
{
	// strip tags
	if(!ctype_digit($id))
	{
		die("invalid id");
	}

	// reset image
	$image = '';

	// get user pic
	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT photo 
				  FROM prochatrooms_profiles 
				  WHERE id = :id
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$image = explode("|", $i['photo']);				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	if($image[0]!='image/jpeg' && $image[0]!='image/gif' && $image[0]!='image/pjpeg')
	{
		$image[0] = 'image/jpeg';
		$image[1] = 'nopic.jpg';
	}

	return array($image[0],$image[1]);

}

/*
* get user profile info
* 
*/

function userProfileInfo($id)
{
	// strip tags
	$id = strip_tags($id);

	try {
		$dbh = db_connect();
		$params = array(
		'id' => makeSafe($id)
		);
		$query = "SELECT prochatrooms_profiles.username, prochatrooms_profiles.real_name, prochatrooms_profiles.age, prochatrooms_profiles.gender, prochatrooms_profiles.location, prochatrooms_profiles.hobbies, prochatrooms_profiles.aboutme, prochatrooms_profiles.photo, prochatrooms_users.email  
				  FROM prochatrooms_profiles, prochatrooms_users
				  WHERE prochatrooms_profiles.id = prochatrooms_users.id
				  AND prochatrooms_profiles.id = :id
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$username = $i['username'];
			$real_name = $i['real_name'];
			$age = $i['age'];
			$gender = $i['gender'];
			$location = $i['location'];
			$hobbies = $i['hobbies'];
			$aboutme = $i['aboutme'];
			$email = $i['email'];

			$photo = explode("|", $i['photo']);
			$photo = $photo[1];			
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}		

	return array($username,$real_name,$age,$gender,$location,$hobbies,$aboutme,$photo,$email);

}

/*
* update user profile
* 
*/

function updateProfile($id,$profileRealname,$profileAge,$profileGender,$uploadedfile,$deleteImage,$imgID,$profileLocation,$profileHobbies,$profileAboutme,$profilePass,$profileEmail)
{
	// include files
	include(getDocPath()."lang/".$_SESSION['lang']);

	if(!is_numeric($id))
	{
		// invalid Session ID
		die("Invalid Session ID");
	}

	// make safe data
	$realname = makeSafe(urlencode($profileRealname));
	$age = makeSafe(urlencode($profileAge));
	$gender = makeSafe(urlencode($profileGender));
	$img = $uploadedfile;
	$location = makeSafe(urlencode($profileLocation));
	$hobbies = makeSafe(urlencode($profileHobbies));
	$aboutme = makeSafe(urlencode($profileAboutme));
	$password = makeSafe($profilePass);
	$email = makeSafe($profileEmail);

	$uploaddir = "uploads/";

	$ext_allowed = '0';

	$file_type = $_FILES['uploadedfile']['type'];
	$file_type_ext = array('image/pjpeg','image/gif','image/jpeg');

	$allowed_ext = array('jpg','gif');

	if(basename($_FILES['uploadedfile']['name']))
	{ // image is being uploaded

		if(in_array(strtolower(substr(basename($_FILES['uploadedfile']['name']), -3)), $allowed_ext))
		{ // check last 3 characters of basename()

			$ext_allowed='1';
		}

		if(in_array($file_type, $file_type_ext))
		{ // check mime type

			$ext_allowed='1';
		}

	}

	if(!$deleteImage)
	{ // set error reporting

		if(!$ext_allowed && basename($_FILES['uploadedfile']['name']))
		{ 
			// ext not allowed
			$image_result = "Invalid Image";
		}
		else
		{
			// error reporting for file uploads
			// http://www.php.net/manual/en/features.file-upload.errors.php
			define("C_IMG1","Error: The uploaded file exceeds the upload_max_filesize directive in php.ini.");
			define("C_IMG2","Error: The uploaded file exceeds the MAX_IMAGE_SIZE value that was specified in the config settings");
			define("C_IMG3","Error: The uploaded file was only partially uploaded.");
			define("C_IMG4",""); // empty
			define("C_IMG5",""); // empty
			define("C_IMG6","Error: Missing a temporary folder.");
			define("C_IMG7","Error: Failed to write file to disk.");
			define("C_IMG8","Error: A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help.");

			switch ($_FILES['uploadedfile']['error']) 
			{
    			case 1:
        			$image_result = C_IMG1;
        			break;
    			case 2:
        			$image_result = C_IMG2;
        			break;
    			case 3:
        			$image_result = C_IMG3;
        			break;
    			case 6:
        			$image_result = C_IMG6;
        			break;
    			case 7:
        			$image_result = C_IMG7;
        			break;
    			case 8:
        			$image_result = C_IMG8;
        			break;
    			default:
       				$image_result = '0';

			}

		}

	}

	$incImage = '';

	if($deleteImage)
	{ 
		if(file_exists($uploaddir.$imgID))
		{
			unlink($uploaddir.$imgID);

			$incImage = 'delete';

       		$image_result = C_LANG23;

		}
	}

	if($ext_allowed && !$image_error)
	{

		// PHP file upload reference
		// http://www.scanit.be/uploads/php-file-upload.pdf

		$uploadfile = $uploaddir.md5(basename($_FILES['uploadedfile']['name']).rand(1,99999).rand(1,99999));

		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile))
		{ // update the user details and image

			if(!chmod($uploadfile, 0644))
			{
				die("unable to chmod images to 644");
			}

			$incImage = 'update';
		}

		$imageUploaded = '1';

	}

	// update profile
	try {
		$dbh = db_connect();
		
		if(!$incImage)
		{ // no image update
			$params = array(
			'realname' => $realname,
			'gender' => $gender,
			'age' => $age,
			'location' => $location,
			'hobbies' => $hobbies,
			'aboutme' => $aboutme,	
			'id' => $id				
			);
			$query = "UPDATE prochatrooms_profiles 
					  SET 
					  real_name = :realname,
					  gender = :gender, 
					  age = :age, 
					  location = :location, 
					  hobbies = :hobbies, 
					  aboutme = :aboutme
					  WHERE id = :id
					  ";	
		}
		else
		{ // inc. update/delete image
		
			if($incImage == 'update')
			{
				$img = makeSafe($_FILES['uploadedfile']['type'])."|".makeSafe(basename($uploadfile));
			}
			
			if($incImage == 'delete')
			{
				$img = '';
			}
		
			$params = array(
			'realname' => $realname,
			'gender' => $gender,
			'age' => $age,
			'location' => $location,
			'hobbies' => $hobbies,
			'aboutme' => $aboutme,	
			'id' => $id,
			'image' => $img,			
			);
			$query = "UPDATE prochatrooms_profiles 
					  SET 
					  real_name = :realname,
					  gender = :gender, 
					  age = :age, 
					  location = :location, 
					  hobbies = :hobbies, 
					  aboutme = :aboutme,
					  photo = :image
					  WHERE id = :id
					  ";			
		}
				  
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	
	
	// update user info
	try {
		$dbh = db_connect();
		
		if($password[1]!='')
		{
			$params = array(
			'password' => md5($password),
			'email' => makeSafe($email),
			'id' => $id
			);
			$query = "UPDATE prochatrooms_users 
					  SET email = '".$email."', 
					      password='".md5($password)."' 
					  WHERE id = '".$id."'
					  ";
		}
		else
		{
			$params = array(
			'email' => makeSafe($email),
			'id' => $id
			);
			$query = "UPDATE prochatrooms_users 
					  SET email = '".$email."'
					  WHERE id = '".$id."'
					  ";		
		}
		
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	// profile updated status/error messages
	$profile_updated = $image_result;

	if(!$profile_updated)
	{
		$profile_updated = C_LANG24;
	}

	if(!$image_error && $imageUploaded)
	{
		$profile_updated = C_LANG25;
	}	

	return $profile_updated;	
}

/*
* eCredits
*
*/

function eCredits($id)
{
	// include files
	include(getDocPath()."includes/config.php");

	// if eCredits session not set
	if(!$_SESSION['eCredits_start'])
	{
		$_SESSION['eCredits_start'] = date("U");
	}
	else
	{
		// update count on page refresh
		$_SESSION['eCredits'] =  date("U") - $_SESSION['eCredits_start'];
	}

	// if 60 secs, update eCredits count
	if($_SESSION['eCredits'] >= '60')
	{
		// deduct credit from sender
		try {
			$dbh = db_connect();
			$params = array(
			'eCredits' => $CONFIG['eCredits'],
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "UPDATE prochatrooms_users 
					  SET eCredits = eCredits - :eCredits 
					  WHERE username = :username
					  AND eCredits > '0'
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		

		// check user has ecredits to pay receiver
		try {
			$dbh = db_connect();
			$params = array(
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "SELECT eCredits   
					  FROM prochatrooms_users 
					  WHERE username = :username
					  LIMIT 1
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);
			
			$updateeCredits = '0';
						
			foreach ($action as $i) 
			{
				if($i['eCredits'] > 0)
				{
					$updateeCredits = '1';
				}					
			}
			
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}

		// if user has eCredits
		if($updateeCredits)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'eCredits' => $CONFIG['eCredits'],
				'id' => makeSafe($id)
				);
				$query = "UPDATE prochatrooms_users 
						  SET eCreditsEarned = eCreditsEarned + :eCredits 
						  WHERE id = :id
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);	
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Function: ".__FUNCTION__."\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}		
		}
	
		// reset eCredit count
		$_SESSION['eCredits_start'] = date("U");
	}
}

/*
* lost password
*
*/

function resetPassword($data)
{
	// include files
	include(getDocPath()."includes/session.php");
	include(getDocPath()."includes/db.php");
	include(getDocPath()."lang/".$_SESSION['lang']);
	
	$email = $data['userEmail'];
	$uCaptcha = $data['uCaptcha'];	
	$sCaptcha = $data['sCaptcha'];

	$error = validEmail($email);

	if($error)
	{
		return C_LANG26;
	}

	if($uCaptcha != $sCaptcha)
	{
		return C_LANG158;
	}

	$userFound = '0';

	try {
		$dbh = db_connect();
		$params = array(
		'email' => makeSafe($email)
		);
		$query = "SELECT username, email  
				  FROM prochatrooms_users 
				  WHERE email = :email
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		$result = '0';
					
		foreach ($action as $i) 
		{
			$result = '1';		
			$sendToUser = $i['username'];
			$sendToEmail = $i['email'];			
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}

	if($result)
	{
		$userFound = '1';

		$newpass = substr(md5(date("U").rand(1,99999)), 0, -20);

		// update users password
		try {
			$dbh = db_connect();
			$params = array(
			'password' => md5($newpass),
			'email' => makeSafe($email)
			);
			$query = "UPDATE prochatrooms_users 
					  SET password = :password
					  WHERE email = :email
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		
	
		// send email with new password
		sendUserEmail('',$sendToUser,$sendToEmail,$newpass,'1');

		return C_LANG27;	
	}
	
	if(!$userFound)
	{
		return C_LANG28;
	}
}

/*
* send email
*
*/

function sendUserEmail($id,$username,$email,$newpass,$status)
{
	// include files
	include(getDocPath()."includes/session.php");
	include(getDocPath()."includes/config.php");
	include(getDocPath()."lang/".$_SESSION['lang']);

	// create headers
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"" . $CONFIG['chatroomName'] . "\" <" . $CONFIG['chatroomEmail'] . ">\n";

	// send lost password
	if($status == '1')
	{
		$email_subject  = $CONFIG['chatroomName']." - ".C_LANG29;
		$email_message  = C_LANG30." ".urldecode($username).",\r\n\r\n";
		$email_message .= C_LANG31.": ".$newpass."\r\n\r\n";
		$email_message .= C_LANG32."\r\n\r\n";
		$email_message .= C_LANG33.",\r\n";
		$email_message .= $CONFIG['chatroomName'];
	}

	// send confirmation register email
	if($status == '2')
	{
		$email_subject = $CONFIG['chatroomName']." - ".C_LANG34;
		$email_message  = C_LANG30." ".urldecode($username).",\r\n\r\n";
		$email_message .= C_LANG35.": ".$CONFIG['chatroomName']."\r\n\r\n";
		$email_message .= C_LANG36.",\r\n\r\n";
		$email_message .= $CONFIG['chatroomUrl']."?nReg=".$id."&email=".$email."\r\n\r\n";
		$email_message .= C_LANG33.",\r\n";
		$email_message .= $CONFIG['chatroomName'];
	}

	mail($email, $email_subject, $email_message, $headers);

}

/*
* send admin email
*
*/

function sendAdminEmail($status,$report,$message)
{
	// include files
	include(getDocPath()."includes/config.php");

	if(!$_SESSION['username'])
	{
		return "no access";
	}

	if(empty($message))
	{
		return C_LANG65." [<a href=\"javascript:history.go(-1)\">".C_LANG159."</a>]";
	}

	if(!$_POST['sCaptcha'] || $_POST['sCaptcha'] != $_POST['uCaptcha'])
	{
		return C_LANG158." [<a href=\"javascript:history.go(-1)\">".C_LANG159."</a>]";
	}

	// create headers
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"" . $CONFIG['chatroomName'] . "\" <" . $CONFIG['chatroomEmail'] . ">\n";

	// send confirmation register email
	if($status == '1')
	{
		$email_subject = $CONFIG['chatroomName']." - ".C_LANG37;
		$email_message  = C_LANG38.",\r\n\r\n";
		$email_message .= C_LANG39." ".$_SESSION['username']." ".C_LANG40.": ".urldecode($report)."\r\n\r\n";
		$email_message .= C_LANG41.":\r\n\r\n";
		$email_message .= $message."\r\n\r\n";
		$email_message .= C_LANG33.",\r\n";
		$email_message .= $CONFIG['chatroomName'];
	}

	if(empty($message))	
	{
		return C_LANG42;
	}

	if(isset($_SESSION['lastReportAgainst']) && $_SESSION['lastReportAgainst'] == $report)
	{
		return C_LANG43;
	}

	if($_SESSION['username'])
	{
		$_SESSION['lastReportAgainst'] = $report;

		mail($CONFIG['chatroomEmail'], $email_subject, $email_message, $headers);

		return C_LANG44;
	}

}

/*
* confirm email register
*
*/

function confirmReg($id,$email)
{
	// include files
	include(getDocPath()."includes/session.php");
	include(getDocPath()."lang/".$_SESSION['lang']);

	$confirm = '0';

	// check users account status		
	try {
		$dbh = db_connect();
		$params = array(
		'enabled' => makeSafe($id),
		'email' => makeSafe($email)		
		);
		$query = "SELECT enabled,email  
				  FROM prochatrooms_users 
				  WHERE enabled = :enabled
				  AND email = :email
				  LIMIT 1
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$confirm = $action->rowCount();		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}				

	if($confirm)
	{
		// enable user account
		try {
			$dbh = db_connect();
			$params = array(
			'id' => makeSafe($id)
			);
			$query = "UPDATE prochatrooms_users 
					  SET enabled = '1' 
					  WHERE enabled = :id
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Function: ".__FUNCTION__."\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		

		return C_LANG45;
	}

	if(!$confirm)
	{
		return C_LANG46;
	}

}

/*
* get transcripts
*
*/

function getTranscripts($room)
{
	// include files
	include(getDocPath()."includes/session.php");
	include(getDocPath()."includes/config.php");
	include(getDocPath()."lang/".$_SESSION['lang']);

	// check room id is numeric
	if(!is_numeric($room))
	{
		return "Invalid RoomID";
		die;
	}

	// check active session
	if(!$_SESSION['username'])
	{
		return C_LANG47;
		die;
	}

	// get user blocked list		
	try {
		$dbh = db_connect();
		$params = array(
		'username' => $_SESSION['username']
		);
		$query = "SELECT blocked   
				  FROM prochatrooms_users 
				  WHERE username = :username
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			$blocked = explode('|', $i['blocked']);				
		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

	$blocked = implode(',', $blocked);
	$blocked = substr($blocked, 1, -1);
	$blocked = str_replace(",,",",",$blocked);

	// get transcripts	
	try {
		$dbh = db_connect();
		
		if($blocked)
		{
			$params = array(
			'transcriptID' => $_SESSION['transcriptsID'],
			'room' => makeSafe($room),
			'blockedIDs' => $blocked,			
			);
			$query = "SELECT messtime, room, username , tousername, message   
					  FROM prochatrooms_message
					  WHERE id >= :transcriptID
					  AND room = :room
					  AND uid NOT IN (:blockedIDs)
					  ";			
		}
		else
		{
			$params = array(
			'transcriptID' => $_SESSION['transcriptsID'],
			'room' => makeSafe($room)			
			);
			$query = "SELECT messtime, room, username , tousername, message   
					  FROM prochatrooms_message
					  WHERE id >= :transcriptID
					  AND room = :room
					  ";		
		}

		$action = $dbh->prepare($query);
		$action->execute($params);				
					
		$html ="<table class='table' width='100%' style='background-color:#333333;'>";
		$html .="<tr class='header' style='color:#FFFFFF'><td>".C_LANG49."</td><td>".C_LANG50."</td><td>".C_LANG51."</td><td>".C_LANG52."</td><td>".C_LANG53."</td></tr>";

		foreach ($action as $i) 
		{
			if(!invisibleAdmins($i['username']))
			{
				if($i['tousername'] == '' || $i['tousername'] == $_SESSION['username'])
				{
					// explode message
					$i['message'] = explode("|", urldecode($i['message']));

					// format message
					$i['message'][4] = str_replace("[u]","",$i['message'][4]);
					$i['message'][4] = str_replace("[/u]","",$i['message'][4]);
					$i['message'][4] = str_replace("[i]","",$i['message'][4]);
					$i['message'][4] = str_replace("[/i]","",$i['message'][4]);
					$i['message'][4] = str_replace("[b]","",$i['message'][4]);
					$i['message'][4] = str_replace("[/b]","",$i['message'][4]);

					$i['message'][4] = str_replace("[[","<",$i['message'][4]);
					$i['message'][4] = str_replace("]]",">",$i['message'][4]);

					$message = "<span style=\"color:".$i['message'][1].";font-size:".$i['message'][2].";font-family:".$i['message'][3].";\">".html_entity_decode(stripslashes($i['message'][4]))."</span>";

					// add <pre> if required
					// used for formatting multi-line messages.
					if($i['message'][6]=='1')
					{
						$message = "<pre>".$message."</pre>";
					}

					// if receiver is empty
					if(!$i['tousername'])
					{
						$i['tousername'] = 'Room';
					}

					// final output
					$html .= "<tr class='row' valign='top'><td>".date("H:i:s",$i['messtime'])."</td><td align='center'>".urldecode($i['room'])."</td><td>".urldecode($i['username'])."</td><td>".urldecode($i['tousername'])."</td><td>".$message."</td></tr>";
				}	

			}

		}
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

	$html .="</table>";

	return $html;

}

/*
* ban/kick user
*
*/

function banKickUser($message, $toname)
{
	// include files
	include(getDocPath()."includes/config.php");

	try {
		$dbh = db_connect();
		
		if($message == 'KICK')
		{
			$kickTime = $CONFIG['kickTime'] * 60;
			$dropKick = getTime()+$kickTime;
			
			$params = array(
			'kick' => $dropKick,
			'username' => makeSafe($toname),
			);
			$query = "UPDATE prochatrooms_users
					  SET kick = :kick
					  WHERE username = :username
					  ";
		}
		
		if($message == 'BAN')
		{
			$params = array(
			'username' => makeSafe($toname)
			);
			$query = "UPDATE prochatrooms_users
					  SET ban = '1'
					  WHERE username = :username
					  ";
		}		
	  
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	// set user to offline
	try {
		$dbh = db_connect();
		$params = array(
		'active' => getTime()-180,
		'username' => makeSafe($toname)
		);
		$query = "UPDATE prochatrooms_users 
				  SET active = '".$offlineTime."', online = '0' 
				  WHERE username = '".makeSafe($toname)."'
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);	
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

}

/*
* get users online
*
*/

function getUsersOnline($id)
{
	// include files
	include(getDocPath()."includes/session.php");
	include(getDocPath().'includes/db.php');
	include(getDocPath().'includes/config.php');
	include(getDocPath()."lang/".$_SESSION['lang']);

	try {
		$dbh = db_connect();
		$params = array(
		'online' => getTime()-30
		);
		$query = "SELECT prochatrooms_users.username, prochatrooms_users.avatar, prochatrooms_rooms.roomname   
				  FROM prochatrooms_users, prochatrooms_rooms
				  WHERE prochatrooms_users.active >= :online
				  AND prochatrooms_users.room = prochatrooms_rooms.id
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();		
		
		if($id == 1)
		{
			// display users online count
			return $count;
		}

		if($id == 2)
		{
			// display users online table
			$html = "";
			$html .= "<table class='table'>";
			$html .= "<tr class='header'><td>".C_LANG54."</td><td>".C_LANG50."</td></tr>";
			
			foreach ($action as $i) 
			{
				if($CONFIG['invisibleAdminsPlugin'] && getAdmin($i['username']))
				{
					// hide admin user
				}
				else
				{
					$html .= "<tr><td><img src='../../avatars/".$i['avatar']."' style='vertical-align:middle;'>&nbsp;".urldecode($i['username'])."</td><td>".urldecode($i['roomname'])."</td></tr>";
				}
			}

			$html .= "</table>";

			return $html;
		}		
		
		$dbh = null;
	}
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			
}

/*
* get room owner
*
*/

function getRoomOwner()
{
	try {
		$dbh = db_connect();
		$params = array(
		'roomowner' => $_SESSION['myProfileID']
		);
		$query = "SELECT id  
				  FROM prochatrooms_rooms 
				  WHERE roomowner = :roomowner
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}			

	return $count;
}

/*
* get users IP
*
*/

function getIP()
{
	return $_SERVER['REMOTE_ADDR'];
}

/*
* get IP ban list
*
*/

function getIPBanList($id)
{
	try {
		$dbh = db_connect();
		$params = array(
		'userIP' => $id
		);
		$query = "SELECT id  
				  FROM prochatrooms_users 
				  WHERE userIP = :userIP
				  AND ban = '1'
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();		
			
		$dbh = null;
	}				
	catch(PDOException $e) 
	{
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	return $count;	
}

/*
* remove branding
* requires remove branding plugin
*/

function remBrand()
{
	// include files
	include(getDocPath()."includes/config.php");

	$remBranding = '1';

	if(file_exists(getDocPath()."plugins/rembrand/index.php"))
	{
		$remBranding = '0';
	}

	return $remBranding;
}

/*
* check events
* requires event plugin
*/

function checkEvent()
{
	// include files
	include(getDocPath()."includes/config.php");

	if($CONFIG['eventsPlugin'])
	{
		if(file_exists(getDocPath()."plugins/events/index.php"))
		{
			include(getDocPath()."plugins/events/index.php");

			return doEvent($event_day,$event_start_hour,$event_start_mins,$event_stop_hour,$event_stop_mins,$server_time,$region_time);
		}
	}
}

/*
* virtual credits
* requires virtual credits plugin
*/

function virtualCredits()
{
	// include files
	include(getDocPath()."includes/config.php");

	if($CONFIG['virtualCreditsPlugin'])
	{
		if(file_exists(getDocPath()."plugins/virtual_credits/index.php"))
		{
			include(getDocPath()."plugins/virtual_credits/index.php");
		}
	}
}

/*
* moderated chat
* requires moderated chat plugin
*/

function moderatedChat()
{
	// include files
	include(getDocPath()."includes/config.php");

	$result = '0';

	if($CONFIG['moderatedChatPlugin'])
	{
		if(file_exists(getDocPath()."plugins/moderated_chat/index.php"))
		{
			$result = '1';
		}
	}

	return $result;
}

/*
* invisible admins
* requires invisible admins plugin
*/

function invisibleAdmins($username)
{
	// include files
	include(getDocPath()."includes/config.php");

	$result = '0';

	if($CONFIG['invisibleAdminsPlugin'])
	{
		if(file_exists(getDocPath()."plugins/invisible/index.js.php"))
		{
			$result = getAdmin($username);
		}
	}

	return $result;
}

/*
* autoload plugins
* @Param $page Page
*/

function showPlugins($page)
{
	$html ='';
	$plugin ='';
	
	if($page == "login" && file_exists(getDocPath()."plugins/login_gallery/index.php"))
	{
		$html .= '<!-- login gallery -->';
		$html .= '<script type="text/javascript" src="plugins/login_gallery/index.php"></script>';
		
		$plugin .= 'showGallery();';
	}
	
	if(($page == "login" || $page = "main") && file_exists(getDocPath()."plugins/adver/functions.js"))
	{	
		$html .= '<!-- Adverts Plugin -->';
		$html .= '<script type="text/javascript">var refreshBanner = 30;</script>';
		$html .= '<script type="text/javascript" src="plugins/adver/functions.js"></script>';
		
		$plugin .= 'showBannerAds();';		
	}
	
	if($page == "main" && file_exists(getDocPath()."plugins/share/index.php"))
	{		
		$html .= '<!-- Share Files Plugin -->';
		$html .= '<script type="text/javascript">var share = 1;</script>';
		
		$plugin .= '';			
	}
	
	if($page == "main" && file_exists(getDocPath()."plugins/webcams/js/functions.js"))
	{		
		$html .= '<!-- Webcam Plugin -->';
		$html .= '<script type="text/javascript" src="plugins/webcams/js/functions.js"></script>';	
		
		$plugin .= 'showCam();';			
	}
	
	if($page == "main" && file_exists(getDocPath()."plugins/invisible/index.js.php"))
	{		
		$html .= '<!-- Invisible Admins Plugin -->';
		$html .= '<script type="text/javascript" src="plugins/invisible/index.js.php"></script>';	
		
		$plugin .= '';			
	}	
	
	$html .= '<script type="text/javascript">';
	$html .= 'window.onload = function()';
	$html .= '{';
	
	if($page == "main")
	{
		$html .= 'initAll();';
	}
	
	$html .= $plugin;	
	$html .= '}';
	$html .= '</script>';
	
	return $html;
}
	
?>