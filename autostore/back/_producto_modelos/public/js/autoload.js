$(document).ready(function() {

   $("#marca_id").change(function () {
           $("#marca_id option:selected").each(function () {
            elegido=$(this).val();
            $.post("producto_modelos/get_list_combox", { id_value: elegido, models : 'marca',related_model : 'modelo' }, function(data){
            $("#modelo_id").html(data);
            });            
        });
   });

});