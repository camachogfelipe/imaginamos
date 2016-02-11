$(document).ready(function() {
    $('#data_table').dataTable({
        "oLanguage": {
            "sUrl": "addons/shared_addons/modules/entities/js/dataTables.spanish.txt"
        },
        "bSort": false
    });
});
(function($){
    jQuery(document).ready(function() {
        jQuery("#country_id").change(function() {
            //- Carga las ciudades por Paises
            jQuery.getJSON('admin/properties/get_cities/'+jQuery(this).val(),  
                function(data) {		
                    var items = [];
                    items.push('<option value="">Seleccione...</option>');
                    jQuery.each(data, function(key, val) {
                        items.push('<option value="' + val.id + '">' + val.name + '</option>');
                    });
                    jQuery("#city_id").html(items.join('')).trigger("liszt:updated");             	
                });
        });
    
        jQuery("#city_id").change(function() {
            //- Carga las edificios por ciudades
            jQuery.getJSON('admin/properties/get_buildings/'+jQuery(this).val(),  
                function(data) {		
                    var items = [];
                    items.push('<option value="">Seleccione...</option>');
                    jQuery.each(data, function(key, val) {
                        items.push('<option value="' + val.id + '">' + val.name + '</option>');
                    });
                    jQuery("#building_id").html(items.join('')).trigger("liszt:updated");              	
                });
        });
    });
})(jQuery);