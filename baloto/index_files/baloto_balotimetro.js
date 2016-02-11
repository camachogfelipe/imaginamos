CONTEXT = "body";
(function ($) {
  Drupal.behaviors.baloto_balotimetro = { attach: function(context, settings) {
    //$('.block-baloto-balotimetro .form-item.form-type-textfield > input').each(function(){
    $('.block-baloto-balotimetro .form-item.form-type-textfield .p-gif').each(function(){
      var div_balota_input = $(this);
      if($(div_balota_input).hasClass('p-anima-gif')){
        $('.block-baloto-balotimetro .form-item.form-type-textfield > input').css('display','none');
        window.setTimeout(function(){
          $(div_balota_input).removeClass('p-anima-gif');
          $('.block-baloto-balotimetro .form-item.form-type-textfield > input').css('display','block');
          //$(div_balota_input).css('font-size','200%');
          //console.log(div_balota_input);
        },3000);
      }
    });
    var alto = $('#views_slideshow_cycle_teaser_section_terminos_uso-como_ganar_cobrar > div:eq(0)').height();
    $('#views_slideshow_cycle_teaser_section_terminos_uso-como_ganar_cobrar').css('height', alto);
  }
}
})(jQuery);
