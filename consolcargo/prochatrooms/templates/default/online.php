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

.table
{
	border: 2px solid #666666;
	width: 100%;
	font-family: Verdana, Arial;
	font-size: 12px;
	background-color: #333333;	
	color: #FFFFFF;
}

.header
{
	background-image:url('images/rooms.jpg');	
	background-repeat: repeat-x;
	font-weight: bold;
}

.row
{
	background-color: #F5F5F5;
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

</style>

</head>
<body class="obody">

<div class="pageheader"><?php echo C_LANG138;?></div>

<hr class="hr">

<?php echo @getUsersOnline('2');?>

<!-- do not edit below -->
<?php if(!isset($_GET['nobutton'])){?>
<p style="text-align:center;">
	<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('online');">
</p>
<?php }?>

</body>
</html>