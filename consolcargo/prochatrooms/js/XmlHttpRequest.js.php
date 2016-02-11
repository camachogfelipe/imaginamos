<?php

/**
 * Declare header
*/

header("content-type: application/x-javascript");

?>

/*
* Gets the browser specific XmlHttpRequest Object 
*
*/

function getXmlHttpRequestObject() 
{
	if (window.XMLHttpRequest) 
	{
		return new XMLHttpRequest();
	} 
	else if(window.ActiveXObject) 
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	} 
	else 
	{
		alert("Status: Cound not create XmlHttpRequest Object.  Consider upgrading your browser.");
	}
}