$(document).ready(function() {
    $(".mbox_star").click(function(e) {
        var $dato = 'id=' + $(this).data('id');
        var $this_dato = $(this);
        $.ajax({
            type: "POST",
            url: $this_dato.data('url'),
            data: $dato,
            dataType: 'json',
            success: function(jx) {
                if (jx.ok) {
                    if ($this_dato.hasClass('splashy-gem_remove')) {
                        $this_dato.removeClass('splashy-gem_remove');
                        $this_dato.addClass('splashy-gem_okay');
                     } else {
                       $this_dato.removeClass('splashy-gem_okay');
                       $this_dato.addClass('splashy-gem_remove');
                    }
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
    
    
     

});


