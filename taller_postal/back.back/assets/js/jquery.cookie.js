/*!
 * jQuery Cookie Plugin
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function($) {
    $.cookie = function(key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
                ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function(s) {
            return s;
        } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };
})(jQuery);


function initMenus() {
    $('ul#main_menu ul').hide();
    $('ul#main_menu li').hover(
        function (){
            $(this).addClass('selected'); 
            $(this).find('ul:first').slideDown();
            $(this).find('ul:first li:first').append('<div class="arr"><span></span></div>');
            var parent = $(this).parents('ul').attr('id');
            $('#' + parent + ' ul:visible ').live({
                mouseleave: function(){
                    $(this).hide();
                }
            }
            );
			
        }, 
        function (){
            $(this).removeClass('selected'); 
            $(this).find('ul.level-2').hide()
        });
	
    $('.level-2 li').hover(
        function (){
            $(this).find('ul:first').show('slide', {
                direction: 'left'
            }, 10000);
        }, 
        function (){
            $(this).find('ul').hide()
        });
	
    $('ul#main_menu li').live({
        mouseleave: function(){
            $(this).find('ul').hide();
        }
    }
    );
	

/*$('ul#main_menu li ').hover( function () {
		
		// var checkElement = $(this).next('ul');
		var parent = $(this).parents('ul').attr('id');
		//  var parents = $(this).parents('li');
		var parents = $(this).find('ul.level-1');
		$('#' + parent + ' ul:visible').hide();
		$(parents).show();
		$('#' + parent + ' ul:visible li:first').append('<div class="arr"><span></span></div>');
		
		$("#" + parent + ' ul li').hover( function(){
			var parent2 = $(this).parents('ul');
			//  var parents = $(this).parents('li');
			var parents2 = $(this).find('ul.level-2');
			//$("ul.level-2").hide();
			$(parents2).show();
			$(parents2 + ' li:first').append('<div class="arr"><span></span></div>');
			/*$(parent + ' ul:visible').hide();
			$(parents).show();
			$('#' + parent + ' ul:visible li:first').append('<div class="arr"><span></span></div>');
			
			$(this).live({
				mouseleave: function(){
					$(parents2).hide();
					alert("a");
				   }
			   }
			);
			
		});
		
		$('#' + parent + ' ul:visible ').live({
			mouseleave: function(){
				$(this).hide();
			   }
		   }
		);
		
		
/*								if( (!checkElement.is(':visible'))) {
									$(this).removeAttr('href');
									// $(parents).addClass('hover');
									checkElement.show(); $('#' + parent + ' ul:visible li:first').append('<div class="arr"><span></span></div>');
									return false;
								}
    });*/
	
	
}
$(document).ready(function() {
    initMenus();
});