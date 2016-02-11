<?php 
// include files
include("../../includes/session.php");
include("../../includes/config.php");
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
.td
{
	color:#FFFFFF;
}
</style>

<script language="javascript" type="text/javascript">
<!--
function updateCost(cost)
{
	var perCredit = <?php echo $CONFIG['eCreditsCost'];?>;
	document.getElementById("amount").value = cost * perCredit;
	document.getElementById("showAmount").innerHTML = cost * perCredit;
}
//-->
</script>

</head>
<body class="body">

<div id="logoContainer" class="logoContainer"></div> 

<br><br>

<!-- start of custom eCredit template -->

	<table align="center" cellpadding="10" cellpadding="2" cellspacing="0" border="0" width="450">
	<tr>
	<td class="td">

	<br><br><br>

	<b><?php echo C_LANG101;?></b><br><br>

	<?php echo C_LANG102;?> <br><br>

	<b><?php echo C_LANG103;?></b><br><br>

	<?php echo $CONFIG['eCredits'];?> <?php echo C_LANG104;?><br><br>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payPalForm" target="_blank">

	<input type="hidden" name="business" value="<?php echo $CONFIG['eCreditsEmail'];?>">
	<input type="hidden" name="currency_code" value="<?php echo $CONFIG['eCreditsCurrency'];?>">
	<input type="hidden" name="item_name" value="Purchase eCredits">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="no_note" value="1">
	<input type="hidden" name="amount" id="amount" value="">

	<b><?php echo C_LANG105;?></b><br><br>

	<?php echo C_LANG106;?> <br>

	<table>
	<tr><td><?php echo C_LANG54;?>:</td><td><input name="item_number" type="text" value="<?php echo $_SESSION['username'];?>"></td></tr>
	<tr><td><?php echo C_LANG107;?>: </td><td>

		<select id="selecteCredit" onchange="updateCost(this.value);">
			<option value="0"><?php echo C_LANG108;?></option>

			<?php for($x=10;$x<=250;$x+=10){ ?>
				<option value="<?php echo $x;?>"><?php echo $x;?> <?php echo C_LANG109;?></option>
			<?php }?>
		</select>

	</td></tr>
	<tr><td><?php echo C_LANG110;?>:</td><td><span id="showAmount">0</span>&nbsp;<?php echo $CONFIG['eCreditsCurrency'];?></td></tr>
	<tr><td>&nbsp;</td><td><input type="image" src="../../images/checkout.gif"></td></tr>
	</table>

	</form>

	<?php echo C_LANG111;?>

	</td>
	</tr>
	</table>

<!-- end of custom eCredit template -->

<!-- do not edit below -->
	<p style="text-align:center;">
		<input class="button" type="button" name="close" value="<?php echo C_LANG128;?>" onclick="parent.closeMdiv('ecredits');">
	</p>

</body>
</html>