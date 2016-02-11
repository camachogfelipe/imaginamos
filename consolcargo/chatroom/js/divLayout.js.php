<?php

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* resize main divs
*
*/

function resizeDivs()
{
	var w = 0, h = 0;

	// check browser type and get window sizes
  	if( typeof( window.innerWidth ) == 'number' ) 
	{
    	// Non-IE
    	w = window.innerWidth;
		h = window.innerHeight;
 	} 
	else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) 
	{
    	// IE 6+ in 'standards compliant mode'
    	w = document.documentElement.clientWidth;
    	h = document.documentElement.clientHeight;
  	} 
	else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) 
	{
    	// IE 4 compatible
    	w = document.body.clientWidth;
    	h = document.body.clientHeight;
  	}

	// set main container width
	document.getElementById("mainContainer").style.width = (w - 7) + "px";
	document.getElementById("mainContainer").style.height = (h - 7) + "px";

	// set the width of the userlist
	var userWidth = 236;

	// set the width of the chat screen
	var chatWidth = (w - userWidth) - 29;

	// new chat window width
	document.getElementById("chatContainer").style.width = chatWidth + "px";

	// new chat window height
	document.getElementById("chatContainer").style.height = (h - 224) + "px";

	// new user window width
	document.getElementById("userContainer").style.width = userWidth + "px";

	// new user window height
	document.getElementById("userContainer").style.height = (h - 120) + "px";

	// new top window width
	document.getElementById("topContainer").style.width = (w - 19) + "px";

	// new options window width
	document.getElementById("optionsContainer").style.width = ((w - userWidth) - 25) + "px";

	// new options message bar width
	document.getElementById("optionsBar").style.width = ((w - userWidth) - 125) + "px";

	// new options icon bar width
	document.getElementById("optionsIcons").style.width = ((w - userWidth) - 125) + "px";
	
	// disable whisper
	if(!whisperOn && document.getElementById("uwhisperID"))
	{	
		document.getElementById("uwhisperID").style.display = "none";			
	}	
}

window.onresize = function() 
{
	resizeDivs();
}