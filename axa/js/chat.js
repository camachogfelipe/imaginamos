/* Jose Montenegro */

$(document).ready (function () {
	
	
	$('#abrir_emergente_chat').click(function () {
			
		var a = $('#chat').css('top');
		
		if (a == '-353px') {
			$('#chat').animate({top: 1, height: 56}, 800);	
			$('#chat').css
			$('#chat').css('background-image', 'url(images/layout/fondo_chat_desactivado.png)');
			
			} else {
			$('#chat').animate({top: -353, height: 410}, 800);
			$('#chat').css('background-image', 'url(images/layout/fondo_chat_activado.png)');
		}
		
	});
	
});

/* Jose Montenegro */