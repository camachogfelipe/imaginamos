<?php

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* init ajax object
*
*/

//Define XmlHttpRequest
var updateUserRooms = getXmlHttpRequestObject();

/*
* show create room div
*
*/

function newRoom($id)
{
	if(groupRooms == 0)
	{
		showInfoBox("system","220","300","200","",lang6);
		return false;			
	}

	if($id == '1')
	{
		// show create room
		document.getElementById("roomCreate").style.visibility = 'visible';
	}
	else
	{
		// hide create room
		document.getElementById("roomCreate").style.visibility = 'hidden';
	}

}

/*
* add room
*
*/

function addRoom()
{
	// get new room name
	var newRoomName = "|" + document.getElementById("roomName").value.toLowerCase() + "|";
	
   	// check for white space (no url)
    whSpc = new RegExp(/^\s+$/);

	// check if room already exists
	if(whSpc.test(document.getElementById("roomName").value.toLowerCase()) || roomNameStr.indexOf(newRoomName)!= '-1')
	{
		showInfoBox("system","220","300","200","",lang28);

		return false;
	}

	// check for badwords/chars
	var checkRoomName = filterBadword(newRoomName.replace(/\|/g,""));
		checkRoomName = checkRoomName.split("");

	for (i=0; i < checkRoomName.length; i++)
	{
		if(badChars.indexOf("|"+checkRoomName[i]+"|") != '-1')
		{
			// check for badwords
			if(checkRoomName[i] == '*')
			{
				checkRoomName[i] = '****';
			}

			// check for space
			if(checkRoomName[i] == ' ')
			{
				checkRoomName[i] = 'space';
			}

			showInfoBox("system","220","300","200","","Room name contains illegal characters [ "+checkRoomName[i]+" ]");

			return false;
		}
	}

	var param = '?';
	param += '&addRoom=1';
	param += '&newRoomName=' + encodeURIComponent(document.getElementById("roomName").value);
	param += '&newRoomOwner=' + uID;
	param += '&newRoomPass='+ document.getElementById("roomPass").value;

	// if ready to send message to DB
	if (updateUserRooms.readyState == 4 || updateUserRooms.readyState == 0)
	{

		updateUserRooms.open("POST", 'includes/sendData.php', true);
		updateUserRooms.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		updateUserRooms.onreadystatechange = handleSendBlock;
		updateUserRooms.send(param);

		// visual confirm
		showInfoBox("system","220","300","200","",lang29);

	}

	// clr input fields
	document.getElementById("roomName").value = '';
	document.getElementById("roomPass").value = '';

	// hide room creator
	newRoom('0');

}

function handleSendBlock()
{	
	// empty
}