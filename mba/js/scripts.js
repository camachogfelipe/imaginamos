/*
This script is copyright (c) 2006 Elliot Swan under the
Creative Commons Attribution-ShareAlike 2.5 license:
http://creativecommons.org/licenses/by-sa/2.5/

More information on this script can be found at:
http://www.elliotswan.com/2006/06/07/rounded-images/
*/

window.onload = function() { ES.Round.create('imagewrapper, secondimage2'); }

var ES = new Object();

ES.Round =	{
create	:	function(wrapper) {
			for(var i = 1; 4 >= i;  i++) {
				var curve			= document.createElement('span');
					curve.className	= 'curve'+i;
				var target			= document.getElementById(wrapper);
				target.appendChild(curve);
				}
			}
}


