// JavaScript Document
$(document).ready(function(){
    
	$(".ver-campos-show").click(function()
           {
           $(".campos-show").css({
				'display' : 'block'	
			})	
			$(this).css({
				'display' : 'none'	
			})	
        });
	
    $(".instrumento2").click( function(){
        if ( $(this).css("background-position") == "29px 0%" ) {
				
            $(this).css("background-position","bottom")
        }else{
            $(".instrumento2").css("background-position","bottom")
            $(this).css("background-position","29px 0%")
        }
        
        
			
    });
    var alt1 = $(".directorio-iz").css("height");
    var alt2 = $(".directorio-de").css("height");
	
    if (alt1 >= alt2){
        $(".directorio-de").css("height", alt1);
    }
	
	
    $(".resultado").hover(
		
        function(){
            $(".resultado-ico", this).css({
                'background-position': "top"
            });
				
				
        },
        function(){
            $(".resultado-ico", this).css({
                'background-position': "bottom"
            });
        }
        );
		
    var alt3 = $(".perfil-cont-iz").css("height");
    var alt4 = $(".perfil-cont-de").css("height");
	
    if (alt3 >= alt4){
        $(".perfil-cont-de").css("height", alt3);
    }
	
    var alt5 = $("#perfil-cont-iz").css("height");
    var alt6 = $("#perfil-cont-de").css("height");
	
    if (alt5 >= alt6){
        $("#perfil-cont-de").css("height", alt5);
    }
	
	
});