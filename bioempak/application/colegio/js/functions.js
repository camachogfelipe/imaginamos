/*$(function()
			{
				$('.scroll-pane').each(
					function()
					{
						$(this).jScrollPane(
							{
								showArrows: $(this).is('.arrow')
							}
						);
						var api = $(this).data('jsp');
						var throttleTimeout;
						$(window).bind(
							'resize',
							function()
							{
								if ($.browser.msie) {
									// IE fires multiple resize events while you are dragging the browser window which
									// causes it to crash if you try to update the scrollpane on every one. So we need
									// to throttle it to fire a maximum of once every 50 milliseconds...
									if (!throttleTimeout) {
										throttleTimeout = setTimeout(
											function()
											{
												api.reinitialise();
												throttleTimeout = null;
											},
											50
										);
									}
								} else {
									api.reinitialise();
								}
							}
						);
					}
				)

			});*/


$(document).ready(function() {
	$('.texto_programa1').hide();
    $("#slider").sudoSlider({
			numeric:true,
			continuous:true,
			prevNext:true,
			auto:true,
			speed:700,
			pause:3500,
			});
			
	$('.title_programa').click(function(e) {
		/*$('.title_programa').removeClass('prog_open');
		$('.texto_programa1').slideUp(300);
        $(this).parent().children('.texto_programa1').slideToggle(300);
		$(this).addClass('prog_open');*/
		if( $(this).parent().children('.texto_programa1').is(":hidden") ){
				$('.texto_programa1').slideUp(300);
				$(this).parent().children('.texto_programa1').slideDown(300);
				$('.title_programa').removeClass('prog_open');
				$(this).addClass('prog_open');
				
		}else{

			$(this).parent().children('.texto_programa1').slideUp(300);
				$(this).removeClass('prog_open');
		}
    });
	
	
});