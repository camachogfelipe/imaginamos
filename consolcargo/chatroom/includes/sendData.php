<?php

/*
* include files
*
*/

include("ini.php");
include("session.php");
include("functions.php");
include("config.php");


if(getModeratorOnline() === 0) {
      header('Location: index.php');
      exit(); 
} 

/*
* set time of last post
*
*/

$_SESSION['userLastPost'] = getTime();

/*
* check data before sending to DB
*
*/ 

function checkData($data)
{
	$key = 'index.php?logout';

	$pos = strpos(strtolower($data), $key);

	if ($pos !== false) 
	{
		die($data." contains invalid characters");
	}
	else
	{
		return $data;
	}

}

function checkNumeric($data)
{
	if(!is_numeric($data))
	{
		die($data." value not numeric");		
	}
	else
	{
		return $data;
	} 
}

/*
* eCredits
*
*/

if(isset($_POST['eCreditID']))
{
	if(checkNumeric($_POST['eCreditID']) && $_POST['eCreditStatus'] == 'on')
	{
		$_SESSION['eCreditsInit'] = '1';

		if(!checkNumeric($_POST['eCreditID']))
		{
			 $_POST['eCreditID'] = '0';
		}

		$_SESSION['eCreditsAwardTo'] = $_POST['eCreditID'];
		$_SESSION['eCredits_start'] = date("U");
	}
	else
	{
		unset($_SESSION['eCreditsInit']);
		unset($_SESSION['eCreditsAwardTo']);
		unset($_SESSION['eCredits_start']);
	}
}

/*
* send data to database
*
*/

if($_POST)
{
	// default share
	$share = '0';

	// check data
	$_POST['umessage'] = !isset($_POST['umessage']) ? "" : checkData($_POST['umessage']);

	// check data & strip tags
	$_POST['toname'] = !isset($_POST['toname']) ? "" : checkData(strip_tags($_POST['toname']));
	$_POST['umid'] = !isset($_POST['umid']) ? "" : checkData(strip_tags($_POST['umid']));
	$_POST['newRoomName'] = !isset($_POST['newRoomName']) ? "" : checkData(strip_tags($_POST['newRoomName']));
	
	// check data is numeric
	$_POST['uid'] = !isset($_POST['uid']) ? "0" : checkNumeric($_POST['uid']);
	$_POST['room'] = !isset($_POST['room']) ? "0" : checkNumeric($_POST['room']);
	$_POST['addRoom'] = !isset($_POST['addRoom']) ? "0" : checkNumeric($_POST['addRoom']);
	$_POST['newRoomOwner'] = !isset($_POST['newRoomOwner']) ? "0" : checkNumeric($_POST['newRoomOwner']);
	$_POST['status'] = !isset($_POST['status']) ? "0" : checkNumeric($_POST['status']);
	$_POST['status'] = !isset($_POST['status']) ? "0" : checkNumeric($_POST['status']);
	
	// send message
	if(isset($_POST['umessage']) && !empty($_POST['umessage']))
	{
		// get senders permissions
		list($admin,$mod,$speaker) = adminPermissions();
		
		// get toUser permissions
		list($toUseradmin,$toUsermod,$toUserspeaker) = toUserPermissions($_POST['toname']);		
	
		// if kick or ban, for mobile compatibility 
		$explodeMessage = explode('|', $_POST['umessage']);
		if((!$admin && !$mod) && ($explodeMessage[4] == '/kick' || $explodeMessage[4] == '/ban'))
		{		
			die("cannot /kick or /ban, incorrect permissions");
		}
		
		// if kick or ban
		if($_POST['umessage'] == 'KICK' || $_POST['umessage'] == 'BAN')
		{
			// if user is admin or mod
			if($admin || $mod)
			{
				// prevent admins from kicking each other
				if($toUseradmin)
				{
					return;				
				}
				else
				{
					// ban/kick user
					banKickUser($_POST['umessage'], $_POST['toname']);
				}				
			}

			// if user is room owner
			if($_POST['umessage'] == 'KICK' && getRoomOwner())
			{
				// prevent admins from kicking each other
				if($toUseradmin)
				{
					return;				
				}
				else
				{
					// ban/kick user
					banKickUser($_POST['umessage'], $_POST['toname']);
				}	
			}
		}

		// if silence
		if($_POST['umessage'] == 'SILENCE' && (!$admin && !$mod && !getRoomOwner()))
		{
			die("cannot silence, incorrect permissions");
		} 
		
		// prevent admins/mods from being silenced
		if(!$admin && ($_POST['umessage'] == 'SILENCE' && ($toUseradmin || $toUsermod)))
		{
            die("cannot silence admins/mods, incorrect permissions");
		}	
		
		// prevent admins/mods from being kicked
		if(!$admin && ($_POST['umessage'] == 'KICK' && ($toUseradmin || $toUsermod)))
		{
            die("cannot kick admins/mods, incorrect permissions");
		}		
		
		// if public webcam view, add stream id
		if($_POST['umessage'] == 'WEBCAM_ACCEPT')
		{
			$_POST['umessage'] = 'WEBCAM_ACCEPT||'.$_SESSION['myStreamID'];
		}

		// send message

		$chatMessTableName = "prochatrooms_message";

		if($CONFIG['moderatedChatPlugin'] && moderatedChat())
		{
			$chatMessTableName = "prochatrooms_moderated";

			if($admin || $mod || $speaker)
			{
				$chatMessTableName = "prochatrooms_message";
			}	
		}

		if(!file_exists("../sounds/".$_POST['usfx']))
		{
			$_POST['usfx'] = "beep_high.mp3";
		}

		// add message to db
		// message = userAvatar+"|"+textColor+"|"+textSize+"|"+textFamily+"|"+message+"|"+iRC+"|"+addLineBreaks;
		// runs some pre checks for message
		// if any fail, DONT submit data, data is invalid

		$checkMessage = explode("|",$_POST['umessage']);

		if($checkMessage[4])
		{
			// prevent any malicious doc path injections for avatars
			$checkMessage[0] = str_replace("../","",$checkMessage[0]);

			// check file exists
			if($checkMessage[0]!='0' && $checkMessage[0]!='1' && !file_exists(dirname(dirname(__FILE__))."/avatars/".$checkMessage[0]))
			{
				die("avatar is invalid");
			}

			// is text color valid?
			if(!ctype_alnum(str_replace("#","",$checkMessage[1])))
			{
				die("text color is invalid");
			}

			// is text size valid?
			if(!is_numeric(str_replace("px","",$checkMessage[2])))
			{
				die("text size is invalid");
			}

			// is text family valid?
			// check for alphanumeric value
			if(!ctype_alnum(str_replace(" ","",$checkMessage[3])))
			{
				die("text family is invalid");
			}

			// is IRC numeric?
			if($checkMessage[5] && !is_numeric($checkMessage[5]))
			{
				die("IRC value is invalid");
			}

			// is linebreaks numeric?
			if($checkMessage[6] && !is_numeric($checkMessage[6]))
			{
				die("linebreak value is invalid");
			}

			// is message shared? (eg. broadcast)
			if(
				stristr($checkMessage[4],"BROADCAST") && $admin || 
				stristr($checkMessage[4],"BROADCAST") && $mod 
			)
			{ $share = '1'; }

			if(
				stristr($checkMessage[4],"BROADCAST") && !$admin && 
				stristr($checkMessage[4],"BROADCAST") && !$mod 
			)
			{ die("incorrect permissions"); }
		}

		// if intelli-bot is enabled
		if($CONFIG['intelliBot'] && !$_POST['uname'] && $_SESSION['username'])
		{
			$senderName = $CONFIG['intelliBotName'];			
		}
		else
		{
			$senderName = $_SESSION['username'];
		}

		// if user is not silenced
		if(!$_SESSION['silenceStart'] || $_SESSION['silenceStart'] < ( date("U") - $CONFIG['silent']*60 ) )	
		{
			unset($_SESSION['silenceStart']);

         	if(!$senderName || empty($senderName))
         	{
            	die("invalid username");
         	}
		
			// add message
			try {
				$dbh = db_connect();
				$params = array(
				'uid' => makeSafe($_POST['uid']),
				'mid' => makeSafe($_POST['umid']),
				'username' => makeSafe($senderName), 
				'tousername' => makeSafe($_POST['toname']), 
				'message' => makeSafe($_POST['umessage']), 
				'sfx' => makeSafe($_POST['usfx']),
				'room' => makeSafe($_POST['uroom']),
				'share' => $share,
				'messtime' => getTime()
				);
				$query = "INSERT INTO ".$chatMessTableName."
										(
											uid,
											mid,
											username, 
											tousername, 
											message, 
											sfx,
											room,
											share,
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
											:share,
											:messtime
										)
										";
				$action = $dbh->prepare($query);
				$action->execute($params);
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Action: Send Message to DB\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";
				
				debugError($error);
			}			

			// update users active time
			try {
				$dbh = db_connect();
				$params = array(
				'lastActive' => getTime(),
				'username' => makeSafe($_SESSION['username']),
				);
				$query = "UPDATE prochatrooms_users 
						  SET lastActive = :lastActive
						  WHERE username = :username
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);	
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Action: Update Users Active Time\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}			
		}
	}

	// update avatar
	if(isset($_POST['uavatar']))
	{
		if(file_exists("../avatars/".$_POST['uavatar']))
		{
			try {
				$dbh = db_connect();
				$params = array(
				'avatar' => makeSafe($_POST['uavatar']),
				'username' => makeSafe($_SESSION['username'])
				);
				$query = "UPDATE prochatrooms_users
						  SET avatar = :avatar
						  WHERE username = :username
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);	
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Action: Post Avatar\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}			
		}
	}

	// add user room
	if(isset($_POST['addRoom']))
	{
		// password encryption
		if(!empty($_POST['newRoomPass']))
		{
			$_POST['newRoomPass'] = md5($_POST['newRoomPass']);
		}

		// check room exists
		try {
			$dbh = db_connect();
			$params = array(
			'newRoomName' => makeSafe($_POST['newRoomName'])
			);
			$query = "SELECT roomname   
					  FROM prochatrooms_rooms  
					  WHERE roomname = :newRoomName
					  LIMIT 1
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);
			$count = $action->rowCount();
			
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Action: Check Room Exists\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			

		if($count < 1)
		{
			// if room doesnt exist
			if($_POST['newRoomName'])
			{
				if(validChars($_POST['newRoomName']))
				{
					die("invalid room name");
				}

				// create room
				try {
					$dbh = db_connect();
					$params = array(
					'id' => getTime(),
					'roomname' => makeSafe($_POST['newRoomName']),
					'roomowner' => makeSafe($_POST['newRoomOwner']), 
					'roompassword' => makeSafe($_POST['newRoomPass']), 
					'roomusers' => '0', 
					'roomcreated' => getTime()
					);
					$query = "INSERT INTO prochatrooms_rooms
										(
											id,
											roomname,
											roomowner, 
											roompassword, 
											roomusers, 
											roomcreated
										) 	
										VALUES 
										(
											:id,
											:roomname,
											:roomowner, 
											:roompassword, 
											:roomusers, 
											:roomcreated
										)
										";							
					$action = $dbh->prepare($query);
					$action->execute($params);	
					$dbh = null;
				}
				catch(PDOException $e) 
				{
					$error  = "Action: Add New Room\n";
					$error .= "File: ".basename(__FILE__)."\n";	
					$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

					debugError($error);
				}				

			}
	
		}
		else
		{
			try {
				$dbh = db_connect();
				$params = array(
				'roomcreated' => getTime(),
				'newRoomName' => makeSafe($_POST['newRoomName'])
				);
				$query = "UPDATE prochatrooms_rooms 
						  SET roomcreated = :roomcreated 
						  WHERE roomname = :newRoomName
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);	
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Action: Update Room\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}			
		}
	}

	// update webcam status
	if(isset($_POST['myWebcamIs']))
	{
		$result = '0';

		if($_POST['myWebcamIs'] == 'on')
		{
			$webcamStatus = '1';
			$result = '1';
		}

		if($_POST['myWebcamIs'] == 'off')
		{
			$webcamStatus = '0';
			$result = '1';
		}

		if($result == '1')
		{
			try {
				$dbh = db_connect();
				$params = array(
				'webcamStatus' => makeSafe($webcamStatus),
				'username' => makeSafe($_SESSION['username'])
				);
				$query = "UPDATE prochatrooms_users 
						  SET webcam = :webcamStatus
						  WHERE username = :username
						  ";							
				$action = $dbh->prepare($query);
				$action->execute($params);	
				$dbh = null;
			}
			catch(PDOException $e) 
			{
				$error  = "Action: Update Webcam Status\n";
				$error .= "File: ".basename(__FILE__)."\n";	
				$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

				debugError($error);
			}			
		}

	}

	// watching cam
	if(isset($_POST['watching']))
	{
		try {
			$dbh = db_connect();
			$params = array(
			'watching' => makeSafe($_POST['watching']),
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "UPDATE prochatrooms_users 
					  SET watching = :watching
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Action: Watching Cam\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		
	}

	// update user status
	if(isset($_POST['status']) && ctype_alnum($_POST['status']))
	{
		try {
			$dbh = db_connect();
			$params = array(
			'status' => makeSafe($_POST['status']),
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "UPDATE prochatrooms_users 
					  SET status = :status
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Action: Update User Status\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}		
	}

	// update blocked list
	if(isset($_POST['myBlockList']))
	{
		try {
			$dbh = db_connect();
			$params = array(
			'blocked' => makeSafe($_POST['myBlockList']),
			'username' => makeSafe($_SESSION['username'])
			);
			$query = "UPDATE prochatrooms_users 
					  SET blocked = :blocked
					  WHERE username = :username
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);	
			$dbh = null;
		}
		catch(PDOException $e) 
		{
			$error  = "Action: Update Blocked List\n";
			$error .= "File: ".basename(__FILE__)."\n";	
			$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

			debugError($error);
		}			
	}
}

?>