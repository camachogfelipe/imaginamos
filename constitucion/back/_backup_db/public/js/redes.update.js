(function($, CMS, undefined) {
    $(document).on('click', '.editar_red_social', function() {
        var $this = $(this);
        $this.attr('readonly', false);
    });

    $(document).on('blur', '.editar_red_social', function() {
        var $this = $(this);
        $this.attr('readonly', true);
        $.post('redes/edit', {id: $this.data('reg-id'), value: $this.val()}, function(json) {
        }, 'json');
    });

})(window.jQuery, window.CMS);