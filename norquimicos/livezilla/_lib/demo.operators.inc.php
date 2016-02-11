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

$INTERN = array();
$INTERN[$ip]["in_id"] = $ip;
$INTERN[$ip]["in_level"] = "0";
$INTERN[$ip]["in_groups"] = array($gid);
$INTERN[$ip]["in_groups_hidden"] = array();
$INTERN[$ip]["in_name"] = "Demo Operator";
$INTERN[$ip]["in_desc"] = "";
$INTERN[$ip]["in_email"] = "demo@livezilla.net";
$INTERN[$ip]["in_websp"] = 2;
$INTERN[$ip]["in_perms"] = "";
$INTERN[$ip]["in_lang"] = "";
$INTERN[$ip]["in_aac"] = "1";
$INTERN[$ip]["in_lipr"] = "";

$vfs = (!empty($INTERNAL[$ip])) ? serialize($INTERNAL[$ip]->VisitorFileSizes) : serialize(array());
$status = (!empty($INTERNAL[$ip])) ? $INTERNAL[$ip]->Status : 2;

$INTERNAL = array();
$INTERNAL[$ip] = new Operator($ip,$ip);

$INTERNAL[$ip]->Email = "demo@livezilla.net";
$INTERNAL[$ip]->Webspace = 1;
$INTERNAL[$ip]->Level = 0;
$INTERNAL[$ip]->Password = md5($password);
$INTERNAL[$ip]->Description = "Demo Operator";
$INTERNAL[$ip]->Fullname = "Demo Operator";
$INTERNAL[$ip]->Language = "EN";
$INTERNAL[$ip]->Groups = array($gid);
$INTERNAL[$ip]->GroupsArray = base64_encode(serialize(array($gid)));
$INTERNAL[$ip]->GroupsHidden = unserialize(base64_decode("YToxOntpOjA7czoxMjoiVTJWeWRtbGpaUT09Ijt9"));
array_walk($INTERNAL[$ip]->GroupsHidden,"b64dcode");
$INTERNAL[$ip]->PermissionSet = "11011021011111111100";
$INTERNAL[$ip]->CanAutoAcceptChats = true;
$INTERNAL[$ip]->LoginIPRange = $ip;
$INTERNAL[$ip]->LastActive = time();
$INTERNAL[$ip]->FirstActive = time();
$INTERNAL[$ip]->VisitorFileSizes = unserialize($vfs);
$INTERNAL[$ip]->Status = $status;

?>