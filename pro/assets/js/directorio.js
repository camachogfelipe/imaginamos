$(document).ready(function(){
    var estado = 0;
    var estado2 = 0;
    var estado3 = 0;
    
    
    $(".t6").click(function()
    {
        if (estado == 0){
            $("#contenu3").scrollbar(428);
            estado = 1;
        }
		
			
    });
    $(".t7").click(function()
    {
           
        if (estado2 == 0){
            $("#contenu4").scrollbar2(428);
            estado2 = 1;
        }
		
			
    });
    $(".comboBox1").msDropDown().data("dd");
		
   
		
		
    var t1 = setTimeout("cierra_slide()",5000);
		
});
	
function cierra_slide(){
    $(".conSlider").css({
        'display':"none"
    })
    $(".bgSlider").animate({
        'height':"0",
        'margin-bottom':'-10'
    },800)
		
}

// Funciones

(function($){
    
    // Formulario para crear directorio
    $(document).on('submit', '#crear-directorio', function(){
        var $this = $(this),
        $msg = $this.find('.messages'),
        $btn = $this.find('[type="submit"]');
       
        if(!$this.hasClass('loading')){
       
            $.ajax({
                url : $this.attr('action'),
                data : $this.serialize(),
                type : $this.attr('method'),
                dataType : 'json',
           
                beforeSend : function(){
                    $msg.empty().hide();
                    $btn.val('Publicando...');
               
                    $this.addClass('loading');
					$btn.css({
						'opacity': '1',
						'font-size' : '20px'
					});
                },
           
           
                success : function(json){
                    $msg.html(json.alert_messages).show();
                    
                    if(json.ok && json.continue_url){
                        window.location.href = json.continue_url;
                    }
                },
           
                complete : function(){
                    $btn.val('Publicar');
                    $this.removeClass('loading');
					
					$btn.css({
						'opacity': '1',
						'font-size' : '27px'
					});
                }
            });
       
        }
       
        return false;
    });
    
    // Borrando un anuncio
    $(document).on('click', '[data-action="delete-anuncio"]', function(e){
        var $this = $(this);
       
       
        $('#delete-anuncio-modal').dialog({
            modal : true,
            buttons : {
                Aceptar : function(){
                    $.ajax({
                        url : $this.attr('href'),
                        dataType : 'json',
          
                        success : function(){
                            window.location.reload();
                        }
                    });
                   
                    $(this).dialog('close');
                },
                Cancelar : function(){
                    $(this).dialog('close');
                }
            }
        });
        
        return e.preventDefault();
    });
    
    
})(jQuery);
