(function($) {
    $.validator.messages.required = "Seleccione al menos una opción";
    
    $(function() {
        $('#evaluations-reply-form').validate({
            errorElement: 'div',
            errorPlacement: function(error, element) {
                var parent =  $(element).parents('.question:first');
                parent.addClass('error');
                error.insertAfter(parent);
            },
            highlight: function(element, errorClass) {
                $(element).parents('.question:first').addClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).parents('.question:first').removeClass(errorClass);
            }
        });
    });
})(jQuery);