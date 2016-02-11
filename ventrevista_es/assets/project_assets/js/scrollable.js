jQuery(function($){
		$('div.scroll').scrollTo(0);
		$.scrollTo(0);
		var $paneTarget = $('#targets');
			$('#inicio').click(function(){
				$paneTarget.stop().scrollTo( 'li#primer_contenido', 2000 );
			});
			$('#que').click(function(){
				$paneTarget.stop().scrollTo( 'li#segundo_contenido', 2000 );
			});
			$('#como').click(function(){
				$paneTarget.stop().scrollTo( 'li#tercer_contenido', 2000 );
			});
			$('#porque').click(function(){
				$paneTarget.stop().scrollTo( 'li#cuarto_contenido', 2000 );
			});
			$('#prueba').click(function(){
				$paneTarget.stop().scrollTo( 'li#quinto_contenido', 2000 );
			});
			$('#packs').click(function(){
				$paneTarget.stop().scrollTo( 'li#sexto_contenido', 2000 );
			});
			$('#contacto').click(function(){
				$paneTarget.stop().scrollTo( 'li#septimo_contenido', 2000 );
			});
})