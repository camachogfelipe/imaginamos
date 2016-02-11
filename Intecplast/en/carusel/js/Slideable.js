jQuery.fn.slideNews = function(options) {
	var settings = jQuery.extend({}, options);
    return this.each(function(i){
        var itemLength = jQuery("li.slide",this).length;
        var animateSize = settings.slideWidth;
		var slidesView = settings.slidesVisible;
        var slideContainerWidth = itemLength * settings.slideWidth;
        if( settings.slidesVisible < itemLength ){
	        jQuery(".next",this).addClass("next_on");
        }
        var animating = false;
// INICIO - Remueve el "ON" del enlace a anteriores imágenes apenas carga la página.
		thisParent = jQuery(this).parent().parent();
		jQuery(".previous",thisParent).removeClass("previous_on");
// FIN
		jQuery(".navigation p",this).focus(function(){this.blur()});
        jQuery(".next",this).click(function() {
            jQuery(this).parent().blur();
            if( this.className == "next"){return false;};
            if (animating == true) {return false;}
            thisParent = jQuery(this).parent().parent();
                animating = true;
		        animateLeft = parseInt(jQuery(".slides",thisParent).css("left")) - (animateSize);
				
				if (slidesView == 5) {emptyWhite = (animateSize*4)}
				if (slidesView == 4) {emptyWhite = (animateSize*3)}
				if (slidesView == 3) {emptyWhite = (animateSize*2)}
	            if (slidesView == 2) {emptyWhite = (animateSize*1)}
				if (slidesView == 1) {emptyWhite = 0}
			
				
                if (animateLeft + parseInt(jQuery(".slides",thisParent).css("width")) > emptyWhite) {
                    jQuery(".previous",thisParent).addClass("previous_on");
                    jQuery(".slides",thisParent).animate({left: animateLeft}, settings.slideSpeed, function() {
                        jQuery(this).css("left",animateLeft);
                        offset = parseInt(parseInt(jQuery(".slides",thisParent).css("left")) / animateSize); 
                        index = settings.slidesVisible-offset;
                        if( index > settings.slidesVisible ){
                        	emptySlides = jQuery(".empty",thisParent);
					       	if( emptySlides.size() > 0 ){
	                        	emptySlides.eq(0).attr("src", function() { return this.title }).removeClass("empty")
	                        }
                        }
                        if ( index >= itemLength ) {
						
                            jQuery(".next",thisParent).removeClass("next_on");
						
			
                        }
						
				
                        animating = false;
					
                    });
                } else {
                    animating = false;
                }
                return false;
        });
        jQuery(".previous",this).click(function() {
            jQuery(this).blur();
            thisParent = jQuery(this).parent().parent();
            if( this.className == "previous"){return false;};
            if (animating == true) {return false;}
            animating = true;
            animateLeft = parseInt(jQuery(".slides",thisParent).css("left")) + (animateSize);
            if ((animateLeft + parseInt(jQuery(".slides",thisParent).css("width"))) <= parseInt(jQuery(".slides",thisParent).css("width"))) {
	               jQuery(".next",thisParent).addClass("next_on");
                jQuery(".slides",thisParent).animate({left: animateLeft}, settings.slideSpeed, function() {
                    jQuery(this).css("left",animateLeft);
                    offset = parseInt(parseInt(jQuery(".slides",thisParent).css("left")) / animateSize); 
                    if (offset == 0) {
                        jQuery(".previous",thisParent).removeClass("previous_on");
                    }
                    animating = false;
                });
            } else {
                animating = false;
            }
            return false;
        });
    });
};

    function Slideable( wrapperId, options ){
   		jQuery('#'+wrapperId).slideNews(options);
    }