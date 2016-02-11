<?php

/*
* include files
*
*/

include(dirname(dirname(__FILE__))."/includes/session.php");
include(dirname(dirname(__FILE__))."/includes/config.php");

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* init all
*
*/

function initAll()
{
	resizeDivs();
	displayAdverts();
	getCookie();
	editSettings();

	switchSettingsStatus(userRPM,"allowPM");
	switchSettingsStatus(userRWebcam,"viewMyCamID");
	switchSettingsStatus(userEntryExitSFX,"entryExitID");
	switchSettingsStatus(userNewMessageSFX,"soundsID");
	switchSettingsStatus(userSFX,"sfxID");

	optionsMenu('optionsIcons','optionsBar','chatContainer','menuWin');

	if(publicWelcome == "")
	{
		publicWelcome = lang1;
	}

	var entryWelcome = "../images/notice.gif|"+stextColor+"|"+stextSize+"|"+stextFamily+"|"+publicWelcome+"|1";
	var entryNotice = "1|"+stextColor+"|"+stextSize+"|"+stextFamily+"|** "+userName+" "+publicEntry;
	var entryMessages = "../images/notice.gif|"+stextColor+"|"+stextSize+"|"+stextFamily+"|Displaying last messages ...|1";

	createMessageDiv('1',uID,displayMDiv,1,entryWelcome,'doorbell.mp3','','');

	if(invisibleOn == 1 && (admin == 1 && hide == 1))
	{
		// empty
	}
	else
	{
		if(dispLastMess > 1)
		{
			createMessageDiv('0',uID,displayMDiv,2,entryMessages,'beep_high.mp3','','');
		}

		roomlogout();
		roomlogin();
	}

	getMessages();
	showRoomHeaders();
}

/*
* Array indexOf method (for unsupported browsers)
* https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Global_Objects/Array/indexOf
*/
	
if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function (searchElement /*, fromIndex */ ) {
		"use strict";
		if (this == null) {
			throw new TypeError();
		}
		var t = Object(this);
		var len = t.length >>> 0;
		if (len === 0) {
			return -1;
		}
		var n = 0;
		if (arguments.length > 1) {
			n = Number(arguments[1]);
			if (n != n) { // shortcut for verifying if it's NaN
				n = 0;
			} else if (n != 0 && n != Infinity && n != -Infinity) {
				n = (n > 0 || -1) * Math.floor(Math.abs(n));
			}
		}
		if (n >= len) {
			return -1;
		}
		var k = n >= 0 ? n : Math.max(len - Math.abs(n), 0);
		for (; k < len; k++) {
			if (k in t && t[k] === searchElement) {
				return k;
			}
		}
		return -1;
	}
}

/*
* show room headers 
*
*/

function showRoomHeaders()
{
	var i = 1;

	for (i=1;i<=totalRooms;i++)
	{
		if(roomID != i)
		{
			if(document.getElementById("room_"+i))
			{
				toggleHeader('room_'+i);
			}
		}

	}

}

/*
* login message
*
*/

function roomlogin()
{
	roomID = currRoom;

	message = "1|"+stextColor+"|"+stextSize+"|"+stextFamily+"|** "+userName+" "+publicEntry;

	// send login message
	var login = setTimeout('sendData(displayMDiv);',1000);
}

/*
* logout message
*
*/

function roomlogout()
{
	// remove user from current room
	removeUsersDiv(uID,roomID);

	// insert logout message in prev room
	if(currRoom != prevRoom)
	{
		roomID = prevRoom;

		message = "1|"+stextColor+"|"+stextSize+"|"+stextFamily+"|** "+userName+" "+publicExit;

		// send logout message
		sendData(displayMDiv);
	}
}

/*
* focus windows 
*
*/

var zIndex = 100;

function doFocus(divID)
{
	// if div exists
	if(document.getElementById(divID))
	{
		// assign div zIndex
		document.getElementById(divID).style.zIndex = zIndex;

		if(zIndex >= 31000)
		{
			zIndex = 30000;
		}
		else
		{
			zIndex += 1;
		}

	}
}

/*
* toggle headers 
*
*/

function toggleHeader(headerID,subID)
{
	if(document.getElementById(headerID).style.height != '24px')
	{
		document.getElementById(headerID).style.height = '24px';
		document.getElementById(headerID).style.overflow = 'hidden';

		if(subID) // pChatWin
		{
			document.getElementById(headerID).style.width = "180px";
			document.getElementById("pcontent_"+subID).style.visibility = 'hidden';
			document.getElementById("psendbox_"+subID).style.visibility = 'hidden';
		}
	}
	else
	{
		document.getElementById(headerID).style.height = "auto";
		
		if(subID)
		{
			document.getElementById(headerID).style.height = "300px";
			document.getElementById(headerID).style.width = "400px";

			document.getElementById("ptitle_"+subID).style.backgroundColor = newPM;
			document.getElementById("pcontent_"+subID).style.visibility = 'visible';
			document.getElementById("psendbox_"+subID).style.visibility = 'visible';
		}
	}
}

/*
* display adverts container 
*
*/

function displayAdverts()
{
	if(advertsOn == 0 && document.getElementById("advertContainer"))
	{
		document.getElementById("advertContainer").style.visibility = 'hidden';
	}
}

/*
* change rooms 
*
*/

function changeRooms(roomID)
{
	window.location = '?roomID='+roomID;
}

/*
* toggle divs 
*
*/

var topLevel = 100;
function toggleBox(szDivID)
{
	if(document.layers)	   //NN4+
	{
		if(document.layers[szDivID].visibility == "visible")
		{
			document.layers[szDivID].visibility = "hidden";
		}
		else
		{
			document.layers[szDivID].zIndex = topLevel++;
			document.layers[szDivID].visibility = "visible"; 
		}

	}
	else if(document.getElementById)	  //gecko(NN6) + IE 5+
	{
		var obj = document.getElementById(szDivID);

		if(obj.style.visibility == "visible")
		{
			obj.style.visibility = "hidden";
		}
		else
		{
			obj.style.zIndex = topLevel++;
			obj.style.visibility = "visible";
		}

	}
	else if(document.all)	// IE 4
	{
			
		if(document.all[szDivID].style.visibility == "visible")
		{
			document.all[szDivID].style.visibility = "hidden";
		}
		else
		{
			document.all[szDivID].style.zIndex = topLevel++;
			document.all[szDivID].style.visibility = "visible"; 
		}
	}

	if(topLevel > 32000)
	{
		topLevel = 10;
	}
}

/*
* init avatar menu
*
*/

function doAvatars(inputMDiv, displayMDiv, nWin)
{
	createMdiv('avatarsWin',nWin);

	if(displayMDiv != 'chatContainer')
	{
		document.getElementById('avatarsWin').style.bottom = '66px';
	}

	createMenu(inputMDiv,displayMDiv,'avatarsWin',totalAvatars,loopAvatars);
	toggleBox('avatarsWin');
}

/*
* init sfx menu
*
*/

function doSFX(inputMDiv,displayMDiv, nWin)
{
	createMdiv('sFXWin',nWin);

	if(displayMDiv != 'chatContainer')
	{
		document.getElementById('sFXWin').style.bottom = '66px';
	}

	createMenu(inputMDiv,displayMDiv,'sFXWin',totalSFX,'1');
	toggleBox('sFXWin');
}

/*
* init smilie menu
*
*/

function doSmilies(inputMDiv, displayMDiv, nWin)
{
	createMdiv('smiliesWin',nWin);

	if(displayMDiv != 'chatContainer')
	{
		document.getElementById('smiliesWin').style.bottom = '66px';
	}

	createMenu(inputMDiv,displayMDiv,'smiliesWin',totalSmilies,loopSmilies);
	toggleBox('smiliesWin');	
}

/*
* init style window
*
*/

function doStyles(inputMDiv, displayMDiv, nWin)
{
	createMdiv('colorsWin',nWin);
	createMenu(inputMDiv,displayMDiv,'colorsWin',totalColors,loopColors);
	toggleBox('colorsWin');

	createMdiv('fontfamilyWin',nWin);
	createMenu(inputMDiv,displayMDiv,'fontfamilyWin',totalFontFamily,loopFontFamily);
	toggleBox('fontfamilyWin');

	createMdiv('fontsizeWin',nWin);
	createMenu(inputMDiv,displayMDiv,'fontsizeWin',totalFontSize,loopFontSize);
	toggleBox('fontsizeWin');

	if(displayMDiv != 'chatContainer')
	{
		document.getElementById('colorsWin').style.bottom = '66px';
		document.getElementById('fontfamilyWin').style.bottom = '66px';
		document.getElementById('fontsizeWin').style.bottom = '66px';
	}
}

/*
* options menu
* to hide icons in private windows,
* if(ndiv.search("pmenuBar_")){}
*/

function optionsMenu(ndiv,nBar,nContainer,nWin)
{
	document.getElementById(ndiv).innerHTML  = '<span alt="'+lang52+'" title="'+lang52+'" id="smilies" class="iconSmilies" onmouseover="this.className=\'iconSmiliesOver\'" onmouseout="this.className=\'iconSmilies\'" onclick="doSmilies(\''+nBar+'\',\''+nContainer+'\',\''+nWin+'\');"></span>';
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang53+'" title="'+lang53+'" id="ringbell" class="iconRingbell" onmouseover="this.className=\'iconRingbellOver\'" onmouseout="this.className=\'iconRingbell\'" onclick="ringBell(\''+nBar+'\',\''+nContainer+'\')"></span>';
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang54+'" title="'+lang54+'" id="style" class="iconStyle" onmouseover="this.className=\'iconStyleOver\'" onmouseout="this.className=\'iconStyle\'" onclick="doStyles(\''+nBar+'\',\''+nContainer+'\',\''+nWin+'\');"></span>';
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang55+'" title="'+lang55+'" id="avatar" class="iconAvatar" onmouseover="this.className=\'iconAvatarOver\'" onmouseout="this.className=\'iconAvatar\'" onclick="doAvatars(\''+nBar+'\',\''+nContainer+'\',\''+nWin+'\')"></span>';

	if(mySFX[0])
	{
		document.getElementById(ndiv).innerHTML += '<span alt="'+lang56+'" title="'+lang56+'" id="sounds" class="iconSounds" onmouseover="this.className=\'iconSoundsOver\'" onmouseout="this.className=\'iconSounds\'" onclick="doSFX(\''+nBar+'\',\''+nContainer+'\',\''+nWin+'\')"></span>';
	}

	if(ndiv.search("pmenuBar_"))
	{
		document.getElementById(ndiv).innerHTML += '<span alt="'+lang57+'" title="'+lang57+'" id="rubber" class="iconRubber" onmouseover="this.className=\'iconRubberOver\'" onmouseout="this.className=\'iconRubber\'" onclick=\'clrScreen();\'></span>';
		document.getElementById(ndiv).innerHTML += '<span alt="'+lang58+'" title="'+lang58+'" id="edit" class="iconEdit" onmouseover="this.className=\'iconEditOver\'" onmouseout="this.className=\'iconEdit\'" onclick=\'editSettings();\'></span>';

	}

	document.getElementById(ndiv).innerHTML += '<span alt="'+lang59+'" title="'+lang59+'" id="transcripts" class="iconTranscripts" onmouseover="this.className=\'iconTranscriptsOver\'" onmouseout="this.className=\'iconTranscripts\'" onclick=\'showInfoBox("viewTranscripts","400","600","100","index.php?transcripts=1&roomID="+roomID,"");\'></span>';
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang60+'" title="'+lang60+'" id="help" class="iconHelp" onmouseover="this.className=\'iconHelpOver\'" onmouseout="this.className=\'iconHelp\'" onclick=\'newWin("help/index.php")\'></span>';

	<?php if(file_exists("../plugins/share/index.php")){ ?>
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang62+'" title="'+lang62+'" id="share" class="iconShare" onmouseover="this.className=\'iconShareOver\'" onmouseout="this.className=\'iconShare\'" onclick=\'showInfoBox("shareFiles","280","300","260","plugins/share/","");\'></span>';
	<?php }?>
	
	<?php if(file_exists("../plugins/games/index.php")){ ?>
	document.getElementById(ndiv).innerHTML += '<span alt="'+lang61+'" title="'+lang61+'" id="playGames" class="iconGames" onmouseover="this.className=\'iconGamesOver\'" onmouseout="this.className=\'iconGames\'" onclick=\'showInfoBox("games","370","418","260","plugins/games/","");\'></span>';	
	<?php }?>
	
	/* do not edit */
	if(showCopyright)
	{
		document.getElementById(ndiv).innerHTML += '<span alt="'+lang63+'" title="'+lang63+'" id="copyright" class="iconCopyright" onmouseover="this.className=\'iconCopyrightOver\'" onmouseout="this.className=\'iconCopyright\'" onclick=\'showInfoBox("copyRight","220","300","200","",copyRight());\'></span>';
	}
}

/*
* create edit div
*
*/
function editSettings()
{
	// if div does not exist
	if(!document.getElementById("editDiv"))
	{
		// create div
		var ni = document.getElementById('settingsWin');
		var newdiv = document.createElement('editDiv');

		newdiv.setAttribute("id","editDiv");
		newdiv.className = "editWin";
		newdiv.innerHTML  = '<div style="text-align:right;" class="roomheader" onclick="toggleBox(\'editDiv\')"><img src="images/close.gif"></div>';		
		newdiv.innerHTML += '<div>&nbsp;</div>';
		newdiv.innerHTML += '<div><input type="checkbox" id="allowPM" onclick="updateUserSettings()"> '+lang46+'&nbsp;</div>';
		newdiv.innerHTML += '<div><input type="checkbox" id="viewMyCamID" onclick="updateUserSettings()"> '+lang47+'&nbsp;</div>';
		newdiv.innerHTML += '<div><input type="checkbox" id="entryExitID" onclick="updateUserSettings()"> '+lang48+'&nbsp;</div>';
		newdiv.innerHTML += '<div><input type="checkbox" id="soundsID" onclick="updateUserSettings()"> '+lang49+'&nbsp;</div>';
		newdiv.innerHTML += '<div><input type="checkbox" id="sfxID" onclick="updateUserSettings()"> '+lang50+'&nbsp;</div>';
		newdiv.innerHTML += '<div>&nbsp;</div>';
		newdiv.innerHTML += '<div>&nbsp;</div>';
		newdiv.innerHTML += '<div>&nbsp;'+lang51+': <select id="selectStatusID" onchange="sendStatus(this.value);"></select></div>';
		newdiv.innerHTML += '<div>&nbsp;</div>';

		ni.appendChild(newdiv);
	}
	else
	{
		document.getElementById("editDiv").style.visibility = 'visible';
	}

	createStatusSelectOptions();
}

/*
* update user settings
*
*/

function updateUserSettings()
{
	userRPM = document.getElementById('allowPM').checked;
	userRWebcam = document.getElementById('viewMyCamID').checked;
	userEntryExitSFX = document.getElementById('entryExitID').checked;
	userNewMessageSFX = document.getElementById('soundsID').checked;
	userSFX = document.getElementById('sfxID').checked;

	createCookie('myOptions',encodeURI(userRPM+"|"+userRWebcam+"|"+userEntryExitSFX+"|"+userNewMessageSFX+"|"+userSFX),30);
}

/*
* switch settings status
*
*/

function switchSettingsStatus(value,div)
{
	if(value == 'false' || value == false)
	{
		var newStatus = false;
	}
	else
	{
		var newStatus = true;
	}

	document.getElementById(div).checked = newStatus;
}

/*
* create menu div
*
*/

function createMdiv(ndiv,nWin)
{
	if(document.getElementById(ndiv))
	{
		var el = document.getElementById(ndiv);
		el.parentNode.removeChild(el);
	}

	if(!document.getElementById(ndiv))
	{
		document.getElementById(nWin).innerHTML  += '<div id="'+ndiv+'" class="'+ndiv+'"></div>';
	}
}

/*
* close menu div
*
*/

function closeMdiv(ndiv)
{
	if(document.getElementById(ndiv))
	{
		var el = document.getElementById(ndiv);
		el.parentNode.removeChild(el);
	}
}

/*
* create menu - (using all js array values)
* 
*/

var nClass = '';

function createMenu(inputMDiv,displayMDiv,ndiv,ntotal,nloop)
{
	var i=0;
	var iLoop = 1;

	document.getElementById(ndiv).innerHTML = '';

	document.getElementById(ndiv).innerHTML = '<div style="text-align:right;" class="roomheader" onclick=closeMdiv("'+ndiv+'")><img src="images/close.gif"></div>';

	if(ndiv == 'avatarsWin')
	{
		// create custom avatar upload div
		document.getElementById(ndiv).style.width = "320px";		
		
		var ni = document.getElementById(ndiv);
		var newdiv = document.createElement('iframe');
			newdiv.setAttribute("id","myAvatarUpload");
			newdiv.src = "avatars/upload.php";
			newdiv.height="140";
			newdiv.width="310";
			newdiv.frameBorder="0";
			
		ni.appendChild(newdiv);		
		
		document.getElementById(ndiv).innerHTML += "<br/>";
		document.getElementById(ndiv).innerHTML += "OR, choose a default avatar below,";		
		document.getElementById(ndiv).innerHTML += "<br/><br/>";
	}
	
	for (i = 0; i <= ntotal; i++)
	{
		if(ndiv == 'smiliesWin' && mySmilies[i])
		{
			document.getElementById(ndiv).innerHTML += '<span onclick=addsmiley("'+inputMDiv+'","'+mySmilies[i]+'");toggleBox("'+ndiv+'"); title="'+mySmilies[i]+'" alt="'+mySmilies[i]+'"/>'+mySmiliesImg[i]+'</span>';
		}

		if(ndiv == 'avatarsWin')
		{
			var showAvatar = 1;
		
			if(myAvatars[i] == 'pc.gif')
			{
				var showAvatar = 0;
			}
			
			if(myAvatars[i] == 'phone.gif')
			{
				var showAvatar = 0;
			}
			
			if(myAvatars[i] == '')
			{
				var showAvatar = 0;
			}			
			
			if(showAvatar)
			{
				document.getElementById(ndiv).innerHTML += '<span style="padding: 2px 2px 2px 2px;" onclick="addAvatar(\''+inputMDiv+'\',\''+myAvatars[i]+'\');updateAvatar(\''+uID+'\', \''+myAvatars[i]+'\');sendAvatarData();" /><img src="avatars/'+myAvatars[i]+'"></span>';
			}
		}

		if(ndiv == 'fontfamilyWin')
		{
			nClass = 'highliteOff';

			if(myFontFamily[i] == textFamily)
			{
				nClass = 'highliteOn';
			}

			document.getElementById(ndiv).innerHTML += '<div class="'+nClass+'" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'" style="font-family:'+myFontFamily[i]+'" alt="'+myFontFamily[i]+'" title="'+myFontFamily[i]+'" onclick="addFontFamily(\''+myFontFamily[i]+'\');changeMessBoxStyle(\''+inputMDiv+'\');" />'+myFontFamily[i]+'</div>';

			nClass = '';
		}

		if(ndiv == 'fontsizeWin')
		{
			nClass = 'highliteOff';

			if(myFontSize[i].toLowerCase() == textSize.toLowerCase())
			{
				nClass = 'highliteOn';
			}

			if(mBold == 1)
			{
				document.getElementById(ndiv).style.fontWeight="900";	
			}

			if(mUnderline == 1)
			{
				document.getElementById(ndiv).style.textDecoration="underline";	
			}

			if(mItalic == 1)
			{
				document.getElementById(ndiv).style.fontStyle="italic";	
			}

			document.getElementById(ndiv).style.color = textColor;

			document.getElementById(ndiv).innerHTML += '<div class="'+nClass+'" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'" style="font-size:'+myFontSize[i]+';" alt="'+myFontSize[i]+'" title="'+myFontSize[i]+'" onclick="addFontSize(\''+myFontSize[i]+'\');changeMessBoxStyle(\''+inputMDiv+'\');" />'+lang2+'</div>';

			nClass = '';
		}

		if(ndiv == 'colorsWin')
		{
			document.getElementById(ndiv).innerHTML += '<span style="padding: 2px 2px 2px 2px;background-color:'+myColor[i]+'" alt="'+myColor[i]+'" title="'+myColor[i]+'" onclick="addColor(\''+myColor[i]+'\');changeMessBoxStyle(\''+inputMDiv+'\');" />&nbsp;</span>';
		}

		if(ndiv == 'sFXWin')
		{
			document.getElementById(ndiv).innerHTML += '<div class="highliteOff" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'"><img src="sounds/sfx/speaker.gif" onclick="doSound(\'sfx/'+mySFX[i]+'\');" alt="'+lang3+'" title="'+lang3+'">&nbsp;<span style="padding: 2px 2px 2px 2px;" onclick="addSFX(\''+inputMDiv+'\',\''+displayMDiv+'\',\''+mySFX[i].replace(/.mp3/i,"")+'\');"/>'+mySFX[i].replace(/.mp3/i,"")+'</span></div>';
		}

		if(iLoop >= nloop)
		{
			if(ndiv != 'fontfamilyWin' && ndiv != 'fontsizeWin' && ndiv != 'sFXWin')
			{
				document.getElementById(ndiv).innerHTML += '<br />';
			}

			iLoop = 0;

		}

		iLoop += 1;
	}

	if(ndiv == 'fontfamilyWin')
	{
		var isBoldChecked = '';
		var isUnderlineChecked = '';
		var isItalicChecked = '';

		if(mBold == 1)
		{
			isBoldChecked = 'checked';
		}

		document.getElementById(ndiv).innerHTML += '<span class="highliteOff" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'" /><input type="checkbox" id="bold" onclick="addFontBold();changeMessBoxStyle(\''+inputMDiv+'\');" '+isBoldChecked+'><b>B</b></span>';

		if(mUnderline == 1)
		{
			isUnderlineChecked = 'checked';	
		}

		document.getElementById(ndiv).innerHTML += '<span class="highliteOff" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'" /><input type="checkbox" id="underline" onclick="addFontUnderline();changeMessBoxStyle(\''+inputMDiv+'\');" '+isUnderlineChecked+'><u>U</u></span>';

		if(mItalic == 1)
		{
			isItalicChecked = 'checked';	
		}

		document.getElementById(ndiv).innerHTML += '<span class="highliteOff" onmouseover="this.className=\'highliteOn\'" onmouseout="this.className=\'highliteOff\'" /><input type="checkbox" id="italic" onclick="addFontItalic();changeMessBoxStyle(\''+inputMDiv+'\');" '+isItalicChecked+'><i>I</i></span>';
	}

}

/*
* update message box text style
*
*/

function changeMessBoxStyle(div)
{
	document.getElementById(div).style.color = textColor;
	document.getElementById(div).style.fontFamily = textFamily;
	document.getElementById(div).style.fontSize = textSize;

	document.getElementById(div).style.fontWeight= "normal";
		document.getElementById(div).style.fontStyle= "normal";
	document.getElementById(div).style.textDecoration = "none";

	if(mBold == 1)
	{
		document.getElementById(div).style.fontWeight= "bold";
	}

	if(mItalic == 1)
	{
		document.getElementById(div).style.fontStyle= "italic";
	}

	if(mUnderline == 1)
	{
		document.getElementById(div).style.textDecoration = "underline";
	}


}

/*
* add smilie to message 
*
*/

function addSmilie(nSmilie)
{
	for (i = 0; i <= totalSmilies; i++)
	{
		nSmilie = nSmilie.split(mySmilies[i]).join(mySmiliesImg[i]);
	}

	return nSmilie;
}

/*
* add smilie to messagebar 
*
*/

function addsmiley(inputMDiv,code)
{
	var pretext = document.getElementById(inputMDiv).value;
	this.code = code;
	document.getElementById(inputMDiv).focus();
	document.getElementById(inputMDiv).value = pretext + code;
}

/*
* update users avatar 
*
*/

function addAvatar(inputMDiv,nAvatar)
{
	// update avatar
	userAvatar = nAvatar;

	// close avatar window
	toggleBox("avatarsWin");

	// focus message input
	document.getElementById(inputMDiv).focus();
}

/*
* play SFX 
*
*/

function addSFX(inputMDiv,displayMDiv,sfx)
{
	// clear message input
	document.getElementById(inputMDiv).value = '';

	// add SFX to message input
	document.getElementById(inputMDiv).value = '/play '+sfx;

	// send message
	addMessage(inputMDiv,displayMDiv);

	// close SFX window
	toggleBox('sFXWin');
		
}

/*
* update selected Font Color
*
*/

function addColor(nColor)
{
	// update avatar
	textColor = nColor;

	// update text sample window
	document.getElementById("fontsizeWin").style.color=nColor;
}

/*
* update selected Font Family
*
*/

function addFontFamily(nFont)
{
	// update font family
	textFamily = nFont;

	// update text sample window
	document.getElementById("fontsizeWin").style.fontFamily=nFont;
}

/*
* update selected Font Size
*
*/

function addFontSize(nSize)
{
	// update font size
	textSize = nSize;
}
 
/*
* update Bold for user text 
*
*/

function addFontBold()
{
	if(mBold == 0)
	{
		mBold = 1;

		// update text sample window
		document.getElementById("fontsizeWin").style.fontWeight="900";
	}
	else
	{
		mBold = 0;

		// update text sample window
		document.getElementById("fontsizeWin").style.fontWeight="normal";
	}

}

/*
* update Underline for user text 
*
*/

function addFontUnderline()
{
	if(mUnderline == 0)
	{
		mUnderline = 1;

		// update text sample window
		document.getElementById("fontsizeWin").style.textDecoration="underline";
	}
	else
	{
		mUnderline = 0;

		// update text sample window
		document.getElementById("fontsizeWin").style.textDecoration="none";
	}

}

/*
* update Italic for user text 
*
*/

function addFontItalic()
{
	if(mItalic == 0)
	{
		mItalic = 1;

		// update text sample window
		document.getElementById("fontsizeWin").style.fontStyle="italic";
	}
	else
	{
		mItalic = 0;

		// update text sample window
		document.getElementById("fontsizeWin").style.fontStyle="normal";
	}

}

/*
* flood control
*
*/

var lastPost = 1;

function floodControl()
{
	lastPost++;	
}

setInterval('floodControl();','1000');

/*
* logout user
*
*/

function logout(id)
{
	<?php 
	$room = '';
	
	if(isset($_SESSION['room']) && $CONFIG['singleRoom'])
	{
		$room = "roomID=".$_SESSION['room']."&";
	}
	?>
	
	window.location.replace("index.php?<?php echo $room;?>logout");
}

/*
* create status select list
*
*/

function createStatusSelectOptions()
{
	var sel = document.getElementById('selectStatusID');

	var i = 0;

	for (i = 0; i < userStatusMes.length; i++)
	{
		if(!document.getElementById("selectStatusID_"+i))
		{
			var opt = document.createElement("option");
			opt.setAttribute("id","selectStatusID_"+i);
			opt.value = i;
			opt.text = decodeURI(userStatusMes[i]);

			if(opt.value == '1')
			{
				opt.setAttribute('selected','selected');	
			}

  			try 
			{
				// standards compliant; doesn't work in IE
    			sel.add(opt, null); 
  			}
  			catch(ex)
			{
				// IE only
    			sel.add(opt);
  			}

		}

	}

}

/*
* update status
*
*/

function sendStatus(status)
{
	var param = '?';
	param += '&status=' + encodeURI(status);	

	// if ready to send message to DB
	if (sendReq.readyState == 4 || sendReq.readyState == 0) 
	{
		sendReq.open("POST", 'includes/sendData.php?rnd='+ Math.random(), true);
		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendReq.onreadystatechange = handleSendChat;
		sendReq.send(param);
	}

}

/*
* send avatar to database
*
*/

function sendAvatarData()
{
	var param = '?';
	param += '&uavatar=' + encodeURI(userAvatar);	

	// if ready to send message to DB
	if (sendReq.readyState == 4 || sendReq.readyState == 0) 
	{
		sendReq.open("POST", 'includes/sendData.php?rnd='+ Math.random(), true);
		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendReq.onreadystatechange = handleSendChat;
		sendReq.send(param);
	}

}

/*
* block/unblock user
*
*/

function blockUsers(i,id)
{
	if(i=='block')
	{
		blockedList = blockedList + "|"+id+"|";
	}

	if(i=='unblock')
	{
		blockedList = blockedList.replace("|"+id+"|","");
	}

	var param = '?';
	param += '&myBlockList=' + encodeURI(blockedList);	

	// if ready to send message to DB
	if (sendReq.readyState == 4 || sendReq.readyState == 0) 
	{
		sendReq.open("POST", 'includes/sendData.php?rnd='+ Math.random(), true);
		sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		sendReq.onreadystatechange = handleSendChat;
		sendReq.send(param);
	}
}

/*
* show/hide password field
* used on login page
*/

var y = 1;
function toggleLoginPass()
{
	if(y)
	{
		var state = 'hidden';
		y = 0;	
	}
	else
	{
		var state = 'visible';
		y = 1;	
	}

	document.getElementById("pass").style.visibility = state;
	document.getElementById("lostpass").style.visibility = state;
}

/*
* open new window
*
*/

function newWin(url)
{
	window.open(url,'','');
}

/*
* clear screen
*
*/

function clrScreen()
{
	document.getElementById("chatContainer").innerHTML = '';
}

/*
* show info box
* showInfoBox("div name","height","width","top","url to file","text to display")
* example: showInfoBox("lost","200","300","200","templates/default/lost.php","");
* example: showInfoBox("system","200","300","200","","some text goes here");
*/

function showInfoBox(info,height,width,top,url,txt)
{
	// delete div if exists
	if(document.getElementById('oInfo'))
	{
		closeMdiv(info);
	}

	// create div
	var ni = document.getElementById('oInfo');

	if(url)
	{
		var newdiv = document.createElement('iframe');
		newdiv.frameBorder="0";
		newdiv.src = url;
	}
	
	if(info == 'games')
	{
		var newdiv = document.createElement('div');
		newdiv.innerHTML  = "<div class=\"userInfoTitle\" style=\"cursor:move;\"><b>"+lang61+"</b><span style='float:right;cursor:pointer;'><img src='images/close.gif' onclick='closeMdiv(\""+info+"\");'></span></div>";
		newdiv.innerHTML += "<div><iframe style='border:0;' src='"+url+"' width='"+(width)+"' height='"+(height-40)+"'></div>";	
	}
	
	if(info == 'shareFiles')
	{
		var newdiv = document.createElement('div');
		newdiv.innerHTML  = "<div class=\"userInfoTitle\" style=\"cursor:move;\"><b>"+lang62+"</b><span style='float:right;cursor:pointer;'><img src='images/close.gif' onclick='closeMdiv(\""+info+"\");'></span></div>";
		newdiv.innerHTML += "<div><iframe style='border:0;' src='"+url+"' width='"+(width)+"' height='"+(height-36)+"'></div>";	
	}

	if(info == 'viewTranscripts')
	{
		var newdiv = document.createElement('div');
		newdiv.innerHTML  = "<div class=\"userInfoTitle\" style=\"cursor:move;\"><b>"+lang62+"</b><span style='float:right;cursor:pointer;'><img src='images/close.gif' onclick='closeMdiv(\""+info+"\");'></span></div>";
		newdiv.innerHTML += "<div><iframe style='border:0;' src='"+url+"' width='"+(width)+"' height='"+(height-36)+"'></div>";	
	}	

	if(txt)
	{
		var newdiv = document.createElement('div');
		newdiv.innerHTML  = "<div class=\"userInfoTitle\" style=\"padding-top:3px;cursor:move;\"><b>"+lang4+"</b><span style='float:right;cursor:pointer;'><img src='images/close.gif' onclick='closeMdiv(\""+info+"\");'></span></div>";
		newdiv.innerHTML += "<div style=\"min-height:135px;padding-top:10px;\">"+txt+"</div>";
		newdiv.innerHTML += "<div><input class=\"button\" type=\"button\" name=\"close\" value=\"Close Window\" onclick='closeMdiv(\""+info+"\");'></div>";
	}

	newdiv.setAttribute("id",info);
	newdiv.className = "innerInfo";
	newdiv.style.height = height+"px";
	newdiv.style.width = width+"px";
	newdiv.style.top = top+"px";
	
	if(info == 'games' || info == 'shareFiles')
	{
		newdiv.style.overflow = "hidden";	
	}
	
	ni.appendChild(newdiv);

	document.getElementById("oInfo").style.visibility = "visible";
	document.getElementById(info).style.visibility = "visible";
	
	$( "#oInfo" ).draggable();
}
	
/*
* copyright
*
*/

function copyRight()
{
	var html = '';
		html += '<div style="text-align:left;padding-left:15px;padding-top:5px;padding-bottom:5px;">';
		html += 'Software: Text &amp; Audio/Video Chat Rooms<br>';
		html += 'Version: '+version+'<br>';
		html += 'Developers: Pro Chat Rooms<br><br>';
		html += 'Visit: <a href="http://prochatrooms.com" target="_blank">http://prochatrooms.com</a><br>';
		html += 'Support: <a href="http://support.prochatrooms.com" target="_blank">http://support.prochatrooms.com</a><br><br>';
		html += '&copy;Copyright 2007-'+new Date().getFullYear()+' All Rights Reserved.';
		html += '</div>';

	return html;
}