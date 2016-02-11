function initMenu() {
  $('#menu ul').hide();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
	  
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
		$(".active").removeClass("active");   
        $(this).addClass("active");
		/*$(".icono2").removeClass("icono2");*/
        return false;
        }
		
		//$("#icono").addClass("icono2");
		
      }
    );
  } 