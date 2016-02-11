(function ($) {
	Drupal.behaviors.baloto_puntos_venta_importacion = {
    attach: function(context, settings){
      if($('#ciudad_establecimiento_buscar span.customStyleSelectBox').length == 0){
        //$('#ciudad_establecimiento_buscar select').customSelect();
      }
      $('.group-right').css('display', 'none');
      texto = $('.group-right .field.field-name-field-punto-city:eq(0) .field-items');
      $('#depto_active').html(texto);
      $('.form-type-select').each(function(){
      if($('.customStyleSelectBox',this).length == 0){
        $('select',this).customSelect();
      }
    })
    }
	}
})(jQuery);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
