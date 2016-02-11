<?php
/****************************************************************************************
* LiveZilla functions.global.inc.php
* 
* Copyright 2013 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
***************************************************************************************/ 

if(!defined("IN_LIVEZILLA"))
	die();

function defineURL($_file)
{
	global $CONFIG;
	if(!empty($_SERVER['REQUEST_URI']) && !empty($_CONFIG["gl_root"]))
	{
		$parts = parse_url($_SERVER['REQUEST_URI']);
		define("LIVEZILLA_URL",getScheme() . $CONFIG["gl_host"] . str_replace($_file,"",$parts["path"]));
	}
	else
		define("LIVEZILLA_URL",getScheme() . $_SERVER["HTTP_HOST"] . str_replace($_file,"",htmlentities($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")));
}

function initStatisticProvider()
{
	global $STATS;
	require(LIVEZILLA_PATH . "_lib/objects.stats.inc.php");
	$STATS = new StatisticProvider();
}

function hexDarker($_color,$_change=30,$rgb="")
{
	$_color = str_replace("#", "", $_color);
    if(strlen($_color) != 6)
		return "#000000";
    for ($x=0;$x<3;$x++)
	{
        $c = hexdec(substr($_color,(2*$x),2)) - $_change;
        $c = ($c < 0) ? 0 : dechex($c);
        $rgb .= (strlen($c) < 2) ? "0".$c : $c;
    }
    return "#".$rgb;
}

function loadConfig()
{
	global $CONFIG,$_CONFIG;
	
	if(file_exists(FILE_CONFIG))
		require(FILE_CONFIG);
	else if(file_exists(FILE_FTP_CONFIG))
		require(FILE_FTP_CONFIG);
		
	$siteid = 0;

	if(file_exists(str_replace("config.inc","config.".strtolower($_SERVER["HTTP_HOST"]).".inc",FILE_CONFIG)))
	{
		require(str_replace("config.inc","config.".strtolower($_SERVER["HTTP_HOST"]).".inc",FILE_CONFIG));
	}
	else if(!empty($_GET["ws"]) && file_exists(str_replace("config.inc","config.".strtolower(base64_decode($_GET["ws"])).".inc",FILE_CONFIG)))
	{
		require(str_replace("config.inc","config.".strtolower(base64_decode($_GET["ws"])).".inc",FILE_CONFIG));
	}
	foreach($_CONFIG as $key => $value)
		if(is_array($value) && is_int($key))
		{
			foreach($value as $skey => $svalue)
			{
				if(is_array($svalue))
				{
					foreach($svalue as $sskey => $ssvalue)
						$CONFIG[$skey][$sskey]=base64_decode($ssvalue);
				}
				else
					$CONFIG[$skey] = base64_decode($svalue);
			}
		}
		else if(is_array($value))
		{
			foreach($value as $skey => $svalue)
				$CONFIG[$key][$skey]=base64_decode($svalue);
		}
		else
			$CONFIG[$key]=base64_decode($value);
	
	if(empty($CONFIG["gl_host"]))
		$CONFIG["gl_host"] = $_SERVER["HTTP_HOST"];
		
	if(!empty($CONFIG["gl_stmo"]) && !(defined("SERVERSETUP") && SERVERSETUP))
	{
		$CONFIG["poll_frequency_tracking"] = 86400;
		$CONFIG["timeout_track"] = 0;
	}
	
    define("STATS_ACTIVE", !empty($CONFIG["gl_stp"]));
	define("ISSUBSITE",empty($CONFIG["gl_root"]) || !empty($_POST["p_host"]));
	define("SUBSITEHOST",((ISSUBSITE) ? ((!empty($_POST["p_host"]) && strpos($_POST["p_host"],"..")===false) ? $_POST["p_host"] : $CONFIG["gl_host"]) : ""));
	
	if(function_exists("date_default_timezone_set"))
	{
		if(getSystemTimezone() !== false)
			@date_default_timezone_set(getSystemTimezone());
		else
			@date_default_timezone_set('Europe/Dublin');
	}
}

function loadDatabaseConfig()
{
	global $CONFIG;
	
	$CONFIG["dyn"] = array();
	if(!empty($CONFIG["gl_ccac"]))
	{
		$CONFIG["db"]["cct"] = array();
		$result = queryDB(true,"SELECT *,`t1`.`id` AS `typeid` FROM `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_TYPES."` AS `t1` INNER JOIN `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_LOCALIZATIONS."` AS `t2` ON `t1`.`id`=`t2`.`tid` ORDER BY `t1`.`price`;");
		while($row = @mysql_fetch_array($result, MYSQL_BOTH))
		{
			if(!isset($CONFIG["db"]["cct"][$row["typeid"]]))
				$CONFIG["db"]["cct"][$row["typeid"]] = new CommercialChatBillingType($row);
			$ccli = new CommercialChatVoucherLocalization($row);
			$CONFIG["db"]["cct"][$row["typeid"]]->Localizations[$row["language"]]=$ccli;
		}
		$result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_PROVIDERS."`;");
		while($row = @mysql_fetch_array($result, MYSQL_BOTH))
			if($row["name"] == "Custom")
				$CONFIG["db"]["ccpp"]["Custom"] = new CommercialChatPaymentProvider($row);
			else
				$CONFIG["db"]["ccpp"][$row["name"]] = new CommercialChatPaymentProvider($row);
	}
}

function handleError($_errno, $_errstr, $_errfile, $_errline)
{
	if(error_reporting()!=0)
		errorLog(date("d.m.y H:i") . " ERR# " . $_errno." ".$_errstr." ".$_errfile." IN LINE ".$_errline."\r");
}

function getAvailability($_serverOnly=false)
{
	global $CONFIG;
	if(!$_serverOnly && !empty($CONFIG["gl_deac"]))
		return false;
	return (@file_exists(FILE_SERVER_DISABLED)) ? false : true;
}

function slashesStrip($_value)
{
	if (@get_magic_quotes_gpc() == 1 || strtolower(@get_magic_quotes_gpc()) == "on")
        return stripslashes($_value);
    return $_value; 
}

function getIdle()
{
	if(file_exists(FILE_SERVER_IDLE) && @filemtime(FILE_SERVER_IDLE) < (time()-15))
		@unlink(FILE_SERVER_IDLE);
	return file_exists(FILE_SERVER_IDLE);
}

function getIP($_dontmask=false,$_forcemask=false,$ip="")
{
	global $CONFIG;
	$params = array($CONFIG["gl_sipp"]);
	foreach($params as $param)
		if(!empty($_SERVER[$param]))
		{
			$ipf = $_SERVER[$param];
			if(strpos($ipf,",") !== false)
			{
				$parts = explode(",",$ipf);
				foreach($parts as $part)
					if(substr_count($part,".") == 3 || substr_count($part,":") >= 3)
						$ip = trim($part);
			}
			else if(substr_count($ipf,".") == 3 || substr_count($ipf,":") >= 3)
				$ip = trim($ipf);
		}
	if(empty($ip))
		$ip = $_SERVER["REMOTE_ADDR"];
	if((!$CONFIG["gl_maskip"] || $_dontmask) && !$_forcemask)
		return $ip;
	else
	{
		$split = (substr_count($ip,".") > 0) ? "." : ":";
		$parts = explode($split,$ip);
		$val="";
		for($i=0;$i<count($parts)-1;$i++)
			$val.= $parts[$i].$split;
		return $val . "xxx";
	}
}

function getHost()
{
	global $CONFIG;
	$ip = getIP(true);
	$host = @utf8_encode(@gethostbyaddr($ip));
	if($CONFIG["gl_maskip"])
	{
		$parts = explode(".",$ip);
		if(!empty($parts[3]))
			return str_replace($parts[3],"xxx",$host);
	}
	return $host;
}

function getTimeDifference($_time)
{
	$_time = (time() - $_time);
	if(abs($_time) <= 5)
		$_time = 0;
	return $_time;
}

function parseBool($_value,$_toString=true)
{
	if($_toString)
		return ($_value) ? "true" : "false";
	else
		return ($_value) ? "1" : "0";
}

function namebase($_path)
{
	$file = basename($_path);
	if(strpos($file,'\\') !== false)
	{
		$tmp = preg_split("[\\\]",$file);
		$file = $tmp[count($tmp) - 1];
		return $file;
	}
	else
		return $file;
}

function getScheme()
{
	$scheme = SCHEME_HTTP;
	if(!empty($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"]) == "on")
		$scheme = SCHEME_HTTP_SECURE;
	if(!empty($_SERVER["HTTP_X_FORWARDED_PROTO"]) && strtolower($_SERVER["HTTP_X_FORWARDED_PROTO"]) == "https")
		$scheme = SCHEME_HTTP_SECURE;
	else if(!empty($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] == 443)
		$scheme = SCHEME_HTTP_SECURE;
	return $scheme;
}

function applyReplacements($_toReplace,$_language=true,$_config=true)
{
	global $CONFIG,$LZLANG;
	
	languageSelect();
	$to_replace = array();
	if($_language)
		$to_replace["lang"] = $LZLANG;
	if($_config)
		$to_replace["config"] = $CONFIG;
	
	foreach($to_replace as $type => $values)
		foreach($values as $short => $value)
			if(!is_array($value))
			{
				$_toReplace = str_replace("<!--".$type."_".$short."-->",$value,$_toReplace);
			}
			else
				foreach($value as $subKey => $subValue)
				{
					if(!is_array($subValue))
						$_toReplace = str_replace("<!--".$type."_".$subKey."-->",$subValue,$_toReplace);
				}
	
	if($_language)
		for($i=1;$i<=10;$i++)
			$_toReplace = str_replace("<!--lang_client_custom_".str_pad($i, 2, "0", STR_PAD_LEFT)."-->","",$_toReplace);
					
	return str_replace("<!--file_chat-->",FILE_CHAT,$_toReplace);
}

function getGeoURL()
{
	global $CONFIG;
	if(!empty($CONFIG["gl_pr_ngl"]))
		return CONFIG_LIVEZILLA_GEO_PREMIUM;
	else
		return "";
}

function geoReplacements($_toReplace, $jsa = "")
{
	global $CONFIG,$LZLANG;
	$_toReplace = str_replace("<!--geo_url-->",getGeoURL() . "?aid=" . $CONFIG["wcl_geo_tracking"]."&sid=".base64_encode($CONFIG["gl_lzid"])."&dbp=".$CONFIG["gl_gtdb"],$_toReplace);
	if(!isnull(trim($CONFIG["gl_pr_ngl"])))
	{
		$jsc = "var chars = new Array(";
		$jso = "var order = new Array(";
		$chars = str_split(sha1($CONFIG["gl_pr_ngl"] . date("d"),false));
		$keys = array_keys($chars);
		shuffle($keys);
		foreach($keys as $key)
		{
			$jsc .= "'" . $chars[$key] . "',";
			$jso .= $key . ",";
		}
		$jsa .= $jsc . "0);\r\n";$jsa .= $jso . "0);\r\n";
		$jsa .= "while(lz_oak.length < (chars.length-1))for(var f in order)if(order[f] == lz_oak.length)lz_oak += chars[f];\r\n";
	}
	$_toReplace = str_replace("<!--calcoak-->",$jsa,$_toReplace);
	$_toReplace = str_replace("<!--mip-->",getIP(false,true),$_toReplace);
	return $_toReplace;
}

function processHeaderValues()
{
	if(!empty($_GET["INTERN_AUTHENTICATION_USERID"]))
	{
		$_POST[POST_INTERN_AUTHENTICATION_USERID] = base64_decode($_GET["INTERN_AUTHENTICATION_USERID"]);
		$_POST[POST_INTERN_AUTHENTICATION_PASSWORD] = base64_decode($_GET["INTERN_AUTHENTICATION_PASSWORD"]);
		$_POST[POST_INTERN_FILE_TYPE] = base64_decode($_GET["INTERN_FILE_TYPE"]);
		$_POST["p_request"] = base64_decode($_GET["SERVER_REQUEST_TYPE"]);
		$_POST[POST_INTERN_SERVER_ACTION] = base64_decode($_GET["INTERN_SERVER_ACTION"]);
	}
	if(!empty($_SERVER["ADMINISTRATE"]))
		$_POST[POST_INTERN_ADMINISTRATE] = base64_decode($_GET["ADMINISTRATE"]);
}

function getInternalSystemIdByUserId($_userId)
{
	global $INTERNAL;
	foreach($INTERNAL as $sysId => $intern)
	{
		if($intern->UserId == $_userId)
			return $sysId;
	}
	return null;
}

function md5file($_file)
{
	global $RESPONSE;
	$md5file = @md5_file($_file);
	if(gettype($md5file) != 'boolean' && $md5file != false)
		return $md5file;
}

function getFile($_file,$data="")
{
	if(@file_exists($_file) && strpos($_file,"..") === false)
	{
		$handle = @fopen($_file,"r");
		if($handle)
		{
		   	$data = @fread($handle,@filesize($_file));
			@fclose ($handle);
		}
		return $data;
	}
}

function getParam($_getParam)
{
	if(isset($_GET[$_getParam]))
		return base64UrlEncode(base64UrlDecode($_GET[$_getParam]));
	else
		return null;
}

function getOptionalParam($_getParam,$_default,&$_changed=false)
{
	if(isset($_GET[$_getParam]))
	{
		if(base64UrlDecode($_GET[$_getParam]) != $_default)
			$_changed = true;
		return base64UrlDecode($_GET[$_getParam]);
	}
	else
		return $_default;
}

function getParams($_getParams="",$_allowed=null)
{
	foreach($_GET as $key => $value)
		if($key != "template" && !($_allowed != null && !isset($_allowed[$key])))
		{
			$value = !($_allowed != null && !$_allowed[$key]) ? base64UrlEncode(base64UrlDecode($value)) : base64UrlEncode($value);
			$_getParams.=((strlen($_getParams) == 0) ? $_getParams : "&") . urlencode($key) ."=" . $value;
		}
	return $_getParams;
}

function getCustomArray($_getCustomParams=null)
{
	global $INPUTS;
	initData(false,false,false,false,false,false,false,true);
	
	if(empty($_getCustomParams))
		$_getCustomParams = array('','','','','','','','','','');

	for($i=0;$i<=9;$i++)
	{
		if(isset($_GET["cf" . $i]))
			$_getCustomParams[$i] = base64UrlDecode($_GET["cf" . $i]);
		else if(isset($_POST["p_cf" . $i]) && !empty($_POST["p_cf" . $i]))
			$_getCustomParams[$i] = base64UrlDecode($_POST["p_cf" . $i]);
		else if(isset($_POST["form_" . $i]) && !empty($_POST["form_" . $i]))
			$_getCustomParams[$i] = $_POST["form_" . $i];
		else if(!isnull(getCookieValue("cf_" . $i)) && $INPUTS[$i]->Cookie)
			$_getCustomParams[$i] = getCookieValue("cf_" . $i);
		else if(($INPUTS[$i]->Type == "CheckBox" || $INPUTS[$i]->Type == "ComboBox") && empty($_getCustomParams[$i]))
			$_getCustomParams[$i] = "0";
	}
	return $_getCustomParams;
}

function cfgFileSizeToBytes($_configValue) 
{
	$_configValue = strtolower(trim($_configValue));
	$last = substr($_configValue,strlen($_configValue)-1,1);
	switch($last) 
	{
	    case 'g':
	        $_configValue *= 1024;
	    case 'm':
	        $_configValue *= 1024;
	    case 'k':
	        $_configValue *= 1024;
	}
	return floor($_configValue);
}

function createFile($_filename,$_content,$_recreate,$_backup=true)
{
	administrationLog("createFile",$_filename,((defined("CALLER_SYSTEM_ID")) ? CALLER_SYSTEM_ID : ""));
	if(strpos($_filename,"..") === false)
	{
		if(file_exists($_filename))
		{
			if($_recreate)
			{
				if(file_exists($_filename.".bak.php"))
					@unlink($_filename.".bak.php");
				if($_backup)
					@rename($_filename,$_filename.".bak.php");
				else
					@unlink($_filename);
			}
			else
				return 0;
		}
		$handle = @fopen($_filename,"w");
		if(strlen($_content)>0)
			fputs($handle,$_content);
		fclose($handle);
		return 1;
	}
	return 0;
}

function b64dcode(&$_a,$_b)
{
	$_a = base64_decode($_a);
}

function b64ecode(&$_a,$_b)
{
	$_a = base64_encode($_a);
}

function base64UrlDecode($_input,$_check=false)
{
    return base64_decode(str_replace(array('_','-',','),array('=','+','/'),$_input));
}

function base64UrlEncode($_input)
{
    return str_replace(array('=','+','/'),array('_','-',','),base64_encode($_input));
}

function isBase64Encoded($_data)
{
	if(preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $_data))
		return true;
	else
		return false;
}

function cutString($_string,$_maxlength)
{
	if(strlen($_string)>$_maxlength)
		return substr($_string,0,$_maxlength);
	return $_string;
}

function base64ToFile($_filename,$_content)
{
	administrationLog("base64ToFile",$_filename,CALLER_SYSTEM_ID);
	if(@file_exists($_filename))
		@unlink($_filename);
	$handle = @fopen($_filename,"wb");
	@fputs($handle,base64_decode($_content));
	@fclose($handle);
}

function fileToBase64($_filename)
{
	if(@filesize($_filename) == 0)
		return "";
	$handle = @fopen($_filename,"rb");
	$content = @fread($handle,@filesize($_filename));
	@fclose($handle);
	return base64_encode($content);
}

function initData($_internal=false,$_groups=false,$_visitors=false,$_filters=false,$_events=false,$_languages=false,$_countries=false,$_inputs=false)
{
	global $INTERNAL,$GROUPS,$LANGUAGES,$COUNTRIES,$FILTERS,$EVENTS,$VISITORS,$INPUTS;
	if($_internal && empty($INTERNAL))loadInternals();
	if($_groups && empty($GROUPS))loadGroups();
	if($_languages && empty($LANGUAGES))loadLanguages();
	if($_countries && empty($COUNTRIES))loadCountries();
	if($_filters && empty($FILTERS))loadFilters();
	if($_events && empty($EVENTS))loadEvents();
	if($_visitors && empty($VISITORS))loadVisitors();
	if($_inputs && empty($INPUTS))loadInputs();
}

function getData($_internal,$_groups,$_visitors,$_filters,$_events=false)
{
	if($_internal)loadInternals();
	if($_groups)loadGroups();
	if(DB_CONNECTION)
	{
		if($_visitors)loadVisitors();
		if($_filters)loadFilters();
		if($_events)loadEvents();
	}
}

function loadInputs($count=0)
{
	global $CONFIG,$INPUTS;
	if(!empty($CONFIG["gl_input_list"]))
		foreach($CONFIG["gl_input_list"] as $index => $values)
		{
			$input = new DataInput($values);
			$sorter[($input->Position+10)."-".$count++] = $input;
		}
	$sorter[($input->Position+10)."-".$count++] = new DataInput(null);
	ksort($sorter);
	foreach($sorter as $input)
		$INPUTS[$input->Index] = $input;
}

function loadLanguages()
{
	global $LANGUAGES;
	require("./_lib/objects.languages.inc.php");
}

function loadCountries()
{
	global $COUNTRIES,$COUNTRY_ALIASES;
	require("./_lib/objects.countries.inc.php");
}

function loadFilters()
{
	global $FILTERS;
	$FILTERS = new FilterList();
}

function loadEvents()
{
	global $EVENTS;
	$EVENTS = new EventList();
	$result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENTS."` WHERE `priority`>=0 ORDER BY `priority` DESC;");
	while($row = @mysql_fetch_array($result, MYSQL_BOTH))
	{
		$Event = new Event($row);
		$result_urls = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_URLS."` WHERE `eid`='".@mysql_real_escape_string($Event->Id)."';");
		while($row_url = @mysql_fetch_array($result_urls, MYSQL_BOTH))
		{
			$EventURL = new EventURL($row_url);
			$Event->URLs[$EventURL->Id] = $EventURL;
		}
		
		$result_funnel_urls = queryDB(true,"SELECT `ind`,`uid` FROM `".DB_PREFIX.DATABASE_EVENT_FUNNELS."` WHERE `eid`='".@mysql_real_escape_string($Event->Id)."';");
		while($funnel_url = @mysql_fetch_array($result_funnel_urls, MYSQL_BOTH))
		{
			$Event->FunnelUrls[$funnel_url["ind"]] = $funnel_url["uid"];
		}
		$result_actions = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTIONS."` WHERE `eid`='".@mysql_real_escape_string($Event->Id)."';");
		while($row_action = @mysql_fetch_array($result_actions, MYSQL_BOTH))
		{
			$EventAction = new EventAction($row_action);
			$Event->Actions[$EventAction->Id] = $EventAction;
			
			if($EventAction->Type==2)
			{
				$result_action_invitations = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_OVERLAYS."` WHERE `action_id`='".@mysql_real_escape_string($EventAction->Id)."';");
				$row_invitation = @mysql_fetch_array($result_action_invitations, MYSQL_BOTH);
				$EventAction->Invitation = new Invitation($row_invitation);
				$result_senders = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_SENDERS."` WHERE `pid`='".@mysql_real_escape_string($EventAction->Invitation->Id)."' ORDER BY `priority` DESC;");
				while($row_sender = @mysql_fetch_array($result_senders, MYSQL_BOTH))
				{
					$InvitationSender = new EventActionSender($row_sender);
					$EventAction->Invitation->Senders[$InvitationSender->Id] = $InvitationSender;
				}
			}
			else if($EventAction->Type==5)
			{
				$result_action_overlaybox = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_OVERLAYS."` WHERE `action_id`='".@mysql_real_escape_string($EventAction->Id)."';");
				$row_overlaybox = @mysql_fetch_array($result_action_overlaybox, MYSQL_BOTH);
				$EventAction->OverlayBox = new OverlayElement($row_overlaybox);
			}
			else if($EventAction->Type==4)
			{
				$result_action_website_pushs = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_WEBSITE_PUSHS."` WHERE `action_id`='".@mysql_real_escape_string($EventAction->Id)."';");
				$row_website_push = @mysql_fetch_array($result_action_website_pushs, MYSQL_BOTH);
				$EventAction->WebsitePush = new WebsitePush($row_website_push,true);
				
				$result_senders = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_SENDERS."` WHERE `pid`='".@mysql_real_escape_string($EventAction->WebsitePush->Id)."' ORDER BY `priority` DESC;");
				while($row_sender = @mysql_fetch_array($result_senders, MYSQL_BOTH))
				{
					$WebsitePushSender = new EventActionSender($row_sender);
					$EventAction->WebsitePush->Senders[$WebsitePushSender->Id] = $WebsitePushSender;
				}
			}
			else if($EventAction->Type<2)
			{
				$result_receivers = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_RECEIVERS."` WHERE `action_id`='".@mysql_real_escape_string($EventAction->Id)."';");
				while($row_receiver = @mysql_fetch_array($result_receivers, MYSQL_BOTH))
					$EventAction->Receivers[$row_receiver["receiver_id"]] = new EventActionReceiver($row_receiver);
			}
		}
		if(STATS_ACTIVE)
		{
			$result_goals = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_GOALS."` WHERE `event_id`='".@mysql_real_escape_string($Event->Id)."';");
			while($row_goals = @mysql_fetch_array($result_goals, MYSQL_BOTH))
				$Event->Goals[$row_goals["goal_id"]] = new EventAction($row_goals["goal_id"],9);
		}
		$EVENTS->Events[$Event->Id] = $Event;
	}
}

function loadInternals()
{
	global $CONFIG,$INTERNAL;
	if(DB_CONNECTION)
	{
		$result = queryDB(false,"SELECT * FROM `".DB_PREFIX.DATABASE_OPERATORS."` ORDER BY `bot` ASC, `fullname` ASC;");
		if(!$result)
			$result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_OPERATORS."`;");
		while($row = @mysql_fetch_array($result, MYSQL_BOTH))
		{
			if(!empty($row["system_id"]))
			{
				$INTERNAL[$row["system_id"]] = new Operator($row["system_id"],$row["id"]);
				$INTERNAL[$row["system_id"]]->Email = $row["email"];
				$INTERNAL[$row["system_id"]]->Webspace = $row["webspace"];
				$INTERNAL[$row["system_id"]]->Level = $row["level"];
				$INTERNAL[$row["system_id"]]->Description = $row["description"];
				$INTERNAL[$row["system_id"]]->Fullname = $row["fullname"];
				$INTERNAL[$row["system_id"]]->Language = $row["languages"];
				$INTERNAL[$row["system_id"]]->Groups = @unserialize(base64_decode($row["groups"]));
				if(!empty($INTERNAL[$row["system_id"]]->Groups))
					array_walk($INTERNAL[$row["system_id"]]->Groups,"b64dcode");
				$INTERNAL[$row["system_id"]]->GroupsHidden = @unserialize(base64_decode($row["groups_hidden"]));
				if(!empty($INTERNAL[$row["system_id"]]->GroupsHidden))
					array_walk($INTERNAL[$row["system_id"]]->GroupsHidden,"b64dcode");
				$INTERNAL[$row["system_id"]]->GroupsArray = $row["groups"];
				$INTERNAL[$row["system_id"]]->PermissionSet = $row["permissions"];
				$INTERNAL[$row["system_id"]]->CanAutoAcceptChats = (isset($row["auto_accept_chats"])) ? $row["auto_accept_chats"] : 1;
				$INTERNAL[$row["system_id"]]->LoginIPRange = $row["login_ip_range"];
				$INTERNAL[$row["system_id"]]->IsBot = !empty($row["bot"]);
				$INTERNAL[$row["system_id"]]->FirstCall = ($row["first_active"]<(time()-$CONFIG["timeout_clients"]));
				$INTERNAL[$row["system_id"]]->LoginId = $row["login_id"];
				$INTERNAL[$row["system_id"]]->FirstActive = ($row["first_active"]<(time()-$CONFIG["timeout_clients"]))?time():$row["first_active"];
				$INTERNAL[$row["system_id"]]->Password = $row["password"];
				$INTERNAL[$row["system_id"]]->Status = ($row["last_active"]<(time()-$CONFIG["timeout_clients"]))?USER_STATUS_OFFLINE:$row["status"];
				$INTERNAL[$row["system_id"]]->Level = $row["level"];
				$INTERNAL[$row["system_id"]]->IP = $row["ip"];
				$INTERNAL[$row["system_id"]]->Typing = $row["typing"];
				$INTERNAL[$row["system_id"]]->SignOffRequest = !empty($row["sign_off"]);
				$INTERNAL[$row["system_id"]]->VisitorFileSizes = @unserialize($row["visitor_file_sizes"]);
				$INTERNAL[$row["system_id"]]->Reposts = @unserialize(@$row["reposts"]);
				if(!empty($row["groups_status"]))
					$INTERNAL[$row["system_id"]]->GroupsAway = @unserialize($row["groups_status"]);
				$INTERNAL[$row["system_id"]]->LastActive = $row["last_active"];
				$INTERNAL[$row["system_id"]]->LastChatAllocation = $row["last_chat_allocation"];
				$INTERNAL[$row["system_id"]]->PasswordChange = $row["password_change"];
				$INTERNAL[$row["system_id"]]->PasswordChangeRequest = !empty($row["password_change_request"]);
				$INTERNAL[$row["system_id"]]->WebsitesUsers = @unserialize(base64_decode(@$row["websites_users"]));
				if(!empty($INTERNAL[$row["system_id"]]->WebsitesUsers))
					array_walk($INTERNAL[$row["system_id"]]->WebsitesUsers,"b64dcode");
				$INTERNAL[$row["system_id"]]->WebsitesConfig = @unserialize(base64_decode(@$row["websites_config"]));
				if(!empty($INTERNAL[$row["system_id"]]->WebsitesConfig))
					array_walk($INTERNAL[$row["system_id"]]->WebsitesConfig,"b64dcode");
					
				if($INTERNAL[$row["system_id"]]->IsBot)
				{
					$INTERNAL[$row["system_id"]]->FirstCall =
					$INTERNAL[$row["system_id"]]->FirstActive = 
					$INTERNAL[$row["system_id"]]->LastActive = time();
					$INTERNAL[$row["system_id"]]->Status = USER_STATUS_ONLINE;
					$INTERNAL[$row["system_id"]]->WelcomeManager = !empty($row["wm"]);
					$INTERNAL[$row["system_id"]]->WelcomeManagerOfferHumanChatAfter = $row["wmohca"];
				}
			}
		}
	}
	if(empty($INTERNAL))
	{
		$INTERNAL = array();
		if(!empty($CONFIG["gl_insu"]) && !empty($CONFIG["gl_insp"]))
		{
			$INTERNAL[$CONFIG["gl_insu"]] = new Operator($CONFIG["gl_insu"],$CONFIG["gl_insu"]);
			$INTERNAL[$CONFIG["gl_insu"]]->Level = USER_LEVEL_ADMIN;
			$INTERNAL[$CONFIG["gl_insu"]]->Password = $CONFIG["gl_insp"];
		}
	}
	if(DEMO_MODE && !(defined("SERVERSETUP") && SERVERSETUP))
		require(LIVEZILLA_PATH . "_lib/demo.operators.inc.php");
}

function loadGroups()
{
	global $GROUPS,$CONFIG,$INTERNAL;

	if(DEMO_MODE && !(defined("SERVERSETUP") && SERVERSETUP))
	{
		require(LIVEZILLA_PATH . "_lib/demo.groups.inc.php");
	}

	if(DB_CONNECTION)
	{
		$result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_GROUPS."`;");
		if($result)
			while($row = mysql_fetch_array($result, MYSQL_BOTH))
			{
				if(empty($GROUPS[$row["id"]]))
					$GROUPS[$row["id"]] = new UserGroup($row["id"],$row);
					
				if((!empty($row["hide_chat_group_selection"]) || isset($_GET["hcgs"])) && !defined("HideChatGroupSelection"))
					define("HideChatGroupSelection",true);
				if((!empty($row["hide_ticket_group_selection"]) || isset($_GET["htgs"])) && !defined("HideTicketGroupSelection"))
					define("HideTicketGroupSelection",true);
			}
	}

	if(!empty($_POST["p_groups_0_id"]) && empty($GROUPS) && defined("SERVERSETUP") && SERVERSETUP && !empty($INTERNAL))
		$GROUPS["DEFAULT"] = new UserGroup("DEFAULT");
}

function loadVisitors($_fullList=false,$_sqlwhere="",$_limit="",$count=0)
{
	global $VISITOR,$CONFIG,$COUNTRIES,$INTERNAL;
	$VISITOR = array();
	
	if(!$_fullList)
		$_sqlwhere = " WHERE `last_active`>".@mysql_real_escape_string(time()-$CONFIG["timeout_track"]);

	$result = queryDB(true,"SELECT *,`t1`.`id` AS `id` FROM `".DB_PREFIX.DATABASE_VISITORS."` AS `t1` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_BROWSERS."` AS `t2` ON `t1`.`browser`=`t2`.`id` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_CITIES."` AS `t3` ON `t1`.`city`=`t3`.`id` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_REGIONS."` AS `t4` ON `t1`.`region`=`t4`.`id` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_ISPS."` AS `t5` ON `t1`.`isp`=`t5`.`id` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_SYSTEMS."` AS `t6` ON `t1`.`system`=`t6`.`id` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_DATA_RESOLUTIONS."` AS `t8` ON `t1`.`resolution`=`t8`.`id`".$_sqlwhere." ORDER BY `entrance` ASC".$_limit.";");
	if($result)
	{
		initData(false,false,false,false,false,false,true);
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
			if(!isset($VISITOR[$row["id"]]))
			{
				$row["countryname"] = $COUNTRIES[$row["country"]];
				if(!isset($vcount[$row["id"]]))
					$vcount[$row["id"]]=0;
				$vcount[$row["id"]]++;
				$row["dcount"] = $vcount[$row["id"]];
				$index = ($_fullList) ? $count++ : $row["id"];
				$VISITOR[$index] = new Visitor($row["id"]);
				$VISITOR[$index]->Load($row);
				$VISITOR[$index]->LoadBrowsers($_fullList);
			}
		$visitors = $VISITOR;
		$VISITOR = array();
		foreach($visitors as $vid => $visitor)
		{
			if(count($visitor->Browsers) > 0 || $_fullList)
			{
				$VISITOR[$vid] = $visitor;
			}
		}
	}
}

function getTargetParameters($allowCOM=true)
{
	global $GROUPS;
	$parameters = array("exclude"=>null,"include_group"=>null,"include_user"=>null);
	
	if(isset($_GET[GET_EXTERN_HIDDEN_GROUPS]))
	{
		$groups = base64UrlDecode($_GET[GET_EXTERN_HIDDEN_GROUPS]);
		if(strlen($groups) > 1)
			$parameters["exclude"] = explode("?",$groups);
		if(isset($_GET[GET_EXTERN_GROUP]))
			$parameters["include_group"] = array(base64UrlDecode($_GET[GET_EXTERN_GROUP]));
		if(isset($_GET[GET_EXTERN_INTERN_USER_ID]))
			$parameters["include_user"] = base64UrlDecode($_GET[GET_EXTERN_INTERN_USER_ID]);
		if(strlen($groups) == 1 && is_array($GROUPS))
			foreach($GROUPS as $gid => $group)
				if(!in_array($gid,$parameters["include_group"]))
					$parameters["exclude"][] = $gid;
	}
	
	if(!$allowCOM)
	{
		initData(false,true);
		foreach($GROUPS as $gid => $group)
			if(!empty($GROUPS[$gid]->ChatVouchersRequired) && !(is_array($parameters["exclude"]) && in_array($gid,$parameters["exclude"])))
				$parameters["exclude"][] = $gid;
	}
	return $parameters;
}

function operatorsAvailable($_amount=0, $_exclude=null, $include_group=null, $include_user=null, $_allowBots=false)
{
	global $CONFIG,$INTERNAL,$GROUPS;
	if(!DB_CONNECTION)
		return 0;
	initData(true,true);
	if(!empty($include_user))
		$include_group = $INTERNAL[getInternalSystemIdByUserId($include_user)]->GetGroupList(true);

	foreach($INTERNAL as $sysId => $internaluser)
	{
		$isex = $internaluser->IsExternal($GROUPS, $_exclude, $include_group, true);
		if($isex && $internaluser->Status < USER_STATUS_OFFLINE)
		{
			if($_allowBots || !$internaluser->IsBot)
				$_amount++;
		}
	}
	return $_amount;
}

function getOperatorList()
{
	global $INTERNAL,$GROUPS;
	$array = array();
	initData(true,true,false,false);
	foreach($INTERNAL as $sysId => $internaluser)
		if($internaluser->IsExternal($GROUPS))
			$array[utf8_decode($internaluser->Fullname)] = $internaluser->Status;
	return $array;
}

function getOperators()
{
	global $INTERNAL,$GROUPS;
	$array = array();
	initData(true,true,false,false);
	foreach($INTERNAL as $sysId => $internaluser)
	{
		$internaluser->IsExternal($GROUPS);
		$array[$sysId] = $internaluser;
	}
	return $array;
}

function isValidUploadFile($_filename)
{
	global $CONFIG;
	if(!empty($CONFIG["wcl_upload_blocked_ext"]))
	{
		$extensions = explode(",",str_replace("*.","",$CONFIG["wcl_upload_blocked_ext"]));
		foreach($extensions as $ext)
			if(strlen($_filename) > strlen($ext) && substr($_filename,strlen($_filename)-strlen($ext),strlen($ext)) == $ext)
				return false;
	}
	return true;
}

function getLocalizationFileString($_language,$_checkForExistance=true)
{
	$file = LIVEZILLA_PATH . "_language/lang" . strtolower($_language) . ((ISSUBSITE)? ".".SUBSITEHOST:"") . ".php";
	if($_checkForExistance && !@file_exists($file))
		$file = LIVEZILLA_PATH . "_language/lang" . strtolower($_language) . ".php";
	return $file;
}

function languageSelect($_mylang="")
{
	global $LZLANG,$CONFIG,$INTERNAL,$LANGUAGES;
	initData(false,false,false,false,false,true);
		
	if(defined("DEFAULT_BROWSER_LANGUAGE"))
		return;

	if(file_exists(getLocalizationFileString("en")))
		require(getLocalizationFileString("en"));
		
	if(empty($_mylang))
	{
		if(defined("CALLER_TYPE") && CALLER_TYPE == CALLER_TYPE_INTERNAL && defined("CALLER_SYSTEM_ID"))
			$_mylang = strtolower($INTERNAL[CALLER_SYSTEM_ID]->Language);
		else
		{
			$_mylang = getBrowserLocalization();
			$_mylang = strtolower($_mylang[0]);
		}
	}

	if(!empty($CONFIG["gl_on_def_lang"]) && file_exists($tfile=getLocalizationFileString($CONFIG["gl_default_language"])) && @filesize($tfile)>0)
	{
		define("DEFAULT_BROWSER_LANGUAGE",$CONFIG["gl_default_language"]);
		require(getLocalizationFileString($CONFIG["gl_default_language"]));
	}
	else if(empty($_mylang) || (!empty($_mylang) && strpos($_mylang,"..") === false))
	{
		if(!empty($_mylang) && strlen($_mylang) >= 5 && substr($_mylang,2,1) == "-" && file_exists($tfile=getLocalizationFileString(substr($_mylang,0,5))) && @filesize($tfile)>0)
			require(getLocalizationFileString($s_browser_language=strtolower(substr($_mylang,0,5))));
		else if(!empty($_mylang) && strlen($_mylang) > 1 && file_exists($tfile=getLocalizationFileString(substr($_mylang,0,2))) && @filesize($tfile)>0)
			require(getLocalizationFileString($s_browser_language=strtolower(substr($_mylang,0,2))));
		else if(file_exists($tfile=getLocalizationFileString($CONFIG["gl_default_language"])) && @filesize($tfile)>0)
			require(getLocalizationFileString($s_browser_language=$CONFIG["gl_default_language"]));
			
		if(isset($s_browser_language))
			define("DEFAULT_BROWSER_LANGUAGE",$s_browser_language);
	}
	else if(file_exists(getLocalizationFileString($CONFIG["gl_default_language"])))
		require(getLocalizationFileString($CONFIG["gl_default_language"]));
	if(!defined("DEFAULT_BROWSER_LANGUAGE") && file_exists(getLocalizationFileString("en")))
		define("DEFAULT_BROWSER_LANGUAGE","en");
	if(!defined("DEFAULT_BROWSER_LANGUAGE") || (defined("DEFAULT_BROWSER_LANGUAGE") && !@file_exists(getLocalizationFileString(DEFAULT_BROWSER_LANGUAGE))))
		exit("Localization error: default language is not available.");
	define("LANG_DIR",(($LANGUAGES[strtoupper(DEFAULT_BROWSER_LANGUAGE)][2]) ? "rtl":"ltr"));
}

function getLongPollRuntime()
{
	global $CONFIG;
	if(SAFE_MODE)
		$value = 10;
	else
	{
		$value = $CONFIG["timeout_clients"] - $CONFIG["poll_frequency_clients"] - 55;
		if(!isnull($ini = @ini_get('max_execution_time')) && $ini > $CONFIG["poll_frequency_clients"] && $ini < $value)
			$value = $ini-$CONFIG["poll_frequency_clients"];
		if($value > 20)
			$value = 20;
		if($value < 1)
			$value = 1;
	}
	return $value;
}

function checkPhpVersion($_ist,$_ond,$_ird)
{
	$array = explode(".",phpversion());
	if($array[0] >= $_ist)
	{
		if($array[1] > $_ond || ($array[1] == $_ond && $array[2] >= $_ird))
			return true;
		return false;
	}
	return false;
}

function getAlertTemplate()
{
	global $CONFIG;
	$html = str_replace("<!--server-->",LIVEZILLA_URL,getFile(TEMPLATE_SCRIPT_ALERT));
	$html = str_replace("<!--title-->",$CONFIG["gl_site_name"],$html);
	return $html;
}

function formLanguages($_lang)
{
	if(strlen($_lang) == 0)
		return "";
	$array_lang = explode(",",$_lang);
	foreach($array_lang as $key => $lang)
		if($key == 0)
		{
			$_lang = strtoupper(substr(trim($lang),0,2));
			break;
		}
	return (strlen($_lang) > 0) ? $_lang : "";
}

function administrationLog($_type,$_value,$_user)
{
	if(DB_CONNECTION)
	{
		queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_ADMINISTRATION_LOG."` (`id`,`type`,`value`,`time`,`user`) VALUES ('".@mysql_real_escape_string(getId(32))."','".@mysql_real_escape_string($_type)."','".@mysql_real_escape_string($_value)."','".@mysql_real_escape_string(time())."','".@mysql_real_escape_string($_user)."');");
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_ADMINISTRATION_LOG."` WHERE `time`<'".@mysql_real_escape_string(time()-2592000)."';");
	}
}

function logit($_id,$_file=null)
{
	if(empty($_file))
		$_file = LIVEZILLA_PATH . "_log/debug.txt";
	
	if(@file_exists($_file) && @filesize($_file) > 5000000)
		@unlink($_file);
		
	$handle = @fopen($_file,"a+");
	@fputs($handle,$_id."\r\n");
	@fclose($handle);
}

function errorLog($_message)
{
	global $RESPONSE;
	if(defined("FILE_ERROR_LOG"))
	{
		if(file_exists(FILE_ERROR_LOG) && @filesize(FILE_ERROR_LOG) > 500000)
			@unlink(FILE_ERROR_LOG);
		$handle = @fopen(FILE_ERROR_LOG,"a+");
		if($handle)
		{
			@fputs($handle,$_message . "\r");
			@fclose($handle);
		}
		if(!empty($RESPONSE))
		{
			if(!isset($RESPONSE->Exceptions))
				$RESPONSE->Exceptions = "";
			$RESPONSE->Exceptions .= "<val err=\"".base64_encode(trim($_message))."\" />";
		}
	}
	else
		$RESPONSE->Exceptions = "";
}

function getValueBySystemId($_systemid,$_value,$_default)
{
	$value = $_default;
	$parts = explode("~",$_systemid);
	
	$result = queryDB(true,"SELECT `".@mysql_real_escape_string($_value)."` FROM `".DB_PREFIX.DATABASE_VISITOR_CHATS."` WHERE `visitor_id`='".@mysql_real_escape_string($parts[0])."' AND `browser_id`='".@mysql_real_escape_string($parts[1])."' ORDER BY `last_active` DESC LIMIT 1;");
	if($result)
	{
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		$value = $row[$_value];
	}
	return $value;
}

function getId($_length,$start=0)
{
	$id = md5(uniqid(rand(),1));
	if($_length != 32)
		$start = rand(0,(31-$_length));
	$id = substr($id,$start,$_length);
	return $id;
}

function createFloodFilter($_ip,$_userId)
{
	global $FILTERS;
	initData(false,false,false,true);
	foreach($FILTERS->Filters as $currentFilter)
		if($currentFilter->IP == $_ip && $currentFilter->Activeipaddress == 1 && $currentFilter->Activestate == 1)
			return;
	
	$filter = new Filter(md5(uniqid(rand())));
	$filter->Creator = "SYSTEM";
	$filter->Created = time();
	$filter->Editor = "SYSTEM";
	$filter->Edited = time();
	$filter->IP = $_ip;
	$filter->Expiredate = 172800;
	$filter->Userid = $_userId;
	$filter->Reason = "";
	$filter->Filtername = "AUTO FLOOD FILTER";
	$filter->Activestate = 1;
	$filter->Exertion = 0;
	$filter->Languages = "";
	$filter->Activeipaddress = 1;
	$filter->Activeuserid = 1;
	$filter->Activelanguage = 0;
	$filter->Save();
}

function isFlood($_ip,$_userId,$_chat=false)
{
	global $VISITOR,$FILTERS,$CONFIG;
	if(empty($CONFIG["gl_atflt"]))
		return false;

	$sql = "SELECT * FROM `".DB_PREFIX.DATABASE_VISITORS."` AS `t1` INNER JOIN `".DB_PREFIX.DATABASE_VISITOR_BROWSERS."` AS t2 ON t1.id=t2.visitor_id WHERE t1.`ip`='".@mysql_real_escape_string($_ip)."' AND `t2`.`created`>".(time()-FLOOD_PROTECTION_TIME) . " AND `t1`.`visit_latest`=1";
	if($result = queryDB(true,$sql));
		if(@mysql_num_rows($result) >= FLOOD_PROTECTION_SESSIONS)
		{
			createFloodFilter($_ip,$_userId);
			return true;
		}
	return false;
}

function removeSSpanFile($_all)
{
	if($_all || (getSpanValue() < time()))
		setSpanValue(0);
}

function isSSpanFile()
{
	return !isnull(getSpanValue());
}

function getSpanValue()
{
	if(DB_CONNECTION && $result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_INFO."`"))
		if($row = mysql_fetch_array($result, MYSQL_BOTH))
			return $row["gtspan"];
	return time();
}

function setSpanValue($_value)
{
	if(DB_CONNECTION)
		queryDB(true,$g = "UPDATE `".DB_PREFIX.DATABASE_INFO."` SET `gtspan`='".@mysql_real_escape_string($_value)."'");
}

function createSSpanFile($_sspan)
{
	if($_sspan >= CONNECTION_ERROR_SPAN && $_sspan <=600)
		setSpanValue((time()+$_sspan));
}

function getLocalTimezone($_timezone,$ltz=0)
{
	$template = "%s%s%s:%s%s";
	if(isset($_timezone) && !empty($_timezone))
	{
		$ltz = $_timezone;
		if($ltz == ceil($ltz))
		{
			if($ltz >= 0 && $ltz < 10)
				$ltz = sprintf($template,"+","0",$ltz,"0","0");
			else if($ltz < 0 && $ltz > -10)
				$ltz = sprintf($template,"-","0",$ltz*-1,"0","0");
			else if($ltz >= 10)
				$ltz = sprintf($template,"+",$ltz,"","0","0");
			else if($ltz <= -10)
				$ltz = sprintf($template,"",$ltz,"","0","0");
		}
		else
		{
			$split = explode(".",$ltz);
			$split[1] = (60 * $split[1]) / 100;
			if($ltz >= 0 && $ltz < 10)
				$ltz = sprintf($template,"+","0",$split[0],$split[1],"0");
			else if($ltz < 0 && $ltz > -10)
				$ltz = sprintf($template,"","0",$split[0],$split[1],"0");
				
			else if($ltz >= 10)
				$ltz = sprintf($template,"+",$split[0],"",$split[1],"0");
			
			else if($ltz <= -10)
				$ltz = sprintf($template,"",$split[0],"",$split[1],"0");
		}
	}
	return $ltz;
}

function isValidEmail($_email)
{
	return preg_match('/^([*+!.&#$¦\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i', $_email);
}

function setCookieValue($_key,$_value)
{
	global $CONFIG;
	if(empty($CONFIG["gl_colt"]))
		setcookie("livezilla", "", time() - 3600);
	else
	{
		if(!isset($_COOKIE["livezilla"]))
			$c_array = Array();
		else
			$c_array = @unserialize(@base64_decode($_COOKIE["livezilla"]));
		if(!isset($c_array[$_key]) || (isset($c_array[$_key]) && $c_array[$_key] != $_value))
		{	
			$c_array[$_key] = $_value;
			$lifetime = ((empty($CONFIG["gl_colt"])) ? 0 : (time()+($CONFIG["gl_colt"]*86400)));
			setcookie("livezilla",($_COOKIE["livezilla"] = base64_encode(serialize($c_array))),$lifetime);
		}
	}
}

function getCookieValue($_key)
{
	global $CONFIG;
	if(empty($CONFIG["gl_colt"]))
		return null;
	if(isset($_COOKIE["livezilla"]))
		$c_array = @unserialize(base64_decode($_COOKIE["livezilla"]));
	if(isset($c_array[$_key]))
		return $c_array[$_key];
	else
		return null;
}

function hashFile($_file)
{
	$enfile = md5(base64_encode(file_get_contents($_file)));
	return $enfile;
}

function mTime()
{
	$time = str_replace(".","",microtime());
	$time = explode(" " , $time);
	return $time;
}

function microtimeFloat($_microtime)
{
   list($usec, $sec) = explode(" ", $_microtime);
   return ((float)$usec + (float)$sec);
}

function testDirectory($_dir)
{	
	global $LZLANG,$ERRORS;
	if(!@is_dir($_dir))
		@mkdir($_dir);

	if(@is_dir($_dir))
	{
		
		$fileid = md5(uniqid(rand())).".php";

		$handle = @fopen ($_dir . $fileid ,"a");
		@fputs($handle,$fileid."\r\n");
		@fclose($handle);
		
		if(!file_exists($_dir . $fileid))
			return false;

		@unlink($_dir . $fileid);
		if(file_exists($_dir . $fileid))
			return false;
			
		return true;
	}
	else
		return false;
}

function sendMail($_receiver,$_sender,$_replyto,$_text,$_subject="")
{
	global $CONFIG;
	$return = "";
	if(strpos($_receiver,",") === false)
	{
		$EOL = (!empty($CONFIG["gl_smtpauth"])) ? "\r\n" : "\n";
		$message  = $_text;
		$headers  = "From: ".$_sender.$EOL;
	    $headers .= "Reply-To: ".$_replyto.$EOL;
		$headers .= "Date: ".date("r").$EOL;
		$headers .= "MIME-Version: 1.0".$EOL;
		$headers .= "Content-Type: text/plain; charset=UTF-8; format=flowed".$EOL;
		$headers .= "Content-Transfer-Encoding: 8bit".$EOL;
    	$headers .= "X-Mailer: LiveZilla.net/" . VERSION.$EOL;
			
		if(!empty($CONFIG["gl_smtpauth"]))
			$return = smtpMail($CONFIG["gl_smtphost"], $CONFIG["gl_smtpport"], $_receiver, $_replyto, $_subject, $_text, $_sender, $CONFIG["gl_smtppass"], $CONFIG["gl_smtpuser"], !empty($CONFIG["gl_smtpssl"]));
		else
		{
			if(@mail($_receiver, $_subject, $_text, $headers))
				$return = 1;
			else
				$return = "The email could not be sent using PHP mail(). Please try another Return Email Address or use SMTP.";
		}
	}
	else
	{
		$emails = explode(",",$_receiver);
		foreach($emails as $mail)
			if(!empty($mail))
				sendMail(trim($mail), $_sender, $_replyto, $_text, $_subject);
	}
	return $return;
}

function smtpMail($_server, $_port, $_receiver, $_replyto, $_subject, $_text, $_from, $_password, $_account, $_secure)
{
	global $CONFIG;
	
	if(empty($_text))
		$_text = ">>";
	
	require_once(LIVEZILLA_PATH . "_lib/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	
	if(!empty($CONFIG["gl_smtpssl"]))
		$mail->SMTPSecure = "ssl";
	
	$mail->Host = $_server;
	$mail->SMTPAuth = true;
	$mail->Port = $_port;
	$mail->CharSet = "utf-8";
	$mail->Username = $_account;
	$mail->Password = $_password;
	
	$mail->AddReplyTo($_replyto, $_replyto);
	$mail->SetFrom($_from, $CONFIG["gl_site_name"]);
	
	$mail->Subject = $_subject;
	$mail->IsHTML(false);
	$mail->ContentType = 'text/plain';
	$mail->Body = $_text;
	$mail->AddAddress($_receiver, $_receiver);
	$success = $mail->Send();
	return ($success) ? true : $mail->ErrorInfo;
}

function setDataProvider()
{
	global $CONFIG,$DB_CONNECTOR;
	if(!empty($CONFIG["gl_datprov"]))
	{
		define("DB_PREFIX",$CONFIG["gl_db_prefix"]);
		$DB_CONNECTOR = @mysql_connect($CONFIG["gl_db_host"], $CONFIG["gl_db_user"], $CONFIG["gl_db_pass"]);
		if($DB_CONNECTOR)
		{
			mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $DB_CONNECTOR);
			//mysql_set_charset('utf8', $DB_CONNECTOR); 
			//@mysql_query("SET NAMES 'utf8'", $DB_CONNECTOR);
			if(@mysql_select_db($CONFIG["gl_db_name"], $DB_CONNECTOR))
				define("DB_CONNECTION",true);
		}
	}
	
	if(!defined("DB_CONNECTION"))
		define("DB_CONNECTION",false);
	
	if(DB_CONNECTION)
		loadDatabaseConfig();
	
	return DB_CONNECTION;
}

function queryDB($_log,$_sql,$_serversetup=false)
{
	global $CONFIG,$DB_CONNECTOR,$DBA,$QLIST;
	if(!DB_CONNECTION && !(defined("SERVERSETUP") && SERVERSETUP && !empty($DB_CONNECTOR)))
	{
		if(DEBUG_MODE)
			logit("Query without connection: " . $_sql);
		return false;
	}
	$DBA++;
	
	$exectime = microtime();$exectime = explode(" ",$exectime);$exectime = $exectime[1] + $exectime[0];$starttime = $exectime;
	$result = @mysql_query($_sql, $DB_CONNECTOR);
	$exectime = microtime();$exectime = explode(" ",$exectime);$exectime = $exectime[1] + $exectime[0];	$endtime = $exectime;$totaltime = ($endtime - $starttime);
	
	$ignore = array("1146","1062","1045","2003","");
	if($_log && !$result && !in_array(mysql_errno(),$ignore))
		logit(time() . " - " . mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $_sql,LIVEZILLA_PATH  . "_log/sql.txt");
	return $result;
}

function unloadDataProvider()
{
	global $DB_CONNECTOR;
	if($DB_CONNECTOR)
		@mysql_close($DB_CONNECTOR);
}

function runPeriodicJobs()
{
	global $CONFIG,$VISITOR,$STATS;
	if(rand(0,100) == 1)
	{
		$timeouts = array($CONFIG["poll_frequency_clients"] * 10,86400,86400*7,DATA_LIFETIME);
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE (`html` = '0' OR `html` = '') AND `time` < " . @mysql_real_escape_string(time()-$timeouts[3]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `time` < " . @mysql_real_escape_string(time()-$timeouts[3]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `persistent` = '0' AND `time` < " . @mysql_real_escape_string(time()-$timeouts[1]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `repost` = '1' AND `time` < " . @mysql_real_escape_string(time()-$timeouts[0]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_OPERATOR_LOGINS."` WHERE `time` < ".@mysql_real_escape_string(time()-$timeouts[1]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_EVENT_ACTION_INTERNALS."` WHERE `created` < " . @mysql_real_escape_string(time()-$timeouts[0]));
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` WHERE `webcam`=1 AND `time` < ".@mysql_real_escape_string(time()-$timeouts[0]));

		if(!STATS_ACTIVE)
		{
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_VISITORS."` WHERE `last_active`<'".@mysql_real_escape_string(time()-$timeouts[1])."';");
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_OPERATOR_STATUS."` WHERE `".DB_PREFIX.DATABASE_OPERATOR_STATUS."`.`confirmed`<'".@mysql_real_escape_string(time()-$timeouts[1])."';");
		}
		else
			StatisticProvider::DeleteHTMLReports();
			
		if($CONFIG["gl_adct"] != 1)
		{
			if(!empty($CONFIG["gl_rm_chats"]))
				queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE `time` < " . @mysql_real_escape_string(time()-$CONFIG["gl_rm_chats_time"]));
			if(!empty($CONFIG["gl_rm_rt"]))
				queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_RATINGS."` WHERE `time` < " . @mysql_real_escape_string(time()-$CONFIG["gl_rm_rt_time"]));
			if(!empty($CONFIG["gl_rm_om"]))
			{
				queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_TICKET_EDITORS."` WHERE `time` < " . @mysql_real_escape_string(time()-$CONFIG["gl_rm_om_time"]));
				queryDB(true,"DELETE `".DB_PREFIX.DATABASE_TICKET_MESSAGES."`,`".DB_PREFIX.DATABASE_TICKETS."` FROM `".DB_PREFIX.DATABASE_TICKETS."` INNER JOIN `".DB_PREFIX.DATABASE_TICKET_MESSAGES."` WHERE `".DB_PREFIX.DATABASE_TICKETS."`.`id` = `".DB_PREFIX.DATABASE_TICKET_MESSAGES."`.`ticket_id` AND `".DB_PREFIX.DATABASE_TICKET_MESSAGES."`.`time` < " . @mysql_real_escape_string(time()-$CONFIG["gl_rm_om_time"]));
			}
		}

		if($result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `discarded`=1 AND `type` > 2 AND `edited` < " . @mysql_real_escape_string(time()-$timeouts[3])));
			while($result && $row = mysql_fetch_array($result, MYSQL_BOTH))
			{
				$resultb = queryDB(true,"SELECT count(value) as linked FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `value`='". @mysql_real_escape_string($row["value"])."';");
				$rowb = mysql_fetch_array($resultb, MYSQL_BOTH);
				if($rowb["linked"] == 1)
					@unlink(PATH_UPLOADS . $row["value"]);
			}
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `discarded`='1' AND `edited` < " . @mysql_real_escape_string(time()-$timeouts[3]));
		
		if(DEMO_MODE)
		{
			$ufiles = getDirectory(PATH_UPLOADS,"");
			foreach($ufiles as $ufile)
				if(filemtime(PATH_UPLOADS . $ufile)<(time()-$timeouts[1]))
					unlink(PATH_UPLOADS . $ufile);
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `edited` < " . @mysql_real_escape_string(time()-$timeouts[1]));
		}
	}
	else if((empty($CONFIG["gl_rm_chats"]) || !empty($CONFIG["gl_rm_chats_time"])) && rand(0,15) == 1)
	{
		sendChatTranscripts();
	}
}

function closeArchiveEntry($_chatId,$_externalFullname,$_externalId,$_internalId,$_groupId,$_html,$_email,$_company,$_phone,$_host,$_ip,$_question,$postcount=0,$_transcriptSent=false)
{
	global $INTERNAL,$GROUPS,$CONFIG;
	$result = queryDB(true,"SELECT `voucher_id`,`endtime`,`plain`,`iso_language` FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE `chat_id`='".@mysql_real_escape_string($_chatId)."' LIMIT 1;");
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	languageSelect($row["iso_language"]);
	$etpl = $row["plain"];
	$entries = array();
	$result_posts = queryDB(true,"SELECT `sender_name`,`text`,`sender`,`time`,`micro`,`translation` FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `repost`=0 AND `receiver`=`receiver_original` AND `chat_id` = '". @mysql_real_escape_string($_chatId)."' GROUP BY `id` ORDER BY `time` ASC, `micro` ASC;");
	while($row_post = mysql_fetch_array($result_posts, MYSQL_BOTH))
	{
		$postcount++;
		$post = (empty($row_post["translation"])) ? $row_post["text"] : $row_post["translation"]." (".$row_post["text"].")";
		$post = str_replace("<br>","\r\n",trim($post));
		preg_match_all("/<a.*href=\"([^\"]*)\".*>(.*)<\/a>/iU", $post, $matches);
		$count = 0;
		foreach($matches[0] as $match)
		{
			if(strpos($matches[1][$count],"javascript:")===false)
				$post = str_replace($matches[0][$count],$matches[2][$count] . " (" . $matches[1][$count].") ",$post);
			$count++;
		}
		$post = html_entity_decode(strip_tags($post),ENT_COMPAT,"UTF-8");
		$sender_name = (empty($row_post["sender_name"])) ? "<!--lang_client_guest-->" : $row_post["sender_name"];
		$entries[$row_post["time"]."apost".str_pad($row_post["micro"],10,"0",STR_PAD_LEFT)] = "| " . date("d.m.Y H:i:s",$row_post["time"]) . " | " . $sender_name .  ": " . trim($post);
	}
	$result_files = queryDB(true,"SELECT `created`,`file_name`,`permission`,`download` FROM `".DB_PREFIX.DATABASE_CHAT_FILES."` WHERE `chat_id` = '". @mysql_real_escape_string($_chatId)."' ORDER BY `created` ASC;");
	while($row_file = mysql_fetch_array($result_files, MYSQL_BOTH))
	{
		$postcount++;
		$result = " / " . (($row_file["permission"]==PERMISSION_VOID)?"<!--lang_client_rejected-->":($row_file["permission"]!=PERMISSION_FULL && empty($row_file["download"]))?"<!--lang_client_rejected-->":"<!--lang_client_accepted-->") . ")";
		$entries[$row_file["created"]."bfile"] = "| " . date("d.m.Y H:i:s",$row_file["created"]) . " | " . $_externalFullname .  ": <!--lang_client_file--> (" . html_entity_decode(strip_tags($row_file["file_name"]),ENT_COMPAT,"UTF-8") . $result;
	}
	$result_forwards = queryDB(true,"SELECT `invite`,`target_group_id`,`target_operator_id`,`created` FROM `".DB_PREFIX.DATABASE_CHAT_FORWARDS."` WHERE `invite`=0 AND `chat_id` = '". @mysql_real_escape_string($_chatId)."' ORDER BY `created` ASC;");
	while($row_forward = mysql_fetch_array($result_forwards, MYSQL_BOTH))
		if(!empty($INTERNAL[$row_forward["target_operator_id"]]))
			$entries[$row_forward["created"]."zforward"] = "| " . date("d.m.Y H:i:s",$row_forward["created"]) . " | <!--lang_client_forwarding_to--> " . $INTERNAL[$row_forward["target_operator_id"]]->Fullname . " ...";
		else
			$entries[$row_forward["created"]."zforward"] = "| " . date("d.m.Y H:i:s",$row_forward["created"]) . " | <!--lang_client_forwarding_to--> " . $GROUPS[$row_forward["target_group_id"]]->Description . " ...";

	$plainText = "";
	ksort($entries);
	foreach($entries as $row)
	{
		if(!empty($plainText))
			$plainText .= "\r\n";
		$plainText .= trim($row);
	}
	if(!empty($plainText))
	{
		$etpl = str_replace("%localdate%",date("r",time()),$etpl);
		if(strpos($etpl,"%transcript%")===false && strpos($etpl,"%mailtext%")===false)
			$etpl .= $plainText;
		else if(strpos($etpl,"%transcript%")!==false)
			$etpl = str_replace("%transcript%",$plainText,$etpl);
		else if(strpos($etpl,"%mailtext%")!==false)
			$etpl = str_replace("%mailtext%",$plainText,$etpl);
	}
	else
		$etpl = "";
	$etpl = strip_tags(applyReplacements($etpl,true,false));
	
	$name = (!empty($_externalFullname)) ? ",`fullname`='".@mysql_real_escape_string($_externalFullname)."'" : "";
	queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` SET `external_id`='".@mysql_real_escape_string($_externalId)."',`closed`='".@mysql_real_escape_string(time())."'".$name.",`internal_id`='".@mysql_real_escape_string($_internalId)."',`group_id`='".@mysql_real_escape_string($_groupId)."',`html`='".@mysql_real_escape_string($_html)."',`plain`='".@mysql_real_escape_string($etpl)."',`email`='".@mysql_real_escape_string($_email)."',`company`='".@mysql_real_escape_string($_company)."',`phone`='".@mysql_real_escape_string($_phone)."',`host`='".@mysql_real_escape_string($_host)."',`ip`='".@mysql_real_escape_string($_ip)."',`gzip`=0,`transcript_sent`='".@mysql_real_escape_string(((((empty($CONFIG["gl_soct"]) && empty($CONFIG["gl_scct"]) && empty($CONFIG["gl_scto"]) && empty($CONFIG["gl_sctg"])) || empty($etpl) || $postcount==0 || $_transcriptSent)) ? "1" : "0"))."',`question`='".@mysql_real_escape_string(cutString($_question,255))."' WHERE `chat_id`='".@mysql_real_escape_string($_chatId)."' AND `closed`=0 LIMIT 1;");
}

function closeBotChats()
{
	global $INTERNAL,$CONFIG;
	$result = queryDB(false,"SELECT * FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE `internal_id`!='' AND `closed`=0 AND `transcript_sent`=0;");
	if($result)
	{
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			if(!empty($INTERNAL[$row["internal_id"]]) && $INTERNAL[$row["internal_id"]]->IsBot)
			{
				$results = queryDB(false,"SELECT * FROM `".DB_PREFIX.DATABASE_VISITOR_CHATS."` WHERE `chat_id`='".@mysql_real_escape_string($row["chat_id"])."' AND `last_active`<".(time()-$CONFIG["timeout_track"]).";");
				if($results && $rows = mysql_fetch_array($results, MYSQL_BOTH))
				{
					if(empty($rows["exit"]))
					{
						$chat = new VisitorChat($rows);
						$chat->CloseChat();
					}
					closeArchiveEntry($row["chat_id"],$rows["fullname"],$rows["visitor_id"],$row["internal_id"],$rows["request_group"],"",$rows["email"],$rows["company"],$rows["phone"],$row["host"],$row["ip"],$rows["question"],0,empty($CONFIG["gl_sctb"]));
				}
			}
		}
	}
}

function sendChatTranscripts($_custom=false)
{
	global $CONFIG,$INTERNAL,$GROUPS,$INPUTS;
	initData(true,false,false,false,false,false,false,true);
	
	closeBotChats();
	
	$result = queryDB(false,"SELECT `voucher_id`,`subject`,`customs`,`internal_id`,`plain`,`transcript_receiver`,`email`,`chat_id`,`fullname`,`group_id` FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE `endtime`>0 AND `closed`>0 AND `transcript_sent`=0 LIMIT 1;");
	if($result)
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` SET `transcript_sent`=1 WHERE `chat_id`='". @mysql_real_escape_string($row["chat_id"])."' LIMIT 1;");
			$rcvs = str_replace("%fullname%"," " . $row["fullname"],$row["plain"]);
			$rcvs = str_replace("%email%",((!empty($row["email"])) ? " ":"") . $row["email"],$rcvs);
			$subject = $row["subject"];
			$email = (empty($row["transcript_receiver"]) && !$_custom) ? $row["email"] : $row["transcript_receiver"];

			if(empty($CONFIG["gl_pr_nbl"]))
				$rcvs .= base64_decode("DQoNCg0KcG93ZXJlZCBieSBMaXZlWmlsbGEgTGl2ZSBTdXBwb3J0IFtodHRwOi8vd3d3LmxpdmV6aWxsYS5uZXRd");
			
			if((!empty($CONFIG["gl_soct"]) || $_custom) && !empty($row["transcript_receiver"]))
				sendMail($row["transcript_receiver"],$CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],$rcvs,$subject);

			if(!empty($CONFIG["gl_scto"]) && !$_custom)
			{
				initData(true);
				$receivers = array();
				$resulti = queryDB(true,"SELECT `sender`,`receiver` FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `chat_id`='". @mysql_real_escape_string($row["chat_id"])."';");
				if($resulti)
					while($rowi = mysql_fetch_array($resulti, MYSQL_BOTH))
					{
						if(!empty($INTERNAL[$rowi["sender"]]) && !in_array($rowi["sender"],$receivers))
							$receivers[] = $rowi["sender"];
						else if(!empty($INTERNAL[$rowi["receiver"]]) && !in_array($rowi["receiver"],$receivers))
							$receivers[] = $rowi["receiver"];
						else
							continue;
						sendMail($INTERNAL[$receivers[count($receivers)-1]]->Email,$CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],$rcvs,$subject);
					}
			}
			if(!empty($CONFIG["gl_sctg"]) && !$_custom)
			{
				initData(false,true);
				sendMail($GROUPS[$row["group_id"]]->Email,$CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],$rcvs,$subject);
			}
			if(!empty($CONFIG["gl_scct"]))
				sendMail($CONFIG["gl_scct"],$CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],$rcvs,$subject);
			
			if(!empty($row["voucher_id"]))
			{
				$ticket = new CommercialChatVoucher(null,$row["voucher_id"]);
				$ticket->Load();
				$ticket->SendStatusEmail();
			}
		}
	if(!empty($CONFIG["gl_rm_chats"]) && $CONFIG["gl_rm_chats_time"] == 0)
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` WHERE `transcript_sent` = '1';");
}

function getResource($_id)
{
	if($result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `id`='".@mysql_real_escape_string($_id)."' LIMIT 1;"))
		if($row = mysql_fetch_array($result, MYSQL_BOTH))
			return $row;
	return null;
}

function getPosts($_receiver)
{
	$posts = array();
	if($result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_POSTS."` WHERE `receiver`='".@mysql_real_escape_string($_receiver)."' AND `received`=0 ORDER BY `time` ASC, `micro` ASC;"))
		while($row = mysql_fetch_array($result, MYSQL_BOTH))
			$posts[] = $row;
	return $posts;
}

function getDirectory($_dir,$_oddout,$_ignoreSource=false)
{
	$files = array();
	if(!@is_dir($_dir))
		return $files;
	$handle=@opendir($_dir);
	while ($filename = @readdir ($handle)) 
	   	if ($filename != "." && $filename != ".." && ($_oddout == false || !stristr($filename,$_oddout)))
			if($_oddout != "." || ($_oddout == "." && @is_dir($_dir . "/" . $filename)))
	       		$files[]=$filename;
	@closedir($handle);
	return $files;
}

function getValueId($_database,$_column,$_value,$_canBeNumeric=true,$_maxlength=null)
{
	if(!$_canBeNumeric && is_numeric($_value))
		return $_value;
		
	if($_maxlength != null && strlen($_value) > $_maxlength)
		$_value = substr($_value,0,$_maxlength);

	queryDB(true,"INSERT INTO `".DB_PREFIX.$_database."` (`id`, `".$_column."`) VALUES (NULL, '".@mysql_real_escape_string($_value)."');");
	$row = mysql_fetch_array(queryDB(true,"SELECT `id` FROM `".DB_PREFIX.$_database."` WHERE `".$_column."`='".@mysql_real_escape_string($_value)."';"), MYSQL_BOTH);
	
	if(is_numeric($row["id"]) || $_value == "INVALID_DATA")
		return $row["id"];
	else
		return getValueId($_database,$_column,"INVALID_DATA",$_canBeNumeric,$_maxlength);
}

function getIdValue($_database,$_column,$_id,$_unknown=false)
{
	$row = mysql_fetch_array(queryDB(true,"SELECT `".$_column."` FROM `".DB_PREFIX.$_database."` WHERE `id`='".@mysql_real_escape_string($_id)."' LIMIT 1;"));
	if($_unknown && empty($row[$_column]))
		return "<!--lang_stats_unknown-->";
	return $row[$_column];
}

function jokerCompare($_template,$_comparer)
{
	if($_template=="*")
		return true;
		
	$spacer = md5(rand());
	$_template = str_replace("?",$spacer,strtolower($_template));
	$_comparer = str_replace("?",$spacer,strtolower($_comparer));
	$_template = str_replace("*","(.*)",$_template);
	return (preg_match("(".$spacer.$_template.$spacer.")",$spacer.$_comparer.$spacer)>0);
}

function processResource($_userId,$_resId,$_value,$_type,$_title,$_disc,$_parentId,$_rank,$_size=0)
{
	if($_size == 0)
		$_size = strlen($_title);
	$result = queryDB(true,"SELECT `id` FROM `".DB_PREFIX.DATABASE_RESOURCES."` WHERE `id`='".@mysql_real_escape_string($_resId)."'");
	if(@mysql_num_rows($result) == 0)
		queryDB(true,$result = "INSERT INTO `".DB_PREFIX.DATABASE_RESOURCES."` (`id`,`owner`,`editor`,`value`,`edited`,`title`,`created`,`type`,`discarded`,`parentid`,`rank`,`size`) VALUES ('".@mysql_real_escape_string($_resId)."','".@mysql_real_escape_string($_userId)."','".@mysql_real_escape_string($_userId)."','".@mysql_real_escape_string($_value)."','".@mysql_real_escape_string(time())."','".@mysql_real_escape_string($_title)."','".@mysql_real_escape_string(time())."','".@mysql_real_escape_string($_type)."','0','".@mysql_real_escape_string($_parentId)."','".@mysql_real_escape_string($_rank)."','".@mysql_real_escape_string($_size)."')");
	else
	{
		queryDB(true,$result = "UPDATE `".DB_PREFIX.DATABASE_RESOURCES."` SET `value`='".@mysql_real_escape_string($_value)."',`editor`='".@mysql_real_escape_string($_userId)."',`title`='".@mysql_real_escape_string($_title)."',`edited`='".@mysql_real_escape_string(time())."',`discarded`='".@mysql_real_escape_string(parseBool($_disc,false))."',`parentid`='".@mysql_real_escape_string($_parentId)."',`rank`='".@mysql_real_escape_string($_rank)."',`size`='".@mysql_real_escape_string($_size)."' WHERE id='".@mysql_real_escape_string($_resId)."' LIMIT 1");
		if(!empty($_disc) && ($_type == RESOURCE_TYPE_FILE_INTERNAL || $_type == RESOURCE_TYPE_FILE_EXTERNAL) && @file_exists("./uploads/" . $_value) && strpos($_value,"..")===false)
			@unlink("./uploads/" . $_value);
	}
}

function getBrowserLocalization($country = "")
{
	global $LANGUAGES,$COUNTRIES;
	initData(false,false,false,false,false,true,true);
	$base = @$_SERVER["HTTP_ACCEPT_LANGUAGE"];
	
	$language = str_replace(array(",","_"," "),array(";","-",""),((!empty($_GET[GET_EXTERN_USER_LANGUAGE])) ? strtoupper(base64UrlDecode($_GET[GET_EXTERN_USER_LANGUAGE])) : ((!empty($base)) ? strtoupper($base) : "")));
	if(strlen($language) > 5 || strpos($language,";") !== false)
	{
		$parts = explode(";",$language);
		if(count($parts) > 0)
			$language = $parts[0];
		else
			$language = substr($language,0,5);
	}
	if(strlen($language) >= 2)
	{
		$parts = explode("-",$language);
		if(!isset($LANGUAGES[$language]))
		{
			$language = $parts[0];
			if(!isset($LANGUAGES[$language]))
			{
				if(DEBUG_MODE)
					logit(@$base . " - " . $language,LIVEZILLA_PATH . "_log/missing_language.txt");
				$language = "";
			}
		}
		if(count($parts)>1 && isset($COUNTRIES[$parts[1]]))
			$country = $parts[1];
	}
	else if(strlen($language) < 2)
		$language = "";
	return array($language,$country);
}

function createFileBaseFolders($_owner,$_internal)
{
	if($_internal)
	{
		processResource($_owner,3,"%%_Files_%%",0,"%%_Files_%%",0,1,1);
		processResource($_owner,4,"%%_Internal_%%",0,"%%_Internal_%%",0,3,2);
	}
	else
	{
		processResource($_owner,3,"%%_Files_%%",0,"%%_Files_%%",0,1,1);
		processResource($_owner,5,"%%_External_%%",0,"%%_External_%%",0,3,2);
	}
}

function getSystemTimezone()
{
	global $CONFIG;
	
	if(!empty($CONFIG["gl_tizo"]))
		return $CONFIG["gl_tizo"];

    $iTime = time();
    $arr = @localtime($iTime);
    $arr[5] += 1900;
    $arr[4]++;
	
	if(!empty($arr[8]))
		$arr[2]--;

    $iTztime = @gmmktime($arr[2], $arr[1], $arr[0], $arr[4], $arr[3], $arr[5]);
    $offset = doubleval(($iTztime-$iTime)/(60*60));
    $zonelist =
    array
    (
        'Kwajalein' => -12.00,
        'Pacific/Midway' => -11.00,
        'Pacific/Honolulu' => -10.00,
        'America/Anchorage' => -9.00,
        'America/Los_Angeles' => -8.00,
        'America/Denver' => -7.00,
        'America/Tegucigalpa' => -6.00,
        'America/New_York' => -5.00,
        'America/Caracas' => -4.30,
        'America/Halifax' => -4.00,
        'America/St_Johns' => -3.30,
        'America/Argentina/Buenos_Aires' => -3.00,
        'America/Sao_Paulo' => -3.00,
        'Atlantic/South_Georgia' => -2.00,
        'Atlantic/Azores' => -1.00,
        'Europe/Dublin' => 0,
        'Europe/Belgrade' => 1.00,
        'Europe/Minsk' => 2.00,
        'Asia/Kuwait' => 3.00,
        'Asia/Tehran' => 3.30,
        'Asia/Muscat' => 4.00,
        'Asia/Yekaterinburg' => 5.00,
        'Asia/Kolkata' => 5.30,
        'Asia/Katmandu' => 5.45,
        'Asia/Dhaka' => 6.00,
        'Asia/Rangoon' => 6.30,
        'Asia/Krasnoyarsk' => 7.00,
        'Asia/Brunei' => 8.00,
        'Asia/Seoul' => 9.00,
        'Australia/Darwin' => 9.30,
        'Australia/Canberra' => 10.00,
        'Asia/Magadan' => 11.00,
        'Pacific/Fiji' => 12.00,
        'Pacific/Tongatapu' => 13.00
    );
    $index = array_keys($zonelist, $offset);
    if(sizeof($index)!=1)
        return false;
    return $index[0];
}

function isnull($_var)
{
	return empty($_var);
}

function isint($_int)
{
    return (preg_match( '/^\d*$/'  , $_int) == 1);
}

function getObjectId($_field,$_database)
{
	$result = queryDB(true,"SELECT `".$_field."`,(SELECT MAX(`id`) FROM `".DB_PREFIX.$_database."`) as `used_".$_field."` FROM `".DB_PREFIX.DATABASE_INFO."`");
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$max = max($row[$_field],$row["used_" . $_field]);
	$tid = $max+1;
	queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_INFO."` SET `".$_field."`='".@mysql_real_escape_string($tid)."';");
	return $tid;
}

function formatTimeSpan($_seconds,$_negative=false)
{
	if($_seconds < 0)
	{
		$_negative = true;
		$_seconds *= -1;
	}
	
	$days = floor($_seconds / 86400);
	$_seconds = $_seconds - ($days * 86400);
	$hours = floor($_seconds / 3600);
	$_seconds = $_seconds - ($hours * 3600);
	$minutes = floor($_seconds / 60);
	$_seconds = $_seconds - ($minutes * 60);
	
	$string = "";
	if($days > 0)$string .= $days.".";
	if($hours >= 10)$string .= $hours.":";
	else if($hours < 10)$string .= "0".$hours.":";
	if($minutes >= 10)$string .= $minutes.":";
	else if($minutes < 10)$string .= "0".$minutes.":";
	if($_seconds >= 10)$string .= $_seconds;
	else if($_seconds < 10)$string .= "0".$_seconds;
	
	if($_negative)
		return "-" . $string;
	return $string;
}
loadConfig();
?>
