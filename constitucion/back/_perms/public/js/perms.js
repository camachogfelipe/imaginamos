(function($) {
    var $table = $('#perms-contenido');

    $(document).on('change', '[name="group"]', function() {
        if ($(this).val() !== '' && $(this).val()) {
            $table.addClass('opacity-loading');
            return window.location.href = $(this).data('url') + '/' + $(this).val();
        }
    });

    $(document).on('change', '.uncheck-all', set_checkboxes);

    function set_checkboxes() {
        var checked = $(this).is(':checked'),
                checkboxes = $(this).parents('tr').find('[type="checkbox"]').not(this),
                checkboxesNot = $(this).parents('tr').find('[type="checkbox"]:checked').not(this);

        if (checked === true) {
            checkboxes.iButton('disable', false);
        } else {
            checkboxesNot.iButton('toggle', false);
            checkboxes.iButton('disable', true);
        }
    }

    $(function() {
        $table.find('[type="checkbox"]').iButton({
            labelOn: "Si",
            labelOff: "No",
            change: function($input) {
                var value = ($input.is(':checked')),
                        url = $table.data('save-url') + '/' + $input.val() + '/' + $input.data('type') + '/' + (value ? 1 : 0);
                return $.getJSON(url);
            }
        });

        $table.find('[type="checkbox"].uncheck-all:not(:checked)').each(function() {
            return set_checkboxes.call(this);
        });
    });
})(window.jQuery);