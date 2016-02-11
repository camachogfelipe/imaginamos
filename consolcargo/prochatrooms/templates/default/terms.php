<?php
// include files
include("../../includes/session.php");
include("../../includes/functions.php");
include("../../lang/".getLang(''));
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
<title><?php echo @copyrightTitle();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">

<style>

.hr
{
	border: 1px solid #333333;
}

.text
{
	font-family: Verdana, Arial;
	font-size: 12px;
	font-style: normal;
	color: #FFFFFF;
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

.obody
{
	margin: 5px 5px 0 5px;
	padding: 0 0 0 0;	
	background-color: #333333;	
}
</style>

</head>
<body class="obody">

<div class="pageheader">TERMS &amp; CONDITIONS</div>

<hr class="hr">

<p class="text">
	Your terms &amp; conditions appear here.
</p>

<!-- do not edit below -->
<p style="text-align:center;">
	<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('terms');">
</p>

</body>
</html>