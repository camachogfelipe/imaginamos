(function($){
    var field = '[data-fieldtype="city"]';

    function get_cities(with_value){
        var country_id = $('[name="'+$(this).data('country-name')+'"]').val(),
        value = $(this).data('value');

        if(country_id){
            $.ajax({
                url : SITE_URL + 'streams_core/public_ajax/field/city/get_all_by_country',
                type: 'post',
                dataType : 'json',
                data: {
                    country_id : country_id
                },
                beforeSend : function(){
                    return $(field).empty();
                },
                success: function (data) {
                    if(data){
                        $.each(data, function(id, name){
                            var option = $('<option />', {
                                'value' : id,
                                'text' : name
                            }).appendTo(field);

                            if(value == id && with_value === true){
                                option.attr('selected', 'selected');
                            }
                        });
                    }
                },
                complete : function(){
                    return $(field).trigger("liszt:updated").trigger('change');
                }
            });
        }
    }

    $(function(){
        $('[name="'+$(field).data('country-name')+'"]').change(function(){
            get_cities.call($(field));
        });

        get_cities.call($(field), true);
    });

})(jQuery);