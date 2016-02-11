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

        w_talk = (dolzina * 0.50)-50;
        w_vis = (dolzina * 0.50)-50;

        $(".talking_area").css("width", (w_talk)+'px');
            $("#users_online,.g_main").css("height", (visina-180)+'px');	
        $(".visitors").css("width", (w_vis)+'px');        
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
    	$("#ban_form").fadeOut();
    });    
    
    $("#search_box").click(function(){
 
    	$("#mask_overlay").css("height", visina+'px').css("width", dolzina+'px');
    	$("#ban_form").css("top", (visina/2)-($("#ban_form").height()/2)).css("left", (dolzina/2)-($("#ban_form").width()/2)).fadeIn('slow');
    	$("#mask_overlay").fadeIn();    	
    });
    
    $("#search").click(function(){
    	
    	$("#form").submit();
    	
    	
    });

			$(".u_options").click(function(){
				
				// Prepare this element
				var c_this = $(this);
				
				// hides all of the user options that could have been opened before
				$(".user_options").remove();
				
				// Clears all hover styles of #users_online a and sets the hover class on the a we clicked on
				//$("#users_online a").removeClass("sel");
				$(this).addClass("sel");
				
				var rel = c_this.attr('rel').split(';');
				var position = $(".users").position();
				var obj_pos = $(this).position();

				$(".users").append('<div class="user_options" style="position:fixed; left:'+(position.right+240)+'px; top:'+(obj_pos.top+141)+'px;"><a href="#" alt="view"">View conversation</a><a href="index.php?page=historydelete&sess='+rel[0]+'&email='+rel[1]+'">Delete conversation</a></div>');

			    $("a[alt='view']").click(function(){
			    	$(".user_options").remove();
			    	
			    	$(".visitors").fadeIn('slow');
			    		
			    	var session = rel[0];
			    	var email = rel[1];
			    	
			    	    	
			        $.ajax({
			           url: 'index.php?page=conversation&id='+session+'&email='+email+'&rand='+Math.random(),
			           success: function(data) {
							$(".g_main").html(data);
							
					   }
			        });
			        
			    	
			    });
			    
			    
			    
			});    
		
});