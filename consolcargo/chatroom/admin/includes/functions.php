<?php

/*
* get admin login
*
*/

function getAdminLogin()
{
	if($_SESSION['adminUser'])
	{
		unset($_SESSION['adminUser']);
	}

	// get captcha text
	$showCaptcha = getCaptchaText();

	$html  = '';
	$html  = '<input type="hidden" name="sCaptcha" value="'.$showCaptcha.'">';
	$html .= '<tr><td class="header" colspan="2">Admin Area - Login</td></tr>';
	$html .= '<tr><td width="100">Username</td><td><input type="text" name="uName" value=""></td></tr>';
	$html .= '<tr><td>Password</td><td><input type="password" name="uPass" value=""></td></tr>';
	$html .= '<tr><td>Enter Code</td><td><input type="text" size="6" name="uCaptcha" value="">&nbsp;<span class="captcha">'.$showCaptcha.'</span></td></tr>';

	$html .= '<tr><td>&nbsp;</td><td><input style="cursor:pointer;" type="submit" name="submit" value="Login"></td></tr>';

	include("../includes/config.php");
	
	if($CONFIG['showAdminResetPasswordLink']){
		$html .= '<tr><td>&nbsp;</td><td>&#187;&nbsp;<a href="?option=lostPassword">Reset Password?</a></td></tr>';
	}
	
	return $html;
}

/*
* check admin login
*
*/

function updateAdminLogin($data)
{
	$result = '0';

	if(empty($data['uName']))
	{
		return "Please enter your login name.";
	}
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT admin, adminLogin FROM prochatrooms_config";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			if(stristr($i['admin'],$data['uName']) && $i['adminLogin'] == md5($data['uPass']) && $data['sCaptcha'] == $data['uCaptcha'])
			{
				// is admin
				$_SESSION['adminUser'] = '1';

				$result = "1";	
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

	return $result;	
}

/*
* reset admin password
*
*/

function resetAdminLogin($status)
{
	// include files
	include("../includes/config.php");

	// create a random password 
	$newPass = substr(md5(date("U").rand(1,99999)),0,-16);

	// insert into database
	try {
		$dbh = db_connect();
		$params = array(
		'password' => md5($newPass)
		);
		$query = "UPDATE prochatrooms_config 
				  SET adminLogin = :password 
				  WHERE id = '1'
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

	// create headers
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"" . $CONFIG['chatroomName'] . "\" <" . $CONFIG['chatroomEmail'] . ">\n";

	// send email
	if($status == '1')
	{
		$email_subject = $CONFIG['chatroomName']." - Admin Area Password";
		$email_message  = "Hello Admin,\r\n\r\n";
		$email_message .= "Please find below your admin area login password,\r\n\r\n";
		$email_message .= "Password: ".$newPass."\r\n\r\n";
		$email_message .= "Login Url: ".$CONFIG['chatroomUrl']."admin/\r\n\r\n";
		$email_message .= "Many thanks,\r\n";
		$email_message .= $CONFIG['chatroomName'];
	}

	mail($CONFIG['chatroomEmail'], $email_subject, $email_message, $headers);
}

/*
* get config settings
*
*/

function getAdminConfig()
{
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT * FROM prochatrooms_config";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		foreach ($action as $i) 
		{
			return array(

					$i['id'],
					$i['adminLogin'],
					$i['avatars'],
					urldecode($i['badwords']),
					$i['font_color'],
					$i['font_size'],
					$i['font_family'],
					$i['sfx'],
					$i['smilies_text'],
					$i['smilies_images'],
					$i['gender'],
					$i['profileOn'],
					$i['profileUrl'],
					$i['profileRef'],
					$i['privateOn'],
					$i['whisperOn'],
					$i['webcamsOn'],
					$i['advertsOn'],
					$i['enableUrl'],
					$i['enableEmail'],
					$i['enableShoutFilter'],
					$i['floodChat'],
					$i['newPm'],
					$i['newPmMin'],
					$i['refreshRate'],
					$i['totalMessages'],
					urldecode($i['admin']),
					$i['textAdverts'],
					$i['textAdvertsDesc'],
					$i['textAdvertsRate'],
					urldecode(str_replace("select,","",$i['userStatusMes'])),
					urldecode($i['news'])
				);				
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
* update config settings
*
*/

function updateAdminConfig($data)
{
	// split smilie input field into 2 arrays
	$smilies_text = '';
	$smilies_images = '';

	$str = str_replace("\r\n"," ",$data['smilieHTML']);
	$str = str_replace(" = "," ",$str);

	$str = explode(" ", $str);

	for ( $i = 0; $i < count($str); $i++) 
	{
		$x = ($i%2) ? TRUE : FALSE;

		if($x === FALSE)
		{
			$smilies_text .= $str[$i].",";
		}
		else
		{
			$smilies_images .= $str[$i].",";
		}
	}

	// replace line breaks with commas
	$data['textAdvertsDesc'] = str_replace("\r\n",",",$data['textAdvertsDesc']);

	// update data
	try {
		$dbh = db_connect();
		
		if(!empty($data['adminLogin']))
		{ // update admin login password
			$params = array(
			'adminLogin' => md5($data['adminLogin']),	 			
			'avatars' => $data['avatars'],	 
			'badwords' => urlencode($data['badwords']),	 
			'font_color' => $data['font_color'],	 
			'font_size' => $data['font_size'],	 
			'font_family' => $data['font_family'],	 
			'sfx' => $data['sfx'],
			'smilies_text' => $smilies_text,
			'smilies_images' => $smilies_images,	 
			'gender' => $data['gender'],	 
			'profileOn' => $data['profileOn'],	 
			'profileUrl' => $data['profileUrl'],	 
			'profileRef' => $data['profileRef'],	 
			'privateOn' => $data['privateOn'],	 
			'whisperOn' => $data['whisperOn'],	 
			'webcamsOn' => $data['webcamsOn'],	 
			'advertsOn' => $data['advertsOn'],	 
			'enableUrl' => $data['enableUrl'],	 
			'enableEmail' => $data['enableEmail'],
			'enableShoutFilter' => $data['enableShoutFilter'],	 
			'floodChat' => $data['floodChat'],	 	 
			'newPm' => $data['newPm'],	
			'newPmMin' => $data['newPmMin'],
			'refreshRate' => $data['refreshRate'],	 
			'totalMessages' => $data['totalMessages'],	 	 
			'admin' => urlencode($data['admin']), 	 
			'textAdverts' => $data['textAdverts'],	 
			'textAdvertsDesc' => $data['textAdvertsDesc'],	 
			'textAdvertsRate' => $data['textAdvertsRate'],	 
			'userStatusMes' => 'select,'.urlencode($data['userStatusMes']),	  
			'news' => urlencode($data['news'])
			);
			$query = "UPDATE prochatrooms_config 
					  SET
					  adminLogin = :adminLogin,
					  avatars = :avatars,	 
					  badwords = :badwords,	 
					  font_color = :font_color,	 
					  font_size = :font_size,	 
					  font_family = :font_family,	 
					  sfx = :sfx,
					  smilies_text = :smilies_text,
					  smilies_images = :smilies_images,	 
					  gender = :gender,	 
					  profileOn = :profileOn,	 
					  profileUrl = :profileUrl,	 
					  profileRef = :profileRef,	 
					  privateOn = :privateOn,	 
					  whisperOn = :whisperOn,	 
					  webcamsOn = :webcamsOn,	 
					  advertsOn = :advertsOn,	 
					  enableUrl = :enableUrl,	 
					  enableEmail = :enableEmail,
					  enableShoutFilter = :enableShoutFilter,	 
					  floodChat = :floodChat,	 	 
					  newPm = :newPm,	
					  newPmMin = :newPmMin,
					  refreshRate = :refreshRate,	 
					  totalMessages = :totalMessages,	 	 
					  admin = :admin, 	 
					  textAdverts = :textAdverts,	 
					  textAdvertsDesc = :textAdvertsDesc,	 
					  textAdvertsRate = :textAdvertsRate,	 
					  userStatusMes = :userStatusMes,	  
					  news = :news
					  WHERE id = '1'
					  ";
		}
		else
		{
			$params = array(
			'avatars' => $data['avatars'],	 
			'badwords' => urlencode($data['badwords']),	 
			'font_color' => $data['font_color'],	 
			'font_size' => $data['font_size'],	 
			'font_family' => $data['font_family'],	 
			'sfx' => $data['sfx'],
			'smilies_text' => $smilies_text,
			'smilies_images' => $smilies_images,	 
			'gender' => $data['gender'],	 
			'profileOn' => $data['profileOn'],	 
			'profileUrl' => $data['profileUrl'],	 
			'profileRef' => $data['profileRef'],	 
			'privateOn' => $data['privateOn'],	 
			'whisperOn' => $data['whisperOn'],	 
			'webcamsOn' => $data['webcamsOn'],	 
			'advertsOn' => $data['advertsOn'],	 
			'enableUrl' => $data['enableUrl'],	 
			'enableEmail' => $data['enableEmail'],
			'enableShoutFilter' => $data['enableShoutFilter'],	 
			'floodChat' => $data['floodChat'],	 	 
			'newPm' => $data['newPm'],	
			'newPmMin' => $data['newPmMin'],
			'refreshRate' => $data['refreshRate'],	 
			'totalMessages' => $data['totalMessages'],	 	 
			'admin' => urlencode($data['admin']), 	 
			'textAdverts' => $data['textAdverts'],	 
			'textAdvertsDesc' => $data['textAdvertsDesc'],	 
			'textAdvertsRate' => $data['textAdvertsRate'],	 
			'userStatusMes' => 'select,'.urlencode($data['userStatusMes']),	  
			'news' => urlencode($data['news'])
			);
			$query = "UPDATE prochatrooms_config 
					  SET
					  avatars = :avatars,	 
					  badwords = :badwords,	 
					  font_color = :font_color,	 
					  font_size = :font_size,	 
					  font_family = :font_family,	 
					  sfx = :sfx,
					  smilies_text = :smilies_text,
					  smilies_images = :smilies_images,	 
					  gender = :gender,	 
					  profileOn = :profileOn,	 
					  profileUrl = :profileUrl,	 
					  profileRef = :profileRef,	 
					  privateOn = :privateOn,	 
					  whisperOn = :whisperOn,	 
					  webcamsOn = :webcamsOn,	 
					  advertsOn = :advertsOn,	 
					  enableUrl = :enableUrl,	 
					  enableEmail = :enableEmail,
					  enableShoutFilter = :enableShoutFilter,	 
					  floodChat = :floodChat,	 	 
					  newPm = :newPm,	
					  newPmMin = :newPmMin,
					  refreshRate = :refreshRate,	 
					  totalMessages = :totalMessages,	 	 
					  admin = :admin, 	 
					  textAdverts = :textAdverts,	 
					  textAdvertsDesc = :textAdvertsDesc,	 
					  textAdvertsRate = :textAdvertsRate,	 
					  userStatusMes = :userStatusMes,	  
					  news = :news
					  WHERE id = '1'
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

	return "Success! - Settings have been updated.";
}

/*
* get adverts
*
*/

function getAdminAdverts()
{
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT *   
				  FROM prochatrooms_adverts
				  ORDER BY id DESC
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		$html  = '';
		$html .= '<tr><td class="header" colspan="2"><b>Add New Advert</b></td></tr>';
		$html .= '<tr><td colspan="2"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="10">&nbsp;</td><td>';
		$html .= 'Copy &amp; Paste your advertising HTML code below,<br>';
		$html .= '<textarea name="text"></textarea><br>';
		$html .= '</td></tr>';
		$html .= '<tr><td>&nbsp;</td><td colspan="2"><input class="submit" type="submit" name="update" value="Add Banner"><br><br></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header" colspan="2">Banner Adverts</td></tr>';
		$html .= '<tr><td width="50">ID</td><td>Advert</td></tr>';

		foreach ($action as $i) 
		{
			$html .= '<tr><td>'.$i['id'].'</td><td>';
			$html .= stripslashes($i['text']).'<br>';
			$html .= '<input type="checkbox" name="del[]" value="'.$i['id'].'">Delete this advert?<br><br>';
			$html .= 'Displays: '.$i['displays'].'<br>';
			$html .= 'Clicked: '.$i['clicks'].'<br><br></td></tr>';				
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

	$html .= '<tr><td>&nbsp;</td><td colspan="2"><input class="submit" type="submit" name="update" value="Update Banners"><br><br></td></tr>';

	return $html;
}

/*
* update adverts
*
*/

function updateAdminAdverts($data)
{
	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "DELETE FROM prochatrooms_adverts WHERE id = :id";							
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

		return "Success! - Advert(s) has been deleted.";
	}

	if (!empty($data['text']))
	{
		try {
			$dbh = db_connect();
			$params = array(
			'txt' => $data['text']
			);
			$query = "INSERT INTO prochatrooms_adverts
								(
									text, 
									displays,
									clicks
								) 
								VALUES 
								(
									:txt,									
									'0', 
									'0'
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

		return "Success! - New advert has been added.";
	}
}

/*
* get games
*
*/

function getAdminGames()
{
	$html = '';
	
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT * FROM prochatrooms_games";							
		$action = $dbh->prepare($query);
		$action->execute($params);
					
		$html  = '<tr><td class="header" colspan="2"><b>Add New Game</b></td></tr>';
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
		$html .= '<tr><td width="100">Title:</td><td><input type="text" name="title" value=""></td></tr>';
		$html .= '<tr><td>Description:</td><td><textarea name="desc"></textarea></td></tr>';
		$html .= '<tr><td>Thumbnail:</td><td><input type="file" name="thumb"></td></tr>';
		$html .= '<tr><td>.SWF File:</td><td><input type="file" name="swf"></td></tr>';
		$html .= '<tr><td>Width:</td><td><input type="text" name="width" value="400" size="3" maxlength="3"> pixels</td></tr>';
		$html .= '<tr><td>Height:</td><td><input type="text" name="height" value="300" size="3" maxlength="3"> pixels</td></tr>';
		$html .= '<tr><td>&nbsp;</td><td colspan="2"><input class="submit" type="submit" name="update" value="Add Game"><br><br></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header" colspan="2"><b>Games Library</b></td></tr>';
		$html .= '<tr><td width="100">ID</td><td>Games</td></tr>';

		foreach ($action as $i)
		{
			$html .= '<tr><td>'.$i['game_ID'].'</td><td>';
			$html .= '<img style="cursor:pointer;" onclick="playGames('.$i['game_ID'].')" src=\'../plugins/games/images/'.$i['game_Thumb'].'\' width=\'70\' height=\'60\' align=\'top\' border=\'0\'>&nbsp;';
			$html .= urldecode($i['game_Desc']);
			$html .= '<br><input type="checkbox" name="del[]" value="'.$i['game_ID'].'">Delete this game?<br><br>';
			$html .= '</td></tr>';
		}

		$html .= '<tr><td>&nbsp;</td><td colspan="2"><input class="submit" type="submit" name="update" value="Update Games"><br><br></td></tr>';

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
* update games
*
*/

function updateAdminGames($data)
{
	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "DELETE FROM prochatrooms_games WHERE game_ID = :id";							
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

		return "Success! - Game(s) has been deleted.";
	}

	if (!empty($data['title']))
	{
		// do image upload
		$folder = "../plugins/games/images/";
		$img_name = $_FILES['thumb']['name'];
		$img_tmp_name = $_FILES['thumb']['tmp_name'];
		$img_ext = strtolower(substr($_FILES['thumb']['name'], -3));

		$allow_ext=array("jpg","gif","png","bmp");

		if(!in_array($img_ext,$allow_ext))
		{
			return " Error: [".$img_name."] - Image must be .jpg, .gif, .png or .bmp";
		}
		else
		{
			copy($img_tmp_name, $folder . "/" . $img_name) or die("Error: could not upload image");
		}
		
		// do .swf upload
		$folder = "../plugins/games/swf/";
		$swf_name = $_FILES['swf']['name'];
		$swf_tmp_name = $_FILES['swf']['tmp_name'];
		$swf_ext = strtolower(substr($_FILES['swf']['name'], -3));
		if ($swf_ext != 'swf')
		{
			return "Error: [".$swf_name."] - File is not a .swf";
		}
		else
		{
			copy($swf_tmp_name, $folder . "/" . $swf_name) or die("Error: could not upload .swf file");
		}

		try {
			$dbh = db_connect();
			$params = array(
			'game_SwfFile' => $_FILES['swf']['name'], 
			'game_Name' => urlencode($data['title']),
			'game_Thumb' => $_FILES['thumb']['name'],
			'game_Width' => $data['width'],
			'game_Height' => $data['height'], 
			'game_Desc' => urlencode($data['desc'])
			);
			$query = "INSERT INTO prochatrooms_games
								(
									game_SwfFile, 
									game_Name,
									game_Thumb,
									game_Width,
									game_Height, 
									game_Desc
								) 
								VALUES 
								(
									:game_SwfFile, 
									:game_Name,
									:game_Thumb,
									:game_Width,
									:game_Height, 
									:game_Desc
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

		return "Success! - New game has been added.";
	}
}

/*
* get rooms
*
*/

function getAdminRooms($id)
{
	$html  = '';
	
	try {
		$dbh = db_connect();
		
		if($id != '0')
		{
			$params = array(
			'id' => $id
			);
			$query = "SELECT * FROM prochatrooms_rooms WHERE id = :id";
		}
		else
		{
			$params = array('');
			$query = "SELECT * FROM prochatrooms_rooms";		
		}
				
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		if($id == '0')
		{
			$html .= '<tr><td class="header" colspan="2">Add New Room</td></tr>';
			$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
			$html .= '<input type="hidden" name="addRoom" value="1">';
			$html .= '<tr><td width="70">RoomName: </td><td><input type="text" name="room" value=""></td></tr>';
			$html .= '<tr><td>Password: </td><td><input type="text" name="pass" value=""> (optional)</td></tr>';
			$html .= '<tr><td>Background: </td><td><input type="text" name="bg" value=""> (upload image to folder <i>/images/</i> or enter <i>url</i> to image)</td></tr>';
			$html .= '<tr><td>Description: </td><td><textarea name="desc"></textarea></td></tr>';

			$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="update" value="Add Room"></td></tr>';

			$html .= '<tr><td colspan="2">&nbsp;</td></tr>';

			$html .= '</table>';
			$html .= '<br>';
			$html .= '<table>';

			$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
			$html .= '<tr><td class="header" colspan="2">Room Details</td></tr>';
			$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
		}

		foreach ($action as $i) 
		{
			if($id != '0')
			{
				$html .= '<tr class="header"><td colspan="2">:: Edit Room</td></tr>';
				$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
				$html .= '<input type="hidden" name="updateRoom" value="'.$i['id'].'">';
	
				if($i['id'] == "1")
				{
					$html .= '<tr><td width="70">RoomID: </td><td>'.$i['id'].' <input type="hidden" name="roomID" value="'.$i['id'].'"> </td></tr>';
				}
				else
				{
					$html .= '<tr><td width="70">RoomID: </td><td><input type="text" name="roomID" value="'.$i['id'].'"> (at least 1 room must have a roomID of <i>1</i>)</td></tr>';
				}
				
				$html .= '<tr><td>RoomName: </td><td><input type="text" name="room" value="'.urldecode($i['roomname']).'"></td></tr>';
				$html .= '<tr><td>Password: </td><td><input type="text" name="pass" value="'.$password.'"> (leave blank if no change)</td></tr>';
				$html .= '<tr><td>Background: </td><td><input type="text" name="bg" value="'.$i['roombg'].'"> (upload image to folder <i>/images/</i> or enter <i>url</i> to image)</td></tr>';
				$html .= '<tr><td>Description: </td><td><textarea name="desc">'.stripslashes(urldecode($i['roomdesc'])).'</textarea></td></tr>';
				$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="update" value="Update Rooms"></td></tr>';
			}

			if($id == '0')
			{
				$password = 'No';

				if($i['roompassword'])
				{
					$password = 'Yes';
				}

				$html .= '<tr><td width="70">RoomID: </td><td>'.$i['id'].'</td></tr>';
				$html .= '<tr><td>RoomName: </td><td>'.urldecode($i['roomname']).'</td></tr>';
				$html .= '<tr><td>OwnerID: </td><td>'.$i['roomowner'].'</td></tr>';
				$html .= '<tr><td>Password: </td><td>'.$password.'</td></tr>';
				$html .= '<tr><td>Background: </td><td>'.$i['roombg'].'</td></tr>';
				$html .= '<tr><td>Description: </td><td>'.urldecode($i['roomdesc']).'</td></tr>';

				$html .= '<tr><td>&nbsp;</td><td><input type="checkbox" name="edit" value="'.$i['id'].'">Edit this room?</td></tr>';
				
				if($i['id'] > "1")
				{
					$html .= '<tr><td>&nbsp;</td><td><input type="checkbox" name="del[]" value="'.$i['id'].'">Delete this room?</td></tr>';
				}
				
				$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="update" value="Update Rooms"></td></tr>';

				$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
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

	return $html;
}

/*
* update rooms
*
*/

function updateAdminRooms($data)
{
	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
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

		return "Success! - Room(s) has been deleted.";
	}

	if (!empty($data['room']))
	{
		if($data['updateRoom'] != 1 && $data['roomID'] == 1)
		{
			return "Only one room can have the roomID 1, room details have not been saved.";
		}
			
		if(!empty($data['updateRoom']))
		{
			if(!empty($data['pass']))
			{
				$updatePass = "roompassword = '".md5($data['pass'])."',";
			}

			$data['desc'] = preg_replace( "/\r/", "", $data['desc']);
			$data['desc'] = preg_replace( "/\n/", "", $data['desc']);

			try {
				$dbh = db_connect();

				if(!empty($data['pass']))
				{
					$params = array(
					'roomID' => $data['roomID'],
					'roomname' => urlencode($data['room']),
					'roomowner' => '1',
					'roompassword' => md5($data['pass']),
					'roomcreated' => '0',
					'roombg' => $data['bg'],	
					'roomdesc' => urlencode(),	
					'updateRoom' => $data['updateRoom']						
					);
					$query = "UPDATE prochatrooms_rooms
							  SET id = :roomID,
							  roomname = :roomname, 
							  roomowner = :roomowner,
							  roompassword = :roompassword,
							  roomcreated = :roomcreated, 
							  roombg = :roombg,
							  roomdesc = :roomdesc 
							  WHERE id = :updateRoom
							  ";
				}
				else
				{
					$params = array(
					'roomID' => $data['roomID'],
					'roomname' => urlencode($data['room']),
					'roomowner' => '1',
					'roomcreated' => '0',
					'roombg' => $data['bg'],	
					'roomdesc' => urlencode(preg_replace( "/\r/\n", "", $data['desc'])),	
					'updateRoom' => $data['updateRoom']						
					);
					$query = "UPDATE prochatrooms_rooms
							  SET id = :roomID,
							  roomname = :roomname, 
							  roomowner = :roomowner,
							  roomcreated = :roomcreated, 
							  roombg = :roombg,
							  roomdesc = :roomdesc 
							  WHERE id = :updateRoom
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
		
			return "Success! - Room has been updated.";
		}

		if(!empty($data['addRoom']))
		{
			$roomID = date("U").rand(1,99999);
			$roomPass = '';
			
			if(!empty($data['pass']))
			{
				$roomPass = md5($data['pass']);
			}

			try {
				$dbh = db_connect();
				$params = array(
				'id' => $roomID,
				'roomname' => urlencode($data['room']), 
				'roomowner' => '1',
				'roompassword' => $roomPass,
				'roomcreated' => '0', 
				'roombg' => $data['bg'],
				'roomdesc' => urlencode($data['desc'])
				);
				$query = "INSERT INTO prochatrooms_rooms
									(
										id,
										roomname, 
										roomowner,
										roompassword,
										roomcreated, 
										roombg,
										roomdesc 
									) 
									VALUES 
									(
										:id,
										:roomname, 
										:roomowner,
										:roompassword,
										:roomcreated, 
										:roombg,
										:roomdesc 
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
		
			return "Success! - New room has been added.";
		}
	}
}

/*
* get groups
*
*/ 


function getAdminGroups()
{
	$html = '';

	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT * FROM prochatrooms_group ORDER BY id ASC";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		$html .= '<tr><td class="header" colspan="12"><b>Add New Group</b></td></tr>';
		$html .= '<tr><td colspan="11"><b>&nbsp;</b></td></tr>';
		$html .= '<tr align="center">';
		$html .= '<td>Group ID</td>';
		$html .= '<td>Group Name</td>';
		$html .= '<td>Allow Chat</td>';
		$html .= '<td>Private Chat</td>';
		$html .= '<td>Show Webcam</td>';
		$html .= '<td>View Webcams</td>';
		$html .= '<td>Create Room</td>';
		$html .= '<td>Share Files</td>';
		$html .= '<td>Share Videos</td>';	
		$html .= '<td>&nbsp;</td>';
		$html .= '<td>&nbsp;</td>';
		$html .= '</tr>';
		$html .= '<tr align="center">';
		$html .= '<td><input type="text" name="id" value="" size="3"></td>';
		$html .= '<td><input type="text" name="groupName" value=""></td>';
		$html .= '<td>'.showSelectedID('groupChat','0').'</td>';
		$html .= '<td>'.showSelectedID('groupPChat','0').'</td>';
		$html .= '<td>'.showSelectedID('groupCams','0').'</td>';
		$html .= '<td>'.showSelectedID('groupWatch','0').'</td>';
		$html .= '<td>'.showSelectedID('groupRooms','0').'</td>';
		$html .= '<td>'.showSelectedID('groupShare','0').'</td>';
		$html .= '<td>'.showSelectedID('groupVideo','0').'</td>';	
		$html .= '<td>&nbsp;</td>';	
		$html .= '<td><input class="submit" type="submit" name="addGroup" value="Add Group"></td>';
		$html .= '</tr>';
		$html .= '<tr><td colspan="11"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td colspan="11"><hr></td></tr>';
		$html .= '<tr><td class="header" colspan="11"><b>User Groups</b></td></tr>';
		$html .= '<tr><td colspan="11"><b>&nbsp;</b></td></tr>';
		$html .= '<tr align="center">';
		$html .= '<td>Group ID</td>';
		$html .= '<td>Group Name</td>';
		$html .= '<td>Allow Chat</td>';
		$html .= '<td>Private Chat</td>';
		$html .= '<td>Show Webcam</td>';
		$html .= '<td>View Webcams</td>';
		$html .= '<td>Create Room</td>';
		$html .= '<td>Share Files</td>';
		$html .= '<td>Share Videos</td>';		
		$html .= '<td>Edit</td>';
		$html .= '<td>Delete</td>';
		$html .= '</tr>';		
					
		foreach ($action as $i) 
		{
			$html .= '<tr align="center">';
			$html .= '<td>'.$i['id'].'</td>';
			$html .= '<td>'.urldecode($i['groupName']).'</td>';
			$html .= '<td>'.$i['groupChat'].'</td>';
			$html .= '<td>'.$i['groupPChat'].'</td>';
			$html .= '<td>'.$i['groupCams'].'</td>';
			$html .= '<td>'.$i['groupWatch'].'</td>';
			$html .= '<td>'.$i['groupRooms'].'</td>';
			$html .= '<td>'.$i['groupShare'].'</td>';
			$html .= '<td>'.$i['groupVideo'].'</td>';		
			$html .= '<td align="center"><input type="checkbox" name="edit[]" value="'.$i['id'].'"></td>';
			$html .= '<td align="center"><input type="checkbox" name="del[]" value="'.$i['id'].'"></td>';
			$html .= '</tr>';				
		}
		
		$html .= '<tr><td colspan="9">&nbsp;</td><td align="right">&nbsp;</td><td align="center"><input class="submit" type="submit" name="update" value="Submit"><br><br></td></tr>';

		// include files
		include("../includes/config.php");

		$html .= '<tr><td colspan="11"><b>Default Group ID: '.$CONFIG['userGroup'].'</b></td></tr>';
		$html .= '<tr><td colspan="11">This is the Group ID a user is assigned to the first time they login to the chat room.</td></tr>';
		$html .= '<tr><td colspan="11">You can change the default Group ID value by editing the file "includes/config.php".</td></tr>';
		$html .= '<tr><td colspan="11">To assign a user to a different user group, click Users > Search Username > Group ID </td></tr>';
			
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
* edit groups
*
*/ 

function editAdminGroups($data)
{
	if (isset($data['edit']))
	{
		$html  = '';

		try {
			$dbh = db_connect();
			$params = array(
			'id' => $data['edit'][0]
			);
			$query = "SELECT *  
					  FROM prochatrooms_group
					  WHERE id = :id 
					  ORDER BY id ASC
					  ";							
			$action = $dbh->prepare($query);
			$action->execute($params);
						
			foreach ($action as $i) 
			{
				$html .= '<tr><td class="header" colspan="10"><b>Edit Group</b></td></tr>';
				$html .= '<tr><td colspan="10"><b>&nbsp;</b></td></tr>';
				$html .= '<tr align="center">';
				$html .= '<td>Group ID</td>';
				$html .= '<td>Group Name</td>';
				$html .= '<td>Allow Chat</td>';
				$html .= '<td>Private Chat</td>';
				$html .= '<td>Show Webcam</td>';
				$html .= '<td>View Webcams</td>';
				$html .= '<td>Create Room</td>';
				$html .= '<td>Share Files</td>';
				$html .= '<td>Share Videos</td>';			
				$html .= '<td>&nbsp;</td>';
				$html .= '<td>&nbsp;</td>';
				$html .= '<td>&nbsp;</td>';
				$html .= '</tr>';
				$html .= '<tr align="center">';
				$html .= '<td>'.$i['id'].'<input type="hidden" name="id" value="'.$i['id'].'"></td>';
				$html .= '<td><input type="text" name="groupName" value="'.urldecode($i['groupName']).'"></td>';
				$html .= '<td>'.showSelectedID('groupChat',$i['groupChat']).'</td>';
				$html .= '<td>'.showSelectedID('groupPChat',$i['groupPChat']).'</td>';
				$html .= '<td>'.showSelectedID('groupCams',$i['groupCams']).'</td>';
				$html .= '<td>'.showSelectedID('groupWatch',$i['groupWatch']).'</td>';
				$html .= '<td>'.showSelectedID('groupRooms',$i['groupRooms']).'</td>';
				$html .= '<td>'.showSelectedID('groupShare',$i['groupShare']).'</td>';
				$html .= '<td>'.showSelectedID('groupVideo',$i['groupVideo']).'</td>';			
				$html .= '<td><input class="submit" type="submit" name="editGroup" value="Confirm"></td>';
				$html .= '<td>&nbsp;</td>';
				$html .= '<td>&nbsp;</td>';
				$html .= '</tr>';
				$html .= '<tr><td colspan="10"><b>&nbsp;</b></td></tr>';					
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
}

/*
* update groups
*
*/ 

function updateAdminGroups($data)
{
	if ($data['editGroup'])
	{
		try {
			$dbh = db_connect();
			$params = array(
			'id' => $data['id'], 
			'groupName' => $data['groupName'],
			'groupChat' => $data['groupChat'],
			'groupPChat' => $data['groupPChat'],
			'groupCams' => $data['groupCams'],
			'groupWatch' => $data['groupWatch'],
			'groupRooms' => $data['groupRooms'],
			'groupShare' => $data['groupShare'],
			'groupVideo' => $data['groupVideo']	
			);
			$query = "UPDATE prochatrooms_group
					  SET
					  groupName = :groupName,
					  groupChat = :groupChat,
					  groupPChat = :groupPChat,
					  groupCams = :groupCams,
					  groupWatch = :groupWatch,
					  groupRooms = :groupRooms,
					  groupShare = :groupShare,
					  groupVideo = :groupVideo			
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

		return "Success! - Existing group has been edited.";
	}

	if ($data['addGroup'])
	{
		try {
			$dbh = db_connect();
			$params = array(
			'id' => $data['id'], 
			'groupName' => urlencode($data['groupName']),
			'groupChat' => $data['groupChat'],
			'groupPChat' => $data['groupPChat'],
			'groupCams' => $data['groupCams'],
			'groupWatch' => $data['groupWatch'],
			'groupRooms' => $data['groupRooms']
			);
			$query = "INSERT INTO prochatrooms_group
								(
									id, 
									groupName,
									groupChat,
									groupPChat,
									groupCams,
									groupWatch,
									groupRooms
								) 
								VALUES 
								(
									:id, 
									:groupName,
									:groupChat,
									:groupPChat,
									:groupCams,
									:groupWatch,
									:groupRooms
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

		return "Success! - New group has been added.";

	}

	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "DELETE FROM prochatrooms_group WHERE id = :id";							
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
		
		return "Success! - Group(s) has been deleted.";
	}
}

/*
* get bans
*
*/

function getAdminBans()
{
	$html = '';
	
	try {
		$dbh = db_connect();
		$params = array(
		'loginname' => makeSafe($loginName)
		);
		$query = "SELECT id, username, userIP   
				  FROM prochatrooms_users
				  WHERE ban = '1'
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();
		
		$html .= '<tr><td class="header" colspan="4"><b>Add New Ban</b></td></tr>';
		$html .= '<tr><td colspan="4"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="70">Username:</td><td colspan="3"><input type="text" name="banUser" value=""></td></tr>';
		$html .= '<tr><td>or, UserIP:</td><td colspan="3"><input type="text" name="banIP" value=""></td></tr>';
		$html .= '<tr><td>&nbsp;</td><td colspan="3"><input class="submit" type="submit" name="update" value="Add Ban"><br><br></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header" colspan="4">Banned Members</td></tr>';

		if($count)
		{
			$html .= '<tr><td colspan="4">&nbsp;</td></tr>';
			$html .= '<tr class="header"><td width="100">UserID</td><td width="100">Username</td><td width="100">UserIP</td><td align="center" width="100">Remove Ban</td></tr>';
		}

		if(!$count)
		{
			$html .= '<tr><td colspan="4">no results found ...</td></tr>';
		}

		foreach ($action as $i)  
		{
			$html .= '<tr>';
			$html .= '<td>'.$i['id'].'</td>';
			$html .= '<td>'.urldecode($i['username']).'</td>';
			$html .= '<td>'.$i['userIP'].'</td>';
			$html .= '<td align="center"><input type="checkbox" name="del[]" value="'.$i['id'].'"></td>';
			$html .= '</tr>';
		}

		if($count)
		{
			$html .= '<tr><td colspan="2">&nbsp;</td><td align="right">Select All Bans?<input onclick="return checkUncheckAll_del(this.form);" type="checkbox" name="selectAll" value=""></td><td align="center"><input type="submit" name="update" value="Update Bans"><br><br></td></tr>';
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
* update bans
*
*/

function updateAdminBans($data)
{
	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "UPDATE prochatrooms_users
						  SET ban = ''
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

		return "Success! - User ban(s) has been updated.";
	}

	if (!empty($data['banUser']) || !empty($data['banIP']))
	{
		try {
			$dbh = db_connect();
			$params = array(
			'ban' => '1',
			'username' => urlencode($data['banUser']),
			'banIP' => $data['banIP']
			);
			$query = "UPDATE prochatrooms_users
					  SET ban = :ban
					  WHERE username = :username
					  OR userIP = :banIP
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

		return "Success! - New ban has been added.";
	}
}

/*
* get users
*
*/

function getAdminUsers($findUser)
{
	if($findUser)
	{
		$findUser = "%".urlencode($findUser)."%";
	}
	
	try {
		$dbh = db_connect();

		$params = array(
		'findUser' => $findUser
		);
		$query = "SELECT *   
				  FROM prochatrooms_users
				  WHERE username LIKE :findUser
				  AND username !=''
				";										
		
		if(!isset($findUser) || empty($findUser))
		{
			$params = array('');
			$query = "SELECT * FROM prochatrooms_users";					
		}
	
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();		
		
		$html  = '';
		$html .= '<tr><td class="header" colspan="18"><b>Search All Users</b></td></tr>';
		$html .= '<tr><td colspan="18"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="70">Username:</td><td width="100"><input type="text" name="findUser" value="">&nbsp;</td><td colspan="13"><input class="submit" type="submit" name="submit" value="Find!"> (enter a partial name for multiple results)</td></tr>';
		$html .= '<tr><td colspan="18"><b>&nbsp;</b></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header" colspan="18">User Details</td></tr>';		
							
		if($count)
		{
			$html .= '<tr><td colspan="18">&nbsp;</td></tr>';
			$html .= '<tr><td colspan="18">IMPORTANT: When editing users details, leave all <i>Password</i> fields blank if not changed</td></tr>';
			$html .= '<tr><td colspan="18">&nbsp;</td></tr>';

			$html .= '<tr>';
			$html .= '<td align="center">Avatar</td>';
			$html .= '<td align="center">UserID</td>';
			$html .= '<td>Username</td>';
			$html .= '<td>Password</td>';
			$html .= '<td>Email Address</td>';
			$html .= '<td>UserIP</td>';
			$html .= '<td align="center">Admin</td>';
			$html .= '<td align="center">Mod</td>';
			$html .= '<td align="center">Speaker</td>';		
			$html .= '<td align="center">GroupID</td>';
			$html .= '<td align="center">RoomID</td>';
			$html .= '<td align="center">Online</td>';
			$html .= '<td align="center">eCredits Left</td>';
			$html .= '<td align="center">eCredits Earned</td>';
			$html .= '<td align="center">Points</td>';
			$html .= '<td align="center">Enabled</td>';
			$html .= '<td align="center">Update</td>';
			$html .= '<td align="center">Delete</td>';
			$html .= '</tr>';
		}

		if(!$count)
		{
			$html .= '<tr><td colspan="18">no results found, search for a username above ...</td></tr>';
		}

		foreach ($action as $i)
		{
			$html .= '<tr>';
			$html .= '<td align="center"><img src="../avatars/'.$i['avatar'].'"></td>';
			$html .= '<td align="center">'.$i['id'].'</td>';
			$html .= '<td>'.urldecode($i['username']).'</td>';
			$html .= '<td><input type="text" name="uPass" value=""></td>';
			$html .= '<td><input type="text" name="uEmail" value="'.$i['email'].'"></td>';
			$html .= '<td>'.$i['userIP'].'</td>';

			$selectA = "";
			$selectB = "";
			
			if($i['admin'])
			{
				$selectB = "SELECTED";
			}
			
			$htmlSelect  = "<select class='select' name='uAdmin'>";
			$htmlSelect .= "<option value='0' ".$selectA.">No</option>";		
			$htmlSelect .= "<option value='1' ".$selectB.">Yes</option>";				
			$htmlSelect .= "</select>";	
			
			$html .= '<td align="center">'.$htmlSelect.'</td>';		
			
			$selectA = "";
			$selectB = "";
			
			if($i['moderator'])
			{
				$selectB = "SELECTED";
			}
			
			$htmlSelect  = "<select class='select' name='uMod'>";
			$htmlSelect .= "<option value='0' ".$selectA.">No</option>";		
			$htmlSelect .= "<option value='1' ".$selectB.">Yes</option>";				
			$htmlSelect .= "</select>";	
			
			$html .= '<td align="center">'.$htmlSelect.'</td>';
			
			$selectA = "";
			$selectB = "";
			
			if($i['speaker'])
			{
				$selectB = "SELECTED";
			}
			
			$htmlSelect  = "<select class='select' name='uSpeaker'>";
			$htmlSelect .= "<option value='0' ".$selectA.">No</option>";		
			$htmlSelect .= "<option value='1' ".$selectB.">Yes</option>";				
			$htmlSelect .= "</select>";			
			
			$html .= '<td align="center">'.$htmlSelect.'</td>';
			
			$html .= '<td align="center"><input size="3" type="text" name="uGroup" value="'.$i['userGroup'].'"></td>';
			$html .= '<td align="center">'.$i['room'].'</td>';
			$html .= '<td align="center">'.$i['online'].'</td>';
			$html .= '<td align="center"><input size="6" type="text" name="ueCredits" value="'.$i['eCredits'].'"></td>';
			$html .= '<td align="center"><input size="6" type="text" name="ueCreditsEarned" value="'.$i['eCreditsEarned'].'"></td>';
			$html .= '<td align="center"><input size="6" type="text" name="uPoints" value="'.$i['points'].'"></td>';
			$html .= '<td align="center"><input size="1" type="text" name="uEnabled" value="'.$i['enabled'].'"></td>';
			$html .= '<td align="center"><input type="checkbox" name="updateUser[]" value="'.$i['id'].'"></td>';
			$html .= '<td align="center"><input type="checkbox" name="del[]" value="'.$i['id'].'"></td>';
			$html .= '</tr>';
		}

		if($count)
		{
			$html .= '<tr><td colspan="16">&nbsp;</td><td colspan="2" align="center"><input type="submit" name="update" value="Submit" class="submit"><br><br></td></tr>';
		}

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header"><b>Display Online Users:</b></td></tr>';
		$html .= '<tr><td>';
		$html .= 'To show a list of online users in your chat room, copy and paste the code below into your web page. Adjust the width and height values to suit your web page. Replace <font color="red">YOURSITE.com</font> with your own domain name.<br><br>';
		$html .= '<b>Code:</b><br><br>';
		$html .= '<div>';
		$html .= '&#60;iframe src="http://www.<font color="red">YOURSITE.com</font>/prochatrooms/templates/default/online.php?nobutton" width="200" height="400" border="0">&#60;/iframe>';
		$html .= '</div>';
		$html .= '<br>';
		$html .= '</td></tr>';
			
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
* update users
*
*/

function updateAdminUsers($data)
{
	if (isset($data['del']))
	{
		foreach ($data['del'] as $id)
		{
			// delete user
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "DELETE FROM prochatrooms_users WHERE id = :id";							
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

			// delete user profile
			try {
				$dbh = db_connect();
				$params = array(
				'id' => $id
				);
				$query = "DELETE FROM prochatrooms_profiles WHERE id = :id";							
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

		return "Success! - User(s) has been deleted.";
	}

	if (isset($data['updateUser']))
	{
		foreach ($data['updateUser'] as $id)
		{
			try {
				$dbh = db_connect();
				
				if(!empty($data['uPass']))
				{
					$params = array(
					'password' => md5($data['uPass']),							  
					'email' => $data['uEmail'],
					'eCredits' => $data['ueCredits'],
					'eCreditsEarned' => $data['ueCreditsEarned'],
					'points' => $data['uPoints'],
					'enabled' => $data['uEnabled'],
					'userGroup' => $data['uGroup'],
					'admin' => $data['uAdmin'],
					'moderator' => $data['uMod'],
					'speaker' => $data['uSpeaker'],
					'id' => $id
					);
					$query = "UPDATE prochatrooms_users
							  SET 
							  password = :password,							  
							  email = :email,
							  eCredits = :eCredits,
							  eCreditsEarned = :eCreditsEarned,
							  points = :points,
							  enabled = :enabled,
							  userGroup = :userGroup,
							  admin = :admin,
							  moderator = :moderator,
							  speaker = :speaker
							  WHERE id = :id
							  ";
				}
				else
				{
					$params = array(						  
					'email' => $data['uEmail'],
					'eCredits' => $data['ueCredits'],
					'eCreditsEarned' => $data['ueCreditsEarned'],
					'points' => $data['uPoints'],
					'enabled' => $data['uEnabled'],
					'userGroup' => $data['uGroup'],
					'admin' => $data['uAdmin'],
					'moderator' => $data['uMod'],
					'speaker' => $data['uSpeaker'],
					'id' => $id
					);
					$query = "UPDATE prochatrooms_users
							  SET 					  
							  email = :email,
							  eCredits = :eCredits,
							  eCreditsEarned = :eCreditsEarned,
							  points = :points,
							  enabled = :enabled,
							  userGroup = :userGroup,
							  admin = :admin,
							  moderator = :moderator,
							  speaker = :speaker
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
		}

		return "Success! - User(s) has been updated.";
	}
}

/*
* get profiles
*
*/

function getAdminProfiles($findUser)
{
	$html  = '';
	
	try {
		$dbh = db_connect();
		$params = array(
		'findUser' => $findUser
		);
		$query = "SELECT *   
				  FROM prochatrooms_profiles
				  WHERE username = :findUser
				  ";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		$count = $action->rowCount();	
	
		$html .= '<tr><td class="header" colspan="2"><b>Search All Profiles</b></td></tr>';
		$html .= '<tr><td colspan="2"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="70">Username:</td><td><input type="text" name="findUser" value="">&nbsp;<input class="submit" type="submit" name="submit" value="Find!"> (enter full username)</td></tr>';
		$html .= '<tr><td colspan="2"><b>&nbsp;</b></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td  class="header" colspan="2">User Details</td></tr>';

		if(!$count)
		{
			$html .= '<tr><td colspan="2">no results found, search for a username above ...</td></tr>';
		}

		foreach ($action as $i)  
		{
			$html .= '<input type="hidden" name="updateUser" value="'.$i['id'].'">';

			$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
			$html .= '<tr><td>Username</td><td>'.urldecode($i['username']).'</td></tr>';
			$html .= '<tr><td>Real Name</td><td><input type="text" name="real_name" value="'.$i['real_name'].'"></td></tr>';
			$html .= '<tr><td>Age</td><td><select name="age">'.getUserAge($i['age']).'</select></td></tr>';
			$html .= '<tr><td>Gender</td><td><select name="gender">'.getUserGenders($i['gender']).'</select></td></tr>';
			$html .= '<tr><td>Photo</td><td><a href="../profiles/view.php?id='.$i['id'].'" target="_blank"><img src="../profiles/view.php?id='.$i['id'].'" height="100" width="120" border="0"></a></td></tr>';
			$html .= '<tr><td>&nbsp;</td><td><input type="checkbox" name="del" value="'.$i['id'].'"> Delete Image?</td></tr>';
			$html .= '<tr><td>Location</td><td><input type="text" name="location" value="'.urldecode($i['location']).'"></td></tr>';
			$html .= '<tr><td>Hobbies</td><td><input type="text" name="hobbies" value="'.urldecode($i['hobbies']).'"></td></tr>';
			$html .= '<tr><td>About Me</td><td><textarea name="aboutme">'.urldecode($i['aboutme']).'</textarea></td></tr>';
		}

		if($count)
		{
			$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="update" value="Update User"><br><br></td></tr>';
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
* update profiles
*
*/

function updateAdminProfiles($data)
{
	if (isset($data['updateUser']))
	{
		try {
			$dbh = db_connect();
			
			if(!empty($data['del']))
			{
				$params = array(
				'photo' => '', 
				'real_name' => urlencode($data['real_name']),
				'age' => $data['age'],
				'gender' => $data['gender'],
				'location' => urlencode($data['location']),
				'hobbies' => urlencode($data['hobbies']),
				'aboutme' => urlencode($data['aboutme']),
				'id' => $data['updateUser']
				);
				$query = "UPDATE prochatrooms_profiles
						  SET 
						  photo = :photo, 
						  real_name = :real_name,
						  age = :age,
						  gender = :gender,
						  location = :location,
						  hobbies = :hobbies,
						  aboutme = :aboutme 
						  WHERE id = :id
						  ";
			}
			else
			{
				$params = array(
				'real_name' => urlencode($data['real_name']),
				'age' => $data['age'],
				'gender' => $data['gender'],
				'location' => urlencode($data['location']),
				'hobbies' => urlencode($data['hobbies']),
				'aboutme' => urlencode($data['aboutme']),
				'id' => $data['updateUser']
				);
				$query = "UPDATE prochatrooms_profiles
						  SET 
						  real_name = :real_name,
						  age = :age,
						  gender = :gender,
						  location = :location,
						  hobbies = :hobbies,
						  aboutme = :aboutme 
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
		
		return "Success! - User profile has been updated.";
	}
}

/*
* get transcripts
*
*/

function getAdminTranscripts($findUser,$findRoom,$page)
{
	$results = '100';

	$prevPage = $page - $results;

	if($prevPage < 0)
	{
		$prevPage = 0;
	}

	$nextPage = $page + $results;

	if(!$findRoom)
	{
		$findRoom = '1';
	}
	
	$html  = '';	
		
	try {
		$dbh = db_connect();
	
		if(!empty($findUser))
		{
			$params = array(
			'findUser' => $findUser,			
			);			
			$query = "SELECT *   
					  FROM prochatrooms_message
					  WHERE username = :findUser OR tousername = :findUser 
					  ORDER by id DESC 
					  ";
				  
			$action = $dbh->prepare($query);	
			$action->execute($params);
		}
		else
		{
			$params = array(
			'room' => $findRoom,
			'page' => $page,	
			'results' => $results				
			);		
			$query = "SELECT *   
					  FROM prochatrooms_message
					  WHERE room = :room
					  ORDER by id DESC 
					  LIMIT :page,:results
					  ";	
					  
			$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);					  
			$action = $dbh->prepare($query);				
			$action->execute($params);			  
		}
	  
		$count = $action->rowCount();
	
		$html .= '<tr><td class="header" colspan="6"><b>Select Room</b></td></tr>';
		$html .= '<tr><td colspan="6"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="70">RoomID:</td><td colspan="5"><input type="text" name="room" value="">&nbsp;<input class="submit" type="submit" name="submit" value="Find!"></td></tr>';
		$html .= '<tr><td colspan="6"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td class="header" colspan="6"><b>Or, Search Username</b></td></tr>';
		$html .= '<tr><td colspan="6"><b>&nbsp;</b></td></tr>';
		$html .= '<tr><td width="70">Username:</td><td colspan="5"><input type="text" name="user" value="">&nbsp;<input class="submit" type="submit" name="submit" value="Find!"> (enter full username)</td></tr>';
		$html .= '<tr><td colspan="6"><b>&nbsp;</b></td></tr>';

		$html .= '</table>';
		$html .= '<br>';
		$html .= '<table>';

		$html .= '<tr><td class="header" colspan="6">Message History</td></tr>';
		$html .= '<tr><td colspan="6">&nbsp;</td></tr>';

		if(!$count)
		{
			$html .= '<tr><td colspan="6">no results found, select a room above...</td></tr>';
		}
		else
		{
			$html .= '<tr><td>ID</td><td>RoomID</td><td>Time</td><td>Username</td><td>To</td><td>Message</td></tr>';
		}

		foreach ($action as $i) 
		{
			if($i['room'] != '0')
			{
				$i['message'] = urldecode($i['message']);

				$i['message'] = str_replace("[u]","",$i['message']);
				$i['message'] = str_replace("[/u]","",$i['message']);
				$i['message'] = str_replace("[i]","",$i['message']);
				$i['message'] = str_replace("[/i]","",$i['message']);
				$i['message'] = str_replace("[b]","",$i['message']);
				$i['message'] = str_replace("[/b]","",$i['message']);

				// explode message
				$i['message'] = explode("|", urldecode($i['message']));

				// format message
				$i['message'][4] = str_replace("plugins/share","../plugins/share",$i['message'][4]);
				$i['message'][4] = str_replace("[[","<",$i['message'][4]);
				$i['message'][4] = str_replace("]]",">",$i['message'][4]);

				$message = "<span style=\"color:".$i['message'][1].";font-size:".$i['message'][2].";font-family:".$i['message'][3].";\">".html_entity_decode(stripslashes($i['message'][4]))."</span>";

				// add <pre> if required
				// used for formatting multi-line messages.
				if($i['message'][6]=='1')
				{
					$message = "<pre>".$message."</pre>";
				}

				$html .= '<tr>';
				$html .= '<td width="50">'.$i['id'].'</td>';
				$html .= '<td width="80">'.$i['room'].'</td>';
				$html .= '<td width="170">'.date("d M Y, H:i:s",$i['messtime']).'</td>';
				$html .= '<td width="100">'.urldecode($i['username']).'</td>';
				$html .= '<td width="100">'.urldecode($i['tousername']).'</td>';
				$html .= '<td>'.$message.'</td>';
				$html .= '</tr>';
			}
		}

		if($count && empty($findUser))
		{
			$html .= '<tr><td colspan="6">&nbsp;</td></tr>';
			$html .= '<tr><td colspan="6" align="center">';
			$html .= '<a href="?option=transcripts&room='.$findRoom.'&user='.$findUser.'&page='.$prevPage.'"><<< Prev</a>';
			$html .= ' | ';
			$html .= '<a href="?option=transcripts&room='.$findRoom.'&user='.$findUser.'&page='.$nextPage.'">Next >>></a>';
			$html .= '</td></tr>';
		}
		
		$html .= '<tr><td colspan="6">&nbsp;</td></tr>';	
			
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
* group email
*
*/

function getAdminGroupEmail()
{
	$data['totalSend'] += $data['amount'];

	if(empty($data['amount']))
	{
		$data['amount'] = '1';
		$data['rateOfRefresh'] = '10';
	}

	$html  = '';
	$html .= '<input type="hidden" name="totalSend" value="'.$data['totalSend'].'">';

	$html .= '<tr><td class="header" colspan="2"><b>Email Settings</b></td></tr>';
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	$html .= '<tr><td colspan="2">HINT: To prevent spam, set <i>email speed</i> to low values.</td></tr>';
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	$html .= '<tr><td width="100">Email Speed:</td><td><input size="4" type="text" name="amount" value="'.$data['amount'].'"> email(s) every <input size="4" type="text" name="rateOfRefresh" value="'.$data['rateOfRefresh'].'">&nbsp;second(s)</td></tr>';
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';

	$html .= '</table>';
	$html .= '<br>';
	$html .= '<table>';

	$html .= '<tr><td class="header" colspan="2"><b>Send Email</b></td></tr>';
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	$html .= '<tr><td width="100">Send To:</td><td><select name="group"><option value="1">All Members</option></select></td></tr>';
	$html .= '<tr><td>Or, Username:</td><td><input type="text" name="toUser" value="'.$data['toUser'].'"></td></tr>';
	$html .= '<tr><td>Subject:</td><td><input type="text" name="subject" value="'.$data['subject'].'"></td></tr>';
	$html .= '<tr><td>Message:</td><td><textarea name="message">'.$data['message'].'</textarea></td></tr>';
	$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="send" value="Send Email"></td></tr>';

	$html .= '<tr><td colspan="2"><b>&nbsp;</b></td></tr>';

	return $html;
}

/*
* send email
*
*/

function sendAdminGroupEmail($data)
{
	// include files
	include("../includes/config.php");

	// create headers
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"" . $CONFIG['chatroomName'] . "\" <" . $CONFIG['chatroomEmail'] . ">\n";

	if(empty($data['totalSend']))
	{
		$data['totalSend'] = '0';
	}

	if(empty($data['amount']))
	{
		$data['amount'] = '0';
	}
	
	$result = '0';
	$html = '';	
			
	try {
		$dbh = db_connect();
		
		if(!empty($data['toUser']))
		{ // send to one member
			$params = array(
			'toUser' => $data['toUser'],			
			);
			$query = "SELECT *   
					  FROM prochatrooms_users
					  WHERE email != ''
					  AND username = :toUser
					  LIMIT 1
					  ";	
		}
		else
		{ // send to all members
			$params = array(
			'totalSend' => $data['totalSend'],
			'amount' => $data['amount'],			
			);
			$query = "SELECT *   
					  FROM prochatrooms_users
					  WHERE email != ''
					  ORDER by id ASC
					  LIMIT :totalSend,:amount
					  ";			
		}
		
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);		
		$action = $dbh->prepare($query);
		$action->execute($params);

		foreach ($action as $i)
		{
			// send email
			mail($i['email'], $data['subject'], $data['message'], $headers);

			$html .= "Email sent to: ".$i['email']."<br>";

			$result = '1';
		}

		if($result == 0)
		{
			$data = '';
			$html = "Email(s) have been sent.";
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
* get database
*
*/

function getAdminDatabase()
{
	$disabled = '';	

	// check for users online within last 5 mins	
	try {
		$dbh = db_connect();
		$params = array(
		'lastActive' => date("U")-300
		);
		$query = "SELECT id FROM prochatrooms_users WHERE active > :lastActive";							
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

	if($count)
	{
		$disabled = 'disabled';
		echo "<div style='color:red;'><br />Warning: Actions not permitted - You have active users in the chat room.</div>";
	}

	// output html
	$html  = '';
	$html .= '<tr><td class="header" colspan="2"><b>Database Maintenance</b></td></tr>';
	$html .= '<tr><td colspan="2"></td></tr>';
	$html .= '<tr><td colspan="2">IMPORTANT: <br><br>Any changes made below cannot be undone.</td></tr>';
	$html .= '<tr><td colspan="2">If in doubt, you are advised to backup your MySQL database first.</td></tr>';	
	$html .= '<tr><td colspan="2">Always ensure that no users are in the chat room before editing the settings below.</td></tr>';
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';	

	$html .= '</table>';
	$html .= '<br>';
	$html .= '<table>';
	$html .= '<tr><td class="header" colspan="2"><b>Database Tables</b></td></tr>';
	$html .= '<tr><td colspan="2" width="70">&nbsp;</td></tr>';

	// adverts table
	if(file_exists("../plugins/adverts/index.php"))
	{
		try {
			$dbh = db_connect();
			$params = array('');
			$query = "SELECT id FROM prochatrooms_adverts";							
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

		$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_adverts</td></tr>';
		$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
		$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_adverts[]" value="TRUNCATE"></td></tr>';
		$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_adverts[]" value="OPTIMIZE"></td></tr>';
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	}
	
	// games table
	if(file_exists("../plugins/games/index.php"))
	{
		try {
			$dbh = db_connect();
			$params = array('');
			$query = "SELECT game_ID FROM prochatrooms_games";							
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

		$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_games</td></tr>';
		$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
		$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_games[]" value="TRUNCATE"></td></tr>';
		$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_games[]" value="OPTIMIZE"></td></tr>';	
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	}

	// message table
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT id FROM prochatrooms_message";							
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

	$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_message</td></tr>';
	$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
	$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_message[]" value="TRUNCATE"></td></tr>';
	$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_message[]" value="OPTIMIZE"></td></tr>';	
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';

	// moderated table
	if(file_exists("../plugins/moderated_chat/index.php"))
	{
		try {
			$dbh = db_connect();
			$params = array('');
			$query = "SELECT id FROM prochatrooms_moderated";							
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

		$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_moderated</td></tr>';
		$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
		$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_moderated[]" value="TRUNCATE"></td></tr>';
		$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_moderated[]" value="OPTIMIZE"></td></tr>';	
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	}

	// one2one
	if(file_exists("../plugins/one2one/index.html"))
	{
		try {
			$dbh = db_connect();
			$params = array('');
			$query = "SELECT id FROM prochatrooms_one2one";							
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

		$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_one2one</td></tr>';
		$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
		$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_one2one[]" value="TRUNCATE"></td></tr>';
		$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_one2one[]" value="OPTIMIZE"></td></tr>';	
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	}

	// rooms table
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT id FROM prochatrooms_rooms";							
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

	$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_rooms</td></tr>';
	$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
	$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_rooms[]" value="TRUNCATE"></td></tr>';
	$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_rooms[]" value="OPTIMIZE"></td></tr>';	
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';

	// share table
	if(file_exists("../plugins/share/index.php"))
	{
		try {
			$dbh = db_connect();
			$params = array('');
			$query = "SELECT id FROM prochatrooms_share";							
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

		$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_share</td></tr>';
		$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
		$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_share[]" value="TRUNCATE"></td></tr>';
		$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_share[]" value="OPTIMIZE"></td></tr>';	
		$html .= '<tr><td colspan="2">&nbsp;</td></tr>';
	}

	// users table
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT id FROM prochatrooms_users";							
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

	$html .= '<tr><td>MySQL Table:</td><td>prochatrooms_users</td></tr>';
	$html .= '<tr><td>Total Entries:</td><td>'.$count.'</td></tr>';
	$html .= '<tr><td>Truncate:</td><td><input type="checkbox" name="prochatrooms_users[]" value="TRUNCATE"></td></tr>';
	$html .= '<tr><td>Optimize:</td><td><input type="checkbox" name="prochatrooms_users[]" value="OPTIMIZE"></td></tr>';	
	$html .= '<tr><td colspan="2">&nbsp;</td></tr>';

	$html .= '<tr><td>&nbsp;</td><td><input class="submit" type="submit" name="send" value="Confirm" '.$disabled.'></td></tr>';

	return $html;
}

/*
* update database
*
*/

function updateAdminDatabase($data)
{
	if (!empty($data['prochatrooms_adverts']))
	{
		foreach ($data['prochatrooms_adverts'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_adverts";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_adverts";					
				}				
					
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
		}
	}

	if (!empty($data['prochatrooms_games']))
	{
		foreach ($data['prochatrooms_games'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_games";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_games";					
				}				
			
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
		}
	}

	if (!empty($data['prochatrooms_message']))
	{
		foreach ($data['prochatrooms_message'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_message";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_message";					
				}				
								
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
		}
	}

	if (!empty($data['prochatrooms_moderated']))
	{
		foreach ($data['prochatrooms_moderated'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_moderated";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_moderated";					
				}				
								
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
		}
	}

	if (!empty($data['prochatrooms_one2one']))
	{
		foreach ($data['prochatrooms_one2one'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_one2one";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_one2one";					
				}				
								
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
		}
	}

	if (!empty($data['prochatrooms_rooms']))
	{
		foreach ($data['prochatrooms_rooms'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_rooms";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_rooms";					
				}				
								
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
		}
	}

	if (!empty($data['prochatrooms_share']))
	{
		foreach ($data['prochatrooms_share'] as $id)
		{
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_share";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_share";					
				}				
								
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

			if($id == 'TRUNCATE')
			{
				$dir = '../plugins/share/uploads/';

				// delete all files in folder
				foreach(glob($dir.'*') as $v)
				{
	    			unlink($v);
				}

				// create index.html file
				$newfile = fopen($dir."index.html", 'w') 
							or die("can't open file");

				fclose($newfile);
			}
		}
	}

	if (!empty($data['prochatrooms_users']))
	{
		foreach ($data['prochatrooms_users'] as $id)
		{
			// users table
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_users";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_users";					
				}				
								
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
			
			// profile table
			try {
				$dbh = db_connect();
				$params = array('');
				
				if($id == "TRUNCATE")
				{
					$query = "TRUNCATE TABLE prochatrooms_profiles";					
				}
				
				if($id == "OPTIMIZE")
				{
					$query = "OPTIMIZE TABLE prochatrooms_profiles";					
				}				
								
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
		}
	}

	return "Database maintenance completed.";
}


/*
* show HTML select on/off
*
*/

function showSelectedID($name,$id)
{
	if($id == '1')
	{
		$on = 'SELECTED';
	}

	$html  = '<select name="'.$name.'">';
	$html .= '<option value="0">Off</option>';
	$html .= '<option value="1" '.$on.'>On</option>';
	$html .= '</select>';

	return $html;
}