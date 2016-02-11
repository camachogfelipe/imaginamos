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
    });    
    
    var OptionsTimeout;
    
			$(".g_options").click(function(){
				
				// Prepare this element
				var c_this = $(this);
				
				// hides all of the user options that could have been opened before
				$(".user_options").remove();
				
				// Clears all hover styles of #users_online a and sets the hover class on the a we clicked on
				//$("#users_online a").removeClass("sel");
				$(this).addClass("sel");
				
				var position = $(".g_main").position();
				var obj_pos = $(this).position();

				$(".g_main").append('<div class="user_options" style="position:fixed; left:'+(position.right+240)+'px; top:'+(obj_pos.top+141)+'px;"><a href="index.php?page=groupedit&id='+c_this.attr('rel')+'">Editar Grupo</a><a href="index.php?page=groupdelete&id='+c_this.attr('rel')+'">Borrar Grupo</a></div>');

                                OptionsTimeout = setTimeout(function(){
                                    $(".user_options").remove();
                                },3000);

				$(".user_options").mouseenter(function(){
				    clearTimeout(OptionsTimeout);
				}).mouseleave(function(){
                                    OptionsTimeout = setTimeout(function(){
                                        $(".user_options").remove();
                                    }, 5000);
				});
                                
			});

			$(".u_options").click(function(){
				
				// Prepare this element
				var c_this = $(this);
				
				// hides all of the user options that could have been opened before
				$(".user_options").remove();
				
				// Clears all hover styles of #users_online a and sets the hover class on the a we clicked on
				//$("#users_online a").removeClass("sel");
				$(this).addClass("sel");
				
				var position = $(".users").position();
				var obj_pos = $(this).position();

				$(".users").append('<div class="user_options" style="position:fixed; left:'+(position.right+240)+'px; top:'+(obj_pos.top+141)+'px;"><a href="index.php?page=useredit&id='+c_this.attr('rel')+'">Editar Usuario</a><a href="index.php?page=userdelete&id='+c_this.attr('rel')+'">Borrar Usuario</a></div>');
                                
                                OptionsTimeout = setTimeout(function(){
                                    $(".user_options").remove();
                                },3000);
                                
				$(".user_options").mouseenter(function(){
				    clearTimeout(OptionsTimeout);
				}).mouseleave(function(){
                                    OptionsTimeout = setTimeout(function(){
                                        $(".user_options").remove();
                                    }, 3000);
				});

			});    
		
});