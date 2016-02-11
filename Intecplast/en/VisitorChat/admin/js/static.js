$(document).ready(function(){
    
    
    $("#logout").click(function(){
    	$("#mask_overlay").css("height", visina+'px').css("width", dolzina+'px');
    	$("#logout_form").css("top", (visina/2)-(visina_obrazca/2)).fadeIn('slow'); 
    	$("#mask_overlay").fadeIn();   	
    });   
    
    $.Resize = function()
    {
        visina = $(window).height();
        dolzina = $(window).width();
        visina_obrazca = $("#logout_form").height();

                                    $(".l3").click(function(){
                                            $("#form").submit();
                                    });

        w_talk = (dolzina * 1)-60;

        $(".talking_area").css("width", (w_talk)+'px');
            $(".talking_area").css("height", (visina-125)+'px');
        $("#users_online,.g_main").css("height", (visina-180)+'px');        
    }
    
    $(window).resize(function() {
      $.Resize();
    });    
    
    $.Resize();
    
    function AdminOnline()
    {
        $.ajax({
           url: 'index.php?page=AdminOnline&rand='+Math.random(),
           success: function(data) {
				setTimeout(AdminOnline, 10000);
		   }
        });    	
    }
    
    AdminOnline();
    	    	
    $(".cancel,.submit").click(function(){
    	$("#mask_overlay").fadeOut();
    	$("#logout_form").fadeOut();
    });    
		
});