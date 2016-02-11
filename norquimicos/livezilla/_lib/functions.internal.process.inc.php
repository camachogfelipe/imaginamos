<?php
/****************************************************************************************
* LiveZilla functions.internal.inc.php
* 
* Copyright 2013 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
****************************************************************************************/

if(!defined("IN_LIVEZILLA"))
	die();

function processUpdateReport()
{
	$count = 0;
	if(STATS_ACTIVE)
		while(isset($_POST[POST_INTERN_PROCESS_UPDATE_REPORT . "_va_" . $count]))
		{
			$parts = explode("_",$_POST[POST_INTERN_PROCESS_UPDATE_REPORT . "_va_" . $count]);
			if($parts[1]==0)
				$report = new StatisticYear($parts[0],0,0);
			else if($parts[2]==0)
				$report = new StatisticMonth($parts[0],$parts[1],0);
			else
				$report = new StatisticDay($parts[0],$parts[1],$parts[2]);
			$report->Update(!empty($_POST[POST_INTERN_PROCESS_UPDATE_REPORT . "_vb_" . $count]));
			$count++;
		}
}

function processAuthentications()
{
	if(isset($_POST[POST_INTERN_PROCESS_AUTHENTICATIONS . "_va"]))
		appendAuthentications();
}

function processStatus()
{
	global $INTERNAL,$CONFIG;
	if(isset($_POST[POST_INTERN_USER_STATUS]))
	{
		if(!LOGIN)
		{
			$INTERNAL[CALLER_SYSTEM_ID]->Status = $_POST[POST_INTERN_USER_STATUS];
			$INTERNAL[CALLER_SYSTEM_ID]->GroupsAway = @unserialize(base64_decode($_POST["p_groups_status"]));
			array_walk($INTERNAL[CALLER_SYSTEM_ID]->GroupsAway,"b64dcode");
		}
		else
			$INTERNAL[CALLER_SYSTEM_ID]->Status = USER_STATUS_OFFLINE;
	}
}

function processAlerts()
{
	if(isset($_POST[POST_INTERN_PROCESS_ALERTS . "_va"]))
	{
		$alerts = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_ALERTS . "_va"]));
		$visitors = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_ALERTS . "_vb"]);
		$browsers = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_ALERTS . "_vc"]);
		foreach($alerts as $key => $text)
		{
			$alert = new Alert($visitors[$key],$browsers[$key],$alerts[$key]);
			$alert->Save();
		}
	}
}

function processEvents()
{
	if(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_va_0"]))
		appendEvents();
}

function processPosts()
{
	global $INTERNAL,$GROUPS,$VISITOR,$CONFIG,$STATS;
	$time = time();
	$count = -1;
	while(isset($_POST[POST_INTERN_PROCESS_POSTS . "_va" . ++$count]))
	{
		$intreceivers = array();
		$post = slashesStrip($_POST[POST_INTERN_PROCESS_POSTS . "_va" . $count]);
		$rec = $_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count];
		
		if($rec == GROUP_EVERYONE_INTERN || isset($GROUPS[$rec]))
		{
			if($rec == GROUP_EVERYONE_INTERN || !$GROUPS[$rec]->IsDynamic)
			{
				foreach($INTERNAL as $internal)
					if($internal->SystemId != CALLER_SYSTEM_ID)
						if($_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count] == GROUP_EVERYONE_INTERN || in_array($_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count],$internal->Groups))
							if(count(array_intersect($internal->Groups,$INTERNAL[CALLER_SYSTEM_ID]->Groups))>0 || (count($INTERNAL[CALLER_SYSTEM_ID]->GroupsHidden)==0 && count($internal->GroupsHidden)==0))
								if($internal->Status != USER_STATUS_OFFLINE || !empty($CONFIG["gl_ogcm"]))
								{
									$intreceivers[$internal->SystemId]=true;
									$npost = new Post(getId(32),CALLER_SYSTEM_ID,$internal->SystemId,$post,$time,"",$INTERNAL[CALLER_SYSTEM_ID]->Fullname);
									$npost->Translation = $_POST[POST_INTERN_PROCESS_POSTS . "_vd" . $count];
									$npost->TranslationISO = $_POST[POST_INTERN_PROCESS_POSTS . "_ve" . $count];
									$npost->Persistent = true;
									if($_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count] == GROUP_EVERYONE_INTERN || in_array($_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count],$INTERNAL[CALLER_SYSTEM_ID]->Groups))
										$npost->ReceiverGroup = $_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count];
									$npost->Save();
								}
			}
			else
			{
				foreach($GROUPS[$rec]->Members as $member)
				{
					if(empty($INTERNAL[$member]))
						processPostForExternal($member,$rec,$post,$time,$count,false);
					else if($member != CALLER_SYSTEM_ID && ($INTERNAL[$member]->Status != USER_STATUS_OFFLINE || !empty($CONFIG["gl_ogcm"])))
						processPostForInternal($member,$post,$time,$count,$rec);
				}
			}
		}
		else if($_POST[POST_INTERN_PROCESS_POSTS . "_vb" . $count] == GROUP_EVERYONE_EXTERN)
		{
			foreach($INTERNAL[CALLER_SYSTEM_ID]->ExternalChats as $chat)
			{
				$npost = new Post(getId(32),CALLER_SYSTEM_ID,$chat->SystemId,$post,$time,"",$INTERNAL[CALLER_SYSTEM_ID]->Fullname);
				$npost->ReceiverGroup = $chat->SystemId;
				$npost->ChatId = $chat->ChatId;
				$npost->Translation = $_POST[POST_INTERN_PROCESS_POSTS . "_vd" . $count];
				$npost->TranslationISO = $_POST[POST_INTERN_PROCESS_POSTS . "_ve" . $count];
				$npost->Save();
			}
		}
		else
		{
			if(!empty($INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]))
				processPostForExternal($rec,$rec,$post,$time,$count,true);
			else if(!empty($INTERNAL[$rec]))
				processPostForInternal($rec,$post,$time,$count,"");
		}
	}
}

function processPostForInternal($rec,$post,$time,$count,$rgroup)
{
	global $INTERNAL;
	$npost = new Post($_POST[POST_INTERN_PROCESS_POSTS . "_vc" . $count],CALLER_SYSTEM_ID,$rec,$post,$time,"",$INTERNAL[CALLER_SYSTEM_ID]->Fullname);
	$npost->ReceiverGroup = $rgroup;
	$npost->Persistent = true;
	$npost->Translation = $_POST[POST_INTERN_PROCESS_POSTS . "_vd" . $count];
	$npost->TranslationISO = $_POST[POST_INTERN_PROCESS_POSTS . "_ve" . $count];
	$npost->Save();
}

function processPostForExternal($rec,$recgroup,$post,$time,$count,$_group=false)
{
	global $INTERNAL,$GROUPS,$VISITOR,$CONFIG,$STATS;
	
	if(STATS_ACTIVE)
		$STATS->ProcessAction(ST_ACTION_INTERNAL_POST);

	if(!empty($INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]) && $_group)
	{
		$INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]->Load();
		$INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]->Members[$rec] = true;
		$chatId = $INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]->ChatId;
		$receiverlist = $INTERNAL[CALLER_SYSTEM_ID]->ExternalChats[$rec]->Members;
	}
	else
	{
		$chatId = getValueBySystemId($rec,"chat_id","");
		$receiverlist = array($rec=>$rec);
	}
	$npost = new Post(getId(32),CALLER_SYSTEM_ID,"",$post,$time,$chatId,$INTERNAL[CALLER_SYSTEM_ID]->Fullname);
	
	foreach($receiverlist as $systemid => $member)
	{
		if($systemid==CALLER_SYSTEM_ID || !empty($member->Declined))
			continue;
			
		if(!empty($INTERNAL[$systemid]) && !empty($GROUPS[$recgroup]->Members[$systemid]))
			continue;
			
		$npost->Receiver = $systemid;
		$npost->Persistent = false;
		$npost->Translation = $_POST[POST_INTERN_PROCESS_POSTS . "_vd" . $count];
		$npost->TranslationISO = $_POST[POST_INTERN_PROCESS_POSTS . "_ve" . $count];
		$npost->ReceiverGroup = $recgroup;
		$npost->ReceiverOriginal = $rec;
		$npost->Save();
		
		$INTERNAL[CALLER_SYSTEM_ID]->SetRepostTime($npost->ReceiverGroup,$npost->Created);
	}
}

function processForwards($count=0,$double=false)
{
	global $INTERNAL,$STATS;
	while(isset($_POST[POST_INTERN_PROCESS_FORWARDS . "_va_".$count]))
	{
		if(STATS_ACTIVE)
			$STATS->ProcessAction(ST_ACTION_FORWARDED_CHAT);
			
		$forward = new Forward($_POST[POST_INTERN_PROCESS_FORWARDS . "_va_".$count],$_POST[POST_INTERN_PROCESS_FORWARDS . "_vd_".$count]);
		$forward->InitiatorSystemId = CALLER_SYSTEM_ID;
		$forward->ReceiverUserId = $_POST[POST_INTERN_PROCESS_FORWARDS . "_vf_".$count];
		$forward->ReceiverBrowserId = $_POST[POST_INTERN_PROCESS_FORWARDS . "_vg_".$count];
		$forward->TargetSessId = $_POST[POST_INTERN_PROCESS_FORWARDS . "_vb_".$count];
		$forward->TargetGroupId = $_POST[POST_INTERN_PROCESS_FORWARDS . "_ve_".$count];
		$forward->Invite = !empty($_POST[POST_INTERN_PROCESS_FORWARDS . "_vh_".$count]);
		$chat = new VisitorChat($_POST[POST_INTERN_PROCESS_FORWARDS . "_vf_".$count],$_POST[POST_INTERN_PROCESS_FORWARDS . "_vg_".$count]);
		$chat->ChatId = $_POST[POST_INTERN_PROCESS_FORWARDS . "_va_".$count];
		$chat->Load();
		
		foreach($chat->Members as $sysid => $member)
			if($member->Status == 0 && $forward->TargetSessId == $sysid)
				$double = true;

		if(!$double)
		{
			if(strlen($_POST[POST_INTERN_PROCESS_FORWARDS . "_vc_".$count]) > 0)
				$forward->Text = $_POST[POST_INTERN_PROCESS_FORWARDS . "_vc_".$count];
			$forward->Save();
		}
		$count++;
	}
}

function processRequests()
{
	if(isset($_POST[POST_INTERN_PROCESS_REQUESTS . "_va"]))
		appendChatRequests();
}

function processWebsitePushs()
{
	if(isset($_POST[POST_INTERN_PROCESS_GUIDES . "_va"]))
		appendWebsitePushs();
}

function processFilters()
{
	if(isset($_POST[POST_INTERN_PROCESS_FILTERS . "_va"]))
		appendFilters();
}

function processProfile()
{
	if(isset($_POST[POST_INTERN_PROCESS_PROFILE . "_va"]))
		appendProfile();
}

function processProfilePictures()
{
	if(isset($_POST[POST_INTERN_PROCESS_PICTURES]))
		appendProfilePictures();
}

function processWebcamPictures()
{
	if(isset($_POST[POST_INTERN_PROCESS_PICTURES_WEBCAM]))
		appendWebcamPictures();
}

function processPermissions()
{
	if(isset($_POST[POST_INTERN_PROCESS_PERMISSIONS . "_va"]))
		appendPermissions();
}

function processExternalReloads()
{
	if(isset($_POST[POST_INTERN_PROCESS_EXTERNAL_RELOADS]))
		appendExternalReloads();
}

function processClosedTickets()
{
	if(isset($_POST[POST_INTERN_PROCESS_ACCEPTED_MESSAGES . "_va"]))
		appendClosedTickets();
}

function processResources()
{
	if(isset($_POST[POST_INTERN_PROCESS_RESOURCES]))
		appendResources();
}

function processReceivedPosts()
{
	if(isset($_POST[POST_INTERN_PROCESS_RECEIVED_POSTS]))
		appendReceivedPosts();
}

function processCancelInvitation()
{
	global $VISITOR;
	if(isset($_POST[POST_INTERN_PROCESS_CANCEL_INVITATION]))
	{
		$users = explode(POST_ACTION_VALUE_SPLITTER,utf8_decode($_POST[POST_INTERN_PROCESS_CANCEL_INVITATION]));
		foreach($users as $uid)
		{
			if($result = queryDB(true,"SELECT `receiver_browser_id` FROM `".DB_PREFIX.DATABASE_CHAT_REQUESTS."` WHERE `receiver_user_id`='".@mysql_real_escape_string($uid)."' AND `canceled`=0;"))
				while($row = mysql_fetch_array($result, MYSQL_BOTH))
					if(!empty($VISITOR[$uid]->Browsers[$row["receiver_browser_id"]]))
						$VISITOR[$uid]->Browsers[$row["receiver_browser_id"]]->ForceUpdate();
			queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_CHAT_REQUESTS."` SET `closed`=1,`canceled`=1 WHERE `receiver_user_id`='".@mysql_real_escape_string($uid)."';");
		}
		getData(false,false,true,false);
	}
}

function processGoals($count = 0)
{
	global $RESPONSE;
	if(isset($_POST[POST_INTERN_PROCESS_GOALS . "_va_" .$count]))
	{
		$goallinks = array();
		if($result = queryDB(true,"SELECT * FROM `".DB_PREFIX.DATABASE_EVENT_GOALS."`"))
			while($row = mysql_fetch_array($result, MYSQL_BOTH))
				$goallinks[] = array($row["event_id"],$row["goal_id"]);
	
		queryDB(true,"TRUNCATE TABLE `".DB_PREFIX.DATABASE_GOALS."`;");
		while(isset($_POST[POST_INTERN_PROCESS_GOALS . "_va_" .$count]))
		{
			if($_POST[POST_INTERN_PROCESS_GOALS . "_vb_" .$count] != "-1")
				queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_GOALS."` (`id`, `title`, `description`, `conversion`, `ind`) VALUES ('". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_GOALS . "_vb_" .$count])."', '". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_GOALS . "_vd_" .$count])."', '". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_GOALS . "_vc_" .$count])."', '". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_GOALS . "_ve_" .$count])."','". @mysql_real_escape_string($count)."');");
			$count++;
		}
		foreach($goallinks as $lpair)
			queryDB(false,"INSERT INTO `".DB_PREFIX.DATABASE_EVENT_GOALS."` (`event_id`, `goal_id`) VALUES ('". @mysql_real_escape_string($lpair[0])."', '". @mysql_real_escape_string($lpair[1])."');");
		$RESPONSE->SetStandardResponse(1,"");
	}
}

function processBotFeedLists($count = 0)
{
	global $RESPONSE,$INTERNAL,$CONFIG,$VISITOR,$GROUPS;
	while(isset($_POST["p_bfl_va_" .$count]))
	{
		queryDB(false,"DELETE FROM `".DB_PREFIX.DATABASE_BOT_FEEDS."` WHERE `bot_id`='". @mysql_real_escape_string($_POST["p_bfl_va_" .$count])."';");
		$icount = 0;
		while(isset($_POST["p_bfl_vb_" .$count."_".$icount]))
		{
			$item = new ChatBotFeed($_POST["p_bfl_vb_" .$count."_".$icount],$_POST["p_bfl_vc_" .$count."_".$icount],$_POST["p_bfl_ve_" .$count."_".$icount],$_POST["p_bfl_vd_" .$count."_".$icount],$_POST["p_bfl_vf_" .$count."_".$icount],$_POST["p_bfl_vg_" .$count."_".$icount],$_POST["p_bfl_vh_" .$count."_".$icount]);
			$item->Save($_POST["p_bfl_va_" .$count]);
			$icount++;
		}
		$item = new ChatBotFeed();
		$count++;
	}
}

function processArchiveChats($xml="",$count = 0)
{
	global $RESPONSE,$INTERNAL,$CONFIG,$VISITOR,$GROUPS;
	while(isset($_POST[POST_INTERN_PROCESS_CHATS . "_va_" .$count]))
	{
		closeArchiveEntry($_POST[POST_INTERN_PROCESS_CHATS . "_va_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vg_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vf_" .$count],CALLER_SYSTEM_ID,$_POST[POST_INTERN_PROCESS_CHATS . "_vm_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vb_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vh_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vi_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vq_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vl_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vk_" .$count],$_POST[POST_INTERN_PROCESS_CHATS . "_vo_" .$count]);
		$xml .= "<c cid=\"".base64_encode($_POST[POST_INTERN_PROCESS_CHATS . "_va_" .$count])."\" te=\"".base64_encode($_POST[POST_INTERN_PROCESS_CHATS . "_vc_" .$count])."\" />\r\n";
		$count++;
	}
	$RESPONSE->SetStandardResponse(1,$xml);
	
	if(empty($CONFIG["gl_rm_chats"]) || !empty($CONFIG["gl_rm_chats_time"]))
		sendChatTranscripts();
}

function appendResources($xml="")
{
	global $RESPONSE;
	$rids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_va"]);
	$html = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_RESOURCES . "_vb"]));
	$type = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_vc"]);
	$title = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_RESOURCES . "_vd"]));
	$disc = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_ve"]);
	$parent = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_vf"]);
	$rank = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_vg"]);
	$size = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RESOURCES . "_vh"]);
	foreach($rids as $key => $id)
	{
		processResource(CALLER_SYSTEM_ID,$rids[$key],base64_decode($html[$key]),$type[$key],base64_decode($title[$key]),$disc[$key],$parent[$key],$rank[$key],$size[$key]);
		$xml .= "<r rid=\"".base64_encode($rids[$key])."\" disc=\"".base64_encode($disc[$key])."\" />\r\n";
	}
	$RESPONSE->SetStandardResponse(1,$xml);
}

function appendClosedTickets()
{
	global $INTERNAL;
	$msgnames = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_ACCEPTED_MESSAGES . "_va"]);
	$msgids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_ACCEPTED_MESSAGES . "_vb"]);
	$msgstatus = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_ACCEPTED_MESSAGES . "_vc"]);
	foreach($msgids as $key => $id)
	{
		$ticket = new ClosedTicket($id);
		$ticket->Sender = $msgnames[$key];
		queryDB(false,"UPDATE `".DB_PREFIX.DATABASE_TICKET_EDITORS."` SET `internal_fullname`='".@mysql_real_escape_string($ticket->Sender)."',`status`='".@mysql_real_escape_string($msgstatus[$key])."',`time`='".@mysql_real_escape_string(time())."' WHERE `ticket_id`='".@mysql_real_escape_string($ticket->Id)."';");
		if(@mysql_affected_rows() <= 0)
			queryDB(false,"INSERT INTO `".DB_PREFIX.DATABASE_TICKET_EDITORS."` (`ticket_id` ,`internal_fullname` ,`status`,`time`) VALUES ('".@mysql_real_escape_string($ticket->Id)."', '".@mysql_real_escape_string($ticket->Sender)."', '".@mysql_real_escape_string($msgstatus[$key])."', '".@mysql_real_escape_string(time())."');");
	}
}

function appendReceivedPosts()
{
	global $INTERNAL;
	$pids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_RECEIVED_POSTS]);
	foreach($pids as $id)
	{
		$post = new Post($id,"","","","","","");
		$post->MarkReceived(CALLER_SYSTEM_ID);
	}
}

function appendExternalReloads()
{
	global $INTERNAL;
	$INTERNAL[CALLER_SYSTEM_ID]->ExternalReloads = Array();
	$userids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_EXTERNAL_RELOADS]);
	foreach($userids as $id)
		$INTERNAL[CALLER_SYSTEM_ID]->VisitorStaticReload[$id] = true;
}

function appendPermissions()
{
	$ids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_PERMISSIONS . "_va"]);
	$results = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_PERMISSIONS . "_vb"]);

	foreach($ids as $key => $id)
	{
		$fur = new FileUploadRequest($ids[$key],CALLER_SYSTEM_ID);
		$fur->Permission = $results[$key];
		$fur->Save();
	}
}

function appendAuthentications()
{
	global $INTERNAL,$RESPONSE;
	$users = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_AUTHENTICATIONS . "_va"]);
	$passwords = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_AUTHENTICATIONS . "_vb"]);
	foreach($users as $key => $user)
	{
		if($user == CALLER_SYSTEM_ID)
		{
			$INTERNAL[$user]->ChangePassword($passwords[$key],true,true);
			$RESPONSE->Authentications = "<val userid=\"".base64_encode($user)."\" pass=\"".base64_encode($passwords[$key])."\" />\r\n";
		}
	}
}

function appendWebsitePushs()
{
	global $INTERNAL;
	$guides = Array();
	
	$visitors = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_GUIDES . "_va"]);
	$asks = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_GUIDES . "_vb"]);
	$urls = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_GUIDES . "_vc"]));
	$browids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_GUIDES . "_vd"]);
	$texts = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_GUIDES . "_ve"]));
	$groups = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_GUIDES . "_vf"]));
	
	foreach($visitors as $key => $visitor)
	{
		$guide = new WebsitePush(CALLER_SYSTEM_ID,$groups[$key],$visitors[$key],$browids[$key],$texts[$key],$asks[$key],$urls[$key]);
		$guide->Save();
	}
}

function appendEvents()
{
	global $VISITOR;
	$count = 0;
	while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_va_" . $count]))
	{
		$event = new Event($_POST[POST_INTERN_PROCESS_EVENTS . "_va_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vb_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vc_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vd_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_ve_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vf_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vg_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vh_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vk_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vl_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vm_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vn_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vo_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vp_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vq_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vs_" . $count],$_POST[POST_INTERN_PROCESS_EVENTS . "_vt_" . $count]);
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_EVENTS."` WHERE `id`='".@mysql_real_escape_string($event->Id)."' LIMIT 1;");

		if(!isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vx_" . $count]))
		{
			queryDB(true,$event->GetSQL());
			$counturl = 0;
			while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_a_" .$counturl]))
			{
				$eventURL = new EventURL($_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_f_" .$counturl],$event->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_a_" .$counturl],$_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_b_" .$counturl],$_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_c_" .$counturl],$_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_d_" .$counturl]);
				queryDB(true,$eventURL->GetSQL());
				if(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_e_" .$counturl]))
					queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_EVENT_FUNNELS."` (`eid`,`uid`,`ind`) VALUES ('".@mysql_real_escape_string($event->Id)."','".@mysql_real_escape_string($eventURL->Id)."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_EVENTS . "_vi_" . $count . "_e_" .$counturl])."');");
				$counturl++;
			}
			
			$countgoals = 0;
			while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vs_" . $count . "_a_" .$countgoals]))
			{
				queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_EVENT_GOALS."` (`event_id`,`goal_id`) VALUES ('".@mysql_real_escape_string($event->Id)."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_EVENTS . "_vs_" . $count . "_a_" .$countgoals])."');");
				$countgoals++;
			}
			
			$countaction = 0;
			while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_a_" .$countaction]))
			{
				$eventAction = new EventAction($event->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_a_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_b_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_c_" .$countaction]);
				queryDB(true,$eventAction->GetSQL());
				if($eventAction->Type == 2 && isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_a_" .$countaction]))
				{
					$eventActionInvitation = new Invitation($eventAction->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_a_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_b_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_c_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_d_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_e_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_f_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_g_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_h_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_i_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_j_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_k_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_l_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_m_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_n_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_o_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_p_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_q_" .$countaction]);
					queryDB(true,$eventActionInvitation->GetSQL());
					
					$countsender = 0;
					while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_i_a_" .$countaction . "_" . $countsender]))
					{
						$eventActionInvitationSender = new EventActionSender($eventActionInvitation->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_i_a_" .$countaction . "_" . $countsender],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_i_b_" .$countaction . "_" . $countsender],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_inv_i_c_" .$countaction . "_" . $countsender]);
						$eventActionInvitationSender->SaveSender();
						$countsender++;
					}
				}
				else if($eventAction->Type == 5 && isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_a_" .$countaction]))
				{
					$eventActionOverlayBox = new OverlayElement($eventAction->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_a_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_b_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_c_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_d_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_e_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_f_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_g_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_h_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_i_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_j_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_k_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_l_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_m_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_n_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_o_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_p_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_q_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_r_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_ovb_s_" .$countaction]);
					queryDB(true,$eventActionOverlayBox->GetSQL());
				}
				else if($eventAction->Type == 4 && isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_a_" .$countaction]))
				{
					$eventActionWebsitePush = new WebsitePush($eventAction->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_a_" .$countaction],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_b_" .$countaction]);
					$eventActionWebsitePush->SaveEventConfiguration();
					
					$countsender = 0;
					while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_c_a_" .$countaction . "_" . $countsender]))
					{
						$eventActionWebsitePushSender = new EventActionSender($eventActionWebsitePush->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_c_a_" .$countaction . "_" . $countsender],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_c_b_" .$countaction . "_" . $countsender],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_wp_c_c_" .$countaction . "_" . $countsender]);
						$eventActionWebsitePushSender->SaveSender();
						$countsender++;
					}
				}
				else if($eventAction->Type < 2)
				{
					$countreceiver = 0;
					while(isset($_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_d_" .$countaction . "_" . $countreceiver]))
					{
						$eventActionReceiver = new EventActionReceiver($eventAction->Id,$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_d_" .$countaction . "_" . $countreceiver],$_POST[POST_INTERN_PROCESS_EVENTS . "_vj_" . $count . "_e_" .$countaction. "_" . $countreceiver]);
						queryDB(true,$eventActionReceiver->GetSQL());
						$countreceiver++;
					}
				}
				$countaction++;
			}
		}
		$count++;
	}
}

function appendChatRequests()
{
	global $INTERNAL,$VISITOR;
	$visitors = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_REQUESTS . "_va"]);
	$browids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_REQUESTS . "_vb"]);
	$reqnames = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_REQUESTS . "_vc"]));
	$reqids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_REQUESTS . "_vd"]);
	$reqtexts = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_REQUESTS . "_ve"]));
	$sendergroup = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_REQUESTS . "_vf"]));
	foreach($reqids as $key => $requestid)
		if(isset($VISITOR[$visitors[$key]]))
		{
			$skip = false;
			foreach($VISITOR[$visitors[$key]]->Browsers as $browser)
			{
				$browser->LoadChatRequest();
				if(!empty($browser->ChatRequest) && !$browser->ChatRequest->Closed)
				{
					$skip = true;
					continue;
				}
			}
			if($skip)
				continue;
			$request = new ChatRequest(CALLER_SYSTEM_ID,$sendergroup[$key],$visitors[$key],$browids[$key],base64_decode($reqtexts[$key]));
			$request->Save();
			$browser->ForceUpdate();
		}
}

function appendFilters()
{
	$creators = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_va"]);
	$createds = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vb"]);
	$editors = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_FILTERS . "_vc"]));
	$ips = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vd"]);
	$expiredates = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_ve"]);
	$userids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vf"]);
	$filternames = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vg"]);
	$reasons = explode(POST_ACTION_VALUE_SPLITTER,slashesStrip($_POST[POST_INTERN_PROCESS_FILTERS . "_vh"]));
	$filterids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vi"]);
	$activestates = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vj"]);
	$actiontypes = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vk"]);
	$exertions = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vl"]);
	$languages = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vm"]);
	$activeuserids = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vn"]);
	$activeipaddresses = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vo"]);
	$activelanguages = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vp"]);
	$allowchats = explode(POST_ACTION_VALUE_SPLITTER,$_POST[POST_INTERN_PROCESS_FILTERS . "_vq"]);
	
	foreach($filterids as $key => $id)
	{
		$filter = new Filter($filterids[$key]);
		$filter->Creator = $creators[$key];
		$filter->Created = ($createds[$key] != "0") ? $createds[$key] : time();
		$filter->Editor = $editors[$key];
		$filter->Edited = time();
		$filter->IP = $ips[$key];
		$filter->Expiredate = $expiredates[$key];
		$filter->Userid = $userids[$key];
		$filter->Reason = $reasons[$key];
		$filter->Filtername = $filternames[$key];
		$filter->Activestate = $activestates[$key];
		$filter->Exertion = $exertions[$key];
		$filter->Languages = $languages[$key];
		$filter->Activeipaddress = $activeipaddresses[$key];
		$filter->Activeuserid = $activeuserids[$key];
		$filter->Activelanguage = $activelanguages[$key];
		$filter->AllowChats = !empty($allowchats[$key]);
		
		if($actiontypes[$key] == POST_ACTION_ADD || $actiontypes[$key] == POST_ACTION_EDIT)
			$filter->Save();
		else if($actiontypes[$key] == POST_ACTION_REMOVE)
			$filter->Destroy();
	}
}

function appendProfilePictures()
{
	$pictures = explode(POST_ACTION_VALUE_SPLITTER,utf8_decode($_POST[POST_INTERN_PROCESS_PICTURES]));
	foreach($pictures as $key => $item)
	{
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` WHERE `webcam`='0' AND `internal_id`='".@mysql_real_escape_string(CALLER_SYSTEM_ID)."' LIMIT 1;");
		if(!empty($item))
			queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` (`id` ,`internal_id`,`time` ,`webcam` ,`data`) VALUES ('".@mysql_real_escape_string(getId(32))."','".@mysql_real_escape_string(CALLER_SYSTEM_ID)."','".@mysql_real_escape_string(time())."',0,'".@mysql_real_escape_string($item)."');");
	}
}

function appendWebcamPictures()
{
	$pictures = explode(POST_ACTION_VALUE_SPLITTER,utf8_decode($_POST[POST_INTERN_PROCESS_PICTURES_WEBCAM]));
	foreach($pictures as $key => $item)
	{
		queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` WHERE `webcam`='1' AND `internal_id`='".@mysql_real_escape_string(CALLER_SYSTEM_ID)."' LIMIT 1;");
		if(!empty($item))
			queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` (`id` ,`internal_id`,`time` ,`webcam` ,`data`) VALUES ('".@mysql_real_escape_string(getId(32))."','".@mysql_real_escape_string(CALLER_SYSTEM_ID)."','".@mysql_real_escape_string(time())."',1,'".@mysql_real_escape_string($item)."');");
		else
			queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_PROFILE_PICTURES."` SET `time`='".@mysql_real_escape_string(time())."' WHERE `webcam`='0' AND `internal_id`='".@mysql_real_escape_string(CALLER_SYSTEM_ID)."' LIMIT 1;");
	}
}

function processButtonIcons()
{
	queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_IMAGES."`  WHERE `id`='".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_ve"])."' AND `button_type`='".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vf"])."' LIMIT 2;");
	if(!empty($_POST[POST_INTERN_PROCESS_BANNERS . "_vb"]))
	{
		queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_IMAGES."` (`id`,`online`,`button_type`,`image_type`,`data`) VALUES ('".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_ve"])."',1,'".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vf"])."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vb"])."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_va"])."');");
		queryDB(true,"INSERT INTO `".DB_PREFIX.DATABASE_IMAGES."` (`id`,`online`,`button_type`,`image_type`,`data`) VALUES ('".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_ve"])."',0,'".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vf"])."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vd"])."','".@mysql_real_escape_string($_POST[POST_INTERN_PROCESS_BANNERS . "_vc"])."');");
	}
}

function appendProfile()
{
	queryDB(true,"DELETE FROM `".DB_PREFIX.DATABASE_PROFILES."` WHERE `id`='".@mysql_real_escape_string(CALLER_SYSTEM_ID)."';");
	$profile = new Profile($_POST[POST_INTERN_PROCESS_PROFILE . "_va"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vb"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vc"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vd"],$_POST[POST_INTERN_PROCESS_PROFILE . "_ve"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vf"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vg"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vh"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vi"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vj"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vk"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vl"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vm"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vn"],$_POST[POST_INTERN_PROCESS_PROFILE . "_vo"]);
	$profile->Save(CALLER_SYSTEM_ID);
}

function processChatActions()
{
	$count = 0;
	while(isset($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_va"]))
	{
		$type = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_vd"];
		if($type == "OperatorSignOff")
		{
			$op = new Operator($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"],"");
			$op->SignOff();
		}
		else if($type == "SendChatTranscriptTo")
		{
			$value = 1;
			while(!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_" . $value]))
			{
				queryDB(true,"UPDATE `".DB_PREFIX.DATABASE_CHAT_ARCHIVE."` SET `transcript_sent`=0,`transcript_receiver`='". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"])."' WHERE `transcript_sent`=1 AND `chat_id`='". @mysql_real_escape_string($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_" . $value])."' LIMIT 1;");
				$value++;
			}
			sendChatTranscripts(true);
		}
		else if($type == "CreatePublicGroup")
		{
			$room = new UserGroup();
			$room->IsDynamic = true;
			$room->Id = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"];
			$room->Descriptions["EN"] = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_1"];
			$room->Owner = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_2"];
			$room->Save();
			$room->AddMember($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_2"]);
		}
		else if($type == "DeletePublicGroup")
		{
			$room = new UserGroup();
			$room->Id = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"];
			$room->Destroy();
		}
		else if($type == "JoinPublicGroup")
		{
			$room = new UserGroup();
			$room->Id = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"];
			$room->AddMember($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_2"]);
		}
		else if($type == "QuitPublicGroup")
		{
			$room = new UserGroup();
			$room->Id = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"];
			$room->RemoveMember($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_1"]);
		}
		else if($type == "StartOverlayChat")
		{
			$chat = new VisitorChat($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_va" ],$_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_va" ] . "_OVL");
			$chat->RequestInitChat(CALLER_SYSTEM_ID);
		}
		else if($type == "SetChatTicketParam")
		{
			$ticket = new CommercialChatVoucher("",$_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			$ticket->Load();
			$ticket->SetVoucherParams(!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_1"]),!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_2"]),!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_3"]),!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_4"]),!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_5"]),!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_6"]));
		}
		else if(strlen($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_vb" ]) > 0 && strlen($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_va" ]) > 0)
		{
			$chat = new VisitorChat($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_va" ],$_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_vb" ]);
			$chat->ChatId = $_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_vc"];
			$chat->Load();
			
			if($type == "SetCallMeBackStatus")
				$chat->SetCallMeBackStatus($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			else if($type == "JoinChatInvisible")
				$chat->JoinChat(CALLER_SYSTEM_ID,true,!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]));
			else if($type == "JoinChat")
				$chat->JoinChat(CALLER_SYSTEM_ID,false,!empty($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]));
			else if($type == "SetPriority")
				$chat->SetPriority($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			else if($type == "SetTargetOperator")
				$chat->SetTargetOperator($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			else if($type == "SetTargetGroup")
				$chat->SetTargetGroup($_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			else if($type == "AcceptChat")
				$chat->InternalActivate();
			else if($type == "CloseChat")
				$chat->InternalClose(CALLER_SYSTEM_ID);
			else if($type == "TakeChat")
				$chat->TakeChat(CALLER_SYSTEM_ID,$_POST[POST_INTERN_PROCESS_ACCEPTED_CHAT . "_" . $count . "_ve_0"]);
			else if($type == "DeclineChat")
				$chat->InternalDecline(CALLER_SYSTEM_ID);
			else if($type == "LeaveChat")
				$chat->LeaveChat(CALLER_SYSTEM_ID);
		}
		$count++;
	}
}
?>