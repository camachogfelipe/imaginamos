$(document).ready(function() {
    $('#data_table').dataTable({
        "oLanguage": {
            "sUrl": "addons/shared_addons/modules/entities/js/dataTables.spanish.txt"
        },
        "bSort": false
    });
    jQuery("#country_id").change(function() {
        window.location.href='admin/entities/cities/index/'+jQuery(this).val();
    });
});
jQuery(function($){
	
    // generate a slug when the user types a title in
    pyro.generate_slug('input[name="name"]', 'input[name="slug"]');
	
});

(function ($) {
    $(function () {
        $("body").on("keyup", "#countries.create" ,function(e) {
            pyro.generate_slug($(this).find('input[name="name"]'), $(this).find('input[name="slug"]'));
        });
		
    });
})(jQuery);
 
