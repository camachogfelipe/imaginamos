(function($, CMS, undefined) {
    var $table = $('#oauth-table');
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
    })
    
    $(document).on('click', '.table-oauth', function() {
        $('#tableOAthModal').modal('show');
    });
    
    $(document).on('change', '#uri_config', function() {
        var uri = $('#uri_config').val();
        $.post(CMS.globals.site_url+'cms/users/save_info_oauth_config',{
            uri :uri
        },function(json){
            
            },'json');
    });
    
    $(document).on('click', '.actulizar', function() {
        location.reload();
    });
    
    $(document).on('click', '.guardar', function() {
        var $this = $(this),$form = $this.parents('.datos_oauth');
        $.post(CMS.globals.site_url+'cms/users/save_info_oauth',$form.serialize(),function(json){
            if(json.ok === false){
                var $button = $form.find('.sb_ch1');
                $button.iButton("toggle", false);
            }
        },'json');
    });
    
})(window.jQuery, window.CMS);