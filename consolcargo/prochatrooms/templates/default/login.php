<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<title><?php echo @copyrightTitle();?></title>

<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"> 
<![endif]--> 

<!--[if lt IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"> 
<![endif]-->

<meta name="viewport" content="width=device-width, target-densityDpi=device-dpi, initial-scale=1, user-scalable=no" />		
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<script type="text/javascript" src="includes/lang.js.php"></script>
<script type="text/javascript" src="js/XmlHttpRequest.js.php"></script>
<script type="text/javascript" src="includes/settings.js.php"></script>
<script type="text/javascript" src="js/functions.js.php"></script>

<?php echo showPlugins('login');?>

<link type="text/css" rel="stylesheet" href="templates/<?php echo $CONFIG['template'];?>/style.css">

<style type="text/css">

.loginContainer
{
	margin: 0 0 0 0; 
	padding: 80px 10px 0px 10px; 
	border: 0px solid #84B2DE;
	height: 625px;
	width: 800px;
	margin: 0 auto;
}

.loginLeft
{
	margin: 10px 0 0 0; 
	padding: 2px 2px 2px 2px; 
	height: 380px !important;
	height: 428px;
	width: 528px;
	text-align: left;
	display: inline;
	float: left;
}

.loginRight
{
	margin: 10px 0 0 0; 
	padding: 2px 2px 2px 2px; 
	border: 0px solid #84B2DE;
	height: 380px;
	width: 260px;
	text-align: center;
	display: inline;
	float: right;
}

.loginSubmit
{
	height: 24px;
	width: 140px;
	color: #FFFFFF;
	cursor: pointer;
	font-weight: bold;
	background-image: url('templates/<?php echo $CONFIG['template'];?>/images/loginbutton.gif');
	background-repeat: no-repeat;
}

.loginInput
{
	height: 14px;
	width: 140px;
	border: 1px solid #CCCCCC;
	
	-moz-border-radius: 5px;
	border-radius: 5px;	
}

.loginSelect
{
	height: 20px;
	width: 140px;
	border: 1px solid #CCCCCC;
	
	-moz-border-radius: 5px;
	border-radius: 5px;		
}

.loginUserTable
{
	text-align: left; 
	color: #FFFFFF;
	width: 100%;	
}

.loginUserTableHeader
{ 
	padding: 2px 2px 2px 34px; 
	background-color: #666666;
	font-weight: bold;
	font-size: 13px;
	height: 20px;
	color: #FFFFFF;

	-moz-border-radius: 3px;
	border-radius: 3px;	

	background-image: url('templates/<?php echo $CONFIG['template'];?>/images/icon.png');
	background-repeat: no-repeat;	
}

.loginUserLatestNews
{
	color: #FFFFFF;
	min-height: 100px;
}

.copyright
{
	padding-top:50px;
	text-align: center;
	color: #999999;
	font-size: 12px;
}

.copyright A:link {text-decoration: none; color: #84B2DE;}
.copyright A:visited {text-decoration: none; color: #84B2DE;}
.copyright A:active {text-decoration: none; color: #84B2DE;}
.copyright A:hover {text-decoration: underline; color: #84B2DE;}

.link A:link {text-decoration: none; color: #999999;}
.link A:visited {text-decoration: none; color: #999999;}
.link A:active {text-decoration: none; color: #999999;}
.link A:hover {text-decoration: underline; color: #999999;}

</style>

</head> 
<body id="body" class="body" style="text-align: center;">

<?php if($loginError){?>
	<div class="welcomeMessage" style="position: fixed; top: 0px; z-index: 100; width: 100%;"><?php echo $loginError;?></div>	
<?php }?>

<div id="loginContainer" class="loginContainer">
	
	<div id="logoContainer" class="logoContainer"></div>
		
	<div id="adverContainer" class="adverContainer"></div> 	

	<div id="loginRight" class="loginRight">

		<form style="height:210px;" method="post" action="index.php" name="doLogin">
		<input type="hidden" name="login" value="1">
		<table class="loginUserTable">
		<tr><td colspan="2" class="loginUserTableHeader"><span style="float:left"><?php echo C_LANG112;?></span><span class="link" style="float:right"><a href="javascript:void(0);" onclick='showInfoBox("online","300","320","100","templates/default/online.php","");'><?php echo C_LANG113;?>: <?php echo getUsersOnline('1');?></a>&nbsp;</span></td></tr>
		<tr><td>&nbsp;</td><td><?php if($CONFIG['guestMode']){?><input class="" type="checkbox" name="isGuest" value="1" onclick="toggleLoginPass()"><?php echo C_LANG114;?><?php }?>&nbsp;</td></tr>
		<tr><td><?php echo C_LANG54;?></td><td><input class="loginInput" type="text" name="userName" value="" maxlength="16" autocomplete="off"></td></tr>
		<tr id="pass"><td><?php echo C_LANG115;?></td><td><input class="loginInput" type="password" name="userPass" value="" autocomplete="off"></td></tr>
		<tr id="lostpass"><td>&nbsp;</td><td><span class="link"><a href="javascript:void(0);" onclick='showInfoBox("lost","260","400","200","templates/default/lost.php","");'><?php echo C_LANG116;?></a></span></td></tr>
		<tr><td><?php echo C_LANG117;?></td><td>

			<select name="roomID" class="loginSelect">
				<?php echo getUserRooms($_GET['roomID']);?>
			</select>

		</td></tr>
		<tr><td><?php echo C_LANG118;?></td><td>

			<select name="langID" class="loginSelect">
				<?php echo showLang();?>
			</select>

		</td></tr>
		<tr><td><?php echo C_LANG119;?></td><td>

			<select name="genderID" class="loginSelect">
				<?php echo getUserGenders('0');?>
			</select>

		</td></tr>
		<tr><td>&nbsp;</td><td><input type="image" height="22" width="140" src="templates/default/images/login.jpg" name="newLogin" value=""></td></tr>		
		<tr><td colspan="2">&nbsp;</td></tr>
		</table>
		</form>

		<br>

		<form method="post" action="index.php" name="doReg">
		<input type="hidden" name="reg" value="1">
		<table class="loginUserTable">
		<tr><td colspan="2" class="loginUserTableHeader"><?php echo C_LANG120;?></td></tr>
		<tr><td><?php echo C_LANG54;?>*</td><td><input class="loginInput" type="text" name="rUsername" value="" autocomplete="off"></td></tr>
		<tr><td><?php echo C_LANG115;?>*</td><td><input class="loginInput" type="password" name="rPassword" value="" autocomplete="off"></td></tr>
		<tr><td><?php echo C_LANG121;?>*</td><td><input class="loginInput" type="text" name="rEmail" value="" autocomplete="off"></td></tr>
		<tr><td>&nbsp;</td><td><input class="" type="checkbox" name="terms" value="1"><span class="link"><a href="javascript:void(0);" onclick='showInfoBox("terms","400","600","100","templates/default/terms.php","");'><?php echo C_LANG123;?></a></span></td></tr>
		<tr><td>&nbsp;</td><td><input type="image" height="22" width="140" src="templates/default/images/register.jpg" name="newRegister" value=""></td></tr>
		</table>
		</form>

		<div class='copyright'>
			<?php echo copyrightFooter();?>
		</div>

	</div>

	<div id="loginLeft" class="loginLeft">

		<table class="loginUserTable">
		<tr><td colspan="2" class="loginUserTableHeader"><?php echo C_LANG125;?></td></tr>
		<tr class="loginUserLatestNews"><td colspan="2"><?php echo getLoginNews();?><br><br></td></tr>
		</table>

		<div id="latestMembers"></div>
	</div>

</div>

<div id="oInfo" class="oInfo"></div>

</body>
</html>