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
                        $('#splashy').removeClass('splashy-star_empty');
                        $this_dato.addClass('splashy-star_full');
                     } else {
                       $('#splashy').removeClass('splashy-star_full');
                       $this_dato.addClass('splashy-star_empty');
                    }
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
});


