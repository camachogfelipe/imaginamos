<?php
// include files
include("../../includes/session.php");
include("../../includes/functions.php");
include("../../lang/".getLang(''));
// captcha
$showCaptcha = getCaptchaText();
// send email
if($_POST){$result = sendAdminEmail('1',$_POST['id'],$_POST['report']);}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
<title><?php echo @copyrightTitle();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">

<style>

.table
{
	border: 0px;
}

.header
{
	font-weight: bold;
}

.row
{
	background-color: #F5F5F5;
}

.sbody
{
	margin: 0 0 0 0; 
	padding: 0 0 0 0;
	background-color: #CCCCCC;	
	font-family: Verdana, Arial;
	font-size: 12px;
	font-style: normal;
}

.sbutton
{
	height: 24px;
	width: 140px;
	border: 1px solid #333333;
	background-color: #666666;
	color: #FFFFFF;
	cursor: pointer;
	
	-moz-border-radius: 5px;
	border-radius: 5px;		
}

.sInput
{
	height: 60px;
	width: 200px;
	border: 1px solid #666666; 
	-moz-border-radius: 5px;
	border-radius: 5px;
	
}

.sCode
{
	border: 1px solid #666666; 
	-moz-border-radius: 5px;
	border-radius: 5px;
	
}

.sCaptcha
{
	color: #000000;
	border: 1px solid #666666;
	padding: 2px;
	-moz-border-radius: 5px;
	border-radius: 5px;	
}

</style>

</head>
<body class="sbody">

<div class="roomheader">
	<div class="header" style='float:left;'><?php echo C_LANG153;?></div>
	<div class="header" style='float:right;cursor:pointer;' onclick="parent.closeMdiv('report');"><img src='../../images/close.gif'></div>
</div>

<?php if(!$_POST){?>

	<form style="padding: 0 0 0 3px;" method="post" name="report" action="report.php">
		<input type="hidden" name="sCaptcha" value="<?php echo $showCaptcha;?>">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
		<span><?php echo C_LANG154;?>,</span><br><br>
		<table class="table">
		<tr><td><?php echo C_LANG54;?>:</td><td><?php echo $_REQUEST['id'];?></td></tr>
		<tr><td valign="top"><?php echo C_LANG155;?>:</td><td><textarea class="sInput" name="report" value=""></textarea></td></tr>
		<tr><td><?php echo C_LANG156;?>:</td><td><input class="sCode" type="text" size="6" name="uCaptcha" value="">&nbsp;<span class="sCaptcha"><?php echo $showCaptcha;?></span></td></tr>
		<tr><td>&nbsp;</td><td><input class="sbutton" type="submit" name="send" value="<?php echo C_LANG136;?>"></td></tr>
		</table>
	</form>

<?php }else{ ?>

	<p>&nbsp;<?php echo $result;?></p>

	<p>&nbsp;</p>

<?php }?>

<!-- do not edit below -->
<p style="text-align:center;">
	<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('report');">
</p>

</body>
</html>