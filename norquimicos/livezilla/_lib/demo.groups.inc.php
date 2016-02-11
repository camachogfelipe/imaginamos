<?php

$ip = $_SERVER["REMOTE_ADDR"];

$password = "";
$gid = "";
$gid = "g" . $ip;

if(DB_CONNECTION && ((isset($_POST["p_request"]) && $_POST["p_request"]==CALLER_TYPE_TRACK) || (isset($_GET[GET_SERVER_REQUEST_TYPE]) && $_GET[GET_SERVER_REQUEST_TYPE] == CALLER_TYPE_TRACK)))
{

}
else if(DB_CONNECTION && isset($_POST["p_request"]) && $_POST["p_request"]==CALLER_TYPE_EXTERNAL)
{

}
else if(isset($_POST["p_request"]) && $_POST["p_request"]==CALLER_TYPE_INTERNAL)
{
	$password = $_POST[POST_INTERN_AUTHENTICATION_PASSWORD];
	$_POST[POST_INTERN_AUTHENTICATION_USERID] = $ip;
}

$GROUPS = array();
$GROUPS[$gid]["gr_desc"] = "YToxOntzOjI6IkVOIjtzOjE2OiJSR1Z0YnlCSGNtOTFjQT09Ijt9";
$GROUPS[$gid]["gr_external"] = 1;
$GROUPS[$gid]["gr_internal"] = 1;
$GROUPS[$gid]["gr_created"] = "1320742948";
$GROUPS[$gid]["gr_email"] = "demo@livezilla.net";
$GROUPS[$gid]["gr_vfilters"][0][0] = md5($ip);
$GROUPS[$gid]["gr_vfilters"][0][1] = "1";
$vfilt = serialize($GROUPS[$gid]["gr_vfilters"]);
$GROUPS[$gid]["gr_standard"] = 0;
$GROUPS[$gid]["gr_hours"] = array();
$GROUPS[$gid]["gr_ex_sm"] = "1";
$GROUPS[$gid]["gr_ex_so"] = "1";
$GROUPS[$gid]["gr_ex_pr"] = "1";
$GROUPS[$gid]["gr_ex_ra"] = "1";
$GROUPS[$gid]["gr_ex_fv"] = "1";
$GROUPS[$gid]["gr_ex_fu"] = "1";
$GROUPS[$gid]["gr_ci_hidden"] = Array();
$GROUPS[$gid]["gr_ti_hidden"] = Array();
$GROUPS[$gid]["gr_ci_mand"] = Array();
$GROUPS[$gid]["gr_ti_mand"] = Array();
$GROUPS[$gid]["gr_max_chats"] = "9";

$GROUPS[$gid] = new UserGroup($gid);
$GROUPS[$gid]->IsInternal = true;
$GROUPS[$gid]->IsExternal = true;
$GROUPS[$gid]->IsStandard = true;
$GROUPS[$gid]->MaxChats =  9;
$GROUPS[$gid]->Created = 1320742948;
$GROUPS[$gid]->OpeningHours = array();
$GROUPS[$gid]->Email = "demo@livezilla.net";
$GROUPS[$gid]->VisitorFilters = array(base64_encode(md5($ip))=>"Whitelist");
$GROUPS[$gid]->ChatFunctions = "111111";
$GROUPS[$gid]->ChatInputsHidden = array();
$GROUPS[$gid]->ChatInputsMandatory = array();
$GROUPS[$gid]->TicketInputsHidden = array();
$GROUPS[$gid]->TicketInputsMandatory = array();
$GROUPS[$gid]->Descriptions["EN"] = "Demo Group";
$GROUPS[$gid]->Description = "Demo Group";
$GROUPS[$gid]->DescriptionArray = base64_decode("YToxOntzOjI6IkVOIjtzOjE2OiJSR1Z0YnlCSGNtOTFjQT09Ijt9");
$GROUPS[$gid]->LoadPredefinedMessages();






?>