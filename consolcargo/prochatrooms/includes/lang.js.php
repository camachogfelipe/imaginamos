<?php

/*
* include files
*
*/

include("session.php");
include("config.php");

if(isset($_SESSION['lang']) && file_exists("../lang/".$_SESSION['lang']))
{
	include("../lang/".$_SESSION['lang']);
}
else
{
	include("../lang/".$CONFIG['lang'][1]);
}

/*
* declare content header
*
*/

header("content-type: application/x-javascript");

?>

var publicEntry = "<?php echo C_LANG99;?>";
var publicExit = "<?php echo C_LANG100;?>";

var lang1  = "<?php echo C_LANG55;?>";
var lang2  = "<?php echo C_LANG56;?>";
var lang3  = "<?php echo C_LANG57;?>";
var lang4  = "<?php echo C_LANG58;?>";
var lang5  = "<?php echo C_LANG59;?>";
var lang6  = "<?php echo C_LANG60;?>";
var lang7  = "<?php echo C_LANG61;?>";
var lang8  = "<?php echo C_LANG62;?>";
var lang9  = "<?php echo C_LANG63;?>";
var lang10 = "<?php echo C_LANG64;?>";
var lang11 = "<?php echo C_LANG65;?>";
var lang12 = "<?php echo C_LANG66;?>";
var lang13 = "<?php echo C_LANG67;?>";
var lang14 = "<?php echo C_LANG68;?>";
var lang15 = "<?php echo C_LANG69;?>";
var lang16 = "<?php echo C_LANG70;?>";
var lang17 = "<?php echo C_LANG71;?>";
var lang18 = "<?php echo C_LANG72;?>";
var lang19 = "<?php echo C_LANG73;?>";
var lang20 = "<?php echo C_LANG74;?>";
var lang21 = "<?php echo C_LANG75;?>";
var lang22 = "<?php echo C_LANG76;?>";
var lang23 = "<?php echo C_LANG77;?>";
var lang24 = "<?php echo C_LANG78;?>";
var lang25 = "<?php echo C_LANG79;?>";
var lang26 = "<?php echo C_LANG80;?>";
var lang27 = "<?php echo C_LANG81;?>";
var lang28 = "<?php echo C_LANG82;?>";
var lang29 = "<?php echo C_LANG83;?>";
var lang30 = "<?php echo C_LANG84;?>";
var lang31 = "<?php echo C_LANG85;?>";
var lang32 = "<?php echo C_LANG86;?>";
var lang33 = "<?php echo C_LANG87;?>";
var lang34 = "<?php echo C_LANG88;?>";
var lang35 = "<?php echo C_LANG89;?>";
var lang36 = "<?php echo C_LANG90;?>";
var lang37 = "<?php echo C_LANG91;?>";
var lang38 = "<?php echo C_LANG92;?>";
var lang39 = "<?php echo C_LANG93;?>";
var lang40 = "<?php echo C_LANG94;?>";
var lang41 = "<?php echo C_LANG95;?>";
var lang42 = "<?php echo C_LANG96;?>";
var lang43 = "<?php echo C_LANG97;?>";
var lang44 = "<?php echo C_LANG98;?>";
var lang45 = "<?php echo C_LANG157;?>";
var lang46 = "<?php echo C_LANG161;?>";
var lang47 = "<?php echo C_LANG162;?>";
var lang48 = "<?php echo C_LANG163;?>";
var lang49 = "<?php echo C_LANG164;?>";
var lang50 = "<?php echo C_LANG165;?>";
var lang51 = "<?php echo C_LANG133;?>";
var lang52 = "<?php echo C_LANG166;?>";
var lang53 = "<?php echo C_LANG167;?>";
var lang54 = "<?php echo C_LANG168;?>";
var lang55 = "<?php echo C_LANG169;?>";
var lang56 = "<?php echo C_LANG170;?>";
var lang57 = "<?php echo C_LANG171;?>";
var lang58 = "<?php echo C_LANG172;?>";
var lang59 = "<?php echo C_LANG173;?>";
var lang60 = "<?php echo C_LANG174;?>";
var lang61 = "<?php echo C_LANG175;?>";
var lang62 = "<?php echo C_LANG176;?>";
var lang63 = "<?php echo C_LANG177;?>";
var lang64 = ""; // empty
var lang65 = ""; // empty
var lang66 = ""; // empty
var lang67 = ""; // empty