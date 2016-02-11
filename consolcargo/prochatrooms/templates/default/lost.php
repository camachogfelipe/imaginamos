<?php
// include files
include("../../includes/ini.php");
include("../../includes/session.php");
include("../../includes/functions.php");
include("../../lang/".getLang(''));

// captcha
$showCaptcha = getCaptchaText();

// send user new password
if($_POST){$result = resetPassword($_POST);}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
<title><?php echo @copyrightTitle();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">

<style>
.text
{
	font-family: Verdana, Arial;
	font-size: 12px;
	font-style: normal;
	color: #FFFFFF;
}
.sbutton
{
	height: 22px;
	width: 160px;
	border: 1px solid #333333;
	background-color: #666666;
	color: #FFFFFF;
	cursor: pointer;
	
	-moz-border-radius: 5px;
	border-radius: 5px;		
}
.sinput
{
	width: 162px;
	border: 1px solid #666666; 
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.obody
{
	margin: 5px 5px 0 5px;
	padding: 0 0 0 0;	
	background-color: #333333;
}
.pageheader
{ 
	padding: 2px 2px 2px 34px; 
	background-color: #666666;
	font-weight: bold;
	font-size: 13px;
	height: 20px;
	color: #FFFFFF;
	font-family: Verdana, Arial;
	font-size: 12px;
	
	-moz-border-radius: 3px;
	border-radius: 3px;	

	background-image: url('images/icon.png');
	background-repeat: no-repeat;	
}

.sCaptcha
{
	color: #ffffff;
	border: 1px solid #eeeeee;
	padding: 2px;
	-moz-border-radius: 5px;
	border-radius: 5px;	
}
</style>

</head>
<body class="obody">

<div class="pageheader"><?php echo C_LANG116;?></div>

<p class="text">
	<?php echo C_LANG126;?>

	<?php if($result){echo "<br><br>Result: ".$result;}?>
</p>

<p>
	<form method="post" name="newpass" action="lost.php" style="text-align:center;">
		<input type="hidden" name="sCaptcha" value="<?php echo $showCaptcha;?>">
		<table>
		<tr><td class="text" align="left"><?php echo C_LANG121;?>:&nbsp;<input class="sinput" type="text" name="userEmail" value=""></td></tr>
		<tr><td class="text" align="left"><?php echo C_LANG156;?>:&nbsp;<input class="sCode" type="text" size="6" name="uCaptcha" value="">&nbsp;<span class="sCaptcha">&nbsp;<?php echo $showCaptcha;?>&nbsp;</span></td></tr>		
		<tr><td align="right"><input class="sbutton" type="submit" name="sendPass" value="<?php echo C_LANG127;?>"></td></tr>
		</table>
	</form>
</p>

<!-- do not edit below -->
<p style="text-align:center;">
	<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('lost');">
</p>

</body>
</html>