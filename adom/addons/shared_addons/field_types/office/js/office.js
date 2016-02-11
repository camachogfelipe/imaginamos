(function($){
    var field = '[data-fieldtype="office"]';

    function get_offices(){
        var building_id = $('[name="'+$(this).data('building-name')+'"]').val(),
        user_id = $(this).data('user-id');
        
        if(building_id){
            $.ajax({
                url : 'streams_core/public_ajax/field/office/get_all_by_building',
                type: 'post',
                dataType : 'json',
                data: {
                    building_id : building_id,
                    user_id : user_id
                },
                beforeSend : function(){
                    return $(field).empty();
                },
                success: function (data) {
                    if(data){
                        $.each(data, function(){
                            
                            
                            var option = $('<option />', {
                                'value' : this.id,
                                'text' : this.name
                            }).appendTo(field);

                            if(this.selected === true){
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
        $('[name="'+$(field).data('building-name')+'"]').change(function(){
            get_offices.call($(field));
        });

        get_offices.call($(field));
    });

})(jQuery);