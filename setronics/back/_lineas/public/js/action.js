$(document).ready(function() {

    $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    $('#producto_id').change(function(e) {
        $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    });

    $('.table').on('mouseenter', '.starSelect', function() {
        if ($(this).children('i.splashy-star_empty').length) {
            $(this).children('i.mbox_star').css('visibility', 'visible');
        }
    }).on('mouseleave', '.starSelect', function() {
        if ($(this).children('i.splashy-star_empty').length) {
            $(this).children('i.mbox_star').css('visibility', '');
        }
    });

    $(".mbox_star").click(function(e) {
        $dato = 'id=' + $(this).data('id');
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $dato,
            dataType: 'json',
            success: function(jx) {
                alert('Hola mundo');
                if (jx.ok) {
                    $(this).toggleClass('splashy-star_empty splashy-star_full');
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
});


