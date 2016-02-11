function launchChat() 
{ 
	createCookie('login','login',1);
	
	var xOffSet = (screen.width - 225) / 2;
	var yOffSet = (screen.height - 500) / 2;
	var features = 'width=900,height=700,toolbar=0,directories=0,menubar=0,status=0,location=0,scrollbars=0,resizable=1';
	var winName = 'prochatrooms';
	var chatUrl = 'http://'+location.hostname+'/prochatrooms/index.php?uid='+userID+'&uname='+userName+'&room='+roomID;
	myWin = window.open(chatUrl,winName,features);
}

function createCookie(name,value,days) 
{
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
