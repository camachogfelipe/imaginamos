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
                    if ($this_dato.hasClass('splashy-star_empty')) {
                        $this_dato.removeClass('splashy-star_empty');
                        $this_dato.addClass('splashy-star_full');
                     } else {
                       $this_dato.removeClass('splashy-star_full');
                       $this_dato.addClass('splashy-star_empty');
                    }
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
    $(".mbox_star1").click(function(e) {
        var $dato = 'id=' + $(this).data('id');
        var $this_dato = $(this);
        $.ajax({
            type: "POST",
            url: $this_dato.data('url'),
            data: $dato,
            dataType: 'json',
            success: function(jx) {
                if (jx.ok) {
                    if ($this_dato.hasClass('splashy-quantity_capsule_2')) {
                        $this_dato.removeClass('splashy-quantity_capsule_2');
                        $this_dato.addClass('splashy-quantity_capsule_5');
                     } else {
                       $this_dato.removeClass('splashy-quantity_capsule_5');
                       $this_dato.addClass('splashy-quantity_capsule_2');
                    }
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
    
    
});


