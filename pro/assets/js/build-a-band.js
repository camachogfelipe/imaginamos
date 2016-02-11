
(function($){
    
    var DATA_LISTA_MUSICOS = '[data-build-a-band="lista-musicos"]';
    
    // El primer el escenario se activa "clase css"
    $('[data-stage="thumbs"] .escenario:first img').addClass('active');
   
    
    // Evento para los escenarios
    $(document).on('click', '[data-stage="thumbs"] img', function(e){
        var src = $(this).data('stage-large');
       
        $('[data-stage="background"] img').attr('src', src);
       
        $('[data-stage="thumbs"] img').addClass('active').not($(this)).removeClass('active');
       
       
        $('[name="stage_id"]').val($(this).data('stage-id'));
       
        return e.preventDefault();
    });
    function refreshPane() {
        var pane = $('#scroll4').each(function(){
            var api = $(this).data('jsp');
            api.reinitialise();
        });   
    }
    // Evento para los instrumentos
    $(document).on('click', '[data-instruments="thumbs"] [data-instruments="select"]', function(e){
        
        // Si no existe el elemento no agregar y ejecutar
        if($('[data-instruments="list"] .instrumento[data-instrument-id="' + $(this).data('instrument-id')  + '"]').length <= 0){
            
            var clone = $(this).clone().append('<span class="b_cerrar" />').removeClass('active');
        
            $('[data-instruments="list"]').prepend(clone);
            
            var listaMusicos = $('#lista-musicos-base').clone().removeAttr('id').attr('data-instrument-id', clone.data('instrument-id')).attr('data-build-a-band', 'lista-musicos');
            $('#musicos').append(listaMusicos);
            refreshPane();
            
        }
        
        $(this).hide();
            
        ajusta_cont()
        return e.preventDefault();
    });
    
    // Evento Hover del boton cerrar
    $(document).on({
        mouseenter: function () {
            $(this).find('.b_cerrar').show();
        }, 

        mouseleave: function () {
            $(this).find('.b_cerrar').hide();
        }
    }, '.instrumento');
	
    // Click en cualquier instrumento de la lista
    // Muestra el filtro para buscar usuarios
    $(document).on('click', '[data-instruments="list"] .instrumento', function(e){
        $('.filtros-inst-cont').show();
        
        $(DATA_LISTA_MUSICOS + '[data-instrument-id="' + $(this).data('instrument-id') + '"]').show().addClass('active').siblings().hide().removeClass('active');
        
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    // Evento del boton cerrar
    $(document).on('click', '.b_cerrar', function(){
        
        var parent = $(this).parent();
        refreshPane();
        $('[data-instruments="thumbs"]').find('[data-instrument-id="' + parent.data('instrument-id')  + '"]').removeClass('active');
       
        return removeInstrument(parent);
    });
    
    // Evento para borrar al usuario de la lista
    $(document).on('click', '[data-action="eliminar-musico-lista-musicos"]', function(e){
        e.preventDefault(); 
        return $(this).parents('.user').first().slideUp(function(){
            return $(this).remove(); 
        });
		
    });
    
    // Eventos para el botón que abre 
    // el dialogo de buscar usuarios
    $('[data-action="show-search-users-dialog"]').on('click', function(){
        // Ejecutar búsqueda
        return $('#search-users-form').submit();
    });
    
    // Formulario para buscar usuarios
    var lista_user_base = $('#lista-musicos-user-base');
    
    $(document).on('submit', '#search-users-form', function(){
        var $this = $(this), 
        submit_btn = $this.find('[type="submit"]'),
        old_submit_btn_text = submit_btn.val(),
        
        lista_activa = $(DATA_LISTA_MUSICOS + '.active'), 
        users_list = lista_activa.find('.users'),
        instrument_id = lista_activa.data('instrument-id'),
       
        list = $('#search-users-result'),
        table = list.find('table'),
        clone_base = table.find('tr:first');
        
        // Agregando la exclución de usuarios
        lista_activa.find('.user').each(function(index, element){
            return $('<input class="temp_input_user" name="_users[]" type="hidden" value="' + $(element).data('user-id') + '" />').appendTo($this);
        });
       
        // Ejecución del ajax
        $.ajax({
            url : $this.attr('action'),
            type : 'get',
            dataType : 'html',
            data : $this.serialize(),
            
            beforeSend : function(){
                list.empty();
                $('#error-result').hide();
                
                submit_btn.val('Buscando...').css('opacity', .6);
            },
            
            error : function(){
                $('#error-result').show();
            },
           
            success : function(html){
                
                list.html(html).show();
            },
            
            complete : function(){
                submit_btn.val(old_submit_btn_text).css('opacity', 1);
                
                // Borrando los inputs de user id temporales
                $this.find('.temp_input_user').remove();
            }
           
        });
       
        return false;
    });
    
    
    // Evento para el formulario de guardar
    $(document).on('submit', '#save-band-form', function(){
        var $this = $(this), 
        submit_btn = $this.find('[type="submit"]'),
        old_submit_btn_text = submit_btn.val(),
        messages = $this.find('.messages');
       
        $.ajax({
            url : $this.attr('action'),
            type : 'post',
            dataType : 'json',
            data : $this.serialize(),
            
            beforeSend : function(){
                messages.empty().hide();
                submit_btn.val('Guardando...').css({
                    'opacity': '0.6',
                    'font-size' : '20px'
                });
            },
            
            success : function(json){
                // Mostrando las alertas - mensajes con animación de scroll
                messages.html(json.alert_messages).show(function(){
                    return $('html,body').animate({
                        scrollTop: messages.offset().top
                    },'slow');
                });
                
                if(json.ok === true){
                    if(json.continue_url){
                        window.location.href = json.continue_url;
                    }
                }
            },
            
            complete : function(){
                submit_btn.val(old_submit_btn_text).css('opacity', 1).css({
                    'opacity': '1',
                    'font-size' : '41px'
                });
            }
           
        });
       
        return false;
    });
	
        
    // Evento para añadir usuario
    $(document).on('click', '.add-user-to-list', function(e){
        var user_clone = lista_user_base.clone(),
            $this = $(this),
            parent = $this.parents('tr:first');
                             
        // Clon del usuario
        user_clone
        .data('user-id', $this.data('user-id'))
        .removeAttr('id').appendTo( $(DATA_LISTA_MUSICOS + '.active').find('.users') )
        .find('.name-user').text($this.data('name-user')).end()
        .find('.url-user').attr('href', $this.data('url-user')).end()
        .show();
                             
        // Quitar el item
        parent.remove();
                            
        // Agregando input de información del usuario
        $('<input type="hidden" name="users['+$('.instrumento.active').data('instrument-id')+'][]" value="'+$this.data('user-id')+'" />').appendTo(user_clone);
                             
        return e.preventDefault();
    });    
	
    // Cálculo de cantidad de instrumentas para determinar el ancho del contenedor
    function ajusta_cont (){
        var numThumbs = $(".sel-inst-cont div.instrumento").size();
		
        var thumbsWidth = $(".sel-inst-cont div.instrumento").width();
        var marg_tot = numThumbs * 10;
        var widthBox = thumbsWidth * numThumbs + marg_tot;
        $(".sel-inst-cont").width(widthBox);	
        
    // $("#scroll4").reinitialise();
    }
    
    // Función para eliminar un instrumento
    function removeInstrument(elem){
        
        $(elem).hide('slow').remove();
        
        var lista = $(DATA_LISTA_MUSICOS + '[data-instrument-id="'+$(elem).data('instrument-id')+'"]');
        var icono = $('.instrumento' + '[data-instrument-id="'+$(elem).data('instrument-id')+'"]');
       
        lista.remove();
        icono.show();
        
        ajusta_cont();
       
        return $('.filtros-inst-cont').hide();
    }
    
    // ==== API =====
    
    $(function(){
       
       
        // Activando los instrumentos en la lista de thumbs
        // Funcional para el modo editar
        var instruments_on_list = $('[data-instruments="list"] .instrumento');
       
        if(instruments_on_list.length > 0){
            $.each(instruments_on_list, function(){
                $('[data-instruments="thumbs"]').find('.instrumento[data-instrument-id="'+$(this).data('instrument-id')+'"]').addClass('active');
            });
        }
       
    });
 
})(jQuery);

