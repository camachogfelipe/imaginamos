$(document).ready(function() {
     $('.edit_line').click(function() {
        var $this = $(this);
        $this.attr('readonly', false);
    });

    $('.edit_line').blur( function() {
        var $this = $(this);
        $this.attr('readonly', true);
        $.post('contactos/edit', {field:$this.data('filed'), value: $this.val()}, function(json) {
        }, 'json');
    });
    
    $('.edit_line').change( function() {
        var $this = $(this);
        $this.attr('readonly', true);
        $.post('contactos/edit', {field:$this.data('filed'), value: $this.val()}, function(json) {
        }, 'json');
    });
   

});