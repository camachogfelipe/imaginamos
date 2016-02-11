$(document).ready(function() {

    $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    $('#producto_id').change(function(e) {
        $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    });



    $(".mbox_star").click(function(e) {
        $dato = 'id=' + $(this).data('id');
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $dato,
            dataType: 'json',
            success: function(jx) {
                if (jx.ok) {
                    if ($('#splashy').hasClass('splashy-star_empty')) {
                        $('#splashy').removeClass('splashy-star_empty');
                        $('#splashy').addClass('splashy-star_full');
                     } else {
                       $('#splashy').removeClass('splashy-star_full');
                       $('#splashy').addClass('splashy-star_empty');
                    }
                } else {
                    CMS.Modals.alerta('Hubo un error en la aplicacion, favor contacte con el administrador...');
                }
            }
        });

    });
});


