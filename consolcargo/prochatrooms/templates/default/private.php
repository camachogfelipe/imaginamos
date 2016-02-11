<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<title><?php echo @copyrightTitle();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link type="text/css" rel="stylesheet" href="templates/<?php echo $CONFIG['template'];?>/style.css">

<style>

.privateLogin
{
	margin: 0 0 0 0; 
	padding: 2px 2px 2px 2px; 
	border: 1px solid #84B2DE;
	background-color: #FFFFFF;
	height: 110px;
	width: 260px;
	top: 100px;
	text-align: center;
	margin: 0 auto;
}

.privateloginSubmit
{
	height: 24px;
	width: 140px;
	border: 1px solid #84B2DE;
	background-color: #EDF1FA;
	color: #84B2DE;
	cursor: pointer;
}

.privateloginInput
{
	height: 14px;
	width: 140px;
	border: 1px solid #CCCCCC;
}

.privateloginUserTable
{
	text-align: left; 
	color: #84B2DE;
	width: 100%;
}

.privateloginUserTableHeader
{ 
	background-color: #EDF1FA;
	font-weight: bold;
	font-size: 13px;
}

.linka A:link {text-decoration: none; color: #84B2DE;}
.linka A:visited {text-decoration: none; color: #84B2DE;}
.linka A:active {text-decoration: none; color: #84B2DE;}
.linka A:hover {text-decoration: underline; color: #84B2DE;}

</style>

</head> 
<body class="body" style="text-align: center;">

	<div id="privateLogin" class="privateLogin">

		<form method="post" action="index.php?roomID=<?php echo $_REQUEST['roomID'];?>" name="privateRoom">
		<table class="privateloginUserTable">
		<tr class="privateloginUserTableHeader"><td colspan="2">:: <?php echo C_LANG139;?></td></tr>
		<tr><td><?php echo C_LANG115;?></td><td><input class="privateloginInput" type="text" name="roomPass" value=""></td></tr>
		<tr><td>&nbsp;</td><td><input class="privateloginSubmit" type="submit" name="plogin" value="<?php echo C_LANG122;?>"></td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2" align="right"><span class="linka"><a href="index.php?roomID=<?php echo $CONFIG['defaultRoom'];?>"><?php echo C_LANG140;?></a></span></td></tr>
		</table>
		</form>

	</div>

</body>
</html>