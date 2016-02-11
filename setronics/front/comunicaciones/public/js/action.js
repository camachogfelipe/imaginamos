$(document).ready(function() {

    $("#action_ajax").click(function(e) {
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $(this).data('datos'),
            dataType: 'html',
            success: function(html) {
                $('#contenido').html(html); 
            }
        });
    });
});


