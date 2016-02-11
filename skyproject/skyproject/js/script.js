$(function(){
	$('#sound.hover').mouseover(function(){
		$('embed').remove();
		$('body').append('<embed src="ahooga.wav" autostart="true" hidden="true" loop="false">');     
	}); 
});