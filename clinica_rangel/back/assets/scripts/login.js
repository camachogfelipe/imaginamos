/**
 * serializeObject
 * @author Rigo B Castro - rigo.castro@imaginamos.co
 * @version 1.0
 */
$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};


var Loading = {
    start : function(msg){
        
        this.loader = $('<div />').appendTo('body');
        
        var 
        overlay = $('<div id="overlay" />')
        .appendTo(this.loader)
        .css({
            opacity : .1
        })
        .fadeIn();
          
        /* Agregando el preloader */
        $('<div id="preloader" />').appendTo(this.loader).text(msg).fadeIn();
        
        return this;
    },
    
    end : function(){
        this.loader.fadeOut(function(){
            return $(this).remove();
        })
    }
}

$(document).ready(function () {	  
    onfocus();
    $(".on_off_checkbox").iphoneStyle();
    $('.tip a ').tipsy({
        gravity: 'sw'
    });
    $('#login').show().animate({
        opacity: 1
    }, 2000);
    $('.logo').show().animate({
        opacity: 1,
        top: '30%'
    }, 800,function(){			
        $('.logo').show().delay(1200).animate({
            opacity: 1,
            top: '0%'
        }, 300,function(){
            $('.formLogin').animate({
                opacity: 1,
                left: '0'
            }, 300);
            $('.userbox').animate({
                opacity: 0
            }, 200).hide();
        });		
    })	
});	

$('.userload').click(function(e){
    $('.formLogin').animate({
        opacity: 1,
        left: '0'
    }, 300);			    
    $('.userbox').animate({
        opacity: 0
    }, 200,function(){
        $('.userbox').hide();				
    });
});

/******************************/
/*   LOGIN BEGIN   */
/******************************/

$('[name=login]').submit(function(){
    
    var 
    $this = $(this),
    data = $this.serializeObject();
        
    if(data.nombre == "" || data.password == "")
    {
        showError("Ingrese usuario / clave");
    } else {
        
        hideTop();
        
        
        $.ajax({
            url : $this.attr('action'),
            data : data,
            type : $this.attr('method'),
            dataType : 'json',
            
            beforeSend : function(){
                hideTop();
                
                Loading.start('Validando...');
            },
            
            success : function(json){
                var ok = json.ok;
                if(ok == true){   
                    $("#login").animate({
                        opacity: 1,
                        top:'49%'
                    }, 200,function(){
                        $('.userbox').show().animate({
                            opacity:1
                        }, 500);
                        $("#login").animate({
                            opacity: 0,
                            top:'60%'
                        }, 500,function(){
                            $(this).fadeOut(200,function(){
                                $(".text_success").slideDown();
                                $("#successLogin").animate({
                                    opacity: 1,
                                    height: "200px"
                                },500);   			     
                            });							  
                        })	
                    })	
				
                    setTimeout( "window.location.href='"+json.redirect_url+"'", 3000 ); 
                }else{
                    showError("Datos inválidos, intente nuevamente");
                    $('.inner').jrumble({
                        x: 4,
                        y: 0,
                        rotation: 0
                    });	
                    $('.inner').trigger('startRumble');
                    setTimeout('$(".inner").trigger("stopRumble")',500);
                    setTimeout('hideTop()',5000);
                }
            },
            
            complete : function(){
                Loading.end();
            }
        });
	
  
    }	
    

    return false;
});


/******************************/
/* END LOGIN */
/******************************/

/******************************/
/*   RECOVERY BEGIN   */
/******************************/

$('[name="recovery"]').on('submit', function(){
    var $this = $(this);
    
    
    $.ajax({
        url : $this.attr('action'),
        dataType : 'json',
        data : $this.serialize(),
        type : $this.attr('method'),
       
        error : errorApp,
        
        beforeSend : function(){
            Loading.start('Recuperando contraseña...');
            return  hideTop();
        },
        
        success : function(json){
            if(typeof json !== 'undefined'){
                
                if(json.ok){
                    $this.html(json.messages);
                } else {
                    showError(json.messages);
                }
                
            } else {
                errorApp();
            }
        },
        
        complete : function(){
            return Loading.end();
        }
    });
    
    return false; 
});


/******************************/
/* END RECOVERY */
/******************************/

$('#alertMessage').click(function(){
    hideTop();
});

function showError(str, rumble){
    $('#alertMessage').addClass('error').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '0'
    }, 500);
    
    if(rumble === true && typeof rumble !== 'undefined'){
        $('.inner').jrumble({
            x: 4,
            y: 0,
            rotation: 0
        });	
        $('.inner').trigger('startRumble');
        setTimeout('$(".inner").trigger("stopRumble")',500);
    }
    
    return setTimeout('hideTop()',5000);
}

function showSuccess(str){
    $('#alertMessage').removeClass('error').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '0'
    }, 500);	
}

function onfocus(){
    if($(window).width()>480) {					  
        $('.tip input').tipsy({
            trigger: 'focus', 
            gravity: 'w' ,
            live: true
        });
    }else{
        $('.tip input').tipsy("hide");
    }
}

function hideTop(){
    $('#alertMessage').animate({
        opacity: 0,
        right: '-20'
    }, 500,function(){
        $(this).hide();
    });	
}	


function errorApp(){
    return showError('Error en la aplicación, inténte de nuevo más tarde...');
}

