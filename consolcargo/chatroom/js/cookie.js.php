<?php

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* user settings
*
*/

var userRPM = true;
var userRWebcam = false;
var userEntryExitSFX = true;
var userNewMessageSFX = true;
var userSFX = true;

/*
* create cookie
*
*/

function createCookie(name,value,days)
{
	if(days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

createCookie('login','',-1);

/*
* read cookie
*
*/

function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}

	return null;
}

/*
* get cookie
*
*/

var gotCookie1 = readCookie('myTextStyle');
var gotCookie2 = readCookie('myOptions');

function getCookie()
{
	if(gotCookie1)
	{
		gotCookie = decodeURI(gotCookie1).split("|");

		mBold = gotCookie[0];
		mItalic = gotCookie[1];
		mUnderline = gotCookie[2];
		textColor = gotCookie[3];
		textSize = gotCookie[4];
		textFamily = gotCookie[5];
	}

	if(gotCookie2)
	{
		gotCookie = decodeURI(gotCookie2).split("|");

		userRPM = gotCookie[0];
		userRWebcam = gotCookie[1];
		userEntryExitSFX = gotCookie[2];
		userNewMessageSFX = gotCookie[3];
		userSFX = gotCookie[4];
	}
}