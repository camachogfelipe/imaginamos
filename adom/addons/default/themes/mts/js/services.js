/*-- ISOTOPO --*/
$(function() {
    var $container = $('.isotope-gallery');

    
        $container.isotope({
            itemSelector: '.isotope-item'
        });
   
    $container.on('click', '.isotope-item', function() {
        $(this).toggleClass('large');
        $(this).siblings().removeClass('large');
        $container.isotope('reLayout');
        $(this).toggleClass('large');
    });
});
$(document).ready(function(){
    var id=$('#item_id').val();
    if (id && id!='ciudad'){
        $('#item_'+id).addClass( "large" );
        $('html, body').animate({
            scrollTop: $('#item_'+id).offset().top-120
        }, 200);
            
    }
    $('#city_id').change(function(){
        window.location = SITE_URL+'services/index/ciudad/'+jQuery(this).val();
    });
        
});

