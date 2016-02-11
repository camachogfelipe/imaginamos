$(function() {
				
    var cssSmall = {
        width: 68,
        height: 80,
        marginTop: 30
    };
    var cssMedium = {
        width: 68,
        height: 80,
        marginTop: 30
    };
    var cssLarge = {
        width: 68,
        height: 80,
        marginTop: 10
    };
    var aniConf = {
        queue: false,
        duration: 300
    };

    $('#carousel')
    .children().css(cssSmall)
    .eq(1).css(cssMedium)
    .next().css(cssLarge)
    .next().css(cssMedium);
					
    $('#carousel').carouFredSel({
        width: '100%',
        auto:false,
        height: 140,
        items: {
            visible: 7,
            start: window.mitad.value - 4
        },
        scroll: {
            items: 1,
            duration: aniConf.duration,
            onBefore: function( data ) {
                data.items.visible.eq(0).animate(cssSmall, aniConf);
                data.items.visible.eq(1).animate(cssSmall, aniConf);
                data.items.visible.eq(2).animate(cssSmall, aniConf);
                data.items.visible.eq(3).animate(cssLarge, aniConf);
                data.items.visible.eq(4).animate(cssSmall, aniConf);
                data.items.visible.eq(5).animate(cssSmall, aniConf);
                data.items.visible.eq(6).animate(cssSmall, aniConf);
            }
        },
        prev: '#prev',
        next: '#next'
    });

});