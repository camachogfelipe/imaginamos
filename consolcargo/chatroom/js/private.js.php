<?php

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* create private chat div
*
*/

var privateChat = 0;

function createPChatDiv(divPName,divToName,dPID,duID)
{
	if(privateChat == 1)
	{
		showInfoBox("system","220","300","200","",lang30);
		return false;
	}

	// to user
	if(divToName!=userName)
	{
		var uUser = divToName;
	}
	else
	{
		var uUser = divPName;
	}

	// window title
	var pTitle = uUser;

	// div name
	divPName = duID+"_"+dPID;
	
	// prevent duplicate private chat windows 
	if(document.getElementById(dPID+"_"+duID))
	{
		document.getElementById(dPID+"_"+duID).style.visibility = 'visible';
		document.getElementById("pcontent_"+dPID+"_"+duID).style.visibility = 'visible';
		document.getElementById("pmenuBar_"+dPID+"_"+duID).style.visibility = 'visible';
		document.getElementById("psendbox_"+dPID+"_"+duID).style.visibility = 'visible';
		document.getElementById("pmenuWin_"+dPID+"_"+duID).style.visibility = 'visible';	
		
		return false;
	}	

	// if div exists
	if(!document.getElementById(divPName))
	{
		// create div
		var ni = document.getElementById("pWin");

		var newdiv = document.createElement('div');
		newdiv.setAttribute("id",divPName);
		newdiv.className = "pChatWin";

		// title
		newdiv.innerHTML = "<div id='ptitle_"+divPName+"' class='ptitle' style='cursor:move;' onclick=doFocus(\""+divPName+"\")> <span style='float:left;'>&nbsp;<img style='vertical-align:middle;' src='avatars/online.gif'>&nbsp;"+decodeURI(pTitle)+"</span> <span style='float:right;'><span style='cursor:pointer;' onclick='minPwin(\""+divPName+"\",\""+divPName+"\")'><img src='images/min.gif'></span>&nbsp;<span style='cursor:pointer;' onclick='closePWin(\""+divPName+"\");eCreditsRequest(\""+divPName+"\",\"off\");privateChatCount();'><img src='images/close.gif'></span>&nbsp;</div>";

		// content
		newdiv.innerHTML += "<div id='pcontent_"+divPName+"' class='pcontent'></div>";

		// menu
		newdiv.innerHTML += "<div id='pmenuBar_"+divPName+"' class='pmenuBar'></div>";

		// sendbox
		newdiv.innerHTML += '<div id=\'psendbox_'+divPName+'\' class=\'psendbox\'><input type=\'text\' id=\'poptionsBar_'+divPName+'\' class="poptionsBar" onKeyPress="return submitenter(this,event,\'poptionsBar_'+divPName+'\',\'pcontent_'+divPName+'\',\''+uUser+'\');" onfocus="changeMessBoxStyle(\'poptionsBar_'+divPName+'\');"></textarea><input id="poptionsSend" class="poptionsSend" type="button" value="'+lang31+'" onclick="sendPMessage(\''+uUser+'\',\'poptionsBar_'+divPName+'\',\'pcontent_'+divPName+'\')"></div>';

		// menu win
		newdiv.innerHTML += "<div id='pmenuWin_"+divPName+"'></div>";

		ni.appendChild(newdiv);

		// add menu
		optionsMenu('pmenuBar_'+divPName, 'poptionsBar_'+divPName, 'pcontent_'+divPName, 'pmenuWin_'+divPName);

		// focus window
		doFocus(divPName);
		
		// drag window
		$( "#"+divPName ).draggable();
	}

	// if eCredits is enabled
	if(eCredits == 1 && Number(duID) == Number(uID))
	{
		eCreditsRequest(divPName,'on');
		privateChat = 1;
	}
}

/*
* reset private window count
*
*/

function privateChatCount()
{
	privateChat = 0;
}

/*
* send private message
*
*/

function sendPMessage(uUser,divPName1,divPName2)
{
	// send message
	isPrivate = uUser;
	addMessage(divPName1,divPName2);
}

/*
* minimise private div
*
*/

function minPwin(divID,uID)
{
	toggleHeader(divID, uID);
}

/*
* close private div
*
*/

function closePWin(divID)
{
	document.getElementById(divID).style.visibility = 'hidden';
	document.getElementById('pcontent_'+divID).style.visibility = 'hidden';
	document.getElementById('pmenuBar_'+divID).style.visibility = 'hidden';
	document.getElementById('psendbox_'+divID).style.visibility = 'hidden';
	document.getElementById('pmenuWin_'+divID).style.visibility = 'hidden';
}

/*
* private chat is initiated
* eCredits function
*/

function eCreditsRequest(uuID,status)
{
	uuID = uuID.replace(uID,'');
	uuID = uuID.replace("_",'');

	var param = '?';
	param += '&eCreditID=' + escape(uuID);
	param += '&eCreditStatus=' + escape(status);	

	// if ready to send message to DB
	if (sendReq.readyState == 4 || sendReq.readyState == 0) 
	{
		sendReq.open("POST", 'includes/sendData.php?rnd='+ Math.random(), true);
		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendReq.onreadystatechange = handleSendChat;
		sendReq.send(param);
	}

}