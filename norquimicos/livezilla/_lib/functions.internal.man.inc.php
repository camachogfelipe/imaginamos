<?php
/****************************************************************************************
* LiveZilla functions.internal.man.inc.php
* 
* Copyright 2013 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
***************************************************************************************/ 

if(!defined("IN_LIVEZILLA"))
	die();

function setAvailability($_available)
{
	global $INTERNAL,$RESPONSE;
	administrationLog("setAvailability","",CALLER_SYSTEM_ID);
	if($INTERNAL[CALLER_SYSTEM_ID]->Level==USER_LEVEL_ADMIN)
	{
		if(!empty($_POST["p_del_ws"]) && file_exists(str_replace("config.inc","config.".$_POST["p_del_ws"].".inc",FILE_CONFIG)))
			@unlink(str_replace("config.inc","config.".$_POST["p_del_ws"].".inc",FILE_CONFIG));
		if(!empty($_available) && file_exists(FILE_SERVER_DISABLED))
			@unlink(FILE_SERVER_DISABLED);
		else if(empty($_available))
			createFile(FILE_SERVER_DISABLED,time(),false);
		$RESPONSE->SetStandardResponse(1,"");
	}
}

function setIdle($_idle)
{
	global $INTERNAL,$RESPONSE;
	if($INTERNAL[CALLER_SYSTEM_ID]->Level==USER_LEVEL_ADMIN)
	{
		if(empty($_idle) && file_exists(FILE_SERVER_IDLE))
			@unlink(FILE_SERVER_IDLE);
		else if(!empty($_idle))
			createFile(FILE_SERVER_IDLE,time(),true);
		$RESPONSE->SetStandardResponse(1,"");
	}
}

function getBannerList($list = "")
{
	global $VISITOR,$CONFIG,$RESPONSE;
	administrationLog("getBannerList",serialize($_POST),CALLER_SYSTEM_ID);
	$result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_IMAGES."` ORDER BY `id` ASC,`online` DESC;");
	while($row = mysql_fetch_array($result, MYSQL_BOTH))
		$list .= "<button type=\"".base64_encode($row["button_type"])."\" name=\"".base64_encode($row["button_type"]."_".$row["id"]."_".$row["online"].".".$row["image_type"])."\" data=\"".base64_encode($row["data"])."\" />\r\n";
	$RESPONSE->SetStandardResponse(1,"<button_list>".$list."</button_list>");
}

function getTranslationData($translation = "")
{
	global $LZLANG,$RESPONSE;
	administrationLog("getTranslationData",serialize($_POST),CALLER_SYSTEM_ID);
	if(!(isset($_POST["p_int_trans_iso"]) && (strlen($_POST["p_int_trans_iso"])==2||strlen($_POST["p_int_trans_iso"])==5)))
	{
		$RESPONSE->SetStandardResponse(1,"");
		return;
	}
	$langid = $_POST["p_int_trans_iso"];
	if(strpos($langid,"..") === false && strlen($langid) <= 6)
	{
		$file = getLocalizationFileString($langid);
		include($file);
		$translation .= "<language key=\"".base64_encode($langid)."\">\r\n";
		foreach($LZLANG as $key => $value)
			$translation .= "<val key=\"".base64_encode($key)."\">".base64_encode($value)."</val>\r\n";
		$translation .= "</language>\r\n";
		$RESPONSE->SetStandardResponse(1,$translation);
	}
	else
		$RESPONSE->SetStandardResponse(0,$translation);
}

function updatePredefinedMessages($_prefix,$_counter = 0)
{
	administrationLog("updatePredefinedMessages","",CALLER_SYSTEM_ID);
	$pms = array();
	foreach(array("g","u") as $type)
		foreach($_POST as $key => $value)
		{
			if(strpos($key,"p_db_pm_".$type."_")===0)
			{
				$parts = explode("_",$key);
				$gid = $parts[4];
				if(empty($pms[$type.$gid]))
					$pms[$type.$gid] = array();
				if(strpos($key,"p_db_pm_".$type."_" . $gid . "_")===0)
				{
					if(!isset($pms[$type.$gid][$parts[5]]))
					{
						$pms[$type.$gid][$parts[5]] = new PredefinedMessage();
						$pms[$type.$gid][$parts[5]]->GroupId = ($type=="g") ? $gid : "";
						$pms[$type.$gid][$parts[5]]->UserId = ($type=="u") ? $gid : "";
						$pms[$type.$gid][$parts[5]]->LangISO = $parts[5];
					}
				}
				$pms[$type.$gid][$parts[5]]->XMLParamAlloc($parts[6],$value);
			}
		}
	foreach($pms as $oid => $messages)
		foreach($messages as $iso => $message)
		{
			$message->Id = getId(32);
			$message->Save($_prefix);
		}
}

function setManagement($_prefix,$_create=false,$_test=false)
{
	global $INTERNAL,$RESPONSE,$GROUPS,$CONFIG;
	administrationLog("setManagement","",CALLER_SYSTEM_ID);
	if($INTERNAL[CALLER_SYSTEM_ID]->Level == USER_LEVEL_ADMIN || in_array($CONFIG["gl_host"],$INTERNAL[CALLER_SYSTEM_ID]->WebsitesUsers))
	{
		$count = 0;
		$processed = "";
		if(empty($_POST["p_operators_" . $count . "_id"]))
			return;

		while(isset($_POST["p_operators_" . $count . "_id"]))
		{
			if(!($res = queryDB(true,"INSERT INTO `".$_prefix.DATABASE_OPERATORS."` (`id`, `system_id`, `fullname`, `description`, `email`, `permissions`, `webspace`, `password`, `level`, `visitor_file_sizes`, `groups`, `groups_status`, `groups_hidden`,`reposts`, `languages`, `auto_accept_chats`, `login_ip_range`, `websites_users`, `websites_config`, `bot`, `wm`, `wmohca`) VALUES ('".@mysql_real_escape_string($_POST["p_operators_" . $count . "_id"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_system_id"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_fullname"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_description"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_email"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_permissions"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_webspace"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_password"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_level"])."','','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_groups"])."','','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_groups_hidden"])."','','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_languages"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_aac"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_lipr"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_websites_users"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_websites_config"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_bot"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_wm"])."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_wmohca"])."');")))
				queryDB(true,"UPDATE `".$_prefix.DATABASE_OPERATORS."` SET `bot`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_bot"])."',`fullname`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_fullname"])."',`description`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_description"])."',`email`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_email"])."',`permissions`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_permissions"])."',`webspace`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_webspace"])."',`level`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_level"])."',`groups`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_groups"])."',`groups_hidden`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_groups_hidden"])."',`languages`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_languages"])."',`login_ip_range`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_lipr"])."',`auto_accept_chats`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_aac"])."',`websites_users`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_websites_users"])."',`websites_config`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_websites_config"])."',`wm`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_wm"])."',`wmohca`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_wmohca"])."' WHERE `id`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_id"])."' LIMIT 1;");
			
			if(empty($_POST["p_operators_selective"]))
			{
				if(!empty($processed))
					$processed .= " AND ";
				$processed .= "`id` != '".@mysql_real_escape_string($_POST["p_operators_" . $count . "_id"])."'";
			}
			
			if(!empty($_POST["p_operators_" . $count . "_pp"]))
			{
				queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` WHERE `webcam`='0' AND `internal_id`='".@mysql_real_escape_string($_POST["p_operators_" . $count . "_id"])."' LIMIT 1;");
				queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` (`id` ,`internal_id`,`time` ,`webcam` ,`data`) VALUES ('".@mysql_real_escape_string(getId(32))."','".@mysql_real_escape_string($_POST["p_operators_" . $count . "_system_id"])."','".@mysql_real_escape_string(time())."',0,'".@mysql_real_escape_string($_POST["p_operators_" . $count . "_pp"])."');");
			}
			$count++;
		}
		
		if(!empty($processed))
			queryDB(true,"DELETE FROM `".$_prefix.DATABASE_OPERATORS."` WHERE (".$processed.");");
			
		queryDB(true,"DELETE FROM `".$_prefix.DATABASE_BOT_FEEDS."` WHERE NOT EXISTS (SELECT * FROM `".$_prefix.DATABASE_OPERATORS."` WHERE `system_id` = `".$_prefix.DATABASE_BOT_FEEDS."`.`bot_id`)");
		
		$processed = "";
		$count = $counter = 0;
		
		while(isset($_POST["p_groups_" . $count . "_id"]))
		{
			if(!($res = queryDB(true,"INSERT INTO `".$_prefix.DATABASE_GROUPS."` (`id`, `dynamic`, `description`, `external`, `internal`, `created`, `email`, `standard`, `opening_hours`, `functions`, `chat_inputs_hidden`, `ticket_inputs_hidden`, `chat_inputs_required`, `ticket_inputs_required`, `max_chats`, `hide_chat_group_selection`, `hide_ticket_group_selection`, `visitor_filters`, `chat_vouchers_required`, `pre_chat_html`, `post_chat_html`) VALUES ('".@mysql_real_escape_string($_POST["p_groups_" . $count . "_id"])."',0,'".@mysql_real_escape_string($_POST["p_groups_" . $count . "_description"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_external"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_internal"])."',".time().",'".@mysql_real_escape_string($_POST["p_groups_" . $count . "_email"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_standard"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_opening_hours"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_functions"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_inputs_hidden"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_ticket_inputs_hidden"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_inputs_required"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_ticket_inputs_required"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_max_chats"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_hcgs"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_htgs"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_visitor_filters"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_vouchers_required"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_pre_html"])."','".@mysql_real_escape_string($_POST["p_groups_" . $count . "_post_html"])."');")))
				queryDB(true,"UPDATE `".$_prefix.DATABASE_GROUPS."` SET `pre_chat_html`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_pre_html"])."',`post_chat_html`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_post_html"])."',`id`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_id"])."',`name`='',`owner`='',`dynamic`=0,`description`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_description"])."',`external`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_external"])."',`internal`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_internal"])."',`email`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_email"])."',`standard`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_standard"])."',`opening_hours`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_opening_hours"])."',`functions`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_functions"])."',`chat_inputs_hidden`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_inputs_hidden"])."',`ticket_inputs_hidden`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_ticket_inputs_hidden"])."',`chat_inputs_required`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_inputs_required"])."',`ticket_inputs_required`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_ticket_inputs_required"])."',`chat_vouchers_required`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_chat_vouchers_required"])."',`max_chats`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_max_chats"])."',`hide_chat_group_selection`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_hcgs"])."',`hide_ticket_group_selection`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_htgs"])."',`visitor_filters`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_visitor_filters"])."' WHERE `id`='".@mysql_real_escape_string($_POST["p_groups_" . $count . "_id"])."' LIMIT 1;");
			
			if(!empty($processed))
				$processed .= " AND ";
			$processed .= "`id` != '".@mysql_real_escape_string($_POST["p_groups_" . $count++ . "_id"])."'";
		}
		
		queryDB(true,"DELETE FROM `".$_prefix.DATABASE_GROUPS."` WHERE (".$processed.") AND `dynamic`=0;");
		queryDB(true,"DELETE FROM `".$_prefix.DATABASE_OPERATOR_LOGINS."`;");
		getData(true,true,true,false);
		
		updatePredefinedMessages($_prefix);

		if(isset($_POST[POST_INTERN_EDIT_USER]))
		{
			$combos = explode(";",$_POST[POST_INTERN_EDIT_USER]);
			for($i=0;$i<count($combos);$i++)
				if(strpos($combos[$i],",") !== false)
				{
					$vals = explode(",",$combos[$i]);
					if(strlen($vals[1])>0)
						$INTERNAL[$vals[0]]->ChangePassword($vals[1],true);
					if($vals[2] == 1)
						$INTERNAL[$vals[0]]->SetPasswordChangeNeeded(true);
				}
		}
		setIdle(0);
		$RESPONSE->SetStandardResponse(1,"");
	}
}

function setConfig($id = 0)
{

	global $INTERNAL,$RESPONSE,$STATS,$CONFIG;

	administrationLog("setConfig","",CALLER_SYSTEM_ID);
	if($INTERNAL[CALLER_SYSTEM_ID]->Level == USER_LEVEL_ADMIN || in_array($CONFIG["gl_host"],$INTERNAL[CALLER_SYSTEM_ID]->WebsitesConfig))
	{
		if(STATS_ACTIVE && !empty($_POST["p_reset_stats"]))
			$STATS->ResetAll();
	
		$file = (ISSUBSITE || $INTERNAL[CALLER_SYSTEM_ID]->Level != USER_LEVEL_ADMIN) ? str_replace("config.inc","config.".SUBSITEHOST.".inc",FILE_CONFIG) : FILE_CONFIG;
		$id = createFile($file,base64_decode($_POST["p_upload_value"]),true);
		@touch(FILE_CONFIG);
		if(isset($_POST["p_available"]))
			setAvailability($_POST["p_available"]);
		
		$int = 1;
		while(isset($_POST["p_int_trans_iso_" . $int]) && strpos($_POST["p_int_trans_iso_" . $int],"..") === false)
		{
			$file = getLocalizationFileString($_POST["p_int_trans_iso_" . $int],false);
			if(!isset($_POST["p_int_trans_delete_" . $int]))
				createFile($file, slashesStrip($_POST["p_int_trans_content_" . $int]), true);
			else
			{
				if(file_exists($file))
					@unlink($file);
				if(empty($CONFIG["gl_root"]))
					createFile($file,"",true);
			}
			$int++;
		}
		$int = 0;
		if(DB_CONNECTION)
		{
			queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_TYPES."` SET `delete`='1';");
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_LOCALIZATIONS."`;");
			while(!empty($_POST["p_cfg_cct_id_" . $int]))
			{
				$cct = new CommercialChatBillingType($_POST["p_cfg_cct_id_" . $int],$_POST["p_cfg_cct_mnoc_" . $int],$_POST["p_cfg_cct_mtloc_" . $int],$_POST["p_cfg_cct_tae_" . $int],$_POST["p_cfg_cct_tvbo_" . $int],$_POST["p_cfg_cct_svbo_" . $int],$_POST["p_cfg_cct_evbo_" . $int],$_POST["p_cfg_cct_citl_" . $int],$_POST["p_cfg_cct_p_" . $int]);
				$cct->Save();
				$iint = 0;
				
				while(!empty($_POST["p_cfg_cctli_id_" . $int . "_" .$iint]))
				{
					$cctl = new CommercialChatVoucherLocalization($_POST["p_cfg_cctli_id_" . $int . "_" .$iint],$_POST["p_cfg_cctli_itl_" . $int . "_" .$iint],$_POST["p_cfg_cctli_t_" . $int . "_" .$iint],$_POST["p_cfg_cctli_d_" . $int . "_" .$iint],$_POST["p_cfg_cctli_terms_" . $int . "_" .$iint],$_POST["p_cfg_cctli_emvc_" . $int . "_" .$iint],$_POST["p_cfg_cctli_emvp_" . $int . "_" .$iint],$_POST["p_cfg_cctli_emvu_" . $int . "_" .$iint],$_POST["p_cfg_cctli_exr_" . $int . "_" .$iint]);
					$cctl->Save($_POST["p_cfg_cct_id_" . $int]);
					$iint++;
				}
				$int++;
			}
			$int=0;
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_PROVIDERS."`;");
			while(!empty($_POST["p_cfg_ccpp_id_" . $int]))
			{
				$ccpp = new CommercialChatPaymentProvider($_POST["p_cfg_ccpp_id_" . $int],$_POST["p_cfg_ccpp_n_" . $int],$_POST["p_cfg_ccpp_a_" . $int],$_POST["p_cfg_ccpp_u_" . $int],$_POST["p_cfg_ccpp_l_" . $int]);
				$ccpp->Save();
				$int++;
			}
			queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_COMMERCIAL_CHAT_TYPES."` WHERE `delete`='1';");
		}
	}
	removeSSpanFile(true);
	setIdle(0);
	$RESPONSE->SetStandardResponse($id,"");
}

function dataBaseTest($id=0)
{
	global $RESPONSE;
	$res = testDataBase($_POST[POST_INTERN_DATABASE_HOST],$_POST[POST_INTERN_DATABASE_USER],$_POST[POST_INTERN_DATABASE_PASS],$_POST[POST_INTERN_DATABASE_NAME],$_POST[POST_INTERN_DATABASE_PREFIX]);
	if(empty($res))
	{
		$RESPONSE->SetStandardResponse(1,base64_encode(""));
		setManagement($_POST[POST_INTERN_DATABASE_PREFIX]);
	}
	else
		$RESPONSE->SetStandardResponse(2,base64_encode($res));
}

function sendTestMail()
{
	global $RESPONSE,$CONFIG;
	$return = sendMail($CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],$CONFIG["gl_mail_sender"],"LiveZilla Test Mail","LiveZilla Test Mail");
	if($return==1)
		$RESPONSE->SetStandardResponse(1,base64_encode(""));
	else
		$RESPONSE->SetStandardResponse(2,base64_encode($return));
}

function createTables($id=0)
{
	global $RESPONSE,$GROUPS,$INTERNAL,$DB_CONNECTOR;
	if($INTERNAL[CALLER_SYSTEM_ID]->Level==USER_LEVEL_ADMIN)
	{
		$conndetails = array($_POST[POST_INTERN_DATABASE_HOST],$_POST[POST_INTERN_DATABASE_USER],$_POST[POST_INTERN_DATABASE_PASS]);
		$connection = @mysql_connect($conndetails[0],$conndetails[1],$conndetails[2]);
		//mysql_query("SET NAMES 'utf8'", $connection);
		if(!$connection)
		{
			$error = mysql_error();
			$RESPONSE->SetStandardResponse($id,base64_encode("Can't connect to database. Invalid host or login! (" . mysql_errno() . ((!empty($error)) ? ": " . $error : "") . ")"));
			return false;
		}
		else
		{
			mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $connection);
			$db_selected = mysql_select_db(@mysql_real_escape_string($_POST[POST_INTERN_DATABASE_NAME]),$connection);
			if(!$db_selected)
			{
				if(!empty($_POST[POST_INTERN_DATABASE_CREATE]))
				{
					$resultcr = @mysql_query("CREATE DATABASE `".@mysql_real_escape_string($_POST[POST_INTERN_DATABASE_NAME])."`",$connection);
					if(!$resultcr)
						$RESPONSE->SetStandardResponse($id,base64_encode(mysql_errno() . ": " . mysql_error()));
					else
					{
						unset($_POST[POST_INTERN_DATABASE_CREATE]);
						return createTables();
					}
				}
				else
	    			$RESPONSE->SetStandardResponse(2,base64_encode(mysql_errno() . ": " . mysql_error()));
			}
			else
			{
				$resultvc = @mysql_query("SELECT `version`,`chat_id`,`ticket_id` FROM `".@mysql_real_escape_string($_POST[POST_INTERN_DATABASE_PREFIX]).DATABASE_INFO."` ORDER BY `version` DESC LIMIT 1",$connection);
				if($rowvc = @mysql_fetch_array($resultvc, MYSQL_BOTH))
				{
					if(VERSION != $rowvc["version"] && !empty($rowvc["version"]))
					{
						$upres = initUpdateDatabase($rowvc["version"],$connection,$_POST[POST_INTERN_DATABASE_PREFIX]);
						if($upres === true)
						{
							$RESPONSE->SetStandardResponse(1,base64_encode(""));
							return true;
						}
					}
				}

				$resultv = @mysql_query("SELECT VERSION() as `mysql_version`",$connection);
				if(!$resultv)
				{
					$RESPONSE->SetStandardResponse($id,base64_encode(mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $sql));
					return false;
				}
				else
				{
					$mrow = @mysql_fetch_array($resultv, MYSQL_BOTH);
					$mversion = explode(".",$mrow["mysql_version"]);
					if(count($mversion) > 0 && $mversion[0] < MYSQL_NEEDED_MAJOR)
					{
						$RESPONSE->SetStandardResponse($id,base64_encode("LiveZilla requires MySQL version ".MYSQL_NEEDED_MAJOR." or greater. The MySQL version installed on your server is " . $mrow["mysql_version"]."."));
						return false;
					}
				}
				
				$resulti = @mysql_query("SHOW VARIABLES LIKE 'have_innodb'",$connection);
				if(!$resulti)
				{
					$RESPONSE->SetStandardResponse($id,base64_encode(mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $sql));
					return false;
				}
				else
				{
					$irow = @mysql_fetch_array($resulti, MYSQL_BOTH);
					if(strtolower($irow["Value"])!="yes")
					{
						$RESPONSE->SetStandardResponse($id,base64_encode("The MySQL storage engine InnoDB is probably disabled on your webserver. Please allow it and try again."));
						return false;
					}
				}
			
				$commands = explode("###",str_replace("<!--version-->",VERSION,str_replace("<!--prefix-->",$_POST[POST_INTERN_DATABASE_PREFIX],file_get_contents(LIVEZILLA_PATH . "_definitions/dump.lsql"))));
				foreach($commands as $sql)
				{
					if(empty($sql))
						continue;

					$result = mysql_query(trim($sql),$connection);
					if(!$result && mysql_errno() != 1050 && mysql_errno() != 1005 && mysql_errno() != 1062)
					{
						$RESPONSE->SetStandardResponse($id,base64_encode(mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $sql));
						return false;
					}
				}

				importButtons(PATH_IMAGES . "buttons/",$_POST[POST_INTERN_DATABASE_PREFIX],$connection);
				$DB_CONNECTOR = $connection;
				$RESPONSE->SetStandardResponse(1,base64_encode(""));
				return true;
			}
		}
	}
	return false;
}

function importButtons($_folder,$_prefix,$_connection)
{
	try
	{
		administrationLog("importButtons",serialize($_POST),CALLER_SYSTEM_ID);
		$buttons = getDirectory($_folder,".php",true);
		foreach($buttons as $button)
		{
			$parts = explode("_",$button);
			if(count($parts) == 3)
			{
				$type = ($parts[0]=="overlay") ? $parts[0] : "inlay";
				$id = intval($parts[1]);
				$online = explode(".",$parts[2]);
				$online = $online[0];
				$parts = explode(".",$button);
				$itype = $parts[1];
				mysql_query("INSERT INTO `".@mysql_real_escape_string($_prefix).DATABASE_IMAGES."` (`id`,`online`,`button_type`,`image_type`,`data`) VALUES ('".@mysql_real_escape_string($id)."','".@mysql_real_escape_string($online)."','".@mysql_real_escape_string($type)."','".@mysql_real_escape_string($itype)."','".@mysql_real_escape_string(fileToBase64($_folder . $button))."');",$_connection);
			}
		}
	}
	catch (Exception $e)
	{
		logit(serialize($e));
	}
}

function createTable($_sql,$_connection)
{
	$sql = "CREATE TABLE `".@mysql_real_escape_string($_POST[POST_INTERN_DATABASE_PREFIX]).$_sql;
	$result = mysql_query($sql,$_connection);
	if(!$result && mysql_errno() != 1050)
	{
		$RESPONSE->SetStandardResponse($id,base64_encode(mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $sql));
		return false;
	}
	return true;
}

function testDataBase($_host,$_user,$_pass,$_dbname,$_prefix,$_intense=false)
{
	global $DB_CONNECTOR;
	if(!function_exists("mysql_connect"))
		return "PHP/MySQL extension is missing (php_mysql.dll)";
		
	$connection = @mysql_connect($_host,$_user,$_pass);
	@mysql_query("SET NAMES 'utf8'", $connection);
	if(!$connection)
	{
		$error = mysql_error();
		return "Can't connect to database. Invalid host or login! (" . mysql_errno() . ((!empty($error)) ? ": " . $error : "") . ")";
	}
	else
	{
		$db_selected = @mysql_select_db(@mysql_real_escape_string($_dbname),$connection);
		if (!$db_selected) 
    		return mysql_errno() . ": " . mysql_error();
		else
		{
			$resultv = @mysql_query("SELECT VERSION() as `mysql_version`",$connection);
			if(!$resultv)
				return mysql_errno() . ": " . mysql_error();
			else
			{
				$mrow = @mysql_fetch_array($resultv, MYSQL_BOTH);
				$mversion = explode(".",$mrow["mysql_version"]);
				if(count($mversion) > 0 && $mversion[0] < MYSQL_NEEDED_MAJOR)
					return "LiveZilla requires MySQL version ".MYSQL_NEEDED_MAJOR." or greater. The MySQL version installed on your server is " . $mrow["mysql_version"].".";
			}
			
			$result = @mysql_query("SELECT `version`,`chat_id`,`ticket_id` FROM `".@mysql_real_escape_string($_prefix).DATABASE_INFO."` ORDER BY `version` DESC LIMIT 1",$connection);
			$row = @mysql_fetch_array($result, MYSQL_BOTH);
			$version = $row["version"];
			if(!$result || empty($version))
				return "Cannot read the LiveZilla Database version. Please try to recreate the table structure. If you experience this message during installation process, please try to setup a prefix (for example lz_).";
				
			if($version != VERSION && defined("SERVERSETUP") && SERVERSETUP)
			{
				$upres = initUpdateDatabase($version,$connection,$_prefix);
				if($upres !== true)
					return "Cannot update database structure from [".$version."] to [".VERSION."]. Please make sure that the user " . $_user . " has the MySQL permission to ALTER tables in " . $_dbname .".\r\n\r\nError: " . $upres;
			}
			else if($version != VERSION && empty($_GET["iv"]))
				return "Invalid database version: ".$version." (required: ".VERSION."). Please validate the database in the server administration panel first.\r\n\r\n";

			$DB_CONNECTOR = $connection;
			$result = @mysql_query("SELECT * FROM `".@mysql_real_escape_string($_prefix).DATABASE_OPERATORS."`",$connection);
			if(@mysql_num_rows($result) == 0)
				setManagement($_prefix,false,true);

			$rowmci = @mysql_fetch_array(@mysql_query("SELECT MAX(`chat_id`) as `mcid` FROM `".@mysql_real_escape_string($_prefix).DATABASE_CHAT_ARCHIVE."`",$connection), MYSQL_BOTH);
			$rowmti = @mysql_fetch_array(@mysql_query("SELECT MAX(`id`) as `mtid` FROM `".@mysql_real_escape_string($_prefix).DATABASE_TICKETS."`",$connection), MYSQL_BOTH);
			
			if(!empty($rowmci["mcid"]) && is_numeric($rowmci["mcid"]) && $rowmci["mcid"] > $row["chat_id"])
				@mysql_query("UPDATE `".@mysql_real_escape_string($_prefix).DATABASE_INFO."` SET `chat_id`=".@mysql_real_escape_string($rowmci["mcid"]),$connection);
			
			if(!empty($rowmti["mtid"]) && is_numeric($rowmti["mtid"]) && $rowmti["mtid"] > $row["ticket_id"])
				@mysql_query("UPDATE `".@mysql_real_escape_string($_prefix).DATABASE_INFO."` SET `ticket_id`=".@mysql_real_escape_string($rowmti["mtid"]),$connection);

			if($_intense && empty($_GET["iv"]))
				foreach(get_defined_constants() as $constant => $val)
					if(substr($constant,0,9) == "DATABASE_")
						if(!@mysql_query("SELECT * FROM `".@mysql_real_escape_string($_prefix).$val."` LIMIT 1;",$connection))
							return mysql_errno() . ": " . mysql_error();

			return null;
		}
	}
}

function initUpdateDatabase($_version,$_connection,$_prefix)
{
	require_once("./_lib/functions.data.db.update.inc.php");
	$resulti = @mysql_query($sql = "SHOW VARIABLES LIKE 'have_innodb'",$_connection);
	if(!$resulti)
		return mysql_errno() . ": " . mysql_error() . "\r\n\r\nSQL: " . $sql;
	else
	{
		$irow = @mysql_fetch_array($resulti, MYSQL_BOTH);
		if(strtolower($irow["Value"])!="yes")
			return "The MySQL storage engine InnoDB is disabled on your webserver. Please allow it and try again.";
	}
	$upres = updateDatabase($_version,$_connection,$_prefix);
	return $upres;
}

?>
