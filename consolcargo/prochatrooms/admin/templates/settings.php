
<div>

<span class="result">
	&nbsp;<?php echo $result;?>
</span>

<form action ="index.php?option=settings" method="post" name="settings">

	<table>
	<tr><td class="header" colspan="3">Settings</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">Note: Additional settings can be found in the file: <i>prochatrooms/includes/config.php</i></td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td><b>Option</b></td><td><b>Value</b></td><td><b>Description</b></td></tr>
	<tr><td>login username</td><td><input type="text" name="admin" value="<?php echo $admin;?>"></td><td>Username to login to admin area.</td></tr>
	<tr><td width="100">login password</td><td><input type="text" name="adminLogin" value=""></td><td>Password to login to admin area. Leave blank if no change.<br><br></td></tr>
	<tr><td>avatars</td><td width="300"><input style="width: 300px" type="text" name="avatars" value="<?php echo $avatars;?>"></td><td>Seperate with comma. Example: <i>image1.gif,image2.gif,image3.gif</i><br>Upload thumbnail image to <i>/avatars/</i> folder (height/width: 24x32px).<br>Upload original image to <i>/avatars/40/</i> folder (height/width: 40x55px).<br></td></tr>	
	<tr><td>badwords</td><td><input style="width: 300px" type="text" name="badwords" value="<?php echo $badwords;?>"></td><td>Seperate with comma. Example: <i>word1,word2,word3</i></td></tr>
	<tr><td>font_color</td><td><input style="width: 300px" type="text" name="font_color" value="<?php echo $font_color;?>"></td><td>Seperate with comma. Example: <i>#000000,#F5F5F5,#FFFFFF</i></td></tr>
	<tr><td>font_size</td><td><input type="text" style="width: 300px" name="font_size" value="<?php echo $font_size;?>"></td><td>Seperate with comma. Example: <i>10px,12px,14px</i></td></tr>
	<tr><td>font_family</td><td><input type="text" style="width: 300px" name="font_family" value="<?php echo $font_family;?>"></td><td>Seperate with comma. Example: <i>Arial,Verdana,Courier</i></td></tr>
	<tr><td>sfx</td><td><input type="text" style="width: 300px" name="sfx" value="<?php echo $sfx;?>"></td><td>Seperate with comma. Example: <i>sfx1.mp3,sfx2.mp3,sfx3.mp3</i><br>Upload all mp3 to <i>/sounds/sfx/</i> folder.</td></tr>

	<?php

	$smilieHTML = '';

	$smilies_text_array = explode(",",$smilies_text);
	$smilies_images_array = explode(",",$smilies_images);

	for ( $i = 0; $i < count($smilies_text_array)-1; $i++) 
	{
		$smilieHTML .= $smilies_text_array[$i]." = ".$smilies_images_array[$i]."\r\n";	
	}

	$smilieHTML = substr($smilieHTML,0,-2);

	?>

	<tr><td>smilies</td><td><textarea wrap="off" name="smilieHTML"><?php echo $smilieHTML;?></textarea></td><td>Add each new smilie on a new line,<br>Example: <i>:) = smile.gif</i><br><br>Upload all images to <i>/smilies/</i> folder.<br><br>Important: <br><br>a) DO NOT use commas to seperate values<br>b) You must remove all [blank lines] and [spaces] after the last entry.</td></tr>
	<tr><td>gender</td><td><input type="text" name="gender" value="<?php echo $gender;?>"></td><td>Seperate all values with a comma. Example: <i>Male,Female,Couple</td></tr>
	<tr><td>profileOn</td><td><?php echo showSelectedID('profileOn',$profileOn);?></td><td>Enable profile system</td></tr>
	<tr><td>profileUrl</td><td><input type="text" name="profileUrl" value="<?php echo $profileUrl;?>"></td><td>Url to members profile page</td></tr>
	<tr><td>profileRef</td><td><input type="text" name="profileRef" value="<?php echo $profileRef;?>"></td><td>0 UserID, 1 Username (profile page urls end with <i>/userid</i> or <i>/username</i>)</td></tr>
	<tr><td>privateOn</td><td><?php echo showSelectedID('privateOn',$privateOn);?></td><td>Enable private chat</td></tr>
	<tr><td>whisperOn</td><td><?php echo showSelectedID('whisperOn',$whisperOn);?></td><td>Enable whispers</td></tr>
	<tr><td>webcamsOn</td><td><?php echo showSelectedID('webcamsOn',$webcamsOn);?></td><td>Enable webcams (requires plugin)</td></tr>
	<tr><td>advertsOn</td><td><?php echo showSelectedID('advertsOn',$advertsOn);?></td><td>Enable banner adverts (requires plugin)</td></tr>
	<tr><td>enableUrl</td><td><?php echo showSelectedID('enableUrl',$enableUrl);?></td><td>Hotlink urls in messages</td></tr>
	<tr><td>enableEmail</td><td><?php echo showSelectedID('enableEmail',$enableEmail);?></td><td>Hotlink emails in messages</td></tr>
	<tr><td>enableShoutFilter</td><td><?php echo showSelectedID('enableShoutFilter',$enableShoutFilter);?></td><td>Enable shout filter (converts all messages to lowercase)</td></tr>
	<tr><td>floodChat</td><td><input type="text" name="floodChat" value="<?php echo $floodChat;?>"></td><td>Seconds between sending messages</td></tr>
	<tr><td>newPm</td><td><input type="text" name="newPm" value="<?php echo $newPm;?>"></td><td>Private window header bar color</td></tr>
	<tr><td>newPmMin</td><td><input type="text" name="newPmMin" value="<?php echo $newPmMin;?>"></td><td>New private message header bar color (when pm is minimised)</td></tr>
	<tr><td>refreshRate</td><td><input type="text" name="refreshRate" value="<?php echo $refreshRate;?>"></td><td>Milliseconds (recommended: 3000)</td></tr>
	<tr><td>totalMessages</td><td><input type="text" name="totalMessages" value="<?php echo $totalMessages;?>"></td><td>Total messages displayed in chat window</td></tr>
	<tr><td>textAdverts</td><td><?php echo showSelectedID('textAdverts',$textAdverts);?></td><td>Enable text adverts</td></tr>
	<tr><td>textAdvertsDesc</td><td><textarea wrap="off" name="textAdvertsDesc"><?php echo str_replace(",","\r\n",$textAdvertsDesc);?></textarea></td><td>Add each new text advertisement on a new line,<br>Example: <i>roomID|text advert description</i><br><br>Important: <br><br>a) DO NOT use commas to seperate values<br>b) You must remove all [blank lines] and [spaces] after the last entry.</td></tr>
	<tr><td>textAdvertsRate</td><td><input type="text" name="textAdvertsRate" value="<?php echo $textAdvertsRate;?>"></td><td>Show text advert every <i>XXX</i> messages</td></tr>
	<tr><td>userStatusMes</td><td><input type="text" name="userStatusMes" value="<?php echo $userStatusMes;?>"></td><td>Seperate all values with a comma. Example: <i>Here,BRB,Away</i></td></tr>
	<tr><td>news</td><td><textarea name="news"><?php echo stripslashes($news);?></textarea></td><td>This is displayed on login page</td></tr>
	<tr><td>&nbsp;</td><td colspan="2"><input class="submit" type="submit" name="update" value="Update Settings"></td></tr>
	</table>

</form>

</div>