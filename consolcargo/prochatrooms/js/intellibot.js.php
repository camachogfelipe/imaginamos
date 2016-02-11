<?php

/*
* include files
*
*/

include("../includes/config.php");

/*
* declare content header
*
*/

header("content-type: application/x-javascript");

?>

/*
* intellibot engine
* version 3.0.0
* (c)Pro Chat Rooms
*/

var intelliBot = <?php echo $CONFIG['intelliBot'];?>;
var intelliBotName = '<?php echo $CONFIG['intelliBotName'];?>';
var intelliBotAvi = '<?php echo $CONFIG['intelliBotAvi'];?>';
var intellibotRoomID = '<?php echo $CONFIG['intellibotRoomID'];?>';

var iWarning = 0;

function doIntellibot(ursMessage, itoUserName)
{
	var iResponse = '';

	ursMessage = ursMessage.toLowerCase();

	// welcome messages

	var i = 0;

	for(i=0;i<uEntryResponse.length;i++)
	{
		if(ursMessage.search(uEntryResponse[i]) != '-1')
		{
			iResponse = iEntryResponse[Math.floor(Math.random()*iEntryResponse.length)];
		}
	}

	// exit messages

	var i = 0;

	for(i=0;i<uExitResponse.length;i++)
	{
		if(ursMessage.search(uExitResponse[i]) != '-1')
		{
			iResponse = iExitResponse[Math.floor(Math.random()*iExitResponse.length)];
		}

	}

	// help messages

	var i = 0;

	for(i=0;i<uHelpResponse.length;i++)
	{
		if(ursMessage.search(uHelpResponse[i]) != '-1')
		{
			iResponse = iHelpResponse[Math.floor(Math.random()*iHelpResponse.length)];
		}

	}

	// warning messages

	if (ursMessage.indexOf("****") != -1)
	{
		iResponse = lang5;

		iWarning += 1;
	}

	// intellibot response

	if(iResponse)
	{
		var toName = '';

		var iMessage = intelliBotAvi+"|"+stextColor+"|"+stextSize+"|"+stextFamily+"|"+iResponse;

		if(iWarning == 2)
		{
			createMessageDiv('0', '-1', 'chatContainer', showMessages+1, 'SILENCE', 'beep_high.mp3', intelliBotName, itoUserName, '');
		}

		if(iWarning >= 3)
		{
			createMessageDiv('0', '-1', 'chatContainer', showMessages+1, 'KICK', 'beep_high.mp3', intelliBotName, itoUserName, '');
		}

		sendIntellibotMessage('chatContainer','',iMessage);
	}

}

/*
* send intellibot message
*
*/

// define XmlHttpRequest
var sendBotReq = getXmlHttpRequestObject();

function sendIntellibotMessage(div,itoUserName,iMessage)
{
	var param = '?';

	param += '&uid=-1';
	param += '&umid='+div;
	param += '&uroom=' + roomID;
	param += '&toname=' + encodeURI(itoUserName);
	param += '&umessage=' + encodeURIComponent(iMessage);
	param += '&usfx=' + escape('beep_high.mp3');	

	// if ready to send message to DB
	if (sendBotReq.readyState == 4 || sendBotReq.readyState == 0) 
	{
		sendBotReq.open("POST", 'includes/sendData.php?rnd='+ Math.random(), true);
		sendBotReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendBotReq.onreadystatechange = handleSendChat;
		sendBotReq.send(param);
	}

}