/*
* select/unselect tickboxes
*
*/

function checkUncheckAll_del(form) 
{ 
	var SelectAll = form.selectAll; 

	for ( var i=0; i < form.elements.length; i++ ) 
	{ 
		var e = form.elements[i]; 

		if (SelectAll.checked) 
		{ 
			e.checked = true; 
		} 
		else 
		{ 
			e.checked = false; 
		} 
	} 
} 

/*
* load games in a popup window
*
*/

function playGames(gameID)
{
	window.open('../plugins/games/?id='+ gameID,'playGames','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=1,width=400,height=340');
}

/*
* confirm reset admin password
*
*/

function confirmation()
{
	var answer = confirm("Are you sure you want to reset your login password?");

	if (answer == true)
	{
		window.location = "?option=lostPassword";
	}
	else
	{
		// return false;
	}
}