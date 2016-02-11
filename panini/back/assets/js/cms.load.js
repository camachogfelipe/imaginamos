(function ($, CMS) {
    
    /* Cargando wysi */
    $('.wysiwyg').livequery(function(){
        return $(this).cleditor();
    });
    
    /* == Alert Box == */
    $(document).on('click', '.alertbox .close', function(e){
        e.preventDefault();
        $(this).parents('.alertbox').fadeOut(function(){
            return $(this).remove();
        });
    });
    
    // Desaparece los alertbox automaticamente
    $('.alertbox').livequery(function(){
        var $this = $(this);
        
        // Si posee la clase "no-delay" no ejecutar la funcion
        if(!$this.hasClass('no-delay')){
            setTimeout(function(){
                return $this.fadeOut(function(){
                    return $(this).remove();
                });
            }, 10000);
        }
        
        // Coloca el boton close si este no fue definido
        if( ! $this.data('no-close')){
            $this.prepend(function(){
                return $('<a />', {
                   href : '#',
                   "class" : 'close',
                   html : '&times;'
                });
            });
        }
    });
    
    
})(window.jQuery, window.CMS);