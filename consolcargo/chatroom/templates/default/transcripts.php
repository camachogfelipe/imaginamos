<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
<title><?php echo @copyrightTitle();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="templates/<?php echo $CONFIG['template'];?>/style.css">

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

</style>

</head>
<body class="body" style="margin: 0 0 0 0;">

<?php echo @getTranscripts($_GET['roomID']); ?>

<!-- do not edit below -->
<p style="text-align:center;">
	<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('viewTranscripts');">
</p>

</body>
</html>