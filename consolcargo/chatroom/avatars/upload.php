<?php

/*
* include files
*/

include("../includes/config.php");

/*
* no cache
* 
*/
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/html; charset=utf-8");

/*
* update user avatar
* 
*/

function updateAvatar()
{
	// include files
	include("../includes/ini.php");
	include("../includes/session.php");
	include("../includes/config.php");	
	include("../includes/functions.php");		
	include("../lang/".$CONFIG['lang'][1]);
	
	// invalid Session ID	
	if(!isset($_SESSION['userid']))
	{
		die("Invalid Session ID");
	}	
	
	// protect system files
	$sysAvatars = array(
		"male.gif",
		"female.gif",
		"couple.gif",
		"phone.gif",
		"pc.gif",
		"webcam.gif",
		"share.gif",
		"block.gif",
		"online.gif"		
	);	
	
	//  get user protected files
	try {
		$dbh = db_connect();
		$params = array('');
		$query = "SELECT avatars  
				  FROM prochatrooms_config 
				  LIMIT 1
				";							
		$action = $dbh->prepare($query);
		$action->execute($params);
		
		$usrAvatars = '';			
					
		foreach ($action as $i) 
		{
			$usrAvatars = $i['avatars'];				
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

	$usrAvatars = explode(',', $usrAvatars);
	
	// max file size - KB
	$maxFileSize = "1000";	

	// set allowed file types to .jpg. gif
	$file_type_ext = array('image/pjpeg','image/gif','image/jpeg');
	$allowed_ext = array('jpg','gif');

	// get file type
	$file_type = $_FILES['uploadedfile']['type'];	

	// check ext allowed
	$ext_allowed = '0';	
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
	
	// check user has uploaded something
	if (filesize($_FILES['uploadedfile']['tmp_name']) <1)
	{
		return;
	}	
	
	// check file size
	if (!$ext_allowed)
	{
		return array("0","Oops, Avatar must be .jpg or .gif!","","");
	}	

	// check file size
	if (filesize($_FILES['uploadedfile']['tmp_name']) > ($maxFileSize*1024))
	{
		return array("0","Oops, Avatar image is to large!","","");
	}		

	$deleteImage = 0;
	
	// set error reporting
	if(!$deleteImage)
	{ 
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
       				$image_result = 'Avatar Updated';

			}

		}

	}

	$incImage = '';

	// resize avatar and upload
	if($ext_allowed)
	{
		//get userid
		try {
			$dbh = db_connect();
			$params = array(
			'username' => $_SESSION['username']
			);
			$query = "SELECT id, avatar  
					  FROM prochatrooms_users 
					  WHERE username = :username
					  LIMIT 1
					";							
			$action = $dbh->prepare($query);
			$action->execute($params);
						
			foreach ($action as $i) 
			{
				$id = $i['id'];

				// delete old avatar 
				if(!in_array($i['avatar'],$sysAvatars) && !in_array($i['avatar'],$usrAvatars))
				{
					unlink("40/".$i['avatar']);
					unlink($i['avatar']);	
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

		if(strtolower(substr(basename($_FILES['uploadedfile']['name']), -3))=="jpg" || strtolower(substr(basename($_FILES['uploadedfile']['name']), -3))=="jpeg" )
		{
			$src = imagecreatefromjpeg($_FILES['uploadedfile']['tmp_name']);
		}
		else 
		{
			$src = imagecreatefromgif($_FILES['uploadedfile']['tmp_name']);
		}

		list($width,$height)=getimagesize($_FILES['uploadedfile']['tmp_name']);

		$newwidth=32; // width small image
		$newheight=($height/$width)*$newwidth;
		if($newheight != 24){$newheight = 24;}
		$tmp=imagecreatetruecolor($newwidth,$newheight);		

		$newwidth1=55; // width small image
		$newheight1=($height/$width)*$newwidth1;
		if($newheight1 != 40){$newheight1 = 40;}		
		$tmp1=imagecreatetruecolor($newwidth1,$newheight1);		

		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);
		
		$uploadfile = md5($_FILES['uploadedfile']['name'].rand(1,999999)).substr(basename($_FILES['uploadedfile']['name']), -4);

		imagejpeg($tmp,$uploadfile,100);
		imagejpeg($tmp1,"40/".$uploadfile,100);

		imagedestroy($src);
		imagedestroy($tmp);
		imagedestroy($tmp1);

	}	
	
	// update avatar
	try {
		$dbh = db_connect();
		$params = array(
		'avatar' => $uploadfile,
		'username' => $_SESSION['username']
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
		$error  = "Function: ".__FUNCTION__."\n";
		$error .= "File: ".basename(__FILE__)."\n";	
		$error .= 'PDOException: '.$e->getCode(). '-'. $e->getMessage()."\n\n";

		debugError($error);
	}	

	// avatar status/error messages
	return array("1",$image_result, $uploadfile, $id);	
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<title></title>
<meta name="viewport" content="width=device-width, target-densityDpi=device-dpi, initial-scale=1, user-scalable=no" />		
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../templates/<?php echo $CONFIG['template'];?>/style.css"> 

<?php

$uploaded = '';
$result = '';

if(isset($_POST) && !empty($_POST))
{
	list($uploaded,$result,$avatar,$id) = updateAvatar();
	
	if($uploaded==1)
	{
		?>
		<script language="javascript" type="text/javascript">
		<!--
		parent.addAvatar('optionsBar','<?php echo $avatar;?>');	
		parent.updateAvatar('<?php echo $id;?>', '<?php echo $avatar;?>','');
		parent.sendAvatarData();
		//-->
		</script>
	<?php }?>		
<?php }?>

<style>
.avatarBG
{
	font-family: Verdana, Arial;
	font-size: 12px;
	font-style: normal;
}
</style>
</head> 
<body class="avatarBG">
<?php echo $result;?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr><td><strong>Upload Your Own Avatar</strong></td></tr>
	<tr><td align="center"><input name="uploadedfile" type="file" id="uploadedfile" size="20" /></td></tr>
	<tr><td align="center"><input class="button" type="submit" name="Submit" value="Upload" /></td></tr>
	</table>
</td>
</form>
</tr>
</table>
</body>
</html>