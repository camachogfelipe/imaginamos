(function($) {
    var cp = '.colorpicker';
    $(function() {
        $(cp).each(function() {
            var options = $(this).data();
            $(this).miniColors(options);
        });
    });
})(window.jQuery);