
/*
* show myplugin
* 
*/

function myplugin()
{
	var myPluginTitle = 'My Plugin';
	var myPluginUrl = 'plugins/example/index.php';
	var myPluginImage = 'plugins/example/images/image.gif';
	var myPluginHeight = '100';
	var myPluginDiv = 'myPluginDiv';
	var myPluginShowContent = 'showMyPluginContent';
	var myPluginContent = 'myPluginContent';

	/**

	DO NOT EDIT BELOW

	**/

	// if div does not exist
	if(!document.getElementById(myPluginDiv))
	{
		// create div
		var ni = document.getElementById('userContainer');
		var newdiv = document.createElement('div');

		newdiv.setAttribute("id",myPluginDiv);
		newdiv.className = "";
		newdiv.innerHTML = '<div class="roomheader" onclick="toggleHeader(\''+myPluginDiv+'\');"><img style="vertical-align:middle;" src="'+myPluginImage+'">&nbsp;'+myPluginTitle+'</div>';
		newdiv.innerHTML += '<div id="'+myPluginShowContent+'"></div>';

		ni.appendChild(newdiv);
	}

	// if div does not exist
	if(!document.getElementById(myPluginContent))
	{
		// create div

		var ni = document.getElementById(myPluginShowContent);
		var newdiv = document.createElement('iframe');

		newdiv.setAttribute("id",myPluginContent);
		newdiv.src = myPluginUrl;
		newdiv.height = myPluginHeight;
		newdiv.width = "220";
		newdiv.frameBorder = "0";

		ni.appendChild(newdiv);

	}

}